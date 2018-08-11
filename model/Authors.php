<?php
/**
 * Created by PhpStorm.
 * User: Serj
 * Date: 24.04.2018
 * Time: 20:16
 */

namespace model;

class Authors extends \config\DB {

  public function getAllAuthors() {

    $result = $this->query("SELECT `name`, `auth_id` FROM `authors`");
    return $result;
  }

}