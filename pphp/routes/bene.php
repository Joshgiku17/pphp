<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../routes/style/bene.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <form action="../routes/bene.php" method="POST" class="form1">
                <div class="above">

                    <div class="gru_1">
                        <label for="">First & last name </label>
                        <input type="text" name="names" id="" placeholder="Ex: Joe Doe">

                    </div>
                    <div class="gru_1">
                        <label for="">Enter date of birth</label>
                        <input type="date" name="dob" id="" placeholder="Date of birth">
                    </div>
                    <div class="gru_1">
                        <label for="">addrex</label>
                        <input type="text" name="addrex" id="" placeholder="Ex: Kicukiro, Kigali">

                    </div>

                </div>
                <h3 class="conta">Contact details</h3>
                <div class="below">
                    <div class="gru_1">
                        <label for="">Email </label>
                        <input type="text" name="email" id="" placeholder="Ex: JoeDoe@mail.com">

                    </div>
                    <div class="gru_1">
                        <label for="">Phone number</label>
                        <input type="text" name="phone" placeholder="Ex: +250781111234">
                    </div>
                    <div class="gru_1">
                        <label for="">NGO id</label>
                        <input type="text" name="ngoo_id" placeholder="ngo id">
                    </div>
                </div>
                <input type="submit" value="Register" name="submit">
<?php
    if(isset($_POST['submit'])){
        require_once('../models/bene_model.php');
        $ngo= new bene_model(null,$_POST['names'],$_POST['dob'],$_POST['addrex'],$_POST['email'],$_POST['phone'],$_POST['ngoo_id']);
        echo $ngo->save();
        
    }
?>
            </form>
        </div>
    </div>
</body>

</html>