<?php include_once('../config.php'); 
        include_once(CON_FRONT.'oldpricehistoryController.php'); 
        $old_price_histories_details = index();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include_once('../layout/links.php') ?>
</head>

<body>
    <?php include_once('../layout/admin.php') ?>
    <div class="container-fluid" style="margin-top:80px">
        <br>
        <h3>OLD PRICE HISTORY LIST:</h3>
        <br>
        <br>
        <table class="table table-hover table-primary" id="dataTable">
            <thead>
            <tr>
                <th>ID</th>
                <th>BUYING PRICE</th>
                <th>SELLING PRICE</th>
                <th>QUANTITY</th>
                <th>BOOK NAME</th>
                <th>DATE TIME</th>
                <th>OPTION</th>
            </tr>
            </thead>
            <tbody>
            <?php
        foreach($old_price_histories_details as $o)
        { ?>
            <tr>
                <th><?= $o->id; ?></th>
                <th><?= $o->buying_price; ?></th>
                <th><?= $o->selling_price; ?></th>
                <th><?= $o->quantity; ?></th>
                <th><?= $o->book_title; ?></th>
                <th><?= $o->date_time; ?></th>
                <td><a href="show.php?id=<?= $o->id ?>" class="btn btn-success">details</a> | 
                <a href="delete.php?id=<?= $o->id ?>" class="btn btn-danger">delete</a></td>

            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>
<?php include_once('../layout/footerLinks.php') ?>
<script src="<?= RSR ?>/js/datatable.js"></script>
<br>
<br>
<br>