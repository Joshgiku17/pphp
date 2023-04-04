<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../routes/style/dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PORTAL</title>
</head>

<body>
    <?php 
        include '../routes/interface.php';
    ?>
    <div class="center">
        <img src="../img/Ellipse 4.svg" alt="" class="avatar">
        
        <div class="centered-div">
                <div class="name">
                    <?php
                        
                    ?>
                </div>
            <div class="inside">
                <h2>" Welcome to Portal, Navigate through options. "</h2>
                <div class="sides">
                    
                    <div class="left">
                        <button><a href="../routes/bene.php"><i class="fa-solid fa-users-line"></i>Beneficiaries</a></button>
                        <button class="special_butt"><a href="../routes/reports.php"><i class="fa-solid fa-chart-simple"></i>Reports</a></button>
                        <button><a href="../routes/Empl.php"><i class="fa-solid fa-user-tie"></i>Employees</a></button>
                    </div>
                    
                    <div class="right">
                        <button><a href="../routes/settings.php"><i class="fa-solid fa-sliders"></i>Settings</a></button>
                        <button><a href="../routes/donors.php"><i class="fa-solid fa-handshake"></i>Donors</a></button>
                        <button><a href="../routes/login.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>Signout</a></button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <img src="../img/ttten.svg" alt="" class="bg"> -->
    <img src="../img/Group 4.svg" alt="" class="abs_img">
</body>
</html>