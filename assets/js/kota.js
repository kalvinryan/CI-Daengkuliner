//   Parallax
// $(window).scroll(function(){
//     var wScroll = $(this).scrollTop();
//     if(wScroll > $('.cKota').offset().top - 120){
//         $('.cKota .examp').each(function(i){
//             setTimeout(function() {
//                 $('.cKota .examp').eq(i).addClass('showupku')
//             }, 600 * (i+1));
//         })
//     }
//   });
$(window).scroll(function(){
    var wScroll = $(this).scrollTop();
    if(wScroll > $('.cKota').offset().top - 300){
        $('.cKota').each(function(i){
            setTimeout(function() {
                $('.cKota').eq(i).addClass('cMuncul')
            }, 600 * (i+1));
        })
    }
  });