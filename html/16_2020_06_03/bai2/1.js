document.addEventListener("DOMContentLoaded",function(){
	// console.log("hello");
	var nav = document.getElementsByClassName('navBar');
	var nav = nav[0];
	console.log(nav);
	var close = document.getElementsByClassName('xoaDi');
	var close = close[0];
	var menu =document.querySelector('.menu');
	nav.addEventListener('click',function(){
		close.classList.add('hien');
		nav.classList.add('an');
		menu.classList.add('dira');
	});
	close.addEventListener('click',function(){
		close.classList.remove('hien');
		nav.classList.remove('an');
		menu.classList.remove('dira');
	});
	
},false);
