<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleLang extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'article_id',
        'lang_id',
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function lang()
    {
        return $this->belongsTo(Lang::class);
    }
}
