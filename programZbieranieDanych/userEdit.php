<!DOCTYPE HTML>
<html>
<head>
<title>PDO</title>
</head>
<style>

.przycisk{
 background: #fff;
	font-size: 14px;
	margin-top: 30px;
	padding: 16px 20px;
	border-radius: 26px;
	border: 1px solid #D4D3E8;
	text-transform: uppercase;
	font-weight: 700;
	display: flex;
	align-items: center;
	width: 100%;
	color: #4C489D;
	box-shadow: 0px 2px 2px #5C5696;
	width: 300px;
 }
 
 .miejsce{
	 box-sizing: border-box;
	margin: 0;
	padding: 0;	
	font-family: Raleway, sans-serif;
	 background: #fff;
	font-size: 10px;
	margin-top: 30px;
	padding: 16px 20px;
	border-radius: 26px;
	border: 1px solid #99CCCC;
	text-transform: uppercase;
	font-weight: 700;
	display: flex;
	align-items: center;
	width: 100%;
	color: #4C489D;
	box-shadow: 0px 2px 2px #99CCCC;
	width: 300px;
	height: 20px;
 }

 form{
	 color: #4C489D;
	 font-family: Raleway, sans-serif;
 }
</style>
<?php
    if(isset($_POST["imie"])){
        try{
            $imie = $_POST["imie"];
            $wiek = $_POST["wiek"];
            $db = new PDO('sqlite:Maciejek.sqlite');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $result = $db->query("UPDATE zawodnicy SET imie=\"$imie\", wiek=$wiek WHERE ID=$id");
        }
        catch(PDOException $e){
            echo "Błąd: ".$e->getMessage();
        }
        header("Location: /zadanko");
    }else{
        echo "<div>";
        echo "<form method=\"post\">";
        echo "imie: <input class='miejsce' name=\"imie\" type=\"text\" required>";
        echo"<br>";
        echo"wiek: <input class='miejsce' name=\"wiek\" type=\"integer\" required>";
        echo"<input class='przycisk' type=\"submit\" value=\"Uaktualnij\">";
        echo "</form><br>";
        echo "</div>";
    }
?>