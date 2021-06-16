<?php
class Article
{
    private int $id;
    private $title;
    private $description;
    private $date;
    private int $note;
    private string $category;
    private int $author;
    private bool $validation;
    private $image;

    public function __construct($title, $description = '', $date, $category, $author, $image)
    {
        $this->title = $title;
        $this->description = $description;
        $this->date = $date;
        $this->category = $category;
        $this->author = $author;
        $this->image = $image;
    }

    // Getters :
    public function __get($name)
    {
        switch ($name) {
            case 'id':
                return $this->id;
            case 'title':
                return $this->title;
            case 'description':
                return $this->description;
            case 'date':
                return $this->date;
            case 'note':
                return $this->note;
            case 'category':
                return $this->category;
            case 'author':
                return $this->author;
            case 'validation':
                return $this->validation;
            case 'image':
                return $this->image;
        }
    }

    // Setters :
    public function __set($name, $value)
    {
        switch($name) {
            case 'title':
                $this->title = $value;
                break;
            case 'description':
                $this->description = $value;
                break;
            case 'date':
                $this->date = $value;
                break;
            case 'note':
                $this->note = $value;
                break;
            case 'category':
                $this->category = $value;
                break;
            case 'author':
                $this->author = $value;
                break;
            case 'validation':
                $this->validation = $value;
                break;
            case 'image':
                $this->image = $value;
                break;
        }
    }
}
