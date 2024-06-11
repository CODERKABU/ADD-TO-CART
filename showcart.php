<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        include "connect.php";
        $uid=$_SESSION["userid"];

      //  $qr="SELECT * FROM cart c1, cartdetail c2 WHERE c1.cid=c2.cid and c1.stat='ongoing' and c1.uid='$uid'";
    $qr="SELECT * FROM cart c1, cartdetail c2 , products p1 WHERE c1.cid=c2.cid and c2.pid = p1.prno and c1.stat='ongoing' and c1.uid='$uid'";
        $res = mysqli_query($con,$qr);


    ?>


    <table align="center" border="1">

        <tr>
        <th>Sr no</th>
        <th>Pro name</th>
        <th>Pro qty</th>
        <th>Price</th>        
        <th>Sub Total</th>

</tr>

    <?php
        $i=0;
        $gt=0;
        $subttl=0;
        while($row=mysqli_fetch_array($res))
        {
            $i++;
            $subttl=$row["qty"]*$row["price"];
    ?>

<tr>
        <th><?= $i ?></th>
        <th><?= $row["prnm"] ?></th>
        <th><?= $row["qty"] ?></th>
        <th><?= $row["price"] ?></th>        
        <th><?=  $subttl ?></th>

</tr>

     <?php
            $gt+=$subttl;
        }
     ?>



</table>
<center>Grand Total = <?=$gt ?></center>


</body>
</html>