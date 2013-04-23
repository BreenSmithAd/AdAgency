jQuery(document).ready(function ($) {

    $(".full-header").sticky({
        topSpacing: 0,
        wrapperClassName: 'full-header'
    });


    $('.image-wrapper').hover(function(){


        $(this).find('.mouse-effect').stop().animate({'opacity':'0.6'});
        $(this).find('.extra-links').stop().animate({'top':'50%'});

    },function(){


        $(this).find('.mouse-effect').stop().animate({'opacity':'0'});
        $(this).find('.extra-links').stop().animate({'top':'-50%'});

    });

    $(".gallery-option a").click(function (event) {
        event.preventDefault();
        var view = $(this).attr("id");
        if (view == "three") {
            $(".holder li").removeClass("four columns").addClass("one-third column");
            if ($data) {
                $("ul.holder").removeAttr("style");
                $data.find("li").removeClass("four columns").addClass("one-third column")
            }
        } else {
            $(".holder li").removeClass("one-third column").addClass("four columns");
            if ($data) {
                $("ul.holder").removeAttr("style");
                $data.find("li").removeClass("one-third column").addClass("four columns")
            }
        }
    });

    $("a[rel^='prettyPhoto']").prettyPhoto();

    $(".ads img").addClass("img-frame");

    $('#main-menu li a').click(function(e){

        e.preventDefault();

            var content = $(this).attr('href');
            var checkURL = content.match(/^#([^\/]+)$/i);
            if(checkURL){

                var goPosition = $(content).offset().top - 80;
                $('html,body').animate({ scrollTop: goPosition}, 'slow');

            }else{
                window.location = content;
            }

    });

    $("#main-menu li").click(function () {
        $("#main-menu li").removeClass("active");
        $(this).addClass("active")
    });

    $(".filter li a").click(function (event) {
        event.preventDefault();
        var test = $(this).parent().attr("class");
        $(".filter li a").removeClass("main-btn").addClass("gray");
        $(this).removeClass("gray").addClass("main-btn");
    });
    
    $("#foot a").click(function () {
        $("#menu li").removeClass("active");
        $("#menu li:first").addClass("active")
    });

    var $filterType = $("#filterOptions li.active a").attr("rel");
    var $holder = $("ul.holder");
    var $data = $holder.clone();
    $("#filterOptions li a").click(function (e) {
        $("#filterOptions li").removeClass("active");
        var $filterType = $(this).attr("rel");
        $(this).parent().addClass("active");
        if ($filterType == "all") var $filteredData = $data.find("li");
        else var $filteredData = $data.find("li[data-type~=" + $filterType + "]");
        $holder.quicksand($filteredData, {
            duration: 800,
            easing: "easeInOutQuad"
        }, function () {
            $("a[rel^='prettyPhoto']").prettyPhoto();
             $('.image-wrapper').hover(function(){

                $(this).find('.mouse-effect').stop().animate({'opacity':'0.6'});
                $(this).find('.extra-links').stop().animate({'top':'50%'});

                },function(){


                $(this).find('.mouse-effect').stop().animate({'opacity':'0'});
                $(this).find('.extra-links').stop().animate({'top':'-50%'});

                });
        });
        return false;
    });
    var lastId, topMenu = $("#main-menu"),
    topMenuHeight = topMenu.outerHeight() + 500;
    menuItems = topMenu.find('a');

        scrollItems = menuItems.map(function () {

            content = $(this).attr("href");
            var checkURL = content.match(/^#([^\/]+)$/i);

            if(checkURL){

                var item = $($(this).attr("href"));
                if (item.length) return item

            }
        });
    $(window).scroll(function () {
        var fromTop = $(this).scrollTop() + topMenuHeight;
        var cur = scrollItems.map(function () {
            if ($(this).offset().top < fromTop) return this
        });
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";
        if (lastId !== id) {
            lastId = id;
           menuItems.parent().removeClass("active").end().filter("[href=#" + id + "]").parent().addClass("active")
        }
    });
});


jQuery(window).load(function () {

     jQuery(".mainSlider").flexslider({
        animation: "slide",
        animationLoop: true,
        directionNav: false,
        controlNav: true
    });
    
});