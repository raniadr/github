<?php

    require_once '../config.php';
    require_once '../Model/product.php';



    Class product {

        function afficherproduit()
        {
            $requete = "select * from produit";
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
       /* function triPardescription()
        {
            $requete = "select * from product ORDER BY description";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        */
        function getproductbyID($id)
        {
            $requete = "select * from product where idP=:id";
            $config = config::getConnexion();
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

        function ajouterproduct($product)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO product
                (idP,nameP,description,price,category,image_url)
                VALUES
                (:idP,:nameP,:description,:price,:category,:image_url)
                ');
                $querry->execute([
                    'idP'=>$product->getidP(),
                    'nameP'=>$product->getnameP(),
                    'description'=>$product->getdescription(),
                    'price'=>$product->getprice(),
                    'category'=>$product->getcategory(),
                    'image_url'=>$product->getimage_url(),
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function modifierproduct($product)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE product SET
                nameP=:nameP,description=:description,price=:price,category=:category,image_url=:image_url

                where idP=:idP
                ');
                $querry->execute([
                    'idP'=>$product->getidP(),
                    'nameP'=>$product->getnameP(),
                    'description'=>$product->getdescription(),
                    'price'=>$product->getprice(),
                    'category'=>$product->getcategory(),
                    'image_url'=>$product->getimage_url()
                  
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function supprimerproduct($id)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM product WHERE idP =:id
                ');
                $querry->execute([
                    'id'=>$id
                ]);
                
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
       /* function afficherproductbyarticle($idP)
        {
            $requete = "select * from article where idP=$idP";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
  
     /*
 * Get sticky posts for home page
 */
function getproduct($idP){
    $requete="select * from article where idP=:id   ";
    $config= config::getConnexion();
    try{
    $query=$config->prepare($requete);
    $query->execute(
[ 
    'id'=>$idP,
    
]);
    $result=$query->fetchAll();
    return $result;
    }catch (PDOException $e)
    {$e->getMesssage();}
}   
        
    }

