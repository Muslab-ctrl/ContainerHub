<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <title>Tavola Pitagorica</title>
        <style>

            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }

            td, th {
                text-align: center;
                height: 20px;
                width: 20px;
            }

            th {
                background-color: #60a0b0;
            }

        </style>
    </head>
    <body>
        <h1>Tavola Pitagorica</h1>

        <table>

            <?php

            echo "<tr>";

            echo "<th>x</th>";


            for ($i = 0; $i <= 10; $i++) {
                echo "<th>$i</th>";
            }

            echo "</tr>";

            for ($j = 0; $j <= 10; $j++) {
                echo "<tr>";
                echo "<th>$j</th>";

                for ($i = 0; $i <= 10; $i++) {

                    echo "<td>";
                    echo $i*$j;
                    echo "</td>";

                }
            }
            ?>

        </table>
        <br>
        <a href="tabelline.php">Vai alle tabelline</a>
    </body>
</html>
