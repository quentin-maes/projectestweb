<?php
    $username = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $birthday = $_POST['birthday'];
    $country = $_POST['country'];
    $gender = $_POST['gender'];
    $checkcondition = $_POST['checkcondition'];

?>


<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Result</title>
  <meta name="resultform" content="resultform">
  <meta name="author" content="SitePoint">
</head>

<body>
 <h2> Nom : <?php echo $username ?>
 <br /> Email : <?php echo $email ?>
 <br /> Mot de passe : <?php echo $password ?>
 <br /> Date de naissance : <?php echo $birthday ?>
 <br /> Pays : <?php echo $country ?>
 <br /> Genre : <?php echo $gender ?>
 <br /> Accepte les conditions : <?php echo $checkcondition ?>

 </h2>




</body>
</html>