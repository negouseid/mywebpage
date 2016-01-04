

var clickedTime; var createdTime; var reactionTime;

function makeBox(){

var time=Math.random();

time=time*5000;

setTimeout(function()

{

if (Math.random()>0.3){

document.getElementById("box").style.borderRadius="100px";

}else {

document.getElementById("box").style.borderRadius="0";

}

var top=Math.random();

top=top*300;

var left=Math.random();

left=left*500;

document.getElementById("box").style.top=top+"px";

document.getElementById("box").style.left=left+"px";

document.getElementById("box").style.backgroundImage="url('https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Soccer_ball.svg/2000px-Soccer_ball.svg.png')"

document.getElementById("box").style.display="block";

createdTime=Date.now();

}, time);

}

document.getElementById("box").onclick=function()

{

clickedTime=Date.now();

reactionTime=(clickedTime-createdTime)/1000;

document.getElementById("time").innerHTML=reactionTime+" second";

this.style.display="none";

makeBox();

}

makeBox();