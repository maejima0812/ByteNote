<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{   
    public function index(Post $post)
    {
        return view('auth.index')->with(['auth' => $post->get()]);  
      //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    public function register(Request $request)
    {
        // バリデーションの追加がおすすめです

        $user = new user;
         $user = new \App\Models\User;
        $user->name = $request->input('name');
        $user->age = $request->input('age');
        $user->gender = $request->input('gender');
        $user->address = $request->input('address');
        $user->current_job = $request->input('current_job');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return view('auth.login');
        
    

        // データベースにユーザーを登録
        User::create($request->all());

       
    }
     public function search()
{
    // $keyword = $request->input('keyword');
    // $stores = Store::where('name', 'like', "%{$keyword}%")->get();
    return view('auth.search');
}

    public function login()
{
    return view('auth.login');
}

public function mypage()
{
    return view('auth.mypage');
}
public function register_end()
{
    $user = \App\Models\User::latest()->first();
    return view('auth.register_end')->with(['user' => $user]);
}
}