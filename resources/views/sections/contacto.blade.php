@extends('layout.base')

@section('main')



<div>
      <!-- Container for demo purpose -->
    <div class="container my-24 mx-auto md:px-6">
        <!-- Section: Design Block -->
        <section class="mb-32">
        <div class="flex flex-wrap">
            <div class="mb-10 w-full shrink-0 grow-0 basis-auto md:mb-0 md:w-6/12 md:px-3 lg:px-6">
            <h2 class="mb-6 text-3xl font-bold">Contact us</h2>
            <p class="mb-6 text-neutral-500 dark:text-neutral-300">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Laudantium, modi accusantium ipsum corporis quia asperiores
                dolorem nisi corrupti eveniet dolores ad maiores repellendus enim
                autem omnis fugiat perspiciatis? Ad, veritatis.
            </p>
            <p class="mb-2 text-neutral-500 dark:text-neutral-300">
                New York, 94126, United States
            </p>
            <p class="mb-2 text-neutral-500 dark:text-neutral-300">
                + 01 234 567 89
            </p>
            <p class="mb-2 text-neutral-500 dark:text-neutral-300">
                info@gmail.com
            </p>
            </div>
            <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:mb-0 md:w-6/12 md:px-3 lg:px-6">
                <button
                    type="button"
                    class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                    data-twe-toggle="modal"
                    data-twe-target="#modal_form_cursoFinanzas"
                    data-twe-whatever="@getbootstrap"
                    data-twe-ripple-init
                    data-twe-ripple-color="light">
                    Cursos de Finanzas Personales @getbootstrap
                </button>

                <button
                    type="button"
                    class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                    data-twe-toggle="modal"
                    data-twe-target="#modal_form_asesoramientoFinanciero"
                    data-twe-whatever="@getbootstrap"
                    data-twe-ripple-init
                    data-twe-ripple-color="light">
                    Asesoramiento de Finanza @getbootstrap
                </button>


            </div>
        </div>
        </section>
        <!-- Section: Design Block -->
    </div>
    <!-- Container for demo purpose -->




    <!-- Modal Curso de finanzas-->
    <div
        data-twe-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="modal_form_cursoFinanzas"
        tabindex="-1"
        aria-labelledby="modal_form_cursoFinanzasLabel"
        aria-hidden="true">
        <div
            data-twe-modal-dialog-ref
            class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
            <div
            class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
            <div
                class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10 bg-primary">
                <h5
                class="text-xl font-medium leading-normal text-white dark:text-white"
                id="modal_form_cursoFinanzasLabel">
                Cursos de Finanzas
                </h5>
                <button
                type="button"
                class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300"
                data-twe-modal-dismiss
                aria-label="Close">
                <span class="[&>svg]:h-6 [&>svg]:w-6">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </span>
                </button>
            </div>
            <p class="bg-primary text-white">Dejá tus datos en el Formulario para brindarte la info sobre el curso (clases, duración, valor). 💰📝🤑</p>
            <div class="relative flex-auto p-4 bg-primary-200" data-twe-modal-body-ref>
                <form class="d-flex flex-column needs-validation" novalidate id="cf-form">
                    <div class="col-md-12">
                      <div class="form-outline" data-mdb-input-init>
                        <label for="validationCustom01" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="validationCustom01" value="Mark" required name="name"/>
                        <div class="valid-feedback">Looks good!</div>
                      </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-outline" data-mdb-input-init>
                            <label for="validationCustom01" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="validationCustom01" value="Mark" required name="lastName"/>
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                      </div>
                    <div class="col-md-12">
                      <div class="form-outline" data-mdb-input-init>
                          <label for="validationCustom02" class="form-label">Correo electronico</label>
                        <input type="email" class="form-control" id="validationCustom02" value="Otto" required name="email"/>
                        <div class="valid-feedback">Looks good!</div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="input-group form-outline" data-mdb-input-init>
                        <div class="form-outline" data-mdb-input-init>
                            <label for="validationCustom02" class="form-label">Celular</label>
                            <input type="number" class="form-control" id="validationCustom02" value="Otto" required name="cellphone"/>
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                      </div>
                    </div>
                    <div class="col-12">
                        <label for="validationCustom01" class="form-label mt-2">Tenes de asesor a alguien del equipo?
                        </label>

                        <div class="form-check">
                            <div class="form-check mb-3">
                                <input type="radio" class="form-check-input" id="validationFormCheck1" name="radio-stacked" required />
                                <label class="form-check-label" for="validationFormCheck1">Sí, a Abel</label>
                                <div class="invalid-feedback">More example invalid feedback text</div>
                            </div>
                            <div class="form-check mb-3">
                                <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required />
                                <label class="form-check-label" for="validationFormCheck2">Sí, a Magalí</label>
                                <div class="invalid-feedback">More example invalid feedback text</div>
                            </div>
                            <div class="form-check mb-3">
                                <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" required />
                                <label class="form-check-label" for="validationFormCheck3">Sí, a Franco</label>
                                <div class="invalid-feedback">More example invalid feedback text</div>
                            </div>
                            <div class="form-check mb-3">
                                <input type="radio" class="form-check-input" id="validationFormCheck4" name="radio-stacked" required />
                                <label class="form-check-label" for="validationFormCheck4">No, a ninguno</label>
                                <div class="invalid-feedback">More example invalid feedback text</div>
                            </div>
                            <div class="form-check mb-3">
                                <div class="col-md-12">
                                    <div class="input-group form-outline d-flex gap-2" data-mdb-input-init>
                                        <div>
                                            <input type="radio" class="form-check-input" id="validationFormCheck5" name="radio-stacked" required />
                                            <label class="form-check-label" for="validationFormCheck5">Otro</label>
                                            <div class="invalid-feedback">More example invalid feedback text</div>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required />
                                            <div class="invalid-feedback">Please choose a username.</div>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-grid gap-2">
                        <button class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                        type="submit"
                        data-mdb-ripple-init>Enviar</button>
                    </div>

                </form>
            </div>

            </div>
        </div>
    </div>
    <!-- Modal Asesoramiento financiero-->
    <div
        data-twe-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="modal_form_asesoramientoFinanciero"
        tabindex="-1"
        aria-labelledby="modal_form_asesoramientoFinancieroLabel"
        aria-hidden="true">
        <div
        data-twe-modal-dialog-ref
        class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
        <div
        class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
        <div
            class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
            <h5
            class="text-xl font-medium leading-normal text-surface dark:text-white"
            id="modal_form_asesoramientoFinancieroLabel">
            Asesoramiento Financiero
            </h5>
            <button
            type="button"
            class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300"
            data-twe-modal-dismiss
            aria-label="Close">
            <span class="[&>svg]:h-6 [&>svg]:w-6">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6 18L18 6M6 6l12 12" />
                </svg>
            </span>
            </button>
        </div>
        <div class="relative flex-auto p-4" data-twe-modal-body-ref>
            <form class="row g-3 needs-validation" novalidate action="/contdown/formnovedades">
                <div class="col-md-4">
                  <div class="form-outline" data-mdb-input-init>
                    <input type="text" class="form-control" id="validationCustom01" value="Mark" required />
                    <label for="validationCustom01" class="form-label">First name</label>
                    <div class="valid-feedback">Looks good!</div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-outline" data-mdb-input-init>
                    <input type="text" class="form-control" id="validationCustom02" value="Otto" required />
                    <label for="validationCustom02" class="form-label">Last name</label>
                    <div class="valid-feedback">Looks good!</div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="input-group form-outline" data-mdb-input-init>
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required />
                    <label for="validationCustomUsername" class="form-label">Username</label>
                    <div class="invalid-feedback">Please choose a username.</div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-outline" data-mdb-input-init>
                    <input type="text" class="form-control" id="validationCustom03" required />
                    <label for="validationCustom03" class="form-label">City</label>
                    <div class="invalid-feedback">Please provide a valid city.</div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-outline" data-mdb-input-init>
                    <input type="text" class="form-control" id="validationCustom05" required />
                    <label for="validationCustom05" class="form-label">Zip</label>
                    <div class="invalid-feedback">Please provide a valid zip.</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required />
                    <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                    <div class="invalid-feedback">You must agree before submitting.</div>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit" data-mdb-ripple-init>Submit form</button>
                </div>
              </form>
        </div>
    </div>
</div>




<script
    src="https://code.jquery.com/jquery-3.7.1.slim.js"
    integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc="
    crossorigin="anonymous">
    <script src="bootstrap/jquery-3.2.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</script>




<script>


        // VALIDACION FORMULARIOS
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


        $('#cf-form').submit(function(e) {
            e.preventDefault();
            console.log('submit ajax');
            console.log($(this))
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




    // Curso de Finanzas open modal

        const exampleModal = document.getElementById('modal_form_cursoFinanzas');
        exampleModal.addEventListener('show.twe.modal', (e) => {
        // Button that triggered the modal
        const button = e.relatedTarget;
        // Extract info from data-twe-* attributes
        const recipient = button.getAttribute('data-twe-whatever');
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.
        const modalTitle = exampleModal.querySelector('#modal_form_cursoFinanzasLabel');
        const modalBodyInput = exampleModal.querySelector('[data-twe-modal-body-ref] input');

        modalTitle.textContent = `Curso Finanzas Personales 2024`;
        modalBodyInput.value = recipient;
        })

    // Curso de Finanzas open modal

    // Asesoramiento de finanzas open modal

        // initTWE({ Modal, Ripple });

        const exampleModal2 = document.getElementById('modal_form_cursoFinanzas');
        exampleModal2.addEventListener('show.twe.modal', (e) => {
        // Button that triggered the modal
        const button = e.relatedTarget;
        // Extract info from data-twe-* attributes
        const recipient = button.getAttribute('data-twe-whatever');
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.
        const modalTitle = exampleModal2.querySelector('#modal_form_cursoFinanzasLabel');
        const modalBodyInput = exampleModal2.querySelector('[data-twe-modal-body-ref] input');

        modalTitle.textContent = `Curso Finanzas Personales 2024`;
        modalBodyInput.value = recipient;
        })
    // Asesoramiento de finanzas open modal



</script>

<script>



</script>


@endsection
