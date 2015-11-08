@extends('back.template1')

@section('main')

	@include('back.partials.entete', ['title' => 'Raw Material', 'icone' => 'material   ', 'fil' => 'Material'])
        
        @include('back.material.create')
        @include('back.material.table')
        
@stop


