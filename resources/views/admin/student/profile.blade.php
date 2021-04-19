@extends('admin.layout.master')
@section('page-title','Thông tin học sinh')
@section('content')
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img style="width: 50%" class="profile-user-img img-fluid img-circle"
                                         src="{{$student->getNameImage()}}"
                                         alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">{{$student->name}}</h3>

                                <p class="text-muted text-center">Lớp ...</p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Giới tính</b> <a class="float-right">{{$student->gender}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Ngày sinh</b> <a class="float-right">{{ \Carbon\Carbon::parse($student->date)->format('d/m/Y')}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Địa chỉ</b> <a class="float-right">{{$student->address}}</a>
                                    </li>
                                </ul>

                                <a href="" class="btn btn-primary btn-block"><b>Theo dõi</b></a>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- About Me Box -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Thông tin thêm</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-book mr-1"></i>Học tập</strong>
                                <p class="text-muted">
                                    Chăm chỉ, hoạt bát, năng động, ham học hỏi, thực hành tốt
                                </p>

                                <hr>

                                <strong><i class="fas fa-map-marker-alt mr-1"></i>Vị trí</strong>

                                <p class="text-muted">Hà Nội, Việt Nam</p>

                                <hr>

                                <strong><i class="fas fa-pencil-alt mr-1"></i> Kỹ năng, sở trường</strong>

                                <p class="text-muted">
                                    Đá bóng, cầu lông, IT, lập trình Web,...
                                </p>

                                <hr>

                                <strong><i class="far fa-file-alt mr-1"></i> Ghi chú</strong>

                                <p class="text-muted">{{$student->name}} là học sinh giỏi, chăm ngoan và đạt nhiều thành tích cao trong học tập, hoạt động ngoại khóa và giúp đỡ bạn bè</p>

                                <strong><i class="fas fa-pencil-alt mr-1"></i> Thông tin thêm</strong>
                                <p class="text-muted"><b>Nơi sinh</b></p>
                                <p class="text-muted">{{$student->birthplace}}</p>
                                <p class="text-muted"><b>Họ tên cha</b></p>
                                <p class="text-muted">{{$student->father_name}}</p>
                                <p class="text-muted">Số điện thoại {{$student->father_phone}}</p>
                                <p class="text-muted"><b>Họ tên mẹ</b></p>
                                <p class="text-muted">{{$student->mother_name}}</p>
                                <p class="text-muted">Số điện thoại {{$student->mother_phone}}</p>
                                <hr>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Hoạt động</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Dòng thời gian</a></li>
{{--                                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Chỉnh sửa thông tin</a></li>--}}
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="activity">
                                        <!-- Post -->
                                        <div class="post">
                                            <div class="user-block">
                                                <img class="img-circle img-bordered-sm" src="https://www.studynhac.vn/assets/img/default-avatar.jpg" alt="user image">
                                                <span class="username">
                          <a href="#">Nguyễn Minh An</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                                                <span class="description">Công khai - 7:30 PM hôm nay</span>
                                            </div>
                                            <!-- /.user-block -->
                                            <p>
                                                Chúc mừng sinh nhật {{$student->name}}, chúc bạn mọi điều tốt đẹp nhất <3
                                            </p>

                                            <p>
                                                <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Chia sẻ</a>
                                                <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Thích</a>
                                                <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Bình luận (5)
                          </a>
                        </span>
                                            </p>

                                            <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                                        </div>
                                        <!-- /.post -->

                                        <!-- Post -->
                                        <div class="post clearfix">
                                            <div class="user-block">
                                                <img class="img-circle img-bordered-sm" src="https://www.studynhac.vn/assets/img/default-avatar.jpg" alt="User Image">
                                                <span class="username">
                          <a href="#">Nguyễn Anh Đức</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                                                <span class="description">Gửi bạn 1 tin nhắn - 3 ngày trước</span>
                                            </div>
                                            <!-- /.user-block -->
                                            <p>
                                                Học xong chưa, chiều đi qua VinMart mua ít đồ với tớ nhé.
                                            </p>

                                            <form class="form-horizontal">
                                                <div class="input-group input-group-sm mb-0">
                                                    <input class="form-control form-control-sm" placeholder="Trả lời">
                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-danger">Send</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.post -->

                                        <!-- Post -->
                                        <div class="post">
                                            <div class="user-block">
                                                <img class="img-circle img-bordered-sm" src="https://www.studynhac.vn/assets/img/default-avatar.jpg" alt="User Image">
                                                <span class="username">
                          <a href="#">Thanh Hương</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                                                <span class="description">Đăng 2 ảnh cho bạn - 5 ngày trước</span>
                                            </div>
                                            <!-- /.user-block -->
                                            <div class="row mb-3">
                                                <div class="col-sm-6">
                                                    <img style="width: 30%" class="img-fluid" src="https://www.trafalgar.com/real-word/wp-content/uploads/sites/3/2019/10/giant-panda-750x400.jpg" alt="Photo">
                                                    <img style="width: 30%" class="img-fluid" src="https://cdn.vox-cdn.com/thumbor/GzQa3VMNyAITTPQU7ZYMfOjg6lQ=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/19873983/GettyImages_137497593.jpg" alt="Photo">
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-sm-6">
                                                    <div class="row">
                                                        <div class="col-sm-6">

                                                        </div>
                                                        <!-- /.col -->
                                                        <div class="col-sm-6">

                                                        </div>
                                                        <!-- /.col -->
                                                    </div>
                                                    <!-- /.row -->
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->

                                            <p>
                                                <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Chia sẻ</a>
                                                <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Thích</a>
                                                <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Bình luận (5)
                          </a>
                        </span>
                                            </p>

                                            <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                                        </div>
                                        <!-- /.post -->
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="timeline">
                                        <!-- The timeline -->
                                        <div class="timeline timeline-inverse">
                                            <!-- timeline time label -->
                                            <div class="time-label">
                        <span class="bg-danger">
                          Ngày 07 tháng 11 năm 2020
                        </span>
                                            </div>
                                            <!-- /.timeline-label -->
                                            <!-- timeline item -->
                                            <div>
                                                <i class="fas fa-envelope bg-primary"></i>

                                                <div class="timeline-item">
                                                    <span class="time"><i class="far fa-clock"></i> 12:05</span>

                                                    <h3 class="timeline-header"><a href="#">Nhóm hỗ trợ</a> gửi bạn một tin nhắn</h3>

                                                    <div class="timeline-body">
                                                        {{$student->name}} tháng vừa rồi làm tốt lắm, nhóm chúng ta sẽ sớm hoàn thành mục tiêu sớm nhất
                                                    </div>
                                                    <div class="timeline-footer">
                                                        <a href="#" class="btn btn-primary btn-sm">Đọc thêm</a>
                                                        <a href="#" class="btn btn-danger btn-sm">Xóa</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END timeline item -->
                                            <!-- timeline item -->
                                            <div>
                                                <i class="fas fa-user bg-info"></i>

                                                <div class="timeline-item">
                                                    <span class="time"><i class="far fa-clock"></i> 5 phút trước</span>

                                                    <h3 class="timeline-header border-0"><a href="#">Hải Anh</a> đã chấp nhận kết bạn
                                                    </h3>
                                                </div>
                                            </div>
                                            <!-- END timeline item -->
                                            <!-- timeline item -->
                                            <div>
                                                <i class="fas fa-comments bg-warning"></i>

                                                <div class="timeline-item">
                                                    <span class="time"><i class="far fa-clock"></i> 27 phút trước</span>

                                                    <h3 class="timeline-header"><a href="#">Bình An</a> bình luận trên bài viết của bạn</h3>

                                                    <div class="timeline-body">
                                                        Rảnh làm set cầu lông nhé bạn!
                                                    </div>
                                                    <div class="timeline-footer">
                                                        <a href="#" class="btn btn-warning btn-flat btn-sm">Xem bình luận</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END timeline item -->
                                            <!-- timeline time label -->
                                            <div class="time-label">
                        <span class="bg-success">
                          Ngày 05 tháng 11 năm 2020
                        </span>
                                            </div>
                                            <!-- /.timeline-label -->
                                            <!-- timeline item -->
                                            <div>
                                                <i class="fas fa-camera bg-purple"></i>

                                                <div class="timeline-item">
                                                    <span class="time"><i class="far fa-clock"></i> 2 ngày trước</span>

                                                    <h3 class="timeline-header"><a href="#">Thái Hà</a> tải lên những bức ảnh mới</h3>

                                                    <div class="timeline-body">
                                                        <img style="width: 150px" src="https://cdn.tgdd.vn/Files/2019/01/01/1142002/s8ori_800x600.jpg">
                                                        <img style="width: 150px" src="https://icdn.dantri.com.vn/thumb_w/640/2020/01/24/00-1579884195136.jpg">
                                                        <img style="width: 150px" src="https://i.pinimg.com/originals/36/59/2d/36592d1e1d68baa0b0a19143ad6ab965.jpg">
                                                        <img style="width: 150px" src="https://lavenderstudio.vn/wp-content/uploads/dich-vu-chup-hinh-ao-dai-tet-01.jpg">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END timeline item -->
                                            <div>
                                                <i class="far fa-clock bg-gray"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->

{{--                                    <div class="tab-pane" id="settings">--}}
{{--                                        <form class="form-horizontal">--}}
{{--                                            <div class="form-group row">--}}
{{--                                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>--}}
{{--                                                <div class="col-sm-10">--}}
{{--                                                    <input type="email" class="form-control" id="inputName" placeholder="Name">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group row">--}}
{{--                                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>--}}
{{--                                                <div class="col-sm-10">--}}
{{--                                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group row">--}}
{{--                                                <label for="inputName2" class="col-sm-2 col-form-label">Name</label>--}}
{{--                                                <div class="col-sm-10">--}}
{{--                                                    <input type="text" class="form-control" id="inputName2" placeholder="Name">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group row">--}}
{{--                                                <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>--}}
{{--                                                <div class="col-sm-10">--}}
{{--                                                    <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group row">--}}
{{--                                                <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>--}}
{{--                                                <div class="col-sm-10">--}}
{{--                                                    <input type="text" class="form-control" id="inputSkills" placeholder="Skills">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group row">--}}
{{--                                                <div class="offset-sm-2 col-sm-10">--}}
{{--                                                    <div class="checkbox">--}}
{{--                                                        <label>--}}
{{--                                                            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>--}}
{{--                                                        </label>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group row">--}}
{{--                                                <div class="offset-sm-2 col-sm-10">--}}
{{--                                                    <button type="submit" class="btn btn-danger">Submit</button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.nav-tabs-custom -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    <!-- Main content -->
@endsection
