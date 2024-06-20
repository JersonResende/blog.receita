@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ url("/assets/css/perfil.css")}}" />
<!-----------------------------PERFIL----------------------------->

    <section class="perfil">
        <div class="container-fluid">
            <div class="row p-5 align-items-center" >
                <div class="col-md-12" >
                    <img src="{{ url("/assets/imagens/perfil.png")}}" class="img-fluid" width="170">
                </div>
                <div class="col-md-12" >
                    <h2 class="text-danger fw-bold ms-3 py-3">{!! $perfil->name !!}</h2>

                </div>
                <hr>

                 <div class="icones">
                    <div class="row p-6 align-items-center" >
                      <div class="d-grid gap-2">
                        <div class="btn-group">
                    <a href="{{ url("/receitausuario")}}" class="btn btn" aria-current="page"><i class="bi bi-pen-fill"> minhas receitas</i></a>
                    <a href="{{ url("/salvos")}}" class="btn btn"><i class="bi bi-bookmark-fill"> meus salvos</i></a>
                    <a href="{{ url("/meuscomentarios")}}" class="btn btn"><i class="bi bi-chat-fill"> meus comentários</i></a>
                        </div>
                      </div>
                    </div>
                </div>
                <hr>
                <br><br>
            </div>
                  <a href="{{ url("/publicar")}}" class="link-secondary"><i class="bi bi-pencil-square"> publicar uma receita</i></a>


        </div>
    </section>

@endsection
