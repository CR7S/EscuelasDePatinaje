<?php
session_start();

if(!isset($_SESSION['user_session']))
{
	header("Location: index.php");
}

include_once 'dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);


if (!$enlace = mysql_connect('localhost', 'root', '')) {
    echo 'No pudo conectarse a mysql';
    exit;
}

if (!mysql_select_db('skating', $enlace)) {
    echo 'No pudo seleccionar la base de datos';
    exit;
}

$sql       = "SELECT r.indice,r.fecha FROM rendimiento r, tbl_users u WHERE r.user_id=u.user_id AND u.p_name='".$row['p_name']."'";
$resultado = mysql_query($sql, $enlace);

if (!$resultado) {
    echo "Error de BD, no se pudo consultar la base de datos\n";
    echo "Error MySQL: ' . mysql_error();
    exit;";
}
$arrayDe100Valores = array();
print_r($arrayDe100Valores);
$i=0;
while ($fila = mysql_fetch_assoc($resultado)) {
    echo $fila['indice'];
    $arrayDe100Valores[$i] = $fila['indice'];
    $i=$i+1;

}

mysql_free_result($resultado);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html >
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Rendimiento</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" > 
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet"> 
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

    <style type="text/css">
#container {
  min-width: 310px;
  max-width: 1140px;
  height: 500px;
  margin: 0 auto
}
</style>
<link href="css/style.css" rel="stylesheet" media="screen">

</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">Skating Guayabetal</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="">Rendimiento</a></li>            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="glyphicon glyphicon-user"></span>&nbsp;Bienvenido , <?php echo $row['p_name']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;Perfil</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Salir</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    
<div class="body-container">

<div class="container">
    <div class='alert alert-success'>
		<button class='close' data-dismiss='alert'>&times;</button>
			<strong>Hello '<?php echo $row['p_name']; ?></strong>  Bienvenido a Skating Guayabetal, aqui podras encontrar el rendimiento y evolución atraves del entrenamiento.
    </div>
</div>

<div id="container"></div>



    <script type="text/javascript">

Highcharts.chart('container', {
  chart: {
    type: 'line'
  },
  title: {
    text: 'El titulo de la grafica'
  },
  subtitle: {
    text: 'descripcion de la grafica'
  },
  xAxis: {
    categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
  },
  yAxis: {
    title: {
      text: 'Indice (C)'
    }
  },
  plotOptions: {
    line: {
      dataLabels: {
        enabled: true
      },
      enableMouseTracking: false
    }
  },
  series: [{
    name: 'fisico con',
    data: [<?php
                $resultado = count($arrayDe100Valores);
                  for ($i = 0; $i <= $resultado-1;$i++) {
                   
                      echo $arrayDe100Valores[$i].",";
                    
                    
                  }
                ?>

    ]
  }, {
    name: 'asdads',
    data: [2.9, -4.2, 5, -8.5, 1.9, 5.2, 7.0, 6.6, -4.2, 1.3, 16.6, -4.8]
  }]
});
    </script>
</div>

</div>
</div>


</div>

</div>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>