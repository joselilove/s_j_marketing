<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/stmprint.css?v=12">
</head>

<body>
	<div class="container">
		<header>
			<div class="headCon">
				<h2>S&J Caleon Marketing, Inc.</h2>
				<p>INVENTORY AND STOCK MANAGEMENT REPORT(ISMR)</p>
				<h3><b>SAN JOSE CITY BRANCH</b></h3>
			</div>
		</header>
		<section>
			<div class="secCon">
				<table id="tableData"></table>
			</div>
		</section>
		<footer>
			<div class="footCon">
				<div id="f1">
					<span>
						<p>Prepared By:</p>
						<input type="" name="">
					</span>
					<span>
						<p>Checked By:</p>
						<input type="" name="">
					</span>
					<span>
						<p>Noted By:</p>
						<input type="" name="">
					</span>
				</div>
				<div id="f2">
					<span>
						<p><b>Branch Invnentory Clerk</b></p>
					</span>
					<span>
						<p><b>Sales Supervisor</b></p>
					</span>
					<span>
						<p><b>Area Sales Supervisor</b></p>
					</span>
				</div>
				<span id="btn">
					<button id="prnt" onclick="print(); insert_remarks();">Print</button>
				</span>
				<span>
					<button id="back" onclick="back2()">Back</button>
				</span>
				<span>
					<button id="prnt" onclick="find_product()">Set Date</button>
				</span>
			</div>
		</footer>
	</div>
</body>
<script src="javascript/action.js"></script>

</html>
<script>
	var prod_id = [];
	var remarks = [];

	function view_inventory() {
		destination = "db/view_inventory.php";
		var xhr = new XMLHttpRequest();
		xhr.open("GET", destination, true);
		xhr.send();
		xhr.onreadystatechange = function() {
			if (xhr.readyState == 4 && xhr.status == 200) {
				Obj = JSON.parse(xhr.responseText);
				display_inventory(Obj);
			}
		}
	}

	function insert_remarks() {
		var product_id_array = document.getElementsByClassName('product_id_array');
		var product_remarks_array = document.getElementsByClassName('product_remarks_array');
		for (var i = 0; i < product_id_array.length; i++) {
			prod_id.push(product_id_array[i].value);
			remarks.push(product_remarks_array[i].value);
		}
		destination = "db/update_remarks.php?prod_id=" + JSON.stringify(prod_id) + "&remarks=" + JSON.stringify(remarks);
		var xhr = new XMLHttpRequest();
		xhr.open("GET", destination, true);
		xhr.send();
		xhr.onreadystatechange = function() {
			if (xhr.readyState == 4 && xhr.status == 200) {

			}
		}
	}

	function find_product() {
		var sort = 'date_received';
		var date = prompt("Please Enter Date for Sales", getDate());
		if (date) {
			destination = "db/find_product_r.php?date=" + date + "&sort=" + sort;
			var xhr = new XMLHttpRequest();
			xhr.open("GET", destination, true);
			xhr.send();
			xhr.onreadystatechange = function() {
				if (xhr.readyState == 4 && xhr.status == 200) {
					Obj = JSON.parse(xhr.responseText);
					current_page = 0;
					end_page = 5;
					display_inventory(Obj);
				}
			}
		}
	}

	function display_inventory(prodData) {
		var inventory_info = '<tr>' +
			'<td>STM NO.</td>' +
			'<td>STM DATE</td>' +
			'<td>MODEL</td>' +
			'<td>SERIAL</td>' +
			'<td>DR/SI NO.</td>' +
			'<td>DR/SI DATE</td>' +
			'<td>REMARKS</td>' +
			'</tr>';
		if (prodData.product_name == null) {
			alert('No Inventory Report found! Please Change or input correct date format');
		}
		for (var i = 0; i < prodData.product_name.length; i++) {
			inventory_info += '<tr>' +
				'<td>' + prodData.stm_no[i] + '</td>' +
				'<td>' + prodData.stm_date[i] + '</td>' +
				'<td>' + prodData.unit[i] + '</td>' +
				'<td>' + prodData.serial_number[i] + '</td>' +
				'<td>' + prodData.dr_si_no[i] + '</td>' +
				'<td>' + prodData.dr_si_date[i] + '</td>' +
				'<td><input type="text" class="product_remarks_array" value="' + prodData.remarks[i] + '" id="remark"></td>' +
				'<input type="text" class="product_id_array" value="' + prodData.ID[i] + '" hidden>' +
				'</tr>';
		}
		document.getElementById("tableData").innerHTML = inventory_info;
	}

	function getDate() {
		var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth() + 1; //January is 0!
		var yyyy = today.getFullYear();

		if (dd < 10) {
			dd = '0' + dd
		}

		if (mm < 10) {
			mm = '0' + mm
		}
		today = yyyy + '-' + mm + '-';
		return today;
	}

	window.addEventListener('load', function(event) {
		find_product();
	});
</script>