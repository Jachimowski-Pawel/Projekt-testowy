<?php
    echo("<h1>Imie i nazwisko Nr_.<h1>");
    $conn=new mysqli("localhost","pawel","z_pawel","pawel");
    $sql="SELECT*FROM pracownicy";
    echo("<li> Zad1".$sql);
    $result=$conn->query($sql);
    print_r($result);
        while($wiersz=$result->fetch_assoc()){
            echo("<li>".$wiersz['imie']);
        }
?>