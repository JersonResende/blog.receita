@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ url("/assets/css/comentario.css")}}" />

<div class=text-center>
    <br>
<h3> Meus Comentarios </h3>

</div>

    <div class=botao>
        <div class="mt-2">
            <ul class="list-group">
                <li class="list-group-item">

                    <br11>
                    @csrf
                    @foreach ($comentarios as $value)

                    <form method="POST" action="{{ url('/comentario/' . $value->postagem_id) }}">

                        @csrf
                        @method('DELETE')
                        <input type="submit"  class="btn btn-danger" value="Excluir">

                        <tr>
                            <td>{{ $value->postagem->titulo }} - {{ $value->conteudo }}</td>
                            <td><a class="btn btn-light" href="{{ url('/comentario/' . $value->id . '/editarcomentario') }}" role="button">Editar</a></td>
                            {{-- <td><a class="btn btn-light" href="{{ url('/publicacao/' . $value->id) }}" role="button">Visualizar</a></td> --}}
                        </tr>
                    </form>
                    <br> <hr>

        @endforeach

                </li>
             </ul>
         </div>
    </div>
@endsection
