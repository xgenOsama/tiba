@extends('layouts.admin')
@section('content')
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption"><i class="icon-cogs"></i>عرض البيانات</div>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="javascript:;" class="remove"></a>
        </div>
    </div>
    <div class="portlet-body flip-scroll">
        <table class="table-bordered table-striped table-condensed flip-content">
            <thead class="flip-content">
                <tr>
                    <th>#</th>
                    <th>صوره</th>
                    <th>
                        عمليات
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 1; ?>
                @foreach($subscribers as $subscriber)
                <tr>
                    <td>{{$count}}</td>
                    <td>{{$subscriber->name}}</td>
                    <td>{{$subscriber->email}}</td>
                    <td>
                        {!! Form::open(['method' => 'DELETE', 'route'=>['admin.subscribers.destroy', $subscriber->id]]) !!}
                        {!! Form::submit('حذف', ['class' => 'btn red','onclick'=>'return confirm(".تأكيد الحذف ؟");']) !!}
                        {!! Form::close() !!}
                </tr>
                <?php $count++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
