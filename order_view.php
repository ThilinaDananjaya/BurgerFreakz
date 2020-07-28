<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Orders</title>
    <link rel="shortcut icon" href="img/logoIcon.png" type="image/x-icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <ul>
        <li><a href="index_admin_logged.php">Home</a></li>
        <li><a href="order_view.php">Orders</a></li>
        <li><a href="signup_admin.php" id="signup_admin">Register New Admin</a></li>
        <li><a href="includes/logout_inc.php">Log Out</a></li>
    </ul><br><br><br>

    <table align="center" border="1px" style="width:1200px; line-height:50px;">
        <tr>
            <th>Customer Name</th>
            <th>Tel No.</th>
            <th>Customer Address</th>
            <th>No of Chicken Submarines</th>
            <th>No of Large Burgers</th>
            <th>No of Beef Burgers</th>
            <th>No of Egg Burgers</th>
            <th>No of Crispy Burgers</th>
            <th>No of Veggie Burgers</th>
        </tr>
        <?php
        require 'includes/dbh_inc.php';

        $sql = "SELECT customer_name, tel_no, customer_address, chicken_submarines, large_burger, beef_burger, egg_burger, crispy_burger, veggie_burger FROM orders;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ./index_admin_logged.php?error=sqlerror");
            exit();
        } else {
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["customer_name"] . "</td><td>" . $row["tel_no"] . "</td><td>" . $row["customer_address"] . "</td><td>" . $row["chicken_submarines"] . "</td><td>" . $row["large_burger"] . "</td><td>" . $row["beef_burger"] . "</td><td>" . $row["egg_burger"] . "</td><td>" . $row["crispy_burger"] . "</td><td>" . $row["veggie_burger"] . "</td></tr>";
                }
            } else {
                echo "No Orders";
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        ?>
    </table>
</body>

</html>