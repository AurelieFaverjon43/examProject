<?php
class BookController{
    public function newBookAction(){
        require 'View/newBook.php';
    }

    public function formAction(){
        $bookManager = new BookManager();
        $book =  new Book(null, $_POST['title'], $_POST['autor'], $_POST['category']);
        $bookManager->insert($book);
        header('Location: http://localhost/projectExam/index.php?controller=index&action=renderIndex');
    }

    public function deleteAction($id){
        $bookManager = new BookManager();
        $bookManager->delete($id);
        header('Location: http://localhost/projectExam/index.php?controller=index&action=renderIndex');
    }

}
?>