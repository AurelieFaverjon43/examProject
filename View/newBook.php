<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ma bibliothèque</title>
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php
    ?>
</head>

<body>
<h1>Ajout d'un livre</h1>
<p>Formulaire d'ajout d'un livre</p>

<form action="/projectExam/index.php?controller=book&action=formBook" method="post">
    <input name="title" type="text" placeholder="Titre de mon livre">
    <input name="autor" type="text" placeholder="Auteur de mon livre">
    <input name="category" type="text" placeholder="Category de mon livre">
    <input type="submit" value="Valider !">
</form>
</body>
</html>
