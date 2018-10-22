@extends('layouts.admin')

@section('content')
    @if(Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">{{ Session::get('info') }}</p>
            </div>
        </div>
    @endif
    <h3>Active Products
    <a href="{{route('admin.create')}}" class="btn btn-accent">Add New Product</a>
    </h3>

    <table class="table">
        <thead>
            <th>Category</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
        <th>Edit</th>
        <th>Delete</th>
        </thead>

        @foreach($items as $item)
            <tr>
                <td>{{$item->category}} </td>
                <td><img src="{{ $item->imgUrl }}" alt="item photo" width="50px" class="admin-photo"></td>
                <td>{{$item->name}} </td>
                <td>${{$item->price}} </td>
                <td class="admin-description">{{$item->description}} </td>
                <td><a href="{{route('admin.edit', ['id' => $item->id] )}}"><i class="fas fa-pencil-alt"></i></a></td>
                <td><a href="{{route('admin.delete', ['id' => $item->id] )}}"><i class="fas fa-trash-alt"></i></a></td>
            </tr>
        @endforeach

    </table>
@endsection