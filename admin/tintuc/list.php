	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Danh Sách Tin Tức</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
<div class="container-fluid">
    <div class="row-title text-center" style="margin-top:20px;">
        <h3>Danh Sách Tin Tức</h3>
    </div>
    <div class="table-responsive-sm">
        <div class="d-flex ">
            <input type="submit" value="Chọn Tất Cả" name="themmoi" class="form-control " style="margin:0 0 15px 0;  width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
            <a href="index.php?act=addtt"><input type="submit" value="Thêm Mới" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
            <input type="submit" value="Cập Nhật" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
        </div>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th></th>
                    <th>Mã Tin</th>
                    <th>Tiêu Đề</th>
                    <th>Hình Ảnh</th>
                    <th>Nội Dung</th>
                    <th>Ngày Đăng</th>
                    <th style="width:200px">Thao Tác</th>
                </tr>
            </thead>
            <?php
                foreach ($listtintuc as $tintuc) {
                    extract($tintuc);
                    // var_dump($sanpham);
                    // $suatk="index.php?act=suatk&id=".$id;
                    $xoatt="index.php?act=xoatt&id=".$id;
                    $suatt="index.php?act=suatt&id=".$id;
                    $ha="../upload/".$img;
                    if (is_file($ha)) {
                       $hinh="<img src='".$ha."' height='150' width='45%'>";
                    }else{
                        $hinh="Không tìm thấy hình";
                    }
                    echo '
                    <tbody>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td class="text-center">'.$hinh.'</td>
                            <td>'.$mota.'</td>
                            <td>'.$ngaydang.'</td>
                            <td class="text-center"><a href="'.$suatt.'"><input type="button" value="Sửa" style="width:120px; margin:5px; border:none;" ></a> <a href="'.$xoatt.'"><input type="button" value="Delete" style="width:120px;margin:5px; border:none;"></a></td>
                        </tr>
                    </tbody>';
                }
            ?>
        </table>
    </div>
</div>