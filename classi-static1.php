<?php
class greeting {
  public static function welcome() {
    echo "Ciao Mondo!";
  }

  public function __construct() {
    self::welcome();
  }
}

new greeting();
?>