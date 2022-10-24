<?php
    try{
        $db = new PDO('sqlite:Maciejek.sqlite');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $result = $db->query("DELETE FROM Zawodnicy WHERE ID=$id");
        $result = $db->query("UPDATE SQLITE_SEQUENCE SET SEQ=0 WHERE NAME='zawodnicy';");
    }
    
    catch(PDOException $e){
        echo "Błąd: ".$e->getMessage();
    }
    header("Location: /zadanko");
?>