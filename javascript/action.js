function checkPass(){
	var pass1 = document.getElementById('pass1').value;
	var pass2 = document.getElementById('pass2').value;

	if(pass2 != pass1){
		document.getElementById('wrongPass').style.display = 'block';
		document.getElementById('pass2').value = "";
	}
}

function hideError(){
	document.getElementById('wrongPass').style.display = 'none';
}

function printSales(){
	location.href = './sales_report.php';
}

function printSalesReport(){
	window.print();
}

function back() {
	location.href = './view_sales.php';
}

function back2() {
	location.href = './manage_products.php';	
}

function pirint(){
    location.href = './stmp.php';
}