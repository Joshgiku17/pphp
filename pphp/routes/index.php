<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../routes/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Register to Portal</title>
</head>
<body>
    <div class="left">
        <div class="logo">
            <a href="#">
                <img src="../img/Group 3.svg" alt="">
            </a>
        </div>
        <div class="form-wrap">
            <div class="title">
                <h2>Register</h2>
            </div>
            <form action="index.php" method="POST" class="amakuru">
                <input type="text" name="org_name" id="" placeholder="Enter organization name" required>
                <input type="email" name="email" id="" placeholder="Enter email" required>
                <input type="text" name="username" id="" placeholder="Enter Username" required>
                <input type="password" name="pwd" id="" placeholder="Enter password" required>
                <div class="smalls">

                <input type="text" name="addressee" id="" placeholder="Address" required>
                <input type="text" name="phone" id="" placeholder="Phone number" required>
                </div>
                <input type="text" name="web" id="" placeholder="Enter Web url"> 
                    <input type="submit" value="Register" class="sub" name="submit">
                <div class="alternatives"> 
                    <a href="../routes/login.php">
                        Already Registered ? Login 
                    </a>
                </div>
            </form>
        </div>
    </div>
    <div class="right">
        <img src="../img/KID.webp" alt="">
        <div class="right_text">
          <p class="first_p">Welcome to PORTAL 
            </p>
            <p class="second_p">

               "By pooling their resources and working together, we ensure that partnering organizations can achieve their collective goals more quickly and with greater impact."
            </p>
        </div>
    </div>
    <?php
        if(isset($_POST['submit'])){
            require_once('../models/ngo_model.php');
            $ngo= new ngo_model(null,$_POST['org_name'],$_POST['email'],$_POST['username'],$_POST['pwd'],$_POST['addressee'],$_POST['phone'],$_POST['web']);
            echo $ngo->save();
        }
    ?>
</body>
</html>a