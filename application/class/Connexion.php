<?php
namespace App;

class Connexion {
	private $login;
	private $pass;
	private $connec;

	public function __construct(){
		$this->login = 'root';
		$this->pass = '';
		$this->db = 'projet_annonces';
		$this->connect();
	}

	private function connect(){
		try
		{
	         $bdd = new \PDO(
                            'mysql:host=localhost;dbname='.$this->db.';charset=utf8mb4',
                             $this->login,
                             $this->pass
                 );
			$bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
			$bdd->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
			$this->connec = $bdd;
		}
		catch (\PDOException $e)
		{
			$msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
			die($msg);
		}
	}

	public function q($sql,Array $cond = null){
		$stmt = $this->connec->prepare($sql);

		if($cond){
			foreach ($cond as $v) {
				$stmt->bindParam($v[0],$v[1],$v[2]);
			}
		}

		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->closeCursor();
		$stmt=NULL;
	}
	public function qw($sql,Array $cond = null){
		$stmt = $this->connec->prepare($sql);

		if($cond){
			foreach ($cond as $v) {
				$stmt->bindParam($v[0],$v[1],$v[2]);
			}
		}

		$stmt->execute();
		$stmt->closeCursor();
		$stmt=NULL;
	}
}