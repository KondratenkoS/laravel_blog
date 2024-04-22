@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Додати пост</h1>
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
                    <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group w-50">
                            <input type="text" name="title" class="form-control" placeholder="Назва посту"
                                   value="{{ old('title') }}">
                            @error('title')
                            <div class="text-danger">Поле має бути заповнено!</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea id="summernote" name="content">{{ old('content') }}</textarea>
                            @error('content')
                            <div class="text-danger">Поле має бути заповнено!</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Зображення превью</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="preview_image">
                                    <label class="custom-file-label">Оберіть файл</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Завантажити</span>
                                </div>
                            </div>
                            @error('preview_image')
                            <div class="text-danger">Оберіть зображення</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Основне зображення</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="main_image">
                                    <label class="custom-file-label">Оберіть файл</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Завантажити</span>
                                </div>
                            </div>
                            @error('main_image')
                            <div class="text-danger">Оберіть зображення</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Обрати категорію</label>
                            <select class="form-control" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $category->id == old('category_id') ? ' selected' : '' }}>
                                        {{ $category->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Обрати теги</label>
                            <select class="select2" multiple="multiple" data-placeholder="Оберіть теги"
                                    name="tags_id[]"
                                    style="width: 100%;">
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}"
                                    {{ is_array(old('tags_id')) && in_array($tag->id, old('tags_id')) ? ' selected' : '' }}>
                                        {{ $tag->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-block btn-success col-3" value="Додати">
                        </div>
                    </form>
                </div>
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
