<?php
	namespace Models;
	use \PDO;
	class Autor extends Model
  {
		//model zwraca tablicę wszystkich kategorii
		public function getAll(){
            $data = array();
            if(!$this->pdo)
                $data['error'] = 'Połączenie z bazą nie powidoło się!';
            else
                try
                {
                    $autorzy = array();
                    $stmt = $this->pdo->query("SELECT autor.id, imie, nazwisko, COUNT(ksiazka.kategoria) AS ilosc
																							FROM autor
																							LEFT OUTER JOIN ksiazka
																							ON ksiazka.autor=autor.id
																							GROUP BY autor.id
																							ORDER BY `ilosc`  ASC");
                    $autorzy = $stmt->fetchAll();
                    $stmt->closeCursor();
                    if($autorzy && !empty($autorzy))
                        $data['autorzy'] = $autorzy;
                    else
                        $data['autorzy'] = array();
                }
                catch(\PDOException $e)
                {
                    $data['error'] = 'Błąd odczytu danych z bazy! ';
                }
            return $data;
		}
		//model zwraca wybraną kategorię
		public function getOne($id)
    {
            $data = array();
            if($id === NULL)
                $data['error'] = 'Nieokreślone id!';
            else if(!$this->pdo)
                $data['error'] = 'Połączenie z bazą nie powidoło się!';
            else
                try
                {
                    $stmt = $this->pdo->prepare('SELECT * FROM `autor` WHERE `id`=:id');
                    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
                    $result = $stmt->execute();
                    $autorzy = $stmt->fetchAll();
                    $stmt->closeCursor();
                    //czy istnieje kategoria o padanym id
                    if($result && $autorzy && !empty($autorzy)){
                        $data['autorzy'] = $autorzy[0];
                    }
                    else
                    {
                        //$data['category'] = array();
                        $data['error'] = "Brak autora o id=$id!";
                    }

                }
                catch(\PDOException $e)
                {
                     $data['error'] = 'Błąd odczytu danych z bazy!';
                }
            return $data;
		}
		//model usuwa wybraną kategorię
		public function delete($id)
    {
            $data = array();
            if($id === NULL)
                $data['error'] = 'Nieokreślone id!';
            else if(!$this->pdo)
                $data['error'] = 'Połączenie z bazą nie powidoło się!';
            else
                try
                {
                    $stmt = $this->pdo->prepare('DELETE FROM `autor` WHERE `id`=:id');
                    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
                    $result = $stmt->execute();
                    $rows = $stmt->rowCount();
                    $stmt->closeCursor();
                    if(!$result && $rows <= 0)
                    $data['error'] = "Nie znaleziono autora o id = $id!";
                }
                catch(\PDOException $e)
                {
                     $data['error'] = 'Błąd odczytu danych z bazy!';
                }
            return $data;
		}
		//model dodaje wybraną kategorię

		public function insert($imie,$nazwisko)
    {
            $data = array();
            if($imie === NULL || $imie === "")
                $data['error'] = 'Nieokreślone imię!';
            if($nazwisko === NULL || $nazwisko === "")
                    $data['error'] =$data['error'].'<br> Nieokreślone nazwisko!';
						else if(!$this->pdo)
                $data['error'] = 'Połączenie z bazą nie powidoło się!';
            else
                try
                {
                    $stmt = $this->pdo->prepare('INSERT INTO `autor` (`imie`,`nazwisko`) VALUES (:imie,:nazwisko)');
                    $stmt->bindValue(':imie', $imie, PDO::PARAM_STR);
                    $stmt->bindValue(':nazwisko', $nazwisko, PDO::PARAM_STR);
                    $stmt->execute();
                    $stmt->closeCursor();
                }
                catch(\PDOException $e)
                {
                     $data['error'] =$data['error'].'<br> Błąd zapisu danych do bazy!';
                }
            return $data;
		}
	}
?>
