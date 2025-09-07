<?php
require __DIR__ . '/recettes.php';


function display_author($email, array $users) {
    foreach ($users as $user) {
        if ($user['email'] === $email) {
            return $user['full_name'];
        }
    }
    return $email;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Affichage des recettes</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 700px; margin: 30px auto; }
        h1 { font-size: 32px; margin-bottom: 16px; }
        h2 { font-size: 24px; margin: 18px 0 6px 0; }
        .author { font-style: italic; color: #666; }
    </style>
</head>
<body>
    <h1>Affichage des recettes</h1>

    <?php foreach ($recipes as $recipe): ?>
        <?php if ($recipe['is_enabled']): ?>
            <h2><?php echo $recipe['title']; ?></h2>
            <div><?php echo $recipe['recipe']; ?></div>
            <div class="author"><?php echo display_author($recipe['author'], $users); ?></div>
        <?php endif; ?>
    <?php endforeach; ?>
</body>
</html>
