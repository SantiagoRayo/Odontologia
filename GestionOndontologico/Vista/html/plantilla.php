<!DOCTYPE>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>

<head>

    <title>Sistema de Gestion Odontologica</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <style>
        .navbar {
            margin-bottom: 50px;
            border-radius: 0;
            border-top: #4CA3FF;
            border-left: #4CA3FF;
            border-right: #4CA3FF;
            border-bottom-color: #4CA3FF;
        }

        .navbar {
            background-color: #4CA3FF;
        }
       
  
div#contenido{
    border:#d3d3d3 1px solid;
    margin-bottom: 30px;
    padding: 10px 10px;
}   
h2{
    color:black;
    border-bottom: #cfdfb5 1px solid;
}
    </style>
</head>

<body>


    <div class="container">
        <br><br>
        <center>
        <img src="..\img\Captura.png">
        </center>
        <br>
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">

                    <ul class="nav navbar-nav">
                        <a href="#"><button class="btn btn-default navbar-btn"> Inicio </button></a>
                        <a href="#"><button class="btn btn-default navbar-btn"> Asignar Cita </button></a>
                        <a href="#"><button class="btn btn-default navbar-btn"> Consultar Cita </button></a>
                        <a href="#"><button class="btn btn-default navbar-btn"> Cancelar Cita </button></a>
                    </ul>
                </div>
            </nav>    
    </div>
    
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <img src="..\img\odontologia1.png" alt="odontolgia" style="width:100%;">
                </div>

                <div class="item">
                    <img src="..\img\odo.png" alt="odontologia" style="width:100%;">
                </div>

                <div class="item">
                    <img src="..\img\odontologia3.png" alt="odontologia" style="width:100%;">
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    
        <br><br>
        <div id="contenido">
            <h2>Titulo Pagina</h2>
            <p>Contenido de la pagina</p>
        </div>
        <?php
        ?>
    </div>
</body>

</html>