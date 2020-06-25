// document.addEventListener("DOMContentLoaded",function(){
	function validateForm(){
		// lay gia tri nhap vao
		var username = document.getElementById('username').value;
    	var password = document.getElementById('password').value;
    	// lay phan tu
		var red = document.getElementsByClassName('name');
		// kiem tra rong
		if(username == ""){
			console.log("hay nhap vao username");
			red[0].classList.add('red');
		}
		else if(password == ""){
			console.log("hay nhap vao password");
			red[1].classList.add('red');
		}
		else{
			for(var i=0; i < red.length; i++){
				red[i].classList.remove('red');
				
			}
			console.log("ok roi");
			// return true;
		}
		return false;
	}
	console.log("hello");
// },false);
 