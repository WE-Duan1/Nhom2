	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Tài khoản</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
<div class="container-fluid">
    <div class="row-title text-center" style="margin-top:20px;">
        <h3>Thông Tin Tài Khoản</h3>
    </div>
    <div class="table-responsive-sm">
        <div class="d-flex ">
            <input type="submit" value="Chọn Tất Cả" name="" class="form-control " style=" width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
            <a href="index.php?act=addtk"><input type="submit" value="Thêm Mới" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
            <input type="submit" value="Cập Nhật" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
        </div>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th></th>
                    <th>Mã Tài Khoản</th>
                    <th>Họ Và Tên</th>
                    <th>Tên Tài Khoản</th>
                    <th>Mật Khẩu</th>
                    <th>Email</th>
                    <th>Địa Chỉ</th>
                    <th>Số Điện Thoại</th>
                    <th>Vai Trò</th>
                    <th style="width:200px;">Thao Tác</th>
                </tr>
            </thead>
            <?php
                foreach ($listtaikhoan as $taikhoan) {
                    extract($taikhoan);
                    // $suatk="index.php?act=suatk&id=".$id;
                    $xoatk="index.php?act=xoatk&ma_tk=".$ma_tk;
                    $suatk="index.php?act=suatk&ma_tk=".$ma_tk;
                    echo '
                    <tbody>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$ma_tk.'</td>
                            <td>'.$ho_ten.'</td>
                            <td>'.$user.'</td>
                            <td>'.$pass.'</td>
                            <td>'.$email.'</td>
                            <td>'.$address.'</td>
                            <td>'.$tel.'</td>
                            <td>'.$role.'</td>
                            <td>
                                <a href="'.$suatk.'"><input type="button" value="Cập Nhật" style="width:120px; margin:5px; border:none;" ></a>
                                <a href="'.$xoatk.'"><input type="button" value="Xóa" style="width:120px;margin:5px; border:none;"></a>
                            </td>
                        </tr>
                    </tbody>';
                }
            ?>
        </table>
    </div>
</div>