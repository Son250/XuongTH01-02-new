<body class="theme-primary rtl">
    <section class="py-50">
        <div class="container">
            <div style="margin-top: 75px;" class="row justify-content-center g-0">
                <div class="col-lg-5 col-md-5 col-12">
                    <div style="text-align: center;" class="box-title-forgot-pass">
                        <h2 class="text-primary">FORGOT PASSWORD</h2>
                    </div>
                    <div class="box box-body mb-0">
                        <div class="content-top-agile pb-0 pt-20">
                            <h3 style="color: black;">Recover Password</h3>
                        </div>
                        <div class="p-40">
                            <form action="?act=forgot_password" method="post">
                                <div class="form-group">
                                    <div class="input-group mb-15">
                                        <span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
                                        <input type="email" name="email" class="form-control ps-15 bg-transparent" placeholder="Your Email">
                                        <?php
                                        if (isset($thongbaomk) && $thongbaomk != "") {
                                        ?>
                                            <input type="text" class="form-control ps-15 bg-transparent" value="<?php echo $thongbaomk; ?>">
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <button type="submit" name="btn-forgot-password" class="btn btn-info w-p100 mt-15">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>