<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Post::orderby('id','desc')->get();
        return view('admin.blog.index',["posts"=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
   
        $request->validate([
            'titulo' => 'required|max:30',
            'foto' => 'required|max:2040|extensions:jpg,png',
            'post' => 'required|string',
        ]);

        $post = new Post();
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/blog'), $filename);
            $post->foto = url('assets/blog') .'/'. $filename;
        }

        $post->titulo = $request->titulo;
        $post->post = $request->post;
        $post->destacado = $request->has('destacado') ? true : false;
        $post->save();
        return redirect()->route('blogIndex')->with('status', 'Post creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('admin.blog.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'titulo' => 'required|max:30',
            'foto' => 'max:2040|extensions:jpg,png',
            'post' => 'required|string',
        ]);

        $post = Post::find($id);
        if ($request->hasFile('foto')) {
            if ($post->foto) {
                $oldFilePath = public_path('assets/blog') . '/' . basename($post->foto);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }
            $file = $request->file('foto');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/blog'), $filename);
            $post->foto = url('assets/blog') .'/'. $filename;
           
        }

        $post->titulo = $request->titulo;
        $post->post = $request->post;
        $post->destacado = $request->has('destacado') ? true : false;
        $post->save();
        return redirect()->route('blogIndex')->with('status', 'Post actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        if ($post->foto) {
            $oldFilePath = public_path('assets/blog') . '/' . basename($post->foto);
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }
        $post->delete();
        return redirect()->route('blogIndex')->with('status', 'Post eliminado con éxito');
    }
}
