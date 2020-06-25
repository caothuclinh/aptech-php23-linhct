document.addEventListener("DOMContentLoaded",function(){
	'use strict';
	var on = document.getElementById('on');
	var off = document.getElementById('off');
	var sang = document.querySelector('#sang');
	var toi = document.querySelector('#toi');
	var onf = document.getElementsByClassName('onf');
	on.onclick = function(){
		toi.classList.remove('dentoi');
		sang.classList.remove('densang');
	}
	off.addEventListener('click',function(){
		sang.classList.add('densang');
		toi.classList.add('dentoi');
	},false);
	onf[0].addEventListener('click',function(){
		sang.classList.toggle('densang');
		toi.classList.toggle('dentoi');
	},false);
	function tong(a,b){
		return a+b;
	}
	console.log(tong(5,7));
},false);