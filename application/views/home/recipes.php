<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="#"><small>Logo</small></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="container">
        <div class="collapse navbar-collapse" id="navbarNav">
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
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#"><small><i class="fa fa-search"></i></small></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><small><i class="fa fa-user"></i></small></a>
            </li>
        </ul>
</nav>
<div class="jumbotron jumbo">
    <div class="container mt-kuliner text-white">
     <center >
     <h1 class="display-1 my-4 text-warning font-header">Daeng Kuliner</h1>
     </center>
     <center class="textcenter">
        <ps>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
     </center>
    </div>
</div>
<div class="jumbotron bckrnjmb" style="height: 600px;">
    <div class="container">
        <center>
            <h1 class="display-4 font-page">Recipes</h1>
        </center>
    </div>
    <div class="container">
        <center>
            <form class="form-inline">
                <div class="form-group mx-auto">
                    <input type="search" class="form-control bordertext textseacrh" id="search-input">
                    <button type="submit" class="btn btn-warning borderbtn mb-2 my-auto"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </center>
        <div class="row mt-4">
            <div class="col-sm-3">
                <div class="card rounded shadow">
                    <img class="card-img-top rounded-circle image" src="<?= base_url('assets/')?>pictures/jalangkote.jpg" alt="Card image cap">
                    <div class="card-body">
                        <center>
                            <a href="<?= base_url('recipes')?>"><h3 class="card-title text-danger">Jalangkote</h3></a>
                            <p class="card-text">Luwu TImur</p>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card rounded shadow">
                    <img class="card-img-top rounded-circle image" src="<?= base_url('assets/')?>pictures/jalangkote.jpg" alt="Card image cap">
                    <div class="card-body">
                        <center>
                            <a href=""><h3 class="card-title text-danger">Jalangkote</h3></a>
                            <p class="card-text">Luwu TImur</p>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card rounded shadow">
                    <img class="card-img-top rounded-circle image" src="<?= base_url('assets/')?>pictures/jalangkote.jpg" alt="Card image cap">
                    <div class="card-body">
                        <center>
                            <a href=""><h3 class="card-title text-danger">Jalangkote</h3></a>
                            <p class="card-text">Luwu TImur</p>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card rounded shadow">
                    <img class="card-img-top rounded-circle image" src="<?= base_url('assets/')?>pictures/jalangkote.jpg" alt="Card image cap">
                    <div class="card-body">
                        <center>
                        <a href=""><h3 class="card-title text-danger">Jalangkote</h3></a>
                            <p class="card-text">Luwu TImur</p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
