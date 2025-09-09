<!-- submit_contact.php -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site de recettes - Confirmation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
<div class="container">

  <?php include_once(__DIR__ . '/header.php'); ?>

  <?php
  if (
      (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
      || (!isset($_POST['message']) || empty($_POST['message']))
  ) {
      echo "Il faut un email et un message valides pour soumettre le formulaire.";
      return; 
  }

  
  $safeEmail = htmlspecialchars($_POST['email']);
  $safeMessage = htmlspecialchars($_POST['message']);
  ?>

  <div class="card my-3">
    <div class="card-body">
      <h5 class="card-title">Rappel de vos informations</h5>
      <p class="card-text"><b>Email</b> : <?php echo $safeEmail; ?></p>
      <p class="card-text"><b>Message</b> : <?php echo $safeMessage; ?></p>
    </div>
  </div>

  <?php

  // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
  if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0)
  {
      // Testons si le fichier n'est pas trop gros
      if ($_FILES['screenshot']['size'] <= 1000000)
      {
          // Testons si l'extension est autorisée
          $fileInfo = pathinfo($_FILES['screenshot']['name']);
          $extension = $fileInfo['extension'];
          $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
          if (in_array($extension, $allowedExtensions))
          {
              // On peut valider le fichier et le stocker définitivement
              move_uploaded_file($_FILES['screenshot']['tmp_name'],
                  'uploads/' . basename($_FILES['screenshot']['name']));
              echo "L'envoi a bien été effectué !";
          }
      }
  }
  ?>

</div>

<?php include_once(__DIR__ . '/footer.php'); ?>
</body>
</html>
