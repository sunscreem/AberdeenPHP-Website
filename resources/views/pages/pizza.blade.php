@extends('layouts.main')

@section('content')

<div class="container about">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h1>Pizza</h1>
            <p>It's the BEST isn't it?</p>
            <form action="{{ route('pizza-search') }}" method="get" class="form-inline">
                <p>Search for toppings: 
                   <input class="form-control" name="q">
                   <button type="submit" class="searchbutton">Search</button>
                </p>
            </form>
            <hr>
            @if (isset($results))
                <ul>
                    @forelse($results as $result)
                        <li>{{ $result }}</li>
                    @empty
                        No results found
                    @endforelse
                </ul>
            @endif
        </div>
    </div>
            

</div>

@endsection
