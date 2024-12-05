<?php
session_start();
if (isset($_GET['id_categorie']) && is_numeric($_GET['id_categorie'])) {
    $_SESSION['id_categorie']  = intval($_GET['id_categorie']);
    header('location: platparcategorie.php');
    exit;
} else {
    header('location: categorie.php');
    exit;
}