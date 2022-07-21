<?php
$conn=mysqli_connect("localhost","root","","payment") or die();
$msg="";
if (isset($_POST['insert'])){
    $name=$_POST['name'];
    $payeename=$_POST['payeename'];
    $bankname=$_POST['bankname'];
    $amount=$_POST['amount'];

    $query= "INSERT INTO `mode`(`name`, `payeename`, `bankname`, `amount`) VALUES ('$name','$payeename','$bankname','$amount')";
    $data=mysqli_query($conn,$query);
    if ($data) {
        echo '<script>alert("Payment Successful")</script>';
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
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        
        body {
            /* background: #5d6d7d; */
            background: url("payment.png");
            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-repeat: no-repeat;
            background-position: center;
        }
        
        .container {
            width: 1000px;
        }
        
        .container form {
            width: 100%;
            padding: 30px;
        }
        
        .container form input {
            width: 100%;
            padding: 15px 10px;
            outline: none;
            margin: 10px;
        }
        
        input[type="text"] {
            background: transparent;
        }
        
        input[type="number"] {
            background: transparent;
        }
        
        .btn {
            cursor: pointer;
            background: red;
            border: none;
            padding-top: 20px;
            color: #fff;
        }
        
        h1 {
            display: block;
            text-align: center;
            /* padding: 15px 0px; */
            font-size: 50px;
        }
        
        .img-fluid {
            max-width: auto;
            height: auto;
        }
        
        #checkbox {
            height: 20px;
            width: 20px;
        }
        
        .text {
            color: black;
            font-size: 20px;
            margin-left: 10px;
        }
        /* CSS */
        
        .button-86 {
            all: unset;
            width: 100px;
            height: 30px;
            font-size: 16px;
            background: transparent;
            border: none;
            position: relative;
            color: #f0f0f0;
            cursor: pointer;
            z-index: 1;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            white-space: nowrap;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            position: absolute;
            top: 8px;
            left: 16px;
        }
        
        .button-86::after,
        .button-86::before {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            z-index: -99999;
            transition: all .4s;
        }
        
        .button-86::before {
            transform: translate(0%, 0%);
            width: 100%;
            height: 100%;
            background: #28282d;
            border-radius: 10px;
        }
        
        .button-86::after {
            transform: translate(10px, 10px);
            width: 35px;
            height: 35px;
            background: #ffffff15;
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border-radius: 50px;
        }
        
        .button-86:hover::before {
            transform: translate(5%, 20%);
            width: 110%;
            height: 110%;
        }
        
        .button-86:hover::after {
            border-radius: 10px;
            transform: translate(0, 0);
            width: 100%;
            height: 100%;
        }
        
        .button-86:active::after {
            transition: 0s;
            transform: translate(0, 5%);
        }
    </style>

</head>



<body>


    <button class="button-86" role="button" onclick="window.location.href = 'index.html';"></a>HOME PAGE</button>
    <div class="container">
        <h1>Payment</h1>
        <form method="post" action="">
            <input type="text" name="name" value="" placeholder="Enter your Name" required>
            <input type="text" name="payeename" value="" placeholder="Enter Payee Name" required>
            <input type="text" name="bankname" value="" placeholder="Enter Payee's Bank Name" required>
            <input type="number" name="amount" value="" placeholder="Enter Amount" required>
            <div class="checkBox">
                <input type="checkbox" name="checkbox" id="checkbox" required>
                <span class="text">I agree with term & conditions</span>
            </div>
            <input type="submit" name="insert" value="Pay!" class="btn"> <br>

        </form>
    </div>


</body>

</html>