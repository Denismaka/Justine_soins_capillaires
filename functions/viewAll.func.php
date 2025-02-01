<?php

function get_all()
{
    global $db;


    $sql = "SELECT * FROM clients 
    JOIN categories 
    ON posts.id_categorie = categories.id_categorie  
    ORDER BY posts.date_post DESC 
    ";

    $req = $db->query($sql);
    $results = [];

    while ($rows = $req->fetchObject()) {
        $results[] = $rows;
    }

    return $results;
}

$posts = get_all();
