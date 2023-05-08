<?php
    class produit
    {
        private $idP;
        public $nomP;
        public $description;
		public $prixP;
        public $categorie;
        private $img_url;



     
        function setidP(string $idP){
			$this->idP=$idP;
		}
        function setnomP(string $nomP){
			$this->nomP=$nomP;
		}
        function setdescription(string $description){
			$this->description=$description;
        }
		function setprixP(string $prixP){
			$this->prixP=$prixP;
        }
		function setcategorie(string $categorie){
			$this->categorie=$categorie;
        }
		function setimg_url(string $img_url){
			$this->img_url=$img_url;
        }

        function getidP(){
			return $this->idP;
		}
        function getnomP(){
			return $this->nomP;
		}
        function getdescription(){
			return $this->description;
		}
		function getprixP(){
			return $this->prixP;
		}
		function getcategorie(){
			return $this->categorie;
		}
		function getimg_url(){
			return $this->img_url;
		}
        
    }
    

?>