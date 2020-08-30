 $(document).ready(function(){
    $(".button-collapse").sideNav();
    $("select").material_select();
    $(".materialboxed").materialbox();
    $(".parallax").parallax();
    $(".modal-trigger").leanModal(); 
    $(".carousel").carousel({dist:-50});
    $('.slider').slider({
          full_width: true,
          height: 500,
          interval: 3000
    });

            // $("#login").openModal();
         // $("#modal1").closeModal();

         // $(".modal-trigger").leanModal({
         //  dismissible: true, // Modal can be dismissed by clicking outside of the modal
         //  opacity: .0, // Opacity of modal background
         //  in_duration: 300, // Transition in duration
         //  out_duration: 200, // Transition out duration
         //  ready: function() { alert("Ready"); }, // Callback for Modal open
         //  complete: function() { alert("Closed"); } // Callback for Modal close 
       // });

    $(function () {
      $.scrollUp({
        animation: "slide"
      });
    });       

    $(".brate1").hover(function () {
        $(".rate1").removeClass("grey-text");
        $(".rate1").addClass("orange-text");
        $(".ratemsg").text("Saya sangat tidak menyukai buku ini").css("color", "red");
    }, function () {
        $(".rate1").removeClass("orange-text");
        $(".rate1").addClass("grey-text");
        $(".ratemsg").text("Berikan rating untuk buku ini").css("color", "grey");
    });

    $(".brate2").hover(function () {
        $(".rate2, .rate1").removeClass("grey-text");
        $(".rate2, .rate1").addClass("orange-text");
        $(".ratemsg").text("Saya tidak terlalu menyukai buku ini").css("color", "orange");
    }, function () {
        $(".rate2, .rate1").removeClass("orange-text");
        $(".rate2, .rate1").addClass("grey-text");
        $(".ratemsg").text("Berikan rating untuk buku ini").css("color", "grey");
    });

    $(".brate3").hover(function () {
        $(".rate3, .rate2, .rate1").removeClass("grey-text");
        $(".rate3, .rate2, .rate1").addClass("orange-text");
        $(".ratemsg").text("Buku ini biasa-biasa saja")
                     .css("color", "yellowgreen");
    }, function () {
        $(".rate3, .rate2, .rate1").addClass("grey-text");
        $(".rate3, .rate2, .rate1").removeClass("orange-text");
        $(".ratemsg").text("Berikan rating untuk buku ini").css("color", "grey");
    });

    $(".brate4").hover(function () {
        $(".rate4, .rate3, .rate2, .rate1").removeClass("grey-text");
        $(".rate4, .rate3, .rate2, .rate1").addClass("orange-text");
        $(".ratemsg").text("Saya menyukai buku ini").css("color", "lime");
    }, function () {
        $(".rate4, .rate3, .rate2, .rate1").removeClass("orange-text");
        $(".rate4, .rate3, .rate2, .rate1").addClass("grey-text");
        $(".ratemsg").text("Berikan rating untuk buku ini").css("color", "grey");
    });

    $(".brate5").hover(function () {
        $(".rate5, .rate4, .rate3, .rate2, .rate1").removeClass("grey-text");
        $(".rate5, .rate4, .rate3, .rate2, .rate1").addClass("orange-text");
        $(".ratemsg").text("Saya sangat menyukai buku ini").css("color", "green");
    }, function () {
        $(".rate5, .rate4, .rate3, .rate2, .rate1").removeClass("orange-text");
        $(".rate5, .rate4, .rate3, .rate2, .rate1").addClass("grey-text");
        $(".ratemsg").text("Berikan rating untuk buku ini").css("color", "grey");
    }); 

    $(".trate").click(function () {
      cekcookies();
    });

    function cekcookies () {
      $(".inama").val($.cookie("cnama"));
      $(".iemail").val($.cookie("cemail"));
    }; 

    $(".bsend").click(function () {
      $.removeCookie("cnama");
      $.removeCookie("cemail");
      $.cookie("cnama", $("#nama").val());
      $.cookie("cemail", $("#email").val());
    });
   
   
});
