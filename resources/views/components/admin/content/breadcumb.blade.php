@foreach($data as $keys => $vals)
    @foreach($vals as $key => $val)
        <li class="breadcrumb-item">
            @if($key !== '#')
                <a href="{{ $key }}"> {{ $val }} </a>
            @else
                {{$val}}
            @endif
        </li>
    @endforeach
@endforeach
