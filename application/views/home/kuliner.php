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

    <div class="jumbotron jumbob">
        <div class="container text-white">
        </div>
    </div>
    <main>
        <div class="jumbotron bckrnjmb1 mb-5" style="height: 700px;">
            <div class="container mt-x9">
                <center>
                    <form class="form-inline">
                    <div class="form-group mx-auto">
                        <input type="search" class="form-control bordertext textseacrh" id="search-input" placeholder="Search Kuliner...">
                        <button type="submit" class="btn btn-warning borderbtn mb-2 my-auto"><i class="fa fa-search"></i></button>
                    </div>
                    </form>
                </center>
            </div>
            <div class="container mt-5">
                <div class="row kuliner">
                    <div class="col-sm-12 examp">
                        <div class="card shadow-sm p-3 mb-5 bg-white borderkuliner ">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <img class="card-img-top rounded-circle image" src="<?= base_url('assets/')?>pictures/jalangkote.jpg" alt="Card image cap">
                                    </div>
                                    <div class="col-sm-6">
                                    <h1 class="text-danger">Jalangkote</h1>
                                        <h6>Jalkot Bu Enny</h6>
                                        <p class="card-text"><em> Permandian Alam Barombong No.9</em></p>
                                        <label for="" class="text-muted">Harga : Rp.3000</label><br>
                                        <label for="" class="text-muted">Buka  : 07.00 - 18.00 WITA</label>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 kuliner">
                        <div class="card shadow-sm p-3 mb-5 bg-white borderkuliner examp">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <img class="card-img-top rounded-circle image" src="<?= base_url('assets/')?>pictures/jalangkote.jpg" alt="Card image cap">
                                    </div>
                                    <div class="col-sm-6">
                                        <h1 class="text-danger">Jalangkote</h1>
                                        <h6>Jalkot Bu Enny</h6>
                                        <p class="card-text"><em> Permandian Alam Barombong No.9</em></p>
                                        <label for="" class="text-muted">Harga : Rp.3000</label><br>
                                        <label for="" class="text-muted">Buka  : 07.00 - 18.00 WITA</label>
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
    <footer>
      <div id="welcome" class="text-white">
          <div class="containers container">
              <center>
              <div class="title">
                  <h4 class="font-header">Daeng Kuliner</h4>
              </div>
              <p>Ex: <strong>Jalangkote</strong> merupakan salah satu jajanan khas yang sering di jumpai di kota makassar. Jajanan ini merupakan sejenis gorengan berbahan dasar tepung.</p>
              </center>
          </div>
          <div class="pad">
          <p><i class="fab fa-instagram"></i> | <i class="fab fa-facebook"></i> | <i class="fab fa-twitter"></i>| <i class="fab fa-whatsapp"></i></p>
      </div>
      </div>
  </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/')?>bootstrap/js/jquery-3.2.1.slim.min.js"></script>
    <script src="<?= base_url('assets/')?>bootstrap/js/popper.min.js"></script>
    <script src="<?= base_url('assets/')?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/')?>fontawesome/js/all.min.js"></script>
    <script src="<?= base_url('assets/')?>js/kuliner.js"></script>
  </body>
</html>

