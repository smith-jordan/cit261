<!DOCTYPE html>
<html>
<head>
<!--This is my sandbox code-->
<title>DOM Manipulation</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript">

 function City(a,b,c,d,e,f){
  this.cityA = a;
  this.cityB = b;
  this.cityC = c;
  this.cityD = d;
  this.cityE = e;
  this.cityF = f;
}
var eIDcity = new City("Pocatello", "Blackfoot", "Shelley", "Idaho Falls", "Rigby", "Rexburg");

document.write("When driving from Salt Lake you will pass " + eIDcity.cityA + ", " + eIDcity.cityB + ", " + eIDcity.cityC + ", " + eIDcity.cityD + " and " + eIDcity.cityE + " on your way to " + eIDcity.cityF + ".");


window.onload = function(){

var newPar = document.getElementById("p2");
newPar.innerHTML = "This is an insert of paragraph two via DOM Manipulation with the JavaScrip Object of " + eIDcity.cityA;

var colorSizeChange = document.getElementById("p1");
colorSizeChange.style.color = "red";
colorSizeChange.style.fontSize = "28px";
}

</script>
</head>
<body>
<div>This a a sample of JavaScrip Objects and DOM Manipulation.</div>
<p id="p1">
Here is paragraph 1 with DOM Manipulation.
</p>
<p id="p2">
</p>
<div id="div1"></div>
</body>