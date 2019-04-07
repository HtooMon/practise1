@extends('admin.layout.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Item Edit') }}</div>

                <div class="card-body">
             <form method="POST" action="{{ url('item/'.$items->id) }}">

                        @csrf
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Item Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $items->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Item Price</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ $items->price }}" required autofocus>

                                @if ($errors->has('price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ $items->description }}" required autofocus>

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('desciption') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="category_id" class="col-md-4 col-form-label text-md-right">Category Name</label>

                            <div class="col-md-6">
                                <select class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}" name="category_id" value="{{ old('category_id') }}" required autofocus>
                                    <option>Select Category</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}" @if($category->id == $items->category_id)
                                    selected
                                    @endif>{{$category->name}}</option>
                                @endforeach
                            </select>


                                @if ($errors->has('category_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="subcategory_id" class="col-md-4 col-form-label text-md-right">Subcategory Name</label>

                            <div class="col-md-6">
                                <select class="form-control{{ $errors->has('subcategory_id') ? ' is-invalid' : '' }}" name="subcategory_id" value="{{ old('subcategory_id') }}" required autofocus>
                                    <option>Select Subcategory</option>
                                @foreach ($subcategories as $subcategory)
                                <option value="{{$subcategory->id}}" @if($subcategory->id == $items->subcategory_id)
                                    selected
                                    @endif>{{$subcategory->name}}</option>
                                
                                @endforeach
                            </select>


                                @if ($errors->has('subcategory_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('subcategory_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="brand_id" class="col-md-4 col-form-label text-md-right">Brand Name</label>

                            <div class="col-md-6">
                                <select class="form-control{{ $errors->has('brand_id') ? ' is-invalid' : '' }}" name="brand_id" value="{{ old('brand_id') }}" required autofocus>
                                    <option>Select Brand</option>
                                @foreach ($brands as $brand)
                                <option value="{{$brand->id}}" @if($brand->id == $items->brand_id)
                                    selected
                                    @endif>{{$brand->name}}</option>
                                @endforeach
                            </select>


                                @if ($errors->has('brand_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('brand_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    Save
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
