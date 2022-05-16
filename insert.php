<?php
// echo "<pre>";
// print_r($_POST);

// $name = $_POST["Name"];
// $email = $_POST["Email"];
// $phone = $_POST["Phone"];
// // echo $_POST["Name"]."<br>";
// // echo $_POST["Email"]."<br>";
// // echo $_POST["Phone"]."<br>";

// if($name == "" || $email == "" || $phone == ""){
//     echo '<script>alert("all feild are required") </script>';
// }else{
//     echo "all is ok";
// }

$name = $_POST['Name'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];

if($name == ""|| $email == ""|| $phone == ""){
    echo '<script>alert("All Feild are Required")</script>';
}else{
    echo "Everything is okey";
}

echo "<pre>";
print_r($_POST);
?>