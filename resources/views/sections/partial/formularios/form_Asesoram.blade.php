<form class="d-flex flex-column needs-validation" novalidate id="formCursos2">
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
    {{-- <div class="col-md-12">
      <div class="form-outline" data-mdb-input-init>
          <label for="validationCustom02" class="form-label">Correo electronico</label>
        <input type="email" class="form-control" id="validationCustom02" value="" required name="email"/>
        <div class="valid-feedback">Correcto</div>
      </div>
    </div> --}}
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

        <label for="validationCustom01" class="form-label mt-2">Experiencia en el Mercado de Capitales:
        </label>

        <div class="form-check">
            <div class="form-check mb-3">
                <input type="radio" class="form-check-input" id="validationFormCheck1" value = "nunca" name="radio-stacked" required />
                <label class="form-check-label" for="validationFormCheck1">Nunca he invertido</label>
                <div class="invalid-feedback">More example invalid feedback text</div>
            </div>
            <div class="form-check mb-3">
                <input type="radio" class="form-check-input" id="validationFormCheck2" value = "fondos" name="radio-stacked" required />
                <label class="form-check-label" for="validationFormCheck2">Fondos Comunes de Inversión</label>
                <div class="invalid-feedback">More example invalid feedback text</div>
            </div>
            <div class="form-check mb-3">
                <input type="radio" class="form-check-input" id="validationFormCheck3" value = "rentafija"name="radio-stacked" required />
                <label class="form-check-label" for="validationFormCheck3">Renta Fija: Bonos (Títulos Públicos / Obligaciones Negociables)</label>
                <div class="invalid-feedback">More example invalid feedback text</div>
            </div>
            <div class="form-check mb-3">
                <input type="radio" class="form-check-input" id="validationFormCheck4" value = "rentavariable" name="radio-stacked" required />
                <label class="form-check-label" for="validationFormCheck4">Renta Variable: Acciones / Cedears</label>
                <div class="invalid-feedback">More example invalid feedback text</div>
            </div>
            <div class="form-check mb-3">
                <input type="radio" class="form-check-input" id="validationFormCheck4" value = "derivados" name="radio-stacked" required />
                <label class="form-check-label" for="validationFormCheck4">Opciones y derivados</label>
                <div class="invalid-feedback">More example invalid feedback text</div>
            </div>
            <div class="form-check mb-3">
                <input type="radio" class="form-check-input" id="validationFormCheck4" value = "criptomonedas" name="radio-stacked" required />
                <label class="form-check-label" for="validationFormCheck4">Criptomonedas</label>
                <div class="invalid-feedback">More example invalid feedback text</div>
            </div>
            </div>

            <label for="validationCustom01" class="form-label mt-2">Cómo nos conociste?
            </label>

            <div class="form-check">
                <div class="form-check mb-3">
                    <input type="radio" class="form-check-input" id="validationFormCheck1" value = "redes" name="radio-stacked1" required />
                    <label class="form-check-label" for="validationFormCheck1">Redes Sociales</label>
                    <div class="invalid-feedback">More example invalid feedback text</div>
                </div>
                <div class="form-check mb-3">
                    <input type="radio" class="form-check-input" id="validationFormCheck2" value = "familiar" name="radio-stacked1" required />
                    <label class="form-check-label" for="validationFormCheck2">Recomendación familiar</label>
                    <div class="invalid-feedback">More example invalid feedback text</div>
                </div>
                <div class="form-check mb-3">
                    <input type="radio" class="form-check-input" id="validationFormCheck3" value = "amigo"name="radio-stacked1" required />
                    <label class="form-check-label" for="validationFormCheck3">Recomendación amigo, compañero de estudio, trabajo, hobbie.</label>
                    <div class="invalid-feedback">More example invalid feedback text</div>
                </div>

                </div>

                <label for="validationCustom01" class="form-label mt-2">Monto inicial a invertir (si son pesos, dolarizarlo al tipo de cambio de la fecha para tener noción a los dólares equivalentes):
                </label>

                <div class="form-check">
                    <div class="form-check mb-3">
                        <input type="radio" class="form-check-input" id="validationFormCheck1" value = "999" name="radio-stacked2" required />
                        <label class="form-check-label" for="validationFormCheck1">Menos de 1.000 dólares</label>
                        <div class="invalid-feedback">More example invalid feedback text</div>
                    </div>
                    <div class="form-check mb-3">
                        <input type="radio" class="form-check-input" id="validationFormCheck2" value = "5000" name="radio-stacked2" required />
                        <label class="form-check-label" for="validationFormCheck2">Entre 1.000 y 5.000 dólares</label>
                        <div class="invalid-feedback">More example invalid feedback text</div>
                    </div>
                    <div class="form-check mb-3">
                        <input type="radio" class="form-check-input" id="validationFormCheck3" value = "10000"name="radio-stacked2" required />
                        <label class="form-check-label" for="validationFormCheck3">Entre 5.000 y 10.000 dólares</label>
                        <div class="invalid-feedback">More example invalid feedback text</div>
                    </div>
                    <div class="form-check mb-3">
                        <input type="radio" class="form-check-input" id="validationFormCheck4" value = "100001" name="radio-stacked2" required />
                        <label class="form-check-label" for="validationFormCheck4">Más de 10.000 dólares</label>
                        <div class="invalid-feedback">More example invalid feedback text</div>
                    </div>

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


$('#formCursos2').submit(function(e) {

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
