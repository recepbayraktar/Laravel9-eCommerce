@php
    $setting = App\Http\Controllers\HomeController::getSetting();
@endphp

<div id="carouselExampleControls" class="carousel slide mt-5" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row">
            <div class="col-sm-8">
                <img class="d-block rounded border shadow ml-auto" width="800"  height="600" src="https://picsum.photos/id/37/1200/600" alt="First slide">
            </div>
            <div class="col-sm-2">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui nisi molestiae dignissimos illo dolorum ducimus quos. Quis quidem repellendus tempora?</p>
            </div>
            <div class="col-sm-2">
            </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
            <div class="col-sm-8">
                <img class="d-block rounded border shadow ml-auto" width="800"  height="600" src="https://picsum.photos/id/37/1200/600" alt="First slide">
            </div>
            <div class="col-sm-2">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui nisi molestiae dignissimos illo dolorum ducimus quos. Quis quidem repellendus tempora?</p>
            </div>
            <div class="col-sm-2">
            </div>
        </div>
      </div>
      <div class="carousel-item">
         <div class="row">
            <div class="col-sm-8">
                <img class="d-block rounded border shadow ml-auto" width="800"  height="600" src="https://picsum.photos/id/37/1200/600" alt="First slide">
            </div>
            <div class="col-sm-2">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui nisi molestiae dignissimos illo dolorum ducimus quos. Quis quidem repellendus tempora?</p>
            </div>
            <div class="col-sm-2">
            </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
