<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-gray-800">Chi tiết đề thi</h1>
    <p class="mb-3"><a href="?act=add-chuyende"></a></p>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Câu hỏi & Đáp án trong đề</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <h5 class="text-dark"><?php echo $olddata['name'] ?></h5>
                <h6 class="text-dark"><?php echo $getOneDeThi['ten_de'] ?></h6>
                <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Câu hỏi</th>
                            <th>Đáp án</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>STT</th>
                            <th>Câu hỏi</th>
                            <th>Đáp án</th>
                            <th>Thao tác</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($dsch_deThi as $key => $value) : extract($value) ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $ten_cauhoi ?></td>
                                <td><?= $content_dapan ?></td>
                                <td>Sửa Xóa</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table> -->
                <div class="box-content">

                    <!--Câu hỏi mà có hình ảnh  -->
                    <?php foreach ($list_cauhoi as $keych => $listch) :
                        $hinhanh = "../uploads/" . $listch['image'];
                        if (is_file($hinhanh)) {
                            $img_path = "<img src='" . $hinhanh . "' width='80px'>";
                        } else {
                            $img_path = "";
                        }
                    ?>
                        <div class="box-cauhoi">
                            <div class="content-cauhoi">
                                <p class='bold' id="<?= $keych + 1 ?>">Câu <?= $keych + 1 ?>: <?= $listch['content'] ?></p>
                                <div class="img-cauhoi">
                                    <!-- <img src="../assets/img/banner0.webp" alt=""> -->
                                    <?= $img_path ?>
                                </div>
                            </div>

                            <div class="box-dapan">
                                <?php
                                $list_dapan = load_dapan($listch['id_cauhoi']);
                                foreach ($list_dapan as $keyda => $dapan) :
                                    $hinh = "../uploads/" . $dapan['image'];
                                    if (is_file($hinh)) {
                                        $img = "<img src='" . $hinh . "' width='100px'>";
                                    } else {
                                        $img = "";
                                    }
                                ?>

                                    <div>
                                        <?php
                                        if ($dapan['right_answer'] == 1) : ?>

                                            <label class="green" for="dapan<?= $keych + 1 ?>_<?= $keyda + 1 ?>" data-question-id="question<?= $keych + 1 ?>"><?php echo $dapan['content_dapan'] ?></label> <br>
                                        <?php else : ?>

                                            <label class="red" for="dapan<?= $keych + 1 ?>_<?= $keyda + 1 ?>" data-question-id="question<?= $keych + 1 ?>"><?php echo $dapan['content_dapan'] ?></label> <br>

                                        <?php endif; ?>

                                        <!-- <img src="../assets/img/banner0.webp" alt=""> -->
                                        <?= $img ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->