<?php
/**
 * Created by PhpStorm.
 * User: Serj
 * Date: 24.04.2018
 * Time: 20:40
 */

namespace model;

class Book extends \config\DB{

  public function getAllBooks() {

    $result = $this->query("SELECT * FROM `books`");
    return $result;
  }

  public function getBooksByAuthor() {
    $result = $this->query("SELECT * FROM `books` WHERE `auth_id` = {$_GET['auth_id']}");
    return $result;
  }

  public function getBooksByGenre() {
    $result = $this->query("SELECT * FROM `books` WHERE `genre_id` = {$_GET['genre_id']}");
    return $result;
  }

  public function getBook() {

    $result = $this->query("SELECT * FROM `books` WHERE `book_id` = {$_GET['book_id']}");
    return $result;
  }

}