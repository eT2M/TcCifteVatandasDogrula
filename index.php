<?php
/**
 * Koder  : Mehmet ÖZDEMİR
 * Proje  : TcCifteVatandasDogrula
 * Tarih  : 10.12.2019
 * Saat   : 12:56
 */

include "cifteVatandasDogrula.php";


$seriNo=""; $ad=""; $soyad=""; $babaAdi=""; $anneAdi=""; $dogumYil=""; $cinsiyet="1";  /// 1--> Erkek. 2-->Kadın. 0-->Bilinmiyor
print_r(CifteVatandasDogrula($seriNo,$ad,$soyad,$babaAdi,$anneAdi,$dogumYil,$cinsiyet));