@extends('admin.admin_template')

@section('content')


<div class='row'>
    <div class='col-md-6'>
        <!-- Box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">контакты заведения</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">


            </div><!-- /.box-body -->
            <div class="box-footer">
                <form action='/admin/edit/contacts' method='post'>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input name='gx' type='text' placeholder='координаты для карт в google map X' class='form-control input-sm' />
                    <input name='gy' type='text' placeholder='координаты для карт в google map Y' class='form-control input-sm' />
                    <textarea name='desc' placeholder='описание вашего заведения' class='form-control input-sm'></textarea>
                    <input name='link_vk' type='text' placeholder='ссылка в вк' class='form-control input-sm' />
                    <input name='link_fb' type='text' placeholder='ссылка в фейсбук' class='form-control input-sm' />
                    <input name='link_inst' type='text' placeholder='ссылка в инстаграм' class='form-control input-sm' />
                    <input name='link_tw' type='text' placeholder='ссылка твиттер' class='form-control input-sm' />
                    <input name='tel1' type='text' placeholder='номер телефона 1' class='form-control input-sm' />
                    <input name='tel2' type='text' placeholder='номер телефона 2' class='form-control input-sm' />
                    <button type='submit' class='btn btn-primary'>сохранить</button>
                </form>
            </div><!-- /.box-footer-->
        </div><!-- /.box -->
    </div><!-- /.col -->


</div><!-- /.row -->
@endsection
