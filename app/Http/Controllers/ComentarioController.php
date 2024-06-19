<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Postagem;
use App\Models\User;
use App\Models\Comentario;

class ComentarioController extends Controller
{
    public function index()
    {
        $perfil = auth()->user();
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        $receitas = Postagem::get();
        $comentarios = Comentario::where('user_id', $perfil->id)->get();
        return view('comentario.comentarios', ['categorias' => $categorias, 'receitas' => $receitas, 'perfil' => $perfil, 'comentarios' => $comentarios]);
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $user_id = auth()->user()->id;

        $messages = [
            'conteudo.required' => 'O campo :attribute é obrigatório!',
        ];

        $validated = $request->validate([
            'conteudo' => 'required|min:5',
        ], $messages);

        $comentario = new Comentario;
        $comentario->conteudo = $request->conteudo;
        $comentario->user_id = $user_id;
        $comentario->postagem_id = $request->postagem_id;
        $comentario->save();

        return back()->withInput();

    }

    public function edit($id)
    {
        $perfil = auth()->user();
        $comentario = Comentario::find($id);
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        return view('comentario.visualizarComentarios', ['comentario' => $comentario, 'categorias' => $categorias , 'perfil' => $perfil]);
    }

    public function update(Request $request, string $id)
    {
        $comentario = Comentario::find($id);
        $comentario->conteudo = $request->conteudo;
        $comentario->save();

        return redirect('meuscomentarios')->with('status', 'Postagem atualizada com sucesso!');
    }
}
