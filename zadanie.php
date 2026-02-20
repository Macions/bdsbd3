<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "zadaniesklepp");
    if (!$conn) {
        die("Error: " . mysqli_connect_error());
    }

    $sql = "SELECT nazwa AS produkt_nazwa FROM produkty";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>Nazwa produktu</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["produkt_nazwa"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $sql1 = "SELECT nazwa, cena, ilosc AS stan FROM produkty ORDER BY cena DESC LIMIT 5";
    $result1 = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($result1) > 0) {
        echo "<table><tr><th>Nazwa produktu</th><th>Cena</th><th>Stan</th></tr>";
        while ($row1 = mysqli_fetch_assoc($result1)) {
            echo "<tr><td>" . $row1["nazwa"] . "</td><td>" . $row1["cena"] . "</td><td>" . $row1["stan"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $sql2 = "SELECT imie, nazwisko FROM klienci WHERE id = 3";
    $result2 = mysqli_query($conn, $sql2);
    if (mysqli_num_rows($result2) > 0) {
        echo "<table><tr><th>Imię</th><th>Nazwisko</th></tr>";
        while ($row2 = mysqli_fetch_assoc($result2)) {
            echo "<tr><td>" . $row2["imie"] . "</td><td>" . $row2["nazwisko"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $sql3 = "SELECT imie, pesel FROM pracownicy WHERE nazwisko <> 'Kowalski'";
    $result3 = mysqli_query($conn, $sql3);

    echo "<h3>Zapytanie 4</h3>";
    if (mysqli_num_rows($result3) > 0) {
        echo "<table><tr><th>Imię</th><th>PESEL</th></tr>";
        while ($row = mysqli_fetch_assoc($result3)) {
            echo "<tr><td>{$row['imie']}</td><td>{$row['pesel']}</td></tr>";
        }
        echo "</table>";
    }

    ?>
</body>

</html>