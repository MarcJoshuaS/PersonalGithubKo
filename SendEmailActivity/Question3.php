<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <meta charset="UTF-8">
</head>
<body>
<h1>Send Email</h1>

<form method="post" action="">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" required><br>
    
    <label for="email">Email</label>
    <input type="email" name="email" id="email" required><br>
    
    <label for="subject">Subject</label>
    <input type="text" name="subject" id="subject" required><br>
    
    <label for="message">Message</label>
    <textarea name="message" id="message" required></textarea><br>
    
    <br>
    
    <button type="submit" name="send">Send</button>
</form>

    <?php
    require 'vendor/autoload.php'; 

    use PHPMailer\PHPMailer\PHPMailer;

    require 'vendor/phpmailer/phpmailer/src/Exception.php';
    require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/phpmailer/src/SMTP.php';

    if(isset($_POST["send"])) {
        $mail = new PHPMailer(true);

          //gmail acc
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'arcmania111@gmail.com'; 
        $mail->Password = 'ycsy dwdw snch ndaf'; 
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465; 

        $mail->setFrom($_POST["email"], $_POST["name"]);
        $mail->addAddress('arcmania111@gmail.com'); //reciever
        $mail->isHTML(true);
        $mail->Subject = $_POST["subject"];
        $mail->Body = $_POST["message"];

        if ($mail->send()) {
            echo '<script>alert("Sent Successfully");</script>';
        } else {
            echo '<script>alert("Email sending failed. Please try again later.");</script>';
        }
    }
    ?>
</body>
</html>
