@extends('navbar')

@section('main')
    <div class="panel-heading">
<!--         <a href="/accountingorder1s/create">新建</a> -->
<!--         <button type="button" class="btn btn-default">Middle</button> -->
    </div>
    
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>标题</th>
                <th>地区</th>
                <th>内容</th>
                <th>发布时间</th>
            </tr>
        </thead>
        <tbody>
            @foreach($accountingorder1s as $accountingorder1)
                <tr>
                    <td>
                        <a href="{{ url('/accountingorder1s', $accountingorder1->id) }}">{{ $accountingorder1->title }}</a>
                    </td>
                    <td>
                        {{ $accountingorder1->status }}
                    </td>
                    <td>
                        {{ $accountingorder1->descrip }}
                    </td>
                    <td>
                        {{ $accountingorder1->created_at }}
                    </td>
                    <td>
                        <a href="{{ url('/accountingorder1s/'.$accountingorder1->id.'/edit') }}" class="btn btn-success btn-mini pull-left">编辑</a>
                        {!! Form::open(array('route' => array('accountingorder1s.destroy', $accountingorder1->id), 'method' => 'delete', 'onsubmit' => 'return confirm("确定删除此记录?");')) !!}
<!--                             <button type="submit" class="btn btn-danger btn-mini">Delete</button> -->
                            {!! Form::submit('删除', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    {!! $accountingorder1s->render() !!}
    
<!--     <nav> -->
<!--         <ul class="pagination"> -->
<!--             <li> -->
<!--                 <a href="#" aria-label="Previous"> -->
<!--                     <span aria-hidden="true">&laquo;</span> -->
<!--                 </a>                 -->
<!--             </li> -->
<!--             <li><a href="#">1</a></li> -->
<!--             <li><a href="#">2</a></li> -->
<!--             <li><a href="#">3</a></li> -->
<!--             <li><a href="#">4</a></li> -->
<!--             <li><a href="#">5</a></li> -->
<!--             <li> -->
<!--                 <a href="#" aria-label="Next"> -->
<!--                     <span aria-hidden="true">&raquo;</span> -->
<!--                 </a> -->
<!--             </li> -->
<!--         </ul> -->
<!--     </nav> -->
@stop
