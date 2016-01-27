@extends('navbar')

@section('main')
    <h1>编辑信息</h1>
    <hr/>
    
    {!! Form::model($accountingorder1, ['method' => 'PATCH', 'action' => ['Accountingorder1sController@update', $accountingorder1->id]]) !!}
        @include('accountingorder1s._form', ['submitButtonText' => '更新信息'])
    {!! Form::close() !!}
    
    @include('errors.list')
@stop