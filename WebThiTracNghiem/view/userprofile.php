<section class="py-50">
    <div class="container">
        <div class="row container-login">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="box position-sticky t-100">
                    <?php if(isset($_SESSION['user'])):?>
                    <div class="box-body text-center">
                        <div class="mb-20 mt-20">
                            <?php 
                              $thongtin = loadone_tkhoan($_SESSION['user']['id']);
                           

                             $hinhanh = "../uploads/" . $thongtin['image'];
                             if (is_file($hinhanh)) {
                                 $img_path = "<img src= '".$hinhanh."' width='150' class='rounded-circle bg-info-light' >";
                             } else {
                                 $img_path = "<i class='fa-solid fa-user'></i>";
                             }
                            
                            ?>
                            <?php echo $img_path ?>
                            <h4 class="mt-20 mb-0"><?php echo $_SESSION['user']['username'] ?></h4>
                            <a href="mailto:dummy@gmail.com"><?php echo $_SESSION['user']['email'] ?></a>
                        </div>
                       
                        
                        <ul class="list-inline text-center mt-20">
                            <li><a href="javascript:void(0)" data-bs-toggle="tooltip" title="" data-original-title="Facebook"><i class="fa fa-facebook-square fs-20"></i></a></li>
                            <li><a href="javascript:void(0)" data-bs-toggle="tooltip" title="" data-original-title="Twitter"><i class="fa fa-twitter-square fs-20"></i></a></li>
                            <li><a href="javascript:void(0)" data-bs-toggle="tooltip" title="" data-original-title="Instagram"><i class="fa fa-instagram fs-20"></i></a></li>
                            <li><a href="javascript:void(0)" data-bs-toggle="tooltip" title="" data-original-title="Linkedin"><i class="fa fa-linkedin-square fs-20"></i></a></li>
                        </ul>
                        <ul class="cours-star">
                            <li class="active"><i class="fa fa-star"></i></li>
                            <li class="active"><i class="fa fa-star"></i></li>
                            <li class="active"><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="p-15 bt-1 bb-1">
                        <div class="row text-center">
                            <div class="col-6 be-1">
                                <a href="#" class="link d-flex align-items-center justify-content-center font-medium">
                                    <span class="icon-Mail fs-20 me-5"></span>Message</a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="link d-flex align-items-center justify-content-center font-medium">
                                    <span class="icon-Code1 fs-20 me-5"><span class="path1"></span><span class="path2"></span></span>Portfolio</a>
                            </div>
                        </div>
                    </div>
                    <!-- <ul class="nav d-block nav-stacked" id="pills-tab23" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-personal-tab" data-bs-toggle="pill" href="#pills-personal" role="tab" aria-controls="pills-personal" aria-selected="true">
                                <i class="me-10 mdi mdi-account"></i>Personal Details
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-courses-tab" data-bs-toggle="pill" href="#pills-courses" role="tab" aria-controls="pills-courses" aria-selected="true">
                                <i class="me-10 mdi mdi-book"></i>Courses <span class="pull-right badge bg-info-light">1310</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-followers-tab" data-bs-toggle="pill" href="#pills-followers" role="tab" aria-controls="pills-followers" aria-selected="true">
                                <i class="me-10 mdi mdi-bookmark-plus"></i>Followers <span class="pull-right badge bg-success-light">120</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="true">
                                <i class="me-10 mdi mdi-account"></i>Edit Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-password-tab" data-bs-toggle="pill" href="#pills-password" role="tab" aria-controls="pills-password" aria-selected="true">
                                <i class="me-10 mdi mdi-lock"></i>Change Password
                            </a>
                        </li>
                    </ul> -->
                </div>
            </div>

            <div class="col-lg-9 col-md-8 col-12">
                <div class="box">
                    <div class="box-body">
                        <div class="tab-content" id="pills-tabContent23">
                            <div class="tab-pane fade show active" id="pills-personal" role="tabpanel" aria-labelledby="pills-personal-tab">
                                <h4 class="box-title mb-0">
                                    Personal Details
                                </h4>
                                <hr>
                                <ul class="list-unstyled clearfix">
                                    <li class="w-md-p50 float-start pb-10">
                                        <a href="#" class="text-dark d-flex justify-content-between pe-50">
                                            <span class="fw-500">FullName :</span>
                                            <span class="text-muted"><?php echo $_SESSION['user']['fullname'] ?> </span>
                                        </a>
                                    </li>
                                    <li class="w-md-p50 float-start pb-10">
                                        <a href="#" class="text-dark d-flex justify-content-between">
                                            <span class="fw-500">Address :</span>
                                            <span class="text-muted"><?php echo $_SESSION['user']['address'] ?></span>
                                        </a>
                                    </li>
                                    <li class="w-md-p50 float-start pb-10">
                                        <a href="#" class="text-dark d-flex justify-content-between pe-50">
                                            <span class="fw-500">Languages :</span>
                                            <span class="text-muted">English, Franch</span>
                                        </a>
                                    </li>
                                    <li class="w-md-p50 float-start pb-10">
                                        <a href="#" class="text-dark d-flex justify-content-between">
                                            <span class="fw-500">Email:</span>
                                            <span class="text-muted"><?php echo $_SESSION['user']['email'] ?></span>
                                        </a>
                                    </li>
                                   
                                    
                                </ul>
                               
                               
                                
                                <hr>
                                <div class="popup-gallery">
                                    <div class="d-flex gap-items-2 mb-10">
                                        <a href="../../images/front-end-img/courses/1.jpg" title="Caption. Can be aligned to any side and contain any HTML.">
                                            <img src="../../images/front-end-img/courses/1.jpg" alt="" />
                                        </a>
                                        <a href="../../images/front-end-img/courses/2.jpg" title="This image fits only horizontally.">
                                            <img src="../../images/front-end-img/courses/2.jpg" alt="" />
                                        </a>
                                        <a href="../../images/front-end-img/courses/3.jpg" title="Caption. Can be aligned to any side and contain any HTML.">
                                            <img src="../../images/front-end-img/courses/3.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="d-flex gap-items-2">
                                        <a href="../../images/front-end-img/courses/4.jpg" title="Caption. Can be aligned to any side and contain any HTML.">
                                            <img src="../../images/front-end-img/courses/4.jpg" alt="" />
                                        </a>
                                        <a href="../../images/front-end-img/courses/5.jpg" title="Caption. Can be aligned to any side and contain any HTML.">
                                            <img src="../../images/front-end-img/courses/5.jpg" alt="" />
                                        </a>
                                        <a href="../../images/front-end-img/courses/6.jpg" title="Caption. Can be aligned to any side and contain any HTML.">
                                            <img src="../../images/front-end-img/courses/6.jpg" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-courses" role="tabpanel" aria-labelledby="pills-courses-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <h4 class="box-title mb-0">
                                            My Courses
                                        </h4>
                                        <hr>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="card">
                                            <img class="card-img-top" src="../../images/front-end-img/courses/1.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title justify-content-between d-flex align-items-center">Manegement
                                                    <span class="badge badge-success">Online</span>
                                                </h4>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                <span>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half text-warning"></i>
                                                    <span class="text-muted ms-2">(12)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="card">
                                            <img class="card-img-top" src="../../images/front-end-img/courses/9.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title justify-content-between d-flex align-items-center">Networking
                                                    <span class="badge badge-success">Online</span>
                                                </h4>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                <span>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half text-warning"></i>
                                                    <span class="text-muted ms-2">(12)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="card">
                                            <img class="card-img-top" src="../../images/front-end-img/courses/8.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title justify-content-between d-flex align-items-center">Security
                                                    <span class="badge badge-success">Online</span>
                                                </h4>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                <span>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half text-warning"></i>
                                                    <span class="text-muted ms-2">(12)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="card">
                                            <img class="card-img-top" src="../../images/front-end-img/courses/2.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title justify-content-between d-flex align-items-center">Language
                                                    <span class="badge badge-success">Online</span>
                                                </h4>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                <span>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half text-warning"></i>
                                                    <span class="text-muted ms-2">(12)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="card">
                                            <img class="card-img-top" src="../../images/front-end-img/courses/10.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title justify-content-between d-flex align-items-center">It &amp; software
                                                    <span class="badge badge-success">Online</span>
                                                </h4>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                <span>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half text-warning"></i>
                                                    <span class="text-muted ms-2">(12)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="card">
                                            <img class="card-img-top" src="../../images/front-end-img/courses/5.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title justify-content-between d-flex align-items-center">Photography
                                                    <span class="badge badge-success">Online</span>
                                                </h4>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
                                                <span>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half text-warning"></i>
                                                    <span class="text-muted ms-2">(12)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-followers" role="tabpanel" aria-labelledby="pills-followers-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <h4 class="box-title mb-0">
                                            Followers
                                        </h4>
                                        <hr>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15">
                                                <img src="../../images/avatar/avatar-1.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-primary mb-1 fs-16">Sophia</a>
                                                <span class="text-mute">sophia@dummy.com</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15">
                                                <img src="../../images/avatar/avatar-2.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-danger mb-1 fs-16">Mason</a>
                                                <span class="text-mute">mason@dummy.com</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15">
                                                <img src="../../images/avatar/avatar-3.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-success mb-1 fs-16">Emily</a>
                                                <span class="text-mute">emily@dummy.com</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15">
                                                <img src="../../images/avatar/avatar-4.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-info mb-1 fs-16">Daniel</a>
                                                <span class="text-mute">daniel@dummy.com</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-25">
                                            <div class="me-15">
                                                <img src="../../images/avatar/avatar-5.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-warning mb-1 fs-16">Natalie</a>
                                                <span class="text-mute">natalie@dummy.com</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15">
                                                <img src="../../images/avatar/avatar-6.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-primary mb-1 fs-16">Clark</a>
                                                <span class="text-mute">clark@dummy.com</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15">
                                                <img src="../../images/avatar/avatar-7.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-danger mb-1 fs-16">Rock</a>
                                                <span class="text-mute">rock@dummy.com</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15">
                                                <img src="../../images/avatar/avatar-8.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-success mb-1 fs-16">Paton</a>
                                                <span class="text-mute">paton@dummy.com</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15">
                                                <img src="../../images/avatar/avatar-9.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-info mb-1 fs-16">Don</a>
                                                <span class="text-mute">don@dummy.com</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-25">
                                            <div class="me-15">
                                                <img src="../../images/avatar/avatar-10.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-warning mb-1 fs-16">Amenda</a>
                                                <span class="text-mute">amenda@dummy.com</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15">
                                                <img src="../../images/avatar/avatar-11.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-primary mb-1 fs-16">Sophia</a>
                                                <span class="text-mute">sophia@dummy.com</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15">
                                                <img src="../../images/avatar/avatar-12.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-danger mb-1 fs-16">Mason</a>
                                                <span class="text-mute">mason@dummy.com</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15">
                                                <img src="../../images/avatar/avatar-13.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-success mb-1 fs-16">Emily</a>
                                                <span class="text-mute">emily@dummy.com</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15">
                                                <img src="../../images/avatar/avatar-10.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-info mb-1 fs-16">Daniel</a>
                                                <span class="text-mute">daniel@dummy.com</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-25">
                                            <div class="me-15">
                                                <img src="../../images/avatar/avatar-15.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-warning mb-1 fs-16">Natalie</a>
                                                <span class="text-mute">natalie@dummy.com</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15">
                                                <img src="../../images/avatar/avatar-16.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-primary mb-1 fs-16">Clark</a>
                                                <span class="text-mute">clark@dummy.com</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15">
                                                <img src="../../images/avatar/avatar-1.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-danger mb-1 fs-16">Rock</a>
                                                <span class="text-mute">rock@dummy.com</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15">
                                                <img src="../../images/avatar/avatar-4.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-success mb-1 fs-16">Paton</a>
                                                <span class="text-mute">paton@dummy.com</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15">
                                                <img src="../../images/avatar/avatar-5.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-info mb-1 fs-16">Don</a>
                                                <span class="text-mute">don@dummy.com</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-25">
                                            <div class="me-15">
                                                <img src="../../images/avatar/avatar-8.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="">
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-warning mb-1 fs-16">Amenda</a>
                                                <span class="text-mute">amenda@dummy.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <form class="form">
                                            <div>
                                                <h4 class="box-title text-info"><i class="ti-user me-15"></i> Edit Profile</h4>
                                                <hr class="my-15">
                                                <div class="row">
                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label class="form-label">First Name</label>
                                                            <input type="text" class="form-control" placeholder="First Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Last Name</label>
                                                            <input type="text" class="form-control" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Company Name</label>
                                                            <input type="text" class="form-control" placeholder="Company Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Contact Number</label>
                                                            <input type="tel" class="form-control" placeholder="Phone">
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="box-title text-info mt-30"><i class="ti-envelope me-15"></i> Contact Info &amp; Bio</h4>
                                                <hr class="my-15">
                                                <div class="form-group">
                                                    <label class="form-label">Email</label>
                                                    <input class="form-control" type="email" placeholder="email">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Website</label>
                                                    <input class="form-control" type="url" placeholder="http://">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Contact Number</label>
                                                    <input class="form-control" type="tel" placeholder="Contact Number">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Address</label>
                                                    <input class="form-control" type="text" placeholder="Address">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Bio</label>
                                                    <textarea rows="4" class="form-control" placeholder="Bio"></textarea>
                                                </div>
                                                <h4 class="box-title text-info mt-30"><i class="ti-share me-15"></i> Social Profile</h4>
                                                <hr class="my-15">
                                                <div class="form-group">
                                                    <label class="form-label">Facebook</label>
                                                    <input class="form-control" type="text" placeholder="Facebook">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Twitter</label>
                                                    <input class="form-control" type="text" placeholder="Twitter">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Instagram</label>
                                                    <input class="form-control" type="text" placeholder="Instagram">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Linkedin</label>
                                                    <input class="form-control" type="text" placeholder="Linkedin">
                                                </div>
                                                <hr class="my-15">
                                            </div>
                                            <div class="d-flex justify-content-end gap-items-2">
                                                <button type="submit" class="btn btn-success">
                                                    <i class="ti-save-alt"></i> Save changes
                                                </button>
                                                <button type="button" class="btn btn-danger">
                                                    <i class="ti-trash"></i> Cancel
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-password" role="tabpanel" aria-labelledby="pills-password-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <form class="form">
                                            <div>
                                                <h4 class="box-title text-info"><i class="ti-user me-15"></i> Reset Password</h4>
                                                <hr class="mb-15">
                                                <div class="form-group">
                                                    <label class="form-label">User Name</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ti-user"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Username">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Email address</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ti-email"></i></span>
                                                        </div>
                                                        <input type="email" class="form-control" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Current Password</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ti-lock"></i></span>
                                                        </div>
                                                        <input type="password" class="form-control" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Password</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ti-lock"></i></span>
                                                        </div>
                                                        <input type="password" class="form-control" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Confirm Password</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ti-lock"></i></span>
                                                        </div>
                                                        <input type="password" class="form-control" placeholder="Confirm Password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox1" type="checkbox">
                                                        <label for="checkbox1" class="form-label"> Remember me </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end gap-items-2">
                                                <button type="submit" class="btn btn-success">
                                                    <i class="ti-save-alt"></i> Save changes
                                                </button>
                                                <button type="button" class="btn btn-danger">
                                                    <i class="ti-trash"></i> Cancel
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif ; ?>
                </div>
            </div>
        </div>
    </div>
</section>