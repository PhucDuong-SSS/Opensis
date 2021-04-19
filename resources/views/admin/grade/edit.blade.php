@extends('admin.layout.master')
@section('page-title','Chỉnh sửa thông tin khối lớp học')
@section('content')
    <section class="content">
        <form action="{{route('grade.edit', $grade->id)}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-5">
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
                                <label for="inputName">Tên khối lớp học</label>
                                <input required value="{{$grade->name}}" type="text" name="name" id="inputName" placeholder="Nhập tên khối lớp học" class="form-control">
                                @error('name')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Cập nhật" class="btn btn-success">
                                <a href="{{ route('grade.index') }}" class="btn btn-secondary">Trở về</a>
                            </div>
                        </div>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </form>
    </section>
@endsection
