<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sklep dla uczniow</title>
    <link rel="stylesheet" href="styl.css">
    
<?php
$haslo = "";
$conn = new mysqli("localhost", "root", $haslo, "sklep");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
$sql = "select * from towary";
$result = $conn->query($sql);
?>
    
</head>
<body>
    <div id="container">
        <div id="top">
            t
        </div>
        <div id="mid">
             <div id="left">
                    <h2>Taniej o 30%</h2><br>
                    <?php
                    while($row = $result -> fetch_assoc()){
                        echo 'a.'.$row["nazwa"]."<br>";
                    }

                    ?>
                </div>
             <div id="srodek">
                    <h2>Sprawdz cene</h2>
                    <input id="btn" type="button" value="przycisk">
                    <label for="cars">Choose a car:</label>
                    <select name="cars" id="cars">
                    <?php                    
                    while($row = $result -> fetch_assoc()){
                        echo "<option value=&#34;".$row["nazwa"].">".$row["nazwa"]."</option>";
                    }
                    ?>
                    </select>
             </div>
             <div id="right">
                    <h2>Kontakt</h2><br>
                    e-mail: <a href="bok@sklep.pl">bok@sklep.pl</a><br><br>
                    <div id="zdjecie"><img id="zdj" src="promocja.png"></div>

             </div>
        </div>
        <div id="bot">
            a
        </div>
        <?php                    
                    //while($row = $result -> fetch_assoc()){
                        //echo "<option value=".$row["nazwa"].">".$row["nazwa"]."</option>";
                    //}
                    ?>
    </div>
</body>
</html>