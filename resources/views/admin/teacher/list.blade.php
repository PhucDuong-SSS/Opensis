@extends('admin.layout.master')
@section('page-title','Danh sách giáo viên')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-12 col-md-6"></div>
                                <div class="col-12 col-md-6" style="text-align: right">
                                    <a href="{{ route('teachers.create') }}" class="btn btn-success">+Thêm mới</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped data-table">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Họ tên</th>
                                    <th>Ảnh</th>
                                    <th>Giới tính</th>
                                    <th>Số điện thoại</th>
                                    <th>Tùy chọn</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @forelse($teachers as $key => $teacher)
                                        <td>{{++$key}}</td>
                                        <td>{{$teacher->name}}</td>
                                        <td><img style="width: 100px; height: 100px"
                                                 src="@if($teacher->getNameImage() == '/storage/images/')
                                                     https://www.studynhac.vn/assets/img/default-avatar.jpg
                                                 @else
                                                 {{$teacher->getNameImage()}}
                                                 @endif"
                                                 class="img-border-radius avatar-40 img-fluid"></td>
                                        <td>{{$teacher->gender}}</td>
                                        <td>{{ \Carbon\Carbon::parse($teacher->date)->format('d/m/Y')}}</td>
                                        <td>{{$teacher->phone}}</td>
                                        <td>
                                            <div>
                                                @if(\Illuminate\Support\Facades\Auth::user()->role_id == \App\Models\RoleConstants::ROLE_ADMIN)

                                                <a data-placement="top"
                                                   href="{{route('teachers.edit', $teacher->id)}}">
                                                    <i class="nav-icon fas fa-edit"></i>Sửa
                                                </a>
                                                <a class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xoá người dùng này?')" href="{{ route('teachers.destroy', $teacher->id) }}">
                                                    <i class="nav-icon far fa-trash-alt"></i>Xóa</a>
                                                @else
                                                    Chỉ ADMIN có quyền
                                                @endif
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
                                    <th>Họ tên</th>
                                    <th>Ảnh</th>
                                    <th>Giới tính</th>
                                    <th>Số điện thoại</th>
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
