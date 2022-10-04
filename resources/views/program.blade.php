<html>
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head> 
<body>
  <hr>

  
  <div class="container">
    <div class="row">
      <h1>9-A</h1>

@foreach ($dokuzATotal as $key => $item ) <hr> {{$gunler[$key]}} <br>

@foreach($item as $key => $value) {{ $key+1 . " - " . $value}}  <br> @endforeach

@endforeach
  </div>
</div>

<hr>

<div class="container">
  <div class="row">
    <h1>9-B</h1>

@foreach ($dokuzBTotal as $key => $item ) <hr>  {{$gunler[$key]}}  <br> 

@foreach($item as $key => $value) {{ $key+1 . " - " . $value}}  <br> @endforeach

@endforeach
</div>
</div>







<!-- 
Dersler:
1 | Matematik, 4
2 | Türkçe, 5
3 | Coğrafya, 2
4 | İngilizce, 3
5 | Fen, 4
6 | Sosyal, 3
7 | Din, 2
8 | Felsefe, 2

Sınıflar:
1 | 9-A
2 | 9-B

1. günlük 5 saati geçmemek kaydı ile haftanın 5 günü için otomatik ders programı oluşturulacak
2. bir ders aynı gün aynı saatte başka bir sınıfta olmayacak
3. bir ders aynı gün peş peşe 2 saatten fazla atanmayacak. ders saat sayısı 2 den fazla ise, başka güne atanacak
4. sınıf seçilecek, sonrasında aşağıdaki tabloya göre liste açılacak:

-----------------------------------------------------------------
  |	P.tesi 		| Salı 		| Çarşamba	| Perşembe 	| Cuma		|		
-----------------------------------------------------------------
1 |	Matematik	| Coğrafya	| Sosyal	| Felsefe 	| Türkçe	|
2 |	Matematik	| İngilizce	| Sosyal	| Matematik	| İngilizce	|
3 |	Türkçe		| İngilizce	| Din		| Matematik	| Fen		|
4 |	Türkçe		| Fen		| Din		| Türkçe	| Fen		|
5 |	Coğrafya	| Fen		| Felsefe	| Türkçe	| Sosyal	|
-----------------------------------------------------------------
-->

</body>
</html>
