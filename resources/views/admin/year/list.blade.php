@extends('admin.layout.master')
@section('page-title','Danh sách năm học')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-4">
                    <form action="{{route('year.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Thêm năm học</h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                    data-toggle="tooltip" title="Collapse">
                                                <i class="fas fa-minus"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="inputName">Năm học</label>
                                            <input required type="text" name="name" id="inputName"
                                                   placeholder="VD: 2020 - 2021" class="form-control">
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
                            <h3 class="card-title">Dưới đây là thông tin danh sách năm học</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-striped data-table">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Năm học</th>
                                    <th>Tùy chọn</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($schoolYears as $key => $year)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$year->name}}</td>
                                        <td>
                                            <div>
                                                <a class="text-primary" href="{{route('year.edit', $year->id)}}">
                                                    <i class="nav-icon fas fa-edit"></i>Sửa</a>
                                                <a class="text-danger"
                                                   onclick="return confirm('Chú ý: Các lớp học sẽ chuyển về năm học mặc định. Bạn chắc chán muốn năm học này?')"
                                                   href="{{ route('year.destroy', $year->id) }}">
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
                                    <th>Năm học</th>
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
