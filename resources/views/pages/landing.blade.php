<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    
   <title>IPT Midterm Project</title>
</head>
<body style="background-color: rgb(247, 244, 240); font-family:Century Gothic;">
<style>

.topnav {
  overflow: hidden;
  background-color: rgb(77, 75, 74);
  
}

.topnav a {
  color: #f2f2f2;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  float: right;
}

.topnav a:hover {
  background-color:   rgb(138, 127, 114);
  color: black;
}

.topnav a.active {
  background-color: rgb(155, 143, 129);
  color: white;
}
</style>
<div class="topnav">
  <a href="<?= url('/accounts') ?>">Accounts</a>
  <a href="<?= url('/users') ?>">Users</a>
  <a class="active"href="#">Home</a>
</div>
<div class="container">

<div class="row">
<div class="col-md-4 offset-md-4 shadow" style="background-color:rgb(236, 232, 232); margin-top:30px;">
<div class="card" style="margin-top:30px; ">
<div class="card-header">
<h4 style="text-align:center;">Main Menu</h4></div>
</div>
<div class="card-body">
<a href="<?= url('/') ?>" class="btn btn-info btn-block">Home</a>
<a href="<?= url('/users') ?>" class="btn btn-info btn-block">Users</a>
<a href="<?= url('/accounts') ?>" class="btn btn-info btn-block">Accounts</a>
</div>
</div>
</div>
</div>
</body>
</html>