@extends('admin.admin_template')

@section('content')

<div class='row'>
    <div class='col-md-6'>
        <!-- Box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">информация о заведении</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">


            </div><!-- /.box-body -->
            <div class="box-footer">
                <form action='/admin/edit/place' method='post'>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <textarea name='place_desc' placeholder='краткое описание вашего заведения' class='form-control input-sm'></textarea>
                    <input name='place_title' type='text' placeholder='название заведения' class='form-control input-sm' />
                    <input name='place_title_desc' type='text' placeholder='дополнительное описание заведения' class='form-control input-sm' />
                    <input name='place_type' type='text' placeholder='тип заведения' class='form-control input-sm' />
                    <input name='work_time' type='text' placeholder='график работы' class='form-control input-sm' />

                    <button type='submit' class='btn btn-primary'>сохранить</button>
                </form>
            </div><!-- /.box-footer-->
        </div><!-- /.box -->
    </div><!-- /.col -->


</div><!-- /.row -->

@endsection
