<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Now</title>
    <link rel="shortcut icon" href="img/logoIcon.png" type="image/x-icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="orderstyle.css">

</head>

<body>

    <div class="container">

        <section id="order">
            <h2>Order Now!</h2>
            <form action="includes/order_inc.php" method="POST" id="order-form" class="order-form">
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "noorders") {
                        echo '<p class="ordererror">Please Add Items To Order!</p>';
                    } elseif ($_GET['error'] == "wrongpassword") {
                        echo '<p class="ordererror">Wrong Password!</p>';
                    } elseif ($_GET['error'] == "sqlerror") {
                        echo '<p class="ordererror">Please Try Again Later!</p>';
                    }
                }
                ?>
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name here" required>
                    <label for="telNumber">Your Mobile Number</label>
                    <input type="tel" class="form-control" id="telNumber" name="telNumber" placeholder="0xx-xxxxxxx" pattern="[0]{1}[0-9]{2}-[0-9]{7}" required>
                </div>

                <div class="form-group">
                    <label for="OrderChoice">Select Your Order Items</label>

                    <table>

                        <th>Item</th>
                        <th>Quantity</th>

                        <tr>
                            <td>
                                <label class="form-control" id="OrderChoice">Crispy Chicken Cheese Burger</label>
                            </td>

                            <td>
                                <input type="number" class="form-control" id="noOfItems1" name="noOfItems1" value="0" min="0">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label class="form-control" id="OrderChoice">Veggie Burger</label>
                            </td>

                            <td>
                                <input type="number" class="form-control" id="noOfItems2" name="noOfItems2" value="0" min="0">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label class="form-control" id="OrderChoice">Egg Burger</label>
                            </td>

                            <td>
                                <input type="number" class="form-control" id="noOfItems3" name="noOfItems3" value="0" min="0">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label class="form-control" id="OrderChoice">Beef Burger</label>
                            </td>

                            <td>
                                <input type="number" class="form-control" id="noOfItems4" name="noOfItems4" value="0" min="0">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label class="form-control" id="OrderChoice">Large Burger</label>
                            </td>

                            <td>
                                <input type="number" class="form-control" id="noOfItems5" name="noOfItems5" value="0" min="0">
                            </td>
                        </tr>
                    </table>

                </div>


                <div class="form-group">
                    <label for="address">Enter Your Delivery Address</label>
                    <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your address here" required></textarea>
                </div>

                <div class="button">
                    <button class="button" type="submit" id="order_submit" name="order_submit" value="Order Now">Order Now</button>
                </div>

            </form>
        </section>

    </div>

</body>

</html>