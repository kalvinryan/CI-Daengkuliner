<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active tombol">
        <a class="nav-link" href="#section1">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item tombol">
        <a class="nav-link" href="#section2">SEARCH BY</a>
      </li>
      <li class="nav-item tombol">
        <a class="nav-link" href="#">RECIPES</a>
      </li>
      <li class="nav-item tombol">
        <a class="nav-link" href="#">ABOUT US</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-light btn-sm my-2 my-sm-0 mr-2" type="submit">Sign up<span class="ml-1"><i class="fa fa-user"></i></span></button>
        <a href="#" class="badge my-2 my-sm-0" type="submit"><i class="fas fa-search" style="color:#fff"></i></a>
    </form>
  </div>
</nav>

<div class="" id="section1">
    <div class="row" style="height: 700px;">
        <div class="col-sm-6 mt-8">
            <div class="container text-white">    
                <center>
                  <h1 class="display-4 my-4 text-danger font-header">Daeng Kuliner</h1>
                  <div class="input-group mb-3" style="margin-top: 300px; width:500px;">
                    <div class="input-group-prepend">
                        <span class="input-group-text bordertext"><i class="fa fa-map-marker"></i></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <div class="input-group-append">
                        <span class="input-group-text bordertext2"><i class="fa fa-search"></i></span>
                    </div>
                    </div> 
                </center> 
            </div>
        </div>
        <div class="col-sm-6 jumbo">
        </div>
    </div>
    
</div>

<div class="jumbotron bckrnjmbimg kategori" id="section2">
    <div class="container textkategori">
    <center>
        <h1 class="display-4 my-4 font-page">Search By</h1>
        <form class="form-inline">
        <div class="form-group mx-auto mb-2">
            <div class="row">
                <div class="col-sm-4">
                    <div class="examp">
                        <a href="<?= base_url('home/kuliner')?>" class="btn rounded borderbtn2 mb-2 my-auto shadow p-3 mb-5 bg-white" >
                            <img src="<?= base_url('assets/')?>pictures/marker_50px.png" alt="">
                        </a>
                        <label for="" class="mt-3">Kuliner Tradisional</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="examp">
                        <a href="<?= base_url('home/maps')?>" class="btn rounded borderbtn2 mb-2 my-auto shadow p-3 mb-5 bg-white">
                                <img src="<?= base_url('assets/')?>pictures/marker_50px.png" alt="">
                            </a>
                        <label for="" class="mt-3">Pedagang Kuliner</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="examp">
                        <a href="<?= base_url('home/kota')?>" class="btn rounded borderbtn2 mb-2 my-auto shadow p-3 mb-5 bg-white"><img src="<?= base_url('assets/')?>pictures/marker_50px.png" alt=""></a>
                        <label for="" class="mt-3">Kabupaten/Kota</label>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </center>

    </div>
</div>

<div class="jumbotron bckrnjmb2" id="section3">
    <div class="container" style="margin-top: -100px;">
        <div class="row">
            <div class="col-sm-4">
             <hr class="my-4">
            </div>
            <div class="col-sm-4">
               <center> <h1 class="display-4 font-page">Recipes</h1></center>
            </div>
            <div class="col-sm-4">
             <hr class="my-4">
            </div>
        </div>
        <div class="card rounded shadow">
            <div class="card-body">
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
                                    <img class="d-block w-100 rounded" src="<?= base_url('assets/')?>pictures/jalangkote.jpg" alt="First slide">
                                </div>
                                <div class="col-sm-6">
                                        <h1>Jalangkote</h1>
                                        <p>Merupakan salah satu jajanan khas yang sering di jumpai di kota Makassar. Jajanan ini merupakan sejenis gorengan berbahan dasar tepung terigu dan berisi ubi jalar,wortel dan bihun.</p>
                                        <a href="<?= base_url('home/recipes')?>" class="btn btn-warning text-white mt-3 btn-kuliner">Lihat Resep</a>
                                </div>
                            </div> 
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img class="d-block w-100" src="<?= base_url('assets/')?>pictures/jalangkote.jpg" alt="Second slide">
                                    </div>
                                    <div class="col-sm-6">
                                        <h1>Jalangkote</h1>
                                            <p>Merupakan salah satu jajanan khas yang sering di jumpai di kota Makassar. Jajanan ini merupakan sejenis gorengan berbahan dasar tepung terigu dan berisi ubi jalar,wortel dan bihun.</p>
                                            <a href="<?= base_url('home/recipes')?>" class="btn btn-warning text-white mt-3 btn-kuliner">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img class="d-block w-100" src="<?= base_url('assets/')?>pictures/jalangkote.jpg" alt="Third slide">
                                    </div>
                                    <div class="col-sm-6">
                                        <h1>Jalangkote</h1>
                                        <p>Merupakan salah satu jajanan khas yang sering di jumpai di kota Makassar. Jajanan ini merupakan sejenis gorengan berbahan dasar tepung terigu dan berisi ubi jalar,wortel dan bihun.</p>
                                        <a href="<?= base_url('home/recipes')?>" class="btn btn-warning text-white mt-3 btn-kuliner">Lihat Resep</a>
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
        
    </div>
</div>

<div class="jumbotron jumbotron-fluid bckrnjmb" id="section4">
  <div class="container">
    <center>
        <h1 class="display-4 font-page">About Us</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum asperiores culpa eum est quibusdam autem consequuntur ducimus pariatur? Consequatur accusantium earum dignissimos fuga assumenda culpa a deleniti qui excepturi temporibus.</p>
    </center>
  </div>
</div>

