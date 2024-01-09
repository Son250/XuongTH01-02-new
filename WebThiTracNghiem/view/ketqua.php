<section class="ket-qua">
    <div>
        <h2 align="center">Kết quả</h2>
    </div>
    <h3>Kỳ thi giữa học kì 1 - Đề 1</h3>
    <div class="content">
        <h5>Kết quả bạn đạt được:</h5>
        <div class="box-container">
            <div class="box">
                <p>Số câu đúng:</p>
                <span><?= $true ?>/<?= $cau?></span>
            </div>
            <div class="box">
                <p>Điểm số:</p>
                <span><?= $diem?></span>
            </div>
            <div class="box">
                <p>Thời gian làm bài:</p>
                <span>44:59 phút</span>
            </div>
            <div class="box">
       
                <p>Bạn đã làm đúng:</p>
                <span><?= round( ($true/$cau)*100) ?>%</span>
            </div>
        </div>
        <h5>Bài làm của bạn</h5>
        <p>.......</p>
    </div>
</section>