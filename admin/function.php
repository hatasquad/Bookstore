<?php
$servername = "localhost";
$userDb =  "root";
$passwd = '';
$dbname = 'register-bd';

function connect(){
    $conn = mysqli_connect("localhost", "root", "", "register-bd");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_set_charset($conn, "utf8");
    return $conn;
}


function init(){
    //вывожу список товаров
    $conn = connect();
    $sql = "SELECT id, title FROM Books";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while($row = mysqli_fetch_assoc($result)) {
            $out[$row["title"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}
function selectOneGoods(){
    $conn = connect();
    $id = $_POST['bid'];
    $sql = "SELECT * FROM Books WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function updateGoods(){
    $conn = connect();
    $id = $_POST['id'];
    $title = $_POST['btitle'];
    $author = $_POST['bauthor'];
    $price = $_POST['bprice'];
    $img = $_POST['bimg'];
    $desc = $_POST['bdesc'];
    $isNew = $_POST['bisnew'];


    $sql = "UPDATE Books SET title ='$title', price = '$price', author = '$author', description = '$desc', img = '$img', isNew = '$isNew' WHERE id = '$id'";
    if(mysqli_query($conn, $sql)){
       echo  1;
    }else{
        echo "Error updating record" . mysqli_error($conn);
    }

    mysqli_close($conn);
    writeJSON();
}

function newGoods(){
    $conn = connect();
    $title = $_POST['btitle'];
    $author = $_POST['bauthor'];
    $price = $_POST['bprice'];
    $img = $_POST['bimg'];
    $desc = $_POST['bdesc'];
    $isNew = $_POST['bisnew'];


    $sql = "INSERT INTO Books(title,price,author,description,img,isNew) VALUES ('$title', '$price', '$author', '$desc', '$img', '$isNew')";
    if(mysqli_query($conn, $sql)){
        echo  1;
    }else{
        echo "Error updating record" . mysqli_error($conn);
    }

    mysqli_close($conn);
    writeJSON();
}

function writeJSON(){
    $conn = connect();
    $sql = "SELECT * FROM Books";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while($row = mysqli_fetch_assoc($result)) {
            $out[$row["title"]] = $row;
        }

        file_put_contents('../goods.json', json_encode($out));
    } else {
        echo "0";
    }
    mysqli_close($conn);

}

function loadSingleGoods(){
    $id = $_POST['id'];
    $conn = connect();
    $sql = "SELECT * FROM Books WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

?>

