<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active tombol">
        <a class="nav-link" href="<?= base_url('home')?>">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item tombol">
        <a class="nav-link" href="#searchby">SEARCH BY</a>
      </li>
      <li class="nav-item tombol">
        <a class="nav-link" href="#recipes">RECIPES</a>
      </li>
      <li class="nav-item tombol">
        <a class="nav-link" href="#aboutus">ABOUT US</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-light btn-sm my-2 my-sm-0 mr-2" type="submit">Sign up<span class="ml-1"><i class="fa fa-user"></i></span></button>
        <a href="#" class="badge my-2 my-sm-0" type="submit"><i class="fas fa-search" style="color:#fff"></i></a>
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
        <div class="row">
            <div class="col-sm">
            <a href="<?= base_url('home/recipes')?>" class="btn btn-warning text-white mt-3 btn-kuliner">Kembali</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <center>
                <img class="rounded-circle image" src="<?= base_url('assets/')?>pictures/jalangkote.jpg" alt="Card image cap">
                </center>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-4">
                <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-danger"> Bahan</h5>
                    <span>
                        <ul>
                        <p>Ubi Jalar</p>
                        <p>Wortel</p>
                        <p>Bihun</p>
                        <p>Tepung Terigu</p>
                        <p>Minyak Goreng</p>
                        </ul>
                    </span>
                    <h5 class="card-title text-danger"> Bumbu</h5>
                    <span>
                        <ul>
                        <p>Bawang Putih</p>
                        <p>Bawang Merah</p>
                        <p>Garam</p>
                        <p>Lada Bubuk</p>
                        </ul>
                    </span>
                </div>
                </div>
            </div>
            <div class="col-sm-8">
                
                <div class="card shadow-sm">
                <div class="card-body">
                    <center><h5 class="card-title text-danger"> Cara Pembuatan</h5></center>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia totam ea facere suscipit, sapiente reprehenderit id doloribus quae aut iure? Id, consequatur commodi aut fugit omnis harum ab! Sequi, pariatur!. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt vel iure minima dolor, consectetur ipsam ad dolorem, numquam quaerat id laboriosam repellat soluta porro maxime impedit, iste tenetur necessitatibus quas!
                    </p>
                </div> 
            </div>
        </div>
    </div>
</div>
