//
$(document).ready(function() {
$("#btn").click(function() {
var inputName = $("#name").val();
    $.ajax({
"url":"insert.php",
"method":"POST",
"data":{name:inputName},
// "type":"jeson",
success:function (response){
    $("#result").html(response);

}
 });
 }); 
});