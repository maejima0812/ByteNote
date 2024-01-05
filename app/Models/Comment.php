<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Comment extends Model
{
    // モデルが関連するテーブル名
    protected $table = 'comments';

    // 可変項目（ホワイトリスト）
    protected $fillable = [
        'name',
        'body',
        // 他にも必要なカラムがあれば追加
    ];
     public function post()
    {
        return $this->belongsTo(Post::class);
    }

    // タイムスタンプの自動更新を有効化
    public $timestamps = true;
}