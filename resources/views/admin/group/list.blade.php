@extends('admin.layout.master')
@section('page-title','Danh sách lớp học')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-12 col-md-6"></div>
                                <div class="col-12 col-md-6" style="text-align: right">
                                    <a href="{{ route('group.create') }}" class="btn btn-success">+Thêm mới</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table-group-list" class="table table-bordered table-striped data-table">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên lớp</th>
                                    <th>Khối lớp</th>
                                    <th>Năm học</th>
                                    <th>Sĩ số</th>
                                    <th>Tùy chọn</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @forelse($groups as $key => $group)
                                        <td>{{++$key}}</td>
                                        <td>{{$group->name}}</td>
                                        <td>{{ isset($group->grade->name) ? $group->grade->name : 'Chưa cập nhật' }}</td>
                                        <td>{{ isset($group->schoolYear->name) ? $group->schoolYear->name : 'Chưa cập nhật' }}</td>
                                        <td>{{$group->member}}</td>
                                        <td>
                                            <div>
                                                <!-- Button trigger modal -->
                                                <a type="button" class="text-green" data-toggle="modal"
                                                   data-target="#exampleModalCenter">
                                                    <i class="nav-icon fas fa-eye"></i>
                                                    Xem
                                                </a>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalCenter" tabindex="-1"
                                                     role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                     aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Thông
                                                                    tin lớp</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                ...
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a data-placement="top" href="{{route('group.edit', $group->id)}}">
                                                    <i class="nav-icon fas fa-edit"></i>Sửa</a>
                                                <a class="text-danger"
                                                   onclick="return confirm('Bạn chắc chắn muốn xoá lớp học này?')"
                                                   data-placement="top" href="{{ route('group.destroy', $group->id) }}">
                                                    <i class="nav-icon far fa-trash-alt"></i>
                                                    Xóa</a>
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
                                    <th>Tên lớp</th>
                                    <th>Khối lớp</th>
                                    <th>Năm học</th>
                                    <th>Sĩ số</th>
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
@endsection


