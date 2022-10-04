<?php

namespace App\Http\Controllers;


class DersController extends Controller
{
    public function program()
    {

        $gunler = ['Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma'];
        $ders = array('0' => 'Matematik', 'Türkçe', 'Coğrafya', 'İngilizce', 'Fen', 'Sosyal',  'Din',  'Felsefe');
        $derslerin_sayisi = [4, 5, 2, 3, 4, 3, 2, 2];
        $gunde_kac_ders = 5;
        $uc_ders_mi = false;
        $slice = 0;
        $siniflar = [
            '0' =>  $dokuzA = array(),
            '1' => $dokuzB = array(),
        ];

       //do {        
            foreach ($siniflar as $siniflarkey => $siniflarvalue) {
                $slice = 0;
                $count=0;
                $dersler = array();
                //dersler dizisine ekliyorum o hafta hangi dersten kaç tane varsa 
                foreach ($ders as $derskey => $dersvalue) {
                    for ($ekle = 0; $ekle < $derslerin_sayisi[$derskey]; $ekle++) {
                        array_push($dersler, $ders[$derskey]);
                    }
                }
                // her gün için 5 ders ekliyorum
                foreach ($gunler as $gunlerkey => $gunlervalue) {
                    foreach ($gun = array_rand($dersler, $gunde_kac_ders) as $gunkey => $gunvalue) {
                        array_push($siniflar[$siniflarkey], $dersler[$gun[$gunkey]]);
                        unset($dersler[$gun[$gunkey]]);                       
                    }
                //bir gün içinde 2den fazla tekrarlayan dersleri yakalıyorum    
                $uc_tekrar_kontrol = array_count_values(array_slice($siniflar[$siniflarkey], $slice, $slice + 5));
                foreach ($uc_tekrar_kontrol as $uckey => $ucvalue) {

                    if ($ucvalue > 2) {
                        $uc_ders_mi = true;
                        echo "<br>".$uckey . " 3 defa tekrar ediyor. <br>";
                    }
                }
                $slice = $slice + 5;
                }

            }
            // bir ders aynı saatte diğer sınıfta da var mı kontrol ediliyor
            $count = count(array_intersect_assoc($siniflar[0], $siniflar[1]));
            if ($count > 0) {echo "<br>".$count . " eşleşen var. <br>";} else {echo $count . "eşit";}
       // } while ( $uc_ders_mi==true);

        $dokuzATotal = array_chunk($siniflar[0],  $gunde_kac_ders);
        $dokuzBTotal = array_chunk($siniflar[1],  $gunde_kac_ders);

        return view('program', compact('dokuzATotal', 'dokuzBTotal', 'gunler'));
    }
}
