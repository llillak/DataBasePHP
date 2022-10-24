<!DOCTYPE HTML>
<html>
<head>
<title>PDO</title>
</head>
<style>
.tabelka {
    border-collapse: collapse;
    margin: center;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
	color: #99CCCC;
}
.tabela {
    border-collapse: collapse;
    margin: center;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
	color: #9999CC;
}
 .kolumny{
	 background-color: #009879;
    color: #ffffff;
    text-align: left;
 }
 
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
  .klik{
	box-sizing: border-box;
	font-family: Raleway, sans-serif;
	background: #fff;
	font-size: 10px;
	border-radius: 26px;
	border: 1px solid #99CCCC;
	text-transform: uppercase;
	font-weight: 700;
	display: flex;
	align-items: center;
	width: 100%;
	color: #4C489D;
	box-shadow: 0px 2px 2px #99CCCC;
	width: 50px;
	height: 20px;
 }
 form{
	 color: #4C489D;
	 font-family: Raleway, sans-serif;
 }
</style>
<body>	
<?php
    try {
        $db = new PDO('sqlite:Maciejek.sqlite');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $result = $db->query("SELECT * FROM zawodnicy");
        
		echo '<h1 class="tabela">LISTA </h1>';
		
        echo '<table class="tabelka">';
        foreach($result as $r) {
            echo '<tr>';
                echo "<td>".$r[0]."</td>";
                echo "<td>".$r[1]."</td>";
                echo "<td>".$r[2]."</td>";
                echo "<td>
                    <button class='klik' onclick=\"window.location.href='index.php?delId=$r[0]'\">usun</button>
                    <button class='klik' onclick=\"window.location.href='index.php?editId=$r[0]'\">edytuj</button>
                </td>";
            echo '</tr>';
        }
        echo "</table><br>";
		
    }catch(PDOException $e) {
        echo "Błąd: ".$e->getMessage();
    }  
?>
    <div >
        <form method="post" action="userAdd.php" style>
            imie: <input name="imie" type="text" class="miejsce" required></br>
            wiek: <input name="wiek" type="integer" class="miejsce" required>
            <input type="submit" value="Dodaj" class="przycisk">
        </form><br>
    </div>
</body>
</html>