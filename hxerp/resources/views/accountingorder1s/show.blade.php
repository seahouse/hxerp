@extends('navbar')

@section('main')
    <h1>{{ $accountingorder1->title }}</h1>
    <p>
       地区: {{ $accountingorder1->status }}
    </p>
    <p>
        描述: {{ $accountingorder1->descrip }}
    </p>
    <p>
        发布日期: {{ $accountingorder1->created_at }}
    </p>
@stop
