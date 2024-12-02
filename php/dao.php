<!--*********************************************************connexion a ma base de donnée restaurantd_db*************************************************************-->
<?php
function get_connection()
{
    $host = 'localhost';
    $dbname = 'restaurantd_db';
    $username = 'tina';
    $password = 'airo_2024_tciv';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $pdo->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("erreur de connexion : " . $e->getMessage());
    }
} ?>
<?php
function get_categorie()
{
    $pdo = get_connection();
    $stmt = $pdo->prepare("SELECT * FROM categorie");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function get_active_categorie($limit = 6)
{
    $pdo = get_connection();
    $stmt = $pdo->prepare("SELECT * FROM categorie WHERE active = 'Yes' LIMIT :limit");
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchall(PDO::FETCH_ASSOC);
}
/*(((((((((((((((((((((((((page plats dynamique)))))))))))))))))))))))))*/
function get_plat() 
{
$pdo = get_connection();
$stmt = $pdo->prepare("SELECT * FROM plat WHERE active ='Yes'");
$stmt->execute();
return $stmt->fetchAll(PDO::FETCH_ASSOC);
}