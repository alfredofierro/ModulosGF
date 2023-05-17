<html>

<head>
  <title>Busqueda por filtro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Menu</a></li>
        <li><a href="acerca.php">DMS</a></li>
        <li><a href="gasolinerasaliadas.html">Aliados</a></li>
        <li><a href="filtro.php">Filtro</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <h2>Busqueda por filtro</h2>
  <p>Inserte compañia, nombre, direccion o precio de la gasolinera</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Buscar">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Compañia</th>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Precio (87 Octanos en $ MXN)</th>
        <th>Ingresar</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <tr>
        <td>Arco</td>
        <td>Estacion El Naranjo <br>SA de CV</td>
        <td>México 1 Km 114, El Naranjo,<br>Ensenada, B.C.</td>
        <td>$21.49</td>
        <td><a href="arconaranjo.php">Ingresar</td>
      </tr>
      <tr>
        <td>Rudametkin</td>
        <td>Alejandro RUDAMETKIN Novikoff</td>
        <td>Calle Cortez No. 1339<br>Ensenada, B.C.</td>
        <td>$20.99</td>
        <td>Ingresar</td>
      </tr>
      <tr>
        <td>BP</td>
        <td>Administradora del colorado <br>S. de R.L. de C.V.</td>
        <td>Avenida Dr. Pedro Loyola No. 487<br>Ensenada, B.C.</td>
        <td>$21.19</td>
        <td>Ingresar</td>
      </tr>
      <tr>
        <td>Pemex</td>
        <td>Servicio Los Olivos <br>SA de CV</td>
        <td>Carretera Transpeninsular No. 101<br>22780 Ensenada, B.C.</td>
        <td>$21.49</td>
        <td>Ingresar</td>
      </tr>
    </tbody>
  </table>
  
  <p>Nota: Los precios pueden no estar actualizados o estar incorrectos.</p>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>