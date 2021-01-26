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
                include 'template/status.php';
                include 'template/calendar.php';
                ?>
            </section>
            <!-- footer -->
            <div class="footer">
                <div class="wthree-copyright">

                </div>
            </div>
            <!-- / footer -->
        </section>
        <!--main content end-->
    </section>

</body>

</html>

<script>
    function show_customer_total() {
        destination = "db/show_customer_nu.php";
        var xhr = new XMLHttpRequest();
        xhr.open("GET", destination, true);
        xhr.send();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById('customer_number').innerHTML = xhr.responseText;
            }
        }
    }

    function show_admin_total() {
        destination = "db/show_admin_nu.php";
        var xhr = new XMLHttpRequest();
        xhr.open("GET", destination, true);
        xhr.send();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById('admin_number').innerHTML = xhr.responseText;
            }
        }
    }

    function show_sales_total() {
        destination = "db/show_sales_nu.php";
        var xhr = new XMLHttpRequest();
        xhr.open("GET", destination, true);
        xhr.send();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById('sales_number').innerHTML = xhr.responseText;
            }
        }
    }

    function show_inventory_total() {
        destination = "db/show_inventory_nu.php";
        var xhr = new XMLHttpRequest();
        xhr.open("GET", destination, true);
        xhr.send();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById('inverntory_number').innerHTML = xhr.responseText;
            }
        }
    }

    window.addEventListener('load', function(event) {
        show_customer_total();
        show_admin_total();
        show_sales_total();
        show_inventory_total();
        element = document.getElementById("dashboard");
        element.classList.add("active");
        $("#danger-alert").hide();
        $("#success-alert").hide();
    });
</script>