<div class="galeria">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-8 col-xs-offset-2">
        <div class="extra-slider slider-galeria">
          <div class="wrapper ">
            <ul>
              <?php $fotos=[1,2,3,4,5,6,7,8,9,10,11];?>
              @foreach($fotos as $f)
              <li class="item">
                <img class=""  src="/img/landing/barrio_norte/galeria/galeria_{{$f}}.jpg" alt="">
              </li>
              @endforeach

            </ul>
          </div>
          <div class="navigation">
            <a href="#" class="prev"><i class="material-icons">keyboard_arrow_left</i></a>
            <a href="#" class="next"><i class="material-icons">keyboard_arrow_right</i></a>
          </div>
          <div class="pagination"></div>
          <div class="carousel-border">

          </div>
        </div>

      </div>

    </div>

  </div>

</div>
