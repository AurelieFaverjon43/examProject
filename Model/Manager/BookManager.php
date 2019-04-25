<?php
class BookManager extends DbManager {

    public function __construct()
    {
        parent::__construct();
    }

    public function insert(Book $book)
    {
        $query = "INSERT INTO `Book`(`title`, `autor`, `category`) VALUES ('" . $book->getTitle() . "','" . $book->getAutor() . "','" . $book->getCategory(). "')";
        $res = $this->bdd->prepare($query);
        $res->execute();
        $book->setId($this->bdd->lastInsertId());
    }

    public function selectAll(){
        $query ='SELECT * FROM Book';
        $res = $this->bdd->query($query);
        $books = [];

        foreach  ($res as $data) {
            $books[] = new Book($data['id'], $data['title'], $data['autor'], $data['category']);
        }
        return $books;
    }

    public function selectOne($id){
        $query ='SELECT * FROM Book WHERE id = '.$id;
        $res = $this->bdd->query($query);

        $res = $res->fetch();

        $book = new Book($res['id'], $res['title'], $res['autor'], $res['category']);

        return $book;
    }
    public function delete($id){
        $query = "DELETE FROM Book WHERE id = ". $id;

        $res = $this->bdd->prepare($query);
        $res->execute();
    }

    public function update(Book $book){
        $query = "UPDATE `Book` SET `title` = '".$book->getTitle()."',
                                    `autor` ='".$book->getAutor()."',
                                    `category` ='".$book->getCategory()."'
                                    WHERE id = ".$book->getId();

        $res = $this->bdd->prepare($query);
        $res->execute();
    }


}
