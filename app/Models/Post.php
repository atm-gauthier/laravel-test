<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content'];

    // Fonction permettant de définir qu'un post peut avoir plusieurs commentaires (relation one to many)
    public function comments() {

		return $this->hasMany(Comment::class);

    }

}
