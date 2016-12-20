<?php
namespace classes;
require_once('vendor/autoload.php');


use DB\dbconfig as DB;
DB::setDBConfig();
$pdo = DB::getHandle(); // załączenie uchwytu do wykonywania poleceń na bazie danych
use \PDO;

class ksiazka
{
  private $tytul;
  private $autor;
  private $rok_wydania;
  private $kategoria;

  public function __construct($t,$a,$rw,$k)
  {
    $this->tytul=$t;
    $this->autor=$a;
    $this->rok_wydania=$rw;
    $this->kategoria=$k;
  }

  public function getTytul()
  {
    return $this->tytul;
  }

  public function getAutor()
  {
    return $this->autor;
  }

  public function getRokWydania()
  {
    return $this->rok_wydania;
  }

  public function getKategoria()
  {
    return $this->kategoria;
  }
}

 ?>
