<?php include_once('../config.php'); 
        include_once(CON_FRONT.'membershipController.php');        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include_once('../layout/links.php') ?>
</head>

<body>
    <?php include_once('../layout/admin.php') ?>
    <div class="container" style="margin-top:80px">
        <div class="row">
            <div class="col col-md-6 col-sm-12">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">CREATE NEW MEMBERSHIP LIST:</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form role="form" class="bg-info">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputcustomer_id">CUSTOMER ID:</label>
                                    <input type="Text" class="form-control" name="customer_id"
                                        id="exampleInputcustomer_id" placeholder="Enter id">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputcard_number">CARD NUMBER:</label>
                                    <input type="Text" class="form-control" name="card_number"
                                        id="exampleInputcard_number" placeholder="Enter number">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputissue_date">ISSUE DATE:</label>
                                    <input type="date" class="form-control" name="issue_date"
                                        id="exampleInputissue_date" placeholder="Enter date">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputexpire_date">EXPIRE DATE:</label>
                                    <input type="date" class="form-control" name="expire_date"
                                        id="exampleInputexpire_date" placeholder="Enter date">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputstatus">STATUS:</label>
                                    <input type="Text" class="form-control" name="status" id="exampleInputstatus"
                                        placeholder="Enter status">
                                </div>


                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <input type="submit" name="create" class="btn btn-success" value="SUBMIT">
                                <br>
                                <br>
                                <a href="index.php" class="btn btn-warning">BACK TO LIST</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
</body>

</html>