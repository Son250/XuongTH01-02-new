# Quản lý thi trắc nghiệm online
# Actor
    Người dùng
    Admin
# Chức năng
    - Admin:
        + Quản lý người dùng - Hoàng
            - Thêm, sửa, xóa, hiển thị (CRUD)
            - Chức năng đăng ký ng dùng
        + Quản lý chuyên đề (môn học) - Thắm
            - Thêm, sửa, xóa, hiển thị (CRUD)
        + Quản lý câu hỏi - Thanh
            - Thuộc về 1 chuyên đề
            - Thêm, sửa, xóa, hiển thị (CRUD)
            - Quản lý hình ảnh
            - 1 loại (1 câu đúng)
            - quản lý câu trả lời đúng
        + Quản lý đáp án - Trang
            - Thuộc về 1 câu hỏi
            - Thêm, sửa, xóa, hiển thị (CRUD)
            - Quản lý hình ảnh

        + Quản lý lịch thi
            - Tên kỳ thi
            - Bắt đầu thi, Kết thúc thi (time)
            - Thời gian thi
            - Số lượng đề thi
            - Loại (chính thức | luyện tập)
        + Quản lý đề thi
            - Thêm, sửa, xóa, hiển thị (CRUD)
            - Quản lý câu hỏi
        + Quản lý kết quả
            - Thông kê (điểm TB kỳ thi)
            - Thông kê (1 đề => từng câu 1 (đúng/ sai))
            - Từng sinh viên (từng câu đúng sai)
            - Điểm cao nhất, thấp nhất

    - Người dùng
        + Đăng nhập/ đăng ký
        + Xem danh sách kỳ thi (thi thử, thi thật)
        + Thi trắc nghiệm (từng câu một)
        + Xem kết quả


3.Chia công việc ngày 1/11/2023
         + Quản lý chuyên đề (môn học)
            -Hiển thị, Thêm : Thắm
            -Sửa, xóa : Hoàng
        + Quản lý câu hỏi (có cả image)
            - Hiển thị, Thêm: Thanh
            - Sửa, Xóa: Trang
         + Validate: Sơn

         
3.2:Chia việc ngày 15/11/2023
        + CRUD kết quả thi: Thanh
        + Đăng nhập/Đăng ký người dùng: Trang
        + Giao diện người dùng: Hoàng
        + Giao diện người dùng: Thắm         


3.3Chia việc ngày 21/11/2023
        + CRUD lịch thi: Sơn
        + Đổ dữ liệu chuyên đề, kỳ thi : Hoàng
        + Thời gian đếm ngược: Thanh
        + Giao diện kết quả thi(đã thi xong): Trang
        + Giao diện biểu đồ ở Kết quả thi(Admin): Thắm 


3.4. Chia việc ngày 29/11/2023
        + Sửa Quản lý lịch thi phần Thêm, Sửa có 
        hiện thời gian kết thúc = JS và lưu lên Db: Thanh
        + Thêm hình ảnh Chuyên đề, kỳ thi rồi in ra giao diện người dùng: Thắm
        + So sánh thời gian để hiện chữ "Vào thi", khi click vào thi sẽ 
        Random đề và lưu biến id đề đó: Hoàng
        + Sau khi có id đề vừa random, load toàn bộ câu hỏi ở đề ý lên: Trang
        
3.5. Chia việc ngày 06/12/2023
        + Nhập 30 câu hỏi vào database (có cả đáp án): Trang
        + Cho thời gian chạy ngược vào đề thi: Thanh
        + Sửa lại giao diện fixed câu hỏi và thời gian: Sơn
        + Random ra đề rồi thì lưu lại khi load lại ko random nữa: Hoàng
        + Sửa lại giao diện Trang chủ người dùng cho thật đẹp,sửa ảnh, sửa css 
        (tham khảo các trang khác như: tracnghiem.net): Thắm

3.6. Chia việc ngày 19/12/2023
        + Ở trang Thêm Đáp án, vd nếu nhập 4 đáp án mà ko có 1 đáp án Đúng thì sẽ ko cho submit: Hoàng
        + Sửa 1 đáp án đúng thôi, nếu admin nhập thừa hay thiếu đáp án đúng
         thì thông báo alert và ko cho submit: Thắm
        + Lưu đáp án (lưu id_da và id_ch)(ng dùng thi) vào mảng: Thanh
        + Tính điểm: vòng lặp $tongdiem = 0; 10đ:40 (40 là tổng số câu hỏi) = 0,25 ;
        Nếu có 1 câu đúng thì $tongdiem + 0,25;
        Ví dụ 20 câu đúng => 20 x 0,25 = 5điểm : Cả nhóm
        + Cắt giao diện tất cả : Sơn
        + Trang Đăng ký tài khoản và Thông tin tài khoản (code html,css và php): Trang

## Cơ sở dữ liệu
    tai_khoan:
        + id: PK
        + username: not null
        + password: not null (hash | md5)
        + fullname: not null
        + image : null
        + email: null
        + address / tel: null
        + role: 1 admin | default: 2 user
    
    chuyen_de:
        + id: PK
        + name: not null
    
    cau_hoi:
        + id: PK
        + content: not null
        + image: null

    dap_an:
        + id: PK
        + content: not null
        + image: null
        + right: 0 sai | 1 đúng
        + id_question: FK

    lich_thi:
        + id: PK
        + name: not null
        + time_start: not null (datetime)
        + time_end: not null (datetime)
        + time: not null (int)
        + so_de_thi: int
    
    de_thi
        + id: PK
        + bocauhoi:
        + id_lichthi: FK
    
    ketqua:
        + id: PK
        + boketqua:
        + id_ngdung
        + id_dethi
        + diem
