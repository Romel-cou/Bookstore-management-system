<?php include_once('baseController.php');

function index()
{
    $s = "select * from old_price_histories_details order by id";
    $old_price_histories_details = readQuery($s);
    $old_price_histories_details = json_decode($old_price_histories_details);
    return $old_price_histories_details;
}

function show()
{
    $id = $_REQUEST['id'];
    $s = "select * from old_price_histories_details where id = $id";
    $json = readQuery($s);                  //json
    $data = json_decode($json);             //array
    return $data;
}

//saving to data base
if(isset($_REQUEST['create']))
{
    store();
}
function store()
{
    $id = $_REQUEST['id'];
    $buying_price = $_REQUEST['buying_price'];
    $selling_price = $_REQUEST['selling_price'];
    $quantity = $_REQUEST['quantity'];
    $book_id = $_REQUEST['book_id'];
    $date_time = $_REQUEST['date_time'];
    $column_status = $_REQUEST['column_status'];
    
   //print_r($name);

    $s = "INSERT INTO `old_price_histories_details`(`id`, `buying_price`, `selling_price`, `quantity`, `book_id`, `date_time`, `column_status`) VALUES (null,'$buying_price', '$selling_price','$quantity','$book_id','$date_time','$column_status')";
    $id = executeQuery($s);
    print_r($id);
    if($id > 0)
    {
        $_SESSION["msg"] = "SUCCESSFULLY CREATED";
        header('Location: show.php?id='.$id);//redirection
    }
    return;

}

if(isset($_REQUEST['update']))
{
    update();
}
function update()
{
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $description = $_REQUEST['description'];
   
    $sql = "UPDATE `authors` SET `name`='$name',`description`='$description',WHERE id=$id";
    $data = deleteAndUpdateQuery($sql);

    if($data == 1)
    {
        $_SESSION["msg"] = "SUCCESSFULLY UPDATED";
        header('Location: show.php?id='.$id);
    }
    return;
}


// delete
if(isset($_REQUEST['delete']))
{
    delete();
}
function delete()
{
    $id = $_POST['id'];

    $sql = "UPDATE `old_price_histories_details` SET column_status='DELETED' WHERE id=$id";
    $data = deleteAndUpdateQuery($sql);

    if($data == 1)
    {
        $_SESSION["msg"] = "SUCCESSFULLY DELETED";
        header('Location: index.php?id='.$id);
    }
    return;
}