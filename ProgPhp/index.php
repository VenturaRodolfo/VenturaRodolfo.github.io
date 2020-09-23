<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css2/style.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Calculadora de conversiones</title>
</head>
<body background="../Imagen_de_presentacion/fondo-2.jpeg">

<a href="../index.php">  <img src="../Imagen_de_presentacion/atras.png" alt="Click para regresar" align ="left" width="100"> </a>

<div class="content-light-blue"> 
           <p> covertidor los cm a m, los m a km, y km a pulgadas, los g a kg y kg a libras </p>
           <img src = "../Imagen_de_presentacion/calcu_logo.png" align = "center" width="200" height="192" class="img-circle" >
           <form  method ="post">
              <p> Seleccione una conversion:</p> <select name="convertir" class="select">
                    <option value="null"> Seleccione una conversion</option>
                    <option value="KgG">Kg a G</option>
                    <option value="gKg">G a Kg</option>
                    <option value="gL">G a Libras</option>
                    <option value="Lg">Libras a G</option>
                    <option value="MCm">M a Cm</option>
                    <option value="CmM">Cm a M</option>
                    <option value="MKm">M a KM<m</option>
                    <option value="CMp">Cm a Pulgadas</option>
                    
                </form>
                <form  method="get">
                <p>  </p> <input type="double" name="valor" placeholder="Ingrese un valor"><br/>
                <p>    </p><input  class="boton" type="reset" value="Borrar">
                <input   class="boton"   type="submit" name = "enviar">
                </select>
                </form> 
                <?php
                error_reporting(E_ERROR | E_PARSE);
                //error_reporting(E_ALL ^ E_NOTICE, );
                //echo $_REQUEST ["valor"];
                $g=1000;
                $Kg=1;
                $R1=0;
                //kg a g, g a kg
                $L=453.592; 
                $G=1;
                $R2=0;
                //L a G, G a L 
                $Cm=100;
                $M=1;
                $METROS=100;
                $R3=0;
                //M a Cm, Cm a M
                $Km=1;
                $metros=1000;
                $R4=0;
                //Km a M
                $P=2.54;
                $cm=1;
                $R5=0;
                //Cm a P
                //echo $_REQUEST
                $select=$_POST["convertir"];
                if ($select == "null" )
                {
                    print "ninguna conversion seleccionada.";
                }
                elseif ($select == "KgG")
                {
                    $R1=$_REQUEST['valor'] * $g;
                    $R1 = $R1/$Kg;
                    print("El resultado de la conversion es: " . $R1. " Gramos");
                }
                elseif ($select == "gKg")
                {
                    $R1=$_REQUEST['valor'] * $Kg;
                    $R1 = $R1/$g;
                    print("El resultado de la conversion es: " . $R1. " Kilogramos");
                } 
                elseif ($select == "gL")
                {
                    $R2=$_REQUEST['valor'] * $L;
                    $R2 = $R2/$G;
                    print("El resultado de la conversion es: " . $R2. " Libras");
                }
                elseif ($select == "Lg")
                {
                    $R2=$_REQUEST['valor'] * $G;
                    $R2 = $R2/$L;
                    print("El resultado de la conversion es: " . $R2. " Gramos");
                }        
                elseif ($select == "MCm")
                {
                    $R3=$_REQUEST['valor'] * $Cm;
                    $R3 = $R3/$M;
                    print("El resultado de la conversion es: " . $R3. " Centimetros");
                }
                elseif ($select == "CmM")
                {
                    $R3=$_REQUEST['valor'] * $cm;
                    $R3 = $R3/$METROS;
                    print("El resultado de la conversion es: " . $R3. " Metros");
                }     
                elseif ($select == "MKm")
                {
                    $R4=$_REQUEST['valor'] * $Km;
                    $R4 = $R4/$metros;
                    print("El resultado de la conversion es: " . $R4. " Kilometros");
                }    
                elseif ($select == "CMp")
                {
                    $R5=$_REQUEST['valor'] * $P;
                    $R5 = $R5/$cm;
                    print("El resultado de la conversion es: " . $R5. " Pulgadas");
                }   
                ?>
    
    <script src="../js/jquery-3.4.1.js" ></script>
    <script src="../js/popper.js" ></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>