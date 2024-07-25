@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Головна сторінка</h1>
                        <a href="{{ route('main.index') }}"><h4>До постів</h4></a>
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
                        <a href="{{ route('admin.user.index') }}" class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Користувачі</span>
                                <span class="info-box-number">{{ $data['usersCount'] }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </a>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <a href="{{ route('admin.post.index') }}" class="info-box">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Пости</span>
                                <span class="info-box-number">{{ $data['postsCount'] }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </a>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <a href="{{ route('admin.category.index') }}" class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Категорії</span>
                                <span class="info-box-number">{{ $data['categoriesCount'] }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </a>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <a href="{{ route('admin.tag.index') }}" class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Теги</span>
                                <span class="info-box-number">{{ $data['tagsCount'] }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </a>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
