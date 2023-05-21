<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPGS || Reset Password</title>
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css"/>
    <link rel="stylesheet" href="css/registrationlogin.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<body>
    <div class="container" id="container">
        
        <div class="form-container login-container">
		
        <form action="" method="post">
        
            <h1>Password Recovery</h1>
            <i class='fa fa-triangle-exclamation'></i>
            <input type="email" id="email" name="email" placeholder="Email">
            <button name="recover" type="recover">Recover</button>
        </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1 class="title">Forgotten <br> your password ? </h1>
                    <p>Not a problem</p>
                </div> 
            </div>
        </div>
    </div>

</body>
</html>

<?php
include('dataconnection.php');

if (isset($_POST["recover"])) {
    $email = mysqli_real_escape_string($conn, $_POST["email"]);

    $sql = "SELECT * FROM `login` WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) <= 0) {
        ?>
        <script>
            alert("<?php echo "Sorry, no emails exist"; ?>");
        </script>
        <?php
    } else {
        $fetch = mysqli_fetch_assoc($result); // Fetch the row from the result set

        if ($fetch["status"] == 0) {
            ?>
            <script>
                alert("Sorry, your account must be verified first before you can recover your password!");
                window.location.replace("userregistrationlogin.php");
            </script>
            <?php
        } else {
            // Generate token by binaryhexa
            $token = bin2hex(random_bytes(50));

            session_start();
            $_SESSION['token'] = $token;
            $_SESSION['email'] = $email;

            require "phpmailer/PHPMailerAutoload.php";
            $mail = new PHPMailer;

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';

            // h-hotel account
            $mail->Username = 'allenleekheehern@gmail.com';
            $mail->Password = 'lpuvtqrahhscqgsk';

            // Send from h-hotel email
            $mail->setFrom('allenleekheehern@gmail.com', 'Password Reset');
            // Get email from input
            $mail->addAddress($_POST["email"]);
            // $mail->addReplyTo('lamkaizhe16@gmail.com');

            // HTML body
            $mail->isHTML(true);
            $mail->Subject = "Recover your password";
            $mail->Body = "<b>Dear User</b>
            <h3>We received a request to reset your password.</h3>
            <p>Kindly click the below link to reset your password</p>
            http://localhost/TPGS/userresetpassword.php?email=".$email."
            <br><br>
            <p>With regards,</p>
            <b>TPGS Team</b>";

            if (!$mail->send()) {
                ?>
                <script>
                    alert("<?php echo "Invalid Email"; ?>");
                </script>
                <?php
            } else {
                ?>
                <script>
                    window.location.replace("notification.html");
                </script>
                <?php
            }
        }
    }
}
?>
