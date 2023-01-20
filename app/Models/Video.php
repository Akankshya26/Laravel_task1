<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;
    protected $guards = [];
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggables');
    }
}
