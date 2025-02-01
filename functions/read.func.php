<?php 

session_start();

try {
    // Connexion à la base de données
    $db = new PDO('mysql:host=localhost;dbname=your_database', 'username', 'password');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erreur de connexion : ' . $e->getMessage();
    exit;
}

function get_clients()
{
    global $db;
    $requetteJoin = "SELECT * FROM clients JOIN rendez_vous ON clients.id_rdv = rendez_vous.id_rdv ORDER BY id_etudiant DESC";
    $req = $db->query($requetteJoin);
    $results = [];
    while ($rows = $req->fetchObject()) {
        $results[] = $rows;
    }
    return $results;
}

$client = get_clients();

// 1. Compteur des clients
function Compteur_client()
{
    global $db;
    $sql = "SELECT id_clients FROM clients";
    $req = $db->prepare($sql);
    $req->execute();
    $exist = $req->rowCount();
    return $exist;
}
$Compteur_id_clients = Compteur_client();
?>
