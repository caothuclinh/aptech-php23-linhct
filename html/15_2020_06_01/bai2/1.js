$(document).ready(function(){
	$('button').click(function(){
	    $.get("https://namcoi.com/du-an/aptech-php-laravel-crud-user/public/api/users", function(data, users){
      	// $.each(result, function(data, users){
      	for (var i = 0 ; i < data.users.length ; i++) {
      		var user = data.users[i];
      		var tr = document.createElement('tr');
      		var keyArray = ["id", "email", "ten"];
      		for(var i = 0; i < 3; i ++){
      		var value = user[keyArray['i']];
      		var td = document.createElement('td');
      		td.innerHTML = value;
      		tr.appendChild(td);
      		}
      	$('#tableBody').append(tr);
      	}
      	});
   	// });
	});
});
