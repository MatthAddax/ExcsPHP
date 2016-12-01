<?php
	class Personnage{
		private $nom, $nbPtsDeVie;
		
		function __construct($nom){
			$this->nom = $nom;
			$this->nbPtsDeVie = 100;
		}
		
		public function subitDommages($n){
			if($this->nbPtsDeVie - $n >= 0){
				$this->nbPtsDeVie -= $n;
			}
			else{
				$this->nbPtsDeVie = 0;
			}
		}
	}
