@extends('back.template1')

@section('main')

	@include('back.partials.entete', ['title' => 'Product ', 'icone' => 'product', 'fil' => 'Product'])
         
        
        @include('back.product.create')
        
        @include('back.product.table')
       
@stop


