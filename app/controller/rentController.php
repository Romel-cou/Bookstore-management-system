<?php include_once('baseController.php');

function index()
{
    $s = "select * from rent_details order by id";
    $rent_details = readQuery($s);
    $rent_details = json_decode($rent_details);
    return $rent_details;
}

function show()
{
    $id = $_REQUEST['id'];
    $s = "SELECT *,DATEDIFF(NOW(), exp_return_date) delay_day from rent_details where id = $id";
    $json = readQuery($s);                  //json
    $data = json_decode($json);             //array
    return $data;
}

function bookList()
{
    $s = "select * from books";
    $bookList = readQuery($s);
    $bookList = json_decode($bookList);
    return $bookList;
}

function customerList()
{
    $s = "select * from customers";
    $customerList = readQuery($s);
    $customerList = json_decode($customerList);
    return $customerList;
}


//saving to data base
if(isset($_REQUEST['create']))
{
    store();
}
function store()
{
    $book_id = $_REQUEST['book_id'];
    $customer_id = $_REQUEST['customer_id'];
    $employee_id = 1;
    $rent_date = date("Y-m-d H:i:s");
    $exp_return_date = $_REQUEST['exp_return_date'];
    $return_date = $_REQUEST['exp_return_date'];
    $fine = 0;
    $status = "BORROWED";
   
//    print_r($GLOBALS);

    $s = "INSERT INTO `rents`(`id`, `book_id`, `customer_id`, `employee_id`, `rent_date`, `exp_return_date`, `return_date`, `fine`, `status`) VALUES (null,'$book_id', '$customer_id','$employee_id', '$rent_date', '$exp_return_date','$return_date','$fine', '$status')";
    $id = executeQuery($s);
    print_r($id);
    if($id > 0)
    {
        $_SESSION["msg"] = "SUCCESSFULLY CREATED";
        header('Location: show.php?id='.$id);//redirect
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
    $fine = $_REQUEST['fine'];
   
    
    $sql = "UPDATE rents set fine = '$fine', return_date = NOW(), status = 'RETURNED' WHERE id=$id";
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

    $sql = "UPDATE `rent_details` SET column_status='DELETED' WHERE id=$id";
    $data = deleteAndUpdateQuery($sql);

    if($data == 1)
    {
        $_SESSION["msg"] = "SUCCESSFULLY DELETED";
        header('Location: index.php?id='.$id);
    }
    return;
}