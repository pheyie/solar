<?php 
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=solars','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
if (isset($_POST['submit']) && !empty($_POST['name'])  && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['subject']) && !empty($_POST['message']) )
{
   $name=  $_POST['name'];
   $email= $_POST['email'] ;
   $phone=  $_POST['phone'];
   $subject=  $_POST['subject'];
   $message= $_POST['message'];

   $pdo->exec("INSERT INTO contact (name,message,email,phone,subject)
   values ('$name','$message','$email','$phone','$subject')");

echo"thanks for the message";
}
else{ echo"bad";}
