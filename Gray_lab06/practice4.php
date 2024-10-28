<html>
    <head>
        <title>Multiplication Table</title>
        <style>
            table {
                border-collapse: collapse;
                width: 50%;
            }
            th, td {
                border: 1px solid black;
                padding: 8px;
                text-align: center;
            }
            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>

    <body>
    <?php
    $tableSize = intval($_POST['number']);

    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th></th>"; 

    for ($column = 1; $column <= $tableSize; $column++) {
        echo "<th>$column</th>";
    }
    echo "</tr>";

    // Table body
    for ($row = 1; $row <= $tableSize; $row++) {
        echo "<tr>";
        echo "<th>$row</th>"; // Row headers on the left side
        for ($column = 1; $column <= $tableSize; $column++) {
            echo "<td>" . ($row * $column) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
    </body>
</html>