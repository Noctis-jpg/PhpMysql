<?php
$baglan = mysqli_connect("localhost", "root", "", "yeniveretabani");

if (!$baglan) {
    die("connection failed:" . mysqli_connect_error());
} else {

}
?>

<?php

$isim = isset($_GET['isim']) ? mysqli_real_escape_string($baglan, $_GET['isim']) : '';


$sql = "SELECT * FROM link_tablosu WHERE isim = '$isim'";
$result = mysqli_query($baglan, $sql);

if ($result) {

    $row = mysqli_fetch_assoc($result);


    if ($row) {
    
        echo " $isim:<br>";
        echo "Maps API: " . $row['mapsApi'] . "<br>";
        echo "DATE: " . $row['kayit_zamani'] . "<br>";


    } else {
        echo "User not found in the database.";
    }

    mysqli_free_result($result);
} else {
    echo "Error: " . mysqli_error($baglan);
}


mysqli_close($baglan);
?>

