$("#input").on("input" , function(){
      $(this).value()
});

function checkPartStatus(){
      if ( $("#partYes").prop("checked") ) {
            console.log("show");
            $("#partAmountContainer").css("display", "inline-block");
      } else if ( $("#partNo").prop("checked") ) {
            console.log("hide");
            $("#partAmountContainer").css("display", "none");
      }
}
var checked = false;
$( window ).on("load", function(){
      $("#submit").css("cursor", "not-allowed");
});
function checkTOS(){
      if( !checked ) {
            $("#submit").prop("disabled", false);
            $("#submit").css("cursor", "pointer");
            checked = true;
      } else if( checked ){
            $("#submit").prop("disabled", true);
            $("#submit").css("cursor", "not-allowed");
            checked = false;
      }
}