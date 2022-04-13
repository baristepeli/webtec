<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-2</title>
</head>

<body>

    <?php


    echo "<h4>Tırnak işaretleri arasındaki farklar</h4>";

    $uni = "Adnan Menderes Üniversitesi";
    echo "Değişken İçeriği: $uni";
    echo "<br>";
    /* Değişkenin ismini yazdırır. */
    echo "1-Kazandığınız Üniversite:" . '$uni';
    echo "<br>";
    /* Değişkenin içeriğini yazdırır. */
    echo "2-Kazandığınız Üniversite:" . "$uni";
    echo "<br>";
    /* Değişkenin içeriğini yazdırır. */
    echo "3-Kazandığınız Üniversite:" . $uni;
    echo "<br>";
    /* Değişkenin içeriğini yazdırır. */
    echo "4-Kazandığınız Üniversite: $uni";


    echo "<hr><h4>Temel Matematiksel İşlemler</h4>";
    echo "<h5>Toplama İşlemi</h5>";

    $sayi1 = 10;
    $sayi2 = 20;
    echo '$sayi1  +  $sayi2 = ' . $sayi1 + $sayi2;
    echo "<br>";
    echo "$sayi1 + $sayi2 = " . $sayi1 + $sayi2;
    echo "<br>";
    $sonuc = $sayi1 + $sayi2;
    echo "$sayi1 + $sayi2 = $sonuc";

    echo "<hr><h5> Çıkarma İşlemi</h5>";

    $sayi1 = 10;
    $sayi2 = 20;
    echo '$sayi1  -  $sayi2 = ' . $sayi1 - $sayi2;
    echo "<br>";
    echo "$sayi1 - $sayi2 = " . $sayi1 - $sayi2;
    echo "<br>";
    $sonuc = $sayi1 - $sayi2;
    echo "$sayi1 - $sayi2 = $sonuc";

    echo "<hr><h5>Çarpma İşlemi</h5>";

    $sayi1 = 10;
    $sayi2 = 20;
    echo '$sayi1  *  $sayi2 = ' . $sayi1 * $sayi2;
    echo "<br>";
    echo "$sayi1 * $sayi2 = " . $sayi1 * $sayi2;
    echo "<br>";
    $sonuc = $sayi1 * $sayi2;
    echo "$sayi1 * $sayi2 = $sonuc";

    echo "<hr><h5>Bölme İşlemi</h5>";

    $sayi1 = 10;
    $sayi2 = 20;
    echo '$sayi1  /  $sayi2 = ' . $sayi1 / $sayi2;
    echo "<br>";
    echo "$sayi1 / $sayi2 = " . $sayi1 / $sayi2;
    echo "<br>";
    $sonuc = $sayi1 / $sayi2;
    echo "$sayi1 / $sayi2 = $sonuc";

    echo "<hr><h5>Üst Alma İşlemi</h5>";

    $x=3;
    $y="2";
    echo"$x<sup>$y</sup>=" .  pow($x,$y);
    
    echo"<br> Değişken Tipi: $y >>>".  gettype($y) . "<br>";

    echo "<hr><h5>Karekök Alma İşlemi</h5>";
    $x=25;
    $karekök=sqrt($x);
    echo "$x'in karekökü: $karekök";

    echo "<hr><h5>Mutlak Değer İşlemi</h5>";

    $x=(-4);
    $mutlak= abs($x);
    echo "$x' in mutlak değeri: $mutlak";
    
    echo "<hr><h5>Taban Değişim  İşlemi(base_convert(x,taban1,taban2))</h5>";
    echo "27 sayısının 2'lik tabandaki karşılığı:" . base_convert(27,10,2);
    echo "<br>";
    $sayi=50;
    $taban= 10;
    $yenitaban = 2;

    
    echo "($sayi)<sub>$taban</sub>: ($sonuc)<sub>$yenitaban</sub>";


    echo "<hr><h5>Mod İşlemi</h5>";
    $x=20;
    $x=4;
    $mod=fmod(15,4);
    echo "$x mod $y= $mod";
    echo "<br> $x Sayısı: " . (fmod($x,2) ==0) ? "Çifttir." : "Tektir";

    echo "<hr><h5>Yuvarlama İşlemi(round(x,y))</h5>";
    $x=15.315;
    $y=15.385;
    echo "$x 1 Ondalık Basamak Yuvarlanması:" . round($x,1);
    echo "<br>$y 1 Ondalık Basamak Yuvarlanması:" . round($y,1);


    echo "<hr><h5>Yuvarlama İşlemi(floor(x,y))</h5>"; /* her zaman aşağı yuvarlar*/
    $x=15.315;
    echo "$x : " . floor($x);


    echo "<hr><h5>Yuvarlama İşlemi(ceil(x,y))</h5>"; /* her zaman yukarı yuvarlar*/
    $x=15.315;
    echo "$x : " . ceil($x);
    

    echo "<hr><h5>Rastgele Sayı Üretme(rand(x,y))</h5>"; /* her zaman aşağı yuvarlar*/
    echo rand(10,100);
    
    






    ?>
</body>

</html>