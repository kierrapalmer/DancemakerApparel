@extends('layouts.master')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent pb-0">
            <li class="breadcrumb-item"><a href="{{route('store.index')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#">{{$item->category}}</a></li>
        </ol>
    </nav>
    <hr>

    <div class="container">
    <div class="row mb-4">
        <div class="col-md-6">
            <img src="{{$item->imgUrl}}" alt="productImage">

        </div>
        <div class="col-md-6">
            <h2 class="detail-name">{{ $item->name  }}</h2>
            <hr>
            <p class="detail-price">${{$item->price}}</p>
            <select name="qty" id="qty">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <input type="button" class="btn btn-accent detail-btn" value="Add to Bag">
            <hr>
            <p>{{$item->description}}</p>
        </div>
    </div>
    </div>
@endsection