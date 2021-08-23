<?php
/**
 * posts.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - functions.php içerisinde oluşturacağınız `getRandomPostCount` fonksiyonunuza min
 * ve max değerleri gönderip bu fonksiyondan rastgele bir tam sayı elde etmeniz
 * gerekiyor. (min ve max için istediğiniz değerleri seçebilirsiniz. Random bir
 * tam sayı elde etmek için `rand` (https://www.php.net/manual/en/function.rand.php)
 * fonksiyonunu kullanabilirsiniz.)
 *
 * - Elde ettiğiniz bu sayıyı da kullanarak `getLatestPosts` fonksiyonunu
 * çalıştırmalısınız. Bu fonksiyondan aldığınız diziyi kullanarak `post.php` betik
 * dosyasını döngü içinde dahil etmeli ve her yazı için detayları göstermelisiniz.
 */

// View değişkeni ile çağırılan fonksiyonlar.php dosyası kontrol edilir ve değişken var ise işlem devam eder.
$View = 1;
// Fonksiyonlar bu dosyaya aktarılır.
require_once ("./functions.php");
$Posts = getLatestPosts( // getLatestPosts: Girilen değer kadar rastgele içerik üretir ve dizi olarak dönüş yapar.
getRandomPostCount(11, 22) // getRandomPostCount: Min 11 Max 22 olacak şekilde sayı üretir.
);
$typeValues = array(
    'urgent',
    'warning',
    'normal'
);
foreach ($Posts as $id => $val)
{
    $type = $typeValues[getRandomPostCount(0, 2) ];
    // Üretilen içerikler foreach ile post.php dosyasındaki fonksiyon tanımı ile gösterilir.
    require ("./post.php");
}
// Random arkaplan ve renk kodlarıyla her sayfa yenileyişinde farklı görüntü ortaya çıkar.
$Style = array(
    array(
        "#b71c1c",
        "#fff"
    ) ,
    array(
        "#b71c1c",
        "#fff"
    ) ,
    array(
        "#880e4f",
        "#fff"
    ) ,
    array(
        "#4a148c",
        "#fff"
    ) ,
    array(
        "#bbdefb",
        "#000"
    ) ,
    array(
        "#80deea",
        "#000"
    ) ,
    array(
        "#ffab91",
        "#000"
    )
);
// Rastgele bir stil seçme
$selectStyle = $Style[getRandomPostCount(0, count($Style)) ];
echo '<style>body{background:' . $selectStyle[0] . ';color:' . $selectStyle[1] . ';}</style>';