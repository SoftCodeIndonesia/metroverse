$(document).ready(function () {
    reveal();
    $('.page-scroll').click(function (e) { 
        reveal();
    });

    
    

    $(window).scroll(function () { 

        reveal();

        
        if($(this).scrollTop() > 100){
            $('.navbar').addClass('fixed-top');
            $('.navbar').removeClass('navbar-light');
            $('.navbar').addClass('navbar-dark');
            $('.navbar').removeClass('bg-white');
            $('.navbar').addClass('bg-color-secondary');

            $('.brand-img').attr('src', 'landing/assets/logo/logo-1.png');

        }else{
            // $('.navbar').removeClass('fixed-top');
            $('.navbar').addClass('navbar-light');
            $('.navbar').removeClass('navbar-dark');
            $('.navbar').removeClass('bg-white');
            $('.navbar').removeClass('bg-color-secondary');
            $('.brand-img').attr('src', 'landing/assets/logo/logo-black.png');
        }

        if($(this).scrollTop() < 100){
            $('.navbar').addClass('bg-white');
            $('.navbar').removeClass('fixed-top');
        }
    });

    
    function reveal(){

        
        var reveals = $('.animation-element');

        for(var i = 0; i < reveals.length; i++){


            var windowHeight = window.innerHeight;
            var revealTop = reveals[i].getBoundingClientRect().top;
            var revealPoint = 150;


            if(revealTop < windowHeight - revealPoint){
                reveals[i].classList.add('in-view-animate');
            }else{
                reveals[i].classList.remove('in-view-animate');
            }
        }
    }
});