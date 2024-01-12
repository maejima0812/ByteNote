<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{

    public function index(Post $post)
    {
       
        $posts = $post->get();
$topStores = Store::select('stores.id', 'stores.name', \DB::raw('AVG(posts.runk) as averageRunk'))
    ->join('posts', 'stores.id', '=', 'posts.store_id')
    ->groupBy('stores.id', 'stores.name')
    ->orderByDesc(\DB::raw('AVG(posts.runk)')) // AVG(posts.runk)を直接指定
    ->limit(5)
    ->get();

return view('posts.index', compact('posts', 'topStores'));
    }
    public function post(Request $request)
{
    $store_id = $request->input('store_id');
    // 他の処理
    return view('posts.post', compact('store_id'));
}
    public function comments($id,$name,$title,$body)
    {       $post = Post::find($id);
        return view('posts.comments',['post'=>$post],compact( 'id','name','title','body'));
    }


    public function show()
    {

        return view('posts.index');
    }    
    public function select()
    {
        return view('posts.search');
    
    }
    public function comments_look()
    {
        return view('posts.comments');
    
    }
    public function pick()
    {
        return view('posts.in');
    
    }
    public function look($id,$name,$title,$body)
    {   
        $comments = Comment::all();
        $post = Post::find($id);
        return view('posts.comments_look',['post'=>$post],compact('comments','id','name','title','body'));
    
    }
   public function question(Request $request,$id,$name,$title,$body)
    {
        $rules = [
            'comments.name' => 'required|string|max:30',
            'comments.body' => 'required|string',
        ];

        $request->validate($rules);
        $id = $request->input('id');
        $post = Post::find($id);

        $comment = new Comment();
       
        $comment->name = $request->input('comments.name');
        $comment->body = $request->input('comments.body');
        $comment->posts_id = $id;
        $comment->save();
        $comments = Comment::all();
        
         return view('posts.comments_look',['post'=>$post],compact('comments','id','name','title','body'));
   
    }
    public function store(Request $request)
{
    $rules = [
        'post.title' => 'required|string|max:255',
        'post.body' => 'required|string',
        'post.name' => 'required|string',
        'post.runk' => 'nullable|integer|min:1|max:5',
    ];

    $request->validate($rules);

    $store_id = $request->input('store_id');


    $post = new Post();
    $post->name = $request->input('post.name');
    $post->title = $request->input('post.title');
    $post->body = $request->input('post.body');
    $post->runk = $request->input('post.runk');
    $post->store_id = $store_id; // $store_id を設定

    $post->save();

    $averageRunk = Post::where('store_id', $store_id)->avg('runk');

    return view('posts.post_end', compact('averageRunk'));
}
   

public function postsByStore(Request $request, $storeName)
{
    $store = Store::where('name', $storeName)->first();

    if ($store) {
        $store_id = $store->id;
        $posts = Post::where('store_id', $store_id)->get();
        $averageRunk = Post::where('store_id', $store_id)->avg('runk');
        return view('posts.store', compact('store_id','store', 'posts', 'averageRunk'));
    } else {
        return redirect()->route('select')->with('error', '指定された店舗が見つかりませんでした。');
    }
}


public function in(Request $request)
{
    return view('posts.index');
}
 public function add(Request $request)
    {
        $name = $request->input('name');
        $categories = $request->input('categories');
        DB::table('stores')->insert([
            'name' => $name,
            'categories' => $categories,
        ]);
        return view('profile.edit', [
            'user' => $request->user(),
            
        ]);

}
}