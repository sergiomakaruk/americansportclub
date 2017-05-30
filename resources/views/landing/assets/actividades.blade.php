<?php $actividad = 'actividad col-xs-12 col-sm-6 col-md-6 col-lg-3';

$actividades = [
  ['musculacion','rojo',['MUSCULACIÓN']],
  ['cardiovascular','azul',['ÁREA','CARDIOVASCULAR']],
  ['natacion','rojo',['NATACIÓN Y','PILETA LIBRE']],
  ['zumba','azul',['ZUMBA']],
  ['entrenamiento','azul',['ENTRENAMIENTO','FUNCIONAL']],
  ['nutricionista','rojo',['NUTRICIONISTA']],
  ['fitness','azul',['FITNESS','GRUPAL']],
  ['cycling','rojo',['INDOOR','CYCLING']],
];
 ?>
<div class="actividades">
<div class="">
  <div class="row-">
    <div class="col-sm-12">
      <h2>Actividades</h2>
    </div>
    @foreach($actividades as $act)
    <div class="{{$actividad}}">
      <div class="wrapper">
        <div class="titulo">
          @foreach($act[2] as $t)<div><span class="back-{{$act[1]}}">{{$t}}</span></div>@endforeach
        </div>
        <img class="color full-width" src="/img/landing/clases/{{$act[0]}}.jpg" alt="">
        <img class="full-width" src="/img/landing/clases/{{$act[0]}}_b.jpg" alt="">
      </div>
    </div>
    @endforeach

  </div>
</div>
</div>
<div class="clearfix"></div>
