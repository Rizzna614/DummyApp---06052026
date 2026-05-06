<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $title;
    public $author;
    public $pageCountTotal;
    public $pagesCountRead;


    public function __construct($data = [title, author, pagesCountTotal, pagesCountRead])
    {
        $this->title = $data[0];
        $this->author = $data[1];
        $this->pageCountTotal = $data[2];
        $this->pagesCountRead = $data[3];
    }

    public function showLeftPagesCount ()
    {
        return $this->pageCountTotal - $this->pagesCountRead;
    }

    public function read ($pageCount)
    {
        $this->pagesCountRead = $this->pagesCountRead + $pageCount;
    }

    public static function create ($data = [title, author, pagesCountTotal, pagesCountRead])
    {
        new Book($data);
    }

    public function getTitle ()
    {
        return $this->title;
    }

    public function getAuthor ()
    {
        return $this->author;
    }

    public function getTotalPagesCount ()
    {
        return $this->pageCountTotal;
    }

    public function getReadPagesCount ()
    {
        return $this->pagesCountRead;
    }
}
