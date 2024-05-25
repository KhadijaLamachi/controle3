<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link rel="stylesheet" href="../bootstrap.min.css"/>
</head>
<body class="container">
  

  <div class="row">
   <div class="col-sm-4 mb-3 mb-sm-0">
     <div class="card">
       <div class="card-body">
         <h5 class="card-title">{{$owner->id}}</h5>
         <h2 class="card-text">{{$owner->nom}}</h2>
         <p class="card-text">{{$owner->date_naissance}}</p>
         <a href="{{route('cars.index')}}" class="btn btn-primary">retour</a>
       </div>
     </div>
   </div>
  </div>

</body>
</html>