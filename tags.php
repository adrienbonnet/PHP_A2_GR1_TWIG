<?php
/**
 * @author Thibaud BARDIN (https://github.com/Irvyne).
 * This code is under MIT licence (see https://github.com/Irvyne/license/blob/master/MIT.md)
 */

require __DIR__.'/_header.php';

$tags = getTags($link);
echo $twig->render('tags.html.twig', [
    'tags' => $tags,
]);
require __DIR__.'/_footer.php';
