@extends('admin.layout.master')
@section('page-title','Chỉnh sửa thông tin năm học')
@section('content')

    <section class="content">
        <form action="{{route('year.edit', $year->id)}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-10">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Năm học</label>
                                <input required value="{{$year->name}}" type="text" name="name" id="inputName" placeholder="Nhập năm học" class="form-control">
                                @error('name')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="submit" value="Cập nhật" class="btn btn-success">
                    <a href="{{route('year.index')}}" class="btn btn-secondary">Trở về</a>
                </div>
            </div>
        </form>
    </section>
@endsection
