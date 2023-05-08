<?php

    require_once '../config.php';
    require_once '../model/order.php';
    require_once '../model/product.php';

    Class commande {

        function afficherOrder()
        {
            $requete = "select * from commande";
            $config = connexion::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function getproductbyID($idP)
        {
            $requete = "select * from produit where idP=:idP";
            $config = connexion::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'idP'=>$idP
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

       /* function CgetproductbyID($id)
        {
            $requete = "select * from product where id=:id";
            $config = connexion::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'id'=>$id
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        */
        //triii
        function affichertri()
        {
            $requete = "select * from commande ORDER BY idC";
            $config = connexion::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function rechercheOrder($statusCommande)
        {
            $requete = "select * from commande where statusCommande like '%$statusCommande%'";
            $config = connexion::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function getOrderbyID($idC)
        {
            $requete = "select * from commande where idC=:idC";
            $config = connexion::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'idC'=>$idC
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function ajouterOrder($Order)
        {
            $config = connexion::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO commande
                (idC,prix_total,dateLivraison,date_commande,statusCommande)
                VALUES
                (:idC,:prix_total,:dateLivraison,:date_commande,:statusCommande)
                ');
                $querry->execute([
                    'idC'=>$Order->getidC(),
                    'prix_total'=>$Order->getprix_total(),
                    'dateLivraison'=>$Order->getdateLivraison(),
                    'date_commande'=>$Order->date_commande(),
                    'statusCommande'=>$Order->getstatusCommande(),
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function modifierOrder($Order)
        {
            $config = connexion::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE Order SET
                prix_total=:prix_total,dateLivraison=:dateLivraison,:date_commande,:statusCommande

                where idC=:idC
                ');
                $querry->execute([
                    'idC'=>$Order->getidC(),
                    'prix_total'=>$Order->getprix_total(),
                    'dateLivraison'=>$Order->getdateLivraison(),
                    'date_commande'=>$Order->getdate_commande(),
                    'statusCommande'=>$Order->getstatusCommande(),
                  
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function supprimerOrder($idC)
        {
            $config = connexion::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE from commande WHERE idC=:idC
                ');
                $querry->execute([
                    'idC'=>$idC
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        
        // function recupererCoupon($coupon){
        //     $sql="SELECT * from remis where coupon='".$coupon."'";
        //     $db = connexion::getConnexion();
        //     try{
        //         $query=$db->prepare($sql);
        //         $query->execute();
    
        //         $Voiture=$query->fetch();
        //         return $Voiture;
        //     }
        //     catch (Exception $e){
        //         die('Erreur: '.$e->getMessage());
        //     }
        // }
        }
