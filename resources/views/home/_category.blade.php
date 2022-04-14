@php
    $parentCategories = App\Http\Controllers\HomeController::categoryList();
@endphp

@foreach ($parentCategories as $rs)
    <li class="has-megasubmenu">
       <a class="dropdown-item" href="{{ route('productCatalog', ['id' => $rs->id , 'slug' => $rs->title]) }}"> {{ $rs->title }} </a>

           <div class="megasubmenu dropdown-menu">
               <div class="row">
                @if (count($rs->children))
                    @include('home._category_tree',['children' => $rs->children])
                </div><!-- end row -->
                @endif
            </div>

    </li>
@endforeach
