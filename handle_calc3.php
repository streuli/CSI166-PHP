<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Product Cost Calculator</title>

        <style type="text/css">
            .number {font-weight: bold;}
        </style>
    </head>
    <body>
        <?php //Script 4.2 - handle_calc class="php"

        // Get the values from the $_POST array:
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $discount = $_POST['discount'];
        $tax = $_POST['tax'];
        $shipping = $_POST['shipping'];
        $payments = $_POST['payments'];

        // Calculate the total:
        $total = (($price * $quantity) + $shipping) - $discount;

        // Determine the tax rate:
        $taxrate = ($tax / 100) +1;
    

        //Factor in the tax rate:
        $total = $total - $taxrate;

        // Calculate the monthly payments:
        $monthly = $total / $payments;

        $total = number_format($total,2,'.','');
        $monthly = number_format($monthly,2,'.','');


        print "<p> You have selected to purchase: <br>
        purchase: <br>
        <span class=\"number\">$quantity
            </span> widget(s) at <br>
        <span class=\"number\"> $price
            </span> price each plus a <br>
        <span class=\"number\"> $shipping
            </span> shipping cost and a <br>
        <span class=\"number\">$tax
            </span> percent tax rate. <br>
        After your $<spam class=\"number\"
            >$discount</spam> discount, the total cost is $
        <spam class=\"number\"> $total
            </span>.<br>
        Divide over <span class=\"number\"$payments
            </span> monthly payments, that would be $
        <span class+\"number\"> $monthly</span> each.</p>";
        

        ?>
    </body>
</html>
