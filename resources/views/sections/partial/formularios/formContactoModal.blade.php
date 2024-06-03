{{--CONTACTo FORM MODAL  --}}



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Envianos un mensaje a la brevedad nos contactaremos</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @include('sections.partial.formularios.formContacto')
        </div>
      </div>
    </div>
  </div>


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


  $('#form_Contacto').submit(function(e) {

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


