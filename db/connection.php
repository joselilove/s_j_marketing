<?php
$connect = mysqli_connect("localhost", "sj_marketing", "sj_marketing", "sj_db");
if (!$connect) {
    die('could not connect ' . mysql_error());
}
