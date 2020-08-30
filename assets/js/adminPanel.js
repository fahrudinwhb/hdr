 $(document).ready(function(){

 	$('.button-collapse').sideNav();
 	$('select').material_select();
  $('.modal-trigger').leanModal(); 
  $('.materialboxed').materialbox();
  $('.tooltipped').tooltip({delay: 20});

 	// if($(".sidebar").height()>$(".content").height()){
 	// 	$(".content").height($(".sidebar").height());
 	// }else{
 	// 	$(".sidebar").height($(".content").height());	
 	// }

    $(".sidebar").height($(".content").height()); 

 	$("#banyak").click(function () {
        var sampai = $("#sampai").val();
        var mulai = $("#mulai").val();

        if(mulai > sampai){
        	// $("#warning").html("<b>sampai</b> harus lebih besar dari <b>mulai</b>").css("color", "red");
            toastfalse("volume akhir harus lebih besar dari volume awal");
        	return false;
        }
  });

  $("#banyak").click(function () {
    if($("#mulai").val() < 0 || $("#sampai").val() < 0 ){
        	// $("#warning").html("<b>mulai</b> dan <b>sampai</b> tidak boleh kurang dari 0 ").css("color", "red");
         toastfalse("volume awal dan volume akhir tidak boleh kurang dari 0");
         return false;
       }
  });

  $("#satu").click(function () {
    if($("#vol").val() < 0 ){
            // $("#warningsatu").html("<b>volume</b> tidak boleh kurang dari 0 ").css("color", "red");
            toastfalse("volume tidak boleh kurang dari 0");
            return false;
          }
   });

  function toastfalse ($content) { 
    var $toastContent = $content;
    Materialize.toast($toastContent, 5000);
  }

  $(function () {
    $.scrollUp({
      animation: 'slide'
    });
  });    

 	// $(".removefix").click(function () {
  //       $("#navtop").toggleClass("fix");
  //   });

});
