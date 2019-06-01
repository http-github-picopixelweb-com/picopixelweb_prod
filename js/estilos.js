// MDB Lightbox Init
$(function () {
$("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
});

//js btn quienes-somos


$(document).ready(function(){
    $('#btn-quienes-somos').on("click" ,function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 3250
        }, 500);
        
    })
})

//js btn consulta


$(document).ready(function(){
    $('#btn-consulta').on("click" ,function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 2100
        }, 500);
        
    })
})





// js para galeria

$(document).ready(function(){
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});

//js galeria
$(document).ready(function(){
    $(".fancybox").fancybox({
          openEffect: "none",
          closeEffect: "none"
      });
      
      $(".zoom").hover(function(){
          
          $(this).addClass('transition');
      }, function(){
          
          $(this).removeClass('transition');
      });
  });


//



$(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 1300){
            $(".jqaviso").css({"opacity" : "1"})
        }
        else {
            $(".jqaviso").css({"opacity" : "0"})
        }
    })
})


$(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 900){
            $(".jqaviso1").css({"opacity" : "1"})
        }
        else {
            $(".jqaviso1").css({"opacity" : "0"})
        }
    })
})


$(document).ready(function(){
    $(document.getElementById('navbar1')).addClass('navbar1');
    $(window).scroll(function(){
        
        if ($(this).scrollTop() >= 1){
            $(document.getElementById('navbar1')).removeClass('navbar1');

        } else {
            $(document.getElementById('navbar1')).addClass('navbar1');
            
            
        }

    })
})

$(document).ready(function(){
    $(window).scroll(function(){
        
        if ($(this).scrollTop() > 50){
            $(".navbar").css({"opacity" : "1"})
        }
        else {
            $(".navbar").css({"opacity" : "0"})
            
        }
    })
})

$(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 1300){
            $(".jqaviso3").css({"opacity" : "1"})
        }
        else {
            $(".jqaviso3").css({"opacity" : "0"})
        }
    })
})

$(document).ready(function(){
    $(window).scroll(function(){
        $(".promo").css({"opacity" : "0"})
        if ($(this).scrollTop() > 200){
            $(document.getElementById('promo')).addClass('fadeInRight');
            $(".promo").css({"opacity" : "1"})
        }  
        else {
            $(document.getElementById('promo')).removeClass('fadeInRight');
            
            
        }

    })
})

$(document).ready(function(){
    $(window).scroll(function(){
        $(".art2").css({"opacity" : "0"})
        if ($(this).scrollTop() > 2400){
            $(document.getElementById('art2')).addClass('fadeInUpBig');
            $(".art2").css({"opacity" : "1"})
        }  
        else {
            $(document.getElementById('art2')).removeClass('fadeInUpBig');
            
            
        }

    })
})

$(document).ready(function(){
    $(window).scroll(function(){
        $(".somosImg").css({"opacity" : "0"})
        $(".somos").css({"opacity" : "0"})
        if ($(this).scrollTop() > 3150){
            $(document.getElementById('somosImg')).addClass('fadeInRight');
            $(".somosImg").css({"opacity" : "1"})
            $(document.getElementById('somos')).addClass('fadeInLeft');
            $(".somos").css({"opacity" : "1"})
        }  
        else {
            $(document.getElementById('somosImg')).removeClass('fadeInRight');
            $(document.getElementById('somos')).removeClass('fadeInLeft');
            
            
        }

    })
})
