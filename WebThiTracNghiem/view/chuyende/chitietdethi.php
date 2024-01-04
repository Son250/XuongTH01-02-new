<div class="container-thi" >
     <div class='title'>
          <div class="title-thi">
               <h2 class="text-dark"><?php echo $olddata['name'] ?></h2>
          </div>
     </div>
     <div class="content-thi">
          <div class="box-center" id="fixedBoxCenter">
               <div class="box-title" align='center'>
                    <h3 class="text-dark"><?php echo $getOneDeThi['ten_de'] ?></h3>
               </div>
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
                                        <input value="<?php echo $dapan['id']  ?>" type="radio" name="content-dapan-<?php echo $keych + 1  ?>" id="dapan<?= $keych + 1 ?>_<?= $keyda + 1 ?>" data-question-id="question<?= $keych + 1 ?>">
                                                  <label class="green" for="dapan<?= $keych + 1 ?>_<?= $keyda + 1 ?>" data-question-id="question<?= $keych + 1 ?>"><?php echo $dapan['content_dapan'] ?></label> <br>
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