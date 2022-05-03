$(function () {
    $(document).on("click", ".nav-link", function () {
        $(".nav-link").removeClass("active");
        $(this).addClass("active");
    });
    $(document).on('click',function (e) {
        if($(e.target).hasClass("clicking") && $('body').hasClass("sidebar-collapse") ){
            $(".user-panel .info").addClass("d-none");
            $(".user-panel .image").removeClass("image col-md-2 p-0 ml-4").addClass("image col-md-7 p-0 ml-3");
            $(".brand-link").addClass("d-none");
        }else{
            $(".user-panel .info").removeClass("d-none");
            $(".user-panel .image").removeClass("image col-md-7 p-0 ml-3").addClass("image col-md-2 p-0 ml-4");
            $(".brand-link").removeClass("d-none");
        }
    });  
    
    $("aside").hover(function() {
        if($('body').hasClass("sidebar-collapse")) {
        $(".brand-link").addClass("d-none");
        $(".user-panel").addClass("d-none");
        }
    }, function() {
        $(".user-panel").removeClass('d-none').addClass("d-block");
    });
    
});
