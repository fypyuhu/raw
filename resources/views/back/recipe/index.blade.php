@extends('back.template1')

@section('main')

	@include('back.partials.entete', ['title' => 'Recipe ', 'icone' => 'recipe', 'fil' => 'Product Name'])
         
        
        @include('back.recipe.create')
        
        @include('back.recipe.table')
       
@stop


