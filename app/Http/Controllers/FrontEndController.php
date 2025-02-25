<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Product;
use App\Models\Post;
use App\Models\Contact;
use App\Models\Catalog;

class FrontEndController extends Controller
{
    public function index(){

        $slider = Slider::orderByDesc('id')->limit(5)->get();
        $productos = Product::where('destacado', 1)->orderByDesc('id')->limit(3)->get();
        $posts= Post::where('destacado', 1)->orderByDesc('id')->limit(6)->get();
        $contacto = Contact::first();
        $catalogos= Catalog::orderByDesc('id')->where('estado',1)->get();
      
        return view('inicio', ['slider' => $slider, 'productos' => $productos, 
                        'posts' => $posts, 'contacto' => $contacto, 'catalogos' => $catalogos]);
    }

    public function contacto(){
       
        $contacto = Contact::first();
        $catalogos= Catalog::orderByDesc('id')->where('estado',1)->get();
        return view('contacto', ['contacto' => $contacto, 'catalogos' => $catalogos]);
    }
    
    public function nosotros(){
       
        $contacto = Contact::first();
        $catalogos= Catalog::orderByDesc('id')->where('estado',1)->get();
        return view('nosotros', ['contacto' => $contacto, 'catalogos' => $catalogos]);
    }
    
    public function tecnologia(){
       
        $contacto = Contact::first();
        $catalogos= Catalog::orderByDesc('id')->where('estado',1)->get();
        return view('tecnologia', ['contacto' => $contacto, 'catalogos' => $catalogos]);
    }
    public function blog(){
       
        $contacto = Contact::first();
        $posts= Post::orderByDesc('id')->paginate(4);
        $catalogos= Catalog::orderByDesc('id')->where('estado',1)->get();

        return view('blog', ['posts' => $posts, 'contacto' => $contacto, 'catalogos' => $catalogos]);
    }
    
    public function post($id){
       
        $contacto = Contact::first();
        $post= Post::where('id', $id)->first();
        $catalogos= Catalog::orderByDesc('id')->where('estado',1)->get();
        return view('post', ['post' => $post, 'contacto' => $contacto, 'catalogos' => $catalogos]);
    }
    
    public function catalogo($slug){
        $nombre = str_replace('-', ' ', $slug);
        $contacto = Contact::first();
        $catalogo= Catalog::where('nombre', $nombre)->first();
        $catalogos= Catalog::orderByDesc('id')->where('estado',1)->get();
       

        return view('catalogo', ['catalogo' => $catalogo, 'contacto' => $contacto, 
                            'catalogos' => $catalogos]);
    }

}