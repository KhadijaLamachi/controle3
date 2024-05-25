<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link rel="stylesheet" href="../bootstrap.min.css"> 
</head>
<body class="container">
 <form class="form" method='post' action="{{route('cars.update',$car->id)}}">
  @csrf
  @method("patch")
  <label for="">id : </label>
  <input type="number" name="id" value="{{$car->id}}"><br>
 
  <label for="">marque : </label>
  <input type="text" name="marque" value="{{$car->marque}}"><br>
 
  <label for="">matricule : </label>
  <input type="text" name="matricule" value="{{$car->matricule}}"><br>
  
  


  <button type="submit" class="btn btn-primary">Envoyer</button>
 </form>
</body>
</html>