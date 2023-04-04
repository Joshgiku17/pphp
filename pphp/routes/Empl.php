<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../routes/style/bene.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Beneficialies</title>

</head>
<?php 
        include '../routes/interface.php';
    ?>

<body>
    <div class="justify-center">
        <div class="margintop">

        </div>
        <div class="new_div">
            <h3><i class="fa-solid fa-pen"></i> Register new beneficiary</h3>
            <form action="bene.php" method="POST" class="form1">
                <div class="above">

                    <div class="gru_1">
                        <label for="">First & last name </label>
                        <input type="text" name="full_name" id="" placeholder="Ex: Joe Doe">
                        
                    </div>
                    <div class="gru_1">
                        <label for="">Enter date of birth</label>
                        <input type="date" name="dob" id="" placeholder="Date of birth">
                    </div>
                    <div class="gru_1">
                        <label for="">Address</label>
                        <input type="text" name="address" id="" placeholder="Ex: Kicukiro, Kigali">
                        
                    </div>
                    
                </div>
                <h3 class="conta">Contact details</h3>
                <div class="below">
                    <div class="gru_2">
                        <label for="">Email </label>
                        <input type="text" name="email" id="" placeholder="Ex: JoeDoe@mail.com">
                        
                    </div>
                    <div class="gru_2">
                        <label for="">Phone number</label>
                        <input type="text" name="phone" placeholder="Ex: +250781111234">
                    </div>
                </div>
                    <input type="submit" value="Register" name="submit">
            </form>
        </div>
    </div>
    <?php
        if(isset($_POST['submit'])){
            // echo "clicked";
            require_once('../Modules/bene_model.php');
            $bene=new bene_model($_POST['full_name'],$_POST['dob'],$_POST['email'],$_POST['phone'],$_POST['email'],$_POST['address']);
            echo $ngo->save();
        }
    ?>
</body>

</html>