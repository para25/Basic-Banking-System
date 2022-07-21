<?php
$conn=mysqli_connect("localhost","root","","bank") or die();
$msg="";
if (isset($_POST['insert'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $country=$_POST['country'];
    $balance=$_POST['balance'];

    $query= "INSERT INTO `register`(`name`, `email`, `country`, `balance`) VALUES ('$name','$email','$country','$balance')";
    $data=mysqli_query($conn,$query);
    if ($data) {
        header("Location:su.html");
    }else{
        $msg='Failed!, Try after some time';
    }    
}
?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body{
            background: #5d6d7d;
            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container{
            width: 500px;
            background: #fff;
        }

        .container form{
            width: 100%;
            padding: 30px;
        }    

        .container form input {
            width : 100%;
            padding: 15px 10px;
            outline: none;
            margin:10px;   
        }

        .btn{
            cursor: pointer;
            background: red;
            border: none;
            padding-top: 20px;
            color: #fff;
        }

        h1{
            display: block;
            text-align: center;
            padding: 15px 0;
        }
    </style>
    
</head>
<body>
    <div class="container">
        <h1>Sign Up</h1>
        <form method="post" action="">
            <input type="text" name="name" value="" placeholder="Enter your Name" required>
            <input type="email" name="email" value="" placeholder="Enter your Email" required>
            <input type="text" name="country" value="" placeholder="Enter your Country" required>
            <input type="number" name="balance" value="" placeholder="Enter your Balance" required>
            <input type="submit" name="insert" value="Sign Up!" class="btn"> <br>
            <?php
            echo $msg;
            ?>
            
        </form>
    </div>
</body>
</html>
