<!DOCTYPE html>
<html lang="en">
<head>
  <title>Arco - El Naranjo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./style3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    th, td {
  padding: 15px;
}
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
<!-- Barra superior -->
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
  <!-- Anuncios izquierda -->
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    <div class="well">
        <p><h4>¡El mejor pinchi puto pollo de la ciudad!</h4><img src ="https://i.pinimg.com/originals/2b/34/f4/2b34f4ca4f3d66d49a33314203e79371.jpg" width = "200" height = "200"></p>
      </div>
    </div>
    <div class="col-sm-8 text-left"> 
      <br>
      <p>
        <!-- Tabla -->
        <table align = "center">
          <tr> <td> <img src ="https://upload.wikimedia.org/wikipedia/commons/e/e1/ARCO_Logo.png" width = "250" height = "85"> </td> </tr>
        <table border = "0" align = "center">
            <th> Nombre Gasolinera </th>
            <th> Numero de estacion</th>
          </tr>
          <tr>
            <td> Estacion El Naranjo <br>SA de CV </td>
            <td align = "center"> 22648 </td>
          </tr>
        </table>
        <br>
        <table border = "0" align = "left">
          <tr>
            <th> Tipo de Combustible </th>
            <th align = "center"> Precio </th>
          </tr>
          <tr>
            <td> Regular </td>
            <td align = "center"> $21.49 </td>
          </tr>
          <tr>
            <td> Premium </td>
            <td align = "center"> $22.89 </td>
          </tr>
          <tr>
            <td> Diesel </td>
            <td align = "center"> $20.49 </td>
          </tr>
        </table>
        <table border = "0" align = "right">
          <tr>
            <th> Tipo de cambio Dolar </th>
          </tr>
          <tr>
            <td align = "center"> $17.00 </td>
          </tr>
        </table>
        <br><br><br><br><br><br><br><br><br><br>
      </p>
      <hr> <!-- Como llegar -->
      <h3>Como llegar / ubicacion</h3>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3390.5285759568883!2d-116.59924058484232!3d31.81059558127467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d88fb71528d951%3A0x493b79bcecfa45bf!2sARCO!5e0!3m2!1ses!2smx!4v1684072807276!5m2!1ses!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <br>
        <hr> <!-- Metodo de pago -->
        <h3>Metodo de pago</h3>
        <p>
          Efectivo <br>
          Tarjeta de credito / debito <br>
          Vales de despensa <br>
          Cheques
        </p>
        <hr> <!-- Promociones -->
        <h3>Promociones</h3>
        <p>
          En la compra de $500 pesos de gasolina Regular te regalamos un cambio de aceite. <br>
          En la compra de $400 pesos de gasolina Premium y un aditivo, te hacemos un descuento en tu siguiente compra de $0.20 centavos por litro</p>
        <hr> <!-- Servicios extras -->
        <h3>Servicios extras</h3>
        <p> 
          Baños <br>
          Bomba de aire <br>
          Bomba de agua <br>
          Tienda de autoservicio <br>
        </p>
        <hr> <!-- Puntuacion estrellas -->
        <h3>Puntuacion</h3>
        <div class="stars">
  <input type="radio" id="star1" name="rating" value="1" /><input type="radio" id="star2" name="rating" value="2" /><input type="radio" id="star3" name="rating" value="3" /><input type="radio" id="star4" name="rating" value="4" /><input type="radio" id="star5" name="rating" value="5" />
  
  <label for="star1" aria-label="Banana">1 star</label><label for="star2">2 stars</label><label for="star3">3 stars</label><label for="star4">4 stars</label><label for="star5">5 stars</label>
</div>
        <hr> <!-- Comentarios -->
        <h3>Comentarios</h3>
        <p> 
          Prueba 1: No manches pinchi gasolinera toda fea we.
        </p>
        <br><br><br><br>
    </div>
<!-- Anuncios derecha -->
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p><h4>Le pido de favor que ponga atencion a mis palabras querido compañero, soy conocido como El Mencho, amigo.</h4><img src ="https://ca-times.brightspotcdn.com/dims4/default/5c01c53/2147483647/strip/true/crop/1417x830+0+0/resize/1200x703!/quality/80/?url=https%3A%2F%2Fcalifornia-times-brightspot.s3.amazonaws.com%2Fd9%2Fb3%2Faaa147434a1bbef97bd0fbc2c698%2Felmencho.jpg" width = "200" height = "110"></p>
      </div>
    </div>
  </div>
</div>

<!-- Pie de pagina -->
<footer class="container-fluid text-center">
  <p>Pagina prueba - Los datos pueden estar desactualizados o ser completamente falsos.</p>
</footer>

</body>
</html>
