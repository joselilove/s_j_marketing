<?php
$date = date(" l, ");
$date2 = date("M d, Y");
$datenow = $date . $date2;
?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/print.css">
</head>

<body>
    <div class="container">
        <header>
            <div class="headCon">
                <h2>S&J Caleon Marketing, Inc.</h2>
                <p>San Jose City Branch</p>
                <h5><b>DAILY SALES REPORT:</b><span id="show_date"></span></h5>
            </div>
        </header>

        <section>
            <div class="secCon">
                <table id="tableData"></table>
            </div>
        </section>
        <br>
        <footer>
            <div class="footCon">
                <div id="f1">
                    <span>
                        <p id="fp1">
                            Recapitulation:
                        </p>
                        <input type="text">
                    </span>
                    <span>
                        <p id="fp2">
                            A)Cash/Ch/CC&nbsp;&nbsp;&nbsp;: &#8369;
                        </p>
                        <input type="text"><br />
                        <p>
                            B)Installment&nbsp;&nbsp;&nbsp;&nbsp;: &#8369;
                        </p>
                        <input type="text">
                    </span>
                    <span>
                        <p id="fp3">
                            JV/CV# &nbsp;:
                        </p>
                        <input type="text"><br />
                        <p>
                            Dated&nbsp;&nbsp;&nbsp;:
                        </p>
                        <input type="text">
                    </span>
                </div>
                <div id="f2">
                    <span>
                        <p id="fp4">
                            Prepared By:
                        </p>
                        <input type="text">
                    </span>
                    <span>
                        <p id="fp5">
                            Certified Corrected By:
                        </p>
                        <input type="text">
                    </span>
                    <span>
                        <p id="fp7">
                            Checked By:
                        </p>
                        <input type="text">
                    </span>
                    <span>
                        <p id="fp6">
                            Noted By:
                        </p>
                        <input type="text">
                    </span>
                </div>
                <div id="f3">
                    <span id="fs1">
                        <input id="fi1" type="text">
                        <p id="fp">Sales Representative</p>
                    </span>
                    <span id="fs1">
                        <input id="fi1" type="text">
                        <p id="fp">Sales Supervisor</p>
                    </span>
                    <span id="fs1">
                        <input id="fi1" type="text">
                        <p id="fp">Sales Analyst</p>
                    </span>
                    <span id="fs2">
                        <input id="fi2" type="text">
                        <p id="fp">Accounting Clerk</p>
                    </span>
                    <span id="fs2">
                        <input id="fi2" type="text">
                        <p id="fp">Book Keeper</p>
                    </span>
                    <span id="fs2">
                        <input id="fi2" type="text">
                        <p id="fp">Sales Manager</p>
                    </span>
                    <span id="fs2">
                        <input id="fi2" type="text">
                        <p id="fp">Chieif Executive Officer</p>
                    </span>
                </div>
                <span id="btn">
                    <button id="prnt" onclick="printSalesReport();">Print</button>
                </span>
                <span>
                    <button id="back" onclick="back()">Back</button>
                </span>
                <span>
                    <button id="prnt" onclick="find_sales()">Set Date</button>
                </span>
                <span id="btn">
                    <button id="prnt" onclick="saved_printed();" style="margin-left: 101%;">Save</button>
                </span <div id="f4">
            </div>
    </div>
    </footer>
    </div>
</body>

</html>
<script src="javascript/action.js?v=12"></script>
<script>
    var data_info;
    var net_cash = 0;
    var coll = 0;
    var charge = 0;
    var sales_info = '';
    var date_v = '';
    var c_id = [];
    var colln_a = [];
    var charge_a = [];
    var amount_f_a = [];
    var credit_a = [];
    var promo_a = [];
    var serial_a = [];
    var remarks_a = [];

    function saved_printed() {
        var colln_temp = document.getElementsByClassName('colln_array');
        var charge_temp = document.getElementsByClassName('charge_array');
        var c_id_temp = document.getElementsByClassName('customer_id');
        var amount_f_temp = document.getElementsByClassName('amount_f_array');
        var credit_temp = document.getElementsByClassName('credit_array');
        var promo_temp = document.getElementsByClassName('promo_array');
        var serial_temp = document.getElementsByClassName('serial_array');
        var remark_temp = document.getElementsByClassName('remark_array');
        for (var i = 0; i < c_id_temp.length; i++) {
            c_id.push(c_id_temp[i].value);
            colln_a.push(colln_temp[i].value);
            charge_a.push(charge_temp[i].value);
            amount_f_a.push(amount_f_temp[i].value);
            credit_a.push(credit_temp[i].value);
            promo_a.push(promo_temp[i].value);
            serial_a.push(serial_temp[i].value);
            remarks_a.push(remark_temp[i].value);
        }
        destination = "db/saved_sales_report.php?c_id=" + JSON.stringify(c_id) +
            "&colln_a=" + JSON.stringify(colln_a) +
            "&charge_a=" + JSON.stringify(charge_a) +
            "&amount_f_a=" + JSON.stringify(amount_f_a) +
            "&credit_a=" + JSON.stringify(credit_a) +
            "&promo_a=" + JSON.stringify(promo_a) +
            "&serial_a=" + JSON.stringify(serial_a) +
            "&remarks_a=" + JSON.stringify(remarks_a);
        var xhr = new XMLHttpRequest();
        xhr.open("GET", destination, true);
        xhr.send();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {}
        }

    }

    function view_sales() {
        destination = "db/view_sales.php";
        var xhr = new XMLHttpRequest();
        xhr.open("GET", destination, true);
        xhr.send();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                Obj = JSON.parse(xhr.responseText);
                data_info = Obj;
                display_sales(Obj);
            }
        }
    }

    function find_sales() {
        var sort = 'date';
        var date_v = prompt("Please Enter Date for Sales", getDate());
        if (date_v) {
            document.getElementById("show_date").innerHTML = date_v;
            destination = "db/find_sales.php?date=" + date_v + "&sort=" + sort;
            var xhr = new XMLHttpRequest();
            xhr.open("GET", destination, true);
            xhr.send();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    Obj = JSON.parse(xhr.responseText);
                    data_info = Obj;
                    display_sales(Obj);
                }
            }
        }
    }

    function getColl() {
        var total = 0;
        var x = document.getElementsByClassName('colln_array');

        for (var i = 0; i < x.length; i++) {
            if (isNaN(parseInt(x[i].value))) {
                total += 0;
            } else {
                total += parseInt(x[i].value);
            }
        }
        document.getElementById('coll').innerHTML = total;
    }

    function getCharge() {
        var total = 0;
        var x = document.getElementsByClassName('charge_array');

        for (var i = 0; i < x.length; i++) {
            if (isNaN(parseInt(x[i].value))) {
                total += 0;
            } else {
                total += parseInt(x[i].value);
            }
        }
        document.getElementById('charge').innerHTML = total;
    }

    function display_sales(data) {
        var sales_info = '<tr>' +
            '<td>DR/SI NUMBER</td>' +
            '<td>CUSTOMER</td>' +
            '<td>MODEL</td>' +
            '<td>SERIAL NUMBER</td>' +
            '<td>TERM</td>' +
            '<td>NET CASH PRICE</td>' +
            '<td>COLL"N</td>' +
            '<td>CHARGE/DP BALANCE</td>' +
            '<td>AMOUNT FINANCED</td>' +
            '<td>CREDIT APPROVALS</td>' +
            '<td>PROMO ITEMS</td>' +
            '<td>SERIAL NUMBER</td>' +
            '<td>REMARKS</td>' +
            '<tr>';
        if (data.customer_name == null) {
            alert('No Sales found! Please Change or input correct date format');
        } else {
            for (var i = 0; i < data.customer_name.length; i++) {
                net_cash += parseFloat(data.amount_paid[i]);
                sales_info += '<tr>' +
                    '<td>' + data.si_no[i] + '</td>' +
                    '<td>' + data.customer_name[i] + '</td>' +
                    '<td>' + data.unit[i] + '</td>' +
                    '<td>' + data.serial_number[i] + '</td>' +
                    '<td>' + data.term[i] + '</td>' +
                    '<td>' + data.amount_paid[i] + '</td>' +
                    '<td><input type="number" class="colln_array" onkeyup="getColl()"></td>' +
                    '<td><input type="number" class="charge_array" onkeyup="getCharge()"></td>' +
                    '<td><input type="number" class="amount_f_array"></td>' +
                    '<td><input type="text" class="credit_array"></td>' +
                    '<td><input type="text" class="promo_array"></td>' +
                    '<td><input type="text" class="serial_array"></td>' +
                    '<td><input type="text" class="remark_array"></td>' +
                    '<input type="number" class="customer_id" value="' + data.customer_id[i] + '" hidden>' +
                    '<tr>';
            }
            sales_info += '<tr>' +
                '<td>Total</td>' +
                '<td></td>' +
                '<td></td>' +
                '<td></td>' +
                '<td></td>' +
                '<td>' + net_cash + '</td>' +
                '<td><p id="coll">0</p></td>' +
                '<td><p id="charge">0</p></td>' +
                '<td></td>' +
                '<td></td>' +
                '<td></td>' +
                '<td></td>' +
                '<td></td>' +
                '<tr>';
            document.getElementById("tableData").innerHTML = sales_info;
            show_blank_input(data);
            getColl();
            getCharge();
        }
    }

    function show_blank_input(data) {
        for (var i = 0; i < data.customer_name.length; i++) {
            if (data.r_num[i] != 0) {
                document.getElementsByClassName('colln_array')[i].value = data.coll[i];
                document.getElementsByClassName('charge_array')[i].value = data.charge[i];
                document.getElementsByClassName('amount_f_array')[i].value = data.amount_finance[i];
                document.getElementsByClassName('credit_array')[i].value = data.credit_approval[i];
                document.getElementsByClassName('promo_array')[i].value = data.promo_item[i];
                document.getElementsByClassName('serial_array')[i].value = data.serial_number_2[i];
                document.getElementsByClassName('remark_array')[i].value = data.remarks[i];
            }
        }
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
        today = yyyy + '-' + mm + '-' + dd
        return today;
    }

    window.addEventListener('load', function(event) {
        find_sales();
    });
</script>