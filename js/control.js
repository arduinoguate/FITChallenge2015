$(document).ready(function() {
  var api = 'http://crea.arduinogt.com/v1/';
  var token = $("#sess_token").val();
  var mod_id = $("#modulo_id").val();

  load_devices();

  $("#seleccionar").click(function(e) {
    e.preventDefault();

    $('#moduleModal').modal("show");
  });

  function load_devices() {
    //LOAD DEVICES
    $("#user-info").hide();
    $("#user-password").hide();
    $("#devices").html("");
    $.ajax({
      url: api + "module/",
      type: 'GET',
      dataType: 'json',
      crossDomain: true,
      async: false,
      dataType: 'jsonp',
      beforeSend: function(xhr) {
        xhr.setRequestHeader("Authorization", "Bearer " + token);
      },
      complete: function(resp) {
        json = resp.responseJSON;
        console.log(json);
        if (json.http_code == 200)
          $.each(json, function(i, item) {
            $.each(item, function(j, modulo) {
              if (mod_id = modulo.id){
                $("#module_name").html("<h1>"+modulo.nombre+"</h1>")
              }
              var item = '<option value="' + modulo.id + '">' + modulo.nombre + '</option>';
              $("#modulo").append(item);
            });
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

});
