@extends('admin.layouts.main')

@section('head')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ ADMIN('plugins/datatables/dataTables.bootstrap.css') }}">
@endsection



@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Album
                <small>advanced tables</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Album</li>
            </ol>
        </section>


        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Album</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th> Title </th>

                                    <th> Time </th>
                                    <th> Views </th>

                                    <th> Actions </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($albums as $album)


                                    <tr>
                                        <td> {{ $album->title }} </td>
                                        <td> {{ date('Y-m-d H:i:s',$album->time) }}  </td>
                                        <td > {{ $album->visit }} </td>
                                        <td>


                                            <a class="btn btn-app" href="/admin/ablums/update?id={{ $album->id }}" >
                                                <i class="fa fa-edit"></i> Edit
                                            </a>

                                            <a class="btn btn-app delete_article"  data-id="{{ $album->id }}" >
                                                <i class="fa fa-remove"></i> Remove
                                            </a>


                                        </td>
                                    </tr>
                                @endforeach


                                </tbody>
                                <tfoot>
                                <tr>
                                    <th> Title </th>

                                    <th> Time </th>
                                    <th> Views </th>

                                    <th> Actions </th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>

                </div>
            </div>

        </section>

    </div>


@endsection

@section('after')

    <!-- DataTables -->
    <script src="{{ ADMIN('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ ADMIN('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

    <!-- page script -->
    <script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>

    <script>
        $(document).ready(function() {

            $('.delete_article').click(function(){
                if( !confirm('确定删除吗?')){
                    return;
                }
                var id = $(this).data('id');
                window.location.href = '/admin/albums/del?id='+id;
            })
        });
    </script>
@endsection