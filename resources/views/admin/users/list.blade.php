@extends('admin.layout.master')
@section('page-title','Danh sách người dùng')
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
                                    @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)
                                        <a href="{{ route('user.create') }}" class="btn btn-success">+Thêm mới</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="" class="table table-bordered table-striped data-table">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Họ tên</th>
                                    <th>Ảnh</th>
                                    <th>Tên tài khoản</th>
                                    <th>Địa chỉ Email</th>
                                    <th>Vai trò</th>
                                    <th>Trạng thái đăng nhập</th>
                                    <th>Tùy chọn</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @forelse($users as $key => $user)
                                        <td>{{++$key}}</td>
                                        <td>{{$user->name}}</td>
                                        <td><img style="width: 100px; height: 100px"
                                                 src="@if($user->getNameImage() == '/storage/avatars/')
                                                         https://www.studynhac.vn/assets/img/default-avatar.jpg
                                                 @else
                                                 {{$user->getNameImage()}}
                                                 @endif"
                                                 class="img-border-radius avatar-40 img-fluid"></td>
                                        <td>{{$user->username}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->role->name}}</td>
                                        <td>
                                            <input class="status-user" data-id="{{$user->id}}" type="checkbox"
                                                   name="active"
                                                   {{ ($user->status == \App\Models\StatusConstant::ACTIVATE) ? 'checked': '' }} data-bootstrap-switch
                                                   data-off-color="danger" data-on-color="success">
                                        </td>
                                        <td>
                                            <div>
                                                @if(\Illuminate\Support\Facades\Auth::user()->role_id == \App\Models\RoleConstants::ROLE_ADMIN)
                                                    <a data-placement="top"
                                                       href="{{route('user.edit', $user->id)}}">
                                                        <i class="nav-icon fas fa-edit"></i>Sửa
                                                    </a>
                                                    <a class="text-danger"
                                                       onclick="return confirm('Bạn chắc chắn muốn xoá người dùng này?')"
                                                       href="{{ route('user.destroy', $user->id) }}">
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
                                    <th>Tên tài khoản</th>
                                    <th>Địa chỉ Email</th>
                                    <th>Vai trò</th>
                                    <th>Trạng thái đăng nhập</th>
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
