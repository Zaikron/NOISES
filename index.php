<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./pen.jpg" />
    <title>Noises</title>
</head>
<body class="back">
    
    <div class="divbtn">
        <button class="btn" onclick="ocultarDiv()">REMOVE</button>
        <button class="btn" onclick="mostrarDiv()">GET</button>
    </div>
    
    <div id="contenido">
    <?php
        $directorio = "./noises";
        #carpeta con archivos
        $contador = 0;

        $rutas = glob("$directorio/*");

        foreach ($rutas as $carpetaR) {
            $cName = basename($carpetaR);
            echo '<p class="tfont">Directorio: ['. $cName .'] </br></p>' ;
            $carpeta = glob("$carpetaR/*");
            foreach ($carpeta as $archivo) {
                $aName = basename($archivo);
                echo '<p class="sfont"> '. $aName .' </p>' ;
                echo '<audio class="pistas" src='. $archivo .' controls></audio>';
                echo '<br>';
                /*echo '<p class="sfont"> *'. $archivo .' </br></p>' ;*/
            }
        }
    ?>
    </div>

    <div id="falsa">
        <div><img src="./1.png" width="100%" height="100%"></div>
    </div>
    
</body>
</html>


<style>
    .back{
        background-color: #1A1A2D;
    }
    .sfont{
        color: darksalmon;
        margin-left: 2%;
        padding-left: 4px;
        border-left: 5px solid coral;
        text-shadow: 1px 1px 4px lightcoral;
    }
    .bfont{
        color: white;
        font-weight: bold;
    }
    .tfont{
        color: indianred;
        font-weight: bold;
        border-left: 5px solid indianred;
        border-bottom: 2px solid indianred;
        padding: 5px;
        text-shadow: 1px 1px 4px indianred;
    }
    .pistas{
        margin-left: 2%;
        margin-bottom: 20px;
        color: rebeccapurple;
        width: 90%;
    }
    audio::-webkit-media-controls-panel {
        background-color: lightcoral;
    }
    .contenido{
        background-color: red;
    }
    .divbtn{
        height: 50px;
        background-color: indianred;
    }
    .btn{
        float: right;
        padding: 4px;
        margin-top: 10px;
        margin-right: 15px;
        border-radius: 10%;
        border-color: coral;
        font-weight: bold;

        background-color: indianred;
        color: lightsalmon;
    }
    #falsa{
        display: none;
    }
</style>


<script>
  function ocultarDiv() {
    var div = document.getElementById("contenido");
    var fal = document.getElementById("falsa");
    div.style.display = "none";
    fal.style.display = "block";
  }
  function mostrarDiv() {
    var div = document.getElementById("contenido");
    var fal = document.getElementById("falsa");
    div.style.display = "block";
    fal.style.display = "none";
  }
</script>