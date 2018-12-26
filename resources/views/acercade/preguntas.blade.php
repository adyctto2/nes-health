@extends('layout.layoutPreg')
@section('formPreg')

<div class="container j">
  <br>
  <div class="row j">
    <div class="col-3">
      <div class="list-group" id="list-tab" role="tablist">
        <h2  align="center"  class="service-heading titull" style="font-size:22px;">Categorias</h2>
        @foreach($categorias as $cat)
          <a class="list-group-item list-group-item-action menuacerca" id="list-{{$cat->id}}-list" data-toggle="list" href="#list-{{$cat->id}}" role="tab" aria-controls="cat{{$cat->id}}">{{$cat->nombre_cat}}</a>
        @endforeach
      </div>
    </div>
    <div class="col-9">
      <div class="tab-content " id="nav-tabContent">
        <h2  align="center"  class="service-heading titull" style="font-size:22px;">Preguntas</h2>
        @foreach($categorias as $cat)
          <div class="tab-pane fade " id="list-{{$cat->id}}" role="tabpanel" aria-labelledby="list-{{$cat->id}}-list">
            @php
              $variable = \App\Preguntas::where('id_categoria','=',$cat->id)->get();
            @endphp


            @foreach($variable as $v)

            <h5 class="font-weight-normal"><strong>{{$v->pregunta}}</strong> </h5>

            <p align="justify" class="font-weight-light">
              {{$v->respuesta}}
            </p>
            <hr>
            @endforeach
          </div>
        @endforeach
      </div>
    </div>
  </div>
  <br><br>
</div>

@endsection
