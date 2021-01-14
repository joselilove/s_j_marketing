<!DOCTYPE html>

<head>
  <title>S & J Marketing</title>
  <?php
  include 'template/plugins.php';
  ?>
</head>

<body>
  <section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
      <?php
      include 'template/logo.php';
      include 'template/user_brief_info.php';
      ?>
    </header>
    <!--header end-->
    <?php
    include 'template/sidebar.php';
    ?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="table-agile-info">
          <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #f0bcb4 ! important;">

              <ul class="nav pull-right top-menu" style="margin-top: 10px;">
                <li>
                  <select class="form-control" id="sort">
                    <option value="date">Date Bought</option>
                    <option value="date_received">Date Received</option>
                    <option value="serial_number">Serial Number</option>
                    <option value="customer_name">Customer Name</option>
                    <option value="product_name">Product Name</option>
                  </select>
                </li>
                <li>
                  <input type="text" class="form-control search" name="sales_search" placeholder="Enter.." onkeyup="find_sales()">
                </li>
              </ul>

              Sales
            </div>
            <div class="table-responsive">
              <table id="sales_table" class="table table-striped b-t b-light"></table>
            </div>
            <footer class="panel-footer">
              <div class="row">

                <div class="col-sm-7 text-right text-center-xs" style="padding-right: 4.2em;">
                  <ul class="pagination pagination-sm m-t-none m-b-none">

                    <li><a href="#" onclick="setPage_prev()"><i class="fa fa-chevron-left"></i></a></li>
                    <li><a href="#" onclick="setPage_next()"><i class="fa fa-chevron-right"></i></a></li>

                  </ul>
                </div>
              </div>
            </footer>
          </div>
          <input type="button" value="Print" class="btn btn-success" onclick="printSales()">
        </div>
      </section>
      <!-- footer -->
      <div class="footer">
        <div class="wthree-copyright">

        </div>
      </div>
      <!-- / footer -->
    </section>

    <!--main content end-->
</body>

</html>
<script src="javascript/action.js"></script>
<script>
  var current_page = 0;
  var end_page = 5;
  //pagination
  function setPage_next() {
    current_page = current_page + 6;
    end_page = end_page + 6;
    view_sales();
  }

  function setPage_prev() {
    if (current_page <= 0) {
      current_page = current_page - 0;
    } else {
      current_page = current_page - 6;
      if (current_page < 0) {
        current_page = 0;
      }
    }

    if (end_page == 5) {
      end_page = end_page - 0;
    } else {
      end_page = end_page - 6;
      if (end_page < 5) {
        end_page = 5;
      }
    }
    view_sales();
  }

  function view_sales() {
    destination = "db/view_sales.php";
    var xhr = new XMLHttpRequest();
    xhr.open("GET", destination, true);
    xhr.send();
    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
        Obj = JSON.parse(xhr.responseText);
        display_sales(Obj);
      }
    }
  }

  function find_sales() {
    var sort = document.getElementById('sort').value;
    var date = document.getElementsByName('sales_search')[0].value;
    destination = "db/find_sales_report.php?date=" + date + "&sort=" + sort;
    var xhr = new XMLHttpRequest();
    xhr.open("GET", destination, true);
    xhr.send();
    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
        Obj = JSON.parse(xhr.responseText);
        current_page = 0;
        end_page = 5;
        display_sales(Obj);
      }
    }
  }

  function display_sales(data) {
    var sales_info = "<thead>" +
      '<tr>' +
      '<th data-breakpoints="xs">Product ID</th>' +
      '<th>Product Name</th>' +
      '<th>Unit</th>' +
      '<th>Serial Number</th>' +
      '<th>Quantity</th>' +
      '<th data-breakpoints="xs">Date Received</th>' +
      '<th>Brand Name</th>' +
      '<th>Price</th>' +
      '<th>Customer ID.</th>' +
      '<th>Customer Name</th>' +
      '<th>Contact No</th>' +
      '<th>SI NO</th>' +
      '<th>DR NO</th>' +
      '<th>Term</th>' +
      '<th>Address</th>' +
      '<th>Date</th>' +
      '<th>Serial Number</th>' +
      '<th>Quantity</th>' +
      '<th>Unit</th>' +
      '<th>Amount Paid</th>' +
      '<th style="width:30px;"></th>' +
      '</tr>' +
      '</thead>';
    //   for (var i = 0; i < data.product_name.length; i++) {   
    for (var i = current_page; i <= end_page; i++) {
      if (i >= data.product_name.length) {
        end_page = end_page - 6;
        current_page = current_page - 6;
        break;
      }
      sales_info += '<tbody>' +
        '<tr data-expanded="true">' +
        '<td>' + data.ID[i] + '</td>' +
        '<td>' + data.product_name[i] + '</td>' +
        '<td>' + data.unit[i] + '</td>' +
        '<td>' + data.serial_number[i] + '</td>' +
        '<td>' + data.quantity[i] + '</td>' +
        '<td>' + data.date_received[i] + '</td>' +
        '<td>' + data.brand_name[i] + '</td>' +
        '<td>' + data.price[i] + '</td>' +
        '<td>' + data.customer_id[i] + '</td>' +
        '<td>' + data.customer_name[i] + '</td>' +
        '<td>' + data.contact_no[i] + '</td>' +
        '<td>' + data.si_no[i] + '</td>' +
        '<td>' + data.dr_no[i] + '</td>' +
        '<td>' + data.term[i] + '</td>' +
        '<td>' + data.customer_address[i] + '</td>' +
        '<td>' + data.date[i] + '</td>' +
        '<td>' + data.serial_number[i] + '</td>' +
        '<td>' + data.quantity[i] + '</td>' +
        '<td>' + data.unit[i] + '</td>' +
        '<td>' + data.amount_paid[i] + '</td>' +
        '</tr>' +
        '</tbody>';
    }

    document.getElementById("sales_table").innerHTML = sales_info;
  }
  window.addEventListener('load', function(event) {
    view_sales();
    element = document.getElementById("sale");
    element.classList.add("active");
    $("#danger-alert").hide();
    $("#success-alert").hide();
  });
</script>