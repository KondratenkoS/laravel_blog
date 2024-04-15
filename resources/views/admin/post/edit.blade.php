@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редагувати пост</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v2</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <form action="{{ route('admin.post.update', $post->id) }}" method="POST" class="col-3">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Назва посту"
                            value="{{ $post->title }}">
                            @error('title')
                                <div class="text-danger">Поле має бути заповнено!</div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-block btn-success col-3" value="Оновити">
                    </form>
                </div>
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection