<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'fileble_id',
        'fileble_type',
        'name',
        'path',
        'type',
    ];

    public function fileble(): MorphTo
    {
        return $this->morphTo();
    }
}
