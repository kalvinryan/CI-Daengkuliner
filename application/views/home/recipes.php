<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <a class="navbar-brand" href="<?= base_url('home')?>">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-light btn-sm my-2 my-sm-0 mr-2" type="submit">Sign up<span class="ml-1"><i class="fa fa-user"></i></span></button>
    </form>
  </div>
</nav>

<div class="">
    <div class="row" style="height: 800px;">
        <div class="col-sm-8 mt-8 jumbob">
        </div>
        <div class="col-sm-4 jumbo">
        </div>
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
