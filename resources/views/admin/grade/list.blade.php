@extends('admin.layout.master')
@section('page-title','Danh sách khối lớp học')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-4">
                    <form action="{{route('grade.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Thêm khối lớp học</h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                    data-toggle="tooltip" title="Collapse">
                                                <i class="fas fa-minus"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="inputName">Tên khối lớp học</label>
                                            <input required type="number" name="name" id="inputName"
                                                   placeholder="Nhập tên khối lớp học" class="form-control">
                                            @error('name')
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
                            <h3 class="card-title">Dưới đây là thông tin danh sách khối lớp học</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-striped data-table">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Khối lớp</th>
                                    <th>Tùy chọn</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($grades as $key => $grade)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$grade->name}}</td>
                                        <td>
                                            <div>
                                                <a data-placement="top" href="{{route('grade.edit', $grade->id)}}">
                                                    <i class="nav-icon fas fa-edit"></i>Sửa</a>
                                                <a class="text-danger"
                                                   onclick="return confirm('Chú ý: Các lớp học sẽ chuyển về khối học mặc định. Bạn chắc chán muốn xoá khối lớp này?')"
                                                   href="{{ route('grade.destroy', $grade->id) }}">
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
                                <tfoot>
                                <tr>
                                    <th>STT</th>
                                    <th>Khối lớp</th>
                                    <th>Tùy chọn</th>
                                </tr>
                                </tfoot>
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
