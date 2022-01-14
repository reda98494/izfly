   $(document).scroll(function() {
       var $nav = $('.navbar');
       $nav.toggleClass('scrolled', $(this).scrollTop() > 100);
   });