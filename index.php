<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        td,
        th {
            border: 1px solid #000;
            min-width: 100px;
            padding: 2px 10px;
            text-align: left;
        }

        table {
            border-collapse: collapse;
        }

        * {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>

<body>

    <?php

    // $conn = new mysqli("localhost", "root", "", "cwiczeniak2");
    
    // if (!$conn) {
    //     die($conn->connect_errno);
    // }
    
    // echo "Wszystko:";
    // echo "<br>";
    
    // $result = $conn->query("SELECT * FROM osoba");
    

    // echo "<table><tr>";
    // echo "<th>ID</th>";
    // echo "<th>Imie</th>";
    // echo "<th>Nazwisko</th>";
    // echo "<th>Data urodzenia</th>";
    // echo "<th>Cena</th>";
    // echo "<th>Płeć</th>";
    // echo "<th>Najlepsza koleżanka</th><tr>";
    // while ($row = $result->fetch_assoc()) {
    //     if($row['plec'] == "K"){
    //         $plec = "Kobieta";
    //     } else{
    //         $plec = "Mężczyzna";
    //     }
    //     echo "<tr>";
    //     echo "<td>" . $row['id'] . "</td>";
    //     echo "<td>" . $row['imie'] . "</td>";
    //     echo "<td>" . $row['nazwisko'] . "</td>";
    //     echo "<td>" . $row['data_urodzenia'] . "</td>";
    //     echo "<td>" . $row['cena'] . "</td>";
    //     echo "<td>" . $plec . "</td>";
    //     echo "<td>" . $row['best_kol'] . "</td>";
    //     echo "</tr>";
    // }
    // echo "</table>";
    
    // // IMIONA NA J
    // echo "<br>";
    // echo "<br>";
    // echo "Imiona na J:";
    // echo "<br>";
    
    // $result2 = $conn->query("SELECT * FROM osoba WHERE imie LIKE 'Ma%'");
    
    // echo "<table><tr>";
    // if ($result2->num_rows > 0) {
    //     echo "<th>ID</th>";
    //     echo "<th>Imie</th>";
    //     echo "<th>Nazwisko</th>";
    //     echo "<th>Data urodzenia</th>";
    //     echo "<th>Cena</th>";
    //     echo "<th>Płeć</th><tr>";
    //     while ($row = $result2->fetch_assoc()) {
    
    //         echo "<tr>";
    //         echo "<td>" . $row['id'] . "</td>";
    //         echo "<td>" . $row['imie'] . "</td>";
    //         echo "<td>" . $row['nazwisko'] . "</td>";
    //         echo "<td>" . $row['data_urodzenia'] . "</td>";
    //         echo "<td>" . $row['cena'] . "</td>";
    //         echo "<td>" . $row['plec'] . "</td>";
    //         echo "</tr>";
    //     }
    //     echo "</table>";
    // } else {
    //     echo "<span style='color: red;'>Brak danych</span>";
    // }
    
    // // Według ceny rosnąco
    // echo "<br>";
    // echo "<br>";
    // echo "Sortowanie według ceny rosnąco:";
    // echo "<br>";
    
    // $result3 = $conn->query("SELECT * FROM osoba ORDER BY cena ASC");
    
    // if ($result3->num_rows > 0) {
    //     echo "<table><tr>";
    //     echo "<th>ID</th>";
    //     echo "<th>Imie</th>";
    //     echo "<th>Nazwisko</th>";
    //     echo "<th>Data urodzenia</th>";
    //     echo "<th>Cena</th>";
    //     echo "<th>Płeć</th><tr>";
    //     while ($row = $result3->fetch_assoc()) {
    
    //         echo "<tr>";
    //         echo "<td>" . $row['id'] . "</td>";
    //         echo "<td>" . $row['imie'] . "</td>";
    //         echo "<td>" . $row['nazwisko'] . "</td>";
    //         echo "<td>" . $row['data_urodzenia'] . "</td>";
    //         echo "<td>" . $row['cena'] . "</td>";
    //         echo "<td>" . $row['plec'] . "</td>";
    //         echo "</tr>";
    //     }
    //     echo "</table>";
    // } else {
    //     echo "<span style='color: red;'>Brak danych</span>";
    // }
    
    // // Według ceny rosnąco
    // echo "<br>";
    // echo "<br>";
    // echo "Sortowanie według ceny malejąco:";
    // echo "<br>";
    
    // $result4 = $conn->query("SELECT * FROM osoba ORDER BY cena DESC");
    
    // if ($result4->num_rows > 0) {
    //     echo "<table><tr>";
    //     echo "<th>ID</th>";
    //     echo "<th>Imie</th>";
    //     echo "<th>Nazwisko</th>";
    //     echo "<th>Data urodzenia</th>";
    //     echo "<th>Cena</th>";
    //     echo "<th>Płeć</th><tr>";
    //     while ($row = $result4->fetch_assoc()) {
    
    //         echo "<tr>";
    //         echo "<td>" . $row['id'] . "</td>";
    //         echo "<td>" . $row['imie'] . "</td>";
    //         echo "<td>" . $row['nazwisko'] . "</td>";
    //         echo "<td>" . $row['data_urodzenia'] . "</td>";
    //         echo "<td>" . $row['cena'] . "</td>";
    //         echo "<td>" . $row['plec'] . "</td>";
    //         echo "</tr>";
    //     }
    //     echo "</table>";
    // } else {
    //     echo "<span style='color: red;'>Brak danych</span>";
    // }
    
    // // Najstarsza osoba
    // echo "<br>";
    // echo "<br>";
    // echo "Najstarsza osoba:";
    // echo "<br>";
    
    // $result5 = $conn->query("SELECT id, imie, nazwisko, data_urodzenia FROM osoba ORDER BY data_urodzenia ASC LIMIT 1");
    
    // if ($result5->num_rows > 0) {
    //     echo "<table><tr>";
    //     echo "<th>ID</th>";
    //     echo "<th>Imie</th>";
    //     echo "<th>Nazwisko</th>";
    //     echo "<th>Data urodzenia</th>";
    //     while ($row = $result5->fetch_assoc()) {
    
    //         echo "<tr>";
    //         echo "<td>" . $row['id'] . "</td>";
    //         echo "<td>" . $row['imie'] . "</td>";
    //         echo "<td>" . $row['nazwisko'] . "</td>";
    //         echo "<td>" . $row['data_urodzenia'] . "</td>";
    //         echo "</tr>";
    //     }
    //     echo "</table>";
    // } else {
    //     echo "<span style='color: red;'>Brak danych</span>";
    // }
    
    // // Najmłodsza osoba
    // echo "<br>";
    // echo "<br>";
    // echo "Najmłodsza osoba:";
    // echo "<br>";
    
    // $result9 = $conn->query("SELECT id, imie, nazwisko, data_urodzenia FROM osoba ORDER BY data_urodzenia DESC LIMIT 1");
    
    // if ($result9->num_rows > 0) {
    //     echo "<table><tr>";
    //     echo "<th>ID</th>";
    //     echo "<th>Imie</th>";
    //     echo "<th>Nazwisko</th>";
    //     echo "<th>Data urodzenia</th>";
    //     while ($row = $result9->fetch_assoc()) {
    
    //         echo "<tr>";
    //         echo "<td>" . $row['id'] . "</td>";
    //         echo "<td>" . $row['imie'] . "</td>";
    //         echo "<td>" . $row['nazwisko'] . "</td>";
    //         echo "<td>" . $row['data_urodzenia'] . "</td>";
    //         echo "</tr>";
    //     }
    //     echo "</table>";
    // } else {
    //     echo "<span style='color: red;'>Brak danych</span>";
    // }
    
    // // Średnia płaca
    // echo "<br>";
    // echo "<br>";
    // echo "Średnia płaca:";
    // echo "<br>";
    
    // $result4 = $conn->query("SELECT COUNT(id) AS ilosc_osob, AVG(cena) AS placa_srednia FROM osoba");
    
    // if ($result4->num_rows > 0) {
    //     echo "<table><tr>";
    //     echo "<th>Ilość osób</th>";
    //     echo "<th>Średnia cena</th><tr>";
    //     while ($row = $result4->fetch_assoc()) {
    //         echo "<tr>";
    //         echo "<td>" . $row['ilosc_osob'] . "</td>";
    //         echo "<td>" . round($row['placa_srednia'], 2) . "</td>";
    //         echo "</tr>";
    //     }
    //     echo "</table>";
    // } else {
    //     echo "<span style='color: red;'>Brak danych</span>";
    // }
    
    // // Men
    // echo "<br>";
    // echo "<br>";
    // echo "Mężczyźni:";
    // echo "<br>";
    
    // $result10 = $conn->query("SELECT * FROM osoba WHERE plec = 'M'");
    
    // if ($result10->num_rows > 0) {
    //     echo "<table><tr>";
    //     echo "<th>ID</th>";
    //     echo "<th>Imie</th>";
    //     echo "<th>Nazwisko</th>";
    //     echo "<th>Data urodzenia</th>";
    //     echo "<th>Cena</th>";
    //     while ($row = $result10->fetch_assoc()) {
    
    //         echo "<tr>";
    //         echo "<td>" . $row['id'] . "</td>";
    //         echo "<td>" . $row['imie'] . "</td>";
    //         echo "<td>" . $row['nazwisko'] . "</td>";
    //         echo "<td>" . $row['data_urodzenia'] . "</td>";
    //         echo "<td>" . $row['cena'] . "</td>";
    //         echo "</tr>";
    //     }
    //     echo "</table>";
    // } else {
    //     echo "<span style='color: red;'>Brak danych</span>";
    // }
    
    // // Łymyn
    // echo "<br>";
    // echo "<br>";
    // echo "Kobiety:";
    // echo "<br>";
    
    // $result11 = $conn->query("SELECT * FROM osoba WHERE plec = 'K'");
    
    // if ($result11->num_rows > 0) {
    //     echo "<table><tr>";
    //     echo "<th>ID</th>";
    //     echo "<th>Imie</th>";
    //     echo "<th>Nazwisko</th>";
    //     echo "<th>Data urodzenia</th>";
    //     echo "<th>Cena</th>";
    //     while ($row = $result11->fetch_assoc()) {
    
    //         echo "<tr>";
    //         echo "<td>" . $row['id'] . "</td>";
    //         echo "<td>" . $row['imie'] . "</td>";
    //         echo "<td>" . $row['nazwisko'] . "</td>";
    //         echo "<td>" . $row['data_urodzenia'] . "</td>";
    //         echo "<td>" . $row['cena'] . "</td>";
    //         echo "</tr>";
    //     }
    //     echo "</table>";
    // } else {
    //     echo "<span style='color: red;'>Brak danych</span>";
    // }
    
    // $x = 18;
    // $tekst = "Anna Kowalska";
    // $y = $x-5;
    // echo "Witamy na stronie użytkownika: <b> $tekst</b>!";
    // echo "<br>Wykonajmy dodawanie liczb x oraz y: <br>";
    // echo "x = $x y = $y";
    // echo "$x+$y=";
    // echo $x+$y;
    // echo "<br>Za pomocą jednej instrukcji echo możemy otrzymać to samo: <br>";
    // echo "$x+$y=" . ($x + $y);
    
    // $number = "28";
    // if(is_int($number)){
    //     echo "Liczba $number jest typu integer.";
    // } else{
    //     echo "Liczba $number nie jest typu integer.";
    // }
    
    // if(is_float($number)){
    //     echo "Liczba $number jest typu float.";
    // } else{
    //     echo "Liczba $number nie jest typu float.";
    // }
    
    // if(is_string($number)){
    //     echo "Liczba $number jest typu string.";
    // } else{
    //     echo "Liczba $number nie jest typu string.";
    // }
    
    // if(is_string($number)){
    //     echo "Liczba $number jest typu string.";
    // } else{
    //     echo "Liczba $number nie jest typu string.";
    // }
    
    // if(gettype($number) == "string"){
    //     echo "Liczba $number jest typu string.";
    // } else{
    //     echo "Liczba $number nie jest typu string.";
    // }
    // echo "Pierwsze:<br>";

    // $conn = new mysqli(("localhost"), "root", "", "c_pracownicy");
    // if ($conn->connect_error) {
    //     die("Błąd " . $conn->connect_error);
    // }
    // $stanowisko = "asystent";
    // $stmt = $conn->prepare("SELECT * FROM pracownicy WHERE nazwisko='Kowalski'");
    // $stmt->execute();
    // $stmt->bind_result($id, $imie, $nazwisko, $placa, $stanowisko, $pesel);
    // $stmt->store_result();

    // if ($stmt->num_rows > 0) {
    //     while ($stmt->fetch()) {
    //         echo "ID: $id, imie: $imie, nazwisko: $nazwisko, płaca: $placa, stanowisko: $stanowisko, pesel: $pesel<br>";
    //     }
    // }
    // $stmt->close();

    // echo "<br><br>";
    // echo "Drugie:<br>";

    // $stmt1 = $conn->prepare("SELECT * FROM pracownicy WHERE placa <1600");
    // $stmt1->execute();
    // $stmt1->bind_result($id, $imie, $nazwisko, $placa, $stanowisko, $pesel);
    // $stmt1->store_result();

    // if ($stmt1->num_rows > 0) {
    //     while ($stmt1->fetch()) {
    //         echo "ID: $id, imie: $imie, nazwisko: $nazwisko, płaca: $placa, stanowisko: $stanowisko, pesel: $pesel<br>";
    //     }
    // }
    // $stmt1->close();

    // echo "<br><br>";
    // echo "Drugie:<br>";

    // $stmt2 = $conn->prepare("SELECT * FROM pracownicy WHERE id>=3 AND id<=6");
    // $stmt2->execute();
    // $stmt2->bind_result($id, $imie, $nazwisko, $placa, $stanowisko, $pesel);
    // $stmt2->store_result();

    // if ($stmt2->num_rows > 0) {
    //     while ($stmt2->fetch()) {
    //         echo "ID: $id, imie: $imie, nazwisko: $nazwisko, płaca: $placa, stanowisko: $stanowisko, pesel: $pesel<br>";
    //     }
    // }
    // $stmt2->close();

    // echo "<br><br>";

    // echo "Trzecie:<br>";
    // $stmt3 = $conn->prepare("SELECT * FROM pracownicy WHERE id BETWEEN 3 AND 6");
    // $stmt3->execute();
    // $stmt3->bind_result($id, $imie, $nazwisko, $placa, $stanowisko, $pesel);
    // $stmt3->store_result();

    // if ($stmt3->num_rows > 0) {
    //     while ($stmt3->fetch()) {
    //         echo "ID: $id, imie: $imie, nazwisko: $nazwisko, płaca: $placa, stanowisko: $stanowisko, pesel: $pesel<br>";
    //     }
    // }
    // $stmt3->close();
    // echo "<br><br>";
    // echo "Czwarte:<br>";

    // $stmt4 = $conn->prepare("SELECT * FROM pracownicy WHERE placa BETWEEN 1400 AND 1600 ORDER BY placa");
    // $stmt4->execute();
    // $stmt4->bind_result($id, $imie, $nazwisko, $placa, $stanowisko, $pesel);
    // $stmt4->store_result();

    // if ($stmt4->num_rows > 0) {
    //     while ($stmt4->fetch()) {
    //         echo "ID: $id, imie: $imie, nazwisko: $nazwisko, płaca: $placa, stanowisko: $stanowisko, pesel: $pesel<br>";
    //     }
    // }
    // $stmt4->close();
    // echo "<br><br>";
    // echo "Piąte:<br>";

    // $stmt5 = $conn->prepare("SELECT * FROM pracownicy WHERE placa BETWEEN 1400 AND 1600 ORDER BY placa");
    // $stmt5->execute();
    // $stmt5->bind_result($id, $imie, $nazwisko, $placa, $stanowisko, $pesel);
    // $stmt5->store_result();

    // if ($stmt5->num_rows > 0) {
    //     while ($stmt5->fetch()) {
    //         echo "ID: $id, imie: $imie, nazwisko: $nazwisko, płaca: $placa, stanowisko: $stanowisko, pesel: $pesel<br>";
    //     }
    // }
    // $stmt5->close();

    // echo "<br><br>";
    // echo "Szóste:<br>";
    // $stmt6 = $conn->prepare("SELECT * FROM pracownicy WHERE id IN(3,5,7)");
    // $stmt6->execute();
    // $stmt6->bind_result($id, $imie, $nazwisko, $placa, $stanowisko, $pesel);
    // $stmt6->store_result();

    // if ($stmt6->num_rows > 0) {
    //     while ($stmt6->fetch()) {
    //         echo "ID: $id, imie: $imie, nazwisko: $nazwisko, płaca: $placa, stanowisko: $stanowisko, pesel: $pesel<br>";
    //     }
    // }
    // $stmt6->close();
    // echo "<br><br>";
    // echo "Siódme:<br>";

    // $stmt7 = $conn->prepare("SELECT * FROM pracownicy WHERE imie LIKE 'Ka%'");
    // $stmt7->execute();
    // $stmt7->bind_result($id, $imie, $nazwisko, $placa, $stanowisko, $pesel);
    // $stmt7->store_result();

    // if ($stmt7->num_rows > 0) {
    //     while ($stmt7->fetch()) {
    //         echo "ID: $id, imie: $imie, nazwisko: $nazwisko, płaca: $placa, stanowisko: $stanowisko, pesel: $pesel<br>";
    //     }
    // }
    // $stmt7->close();
    // echo "<br><br>";
    // echo "Ósme:<br>";

    // $stmt8 = $conn->prepare("SELECT * FROM pracownicy WHERE imie LIKE 'Ka%'");
    // $stmt8->execute();
    // $stmt8->bind_result($id, $imie, $nazwisko, $placa, $stanowisko, $pesel);
    // $stmt8->store_result();

    // if ($stmt8->num_rows > 0) {
    //     while ($stmt8->fetch()) {
    //         echo "ID: $id, imie: $imie, nazwisko: $nazwisko, płaca: $placa, stanowisko: $stanowisko, pesel: $pesel<br>";
    //     }
    // }
    // $stmt8->close();
    // echo "<br><br>";
    // echo "Dziewiąte:<br>";

    // $stmt9 = $conn->prepare("SELECT * FROM pracownicy WHERE placa>1400 AND stanowisko <>'kierownik' AND pesel IS NOT NULL");
    // $stmt9->execute();
    // $stmt9->bind_result($id, $imie, $nazwisko, $placa, $stanowisko, $pesel);
    // $stmt9->store_result();

    // if ($stmt9->num_rows > 0) {
    //     while ($stmt9->fetch()) {
    //         echo "ID: $id, imie: $imie, nazwisko: $nazwisko, płaca: $placa, stanowisko: $stanowisko, pesel: $pesel<br>";
    //     }
    // }
    // $stmt9->close();


    // echo "<br><br>";
    // echo "Dziesiąte: <br>";

    // $stmt10 = $conn->prepare("SELECT nazwisko FROM pracownicy ORDER BY nazwisko");
    // $stmt10->execute();
    // $stmt10->bind_result($nazwisko);
    // $stmt10->store_result();

    // if ($stmt10->num_rows > 0) {
    //     while ($stmt10->fetch()) {
    //         echo "Nazwisko: $nazwisko<br>";
    //     }
    // }
    // $stmt10->close();

    // echo "<br><br>";
    // echo "Jedenaste: <br>";

    // $stmt11 = $conn->prepare("SELECT DISTINCT nazwisko FROM pracownicy ORDER BY nazwisko");
    // $stmt11->execute();
    // $stmt11->bind_result($nazwisko);
    // $stmt11->store_result();

    // if ($stmt11->num_rows > 0) {
    //     while ($stmt11->fetch()) {
    //         echo "Nazwisko: $nazwisko<br>";
    //     }
    // }
    // $stmt11->close();
    // echo "<br><br>";
    // echo "Dwunaste: <br>";

    // $stmt12 = $conn->prepare("SELECT * FROM pracownicy ORDER BY nazwisko LIMIT 5");
    // $stmt12->execute();
    // $stmt12->bind_result($id, $imie, $nazwisko, $placa, $stanowisko, $pesel);
    // $stmt12->store_result();

    // if ($stmt12->num_rows > 0) {
    //     while ($stmt12->fetch()) {
    //         echo "ID: $id, imie: $imie, nazwisko: $nazwisko, płaca: $placa, stanowisko: $stanowisko, pesel: $pesel<br>";
    //     }
    // }
    // $stmt12->close();

    // echo "<br><br>";
    // echo "Trzynaste: <br>";

    // $stmt13 = $conn->prepare("SELECT * FROM pracownicy ORDER BY nazwisko  limit 3 offset 4");
    // $stmt13->execute();
    // $stmt13->bind_result($id, $imie, $nazwisko, $placa, $stanowisko, $pesel);
    // $stmt13->store_result();

    // if ($stmt13->num_rows > 0) {
    //     while ($stmt13->fetch()) {
    //         echo "ID: $id, imie: $imie, nazwisko: $nazwisko, płaca: $placa, stanowisko: $stanowisko, pesel: $pesel<br>";
    //     }
    // }
    // $stmt13->close();
    // echo "<br><br>";

    // echo "Czternaste: <br>";
    // $stmt14 = $conn->prepare("SELECT DISTINCT stanowisko FROM pracownicy WHERE stanowisko LIKE '%k%'");
    // $stmt14->execute();
    // $stmt14->bind_result($stanowisko);
    // $stmt14->store_result();

    // if ($stmt14->num_rows > 0) {
    //     while ($stmt14->fetch()) {
    //         echo "Stanowisko: $stanowisko<br>";
    //     }
    // }
    // $stmt14->close();

    // echo "<br><br>";
    // echo "Piętnaste: <br>";
    // $stmt15 = $conn->prepare("SELECT * FROM pracownicy WHERE nazwisko LIKE '%ski' ORDER BY imie");
    // $stmt15->execute();
    // $stmt15->bind_result($id, $imie, $nazwisko, $placa, $stanowisko, $pesel);
    // $stmt15->store_result();

    // if ($stmt15->num_rows > 0) {
    //     while ($stmt15->fetch()) {
    //         echo "ID: $id, imie: $imie, nazwisko: $nazwisko, płaca: $placa, stanowisko: $stanowisko, pesel: $pesel<br>";
    //     }
    // }
    // $stmt15->close();

    // echo "<br><br>";
    // echo "Szesnaste: <br>";
    // $stmt16 = $conn->prepare("SELECT DISTINCT placa FROM pracownicy WHERE imie LIKE 'A%' OR imie LIKE 'K%'");
    // $stmt16->execute();
    // $stmt16->bind_result($placa);
    // $stmt16->store_result();

    // if ($stmt16->num_rows > 0) {
    //     while ($stmt16->fetch()) {
    //         echo "Płaca: $placa<br>";
    //     }
    // }
    // $stmt16->close();

    // echo "<br><br>";
    // echo "Siedemnaste: <br>";
    // $stmt17 = $conn->prepare("SELECT * FROM pracownicy WHERE stanowisko LIKE '%ca' AND placa > 1500");
    // $stmt17->execute();
    // $stmt17->bind_result($id, $imie, $nazwisko, $placa, $stanowisko, $pesel);
    // $stmt17->store_result();

    // if ($stmt17->num_rows > 0) {
    //     while ($stmt17->fetch()) {
    //         echo "ID: $id, imie: $imie, nazwisko: $nazwisko, płaca: $placa, stanowisko: $stanowisko, pesel: $pesel<br>";
    //     }
    // }
    // $stmt17->close();

    // echo "<br><br>";
    // echo "Osiemnaste: <br>";
    // $stmt18 = $conn->prepare("SELECT DISTINCT imie FROM pracownicy WHERE nazwisko LIKE '_o%' ORDER BY imie DESC");
    // $stmt18->execute();
    // $stmt18->bind_result($imie);
    // $stmt18->store_result();

    // if ($stmt18->num_rows > 0) {
    //     while ($stmt18->fetch()) {
    //         echo "Imię: $imie<br>";
    //     }
    // }
    // $stmt18->close();


    $conn = mysqli_connect("localhost","root","","uczelnie");
    if (mysqli_connect_errno()) {
        echo "Coś się nie udało: " . mysqli_connect_error();
        exit();
    }

    $stmt = $conn->prepare("SELECT imie, nazwisko, pesel FROM UczelniaA UNION SELECT imie, nazwisko, pesel FROM UczelniaB");
    $stmt->execute();
    $stmt->bind_result($imie, $nazwisko, $pesel);
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        while ($stmt->fetch()) {
            echo "Imię: $imie, Nazwisko: $nazwisko, Pesel: $pesel<br>";
        }
    } else {   
        echo "Brak danych";
    }

    $stmt->close();

    echo "<br><br>";

    $stmt2 = $conn->prepare("SELECT imie, nazwisko, pesel FROM UczelniaA UNION ALL SELECT imie, nazwisko, pesel FROM UczelniaB");
    $stmt2->execute();
    $stmt2->bind_result($imie, $nazwisko, $pesel);
    $stmt2->store_result();
    if ($stmt2->num_rows > 0) {
        while ($stmt2->fetch()) {
            echo "Imię: $imie, Nazwisko: $nazwisko, Pesel: $pesel<br>";
        }
    } else {   
        echo "Brak danych";
    }

    $stmt2->close();

    echo "<br> <br>";

    $stmt3 = $conn->prepare("SELECT imie, nazwisko, pesel FROM UczelniaA INTERSECT SELECT imie, nazwisko, pesel FROM UczelniaB");
    $stmt3->execute();
    $stmt3->bind_result($imie, $nazwisko, $pesel);
    $stmt3->store_result();
    if ($stmt3->num_rows > 0) {
        while ($stmt3->fetch()) {
            echo "Imię: $imie, Nazwisko: $nazwisko, Pesel: $pesel<br>";
        }
    } else {   
        echo "Brak danych";
    }

    $stmt3->close();
    ?>
</body>

</html>