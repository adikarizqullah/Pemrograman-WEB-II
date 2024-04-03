<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PRAK105</title>
<style>
  table, th, td {
      border: 1px solid black;
    }
.container {
    display: flex;
    height: 30vh;
    width: 40vh;
}

table {
    width: 100%;
}

table th, table td {
    border: 1px solid black;
    padding: 8px;
    text-align: left;
}

th {
    
    background-color: red;
}

</style>
</head>
<body>
<div class="container">
    <div class="box">
        <table>
            <thead>
                <tr>
                    <th height="40px">Daftar Smartphone Samsung</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data = array(
                    "Data 1" => "Samsung Galaxy S22",
                    "Data 2" => "Samsung Galaxy S22+",
                    "Data 3" => "Samsung Galaxy A03",
                    "Data 4" => "Samsung Galaxy Xcover 5",
                );

                foreach ($data as $key) {
                    echo "<tr>";
                    echo "<td>$key</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>