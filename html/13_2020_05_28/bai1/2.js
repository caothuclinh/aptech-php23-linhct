document.addEventListener("DOMContentLoaded",function(){
	// var stt = document.getElementById('stt').innerHTML;
	var thongtin = {
		stt :1,
		ten : "cao thuc Linh",
		ngaysinh : "19/04",
		chieucao: 166,
		cannang: 55,
		chuyennganh: "codeIn"
	}
	 x = Object.keys(thongtin);
	 
	 y = Object.entries(thongtin);
	 
	 for(var i =0 ; i < y.length; i ++){
	 	// console.log(y[i]);
	 	td = document.createElement("td");
		td.innerHTML = y[i];
		document.getElementById('tr').appendChild(td);
	 }
	
},false);