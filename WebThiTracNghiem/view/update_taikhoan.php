<body class="theme-primary rtl">
    <section class="py-50">
        <div class="container">
            <div class="row justify-content-center g-0">
                <div class="col-lg-5 col-md-5 col-12">
                    <div style="margin-top: 50px;" class="box box-body">
                        <div class="content-top-agile pb-0 pt-20">
                            <h2 class="text-primary">Cập Nhật Tài Khoản</h2>
                            <p class="mb-0">Update Account</p>
                        </div>
                        <div style="margin-left: 36%;color: red;" class="thongbaodangky">
                            <?php
                            if (isset($thongbao)) {
                            ?>
                                <h5><?php echo $thongbao ?></h5>
                            <?php } ?>
                        </div>
                        <div class="p-40">
                            <form action="?act=update-tk" method="post">
                                <input type="hidden" name="id" value="<?php echo $old_account['id'] ?>">
                                <div class="form-group">
                                    <div class="input-group mb-15">
                                        <span class="input-group-text bg-transparent"><i class="fa-solid fa-user"></i></span>
                                        <input type="text" name="username" class="form-control ps-15 bg-transparent" required placeholder="Account" value="<?php echo  $old_account['username'] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-15">
                                        <span class="input-group-text bg-transparent"><i class="fa-solid fa-envelope"></i></span>
                                        <input type="email" name="email" class="form-control ps-15 bg-transparent" required placeholder="Email" value="<?php echo  $old_account['email'] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-15">
                                        <span class="input-group-text bg-transparent"><i class="fa-solid fa-lock"></i></span>
                                        <input type="text" name="password" class="form-control ps-15 bg-transparent" required placeholder="Password" value="<?php echo  $old_account['password'] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-15">
                                        <span class="input-group-text bg-transparent"><i class="fa-solid fa-face-smile"></i></span>
                                        <input type="text" name="fullname" class="form-control ps-15 bg-transparent" required placeholder="Fullname" value="<?php echo  $old_account['fullname'] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-15">
                                        <span class="input-group-text bg-transparent"><i class="fa-solid fa-location-dot"></i></i></span>
                                        <input type="text" name="diachi" class="form-control ps-15 bg-transparent" required placeholder="Address" value="<?php echo  $old_account['address'] ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- /.col -->
                                    <div class="col-12 text-center">
                                        <button type="submit" name="btn-update-tk" onclick="thongbao()" class="btn btn-info w-p100 mt-15">Cập nhật</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Vendor JS -->
    <script>
        function thongbao(){
            alert("Cập nhật thành công!");
        }
    </script>
    <script src="js/vendors.min.js"></script>
    <!-- Corenav Master JavaScript -->
    <script src="corenav-master/coreNavigation-1.1.3.js"></script>
    <script src="js/nav.js"></script>
    <script src="../../assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js"></script>

    <!-- EduLearn front end -->
    <script src="js/template.js"></script>



</body>