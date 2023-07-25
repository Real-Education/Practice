function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
/*login page js*/
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
function psw(){
var psw = document.getElementById("psw");
psw.style.display = "block";
}