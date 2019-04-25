<?php
include 'include.php';

if($_GET['controller'] === 'index' && $_GET['action'] == 'renderIndex'){
    $indexController = new IndexController();
    $indexController->renderIndexAction();
}

if($_GET['controller'] === 'book' && $_GET['action'] == 'newArticle') {
    $bookController = new BookController();
    $bookController->newBookAction();
}

if($_GET['controller'] === 'book' && $_GET['action'] == 'formBook'){
    $bookController = new BookController();
    $bookController->formAction();
}

if($_GET['controller'] === 'book' && $_GET['action'] == 'supprimer'){
    $bookController = new BookController();
    $bookController->deleteAction($_GET['id']);
}


else{
    echo "La page n'est pas trouvée";
}
?>