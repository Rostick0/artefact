<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lang extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'value'
    ];

    public $timestamps = false;

    public function article_langs()
    {
        return $this->hasMany(ArticleLang::class);
    }
}
