@extends('back.template1')

@section('main')

	@include('back.partials.entete', ['title' => 'Product Report', 'icone' => 'product', 'fil' => 'Product'])
         
        
       
        @include('back.product._reportForm')
        
        @include('back.product._reportResult')
       
@stop


