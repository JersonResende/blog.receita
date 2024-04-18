
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../Css/css/home.css" />


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>MELANE home</title>
</head>
<body>
    <div id="fundo">

    <!-------------------------------- NAVBAR --------------------------------->

    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="inicio">
          <img src="../Css/img/logo.png" alt="" width="170" height="70">
      </a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active fw-bolder text-danger" href="massa">Massas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active fw-bolder text-danger" href="Carnes.html">Carnes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active fw-bolder text-danger" href="Sobremesas.html">Sobremesas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active fw-bolder text-danger" href="#">Lanches</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active fw-bolder text-danger" href="#">Sopas</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle fw-bolder text-danger" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Mais
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Petiscos</a></li>
                <li><a class="dropdown-item" href="#">Vegetariano</a></li>
                <li><a class="dropdown-item" href="#">Sem Glútem</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="pesquisar receita" aria-label="Search" style="border-radius: 20px;">
          <i class="bi bi-search btn btn-danger me-2" style="border-radius: 20px;"></i>
        </form>
          <a href="entrar" class="btn btn-danger me-3" style="border-radius: 20px;"><i class="bi bi-person-fill"><span> entrar</span></i></a>
      </div>
    </nav>


<!----------------------------------CARROSSEL--------------------------------->

<div class="container text-center py-5 ">
  <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://www.sabornamesa.com.br/media/k2/items/cache/681a23d9bda3cc6608e358bb4db90e3a_XL.jpg" height="500" class="d-block w-100" alt="" style="border-radius: 20px;" >
          <div class="carousel-caption d-none d-md-block">
            <h5>torta holandesa</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://classic.exame.com/wp-content/uploads/2022/08/Tiramisu-Fasano.jpg?quality=70&strip=info&w=1200" height="500" class="d-block w-100" alt="" style="border-radius: 20px;">
          <div class="carousel-caption d-none d-md-block">
            <h5>tiramisu</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://p2.trrsf.com/image/fget/cf/942/530/images.terra.com/2023/03/31/602302592-tamanho-padrao-gc-64.jpg"  height="500" class="d-block w-100" alt="" style="border-radius: 20px;">
          <div class="carousel-caption d-none d-md-block">
            <h5>torta de limão</h5>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

    <!----------------------- RECEITAS------------------------------------------------->

      <section class="receitas" style="background-color: #FBF7F1;">
        <div class="container " >
          <div class="row ">
            <div class="col-12">
                <h2 class="fw-bold mt-3 text-center">receitas populares</h2>
            </div>
        </div>
            <div class="row p-3">
                <div class="col-md-4 p-3 mt-3">
                    <img src="https://www.sabornamesa.com.br/media/k2/items/cache/07758ee08f7e16a0b15b0d98a56d204a_XL.jpg" class="img-fluid" alt="" style="border-radius: 20px;" >
                    <div class="mt-2">
                        <h4 class="fs-5">petit gateau</h4>
                        <p class="fw-light"></p>

                    </div>
                </div>
                <div class="col-md-4 p-3 mt-3">
                  <img src="https://www.sabornamesa.com.br/media/k2/items/cache/07758ee08f7e16a0b15b0d98a56d204a_XL.jpg" class="img-fluid" alt="" style="border-radius: 20px;">
                  <div class="mt-2">
                      <h4 class="fs-5">gurjão de frango</h4>
                      <p class="fw-light"></p>

                  </div>
              </div>
                <div class="col-md-4 p-3 mt-3">
                    <img src="https://www.sabornamesa.com.br/media/k2/items/cache/07758ee08f7e16a0b15b0d98a56d204a_XL.jpg" class="img-fluid" alt="" style="border-radius: 20px;">
                    <div class="mt-2">
                        <h4 class="fs-5">filé de frango </h4>
                        <p class="fw-light"></p>

                    </div>
                </div>
                <div class="col-md-4 p-3 mt-3">
                    <img src="https://www.sabornamesa.com.br/media/k2/items/cache/07758ee08f7e16a0b15b0d98a56d204a_XL.jpg" class="img-fluid" alt="" style="border-radius: 20px;">
                    <div class="mt-2">
                        <h4 class="fs-5">palha italiana </h4>
                        <p class="fw-light"></p>

                    </div>
                </div>

                <div class="col-md-4 p-3 mt-3">
                  <img src="https://www.sabornamesa.com.br/media/k2/items/cache/07758ee08f7e16a0b15b0d98a56d204a_XL.jpg" class="img-fluid" alt="" style="border-radius: 20px;">
                  <div class="mt-2">
                      <h4 class="fs-5">cookie </h4>
                      <p class="fw-light"></p>

                  </div>
              </div>
              <div class="col-md-4 p-3 mt-3">
                <a href="../receitas/fettuccine.html">
                <img src="https://www.sabornamesa.com.br/media/k2/items/cache/07758ee08f7e16a0b15b0d98a56d204a_XL.jpg" class="img-fluid" alt="" style="border-radius: 20px;">
                <div class="mt-2">
                    <h4 class="fs-5 text-danger">
                      <button type="button" class="btn btn-light">fettuccine</button>
                    </h4>
                    <p class="fw-light"></p>
                  </a>
                </div>
              </div>
              </div>
        </div>
    </section>


    <!--------------------------NOVIDADE ---------------------------->

    <section class="receitas" >
      <div class="container p-6">
        <div class="row ">
          <div class="col-12">
              <h2 class="fw-bold mt-2 text-center">adicionadas recentemente </h2>
          </div>
      </div>
          <div class="row p-3">
              <div class="col-md-3 p-3 mt-3">
                  <img src="https://www.sabornamesa.com.br/media/k2/items/cache/a6e4d9622a775d7eed800918154a7577_XL.jpg" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;">
                  <div class="mt-2">
                      <h4 class="fs-5">bife à cavalo</h4>
                      <p class="fw-light"></p>

                  </div>
              </div>
              <div class="col-md-3 p-3 mt-3">
                <img src="https://www.sabornamesa.com.br/media/k2/items/cache/a6e4d9622a775d7eed800918154a7577_XL.jpg" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;">
                <div class="mt-2">
                    <h4 class="fs-5">torta de ouro branco</h4>
                    <p class="fw-light"></p>

                </div>
            </div>
              <div class="col-md-3 p-3 mt-3">
                  <img src="https://www.sabornamesa.com.br/media/k2/items/cache/a6e4d9622a775d7eed800918154a7577_XL.jpg" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;">
                  <div class="mt-2">
                      <h4 class="fs-5">carne de sol </h4>
                      <p class="fw-light"></p>

                  </div>
              </div>
              <div class="col-md-3 p-3 mt-3">
                  <img src="https://www.sabornamesa.com.br/media/k2/items/cache/a6e4d9622a775d7eed800918154a7577_XL.jpg" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;">
                  <div class="mt-2">
                      <h4 class="fs-5">salada caesar </h4>
                      <p class="fw-light"></p>

                  </div>
              </div>

              <div class="col-md-3 p-3 mt-3">
                <img src="https://www.sabornamesa.com.br/media/k2/items/cache/a6e4d9622a775d7eed800918154a7577_XL.jpg" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;">
                <div class="mt-2">
                    <h4 class="fs-5">frango com quiabo </h4>
                    <p class="fw-light"></p>

                </div>
            </div>
            <div class="col-md-3 p-3 mt-3">
              <img src="https://www.sabornamesa.com.br/media/k2/items/cache/a6e4d9622a775d7eed800918154a7577_XL.jpg" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;">
              <div class="mt-2">
                  <h4 class="fs-5">frango assado com batata </h4>
                  <p class="fw-light"></p>

              </div>
          </div>
            <div class="col-md-3 p-3 mt-3">
                <img src="https://www.sabornamesa.com.br/media/k2/items/cache/a6e4d9622a775d7eed800918154a7577_XL.jpg" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;">
                <div class="mt-2">
                    <h4 class="fs-5">bolo de milho com fubá</h4>
                    <p class="fw-light"></p>

                </div>
            </div>
            <div class="col-md-3 p-3 mt-3">
                <img src="https://www.sabornamesa.com.br/media/k2/items/cache/a6e4d9622a775d7eed800918154a7577_XL.jpg" class="img-fluid" alt="" width="300" height="100" style="border-radius: 20px;">
                <div class="mt-2">
                    <h4 class="fs-5">camarão frito</h4>
                    <p class="fw-light"></p>

                </div>
            </div>
            </div>
      </div>
  </section>

    <!--------------------------- FOOTER---------------------------------------------->

    <br> <br>
    <footer class="rodape">
        <div class="container">
            <div class="row p-4">
              <div class="col-md-3 mt-3">
                <a class="navbar-brand" href="#">
                  <img src="../Css/img/logo.png" alt="" width="170" height="70">
                </a>
                <p></p>
              </div>
              <div class="col-md-3 mt-4">
                <h4 class="fs-6">quem somos</h4>
                <h4 class="fs-6">privacidade</h4>
                <h4 class="fs-6">termos de uso</h4>
              </div>


              <div class="col-md-4 mt-3">
                <h3 class="fs-6 ms-3">REDES SOCIAIS</h3>
                <ul class="nav">
                    <li class="nav-item">
                      <a class="nav-link text-primary fs-3" aria-current="page" href="#"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-info fs-3" href="#"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-danger fs-3" href="#"><i class="bi bi-instagram"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success fs-3" href="#"><i class="bi bi-whatsapp"></i></a>
                      </li>
                  </ul>
              </div>

            </div>
          </div>
    </footer>
</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

</body>
</html>
