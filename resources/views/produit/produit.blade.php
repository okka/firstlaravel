@extends('master')
@section('content')
<div class="container" style="opacity:0.9">
    <div class="row">
    @foreach($sections as $produit)
    <div class="col-md-3">
        <div class="thumbnail">
            <img src="/img/{{$produit->img}}">
            <h1><a class="btn btn-primary">{{$produit->name}}</a>{{$produit->prix}}</h1>
            
        </div>
    </div> 
    @endforeach   
    </div>
</div>
@stop