@extends('layouts.app')

@section('content')


<link rel="stylesheet" href="{{ url('/richtexteditor/rte_theme_default.css')}}"/>
<script type="text/javascript" src="{{ url('/richtexteditor/rte.js')}}"></script>
<script type="text/javascript" src="{{ url('/richtexteditor/plugins/all_plugins.js')}}"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <div class="card">
                <div class="card-header">Comentario - EDITAR</div>

                <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ url('/comentario/' . $comentario->id . '/edit') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <br>
                  <label for="fname">Comentario:</label><br>
                  <textarea id="inp_editor1" class="form-control" name="conteudo" >
                        {{ $comentario->conteudo }}
                  </textarea><br>

                  <input type="submit"  class="form-control" value="ENVIAR">

                </form>


                </div>

            </div>
        </div>
    </div>
</div>
@endsection
