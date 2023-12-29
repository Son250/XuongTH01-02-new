<div class="container content-boder-user chon_cauhoi">
    <form method="post" action="?act=chon_cauhoi">
        <div class="title-boder-top-user">
            <p>CHỌN CÂU HỎI CHO ĐỀ THI</p>
        </div>
        <br>
        <div class="add-user">
            <div>
                <a href="?act=dslt">
                    Trở về
                </a>
                <a href="javascript:void(0)" onclick="selectAllCheckboxes()">Chọn tất cả</a>

                <a href="">Bỏ chọn tất cả</a>
                <button type="submit" class="btn" name="btnSubmit">Xác nhận</button>

            </div>
            <div>
                <!-- <div>
                
                
                        <select name="id_cd" id="" class='loc_dethi'>
                            <option value="" hidden>--Lọc theo chuyên đề --</option>
                            <?php foreach ($listchuyende as $key => $value) : ?>
                                <option value="<?= $value['id_cd'] ?>"><?= $value['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <button class="btn" type="submit" name="btnTimkiem">Tìm kiếm</button>
                    
                </div> -->
            </div>
        </div><br>

        <div class="main-user">
            <table>

                <div>
                    <h4 class="bold">Tên kỳ thi: <?php echo $olddata['name'] ?> </h4>
                </div>
                <thead>
                    <tr>
                        <td>STT</td>
                        <td class='chuyen_de'>Chuyên đề</td>
                        <td class='cau_hoi'>Câu hỏi</td>
                        <?php for ($i = 1; $i <= $olddata['so_de_thi']; $i++) : ?>
                            <td>Đề <?= $i ?> </td>
                        <?php endfor; ?>
                    </tr>
                </thead>

                <tbody>

                    <input type="text" hidden name='id_lichthi' value='<?= $_GET['idlt'] ?>'>

                    <!-- Các checkbox cho từng đề thi -->
                    <?php foreach ($listcauhoi as $key => $value) : extract($value) ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $ten_cd ?></td>
                            <td><?= $content ?></td>
                            <?php for ($i = 1; $i <= $olddata['so_de_thi']; $i++) : ?>
                                <td><input type="checkbox" id="ch_de<?= $i ?>_<?= $key ?>" name="selected_ch_de<?= $i ?>[]" value="<?= $id_ch ?>"></td>
                            <?php endfor; ?>
                        </tr>
                    <?php endforeach; ?>



                </tbody>


            </table>

        </div>
    </form>
</div>

<script>
    function selectAllCheckboxes() {
        <?php for ($i = 1; $i <= $olddata['so_de_thi']; $i++) : ?>
            var checkboxes<?= $i ?> = document.querySelectorAll('input[name="selected_ch_de<?= $i ?>[]"]');
            checkboxes<?= $i ?>.forEach(function(checkbox) {
                checkbox.checked = true;
            });
        <?php endfor; ?>
    }
</script>