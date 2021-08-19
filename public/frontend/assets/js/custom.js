$(function() {
    'use strict';
    $(window).on("scroll", function() {
      if ($(document).scrollTop() > 20) {
          $(".custom-nav").addClass("fixed-top");
      }
      else {
          $(".custom-nav").removeClass("fixed-top");
      }
  });
    // active nav
    $('.navbar-nav .nav-item').on('click', function() {
        $('.navbar-nav .nav-item.active').removeClass('active');
        $(this).addClass('active');
    });
    // data-background
	$("[data-background]").each(function(){
		$(this).css("background-image", "url("+ $(this).attr("data-background") + ")")
		});
    // AOS ANIMATION JS
        AOS.init({
          offset: 300,
          duration:1500,
        });

        
    ///////////////////////////////////////////// 
    //! CLIENT*
    $('.client-carousel').owlCarousel({
        autoplay: true,
        autoplayTimeout: 2800,
        loop: true,
        margin: 20,
        dots: true,
        nav: false,
        responsive: {
            0: {
                items: 1
            },

            1000: {
                items: 1
            },
            1200: {
                items: 3
            }
        }
    })
        
    //preloader
    setTimeout(function(){
        $('.loader_bg').fadeToggle();
    }, 1500);
     // Popup Video
	$('.popup-youtube').magnificPopup({
		disableOn: 320,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
    });
 // back to top
    $(".back2").click(function() {
        $('html, body').animate({
        scrollTop: 0,
        }, 1000);
    });
    $(window).on('scroll', function(){
        var scrolling = $(this).scrollTop();
        if(scrolling > 500){
          $('.back2').addClass('aaa');
          $('.aaa').fadeIn(500);
        }
        else if(scrolling > 200){
          $('.aaa').fadeOut(500);
        }
        });
        
        $(".odometer").appear(function (e) {
            var odo = $(".odometer");
            odo.each(function () {
                var countNumber = $(this).attr("data-count");
                $(this).html(countNumber);
            });
        });
        $('.test-popup-link').magnificPopup({
          type: 'image'
          // other options
        });
        $(".memories_img_gallery").magnificPopup({
            delegate: "a", // child items selector, by clicking on it popup will open
            type: "image", // other options
            gallery: {
                enabled: true,
            },
        });
  
        $(".btn-one").click(function() {
  
          var lable = $(".btn-one").text().trim();
       
          if(lable == "Yes") {
            $(".btn-one").text("Show");
            $(".myText").hide();
          }
          else {
            $(".btn-one").text("Yes");
            $(".myText").show();
          }
           
         });
        
});
$(document).ready(function(){
  $(".hide").click(function(){
      $(".to-show").hide();
  });
  $(".show").click(function(){
      $(".to-show").css('display', 'flex');
  });
 $('.nx_bt_1').click(function(){
	$('#question_part_1,#question_part_3,#question_part_4,question_part_5').hide();
	$('#question_part_2').show();
 });
 $('.nx_bt_2').click(function(){
	$('#question_part_1,#question_part_2,#question_part_4,question_part_5').hide();
	$('#question_part_3').show();
 });
 $('.nx_bt_3').click(function(){
	$('#question_part_1,#question_part_2,#question_part_3,question_part_5').hide();
	$('#question_part_4').show();
 });
 $('.nx_bt_4').click(function(){
	$('#question_part_1,#question_part_2,#question_part_3,#question_part_4').hide();
	$('#question_part_5').show();
 });
});
/*
      function countdown( elementName, minutes, seconds )
      {
          var element, endTime, hours, mins, msLeft, time;

          function twoDigits( n )
          {
              return (n <= 9 ? "0" + n : n);
          }

          function updateTimer()
          {
              msLeft = endTime - (+new Date);
              if ( msLeft < 1000 ) {
                  element.innerHTML = "Time is up!";
              } else {
                  time = new Date( msLeft );
                  hours = time.getUTCHours();
                  mins = time.getUTCMinutes();
                  element.innerHTML = "Time left: "+(hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
                  setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
              }
          }

          element = document.getElementById( elementName );
          endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;
          updateTimer();
      }

      countdown( "ten-countdown", 20,0 );
*/

// APLICANT IMAGE UPLOAD JS START
function previewFile() {
  var preview = document.querySelector('.im_g');
  var file    = document.querySelector('#profile-image-upload').files[0];
  var reader  = new FileReader();

  reader.addEventListener("load", function () {
    preview.src = reader.result;
  }, false);

  if (file) {
    reader.readAsDataURL(file);
  }
}
$(function() {
    $('#profile-image1').on('click', function() {
        $('#profile-image-upload').click();
    });
});

// APLICANT IMAGE UPLOAD JS END

document.getElementById('getval').addEventListener('change', readURL, true);
function readURL(){
    var file = document.getElementById("getval").files[0];
    var reader = new FileReader();
    reader.onloadend = function(){
        document.getElementById('profile-upload').style.backgroundImage = "url(" + reader.result + ")";        
    }
    if(file){
        reader.readAsDataURL(file);
    }else{
    }
}
function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
}
function myFunction1() {
    var dots = document.getElementById("dots1");
    var moreText = document.getElementById("more1");
    var btnText = document.getElementById("myBtn1");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
}
function myFunction2() {
    var dots = document.getElementById("dots2");
    var moreText = document.getElementById("more2");
    var btnText = document.getElementById("myBtn2");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
}
function myFunction3() {
    var dots = document.getElementById("dots3");
    var moreText = document.getElementById("more3");
    var btnText = document.getElementById("myBtn3");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
}
function myFunction4() {
    var dots = document.getElementById("dots4");
    var moreText = document.getElementById("more4");
    var btnText = document.getElementById("myBtn4");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
}
