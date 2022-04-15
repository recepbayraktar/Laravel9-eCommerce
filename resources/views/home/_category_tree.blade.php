@foreach ($children as $subcategory)
        <li>
            @if (count($subcategory->children))

                <li><a href="{{ route('categoryProducts', ['id' => $subcategory->id , 'slug' => $subcategory->title]) }}">{{ $subcategory->title }}</a></li>
                <ul class=" dropdown-menu dropright">
                        @include('home._category_tree', ['children' => $subcategory->children])
                </ul>
            @else
                <li><a href="{{ route('categoryProducts', ['id' => $subcategory->id , 'slug' => $subcategory->title]) }}">{{ $subcategory->title }}</a></li>
            @endif
        </li>
@endforeach
