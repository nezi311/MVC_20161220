<?php
	namespace Models;
	use \PDO;
	class Products extends Model {
		//model zwraca tablic� wszystkich produkt�w 
		public function getAll($category = null){
			try
			{				
				$data = array();		
				
				if($category === null || $category === ''){
					//$stmt = $this->pdo->query('SELECT * FROM `produkty`');
					$stmt = $this->pdo->query('SELECT ka.*, pr.* FROM kategorie AS ka, produkty AS pr '.
					'WHERE ka.id=pr.id_kategorii ORDER BY ka.id');
					while($row = $stmt -> fetch())
					{
						//var_dump($row);
						$data[$row[0]][$row['id']] = array( 
							'name' => $row['nazwa'],
							'description' => $row['opis'],
							'price' => $row['cena']
						);
					}				
				}	
				else {
					$stmt = $this->pdo->prepare('SELECT * FROM `produkty` WHERE `id_kategorii` = :kategoria');					
					$stmt->bindValue(':kategoria', $category, PDO::PARAM_INT);
					$stmt->execute(); 
					while($row = $stmt -> fetch())
					{
						//var_dump($row);
						$data[$category][$row['id']] = array(
							'name' => $row['nazwa'],
							'description' => $row['opis'],
							'price' => $row['cena']
						);
					}					
				}
				//var_dump($data);
				$stmt->closeCursor();
				return $data;
			}
			catch(\PDOException $e)
			{
			  echo 'Database connection error!';
			  exit(1);
			}			
		}
		public function getCountOrderedByCategory(){
			$data = array();
			try
			{
				$stmt = $this->pdo->query('SELECT `id_kategorii`, COUNT(*) as `ilosc` FROM `produkty` GROUP BY `id_kategorii`');
				while($row = $stmt -> fetch())
				{
					//var_dump($row);
					$data[$row['id_kategorii']] = $row['ilosc'];
				}				
				$stmt->closeCursor();
			}
			catch(\PDOException $e)
			{
				echo 'Database connection error!';
				exit(1);
			}
			return $data;
		}		
		
		//model zwraca wybrany produkt
		public function getOne($id){
			try
			{		  
				$stmt = $this->pdo->prepare('SELECT kategorie.id, kategorie.nazwa, 
						produkty.id, produkty.nazwa, produkty.opis, produkty.cena
						FROM `kategorie`, `produkty`			
						WHERE kategorie.id = produkty.id_kategorii
						AND produkty.id = :id');
				$stmt->bindValue(':id', $id, PDO::PARAM_INT); 
				$stmt->execute(); 
				$result = $stmt->fetchAll();				
				$stmt->closeCursor();
				//czy istnieje produkt o padanym id
				if($result !== false && !empty($result))
					return $result[0];
				else
					return null;
			}
			catch(\PDOException $e)
			{
			  echo 'Database connection error!';
			  exit(1);
			}				
		}
			
		//model usuwa wybran� produkt
		public function delete($id){
			try
			{		  
				$stmt = $this->pdo->prepare('DELETE FROM `produkty` WHERE `id`=:id');
				$stmt->bindValue(':id', $id, PDO::PARAM_INT); 
				$stmt->execute(); 				
				$stmt->closeCursor();
			}
			catch(\PDOException $e)
			{
			  echo 'Database connection error!';
			  exit(1);
			}				
		}
		
		//model dodaje wybran� kategori�
		public function insert($name, $description, $price, $category) {
			try
			{		  
				$stmt = $this->pdo->prepare('INSERT INTO `produkty` (`nazwa`, `opis`, `cena`, `id_kategorii`) 
				VALUES (:name, :description, :price, :category)');
				$stmt->bindValue(':name', $name, PDO::PARAM_STR);
				$stmt->bindValue(':description', $description, PDO::PARAM_STR);				
				$stmt->bindValue(':price', $price, PDO::PARAM_STR);
				$stmt->bindValue(':category', $category, PDO::PARAM_INT);
				$result = $stmt->execute(); 				
				$stmt->closeCursor();
				return $result;
			}
			catch(\PDOException $e)
			{
			  echo 'Database connection error!';
			  exit(1);
			}					
		}	
		
	}
