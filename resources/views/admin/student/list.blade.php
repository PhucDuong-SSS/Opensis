@extends('admin.layout.master')
@section('page-title','Danh sách học sinh')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#excel">
                                    Import & Export Excel
                                </button>
                                </div>
                                <div class="col-12 col-md-6" style="text-align: right">
                                    <a href="{{ route('students.create') }}" class="btn btn-success">+Thêm mới</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="col-12 col-md-12">
                                <form>
                                    <div class="row">
                                        <div class="col-12 col-md-3">
                                            <div class="form-group">
                                                <select id="id_filter_student" name="id_filter_student" class="form-control">
                                                    <option>Chọn bộ lọc</option>
                                                    <option value="1">Năm học</option>
                                                    <option value="2">Lớp học</option>
                                                    <option value="3">Giới tính</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>Chọn bộ lọc</option>
                                                    <option>Năm học</option>
                                                    <option>Giới tính</option>
                                                    <option>Lớp học</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-info">Lọc</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <table class="table table-bordered table-striped data-table">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Họ tên</th>
                                    <th>Ảnh</th>
                                    <th>Giới tính</th>
                                    <th>Ngày sinh</th>
                                    <th>Lớp học</th>
                                    <th>Tùy chọn</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @forelse($students as $key => $student)
                                        <td>{{++$key}}</td>
                                        <td>{{$student->name}}</td>
                                        <td><img style="width: 100px; height: 100px"
                                                 src="@if($student->getNameImage() == '/storage/images/')
                                                     https://www.studynhac.vn/assets/img/default-avatar.jpg
                                                 @else
                                                 {{$student->getNameImage()}}
                                                 @endif"
                                                 class="img-border-radius avatar-40 img-fluid"></td>
                                        <td>{{$student->gender}}</td>
                                        <td>{{ \Carbon\Carbon::parse($student->date)->format('d/m/Y')}}</td>
                                        <td>{{ $student->group ?? 'Chưa phân lớp' }}</td>
                                        <td>
                                            <div>
                                                <a type="button" href="{{route('students.profile', $student->id)}}" data-placement="top">
                                                    <i class="nav-icon fas fa-book"></i>Thông tin
                                                </a>
                                                <a data-placement="top"
                                                   href="{{route('students.edit', $student->id)}}">
                                                    <i class="nav-icon fas fa-edit"></i>Sửa
                                                </a>
                                                <a class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xoá người dùng này?')" href="{{ route('students.destroy', $student->id) }}">
                                                    <i class="nav-icon far fa-trash-alt"></i>Xóa</a>
                                            </div>
                                        </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Không có dữ liệu</td>
                                    </tr>
                                @endforelse
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>STT</th>
                                    <th>Họ tên</th>
                                    <th>Ảnh</th>
                                    <th>Giới tính</th>
                                    <th>Ngày sinh</th>
                                    <th>Lớp học</th>
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

    <div class="modal fade" id="excel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import & Export Excel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div aria-hidden="true">
                        <div>
                            <a href="{{ route('download') }}" class="btn btn-info">Download Excel</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="file" class="form-control">
                                <br>
                                <button class="btn btn-success">Import Student Data</button>
                                <a class="btn btn-warning" href="{{ route('export') }}">Export Student Data</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
