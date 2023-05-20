<?php

namespace App\Models;

use App\Models\Comment;
use App\Models\Image;
use App\Models\Tag;
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

    public function image() {

    	return $this->hasOne(Image::class);

    }

    // Fonction permettant de définir qu'un post peut avoir plusieurs tags et inversement (relation many to many)
    public function tags() {

		return $this->belongsToMany(Tag::class);

    }

}
