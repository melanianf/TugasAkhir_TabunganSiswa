@extends('layouts.app')

@section('dashboard')
   LAPORAN
   <small>Laporan per periode</small>
@endsection

@section('breadcrumb')
   <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
   <li class="active">Mutasi</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h2 class="box-title">Laporan per periode</h2>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    {!! $html->table(['class' => 'table table-bordered table-striped']) !!}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection

@section('scripts')
    {!! $html->scripts() !!}
    <script>
    $(function() {
        $("#dataTableBuilder").on('preXhr.dt', function(e, settings, data) {
            data.status = $('select[name="filter_status"]').val();
        });

        $('select[name="filter_status"]').change(function() {
            window.LaravelDataTables["dataTableBuilder"].ajax.reload();
        });
    });
    </script>
@endsection
