<?php
    try{
        $imie = $_POST["imie"];
        $wiek = $_POST["wiek"];
        $db = new PDO('sqlite:Maciejek.sqlite');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $result = $db->query("INSERT INTO zawodnicy('imie','wiek') VALUES(\"$imie\", $wiek)");
    }
    catch(PDOException $e){
        echo "Błąd: ".$e->getMessage();
    }
    header("Location: /zadanko");
?>