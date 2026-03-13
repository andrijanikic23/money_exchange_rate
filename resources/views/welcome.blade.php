@extends('layout')

@section('content')

    <form method="GET" action="{{ route('rate.requested') }}">

        <select name="from">
            <option disabled selected>Which currency</option>
            @foreach($rates as $rate)
                <option value="{{ $rate[0] }}">{{ $rate[1] }}</option>
            @endforeach()
        </select>

        <select name="in">
            <option disabled selected>To currency</option>
            @foreach($rates as $rate)
                <option value="{{ $rate[0] }}">{{ $rate[1] }}</option>
            @endforeach()
        </select>

        <button>Convert</button>

    </form>



@endsection
