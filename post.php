<?php
/**
 * post.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * > Dikkat: Bu dosya hem direk çalıştırılabilir hem de `posts.php` dosyasında
 * > 1+ kez içe aktarılmış olabilir.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - $id değişkeni yoksa "1" değeri ile tanımlanmalı, daha önceden bu değişken
 * tanımlanmışsa değeri değiştirilmemeli. (Kontrol etmek için `isset`
 * (https://www.php.net/manual/en/function.isset.php) kullanılabilir.)
 * - $id için yapılan işlemin aynısı $title ve $type için de yapılmalı. (İstediğiniz
 * değerleri verebilirsiniz)
 * - Bir sonraki adımda ilgili içerik gösterilmeden önce bir div oluşturulmalı ve
 * bu div $type değerine göre arkaplan rengi almalıdır. (urgent=kırmızı,
 * warning=sarı, normal=arkaplan yok)
 * - `getPostDetails` fonksiyonu tetiklenerek ilgili içeriğin çıktısı gösterilmeli.
 */

// View değişkeni ile çağırılan fonksiyonlar.php dosyası kontrol edilir ve değişken var ise işlem devam eder.
$View = 1;
// Fonksiyonlar bu dosyaya aktarılır.
require_once ("./functions.php");

// id degişkeni yok ise 1 tanımlanır.
if (!isset($id))
{
    $id = 1;
}
// type degişkeni yok ise normal tanımlanır.
if (!isset($type))
{
    $type = "normal";
}
// Başlık kontrol edilir ve değişkene aktarılır.
if(isset($val["title"])){ 
	// Başlık var ise değişkene aktarılır.
	$title = $val["title"];
}else{
	// Yok ise Başlık tanımı yapılır.
	$title = "Başlık";
}
// Div ile içerik görüntülenmeye arkaplan verilir.
echo '<div style="border-radius:12px;padding:5px;border:1px solid #ddd;margin:10px 0;' . 
((($type == "urgent") ? 'background:#b71c1c;color:#fff;' : // type degeri urgent ise arkaplan sarı görünür
(($type == "warning") ? 'background:#9e9d24;color:#fff;' : // type degeri warning ise arkaplan kırmızı görünür
(($type == "normal") ? '' : '' // type degeri normal ise arkaplan görünmez
)))) . '">';
// Içerik yazdırma fonksiyonu.
echo getPostDetails($id,$title);
echo '</div>';