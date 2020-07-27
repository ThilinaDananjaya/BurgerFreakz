<?php
if (isset($_POST['order_submit'])) {
    require 'dbh_inc.php';

    $name = $_POST['name'];
    $telNumber = $_POST['telNumber'];
    $address = $_POST['address'];
    $noOfItems1 = $_POST['noOfItems1'];
    $noOfItems2 = $_POST['noOfItems2'];
    $noOfItems3 = $_POST['noOfItems3'];
    $noOfItems4 = $_POST['noOfItems4'];
    $noOfItems5 = $_POST['noOfItems5'];

    if (empty($name) || empty($telNumber) || empty($address)) {
        header("Location: ../order.php?error=emptyfields");
        exit();
    } elseif (($noOfItems1 == 0) && ($noOfItems2 == 0) && ($noOfItems3 == 0) && ($noOfItems4 == 0) && ($noOfItems5 == 0)) {
        header("Location: ../order.php?error=noorders");
        exit();
    } else {
        $sql = "INSERT INTO orders (customer_name, tel_no, customer_address, crispy_chicken_cheese_burger, veggie_burger, egg_burger, beef_burger, large_burger) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../order.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "sssiiiii", $name, $telNumber, $address, $noOfItems1, $noOfItems2, $noOfItems3, $noOfItems4, $noOfItems5);
            mysqli_stmt_execute($stmt);
            header("Location: ../index_logged.php?order=success");
            exit();
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("Location: ../index.php");
    exit();
}
