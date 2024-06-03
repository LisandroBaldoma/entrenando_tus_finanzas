{{-- SOBRE MI --}}
<div class="container">
    <div class="row align-items-center justify-content-between pt-5">
        <div class="col-lg-6 text-center text-lg-start pe-lg-5">
            <h1 class="heading text-white mb-3" data-aos="fade-up">Entrenando tus finanzas</h1>
            <p class="text-white mb-5" data-aos="fade-up" data-aos-delay="100">Entrenando Tus Finanzas surgió con la idea de brindar servicios financieros tanto educativos como de asesoría, posibilitando que todos puedan acceder a las inversiones independientemente de su formación, experiencia y capital.
            Su nombre se debe a la pasión que tengo por el deporte (participo en competencias de triatlón), el cual me ha brindado gratas experiencias, amistades y enseñanzas y a su vez, inculcado importantes valores.
            La relación con las FINANZAS es que sin dudas estas al igual que el cuerpo también deben ENTRENARSE. La única manera de hacer crecer un músculo es ejercitándolo, si no, se atrofia. Lo mismo sucede con nuestro dinero, si no lo entrenamos (movemos) y no lo ponemos a funcionar (circular) se atrofiará (dejará de crecer).
            Considero también que existe una gran carencia en la educación financiera en las aulas escolares, facultades e incluso en el hogar mismo por lo cual también existen diversos preconceptos (o conceptos erróneos) sobre el uso correcto del dinero y las inversiones.
            Al estar todos, sin excepciones de profesión, labor, ni oficio involucrados en su uso, considero que educarse al respecto es una cuestión FUNDAMENTAL para tener una buena salud financiera.
            Es por ello que te invito a ENTRENAR TUS FINANZAS conmigo, ¿empezamos?

            </p>
            <div class="align-items-center mb-5 mm" data-aos="fade-up" data-aos-delay="200">
                {{-- <a href="contact.html" class="btn btn-outline-white-reverse me-4">Contactanos</a> --}}
                <button type="button"
                class="btn btn-outline-white-reverse me-4"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
                data-bs-whatever="@fat">
                Contactanos</button>
                <a href="https://www.youtube.com/watch?v=Mb1zrW_zra4" class="text-white glightbox">Video</a>
            </div>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="img-wrap">
                <img src="{{asset('/img/franco_sobre_mi.jpg')}}" alt="Image" class="img-fluid rounded" style="height:600px">
            </div>
        </div>
    </div>
</div>

@include('sections.partial.formularios.formContactoModal')


