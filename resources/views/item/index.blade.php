@extends('admin.layout.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Item Index Page') }}
                </div>
               
                <div class="card-body">
                	<table class="table">
                		<thead class="thead-dark">
                			<tr>

                   				<th scope="col">#</th>
                				<th scope="col"><a href="{{url('item/{item}')}}">Item Name</a></th>
                                <th scope="col">Price</th>
                                <th scope="col">Description</th>
                                <th scope="col"><a href="{{url('category/{category}')}}">Category Name</a></th>
                                <th scope="col"><a href="{{url('subcategory/{subcategory}')}}">SubCategory Name</a></th>
                                <th scope="col"><a href="{{url('brand/{brand}')}}">Brand Name</a></th>
                				<th scope="col">Process</th>
                			</tr>
                		</thead>
                		<tbody>
                			@foreach($items as $item)

                			<tr>
                				<th scope="row">{{$item->id}}</th>
                				<td>{{$item->name}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->category->name}}</td>
                                <td>{{$item->subcategory->name}}</td>
                                <td>{{$item->brand->name}}</td>
                				<td>
                				<form action="{{url('item/'.$item->id)}}" method="POST" onSubmit="if(!confirm('Do you sure to delete?')){return false;}">
                                @csrf
                                <input type="hidden" name="_method" value="Delete">
                				<a href="{{url('item/'.$item->id.'/edit')}}">
                					<button type="button" class="btn btn-warning">Edit</button>
                				</a>	

                					<button type="summit" class="btn btn-danger">Delete</button>

                				</form>

                				</td>
                			</tr>
                			@endforeach
                		</tbody>
                	</table>
                	<a href="{{url('item/create')}}"><button type="button" class="btn btn-success">Create</button></a>
                
                </div>

            </div>
           
            <div class="row">                	
              		<div class="col-md-6 offset-md-3 offset-lg-5">
                        {{$items->links()}}
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
