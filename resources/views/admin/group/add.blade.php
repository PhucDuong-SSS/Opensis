@extends('admin.layout.master')
@section('page-title','Thêm lớp học')
@section('content')
    <!-- Main content -->
    <section class="content">
        <form action="{{route('group.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
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
                                <label for="inputName">Tên lớp</label>
                                <input required type="text" name="name" id="inputName" placeholder="Nhập tên lớp"
                                       class="form-control">
                                @error('name')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Khối lớp</label>
                                <select name="grade_id" class="form-control select2" style="width: 100%;">
                                    @foreach($grades as $key => $grade)
                                        <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Năm học</label>
                                <select name="school_year_id" class="form-control select2" style="width: 100%;">
                                    @foreach($schoolYears as $key => $schoolYear)
                                    <option value="{{ $schoolYear->id }}">{{ $schoolYear->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Sĩ số</label>
                                <input required type="number" name="member" id="inputName" placeholder="Nhập sĩ số"
                                       class="form-control">
                                @error('member')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Thêm" class="btn btn-success">
                                <a href="{{ route('group.index') }}" class="btn btn-secondary">Trở về</a>
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
