<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A</title>
</head>
<body>

<?php
$baglan = mysqli_connect("localhost", "root", "", "yeniveretabani");

if (!$baglan) {
    die("connection failed:" . mysqli_connect_error());
}




$isim = isset($_GET['isim']) ? mysqli_real_escape_string($baglan, $_GET['isim']) : '';

$sql = "UPDATE link_tablosu_yeni SET urlrequest = urlrequest + 1 WHERE isim = '$isim'";
mysqli_query($baglan, $sql);




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


$mapsApi = $row['mapsApi']; // 
header("Location: $mapsApi");

// Veritabanı bağlantısını kapat
mysqli_close($baglan);
?>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Sayfa yüklendiğinde veya yenilendiğinde bu işlevi çağır
    function fetchUrlRequest() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Sunucudan alınan veriyi işle
                    var urlrequest = parseInt(xhr.responseText);
                    // İşlenen değeri kullanarak istediğiniz işlemi yapabilirsiniz
                    console.log("urlrequest değeri: " + urlrequest);
                    // Örneğin, bu değeri bir HTML öğesine ekleyebilirsiniz
                    // document.getElementById("urlrequest-value").textContent = urlrequest;
                } else {
                    console.error('Sunucudan veri alınamadı.');
                }
            }
        };
        xhr.open("GET", "sunucu_scripti.php?urlrequest=true", true);
        xhr.send();
    }

    // Sayfa yüklendiğinde veya yenilendiğinde fetchUrlRequest fonksiyonunu çağır
    fetchUrlRequest();
});
</script>
</body>
</html>
