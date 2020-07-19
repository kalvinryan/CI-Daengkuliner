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
