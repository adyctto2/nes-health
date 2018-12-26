@extends('layout.layoutCont')
@section('formCont')

<section id="" class="wow fadeInUp">
    <div class="container j">
      <!-- <div class="section-header">
        <h2>Contactanos</h2>
        <p>descripcion de contactos</p>
      </div> -->

      <div class="row contact-info text-center">

        <div class="col-md-4">
          <div class="contact-address">
              <a data-toggle="modal" data-target="#exampleModalCenter"><i style="color:#ffc107 ;" class="fa fa-map-marker fa-4x" aria-hidden="true"></i></a>
            <br><br> <h3>Dirección</h3>
            <address>Calle 13 N°. 44, Irpavi. La Paz - Bolivia</address>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-phone">
            <i style="color:#ffc107 ;" class="fa fa-phone fa-4x" aria-hidden="true"></i>
            <br><br> <h3>Telefono</h3>
            <p>+591 72031454</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-email">
            <i class="fa fa-envelope fa-4x"  aria-hidden="true" style="55px;color:#ffc107  ;"></i>
            <br><br> <h3>Email</h3>
            <p>info@NesHealthBolivia.com</p>
          </div>
        </div>

      </div>
    </div>


<!-- Modal ubicacion -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Nuestra Ubicación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15035.817365845083!2d-65.74977187729495!3d-19.586456693351934!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f94e7a742dc163%3A0xf0943a56bebdf962!2sCasa+Nacional+de+la+Moneda!5e0!3m2!1ses!2sbo!4v1538677444749" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
  </section><!-- #contact -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <!-- <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contáctenos</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div> -->
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Nombre *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Correo *" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Celular *" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Mensaje *" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar Mensaje</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>




@endsection
