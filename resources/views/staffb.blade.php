@extends('template.default')

@section('title', $title)

@section('content')
    <h1>
        whit blade
    {{$title}}
    </h1>
    {{--
    commento
    --}}

    @if ($staff)
        <ul>
            @foreach ($staff as $person)

                <li> {{$person['name']}} {{$person['lastname']}}</li>
            @endforeach
        </ul>
    @endif

    @forelse($staff as $person)
        <li> {{$person['name']}} {{$person['lastname']}}</li>
    @empty
        <li>no staff</li>
    @endforelse

    <h2>staff for</h2>
    @for($i=0;$i<count($staff); $i++)
        {{$staff[$i]['name']}}
    @endfor

    @while($person=array_pop($staff))
        {{$person['name']}}
    @endwhile

    @while($person=array_shift($staff))
        {{$person['name']}}
    @endwhile

@endsection



@section('footer')
    @parent
<script>

    alert('footer');
</script>
@stop