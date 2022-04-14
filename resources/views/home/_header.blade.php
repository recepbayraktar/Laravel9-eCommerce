@php
    $setting = App\Http\Controllers\HomeController::getSetting();
@endphp

<div id="carouselExampleControls" class="carousel slide mt-5" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($slider as $rs)
            <div class="carousel-item {{$loop->iteration == 1 ? 'active' : ''}}">
                <div class="row">
                    <div class="col-sm-8">
                        <img class="d-block rounded border shadow ml-auto" style="height: 400px; width: 800px;" src="{{ Storage::url($rs->image)  }}" alt="First slide">
                    </div>
                    <div class="col-sm-2">
                        <h1>{{ $rs->title }}</h1>
                        <a href="{{ route('aboutus', ['id' => $rs->id, 'slug' => $rs->slug]) }}">link</a>
                    </div>
                    <div class="col-sm-2">
                    </div>
                </div>
            </div>
            @endforeach
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
