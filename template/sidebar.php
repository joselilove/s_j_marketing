<!DOCTYPE html>
<html>

<body>
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->
            <div class="leftside-navigation">
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a href="home.php" id="dashboard">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <?php
                    if ($_SESSION['user_type'] == 'admin') {
                    ?>
                        <li class="sub-menu">
                            <a href="javascript:;" id="sale">
                                <i class="fa fa-sales"></i>
                                <span>Sales</span>
                            </a>
                            <ul class="sub">
                                <li><a href="view_sales.php">View Sales Report</a></li>
                            </ul>
                        </li>
                    <?php
                    }
                    ?>
                    <li class="sub-menu">
                        <a href="javascript:;" id="inventory">
                            <i class="fa fa-th"></i>
                            <span>Inventory</span>
                        </a>
                        <ul class="sub">
                            <?php
                            if ($_SESSION['user_type'] == 'admin') {
                            ?>
                                <li><a href="add_product.php">Add Product</a></li>
                            <?php
                            }
                            ?>
                            <li><a href="manage_products.php">Manage Products</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" id="customer">
                            <i class="fa fa-tasks"></i>
                            <span>Customer</span>
                        </a>
                        <ul class="sub">
                            <?php
                            if ($_SESSION['user_type'] != 'admin') {
                            ?>
                                <li><a href="customer_w_carting.php">Sales</a></li>
                            <?php
                            }
                            ?>
                            <li><a href="manage_customer.php">View Customer</a></li>
                        </ul>
                    </li>
                    <!-- <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Charts</span>
                    </a>
                    <ul class="sub">
                        <li><a href="chartjs.php">Chart js</a></li>
                        <li><a href="flot_chart.php">Flot Charts</a></li>
                    </ul>
                </li> -->

                </ul>
            </div>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
</body>

</html>