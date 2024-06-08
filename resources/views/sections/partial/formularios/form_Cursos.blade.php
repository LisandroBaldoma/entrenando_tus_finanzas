    <form class="d-flex flex-column needs-validation" novalidate id="formCursos">
        @csrf
        <input type="text" class="" value="curso" name="formulario" hidden>
                    <div class="col-md-12">
                      <div class="form-outline" data-mdb-input-init>
                        <label for="validationCustom01" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="validationCustom01" value="" required name="nombre"/>
                        <div class="valid-feedback">Correcto</div>
                      </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-outline" data-mdb-input-init>
                            <label for="validationCustom01" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="validationCustom01" value="" required name="apellido"/>
                          <div class="valid-feedback">Correcto</div>
                        </div>
                      </div>
                    <div class="col-md-12">
                      <div class="form-outline" data-mdb-input-init>
                          <label for="validationCustom02" class="form-label">Correo electronico</label>
                        <input type="email" class="form-control" id="validationCustom02" value="" required name="email"/>
                        <div class="valid-feedback">Correcto</div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="input-group form-outline" data-mdb-input-init>
                        <div class="form-outline" data-mdb-input-init>
                            <label for="validationCustom02" class="form-label">Celular</label>
                            <input type="tel" class="form-control" id="validationCustom02" value="" required name="celular"/>
                            <div class="valid-feedback">Correcto</div>
                          </div>
                      </div>
                    </div>
                    <div class="col-12">
                        <label for="validationCustom01" class="form-label mt-2">Tenes de asesor a alguien del equipo?
                        </label>

                        <div class="form-check">
                            <div class="form-check mb-3">
                                <input type="radio" class="form-check-input" id="validationFormCheck1" value = "Abel" name="asesor" required />
                                <label class="form-check-label" for="validationFormCheck1">Sí, a Abel</label>
                                <div class="invalid-feedback">More example invalid feedback text</div>
                            </div>
                            <div class="form-check mb-3">
                                <input type="radio" class="form-check-input" id="validationFormCheck2" value = "Magalí" name="asesor" required />
                                <label class="form-check-label" for="validationFormCheck2">Sí, a Magalí</label>
                                <div class="invalid-feedback">More example invalid feedback text</div>
                            </div>
                            <div class="form-check mb-3">
                                <input type="radio" class="form-check-input" id="validationFormCheck3" value = "Franco"name="asesor" required />
                                <label class="form-check-label" for="validationFormCheck3">Sí, a Franco</label>
                                <div class="invalid-feedback">More example invalid feedback text</div>
                            </div>
                            <div class="form-check mb-3">
                                <input type="radio" class="form-check-input" id="validationFormCheck4" value = "ninguno" name="asesor" required />
                                <label class="form-check-label" for="validationFormCheck4">No, a ninguno</label>
                                <div class="invalid-feedback">More example invalid feedback text</div>
                            </div>
                            <div class="form-check mb-3">
                                <div class="col-md-12">
                                    <div class="input-group form-outline d-flex gap-2" data-mdb-input-init>
                                        <div>
                                            <input type="radio" class="form-check-input" id="validationFormCheck5" value = "otro" name="asesor" required />
                                            <label class="form-check-label" for="validationFormCheck5">Otro</label>
                                            <div class="invalid-feedback">More example invalid feedback text</div>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="validationCustomUsername" value = "" name = "otro" aria-describedby="inputGroupPrepend"/>
                                            <div class="invalid-feedback">Please choose a username.</div>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                            </div>

                        <label for="validationCustom01" class="form-label mt-2">Estás en alguna de las siguientes membresías?
                        </label>
                        <div class="form-check mb-3">
                            <input type="radio" class="form-check-input" id="validationFormCheck1" value = "Platinium" name="membresia" required />
                            <label class="form-check-label" for="validationFormCheck1">Estoy en Membresía PLATINUM</label>
                            <div class="invalid-feedback">More example invalid feedback text</div>
                        </div>
                        <div class="form-check mb-3">
                            <input type="radio" class="form-check-input" id="validationFormCheck2" value = "Gold" name="membresia" required />
                            <label class="form-check-label" for="validationFormCheck2">Estoy en Membresía GOLD</label>
                            <div class="invalid-feedback">More example invalid feedback text</div>
                        </div>
                        <div class="form-check mb-3">
                            <input type="radio" class="form-check-input" id="validationFormCheck3" value = "Escala tus inversiones"name="membresia" required />
                            <label class="form-check-label" for="validationFormCheck3">Estoy en Membresía ESCALÁ TUS INVERSIONES</label>
                            <div class="invalid-feedback">More example invalid feedback text</div>
                        </div>
                        <div class="form-check mb-3">
                            <input type="radio" class="form-check-input" id="validationFormCheck4" value = "no" name="membresia" required />
                            <label class="form-check-label" for="validationFormCheck4">No estoy en membresías</label>
                            <div class="invalid-feedback">More example invalid feedback text</div>
                        </div>

                        </div>

                    </div>

                    <div class="d-grid gap-2">
                        <button class="btn btn-primary"
                             type="submit">Enviar</button>

                      </div>
    </form>



  <script>

        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
            }, false)
        })
        })()

        console.log('FORMULARIO DE CONTACTO')
        $('#formCursos').submit(function(e) {

            console.log('JQUERY INTEGRADO')
            e.preventDefault();

            console.log('submit ajax');
            console.log($(this))
            console.log($(this).serialize())
            // Serialize the form data

            $.ajax({
                url : '/contdown/formnovedades',
                data : $(this).serialize(),
                type : 'POST',

                success : function(json) {
                    console.log('success');
                    console.log(json);
                    if(json.status == 0){
                        Swal.fire({
                            position: "top-center",
                            icon: "success",
                            title: json.mensaje,
                            showConfirmButton: false,
                            timer: 2000
                        });

                        setTimeout(() => {
                            $('#modalCursos').modal('hide')
                            $('#modalCursos').trigger('reset')
                            $('#formCursos').trigger("reset")
                        }, 2000);

                    }else{
                        Swal.fire(json.mensaje);
                    }
                },
                error : function(json , xhr, status) {
                    console.log('error');
                    console.log(json);
                    console.log(xhr);
                    console.log(status);
                },
                complete : function(json , xhr, status) {

                }
            });

        });



  </script>
