$(document).ready(function(){
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {
  
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
  
        // Store hash
        var hash = this.hash;
  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
     
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  });

//   Parallax
$(window).scroll(function(){
  var wScroll = $(this).scrollTop();
  if(wScroll > $('.kategori').offset().top - 400){
      $('.kategori .examp').each(function(i){
          setTimeout(function() {
              $('.kategori .examp').eq(i).addClass('showup2')
          }, 600 * (i+1));
      })      
  }

  // if(tombol == 0){
  //   $('.btn-outline-light').addClass('Cmuncul')
  // }
  // else if(tombol  >= 780){
  //   $('.btn-outline-light').addClass('Bmuncul')
  // }
  // else{
  //   $('.btn-outline-light').addClass('Bmuncul')
  // }

  if(wScroll > $('.pAbout').offset().top - 600){
    $('.pAbout').each(function(i){
      setTimeout(function() {
        $('.pAbout').eq(i).addClass('pMuncul')
    }, 600 * (i+1));
    
    })      
  }

});

