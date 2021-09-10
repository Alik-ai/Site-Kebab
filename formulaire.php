<?php
include('connexion.php');  //fichier pour se connecter a un serveur et une base de donnée
$errors = '';
$myemail = 'minasyan.pro@gmail.com';//<-----Put Your email address here.
if(empty($_POST['name']) ||
empty($_POST['firstname']) ||
empty($_POST['email']) ||
empty($_POST['telephone'])||
empty($_POST['message']))
{
$errors .= "\n Error: all fields are required";
}
$name = $_POST['name'];
$firstname = $_POST['firstname'];
$email_address = $_POST['email'];
$tel = $_POST['telephone'];
$message = $_POST['message'];



// if (!preg_match(
// // "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,10})$/i",
// $email_address))

// {
// $errors .= "\n Error: Invalid email address";
// }




if( empty($errors))

{               /*contact est le nom qu'on met quand on veut crée une table*/
$query = "INSERT INTO `contact` (name, firstname, email, telephone, message, time) VALUES ('$name', '$firstname', '$email_address', '$tel', '$message', NOW())";
               /*Il ne faut jamais oublier tous les champs qu'on mets au dessus dans le tableau phpmyadmin*/
$result = mysqli_query($connection, $query);



$to = $myemail;

$email_subject = "Contact form submission: $name";

$email_body = "You have received a new message. ".

" Here are the details:\n Name: $name \n ".

"Email: $email_address\n Message \n $message";

$headers = "From: $myemail\n";

$headers .= "Reply-To: $email_address";

mail($to,$email_subject,$email_body,$headers);

//redirect to the 'thank you' page

header('Location: index.html');

}

?>