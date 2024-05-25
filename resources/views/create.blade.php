<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link rel="stylesheet" href="../bootstrap.min.css"> 
</head>
<body class="container">
 <form class="form" method='post' action="{{route('cars.store')}}">
  @csrf
  <label for="">id : </label>
  <input type="number" name="id"><br>
 
  <label for="">marque : </label>
  <input type="text" name="marque"><br>
 
  <label for="">matricule : </label>
  <input type="text" name="matricule"><br>
  
  


  <button type="submit" class="btn btn-primary">Envoyer</button>
 </form>
</body>
</html>