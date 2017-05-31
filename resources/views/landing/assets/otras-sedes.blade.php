<?php
$sedes = [
  ['Caballito','caballito',['Hipólito Yrigoyen 4321','Tel: 4982-0889 / 4958-8088','Mail: caballito@americansport.com.ar']],
  ['Flores','flores',['Boyaca 92','Tel: 4633-1156 / 4631-1384','Mail: boyaca@americansport.com.ar']],
  ['Quilmes','quilmes',['Lavalle y Humberto Primo','(Centro Comercial 1°piso)','Tel: 4254-6347','Mail: quilmes@americansport.com.ar']]
];

?>


<div class="sedes">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">


      @foreach($sedes as $sede)
      <div class="sede col-sm-4">
        <div class="wrapper">
          <img src="/img/landing/sedes/sede_{{$sede[1]}}.jpg" alt="">
          <p class="title">{{$sede[0]}}</p>
          <ul>
          @foreach($sede[2] as $item)
          <li>{{$item}}</li>
          @endforeach
          </ul>
        </div>
      </div>
      @endforeach
      </div>

    </div>

  </div>

</div>
