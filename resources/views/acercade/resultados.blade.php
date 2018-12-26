@extends('layout.layoutRes')
@section('formRes')

  <div class="container j">

      <div class="col-lg-12 text-muted">
        <br><br>
       <p align="justify" class="font-weight-normal  j">
        Aquí, en NES Health, sabemos que lo más importante para usted y sus clientes es la confianza de que cualquier sistema de atención o método de curación logrará los resultados que está buscando. Con ese fin, hemos realizado amplias investigaciones , ensayos y estudios de casos para garantizar que nuestro Sistema BioEnergetiX WellNES y sus productos componentes puedan producir resultados cuantificables de manera consistente, con una mejora verificable en todos los factores de salud y métricas que son más importantes para los profesionales y sus clientes.
      </p>
      <p align="justify" class="font-weight-normal  j">
    También hemos recopilado los numerosos testimonios informales y no solicitados que hemos recibido de los profesionales y sus clientes, para que pueda obtener una idea de los resultados y las cualidades de bienestar que la ciencia no puede cuantificar, sin embargo, que son muy importantes para cada uno de ellos. nosotros como seres humanos.
     </p>
    <a href="{{route('testimonios')}}">Lea los testimonios de nuestros clientes</a>

        <br>   <br><p align="justify" class="font-weight-normal  j">
        Como se mencionó anteriormente, también tenemos varios estudios de caso para que explore, para obtener una comprensión más profunda tanto del proceso como de los productos ofrecidos por NES Health. Puede </p>
        <a href="{{route('casosEstudio')}}">acceder a la lista completa de estudios de caso aquí .</a><br>


        <br>

    </div>
  </div>





@endsection
