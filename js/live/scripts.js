function myFunction(){document.getElementById("volunteer-message").style.display="none",document.getElementById("volunteer").style.display="none",document.getElementById("volunteer-thank").style.display="block"}function newsletter(){document.getElementById("newsletter-form").style.display="none",document.getElementById("newsletter-thank").style.display="block"}function loop(){TweenMax.to(arrow,".75",{ease:Power1.easeInOut,opacity:"1",top:"99%",repeat:-1,yoyo:!0})}$(function(){$(".menu-button").click(function(){$("nav").addClass("open"),$("body").css("overflow","hidden");var e=document.getElementsByClassName("menu-reel");TweenMax.to(e,"3",{delay:"1.5",rotation:"360",transformOrigin:"50% 50%"})}),$(".exit-button").click(function(){$("nav").removeClass("open"),$("body").css("overflow","visible")}),$(".carousel").slick({autoplay:!0,fade:!0,dots:!1,cssEase:"linear",infinite:!0,autoplaySpeed:5e3,slidesToShow:1,arrows:!1,centerMode:!0}),$(".poster-images").slick({infinite:!0,slidesToShow:3,slidesToScroll:3,dots:!0,responsive:[{breakpoint:964,settings:{slidesToShow:2,slidesToScroll:2}},{breakpoint:768,settings:{slidesToShow:2,slidesToScroll:2,arrows:!1}},{breakpoint:630,settings:{slidesToShow:1,slidesToScroll:1,arrows:!1}}]}),$(".photo-sample").slick({infinite:!0,slidesToShow:3,slidesToScroll:3,dots:!0,responsive:[{breakpoint:964,settings:{slidesToShow:2,slidesToScroll:2}},{breakpoint:768,settings:{slidesToShow:2,slidesToScroll:2,arrows:!1}},{breakpoint:630,settings:{slidesToShow:1,slidesToScroll:1,arrows:!1}}]})});var leadPresenter=document.getElementsByClassName("leadPresenter");TweenMax.to(leadPresenter,"3",{delay:"0",opacity:"1"});var present=document.getElementsByClassName("present");TweenMax.to(present,"3",{delay:"0",opacity:"1"});var text=document.getElementsByClassName("text");TweenMax.to(text,"1",{delay:"2",opacity:"1"});var reel=document.getElementsByClassName("reel");TweenMax.to(reel,"3",{delay:"2",opacity:"1"}),TweenMax.to(reel,"3",{delay:"4",rotation:"720",transformOrigin:"50% 50%"});var leadSponsor=document.getElementsByClassName("leadSponsor");TweenMax.to(leadSponsor,"3",{delay:"2",opacity:"1"});var arrow=document.getElementsByClassName("arrow");TweenMax.from(arrow,"3",{delay:"7",opacity:"0",onComplete:loop}),$(function(){$("a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);if(e=e.length?e:$("[name="+this.hash.slice(1)+"]"),e.length)return $("html,body").animate({scrollTop:e.offset().top},1e3),!1}})});