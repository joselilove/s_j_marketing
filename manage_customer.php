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

        <?php
        include 'update_customer.php';
        ?>

        <div class="table-agile-info">
          <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #f0bcb4 ! important;">


              <ul class="nav pull-right top-menu" style="margin-top: 10px;">
                <li>
                  <select class="form-control" id="sorting">
                    <option value="date">Date</option>
                    <option value="product_serial_number">Serial Number</option>
                    <option value="customer_name">Customer Name</option>
                  </select>
                </li>
                <li>
                  <input type="text" class="form-control search" name="customer_search" placeholder="Enter.." onkeyup="find_customer();">
                </li>
              </ul>

              Customer
            </div>
            <div class="table-responsive">
              <table id="customer_table" class="table table-striped b-t b-light"></table>
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

<script src="./javascript/product_value.js?v=3"></script>
<script src="./javascript/customer_value.js?v=6"></script>
<script type="text/javascript" src="javascript/clear_textfield_customer.js?v=31"></script>

<script>
  var current_page = 0;
  var end_page = 5;
  //pagination
  function setPage_next() {

    current_page = current_page + 6;
    end_page = end_page + 6;
    view_customer();
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
    view_customer();
  }


  function view_customer() {
    destination = "db/view_customer.php";
    var xhr = new XMLHttpRequest();
    xhr.open("GET", destination, true);
    xhr.send();
    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
        Obj = JSON.parse(xhr.responseText);
        display_customer(Obj);
      }
    }
  }

  function find_customer() {
    var sort = document.getElementById('sorting').value;
    var customer_name = document.getElementsByName('customer_search')[0].value;
    destination = "db/find_customer.php?customer_name=" + customer_name + "&sort=" + sort;
    var xhr = new XMLHttpRequest();
    xhr.open("GET", destination, true);
    xhr.send();
    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
        current_page = 0;
        end_page = 5;
        Obj = JSON.parse(xhr.responseText);
        display_customer(Obj);
      }
    }
  }

  function display_customer(custData) {
    var customer_info = '<thead>' +
      '<tr>' +
      '<th>Customer Name</th>' +
      '<th>Contact No</th>' +
      '<th>S.I.</th>' +
      '<th>D.R.</th>' +
      '<th>Term</th>' +
      '<th>Address</th>' +
      '<th data-breakpoints="xs">Date</th>' +
      '<th>Product Serial Number</th>' +
      '<th>Quantity</th>' +
      '<th>Unit</th>' +
      '<th>Amount</th>' +
      '<th style="width:30px;"></th>' +
      '</tr>' +
      '</thead>';
    var h = "'";
    // for(var i = 0; i < custData.customer_name.length; i++){
    for (var i = current_page; i <= end_page; i++) {
      if (i >= custData.customer_name.length) {
        end_page = end_page - 6;
        current_page = current_page - 6;
        break;
      }
      customer_info += '<tbody>' +
        '<tr data-expanded="true">' +
        '<td>' + custData.customer_name[i] + '</td>' +
        '<td>' + custData.contact_no[i] + '</td>' +
        '<td>' + custData.si_no[i] + '</td>' +
        '<td>' + custData.dr_no[i] + '</td>' +
        '<td>' + custData.term[i] + '</td>' +
        '<td>' + custData.customer_address[i] + '</td>' +
        '<td>' + custData.date[i] + '</td>' +
        '<td>' + custData.product_serial_number[i] + '</td>' +
        '<td>' + custData.quantity[i] + '</td>' +
        '<td>' + custData.unit[i] + '</td>' +
        '<td>' + custData.amount_paid[i] + '</td>' +
        '<td>'
        // +'<a href="#" onclick="find_customer_to_update('+custData.customer_id[i]+','+h+''+custData.product_serial_number[i]+''+h+');" class="active" ui-toggle-class=""><i class="glyphicon glyphicon-refresh" data-toggle="modal" data-target="#update_product"></i></a>'
        +
        '</td>' +
        '</tr>' +
        '</tbody>';
    }
    document.getElementById("customer_table").innerHTML = customer_info;
  }

  function find_customer_to_update(data, serial_number) {
    destination = "db/find_customer_to_update.php?customer_id=" + data +
      "&serial_number=" + serial_number;
    var xhr = new XMLHttpRequest();
    xhr.open("GET", destination, true);
    xhr.send();
    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
        custData = JSON.parse(xhr.responseText);
        getElementCustomerID()[0].value = custData.customer_id[0];
        getElementCustomerName()[0].value = custData.customer_name[0];
        getElementCustomerContactNo()[0].value = custData.contact_no[0];
        getElementSIno()[0].value = custData.si_no[0];
        getElementDRno()[0].value = custData.dr_no[0];
        getElementCustomerTerm()[0].value = custData.term[0];
        getElementCustomerAddress()[0].value = custData.customer_address[0];
        getElementDate()[0].value = custData.date[0];
        getElementSerialNumber()[0].value = custData.product_serial_number[0];
        getElementQuantity()[0].value = custData.quantity[0];
        getElementUnit()[0].value = custData.unit[0];
        getElementAmount()[0].value = custData.amount_paid[0];
        getElementProductPrice()[0].value = custData.price[0];
      }
    }
  }

  function update_customer() {
    destination = "db/update_customer_to_db.php?customer_name=" + getCustomerName() +
      "&contact_no=" + getCustomerContactNo() +
      "&si_no=" + getSIno() +
      "&dr_no=" + getDRno() +
      "&term=" + getCustomerTerm() +
      "&address=" + getCustomerAddress() +
      "&date=" + getDate() +
      "&serial_number=" + getSerialNumber() +
      // "&product_name="+getProductName()+
      "&quantity=" + getQuantity() +
      "&unit=" + getUnit() +
      "&amount_paid=" + getAmount() +
      "&customer_id=" + getCustomerID();
    var xhr = new XMLHttpRequest();
    xhr.open("GET", destination, true);
    xhr.send();
    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
        if (xhr.responseText == 'Customer Updated!') {
          view_customer();
          clear_textfield_customer_add();
          $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
            $("#success-alert").slideUp(500);
          });


        } else {
          alert(xhr.responseText);
          $("#danger-alert").fadeTo(2000, 500).slideUp(500, function() {
            $("#danger-alert").slideUp(500);
          });
        }
      }
    }

  }

  function find_product(data) {
    destination = "db/find_product_serial_number.php?serial_number=" + getSerialNumber();
    var xhr = new XMLHttpRequest();
    xhr.open("GET", destination, true);
    xhr.send();
    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
        Obj = JSON.parse(xhr.responseText);
        if (xhr.responseText == '{}') {
          getElementUnit()[0].value = '';
          getElementProductPrice()[0].value = '';
        } else {
          getElementUnit()[0].value = Obj.unit[0];
          getElementProductPrice()[0].value = Obj.price[0];
        }

      }
    }
  }

  function showAmount(data) {
    var total = data * getProductPrice();
    getElementAmount()[0].value = total;
  }

  window.addEventListener('load', function(event) {
    element = document.getElementById("customer");
    element.classList.add("active");
    $("#danger-alert").hide();
    $("#success-alert").hide();
    view_customer();
  });
</script>