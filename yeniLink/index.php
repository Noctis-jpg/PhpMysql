<?php
$baglan = mysqli_connect("localhost", "root", "", "yeniveretabani");

if (!$baglan) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Bağlantı başarılı";
}
?>

<form method="POST" action="">
    <input type="text" name="isim">
    <input type="text" name="mapsApi">

    <button type="submit" name="buton">Gönder</button>
</form>

<?php
if (isset($_POST["buton"])) {
    $isim = mysqli_real_escape_string($baglan, $_POST["isim"]);
    $mapsApi = mysqli_real_escape_string($baglan, $_POST["mapsApi"]);


    $currentHost = $_SERVER['HTTP_HOST'];
    $customUrl = 'http://' . $currentHost . '/yeniLink/a.php?isim=' . urlencode($isim);

    $sql = "INSERT INTO link_tablosu (isim, mapsApi, customUrl) VALUES ('$isim', '$mapsApi', '$customUrl')";

    if (mysqli_query($baglan, $sql)) {
        echo "Veri başarıyla eklendi";echo "<br>";
        echo $customUrl;

        exit();
    } else {
        echo "Veri eklenirken hata oluştu: " . mysqli_error($baglan);
    }
}
?>
