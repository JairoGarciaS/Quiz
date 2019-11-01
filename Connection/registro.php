<html>
<head>
  <title>Programando Ando</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>


<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
  	<center><h1>CONSULTS</h1></center>
  	<form method="POST" action="registro.php" >

    
    <center>
        
        <input type="submit" value="Consu-Gen" class="btn btn-info" name="btn2">
        <input type="submit" value="Consu-Max-Pag" class="btn btn-info" name="btn3">
    
    </center>

  </form>

  <?php
  	
        
        if(isset($_POST['btn3']))
        
        {
            include("abrir_conexion.php");
            
            $resultados=mysqli_query($conexion,"SELECT customerName,MAX(amount)FROM customers cu
                                    INNER JOIN payments pay on cu.customerNumber = pay.customerNumber");
            while($consulta = mysqli_fetch_array($resultados))
            {
                
            echo $consulta['customerName']; 
            echo "<br>";
            }
            include("cerrar_conexion.php");
        }
        
        if(isset($_POST['btn2']))
        
        {
            include("abrir_conexion.php");
            
            $resultados=mysqli_query($conexion," SELECT * FROM $tabla_db1");
            while($consulta = mysqli_fetch_array($resultados))
            {
                
            echo $consulta['customerName']; 
            echo "<br>";
            }
            include("cerrar_conexion.php");
        }
  ?>



  </div>
  <div class="col-md-4"></div>
</div>



  
  
</body>
</html>