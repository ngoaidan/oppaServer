@extends('main.main')



@section('body_right')


<div class="">
    <div class="page-title">

        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-left top_search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table table-striped responsive-utilities jambo_table">
                        <thead>
                            <tr class="headings">
                                
                                <th>Mã BN </th>
                                <th>Tên bệnh nhân</th>
                                <th>Thời gian nhận</th>
                                <th>Địa điểm nhận</th>
                                <th>Thao tác</th>
                                
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($model as $value) {
                                ?>
                                
                                <tr class="even pointer">
                                    
                                    <td class="col-md-2 col-sm-2 col-xs-2">{{ $value->maBn }}</td>
                                    <td class=" ">{{ $value->name}} <i class="success fa fa-long-arrow-up"></i>
                                        <td class=" ">{{ $value->created_at}}</td>
                                    </td>
                                    <td class="col-md-3 col-sm-3 col-xs-3">Tại quầy</td>
                                    <td class="">
                                        <button type="button" class="btn btn-primary" onclick="location.href='{{url('/cho-xu-ly/')}}/{{ $value->id }}';">Đáp ứng</button>
                                        <button type="button" class="btn btn-warning" onclick="location.href='{{url('/cho-xu-ly/xoa/')}}/{{ $value->id }}';">Không đáp ứng</button>
                                    </td>

                                </tr>
                                
                                <?php } ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

            <br />
            <br />
            <br />

        </div>
    </div>
    <!-- footer content -->
    <footer>
        
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
    
</div>
<!-- /page content -->

@stop


@section('import_js')

@stop
