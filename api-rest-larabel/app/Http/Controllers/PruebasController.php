<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PruebasController extends Controller
{
    //
    public function index(){
        $titulo = 'Animales';
        $animales = ['perro','gato','pato'];
        return view('pruebas.index',array(
            'titulo' => $titulo,
            'animales' => $animales
        ));
    }
    
    public function testOrm(){
        /*$posts = Post::all();
        foreach ($posts as $post){
            echo '<hr><h1>'.$post->id.'</h1>';
            echo '<span style="color:gray;">'.$post->user->name.'</span><br>';
            echo '<span style="color:red;">'.$post->category->name.'</span>';
            echo '<h1>'.$post->title.'</h1>';
            echo '<h1>'.$post->content.'</h1>';
            echo "<hr><br>";
        }*/
        
        $categories = Category::all();
        
  
      foreach ($categories as $category){  
       echo '<hr>';
        echo '<h1>'.$category->name.'</h1>';
        
        foreach ($category->posts as $post){
            echo '<h1>'.$post->id.'</h1>';
            echo '<span style="color:gray;">'.$post->user->name.'</span><br>';
            echo '<span style="color:red;">'.$post->category->name.'</span>';
            echo '<h1>'.$post->title.'</h1>';
            echo '<h1>'.$post->content.'</h1>';
            
        }
        echo '<hr>';
      }
     
        die();
    }
}
