<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Fonction permettant de définir qu'un tag peut se trouver sur plusieurs posts et inversement (relation many to many)
    public function posts() {

		return $this->belongsToMany(Post::class);

    }

}
