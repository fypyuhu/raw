@extends('back.template1')

@section('main')

	@include('back.partials.entete', ['title' => 'Material Report ', 'icone' => 'material', 'fil' => 'Material'])
         
        
        @include('back.material._reportForm')
        
        @include('back.material._reportResult')
       
@stop


