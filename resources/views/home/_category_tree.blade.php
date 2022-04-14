@foreach ($children as $subcategory)
    <div class="col-6">
        <ul class="list-unstyled">
            @if (count($subcategory->children))
                <li><a href="{{ route('productCatalog', ['id' => $rs->id , 'slug' => $rs->title]) }}">{{ $subcategory->title }}</a></li>
                <ul class="list-unstyled">
                    {{-- @include('home._category_tree') --}}
                </ul>
            @else
                <li><a href="{{ route('productCatalog', ['id' => $rs->id , 'slug' => $rs->title]) }}">{{ $subcategory->title }}</a></li>
            @endif

        </ul>
    </div>
@endforeach
