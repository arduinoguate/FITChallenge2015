$(document).ready(function() {
  var api = 'http://crea.arduinogt.com/v1/';
  var token = $("#sess_token").val();
  var mod_id = $("#modulo_id").val();

  load_devices();

  $("#seleccionar").click(function(e) {
    e.preventDefault();

    $('#moduleModal').modal("show");
  });

  $("#configurar").click(function(e) {
    e.preventDefault();

    $('#actionsModal').modal("show");
  });

  function load_devices() {
    //LOAD DEVICES
    $.ajax({
      url: api + "module/",
      type: 'GET',
      dataType: 'json',
      crossDomain: true,
      async: false,
      beforeSend: function(xhr) {
        xhr.setRequestHeader("Authorization", "Bearer " + token);
      },
      complete: function(resp) {
        json = resp.responseJSON;
        console.log(json);
        if (json.http_code == 200)
          $.each(json.modulos, function(i, item) {
            //$.each(item.modulos, function(j, modulo) {
              if (mod_id == item.id){
                $("#module_name").html("<h1>"+item.nombre+"</h1>");
                get_actions();
              }
              var itemo = '<option value="' + item.id + '">' + item.nombre + '</option>';
              $("#modulo").append(itemo);
            //});
          });
      },
      error: function(jqXHR, textStatus, errorThrown) {
        if (jqXHR.status != '422') {
          //window.location = "logout.php";
        } else
          $('#devices').append('<li class="list-group-item"><span class="glyphicon glyphicon-remove text-primary"></span>No hay dispositivos</li>');
      },
    });
  }

  function get_actions(){
    $.ajax({
      url: api + "module/" + mod_id + '/actions',
      type: 'GET',
      dataType: 'json',
      crossDomain: true,
      async: false,
      beforeSend: function(xhr) {
        xhr.setRequestHeader("Authorization", "Bearer " + token);
      },
      complete: function(resp) {
        json = resp.responseJSON;
        console.log(json);
        $.each(json.acciones, function(i, item) {


          $('.action_combo').append(info);

        });

        $(".send_action").click(function(e) {
          e.preventDefault();
          id = $(this).data("act");
          mod = $("#" + id).data("modulo");
          value = $("#" + id).val();

          execute_action(mod, value, id);
        });

        $(".delete_action").click(function(e) {
          e.preventDefault();
          id = $(this).data("act");
          mod = $("#" + id).data("modulo");

          delete_action(mod, id);
        });

      },
      error: function(jqXHR, textStatus, errorThrown) {
        if (jqXHR.status != '422') {
          window.location = "logout.php";
        } else
          $('#actions_int').html('<div class="col-md-12"><h2>No hay acciones disponibles</h2></div>');
      },
    });
  }

});
