<div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <!-- BEGIN FORM-->
        <form class="reviews-form" wire:submit.prevent="store" role="form">
          @csrf
            <h2>Write a review</h2>
          <div class="form-group">
            <label for="subject">subject <span class="require">*</span></label>
            <input type="text" wire:model="subject" class="form-control" id="subject">
          </div>
          <div class="form-group">
            <label for="review">Review <span class="require">*</span></label>
            <textarea wire:model="review" class="form-control" rows="8" id="review"></textarea>
          </div>
          <div class="form-group">
            <div class="rate">
                <input type="radio" id="star5" name="rate" wire:model="rate" value="5" />
                <label for="star5" title="text">5 stars</label>
                <input type="radio" id="star4" name="rate" wire:model="rate" value="4" />
                <label for="star4" title="text">4 stars</label>
                <input type="radio" id="star3" name="rate" wire:model="rate" value="3" />
                <label for="star3" title="text">3 stars</label>
                <input type="radio" id="star2" name="rate" wire:model="rate" value="2" />
                <label for="star2" title="text">2 stars</label>
                <input type="radio" id="star1" name="rate" wire:model="rate" value="1" />
                <label for="star1" title="text">1 star</label>
              </div>
          </div>
          <div class="padding-top-20">
            @auth
            <input type="submit" value="submit" class="btn btn-primary"/>

            @else
                <a href="/login">Login</a>
            @endauth
          </div>
        </form>
        <!-- END FORM-->
      </div>
</div>
