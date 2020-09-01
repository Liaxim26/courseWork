//добавление товара 
//авторизованный 
/*if ($_SESSION['username'] != null){
console.log('cool')
} else {
	console.log('bad')
}*/

function addToCart(id) {
	$.ajax({
		url:"echo.php",
		async: false,
		type: "POST",
		dataType: "text",
		data: 'action=add&id=' + id,
		success:function(result)
		{
			alert(result);
		}
})
}

function delItem(id) {
	$.ajax({
		url:"echo.php",
		async: false,
		type: "POST",
		dataType: "text",
		data: 'action=del&id=' + id
})
	window.location.reload()
}

function countUp(id) {
	$.ajax({
		url:"echo.php",
		async: false,
		type: "POST",
		dataType: "text",
		data: 'action=up&id=' + id,
		success:function(result)
		{
			alert(result);
		}
})
	window.location.reload()
}
function countDown(id) {
	$.ajax({
		url:"echo.php",
		async: false,
		type: "POST",
		dataType: "text",
		data: 'action=down&id=' + id
})
	window.location.reload()
}

//не авторизованный 
/*,
		success:function(result)
		{
			alert(result);
		}
*/
