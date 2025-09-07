<?php
function displayAuthor($authorEmail, $users) {
    foreach ($users as $user) {
        if ($user['email'] === $authorEmail) {
            return $user['full_name'] . ' (' . $user['age'] . ' ans)';
        }
    }
    return $authorEmail; // si non trouvé
}

function getRecipes($recipes) {
    $valid = [];
    foreach ($recipes as $recipe) {
        if (!empty($recipe['is_enabled'])) {
            $valid[] = $recipe;
        }
    }
    return $valid;
}
