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

