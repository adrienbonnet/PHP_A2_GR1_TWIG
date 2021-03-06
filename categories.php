<?php
/**
 * @author Thibaud BARDIN (https://github.com/Irvyne).
 * This code is under MIT licence (see https://github.com/Irvyne/license/blob/master/MIT.md)
 */

require __DIR__.'/_header.php';

$categories = getCategories($link);
echo $twig->render('categories.html.twig', [
    'categories' => $categories,
]);
require __DIR__.'/_footer.php';

