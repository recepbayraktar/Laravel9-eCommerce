@php
    $parentCategories = App\Http\Controllers\HomeController::categoryList();
@endphp

@foreach ($parentCategories as $rs)

<li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="">
        {{ $rs->title }}
      </a>

      <ul class="dropdown-menu">
        <!-- BEGIN DROPDOWN MENU -->
        @if (count($rs->children))
                @include('home._category_tree',['children' => $rs->children])
        @endif
      <!-- END DROPDOWN MENU -->
      </ul>
</li>
@endforeach
