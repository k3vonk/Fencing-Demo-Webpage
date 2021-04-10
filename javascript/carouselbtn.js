$('#Carousel-2').carousel({
    wrap: false
  }).on('slid.bs.carousel', function () {
      curSlide = $('#Carousel-2 .active');
    if(curSlide.is( ':first-child' )) {
       setTimeout(function() {
          document.getElementById("left").style.backgroundColor = '#9BC2CF';
          document.getElementById("left").style.pointerEvents = 'none';
      }, 20);
       return;
    } else {
      setTimeout(function() {
          $('.prev').show();
          document.getElementById("left").style.backgroundColor = '#7aa1ae';
          document.getElementById("left").style.pointerEvents = 'auto';
      }, 60);  
    }
    if (curSlide.is( ':last-child' )) {
      setTimeout(function() {
          document.getElementById("right").style.backgroundColor = '#9BC2CF';
          document.getElementById("right").style.pointerEvents = 'none';
      }, 20);
       return;
    } else {
      setTimeout(function() {
          document.getElementById("right").style.backgroundColor = '#7aa1ae';
          document.getElementById("right").style.pointerEvents = 'auto';
          $('.next').show();
      }, 60);      
    }
});