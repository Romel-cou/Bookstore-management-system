<?php include_once('../config.php'); 
        include_once(CON_FRONT.'membershipController.php'); 
        $memberships = index();
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
        <h3>MEMBERSHIP LIST:<a href="create.php" class="btn btn-info float-right">ADD NEW MEMBER:</a></h3>
        <br>
        <br>
        <table class="table table-hover table-primary" id="dataTable">
        <thead>
        <tr>
                <th>ID</th>
                <th>CUSTOMER ID</th>
                <th>CARD NUMBER</th>
                <th>ISSUE DATE</th>
                <th>EXPIRE DATE</th>
                <th>STATUS</th>
                <th>OPTION</th>
            </tr>
        </thead>
            
        <tbody>
        <?php
        foreach($memberships as $m)
        { ?>
            <tr>
                <th><?= $m->id; ?></th>
                <th><?= $m->customer_id; ?></th>
                <th><?= $m->card_number; ?></th>
                <th><?= $m->issue_date; ?></th>
                <th><?= $m->expire_date; ?></th>
                <th><?= $m->status; ?></th>
                <td><a href="show.php?id=<?= $m->id ?>" class="btn btn-success">details</a> | <a href="delete.php?id=<?= $m->id ?>" class="btn btn-danger">delete</a></td>

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