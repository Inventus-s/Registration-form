<?php
                    // database location/username/password/db name
$conn = mysqli_connect('localhost','root','','registration');
if(isset($_POST['formSubmit'])){
    $name = $_POST["username"];
    $email = $_POST["usermail"];
    $pass = $_POST["userpass"];
    $add = $_POST["useraddress"];
    $age = $_POST["userage"];
    $gender = $_POST["gender"];
    $hobbies = isset($_POST['hobbies']) ? implode(",", $_POST['hobbies']) : '';
    $edu = $_POST["education"];
    echo '<pre>';
    print_r($_FILES);
    print_r($_POST);
    
    $img = '';

    if (isset($_FILES['fileToUpload']) && !$_FILES['fileToUpload']['error']) {
        $img = time().'_'.$_FILES['fileToUpload']['name'];
        $res = move_uploaded_file($_FILES['fileToUpload']['tmp_name'],"images/".$img);
    };
    // die;

    $query = "insert into user_details (`Name`,`Image`,`Email`,`Password`,`Address`,`DOB`,`Gender`,`Hobby`,`Education`) VALUE('$name','$img','$email','$pass','$add','$age','$gender','$hobbies','$edu') ";
    $result = mysqli_query($conn,$query);
    // echo "<pre>";
    echo $result;

    if($result){
        header('location:userDetails.php');
    }
}else if(isset($_GET['delete']) && !empty($_GET['delete'])){
    $query = "delete from user_details where ID =".$_GET['delete'];
    $result = mysqli_query($conn, $query);
    if($result) {
        header('location:userDetails.php');
    }
}
