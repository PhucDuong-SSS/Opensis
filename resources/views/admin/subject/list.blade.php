@extends('admin.layout.master')
@section('page-title','Danh sách môn học')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-4">
                    <form action="{{route('subject.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Thêm môn học</h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                    data-toggle="tooltip" title="Collapse">
                                                <i class="fas fa-minus"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="inputName">Tên môn học</label>
                                            <input name="name" id="inputName"
                                                   placeholder="Nhập tên môn học" class="form-control">
                                            @error('name')
                                            <div style="color: red">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName">Nhập số tiết</label>
                                            <input name="period" id="inputName"
                                                   placeholder="Nhập số tiết học" class="form-control">
                                            @error('period')
                                            <div style="color: red">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName">Hệ số</label>
                                            <input name="coefficient" id="inputName"
                                                   placeholder="Nhập hệ số" class="form-control">
                                            @error('coefficient')
                                            <div style="color: red">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <input type="submit" value="Thêm" class="btn btn-success">
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /.card -->
                </div>
                <div class="col-12 col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Dưới đây là thông tin danh sách môn học</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-striped data-table">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên môn học</th>
                                    <th>Số tiết</th>
                                    <th>Hệ số</th>
                                    <th>Tùy chọn</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($subjects as $key => $subject)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$subject->name}}</td>
                                        <td>{{$subject->period}}</td>
                                        <td>{{$subject->coefficient}}</td>
                                        <td>
                                            <div>
                                                <a data-placement="top" href="{{route('subject.edit', $subject->id)}}">
                                                    <i class="nav-icon fas fa-edit"></i>Sửa</a>
                                                <a class="text-danger"
                                                   onclick="return confirm('Chú ý: Các lớp học sẽ chuyển về khối học mặc định. Bạn chắc chán muốn xoá khối lớp này?')"
                                                   href="{{ route('subject.destroy', $subject->id) }}">
                                                    <i class="nav-icon far fa-trash-alt"></i>Xóa</a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">Không có dữ liệu</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
