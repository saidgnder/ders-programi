<html>
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head> 
<body>  <hr>
  
    <div class="container">
    <div class="row">
      <h1>9-A</h1>
    @foreach ($dokuzATotal as $key => $item ) <hr> 
    {{$gunler[$key]}}                         <br>
    {{ $key+1 . " - " . $item[$key]}}         <br>
    @endforeach
      </div>
    </div> <hr>
    
    <div class="container">
      <div class="row">
        <h1>9-B</h1>
      @foreach ($dokuzBTotal as $key => $item ) <hr> 
      {{$gunler[$key]}}                         <br>
      {{ $key+1 . " - " . $item[$key]}}         <br>
      @endforeach
      </div>
    </div>