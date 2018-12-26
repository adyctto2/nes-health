@extends('layout.layoutTest')
@section('formTest')

  <div class="container j">

      <div class="col-lg-12 text-muted">
        <br><br>
          <h2   class="service-heading titull" style=" font-size:35px;">Lo que dicen los clientes sobre NES Health</h2>
       <p align="justify" class="font-weight-normal  j">
      Nos gustaría compartir solo algunos de los comentarios y opiniones que hemos recibido de clientes que han experimentado una curación con su profesional de la salud de NES.
      </p>
      @foreach($tests as $test)
        <h2 align="left"  class="service-heading titull" style=" font-size:22px;">{{$test->nombre}}, {{$test->profesion}}</h2>
        <ul>
          <dd>"{{$test->testimonio}}"</dd>
        </ul>
        @endforeach



        <br>

    </div>
  </div>





@endsection
