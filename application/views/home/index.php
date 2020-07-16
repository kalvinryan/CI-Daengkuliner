<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand mynavbar" href="#"><small>Logo</small></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="container">
        <div class="collapse navbar-collapse mt-7" id="navbarNav">
            <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('home')?>">BERANDA <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">KATEGORI</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">RESEP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">TENTANG</a>
            </li>
            </ul>
        </div>
  </div>
        <ul class="navbar-nav mynavbar">
            <li class="nav-item">
                <a class="nav-link" href="#"><small><i class="fa fa-search"></i></small></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><small><i class="fa fa-user"></i></small></a>
            </li>
        </ul>
</nav>

<div class="jumbotron jumbo">
    <div class="container mt-8">
    <center>
        <h1 class="display-4 my-4">Daeng Kuliner</h1>
        <ps>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <form class="form-inline">
        <div class="form-group mx-auto mb-2">
            <label for="inputPassword2" class="sr-only">Password</label>
            <input type="search" class="form-control bordertext" id="search-input">
            <button type="submit" class="btn btn-warning borderbtn mb-2 my-auto"><i class="fa fa-search"></i></button>
        </div>
        </form>
    </center>
    </div>
</div>

<div class="jumbotron bckrnjmb">
    <div class="container">
    <center>
        <h1 class="display-4 my-4">Kategori</h1>
        <form class="form-inline">
        <div class="form-group mx-auto mb-2">
            <div class="row">
                <div class="col-sm-4">
                    <a href="<?= base_url('kuliner')?>" class="btn rounded-circle borderbtn2 mb-2 my-auto" >
                        <img src="<?= base_url('assets/')?>pictures/marker_50px.png" alt="">
                    </a>
                    <label for="">Kuliner Tradisional</label>
                </div>
                <div class="col-sm-4">
                        <a href="<?= base_url('maps')?>" class="btn rounded-circle borderbtn2 mb-2 my-auto">
                            <img src="<?= base_url('assets/')?>pictures/marker_50px.png" alt="">
                        </a>
                     <label for="">Pedagang Kuliner</label>
                </div>
                <div class="col-sm-4">
                    <button type="submit" class="btn rounded-circle borderbtn2 mb-2 my-auto"><img src="<?= base_url('assets/')?>pictures/marker_50px.png" alt=""></button>
                    <label for="">Kabupaten/Kota</label>
                </div>
            </div>
        </div>
        </form>
    </center>

    </div>
</div>

<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
             <hr class="my-4">
            </div>
            <div class="col-sm-4">
               <center> <h1 class="display-4">Recipes</h1></center>
            </div>
            <div class="col-sm-4">
             <hr class="my-4">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <div class="row">
                        <div class="col-sm-6">
                            <img class="d-block w-100 rounded" src="<?= base_url('assets/')?>pictures/default-150x150.png" alt="First slide">
                        </div>
                        <div class="col-sm-6">
                                <h1>Jalangkote</h1>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur tempore, ut nulla qui tempora magni, quasi facilis atque nobis non accusantium, necessitatibus quisquam minima! Soluta sequi nisi odio similique saepe!</p>
                        </div>
                    </div> 
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <img class="d-block w-100" src="<?= base_url('assets/')?>pictures/default-150x150.png" alt="Second slide">
                            </div>
                            <div class="col-sm-6">
                                <h1>Jalangkote</h1>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur tempore, ut nulla qui tempora magni, quasi facilis atque nobis non accusantium, necessitatibus quisquam minima! Soluta sequi nisi odio similique saepe!</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <img class="d-block w-100" src="<?= base_url('assets/')?>pictures/default-150x150.png" alt="Third slide">
                            </div>
                            <div class="col-sm-6">
                                <h1>Jalangkote</h1>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur tempore, ut nulla qui tempora magni, quasi facilis atque nobis non accusantium, necessitatibus quisquam minima! Soluta sequi nisi odio similique saepe!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            </div>
        </div>
    </div>
</div>

<div class="jumbotron jumbotron-fluid bckrnjmb">
  <div class="container">
    <center>
        <h1 class="display-4">About Us</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum asperiores culpa eum est quibusdam autem consequuntur ducimus pariatur? Consequatur accusantium earum dignissimos fuga assumenda culpa a deleniti qui excepturi temporibus.</p>
    </center>
  </div>
</div>

