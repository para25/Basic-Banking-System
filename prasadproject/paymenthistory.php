<?php
$conn=mysqli_connect("localhost","root","","payment");
if ($conn) {
    echo "";
}else{
    echo "Error";
}

$query="SELECT * FROM `mode`";
$connect=mysqli_query($conn,$query);
$data=mysqli_fetch_assoc($connect);
$num=mysqli_num_rows($connect);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            width: 100%;
            min-height: 100vh;
            background-color: #5d6d7d;
        }
        .container{
            max-width: 900px;
            margin: 100px auto;
            width: 100%
        }
        table{
            border-collapse: collapse;
            width:100%;
        }
        
        table th{
            background-color:red;
            color:#fff;
            padding:10px;
            text-align: center;

        }

        table td{
            padding: 12px;
            color: #fff;
            font-size: 1em;
            text-align: center;
        }

        table tr {
            border: 1px solid white;
            background-color:#797676;
        }

        @media(max-width: 1200px) {
            svg {
                display: none;
            }
        }
    </style>
</head>  
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

 <body>  
 <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <span class="h2 bg
        
        " style="display: flex; margin-left: 1%;"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
            <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.501.501 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89L8 0ZM3.777 3h8.447L8 1 3.777 3ZM2 6v7h1V6H2Zm2 0v7h2.5V6H4Zm3.5 0v7h1V6h-1Zm2 0v7H12V6H9.5ZM13 6v7h1V6h-1Zm2-1V4H1v1h14Zm-.39 9H1.39l-.25 1h13.72l-.25-1Z"/>
          </svg></span>
        <div class="container-fluid">
            <a class="navbar-brand" href="#">BANK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " href="index.html">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="fetch.php">OUR CUSTOMER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="paymenthistory.php">TRANSACTION HISTORY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="payment.php">TRANSFER MONEY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form.php">NEW USER</a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
 <div class="container">  
      <table border="1">  
           <tr>  
                <th>ID</th>  
                <th>Name</th>  
                <th>Payee</th>  
                <th>Bankname</th>  
                <th>Amount</th>  
           </tr>  
           <?php   
                if ($num>0) {  
                     while($data=mysqli_fetch_assoc($connect)){  
                          echo "  
                               <tr>  
                                <td>".$data['id']."</td>  
                                <td>".$data['name']."</td>  
                                <td>".$data['payeename']."</td>  
                                <td>".$data['bankname']."</td>  
                                <td>".$data['amount']."</td>  
                               </tr>  
                          ";  
                     }  
                }  
           ?>  
      </table>  
 </div> 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 
 </body>  
 </html>  