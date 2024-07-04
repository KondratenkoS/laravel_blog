@extends('user.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Головна сторінка</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Головна</li>
                        </ol>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <a href="{{ route('user.like.index') }}" class="info-box">
                            <span class="info-box-icon bg-danger elevation-1"><i class="nav-icon fas fa-heart"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Пости які вам сподобались</span>
                                <span class="info-box-number">12</span>
                            </div>
                            <!-- /.info-box-content -->
                        </a>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <a href="{{ route('user.comment.index') }}" class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="nav-icon fas fa-comment"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Ваші коментарі</span>
                                <span class="info-box-number">5</span>
                            </div>
                            <!-- /.info-box-content -->
                        </a>
                        <!-- /.info-box -->
                    </div>
                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>
                </div>
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
