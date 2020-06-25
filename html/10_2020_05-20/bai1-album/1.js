document.addEventListener("DOMContentLoaded",function(){
	var nut = document.getElementById('Menu');
	var about = document.getElementsByClassName("about");
	var nav = document.getElementsByClassName('nav');
	// console.log(top[0]);
// console.log(nut);
nut.onclick = function(){
	about[0].classList.toggle('auto');
	nav[0].classList.toggle('mt');
}
},false);