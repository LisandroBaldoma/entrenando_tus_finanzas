{{-- <form class="row g-3 needs-validation" novalidate id='formCursos'>
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">First name</label>
      <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
      <div class="valid-feedback">
        Correcto
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">Last name</label>
      <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
      <div class="valid-feedback">
        Correcto
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustomUsername" class="form-label">Username</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend">@</span>
        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationCustom03" class="form-label">City</label>
      <input type="text" class="form-control" id="validationCustom03" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom04" class="form-label">State</label>
      <select class="form-select" id="validationCustom04" required>
        <option selected disabled value="">Choose...</option>
        <option>...</option>
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationCustom05" class="form-label">Zip</label>
      <input type="text" class="form-control" id="validationCustom05" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          Agree to terms and conditions
        </label>
        <div class="invalid-feedback">
          You must agree before submitting.
        </div>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
</form> --}}

    <form class="d-flex flex-column needs-validation" novalidate id="formCursos">
                    <div class="col-md-12">
                      <div class="form-outline" data-mdb-input-init>
                        <label for="validationCustom01" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="validationCustom01" value="" required name="name"/>
                        <div class="valid-feedback">Correcto</div>
                      </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-outline" data-mdb-input-init>
                            <label for="validationCustom01" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="validationCustom01" value="" required name="lastName"/>
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
                            <input type="tel" class="form-control" id="validationCustom02" value="" required name="cellphone"/>
                            <div class="valid-feedback">Correcto</div>
                          </div>
                      </div>
                    </div>
                    <div class="col-12">
                        <label for="validationCustom01" class="form-label mt-2">Tenes de asesor a alguien del equipo?
                        </label>

                        <div class="form-check">
                            <div class="form-check mb-3">
                                <input type="radio" class="form-check-input" id="validationFormCheck1" value = "Abel" name="radio-stacked" required />
                                <label class="form-check-label" for="validationFormCheck1">Sí, a Abel</label>
                                <div class="invalid-feedback">More example invalid feedback text</div>
                            </div>
                            <div class="form-check mb-3">
                                <input type="radio" class="form-check-input" id="validationFormCheck2" value = "Magalí" name="radio-stacked" required />
                                <label class="form-check-label" for="validationFormCheck2">Sí, a Magalí</label>
                                <div class="invalid-feedback">More example invalid feedback text</div>
                            </div>
                            <div class="form-check mb-3">
                                <input type="radio" class="form-check-input" id="validationFormCheck3" value = "Franco"name="radio-stacked" required />
                                <label class="form-check-label" for="validationFormCheck3">Sí, a Franco</label>
                                <div class="invalid-feedback">More example invalid feedback text</div>
                            </div>
                            <div class="form-check mb-3">
                                <input type="radio" class="form-check-input" id="validationFormCheck4" value = "ninguno" name="radio-stacked" required />
                                <label class="form-check-label" for="validationFormCheck4">No, a ninguno</label>
                                <div class="invalid-feedback">More example invalid feedback text</div>
                            </div>
                            <div class="form-check mb-3">
                                <div class="col-md-12">
                                    <div class="input-group form-outline d-flex gap-2" data-mdb-input-init>
                                        <div>
                                            <input type="radio" class="form-check-input" id="validationFormCheck5" value = "otro" name="radio-stacked" required />
                                            <label class="form-check-label" for="validationFormCheck5">Otro</label>
                                            <div class="invalid-feedback">More example invalid feedback text</div>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="validationCustomUsername" value = "" name = "otro" aria-describedby="inputGroupPrepend" required />
                                            <div class="invalid-feedback">Please choose a username.</div>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                            </div>

                        <label for="validationCustom01" class="form-label mt-2">Estás en alguna de las siguientes membresías?
                        </label>
                        <div class="form-check mb-3">
                            <input type="radio" class="form-check-input" id="validationFormCheck1" value = "Platinium" name="radio-stacked2" required />
                            <label class="form-check-label" for="validationFormCheck1">Estoy en Membresía PLATINUM</label>
                            <div class="invalid-feedback">More example invalid feedback text</div>
                        </div>
                        <div class="form-check mb-3">
                            <input type="radio" class="form-check-input" id="validationFormCheck2" value = "Gold" name="radio-stacked2" required />
                            <label class="form-check-label" for="validationFormCheck2">Estoy en Membresía GOLD</label>
                            <div class="invalid-feedback">More example invalid feedback text</div>
                        </div>
                        <div class="form-check mb-3">
                            <input type="radio" class="form-check-input" id="validationFormCheck3" value = "Escala tus inversiones"name="radio-stacked2" required />
                            <label class="form-check-label" for="validationFormCheck3">Estoy en Membresía ESCALÁ TUS INVERSIONES</label>
                            <div class="invalid-feedback">More example invalid feedback text</div>
                        </div>
                        <div class="form-check mb-3">
                            <input type="radio" class="form-check-input" id="validationFormCheck4" value = "no" name="radio-stacked2" required />
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

    <script
        src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc="
        crossorigin="anonymous">
    </script>
    {{-- <script src="bootstrap/jquery-3.2.1.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
                type : 'get',

                success : function(json) {
                    console.log('success');
                    console.log(json);
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
