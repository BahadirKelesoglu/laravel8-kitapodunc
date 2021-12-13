
@foreach($children as $subcategory)

    <li class="dropdown-submenu">
        @if(count($subcategory->children))
        <a tabindex="-1" href="#">{{$subcategory->title}}</a>
            <ul class="dropdown-menu">
           @include('home.categorytree', ['children'=>$subcategory->children])

        </ul>
        @else
            <li><a href="#">{{$subcategory->title}}</a></li>
        @endif
    </li>

@endforeach
