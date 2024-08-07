<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModelPost;
use App\Models\User;
use App\Models\ModelRequestComentario;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Node\Block\Document;

class BookController extends Controller
{

    private $User;
    private $Post;

    public function __construct()
    {
        $this->objUser = new User();
        $this->objPost = new ModelPost();

    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = $this->objPost->all();
        return view('index', compact('post'));
    }
    public function Comentarios()
    {
        $requestPost = DB::table('requestcomentario')->orderBy("id","desc")->first();
        $post = DB::table('post')->where("id",11)->first();
        
        return view('Comentarios', compact("post"));
        ////Tentar renderizar a função em uma rota, para gerar o comentario especifico

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $postagem = new ModelPost();
        $postagem->titulo = $request->input('titulo');
        $postagem->conteudo = $request->input('conteudo');
        $postagem->id_user = $request->input('id_user');
        $postagem->save();

        return response()->json(
            [
                'status' => 200,
                'message' => "Post criado"
            ]
        );

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
