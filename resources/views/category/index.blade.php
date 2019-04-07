@extends('admin.layout.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Index Page') }}
                </div>
               
                <div class="card-body">
                	<table class="table">
                		<thead class="thead-dark">
                			<tr>
                				<th scope="col">#</th>
                				<th scope="col"><a href="{{url('category/{category}')}}">Category Name</a></th>
                				<th scope="col">Process</th>
                			</tr>
                		</thead>
                		<tbody>
                			@foreach($categories as $category)
                			<tr>
                				<th scope="row">{{$category->id}}</th>
                				<td>{{$category->name}}</td>
                				<td>
                				<form action="{{url('category/'.$category->id)}}" method="POST" onSubmit="if(!confirm('Do you sure to delete?')){return false;}">
                                @csrf
                                <input type="hidden" name="_method" value="Delete">
                				<a href="{{url('category/'.$category->id.'/edit')}}">
                					<button type="button" class="btn btn-warning">Edit</button>
                				</a>	

                					<button type="summit" class="btn btn-danger">Delete</button>

                				</form>

                				</td>
                			</tr>
                			@endforeach
                		</tbody>
                	</table>
                	<a href="{{url('category/create')}}"><button type="button" class="btn btn-success">Create</button></a>
                
                </div>

            </div>
           
            <div class="row">                	
              		<div class="col-md-6 offset-md-3 offset-lg-5">
                        {{$categories->links()}}
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
