@extends('layouts.master')

@section('content')
    @include('partials.errors')
    <div class="row">
        <h3>Edit Product</h3>
        <div class="col-md-12">
            <form action="{{route('admin.update')}}" id="editItem" class="productForm" method="post">
                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" class="form-control" id="name" name="name"
                           value="{{$item->name}}">
                </div>
                <div class="form-group">
                    <label for="content">Price</label>
                    <input type="text" class="form-control" id="price" name="price"
                           value="{{$item->price}}">
                </div>

                <div class="form-group">
                    <label for="content">Description</label>
                    <input type="text" class="form-control" id="description" name="description"
                           value="{{$item->description}}">
                </div>
                <div class="form-group">
                    <label for="content">Select Category</label><br />

                    <select name="category" id="category" form="editItem">
                        <option value="">Choose a Category</option>
                        <option value="Shoes">Shoes</option>
                        <option value="Dresses">Dresses</option>
                        <option value="Tights">Tights</option>
                        <option value="Leotards">Leotards</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="content">Image</label>
                    <input type="url" class="form-control" id="imgUrl" name="imgUrl"
                           value="{{$item->imgUrl}}">
                </div>
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$itemId}}">
                <button type="submit" class="btn btn-success">Submit</button>
            </form>

        </div>
    </div>
@endsection