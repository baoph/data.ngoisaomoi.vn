@extends('backend.master')
@section('title')
    <h1 class="page-header">Danh sách Source UTM</h1>
@stop
@section('content')
<!-- /.row -->

<aside class="right-side">
            <!-- Content Header (Page header) -->
            
            <!-- Main content -->
            <section class="content">

                <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> Danh sách Source UTM
            </div>
            <!-- /.panel-heading -->
            <table border="1" style="width: 100%;padding: 5px;">
                <tr>
                    <th>STT</th>
                    <th>Source UTM</th>
                    <th>Hành động</th>
                </tr>
                @php $count = 1; @endphp
                @foreach($todo_items as $item )
                @if($item->utm_source != '')
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $item->utm_source }} </td>
                    <td><a  href="{!! URL::route('getFormChangeUTM', $item->utm_source ) !!}" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Chỉnh sửa"><i class="fa fa-pencil fa-fw"></i></a></td>
                </tr>
                @endif
                @endforeach
            </table>
                        
        </div>

              
            </section><!-- /.content -->
        </aside><!-- /.right-side -->



@stop
