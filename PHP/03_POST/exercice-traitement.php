<?php

$message = '';
var_dump($_POST);

if (!empty($_POST)) {  // est équivalent à if($_POST) : signifie que $_POST n'est pas vide, donc que le formulaire a été soumis

    $message = '<p>Ville: ' .$_POST['ville'] . '</p>';
    $message .= '<p>code postal: ' . $_POST['code_postal'] . '</p>';
    $message .= '<p>Adresse : ' . $_POST['adresse'] . '</p>';

}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Votre formulaire</title>
</head>
<body>
    <h1>Vous avez indiqué :</h1>
    <?php echo $message; ?>
</body>
</html>