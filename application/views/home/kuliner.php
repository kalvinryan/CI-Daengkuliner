<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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

<div class="jumbotron bckrnjmb1">
    <div class="container mt-x9">
        <center>
            <form class="form-inline">
            <div class="form-group mx-auto mb-2">
                <input type="search" class="form-control bordertext" id="search-input">
                <button type="submit" class="btn btn-warning borderbtn mb-2 my-auto"><i class="fa fa-search"></i></button>
            </div>
            </form>
        </center>
    </div>
    <div class="container mt-5">
        <div class="card shadow-sm p-3 mb-5 bg-white">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">
                    <img class="card-img-top" style="width: 18rem; height: 10rem;" src="<?= base_url('assets/')?>pictures/default-150x150.png" alt="Card image cap">
                </div>
                <div class="col-sm-6">
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Sebelumnya</a></li>
                    </ul>
                    </nav>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="Page navigation example">
                    <ul class="pagination float-right d-inline-block">
                        <li class="page-item"><a class="page-link" href="#">Selanjutnya</a></li>
                    </ul>
                    </nav>
                </div>
            </div> 
        </div>
    </div>
</div>
</div>

