'use strict';
var windowW,windowH,mobileMode;
$(function (){
    windowW=$(window).innerWidth();
     mobileMode=windowW<768?true:false;
    $(".jqimgFill").imgLiquid();
    imgFill();
    /* ==========================================================================
		[layout]
 	==========================================================================*/
    $("header").each(function () {
        $("header .menuItem").click(function(){
            $(this).next().stop().slideToggle().parent("li").toggleClass("active").siblings("li").removeClass("active").find(".dropdownMenu").slideUp();
        });
        $(".menu-toggle").click(function () {
            $("html").toggleClass("menuOpen");
        });
    });
    $("header .menu a").click(function(){
        $("html").removeClass("menuOpen");
    });
    $(".goTop").on("click", function () {
        $("html, body").animate({ scrollTop: 0 }, 800);
    });
    $(window).scroll(function () {  
        $(window).scrollTop()>0? $("header").addClass("scrollMode"):$("header").removeClass("scrollMode");
        $(window).scrollTop() > 400?$(".goTop").addClass("show"): $(".goTop").removeClass("show");
        $(".goTop .circle").css({"transform":"rotate("+$(window).scrollTop()/10+"deg)"});
    });

    /* ==========================================================================
		[page]
     ==========================================================================*/
    //index
    new Swiper ('.index-banner-section .swiper-container', {
        loop: true, 
        effect:'fade',
        speed:1000,
        autoplay:{delay:5000},
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                var num=index+1;
                num=num<10?"0"+num:num;
                return '<span class="' + className + ' circle">' + num + circleDot()+'</span>';
            }
        },
        on:{
            slideChangeTransitionStart:function(){
                var tl = new TimelineMax({
                    repeat: 0,
                });
                tl.from($(this.el).find(".path"), {
                    drawSVG: 0,
                    duration: 1
                })
            }
        }
    }) 
    var worksBarWidth=0;
    var worksneedMoveWidth=0;
    var worksBarTransform=0;
    var perView=0;
    new Swiper ('.index-works-block .swiper-container', {
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768:{
                    slidesPerView: 2,
            },
            1200: {
                slidesPerView: 2.7
            },
        
        },
        on:{
            init:function(swiper){
                if(windowW>1199){
                    perView=1.7
                }
                else{
                    perView=1
                }
                var worksSliderLength=$(".index-works-block .swiper-slide").length;
                var worksSlickTimes=Math.floor(worksSliderLength-perView);
                worksBarWidth=Math.floor($(".index-works-block .swiper-container").width()/worksSlickTimes);
                $(".index-works-block .bar").width(worksBarWidth);
            },
            slideChangeTransitionStart:function(swiper){
                worksneedMoveWidth=((swiper.activeIndex - swiper.previousIndex)*worksBarWidth);
                worksBarTransform=parseInt($('.index-works-block .bar').css("transform").replace(/[^0-9\-,]/g,'').split(',')[4]);
                $('.index-works-block .bar').css('transform','translateX('+(worksBarTransform+worksneedMoveWidth)+'px)');
            },

        }
    }) 
    if(windowW<576){
        var h=$(window).height();
        $(".index-banner-section,.index-banner-section .jqimgFill").height(h);
    }
    //about
    $('.about-slider-block .slider').on('init reInit afterChange',function(event, slick, currentSlide, nextSlide){
        var i = (currentSlide ? currentSlide : 0) + 1;
        $(".about-slider-block .counter").html(i + '<span class="mx-2">/</span>' + (slick.$slides.length))
    });
    $('.about-slider-block .slider').slick({
        fade: false,
        speed:1200,
        centerMode: true,
        centerPadding: '12%',
        prevArrow:"<div class='slick-arrow slick-prev flex-center'><i class='icon-prev font-28 text-AFAFAF text-hover-00A1E0'></i></div>",
        nextArrow:"<div class='slick-arrow slick-next flex-center'><i class='icon-next font-28 text-AFAFAF text-hover-00A1E0'></i></div>",
        appendArrows:$(".about-slider-block .arrows"),
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    centerPadding: '0',
                }
            },
            {
                breakpoint: 768,
                settings: {
                    centerPadding: '0',
                    speed:1000,
                }
            }
        ]
    });

    $('.about-slider-block .slider').on('beforeChange', (event, slick, currentSlide, nextSlide)=>{
        if (currentSlide !== nextSlide) {
            setTimeout(function(){
                $(".slick-slide").addClass("slick-active");
            })
        }
    });
    $('.about-slider-block .slider').on('afterChange', (event, slick, currentSlide)=>{
       $(".slick-active:not(.slick-current)").removeClass("slick-active");
    });

    //contact
    mobileMode?$("#verificationCode").attr("placeholder","請輸入圖形驗證碼"):"";
    
    /* ==========================================================================
		[common]
     ==========================================================================*/
    windowW<1200?$("[data-aos-delay]").removeAttr("data-aos-delay"):"";
    aosInit();
    /* ==========================================================================
		[resize]
     ==========================================================================*/

    function resize(){
        makeEnvironmentSwiper();
        if(mobileMode){
            $(".newItem").each(function(){
                $(this).find(".title").after($(this).find(".date").detach());
            });
        }
        windowW>991?$("footer .footerLeft").append($("footer .copyright").detach()):$("footer .footerRight").append($("footer .copyright").detach());
    }
    $(window).resize(function(){
        resize();
    }).trigger('resize');
})
function aosInit(){
    AOS.init({
        duration: 500,
        offset: 10,
        mirror: true,
    });
}
function makeEnvironmentSwiper(){
    if(!mobileMode){
        var environmentneedMoveWidth=0;
        var environmentBarWidth=0;
        var environmentBarTransform=0; 
        new Swiper ('.index-environment-block .swiper-container', {
            slidesPerView: 3,
            slidesPerColumn: 2,
            spaceBetween: 24,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                768:{
                    slidesPerView: 2,
                    slidesPerColumn: 2,
                },
                1200: {
                    slidesPerView: 3,
                    slidesPerColumn: 2,
                    spaceBetween: 30,
                },
            
            },
            on:{
                init:function(swiper){
                    var environmentSliderLength=$(".index-environment-block .swiper-slide").length;
                    var environmentSliderRow=Math.ceil(environmentSliderLength/2);
                    var environmentSlickTimes=Math.floor(environmentSliderRow-swiper.passedParams.slidesPerView+1);
                    environmentBarWidth=Math.floor($(".index-environment-block .swiper-container").width()/environmentSlickTimes);
                    $(".index-environment-block .bar").width(environmentBarWidth);
                },
                slideChangeTransitionStart:function(swiper){
                    environmentneedMoveWidth=((swiper.activeIndex - swiper.previousIndex)*environmentBarWidth);
                    environmentBarTransform=parseInt($('.index-environment-block .bar').css("transform").replace(/[^0-9\-,]/g,'').split(',')[4]);
                    $('.index-environment-block .bar').css('transform','translateX('+(environmentBarTransform+environmentneedMoveWidth)+'px)');
                },
            }
        })  
    }
}
function ajaxWorksSwiper(){
    alert("由後台取得資料同步更換區塊資料，待程式製作");
    makeWorksSwiper();
}
function ajaxNews(){
    alert("由後台取得資料同步更換區塊資料，待程式製作");
}


