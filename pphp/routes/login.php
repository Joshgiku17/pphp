<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../routes/style/sing.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login here</title>
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
                <h2>Sign in</h2>
            </div>
            <form action="" class="amakuru" method="post">
                <input type="username" name="username" id="" placeholder="Enter username">
                <input type="password" name="pwd" id="" placeholder="Enter password">
                <input type="submit" value="login" class="sub" name="submit">
                <div class="alternatives">
                    <div class="alert" style="color:red;">
                    <?php
    // require_once("../models/dbconnection.php");
    $host = 'localhost';
    $dbname = 'NGO_MIS';
    $username = 'root';
    $password = '';
    $dsn = "mysql:host=$host;dbname=$dbname";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    try {
    $pdo = new PDO($dsn, $username, $password, $options);
        }catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
    if($_SERVER['REQUEST_METHOD']==='POST'){

        $username=$_POST['username'];
        $pwd=$_POST['pwd'];
        
        
        $stm=$pdo->prepare("SELECT * FROM ngoo WHERE username = :username AND pwd = :pwd");
        $stm->bindParam(':username',$username);
        $stm->bindParam(':pwd',$pwd);
        $stm->execute();
        $user = $stm->fetch(PDO::FETCH_ASSOC);
        if ($user){
            session_start();
            $_SESSION["user_id"] = $user["id"];
            header("Location:dash.php");
            exit;
        } else {
           echo 'Incorrect username or password';
           
        }
    }
    ?>
                    </div>
                    <a href="../routes/index.php">
                        Don't have an account ? Register
                    </a>
                </div>
            </form>
        </div>
    </div>
    <div class="right">
        <img src="../img/konvetion.webp" alt="">
        <div class="right_text">
            <p class="first_p">Welcome to PORTAL
            </p>
            <p class="second_p">

                "By pooling their resources and working together, we ensure that partnering organizations can achieve
                their collective goals more quickly and with greater impact."
            </p>
        </div>
    </div>
   
</body>

</html>