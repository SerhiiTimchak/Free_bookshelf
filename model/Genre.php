<?php

namespace model;

use config\DB;

class Genre extends \config\DB {

  public function getAllGenre() {

    $result = $this->query("SELECT `name`,`genre_id` FROM `genre`");
    return $result;
  }

}










