<?php
session_start();
if (isset($_GET['idP'])) {
    $idC=$_GET['idC'];
    $id=1;
    require_once '../controller/Order.php';
    require_once '../controller/product.php';
    require_once '../Model/order.php';
    $order = new commande($idC,$prix_total,$dateLivraison , $date_commande , $statusCommande);
    $order->ajouterOrder($order);
    header('location:cart.php');
}
?>