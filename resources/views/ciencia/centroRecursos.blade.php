@extends('layout.layoutCRec')
@section('formCRec')

<!--

  <hr class="mb-5 mt-4"> -->
<br><br>
  <div class="container">

      <div class="col-lg-12 text-muted ">
        <br><br>
        <br> <h2 align="left"  class="service-heading titull" style="  font-size:22px;">Artículos científicos de NES Health</h2><br>
        @foreach($recur as $rec)

      <a href="{{asset('img/pdf/'. $rec->archivo)}}" target="_blank"><p class="font-weight-normal  j" style="padding-left:48px;"><i class="fa fa-file"></i> {{$rec->titulo}}</p> </a>
      @endforeach
        <br> <h2 align="left"  class="service-heading titull" style="  font-size:22px;">Trabajos científicos de científicos y autores internacionales</h2><br>
      @foreach($recurs as $recur)

    <a href="{{asset('img/pdf/'. $recur->archivo)}}" target="_blank" ><p class="font-weight-normal  j" style="padding-left:48px;"><i class="fa fa-file"></i> {{$recur->titulo}}</p> </a>
    @endforeach
        <br>

    </div>
  </div>





@endsection
