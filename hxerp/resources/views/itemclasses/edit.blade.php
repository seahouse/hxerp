@extends('navbarerp')

@section('main')
    <h1>编辑物料类别</h1>
    <hr/>
    
<!--     {!! Form::open(['method' => 'PATCH', 'action' => ['ItemclassesController@update', $itemclass->id]]) !!} -->
    {!! Form::model($itemclass, ['method' => 'PATCH', 'action' => ['ItemclassesController@update', $itemclass->id]]) !!}
        @include('itemclasses._form', ['submitButtonText' => '保存'])
    {!! Form::close() !!}
    
    @include('errors.list')
@stop
