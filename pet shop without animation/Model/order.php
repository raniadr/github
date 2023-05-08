<?php
    class Order
    {
        private $idC;
		public $prix_total	;
		public $dateLivraison;
		public $date_commande;
  		public $statusCommande;

       

         function getidC() {
			return $this->idC;
		  }
		
		   function setidC($idC) {
			$this->idC = $idC;
		  }
		
		   function getprix_total	() {
			return $this->prix_total	;
		  }
		
		   function setprix_total	($prix_total	) {
			$this->prix_total	 = $prix_total	;
		  }
		
		   function getdateLivraison() {
			return $this->dateLivraison;
		  }
		
		   function setdateLivraison($dateLivraison) {
			$this->dateLivraison = $dateLivraison;
		  }
		
		   function getdate_commande() {
			return $this->date_commande;
		  }
		
		   function setdate_commande($date_commande) {
			$this->date_commande = $date_commande;
		  }
		
		   function getstatusCommande() {
			return $this->statusCommande;
		  }
		
		   function setstatusCommande($statusCommande) {
			$this->statusCommande = $statusCommande;
		  }
		  
		  
		 
		}
		
			
    
    

?>