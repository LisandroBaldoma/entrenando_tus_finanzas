<form class="d-flex flex-column needs-validation" novalidate id="formAsesoramiento">
    @csrf
        <input type="text" class="" value="asesoramiento" name="formulario" hidden>
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
            <input type="tel" class="form-control" id="validationCustom02" value="" required name="celular"/>
            <div class="valid-feedback">Correcto</div>
          </div>
      </div>
    </div>
    <div class="col-12">

        <label for="validationCustom01" class="form-label mt-2">Experiencia en el Mercado de Capitales:
        </label>

        <div class="form-check">
            <div class="form-check mb-3">
                <input type="radio" class="form-check-input" id="validationFormCheck1" value = "nunca" name="experiencia" required />
                <label class="form-check-label" for="validationFormCheck1">Nunca he invertido</label>
                <div class="invalid-feedback">More example invalid feedback text</div>
            </div>
            <div class="form-check mb-3">
                <input type="radio" class="form-check-input" id="validationFormCheck2" value = "fondos" name="experiencia" required />
                <label class="form-check-label" for="validationFormCheck2">Fondos Comunes de Inversión</label>
                <div class="invalid-feedback">More example invalid feedback text</div>
            </div>
            <div class="form-check mb-3">
                <input type="radio" class="form-check-input" id="validationFormCheck3" value = "rentafija"name="experiencia" required />
                <label class="form-check-label" for="validationFormCheck3">Renta Fija: Bonos (Títulos Públicos / Obligaciones Negociables)</label>
                <div class="invalid-feedback">More example invalid feedback text</div>
            </div>
            <div class="form-check mb-3">
                <input type="radio" class="form-check-input" id="validationFormCheck4" value = "rentavariable" name="experiencia" required />
                <label class="form-check-label" for="validationFormCheck4">Renta Variable: Acciones / Cedears</label>
                <div class="invalid-feedback">More example invalid feedback text</div>
            </div>
            <div class="form-check mb-3">
                <input type="radio" class="form-check-input" id="validationFormCheck4" value = "derivados" name="experiencia" required />
                <label class="form-check-label" for="validationFormCheck4">Opciones y derivados</label>
                <div class="invalid-feedback">More example invalid feedback text</div>
            </div>
            <div class="form-check mb-3">
                <input type="radio" class="form-check-input" id="validationFormCheck4" value = "criptomonedas" name="experiencia" required />
                <label class="form-check-label" for="validationFormCheck4">Criptomonedas</label>
                <div class="invalid-feedback">More example invalid feedback text</div>
            </div>
            </div>

            <label for="validationCustom01" class="form-label mt-2">Cómo nos conociste?
            </label>

            <div class="form-check">
                <div class="form-check mb-3">
                    <input type="radio" class="form-check-input" id="validationFormCheck1" value = "redes" name="recomendacion" required />
                    <label class="form-check-label" for="validationFormCheck1">Redes Sociales</label>
                    <div class="invalid-feedback">More example invalid feedback text</div>
                </div>
                <div class="form-check mb-3">
                    <input type="radio" class="form-check-input" id="validationFormCheck2" value = "familiar" name="recomendacion" required />
                    <label class="form-check-label" for="validationFormCheck2">Recomendación familiar</label>
                    <div class="invalid-feedback">More example invalid feedback text</div>
                </div>
                <div class="form-check mb-3">
                    <input type="radio" class="form-check-input" id="validationFormCheck3" value = "amigo"name="recomendacion" required />
                    <label class="form-check-label" for="validationFormCheck3">Recomendación amigo, compañero de estudio, trabajo, hobbie.</label>
                    <div class="invalid-feedback">More example invalid feedback text</div>
                </div>

                </div>

                <label for="validationCustom01" class="form-label mt-2">Monto inicial a invertir (si son pesos, dolarizarlo al tipo de cambio de la fecha para tener noción a los dólares equivalentes):
                </label>

                <div class="form-check">
                    <div class="form-check mb-3">
                        <input type="radio" class="form-check-input" id="validationFormCheck1" value = "1000" name="inversion" required />
                        <label class="form-check-label" for="validationFormCheck1">Menos de 1.000 dólares</label>
                        <div class="invalid-feedback">More example invalid feedback text</div>
                    </div>
                    <div class="form-check mb-3">
                        <input type="radio" class="form-check-input" id="validationFormCheck2" value = "5000" name="inversion" required />
                        <label class="form-check-label" for="validationFormCheck2">Entre 1.000 y 5.000 dólares</label>
                        <div class="invalid-feedback">More example invalid feedback text</div>
                    </div>
                    <div class="form-check mb-3">
                        <input type="radio" class="form-check-input" id="validationFormCheck3" value = "10000"name="inversion" required />
                        <label class="form-check-label" for="validationFormCheck3">Entre 5.000 y 10.000 dólares</label>
                        <div class="invalid-feedback">More example invalid feedback text</div>
                    </div>
                    <div class="form-check mb-3">
                        <input type="radio" class="form-check-input" id="validationFormCheck4" value = "20000" name="inversion" required />
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


$('#formAsesoramiento').submit(function(e) {

    console.log('JQUERY INTEGRADO')
    e.preventDefault();

    // console.log('submit ajax');
    // console.log($(this))
    // console.log($(this).serialize())
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
                    $('#modalAsesoramiento').modal('hide')
                    $('#modalAsesoramiento').trigger('reset')
                    $('#formAsesoramiento').trigger("reset")
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

    });

});



</script>
