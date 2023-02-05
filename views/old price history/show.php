<?php
    include_once '../config.php';
    include_once CON_FRONT.'oldpricehistoryController.php';
    $$old_price_histories_details = show();
    // print_r($emp);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include_once('../layout/links.php') ?>
</head>

<body style="margin-left:80px;">
    <?php include_once('../layout/admin.php') ?>
    <div class="container-fluid" style="margin-top:80px;">

        <body class="container">
            <?php if(isset($_SESSION['msg'])){ ?>
            <h1 class="text-success"><?= $_SESSION["msg"] ?></h1>
            <?php $_SESSION["msg"] = null; ?>
            <?php } ?>

            <h1>DETAILS:</h1>
            <br>
            ID: <?= $old_price_histories_details[0]->id; ?>
            <br>
            <br>
            BUYING PRICE: <?= $old_price_histories_details[0]->buying_price; ?>
            <br>
            <br>
            SELLING PRICE: <?= $old_price_histories_details[0]->selling_price; ?>
            <br>
            <br>
            QUANTITY: <?= $old_price_histories_details[0]->quantity; ?>
            <br>
            <br>
            BOOK NAME: <?= $old_price_histories_details[0]->book_title; ?>
            <br>
            <br>
            DATE TIME: <?= $old_price_histories_details[0]->date_time; ?>
            <br>
            <br>
            <a href="delete.php?id=<?= $old_price_histories_details[0]->id; ?>" class="btn btn-danger">DELETE</a>
            <br>
            <br>
            <a href="index.php" class="btn btn-warning">BACK TO LIST</a>
            <br>
            <br>

        </body>

</html>