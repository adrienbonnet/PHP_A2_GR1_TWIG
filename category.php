<?php
/**
 * @author Thibaud BARDIN (https://github.com/Irvyne).
 * This code is under MIT licence (see https://github.com/Irvyne/license/blob/master/MIT.md)
 */

require __DIR__.'/_header.php';

if (!empty($_GET['id'])) {
    $id = (int) $_GET['id'];
    $category = getCategory($link, $id);
    if (!$category) {
        header('Location: categories.php');
    }
    $articles = getArticlesFromCategory($link, $category['id']);
} else {
    header('Location: index.php');
}
echo $twig->render('articles.html.twig', [
    'category' => $articles,
]);
require __DIR__.'/_footer.php';

