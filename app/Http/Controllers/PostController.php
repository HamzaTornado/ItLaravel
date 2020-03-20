<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Categorie;
use Carbon\Carbon;
use Illuminate\Http\UploadedFile;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();
        return view('admin.post.index',['posts' => $posts]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Categorie::all();
        return view('admin.post.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->ValidateRequest();
        $post = new Post();
        $post->title = $request->input('titre');
        $post->description = $request->input('description');
        $post->image = $request->input('image');
        $post->content = $request->input('contenu');
        $post->id_cat = $request->input('categorie');
        if($request->hasFile('image')){
            //$post->image = $request->image->store('uploads');7
            //$post->update(['image'=>$request->image->store('uploads','public')]);
            $post->image =$request->file('image')->store('uploads',);

        }
        $post->created_at = Carbon::createFromFormat('d/m/Y', $request->input('date'))->format('Y-m-d');
        $post->save();
        session()->flash('success','Le post à été bien enregistrer');
        return redirect('admin/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::with('categorie')->find($id);
        return view('admin.post.show',['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categories = Categorie::all();
        $post = Post::with('categorie')->find($id);
        return view('admin.post.edit',['post' => $post,'categories'=>$categories]);
    }
    public function updatestatu(Request $request,$id){
        $post =Post::find($id);
        $post->active = $request->input('active');
        $post->save();
        return redirect('admin/post');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->ValidateRequest();
        $post =Post::find($id);
        $post->title = $request->input('titre');
        $post->description = $request->input('description');
        $post->content = $request->input('contenu');
        $post->id_cat = $request->input('categorie');
        if($request->hasFile('image')){
            //$post->image = $request->image->store('uploads');7
            //$post->update(['image'=>$request->image->store('uploads','public')]);
            $post->image =$request->file('image')->store('uploads',);

        }
        $post->created_at = Carbon::createFromFormat('d/m/Y', $request->input('date'))->format('Y-m-d');
        $post->save();
        session()->flash('success','Le Post Modifier Avec Success');
        return redirect('admin/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::find($id);
        $post->delete();

        return redirect('admin/post');
    }

    public function ValidateRequest(){

        return tap(request()->validate([

            'titre' => 'required',
            'description' => 'required|min:10',
            'contenu' => 'required|min:50',
            'categorie' => 'required',
            'date' => 'required',

        ]),function () {
            if(request()->hasfile('image')){

            request()->validate([
                'image' => 'file|image|max:2500'
            ]);

            }
        });

    }
}
