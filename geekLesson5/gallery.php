<?
include_once 'config.php';

$id = $_GET['id'];
if (isset($id) && !empty($id)){
    if (is_numeric($id)){
            $sql = "SELECT * FROM images WHERE id = ". $id;
            $sql = mysqli_query($connect, $sql);
            $result = mysqli_fetch_row($sql);
       
            //UPDATE LIKES
           
            // $sqlResult = mysqli_query($connect);
            // $result = mysqli_fetch_row($sqlResult);
        

    } else {
        exit('Completely wrong data!');
    }
} else {
    exit('Wrong input!');
}
