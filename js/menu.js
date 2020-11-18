
var int_0 = -1;

function show() {

if (int_0==-1){
int_0=int_0*-1
  document.getElementById("search").style.display = "block";}
else {  int_0=int_0*-1
  document.getElementById("search").style.display = "none";}


}
function Show_menu(){}

function MenuO_Sect() {document.getElementById("p1_mission").style.display = "block";
document.getElementById("p2_mission").style.display = "none";
document.getElementById("Tar_B_1").style.display = "block";
document.getElementById("Tar_B_2").style.display = "none";
//console.log ("aaa");
}
function MenuT_Sect() {document.getElementById("p2_mission").style.display = "block";
document.getElementById("p1_mission").style.display = "none"
document.getElementById("Tar_B_1").style.display = "none";
document.getElementById("Tar_B_2").style.display = "block";
//console.log ("bbb");
}
