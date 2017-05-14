function resolveHeader() {
    headerH = $(window).width() > 768 ? 80 : 80
}

function resolveSlider() {
    var a = 80,
        o = 762,
        r = 1665,
        e = 762,
        m = $(window).width();
        m = 1410;
    o = e * m / r, a = $(window).height() - a;
    a = Math.min(a, o);
    //$(".extra-slider").css("height", a + "px");
}
var headerH = 80;

$("a[href='#top']").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});



$(window).bind("scroll", function() {
  //  $(window).scrollTop() > headerH ? ($(".site").addClass("fixed"), $(".menu").addClass("navbar-fixed-top")) : ($(".site").removeClass("fixed"), $(".menu").removeClass("navbar-fixed-top"))
});

function resolveSidebar(){
  if($(window).width() > 990){
    $('body').removeClass('portrait');

  }
  else{
    $('body').addClass('portrait');

  }
}


$("document").ready(function() {
    //resolveSlider(), resolveHeader(),resolveSidebar();
   $('.contact-form').parsley();

    $(".slider-home").extraSlider({
		type: 'fade',
    auto: 7,
    speed:0.6,
	});



  loadImages();


});

$('.contact-form').on('submit', function(e) {
        e.preventDefault();
        var instance = $('.contact-form').parsley();
        if(!instance.isValid())return;

        $('.contact-form button').attr('disabled','disabled');
        var url = "/setContacto";
        var data = $(this).serialize();

        $.ajax({
          type: "POST",
          url: url,
          data: data,
          success: function(data)
          {
            $('#form-result').modal();
            $('#form-result .fnombre').text(data.name);
          },
          error: function(data){
            $('.contact-form button').removeAttr('disabled');
          }
        });

    });

function loadImages(){
  var imgDefer = document.getElementsByTagName('img');
  for (var i=0; i<imgDefer.length; i++) {
  if(imgDefer[i].getAttribute('data-original')) {
  imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-original'));
  } }
}
$(window).resize(function() {
  //  resolveSlider(), resolveHeader(),resolveSidebar();
});
