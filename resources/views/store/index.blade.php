@extends('layouts.master')

@section('content')
    <div class="container">

    <div class="row mt-3">

    @foreach($items as $item)
            <div class="col-md-4 text-center">
                <a href="{{route('store.detail', ['id' => array_search($item, $items)])}}">
                    <img class="item-img" src="{{$item['imgUrl']}}" alt="productImage">
                </a>
                <p><span class="item-name">
                        <a href="{{route('store.detail', ['id' => array_search($item, $items)])}}">{{ $item['name'] }}</a>
                    </span><br/>
                <span class="item-price">$ {{ $item['price'] }}</span><br />
                {{ $item['description'] }}</p>
            </div>
    @endforeach
    </div>

    <hr>
    </div>
@endsection