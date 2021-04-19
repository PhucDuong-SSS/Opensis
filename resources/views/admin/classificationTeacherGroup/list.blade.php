@extends('admin.layout.master')
@section('page-title','Phân lớp cho giáo viên')
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
                                    <th>Họ tên giáo viên</th>
                                    <th>Thêm lớp</th>
                                    <th>Danh sách lớp đang giảng dạy</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @forelse($classificationTeacherGroups as $key => $classificationTeacherGroup)
                                        <td>{{++$key}}</td>
                                        <td>{{$classificationTeacherGroup->teacher->name}}</td>
                                        <td>{{$classificationTeacherGroup->group->name}}</td>
                                        <td>{{$classificationTeacherGroup->middle_teacher}}</td>
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
                                    <th>Họ tên giáo viên</th>
                                    <th>Thêm lớp</th>
                                    <th>Danh sách lớp đang giảng dạy</th>
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
