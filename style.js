
$(function() {
    $(".rslides").responsiveSlides();
    //swiper js style

    var swiper = new Swiper(".mySwiper", {
        //loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });



});

$(document).ready(function(){

    $('ul.tabs li').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#"+tab_id).addClass('current');
    })



});

function hideAreaDiv() {
    var x = document.getElementById("AreaDiv");
    var y = document.getElementById("AreaDiv2");

    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    if(y.style.display === "block"){
        y.style.display="none";
        document.getElementById("addArea").style.display="block";
    }
}

function  showAnotherArea() {
    var x=document.getElementById("AreaDiv2");
    if (x.style.display==="none"){
        x.style.display= "block";
    }
    document.getElementById("addArea").style.display="none";

}
