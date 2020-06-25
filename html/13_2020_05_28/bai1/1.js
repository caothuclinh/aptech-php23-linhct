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
	
	for (var i = 0; i < 6;  i++) {
		}
	for(duyet in thongtin){
		
		// var tt = "<td>"+thongtin[duyet]+"</td>";
		document.getElementById('tt1').innerHTML = thongtin['stt'] ;
		document.getElementById('tt2').innerHTML = thongtin['ten'] ;
		document.getElementById('tt3').innerHTML = thongtin['ngaysinh'] ;
		document.getElementById('tt4').innerHTML = thongtin['chieucao'] ;
		document.getElementById('tt5').innerHTML = thongtin['cannang'] ;
		document.getElementById('tt6').innerHTML = thongtin['chuyennganh'] ;
	}
},false);