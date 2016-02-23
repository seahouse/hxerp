@extends('navbarerp')

@section('main')
    <h1>添加物料</h1>
    <hr/>
    
    {!! Form::open(['url' => '/bomitems']) !!}
        @include('bomitems._form', ['parentSelected' => $parentid, 'submitButtonText' => '添加'])
    {!! Form::close() !!}
    
    @include('/errors.list')
@stop
