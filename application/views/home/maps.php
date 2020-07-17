<nav class="navbar navbar-expand-lg navbar-light">
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
<div class="jumbotron bckrnjmb">
    <div class="container">
    <center>
        <form class="form-inline">
        <div class="form-group mx-auto mb-2">
            <label for="inputPassword2" class="sr-only">Password</label>
            <input type="search" class="form-control bordertext" id="search-input">
            <button type="submit" class="btn btn-warning borderbtn mb-2 my-auto"><i class="fa fa-search"></i></button>
        </div>
        </form>
        <div id="googleMap" class="rounded" style="width:70%;height:380px;"></div>
    </center>
    </div>
</div>