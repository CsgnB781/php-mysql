<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site de recettes - Contact</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
  >
</head>
<body class="d-flex flex-column min-vh-100">
  <div class="container">
    <?php include_once(__DIR__ . '/header.php'); ?>

    <h1>Contactez-nous</h1>

    <!-- Formulaire version GET vers submit_contact.php -->
    <form method="GET" action="submit_contact.php" class="mb-4">
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input id="email" name="email" type="text" class="form-control" placeholder="">
        <div class="form-text">Nous ne revendrons pas votre email.</div>
      </div>

      <div class="mb-3">
        <label for="message" class="form-label">Votre message</label>
        <textarea id="message" name="message" class="form-control" rows="4" placeholder="Exprimez-vous"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
  </div>

  <?php include_once(__DIR__ . '/footer.php'); ?>
</body>
</html>
