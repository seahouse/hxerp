@extends('navbar')

@section('main')
    <h1>新建信息</h1>
    <hr/>
    
    {!! Form::open(['url' => '/accountingorder1s']) !!}
        @include('accountingorder1s._form', ['submitButtonText' => '创建信息'])
    {!! Form::close() !!}
    
    @include('errors.list')
@stop
