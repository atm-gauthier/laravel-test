<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function index() {

    	$title = "c mon super titre 1";
    	$title2 = "c mon super titre 2";

    	$posts = [
    		1=>'A1',
    		2=>'A2'
    	];

    	// méthode 1
    	/*return  view('articles', [
    		'title'=> $title
    		,'title2'=>$title2
    		]);*/

    	// méthode 2
		//return  view('articles')->with('title', $title);

    	// méthode 3
		//return  view('articles', compact('title', 'title2'));

    	// méthode 4
		return  view('articles', compact('title', 'title2', 'posts'));

    }
    function show($id) {
    	$posts =[

    		1 => 'mon element numero 1',
    		2 => 'mon element numero 2'

    	];

    	$post = $posts[$id];

    	return view('article', compact('post'));
    }

    public function contact() {
    	return view('contact');
    }
}
