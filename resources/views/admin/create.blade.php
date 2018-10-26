@extends('layouts.master')

@section('content')
    @include('partials.errors')
    <div class="row">
        <h3>Add a New Product</h3>
        <div class="col-md-12">
            <form action="{{route('admin.create')}}" id="createItem" class="productForm" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="content">Price</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="form-group">
                    <label for="content">Description</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>

                <div class="form-group">
                    <label for="content">Select Category</label><br/>

                    <select name="category" id="category" form="createItem">
                        <option value="">Choose a Category</option>
                        <option value="Shoes">Shoes</option>
                        <option value="Dresses">Dresses</option>
                        <option value="Tights">Tights</option>
                        <option value="Leotards">Leotards</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="content">Image Url</label>
                    <input type="url" class="form-control" id="imgUrl" name="imgUrl">
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
@endsection