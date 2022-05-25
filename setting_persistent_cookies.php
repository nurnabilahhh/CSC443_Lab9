<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    setcookie("myLoginName","MyWebsite");
    setcookie("myPreferredColor","Blue");
    setcookie("CouponNumber","07470433", time()+60*60*24*7);
    setcookie("CouponValue","100.00",time()+60*60*24*7);

    print("\n");
    print("2 temporary cookies were delivered.\n");
    print("2 consistent cookies were delivered.\n");

    if (isset($_COOKIE["MyLoginName"])){
        $loginName = $_COOKIE["myLoginName"];
        print("Received a cookie named as myLoginName.\n");
    }else {
        print("Did not received any cookie named as myLoginName: ".$loginName."\n");
    }

    $mcount = count($_COOKIE);
    print("$count cookies received.\n");
    foreach ($_COOKIE as $name => $value) {
        print " $name = $value\n";
    }
    print("\n");
    ?>
</body>
</html>