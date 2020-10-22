<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">   
    <title>IPT Midterm Project | Accounts</title>

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
  <a class="active"href="<?= url('/accounts') ?>">Accounts</a>
  <a href="<?= url('/users') ?>">Users</a>
  <a href="<?= url('/') ?>">Home</a>
</div>


<div class="container">
        <table class="table table-striped table-hover table-inverse shadow" style="background-color:rgb(236, 232, 232); "><br>
            <h2 style="text-align:center;">Accounts </h2><br>
           
                <thead>
                    <tr>
                        
                        <th>Account ID</th>
                        <th>User Name</th>
                        <th>Initial Investment</th>
                        <th>Date Started</th>
        
                    </tr>
                </thead>
                <tbody> 
                    <?php foreach($accounts as $a): ?>
                        <tr>
                    
                            <td><?= $a->id ?></td>
                            <td> <?= $a->acct_name ?></td>
                            <td> <?= $a->init_invest ?></td>
                            <td> <?= $a->start_date ?></td>
                            <td>
                        </td>
                        </tr>
                        
                    <?php endforeach; ?>       
                </tbody>
                
            </table>
            
            </div>
</body>
</html>
        