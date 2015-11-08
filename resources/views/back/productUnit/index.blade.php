@extends('back.template1')

@section('main')

	@include('back.partials.entete', ['title' => 'Product Unit', 'icone' => 'product', 'fil' => 'Product Name'])
        
        
        @include('back.productUnit.table')
        @include('back.productUnit.create')
@stop


