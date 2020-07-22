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
<main>
    <div class="jumbotron bckrnjmb1 mb-5" style="height: 700px;">
        <div class="container mt-x9">
            <center>
                <form class="form-inline">
                <div class="form-group mx-auto">
                    <input type="search" class="form-control bordertext textseacrh" id="search-input">
                    <button type="submit" class="btn btn-warning borderbtn mb-2 my-auto"><i class="fa fa-search"></i></button>
                </div>
                </form>
            </center>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card shadow-sm p-3 mb-5 bg-white borderkuliner">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img class="card-img-top" style="width: 18rem; height: 10rem;" src="<?= base_url('assets/')?>pictures/jalangkote.jpg" alt="Card image cap">
                                </div>
                                <div class="col-sm-6">
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card shadow-sm p-3 mb-5 bg-white borderkuliner">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img class="card-img-top" style="width: 18rem; height: 10rem;" src="<?= base_url('assets/')?>pictures/jalangkote.jpg" alt="Card image cap">
                                </div>
                                <div class="col-sm-6">
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
                </nav>
        </div>
    </div>
</main>

</div>

