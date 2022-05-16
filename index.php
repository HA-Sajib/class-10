<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice classs 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .cont{
        max-width:800px;
        margin:50px auto;
    }
    form{
        border: 1px solid #111;
        padding:20px;
    }

</style>

<body>

    <?php 
    // if(isset($_POST['sub_btn'])){
    //     $name = $_POST['Name'];
    //     $email = $_POST['Email'];
    //     $phone = $_POST['Phone'];
        
    //     if($name == ""|| $email == ""|| $phone == ""){
    //         $validation_msg = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    //         All feild are required!
    //         <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    //       </div>";
    //     } else if(filter_var($email, FILTER_VALIDATE_EMAIL)== false){
    //         $validation_msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    //         Email is not okey!
    //         <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    //       </div>";
    //     } else{
    //         $validation_msg = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    //         Everything is okey!
    //         <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    //       </div>";
    //     }

    // }
    
    ?>
    <?php
    if(isset($_POST['sub_btn'])){
        $u_name = $_POST['Name'];
        $u_email = $_POST['Email'];
        $u_phone = $_POST['Phone'];

        if( $u_name == "" || $u_email == ""|| $u_phone == ""){
            echo  "All field is required";
        } else{
            echo "Everything is ok";
        }
    }

    // echo "<pre>";
    // print_r($_POST);
    ?>
    <div class="cont">
        <form method ="post" action="">
            <h3>Registration Form</h3>
        <?php
        // if(isset($validation_msg)){
        //    echo $validation_msg;
        // }

        ?>

            <label for="Your_name">Name</label>
            <input type="text" id="Your_name" name="Name"><br><br>

            <label for="Your_email">Email</label>
            <input type="text" id="Your_email" name="Email"><br><br>

            <label for="Your_number">Number</label>
            <input type="tell" id="Your_number" name="Phone"><br><br>

            <input type="submit" value="submit" name="sub_btn">
        </form>
    </div>
</body>
</html>