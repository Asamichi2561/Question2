<!DOCTYPE html>
<html>
<body>

<form action = "check_discount.php" method="post">
    <p>Enter purchase value:</p>
    <input type="number" name="value">
    <br>
        <input type="submit" name="submitbtn" class="button" value="Submit" />
</form>
<br><br>

<?php
$value = 0;
if (isset($_POST['value'])) {
    $value = $_POST['value'];
    function checkDiscount($purchaseValue) {
        $discountMsg = "";
        if ($purchaseValue >= 500) {
            $discountMsg = "discount is 10%";
        }
        else if ($purchaseValue >= 100) {
            $discountMsg = "discount is 5%";
        }
        else if ($purchaseValue < 100) {
            $discountMsg = "there is no discount.";
        }
        echo "<br>" , "Purchase Value is " , $purchaseValue , " , " , $discountMsg , "<br>";
    }
    checkDiscount($value);
}
?>

</body>
</html>