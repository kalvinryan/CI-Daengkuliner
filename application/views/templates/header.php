<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/')?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/')?>fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/style.css">

    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
    function initialize() {
      var propertiPeta = {
        center:new google.maps.LatLng(-8.5830695,116.3202515),
        zoom:9,
        mapTypeId:google.maps.MapTypeId.ROADMAP
      };
      
      var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
      
      // membuat Marker
      var marker=new google.maps.Marker({
          position: new google.maps.LatLng(-8.5830695,116.3202515),
          map: peta
      });

    }

    // event jendela di-load  
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <title><?= $title?></title>
  </head>
  <body>