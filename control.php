<?php
  session_start();
  include 'config/config.php';
  $user = $_SESSION['username'];
  $usuario->fetch_id(array("username" => $_SESSION['username']));
  $usuario->fetch_id(array("username" => $_SESSION['username']));
  $modulo = $usuario->columns['id_modulo'];

    $action_u = "";
    $up = "";
    $action_d = "";
    $down = "";
    $action_l = "";
    $left = "";
    $action_r = "";
    $right = "";
    $action_s = "";
    $stop = "";

  $q_list = $command->fetch("id_usuario = '$user' AND type = 'U'");
  if (count($q_list) > 0){
    $action_u = $q_list[0]->columns['id_action'];
    $up = $q_list[0]->columns['default_value'];
  }

  $q_list = $command->fetch("id_usuario = '$user' AND type = 'D'");
  if (count($q_list) > 0){
    $action_d = $q_list[0]->columns['id_action'];
    $down = $q_list[0]->columns['default_value'];
  }

  $q_list = $command->fetch("id_usuario = '$user' AND type = 'L'");
  if (count($q_list) > 0){
    $action_l = $q_list[0]->columns['id_action'];
    $left = $q_list[0]->columns['default_value'];
  }

  $q_list = $command->fetch("id_usuario = '$user' AND type = 'R'");
  if (count($q_list) > 0){
    $action_r = $q_list[0]->columns['id_action'];
    $right = $q_list[0]->columns['default_value'];
  }

  $q_list = $command->fetch("id_usuario = '$user' AND type = 'S'");
  if (count($q_list) > 0){
    $action_s = $q_list[0]->columns['id_action'];
    $stop = $q_list[0]->columns['default_value'];
  }



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
    <input type="hidden" id="sess_token" value="<?php echo $_SESSION['token'] ?>"/>
	  <input type="hidden" id="sess_user" value="<?php echo $_SESSION['username'] ?>"/>
    <input type="hidden" id="modulo_id" value="<?php echo $modulo ?>"/>
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
            <li class="active"><a id="seleccionar" href="#">Seleccionar modulo</a></li>
            <li class="active"><a id="configurar" href="#">Configurar</a></li>
            <li class="active"><a id="configurar" href="logout.php">Salir</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
        <h1>Control Remoto</h1>
        <p class="lead">Aqui podremos controlar nuestro robot</p>
        <p class="lead" id="module_name"></p>
      </div>

      <div class="row">
        <div style="margin-bottom:5px;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><a href="#" id="up" data-assigned="<?php echo $action_u ?>" data-value="<?php echo $up ?>" class="btn btn-info col-xs-12 col-sm-12 col-md-12 col-lg-12">Arriba</a></div>
        <br/>
        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5"><a href="#" id="lt" data-assigned="<?php echo $action_l ?>" data-value="<?php echo $left ?>" class="btn btn-info col-xs-12 col-sm-12 col-md-12 col-lg-12">Izquierda</a></div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5"><a href="#" id="rt" data-assigned="<?php echo $action_r ?>" data-value="<?php echo $right ?>" class="btn btn-info col-xs-12 col-sm-12 col-md-12 col-lg-12">Derecha</a></div>
        <br/>
        <div style="margin-top:5px;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><a href="#" id="dn" data-assigned="<?php echo $action_d ?>" data-value="<?php echo $down ?>" class="btn btn-info col-xs-12 col-sm-12 col-md-12 col-lg-12">Abajo</a></div>

        <br/>
        <div style="margin-top:10px;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><a href="#" id="st" data-assigned="<?php echo $action_s ?>" data-value="<?php echo $stop ?>" class="btn btn-info col-xs-12 col-sm-12 col-md-12 col-lg-12">Detenerse</a></div>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/control.js"></script>

  <div id="actionsModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <form action="post/actions.php" method="post">
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
                              <select class="action_combo form-control" id="a_izquierda" name="a_izquierda">
                              </select>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="concept" class="col-sm-3 control-label">Valor</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="v_izquierda" name="v_izquierda">
                          </div>
                      </div>
                      <hr/>

                      <div class="form-group">
                          <label for="concept" class="col-sm-3 control-label">Derecha</label>
                          <div class="col-sm-9">
                            <select class="action_combo form-control" id="a_derecha" name="a_derecha">
                            </select>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="concept" class="col-sm-3 control-label">Valor</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="v_derecha" name="v_derecha">
                          </div>
                      </div>
                      <hr/>

                      <div class="form-group">
                          <label for="concept" class="col-sm-3 control-label">Arriba</label>
                          <div class="col-sm-9">
                            <select class="action_combo form-control" id="a_arriba" name="a_arriba">
                            </select>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="concept" class="col-sm-3 control-label">Valor</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="v_arriba" name="v_arriba">
                          </div>
                      </div>
                      <hr/>

                      <div class="form-group">
                          <label for="concept" class="col-sm-3 control-label">Abajo</label>
                          <div class="col-sm-9">
                            <select class="action_combo form-control" id="a_abajo" name="a_abajo">
                            </select>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="concept" class="col-sm-3 control-label">Valor</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="v_abajo" name="v_abajo">
                          </div>
                      </div>
                      <hr/>

                      <div class="form-group">
                          <label for="concept" class="col-sm-3 control-label">Detener</label>
                          <div class="col-sm-9">
                            <select class="action_combo form-control" id="a_stop" name="a_stop">
                            </select>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="concept" class="col-sm-3 control-label">Valor</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="v_stop" name="v_stop">
                          </div>
                      </div>
                      <hr/>

                      <div class="form-group">
                          <div class="col-sm-12 text-right">
                              <button type="button" id="add_module_btn" class="btn btn-default preview-add-button">
                                  <input type="submit" id="add_action_btn" class="btn btn-default preview-add-button" value="Cambiar"/>
                              </button>
                          </div>
                      </div>
                  </div>
              </div>
    	    </div>
        </div>
      </div>
    </form>
  </div>

  <div id="moduleModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <form action="post/modulo.php" method="post">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">✕</button>
    	        <h3>Seleccionar modulo</h3>
    	    </div>
            <div class="modal-body" style="text-align:center;">
                <div class="panel panel-default">
                    <div class="panel-body form-horizontal payment-form">
                    	<input type="hidden" id="act_module" />
                    	<input type="hidden" id="act_cmd" />
                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Modulo</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="modulo" name="modulo">

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12 text-right">
                                <input type="submit" id="add_action_btn" class="btn btn-default preview-add-button" value="Cambiar"/>
                            </div>
                        </div>
                    </div>
                </div>
    	    </div>
        </div>
      </div>
    </form>
  </div>

</body></html>
