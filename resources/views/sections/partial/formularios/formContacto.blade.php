<form class="d-flex flex-column needs-validation" id="form_Contacto">
    @csrf
    <input type="text" class="" value="contacto" name="formulario" hidden>
    <div class="col-md-12">
      <label for="validationDefault01" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="validationDefault01" value="" name="nombre" required maxlength="30">
    </div>
    <div class="col-md-12">
      <label for="validationDefault02" class="form-label">Apellido</label>
      <input type="text" class="form-control" id="validationDefault02" value="" name="apellido" required maxlength="30">
    </div>
    <div class="col-md-12">
        <label for="validationDefault02" class="form-label">Telefono</label>
        <input type="tel" class="form-control" id="validationDefault02" value="" name="celular" required maxlength="30">
      </div>
      <div class="col-md-12">
        <label for="validationDefault02" class="form-label">email</label>
        <input type="email" class="form-control" id="validationDefault02" value="" name="email" required maxlength="30">
      </div>
      <div class="col-md-12">
        <label for="validationDefault02" class="form-label">Mensaje</label>
        {{-- <input type="textarea" class="form-control" id="validationDefault02" value="" name="mensaje" required> --}}
        <textarea name="mensaje" rows="3" cols="50" required class="form-control" placeholder="Escribenos un mensaje y te contactaremos..." maxlength="240"></textarea>
      </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Enviar</button>
    </div>
  </form>

<script>

    console.log('ssssss')

  $('#form_Contacto').submit(function(e) {

        e.preventDefault();
        console.log('JQUERY INTEGRADO')
        console.log('submit ajax');
        console.log($(this))
        console.log($(this).serialize())

          $.ajax({
              url : '/contdown/formnovedades',
              headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
              data : $(this).serialize(),
              type : 'POST',
            //   dataType: "json", //Expected data format from server
              success : function(json){

                    if(json.status === 0){

                        Swal.fire({
                            position: "top-center",
                            icon: "success",
                            title: json.mensaje,
                            showConfirmButton: false,
                            timer: 2000
                        });

                        $('#exampleModal').modal('hide')
                        $('#form_Contacto').trigger("reset")


                    }else{
                        console.log('errror');
                        Swal.fire(json.mensaje);
                    }
                },
              error : function(json , xhr, status) {
                  console.log('error');
                  console.log(json);
                  console.log(xhr);
                  console.log(status);
              },
          });

  });



</script>
