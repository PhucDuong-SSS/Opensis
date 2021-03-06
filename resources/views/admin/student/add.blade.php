@extends('admin.layout.master')
@section('page-title','Thêm học sinh')
@section('content')

    <!-- Main content -->
    <section class="content">
        <form method="post" enctype="multipart/form-data" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-7">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Họ tên</label>
                                <input type="text" name="name" id="inputName" placeholder="Nhập tên đầy đủ"
                                       class="form-control">
                                @error('name')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Ảnh</label>
                                <input type="file" accept=".png, .jpg, .jpeg" name="image" id="inputName"
                                       class="form-control">
                                @error('name')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Giới tính</label>
                                <select name="gender" class="form-control custom-select">
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                        <option value="Khác">Khác</option>
                                </select>
                                @error('gender')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Ngày sinh</label>
                                <input type="date" name="date" id="inputName" placeholder="Nhập ngày sinh"
                                       class="form-control">
                                @error('date')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Nơi sinh</label>
                                <input type="text" name="birthplace" id="inputName" placeholder="Nhập nơi sinh"
                                       class="form-control">
                                @error('birthplace')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Địa chỉ</label>
                                <input type="text" name="address" id="inputName" placeholder="Nhập địa chỉ"
                                       class="form-control">
                                @error('address')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Họ tên cha</label>
                                <input type="text" name="father_name" id="inputName" placeholder="Nhập tên đầy đủ"
                                       class="form-control">
                                @error('father_name')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Số điện thoại của cha</label>
                                <input type="text" name="father_phone" id="inputName" placeholder="Nhập số điện thoại"
                                       class="form-control">
                                @error('father_phone')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Họ tên mẹ</label>
                                <input type="text" name="mother_name" id="inputName" placeholder="Nhập tên đầy đủ"
                                       class="form-control">
                                @error('mother_name')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Số điện thoại mẹ</label>
                                <input type="text" name="mother_phone" id="inputName" placeholder="Nhập số điện thoại"
                                       class="form-control">
                                @error('mother_phone')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Thêm" class="btn btn-success">
                                <a href="{{route('user.index')}}" class="btn btn-secondary">Trở về</a>
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
