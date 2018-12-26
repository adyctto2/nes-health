@extends('layout1')
@section('formularios1')
  <!--Main Layout-->
  <section id="about" class="marge ">
  <div class="container  ">
    <div class="row">
      <div class="col-lg-2 text-center text-muted">
      </div>
      <div class="col-lg-8 text-center text-muted">
        <h2  align="center" class="service-heading titull" ><strong> Un sistema simple y poderoso para crear bienestar total</strong></h2>
        <br> <p align="center" class="font-weight-normal  j">
          El sistema BioEnergetiX WellNES permite a los médicos y profesionales de la salud alternativos restaurar rápida y fácilmente la salud del cliente mediante nuestro proceso exclusivo de 3 pasos:
        </p><br>

      </div>
      <div class="col-lg-2 text-center text-muted">

      </div>
    </div>
    <div class="row "  align="center">
      <div class="col-lg-1 text-center text-muted">
      </div>
      <div class="col-lg-3 text-muted ">
          <img class="rounded-circle img-fluid" src="{{asset('img/about/1.png')}}" alt="">
          <h2  class="service-heading titull espacioT"  style=" font-size:33px;">Evaluar </h2>
          <p  class="font-weight-normal  jj">
            Nuestro escaneo mide cientos de puntos de bienestar en solo segundos con una precisión notable.
          </p>
      </div>

      <div class="col-lg-4 text-muted">
          <img class="rounded-circle img-fluid" src="{{asset('img/about/2.png')}}" alt="">
              <h2  class="service-heading titull espacioT"  style=" font-size:33px;"><strong>Desbloquear </strong></h2>
            <p  class="font-weight-normal  jj">
              Nuestro dispositivo miHealth combina la terapia PEMF probada con señales patentadas para liberar el flujo de energía del cuerpo.
            </p>
      </div>

      <div class="col-lg-3 text-muted">
            <img class=" img-fluid" src="{{asset('img/about/5.png')}}" alt="">
                <h2  class="service-heading titull espacioT"  style=" font-size:33px;"><strong>Corregir </strong></h2>
              <p  class="font-weight-normal  jj">
                Nuestros remedios líquidos patentados corrigen la información en el campo del cuerpo, activando sus habilidades de auto restauración.
              </p>
      </div>
      <div class="col-lg-1 text-center text-muted">
      </div>


    </div>
    <div class="row">
      <div class="col-lg-9 mx-auto text-center j">
        <p></p>
        <p class="large text-muted">Vemos la salud de manera holística. La vida comienza con la información, que guía la energía, que se convierte en materia organizada. Nuestra tecnología, terapias y filosofía tienen todo esto en cuenta, ya que medimos y corregimos los campos que impulsan la fisiología y fomentamos las opciones de estilo de vida que apoyan la buena salud.</p>
      </div>
    </div>
  </div>
</section>
<section class="marge margen" style="background-color: rgba(3, 169, 244, 0.3); color: #616161;">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 ">

        </div>
      <div class="col-lg-6 cuadro">
        <h2 align="justify" class="titu" style="  color: white;">NES Health lidera el mundo en BioEnergetiX. Pero comenzamos nuestro viaje en 2003 con una pregunta humilde ...</h2>
        <br> <h6 align="justify" class="titu" style=" font-size:18px;  color: white;">¿Cómo podemos ayudar a alguien a sanar si están demasiado enfermos para levantarse de la cama?</h6>
        <br> <p align="justify" class="font-weight-normal  j">
            Inspirados por esta pregunta, hemos trabajado incansablemente para crear nuestro Sistema BioEnergetiX WellNES que restaura la salud en los tres niveles del ser humano: nuestra información, nuestra energía y nuestra fisiología. También hemos creado el primer dispositivo de escaneo remoto, junto con un programa asequible de suscripción a Drop Ship, que permitirá que cualquier persona, sin importar cuán enferma o inmovilizada, reciba servicios y productos de salud desde la comodidad de su hogar.
          </p>
        <p align="justify" class="font-weight-normal  j">
        <a href="{{route('acercade')}}">Conozca más sobre NES Health y nuestra misión aquí. </a>
        </p>

      </div>
    </div>


  </div>
</section>
<section id="about" class="marge ">
<div class="container  ">
  <div class="row">
    <div class="col-lg-2 text-center text-muted">
    </div>
    <div class="col-lg-8 text-center text-muted">
      <h2  align="center" class="service-heading titull" ><strong> Testimonios</strong></h2>
      <br><br><br>

    </div>
    <div class="col-lg-2 text-center text-muted">

    </div>
  </div>
  <div class="row "  align="center">
    <div class="col-sm-4">
      <div class="team-member">

        <h4>{{$test1->nombre}}</h4><hr>
        <p class="text-muted font-italic text-uppercase" >{{$test1->profesion}} </p>
        <p class="text-muted">"{{$test1->testimonio}}"</p>
        <ul class="list-inline social-buttons">
          <li class="list-inline-item">

          </li>
          <li class="list-inline-item">
            <a href="{{route('testimonios')}}">
              <i class="fa fa-quote-left"></i>
            </a>
          </li>
          <li class="list-inline-item">

          </li>
        </ul>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="team-member">
        <h4>{{$test2->nombre}}</h4><hr>
        <p class="text-muted font-italic text-uppercase">{{$test2->profesion}} </p>
        <p class="text-muted">"{{$test2->testimonio}}"</p>
        <ul class="list-inline social-buttons">
          <li class="list-inline-item">

          </li>
          <li class="list-inline-item">
            <a href="{{route('testimonios')}}">
              <i class="fa fa-quote-left"></i>
            </a>
          </li>
          <li class="list-inline-item">

          </li>
        </ul>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="team-member">
        <h4>{{$test3->nombre}}</h4><hr>
        <p class="text-muted font-italic text-uppercase">{{$test3->profesion}} </p>
        <p class="text-muted">"{{$test3->testimonio}}"</p>
        <ul class="list-inline social-buttons">
          <li class="list-inline-item">

          </li>
          <li class="list-inline-item">
            <a href="{{route('testimonios')}}">
              <i class="fa fa-quote-left"></i>
            </a>
          </li>
          <li class="list-inline-item">

          </li>
        </ul>
      </div>
    </div>




  </div>

</div>
</section>


<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Contáctenos</h2>
        <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <form id="contactForm" name="sentMessage" novalidate="novalidate" action="{{ route('mensaje')}}" method="post">
            {{csrf_field()}}
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input class="form-control" name="nombre" id="name" type="text" placeholder="Nombre *" required="required" data-validation-required-message="Poe favor, ingrese su nombre.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input class="form-control" name="email" id="email" type="email" placeholder="Correo *" required="required" data-validation-required-message="Por favor, ingrese su correo electronico.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input class="form-control" id="asunto" name="asunto" type="text" placeholder="Asunto *" required="required" data-validation-required-message="Asunto">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <textarea class="form-control" id="message" name="mensaje" placeholder="Mensaje *" required="required" data-validation-required-message="Por favor, ingrese su mensaje"></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultUnchecked" name="suscripcion">
                    <label class="custom-control-label" for="defaultUnchecked" style="color: white !important">Recibir novedades de la pagina</label>
                </div>
              <div id="success"></div>
              <button  class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar Mensaje</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
  @endsection
