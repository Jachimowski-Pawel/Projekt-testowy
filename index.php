<html>
    <head> 
    </head>
        <body>
                <?php 
                echo("<h1>docker-działa</h2>");
                echo("<h2>docker-zmiana");
                require("connect.php");
                    $sql="SELECT*FROM pracownicy";
                    echo("<h2>Polecenie: Wszyscy pracownicy </h2>".$sql);
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id_pracownicy</th>");
                        echo("<th>imie</th>");
                        echo("<th>dzial</th>");
                        echo("<th>zarobki</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                   echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row['dzial']."</td><td>".$row["zarobki"]."</td>");
                                echo("</tr>");
                            };
                         echo("</table>");
                $d=strtotime("now");
                echo "<li>".date("Y-m-d h:i:sa", $d) . "<br>";                   
                ?>
        </body>
</html>