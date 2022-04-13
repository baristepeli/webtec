 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ders4</title>
</head>

<body>
    <h3>Php'de Diziler</h3>
    <ol>
        <li>Dİzi oluşturmak için <strong>array( )</strong> fonksiyonu veya <strong>[ ]</strong> kullanılabilir. </li>
        <li>Dİzi içerisinde farklı türden bir çok değer bulunabilir. (int, string double, obje)(1,2,3, "Ali","Ahmet","125,20")</li>
        <li>"echo $diziadi" ile dizi içeriği ekrana yazdırılamaz. Array to String Conversiyon hatası verir. Fakat dizinin örneğin 3 indisine sahip elemanı "echo $diziadi[3]" şeklinde yazdırılabilir. </li>
        <li>Dizinin içerisindeki string ifadeler çift tırnak ("") içerisine yazılır.</li>
        <li>Dizinin içerisindeki int ifadeler direkt yazılabilir.</li>
        <li>Dizi elemanları birbirinden virgül (,) ile ayrılır.</li>
        <li>Dizi içerisinde indisler varsayılan olarak 0'dan başlar.</li>
        <li>Diziler içerisinde diziler tanımlanabilir.</li>
    </ol>

    <?php
    $telno = array(
        "gsm" => "5342026807",

    );

    $gsm1 = str_split($telno["gsm"], 3);

    foreach ($gsm1 as $value) {
        echo $value . " ";
    }

    $dizi1 = array(1, 2, 3, 4, "kemal", "arıca", "130.5");
    $dizi2 = [1, 2, 3, 4, "kemal", "arıca", "130.5"];
    echo "<pre>";
    print_r($dizi1);
    echo "<pre>";
    echo "<pre>";
    print_r($dizi2);
    echo "<pre>";

    echo "Dizinin beşinci  elemanı: " . $dizi1[5] . "<br>";
    echo "Dizinin birinci  elemanı: " . gettype($dizi1[1])  . "<br>";

    echo "Dizinin 0. elemanı: " . $dizi1[0] . "<br>";
    echo "Dizinin 1. elemanı: " . $dizi1[1] . "<br>";
    echo "Dizinin 2. elemanı: " . $dizi1[2] . "<br>";
    echo "Dizinin 3. elemanı: " . $dizi1[3] . "<br>";
    echo "Dizinin 4. elemanı: " . $dizi1[4] . "<br>";
    echo "Dizinin 5. elemanı: " . $dizi1[5] . "<br>";

    echo "<h3> Dizinin İçeriğinin Foreach Döngüsü ile Yazdırılması-1</h3>";
    foreach ($dizi1 as $item) {
        echo "$item <br>";
    }
    echo "<h3> Dizinin İçeriğinin Foreach Döngüsü ile Yazdırılması-2</h3>";
    foreach ($dizi1 as $key => $value) {
        echo "$key - $value  <br>";
    }
    echo "<h3> Dizinin İçeriğinin For Döngüsü ile Yazdırılması</h3>";
    for ($i = 0; $i < count($dizi1); $i++) {
        echo "$i: $dizi1[$i] <br>";
    }
    $sayilar =  array(1, 2, 3, 4, 56,);
    $sayilar =  array(
        array(1, 2, 3, 4, 5),
        array(6,7, 8, 9, 10)
    );
    echo "<pre>";
    print_r($sayilar);
    echo "<pre>";
    echo "Sayılar dizisinin  İçerisindeki İkinci dizinin Üçüncü  elemanı: " . $sayilar[1][2] . "<br>";
    echo "Sayılar dizisinin  İçerisindeki İkinci dizinin Dördüncü  elemanı: " . $sayilar[1][3] . "<br>";
    $sayilar =  array(
        "Integer" => array(1,2,3,4,5),
        "Double" => array(6,7,8,9,10)
        );

        echo "<pre>";
        print_r($sayilar);
        echo "<pre>";

        echo "Sayılar dizisinin  İçerisindeki birinci dizinin birinci  elemanı: " . $sayilar["Integer"][1] . "<br>";
        echo "Sayılar dizisinin  İçerisindeki ikinci dizinin dizinin ikinci elemanı: " . $sayilar["Double"][2] . "<br>";

        $bilgiler = array(
            "id" =>0,
            "adi"=>"Neslihan",
            "soyadi"=> "Gülmez",
            "gsm" => "555 666 55 44",
            "yas" => 32
        );

        echo "$bilgiler[adi] $bilgiler[soyadi] Hoşgeldiniz. <br> ";
        echo $bilgiler["adi"] . " " . $bilgiler["soyadi"] . "Hoşgeldiniz.";

        echo "<pre>";
        print_r($bilgiler);
        echo "<pre>";

        foreach ($bilgiler as $bilgi){
            echo $bilgi . " - ";
        }

        $gsmyeni1 =str_split($bilgiler["gsm"],3);
        
        foreach($gsmyeni1 as $value) {
            echo $value . " ";
        }
        

    ?>
</body>

</html>