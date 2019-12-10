<?php
/**
 * Koder  : Mehmet ÖZDEMİR
 * Proje  : TcCifteVatandasDogrula
 * Tarih  : 10.12.2019
 * Saat   : 12:55
 */

function CifteVatandasDogrula($seriNo,$ad,$soyad,$babaAdi,$anneAdi,$dogumYil,$cinsiyet)
{
    $gonder = "SeriNo=$seriNo&Ad=$ad&Soyad=$soyad&BabaAdi=$babaAdi&AnneAdi=$anneAdi&DogumYil=$dogumYil&Cinsiyet=$cinsiyet";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://tckimlik.nvi.gov.tr/nufusaKayitYeriSeriNodanSorguModulTCKimlikNo/search" );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
    curl_setopt($ch, CURLOPT_POST, true );
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $gonder);

    $gelen = curl_exec($ch);
    curl_close($ch);
    $pa=json_decode($gelen);

    if ($pa->success ==1 or $pa->success==true)
    { $sonuc=true; } else { $sonuc=false; }
    return $sonuc;
}