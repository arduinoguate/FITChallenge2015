<?php
  include 'config/config.php';



?>

<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>FIT CONTROL</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/control.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">FIT Control</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Seleccionar modulo</a></li>
            <li class="active"><a href="#">Configurar</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
        <h1>Control Remoto</h1>
        <p class="lead">Aqui podremos controlar nuestro robot</p>
      </div>

      <div class="row">
        <div style="margin-bottom:5px;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><a href="#" id="up" data-assigned="" data-value="" class="btn btn-info col-xs-12 col-sm-12 col-md-12 col-lg-12">Arriba</a></div>
        <br/>
        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5"><a href="#" id="lt" data-assigned="" data-value="" class="btn btn-info col-xs-12 col-sm-12 col-md-12 col-lg-12">Izquierda</a></div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5"><a href="#" id="rt" data-assigned="" data-value="" class="btn btn-info col-xs-12 col-sm-12 col-md-12 col-lg-12">Derecha</a></div>
        <br/>
        <div style="margin-top:5px;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><a href="#" id="dn" data-assigned="" data-value="" class="btn btn-info col-xs-12 col-sm-12 col-md-12 col-lg-12">Abajo</a></div>

        <br/>
        <div style="margin-top:10px;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><a href="#" id="st" data-assigned="" data-value="" class="btn btn-info col-xs-12 col-sm-12 col-md-12 col-lg-12">Detenerse</a></div>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/control.js"></script>

  <div id="moduleModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">✕</button>
  	        <h3>Configurar Acciones</h3>
  	    </div>
          <div class="modal-body" style="text-align:center;">
              <div class="panel panel-default">
                  <div class="panel-body form-horizontal payment-form">
                  	<input type="hidden" id="act_module" />
                  	<input type="hidden" id="act_cmd" />

                      <div class="form-group">
                          <label for="concept" class="col-sm-3 control-label">Izquierda</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="mod_name" name="mod_name">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="concept" class="col-sm-3 control-label">Valor</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="mod_name" name="mod_name">
                          </div>
                      </div>
                      <hr/>

                      <div class="form-group">
                          <label for="concept" class="col-sm-3 control-label">Derecha</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="mod_name" name="mod_name">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="concept" class="col-sm-3 control-label">Valor</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="mod_name" name="mod_name">
                          </div>
                      </div>
                      <hr/>

                      <div class="form-group">
                          <label for="concept" class="col-sm-3 control-label">Arriba</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="mod_name" name="mod_name">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="concept" class="col-sm-3 control-label">Abajo</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="mod_name" name="mod_name">
                          </div>
                      </div>
                      <hr/>

                      <div class="form-group">
                          <label for="concept" class="col-sm-3 control-label">Izquierda</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="mod_name" name="mod_name">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="concept" class="col-sm-3 control-label">Valor</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="mod_name" name="mod_name">
                          </div>
                      </div>
                      <hr/>

                      <div class="form-group">
                          <div class="col-sm-12 text-right">
                              <button type="button" id="add_module_btn" class="btn btn-default preview-add-button">
                                  <span class="glyphicon glyphicon-plus"></span> Guardar
                              </button>
                          </div>
                      </div>
                  </div>
              </div>
  	    </div>
      </div>
    </div>
  </div>

</body></html>
