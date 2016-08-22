@extends('master')
@section('content')

<div class="container">
	
<div class="panel panel-default">
	<div class="panel-heading">Managing Produits</div>
	<div class="panel-body">
		<h2><br />Creating new produit</h2><hr />

	<!--form action="libsecon" method="POST" enctype="multipart/form-data">
		{!! csrf_field() !!}
		Enter the prix of the food: <input type="integer" name="prix" /> <br/>
		Upload an image: <input type="file" name="image" />
		<br />

		<button class="btn btn-default" type="submit">
			<img src="{{asset('/img/add.ico')}}" width="25px" height="25px" /> Create
		</button>
	</form-->

	
	{!! Form::open(["url"=>"produit","files"=>"true"]) !!}
	Enter the name of the produit: {!! Form::text("name") !!} <br />
	Enter the prix of the produit: {!! Form::text("prix") !!} <br />
	Upload an image: {!! Form::file("image") !!} <br />
	{!! Form::submit("Create",["class"=>"btn btn-info"]) !!}
	{{ Form::close() }}

	</div>


	@if($sections != null)
		<table class="table">
			<tr>
				<th><h3>Name</h3></th>
				<th><h3>Prix</h3></th>
				<th><h3>Stock</h3></th>
				<th><h3>Update</h3></th>
				<th><h3>Delete</h3></th>
			</tr>
	@foreach($sections as $produit)		

		<tr>
			
	    {!! Form::open(["url"=>"produit/$produit->id","method"=>"patch"]) !!}
	    <td>
	    	<span class="label label-default">{{ $produit->name }}{!! Form::text("name") !!}</span>
	    </td>
	   <td>
	    	<span class="label label-default">{{ $produit->prix }}{!! Form::text("prix") !!}</span>
	    </td>
	    <td>
	    	<span class="label label-default">{{ $produit->stock }}{!! Form::text("stock") !!}</span>
	    </td>
	    <td>
	    	{!! Form::submit("Update",["class"=>"btn btn-success"]) !!}
	    </td>
	    {{ Form::close() }}

	    <td>
	    	 {!! Form::open(["url"=>"produit/$produit->id","method"=>"delete"]) !!}
	    
	    {!! Form::submit("Delete",["class"=>"btn btn-danger"]) !!}
	    
	    {{ Form::close() }}
	    </td>

	    </tr>
	    @endforeach
	    </table>
	    @endif
</div>	
</div>
@stop