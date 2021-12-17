
@foreach($children as $subcategory)

    <li class="dropdown-submenu">
        @if(count($subcategory->children))
        <a tabindex="-1">{{$subcategory->title}}</a>
            <ul class="dropdown-menu">
           @include('home.categorytree', ['children'=>$subcategory->children])

        </ul>
        @else
            <li><a href="{{route('categorybooks', ['id'=>$subcategory->id, 'slug'=>$subcategory->slug])}}">{{$subcategory->title}}</a></li>
        @endif
    </li>

@endforeach
