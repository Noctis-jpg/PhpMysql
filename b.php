<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İstatistik</title>
</head>
<body>
    

<?php
$baglan = mysqli_connect("localhost", "root", "", "yeniveretabani");

if (!$baglan) {
    die("connection failed:" . mysqli_connect_error());
}

$isim = isset($_GET['isim']) ? mysqli_real_escape_string($baglan, $_GET['isim']) : '';

// $urlrequest = isset($_GET['urlrequest']) ? intval($_GET['urlrequest']) : 1;


// if ($urlrequest > 0) {

//     $urlrequest++;
// }

// $update_query = "UPDATE link_tablosu_yeni SET urlrequest = $urlrequest WHERE isim = '$isim'";

// if (!mysqli_query($baglan, $update_query)) {
//   echo "Sorgu hatası: " . mysqli_error($baglan);
//   $urlrequest++;
// } else {

// }


$sql = "SELECT * FROM link_tablosu_yeni WHERE isim = '$isim'";
$result = mysqli_query($baglan, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        echo "Firma İsmi: $isim:<br>";
        echo "Maps API: " . $row['mapsApi'] . "<br>";
        echo "DATE: " . $row['kayit_zamani'] . "<br>";
        echo "Ziyaret Sayısı:" . $row['urlrequest'] . "<br>";
    } else {
        echo "User not found in the database.";
    }
    mysqli_free_result($result);
} else {
    echo "Error: " . mysqli_error($baglan);
}



// Veritabanı bağlantısını kapat
mysqli_close($baglan);
?>


</body>
</html>