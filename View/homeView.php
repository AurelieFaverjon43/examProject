<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ma bibliothèque</title>
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<h1>Notre bibliotheque</h1>
<p>Nos livres du moment :</p>

<a href="http://localhost/projectExam/index.php?controller=book&action=newBook">Ajouter un livre</a>
<?php
foreach ($books as $book){
    ?>

    <div class="news">
        <h3>
            <?php echo $book->getTitle(); ?>
            <em> le <?php echo $book->getAutor() ?></em>
            <em> le <?php echo $book->getCategory() ?></em>
        </h3>

        <p>
            <?php
            echo nl2br(htmlspecialchars($book->getAutor()));
            ?>
            <br />
            <em><a href="http://localhost/projectExam/index.php?controller=book&action=supprimer&id=<?php echo $book->getId()?>">Supprimer</a></em>
            <em><a href="http://localhost/projectExam/index.php?controller=book&action=modifier&id=<?php echo $book->getId()?>">Modifier</a></em>
        </p>
    </div>
    <?php
}
?>
</body>
</html>