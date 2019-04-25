<?php
class Book extends BookManager {
    private $id;
    private $title;
    private $autor;
    private $category;

    public function __construct($id = null, $title = null, $autor = null, $category = null)
    {
        $this->id = $id;
        $this->title = $title;
        $this->autor = $autor;
        $this->category = $category;

    }

    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getTitle()
    {
        return $this->title;
    }


    public function setTitle($title)
    {
        $this->title = $title;
    }


    public function getAutor()
    {
        return $this->autor;
    }


    public function setAutor($autor)
    {
        $this->autor = $autor;
    }


    public function getCategory()
    {
        return $this->category;
    }


    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getAll(){
        return parent::selectAll();
    }

}

?>