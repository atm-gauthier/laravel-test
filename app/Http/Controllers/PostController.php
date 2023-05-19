<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    // Exemple avec des données en dur :
   /* function index() {

        $title = "c mon super titre 1";
        $title2 = "c mon super titre 2";

        $posts = [
            1=>'A1',
            2=>'A2'
        ];

        // méthode 1
        //return  view('articles', [
        //    'title'=> $title
        //    ,'title2'=>$title2
        //    ]);

        // méthode 2
        //return  view('articles')->with('title', $title);

        // méthode 3
        //return  view('articles', compact('title', 'title2'));

        // méthode 4
        //return  view('articles', compact('title', 'title2', 'posts'));

    }*/

    // récupération de données depuis la base :
    function index() {

        $title = "c mon super titre 1";
        $title2 = "c mon super titre 2";

        $posts = Post::all(); // Récupération de toutes les lignes de la table
        //$posts = Post::orderBy('title')->get(); // order by
        //$posts = Post::orderBy('title')->take(3)->get(); // J'en veux que 3
        //dd($posts); // dd = var_dump de laravel
        return  view('articles', compact('title', 'title2', 'posts'));

    }



    // Exemple avec des données en dur :
    /*function show($id) {
        $posts =[

            1 => 'mon element numero 1',
            2 => 'mon element numero 2'

        ];

        $post = $posts[$id];

        return view('article', compact('post'));
    }*/


    // Exemple avec des données depuis la base :
    function show($id) {
        //$post = Post::find($id); // Charger un objet avec son id
        $post = Post::findOrFail($id); // Charger un objet avec son id et renvoie une 404 si non trouvé
        //$post = Post::where('title', '=', 'Velit mollitia enim asperiores.')->firstOrFail(); // Utiliser un where sql et charger le premier car renvoie un tableau

        return view('article', compact('post'));
    }

    public function contact() {
    	return view('contact');
    }

    public function create() {

        return view('create');

    }

    public function store(Request $request) {

        //dd($request->title);
        //$post = new Post();
        //$post->title = $request->title;
        //$post->content = $request->content;
        //$post->save();

        Post::create([
            'title'=>$request->title,
            'content'=>$request->content,
        ]);

        return redirect()->route('welcome', $post);

    }

    public function update(Request $request) {

        $post = new Post();
        $post = Post::findOrFail($request->id);
        $post->update([
            'title'=>$request->title,
            'content'=>$request->content,
        ]);

        return redirect()->route('welcome', $post);

    }

    public function delete($id) {

        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('welcome', $post);
    }

}
