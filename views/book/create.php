<?php include_once('../config.php'); 
        include_once(CON_FRONT.'bookController.php'); 
        $authors = authorList();
        $publishers = publisherList();
        $categories = categoryList();
        $book_types = booktypeList();
        

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
                        <h3 class="card-title"> CREATE NEW BOOK LIST:</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form role="form" class="bg-info">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputtitle">NAME:</label>
                                    <input type="Text" class="form-control" name="title" id="exampleInputLanguagetitle"
                                        placeholder="Enter name">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputisbn">ISBN:</label>
                                    <input type="text" class="form-control" name="isbn" id="exampleInputisbn"
                                        placeholder="Enter isbn number">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputisbn">QUANTITY:</label>
                                    <input type="text" class="form-control" name="quantity" id="exampleInputisbn"
                                        placeholder="Enter quantity">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInput">BOOK TYPE: </label>
                                    <select name="book_type_id" id="role" class="form-control">
                                        <option value="-1">--Select One--</option>
                                        <?php foreach($book_types as $b){ ?>
                                        <option value="<?= $b->id ?>"><?= $b->name ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInput">AUTHOR: </label>
                                    <select name="author_id" id="role" class="form-control">
                                        <option value="-1">--Select One--</option>
                                        <?php foreach($authors as $a){ ?>
                                        <option value="<?= $a->id ?>"><?= $a->name ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInput">PUBLISHER: </label>
                                    <select name="publisher_id" id="role" class="form-control">
                                        <option value="-1">--Select One--</option>
                                        <?php foreach($publishers as $p){ ?>
                                        <option value="<?= $p->id ?>"><?= $p->name ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInput">CATEGORY: </label>
                                    <select name="category_id" id="role" class="form-control">
                                        <option value="-1">--Select One--</option>
                                        <?php foreach($categories as $c){ ?>
                                        <option value="<?= $c->id ?>"><?= $c->name ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputselling_price">SELLING PRICE:</label>
                                    <input type="Text" class="form-control" name="selling_price"
                                        id="exampleInputselling_price" placeholder="Enter amount">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputrent_price">RENT PRICE:</label>
                                    <input type="Text" class="form-control" name="rent_price"
                                        id="exampleInputrent_price" placeholder="Enter price">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputlanguage">LANGUAGE:</label>
                                    <input type="Text" class="form-control" name="language" id="exampleInputlanguage"
                                        placeholder="Enter language">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputnumber_of_page">NUMBER OF PAGE:</label>
                                    <input type="number" class="form-control" name="number_of_page"
                                        id="exampleInputnumber_of_page" placeholder="Enter page number">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputpublish_date">PUBLISH DATE:</label>
                                    <input type="date" class="form-control" name="publish_date"
                                        id="exampleInputpublish_date" placeholder="Enter date">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputversion">VERSION:</label>
                                    <input type="Text" class="form-control" name="version" id="exampleInputversion"
                                        placeholder="Enter version">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputdescription">DESCRIPTION:</label>
                                    <input type="Text" class="form-control" name="description"
                                        id="exampleInputdescription" placeholder="Enter description">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputbuying_price">BUYING PRICE:</label>
                                    <input type="Text" class="form-control" name="buying_price"
                                        id="exampleInputbuying_price" placeholder="Enter price">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputlocation">LOCATION:</label>
                                    <input type="Text" class="form-control" name="location" id="exampleInputlocation"
                                        placeholder="Enter location">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputfine">FINE:</label>
                                    <input type="Text" class="form-control" name="fine" id="exampleInputfine"
                                        placeholder="Enter amount">
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
        <br>
</body>

</html>