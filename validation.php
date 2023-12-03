 <?php


require_once 'mail.php';


    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['mail']);
    $message = htmlentities($_POST['body']);
    $subject = htmlentities($_POST['subject']);
    $phone = htmlentities($_POST['phone']);

    $mail->setFrom($email , $name); //if we want the user to send to us we need just to switch betweeb setform and addaddress
    $mail->addAddress('tdevintw@gmail.com');
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();





 







// require_once 'mail.php';
// if(isset($POST['submit'])){
// $name = $_POST['name'];
// $email = $_POST['mail'];
// $message = $_POST['body'];
// $subject = $_POST['subject'];
// $phone = $_POST['phone'];


// if(empty($_POST['name']) || empty($_POST['mail']) || empty($_POST['body']) ||empty($_POST['subject']) ||empty($_POST['phone']))
// {
//     echo "please enter your information";
// }else if(!preg_match('/[A-Za-z\s]/', $name)){
//     echo "Invalid Name";
// }else if(!filter_var($email, FILTER_VALIDATE_EMAIL())){
//     echo "Invalid Email";
// }else if(strlen($message<29)){
//     echo "must be more then 30";
// }else{
//     $mail->setFrom($email); //if we want the user to send to us we need just to switch betweeb setform and addaddress
//     $mail->addAddress('tdevintw@gmail.com', 'Mailer');
//     $mail->Subject = 'Here is the subject';
//     $mail->Body    = $message;
//     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//     $mail->send();   
// }
// }
?> 