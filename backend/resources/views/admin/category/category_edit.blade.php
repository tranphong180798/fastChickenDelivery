@extends('admin.layout')
@section('admin_content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Sửa danh mục</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ URL::to(route('screen_admin_home')) }}">Trang
                                    chủ</a></li>
                            <li class="breadcrumb-item active">Danh mục sản phẩm</li>
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
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card">
                            @if (session('message'))
                                <div class="card-header">
                                    <p class="noti">{{ session('message') }}</p>
                                </div>
                            @endif
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="quickForm" enctype="multipart/form-data"
                                action="{{ URL::to(route('admin.category.update', ['category' => $category->id])) }}"
                                method="POST">
                                @csrf
                                <input name="_method" type="hidden" value="PUT">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="required">Tên danh mục</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                            </div>
                                            <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                                value="{{ $category->name }}" placeholder="Nhập vào tên danh mục">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Hình ảnh</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-image"></i></span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" name="image_category_edit" accept="image/*" class="custom-file-input"
                                                    id="customFile">
                                                <label class="custom-file-label" for="customFile">Chọn 1 hình
                                                    ảnh</label>
                                            </div>
                                        </div>
                                        @if ($category->image)
                                        <img class="img-ctr" src="{{ asset('' . $category->image) }}" />
                                        @endif
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6"></div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection