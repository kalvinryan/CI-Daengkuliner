<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-navbarku">
  <a class="navbar-brand" href="<?= base_url('home')?>"><img src="<?= base_url('assets/')?>pictures/logo/Daeng Kuliner.png" width="50" height="55" alt=""></a>
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

<div class="jumbotron bckrnjmb" style="height: 600px;">
    <div class="container">
    <center>
        <form class="form-inline">
            <div class="form-group mx-auto">
                <input type="search" class="form-control bordertext textseacrh" id="search-input" placeholder="Search Location...">
                <button type="submit" class="btn btn-warning borderbtn mb-2 my-auto"><i class="fa fa-search"></i></button>
            </div>
        </form>
        <div id="googleMap" class="rounded shadow mt-3" style="width:70%;height:380px;"></div>
    </center>
    </div>
</div>