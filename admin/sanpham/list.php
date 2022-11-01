	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Customer account</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
<div class="container-fluid">
    <div class="row-title text-center" style="margin-top:20px;">
        <h3>Danh sách sản phẩm</h3>
    </div>
    <div class="table-responsive-sm">
        <div class="d-flex ">
            <input type="submit" value="Chọn tất cả" name="themmoi" class="form-control " style=" width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
            <a href="index.php?act=addsp"><input type="submit" value="Thêm mới" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
            <input type="submit" value="Chỉnh sửa" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
        </div>
        <form action="index.php?act=listsp" method="post">
            <select name="iddm" id="" class="form-select form-select-lg mb-3" aria-label=".form-select-sm example">
                <option selected value="0">Chọn danh mục</option>
                <?php 
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo'<option value="'.$ma_loai.'" >'.$ten_loai.'</option>';
                    }
                ?>
            </select>
            <div class="form-group">
                <input type="text" name="kyw" class="" placeholder="Tìm kiếm...">
                <input type="submit" name="listgo" value="Tìm">
            </div>
        </form>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th></th>
                    <th>Mã loại</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình</th>
                    <th>Giá</th>
                    <th>Mô tả</th>
                    <th>Lượt xem</th>
                    <th>Thiết lập</th>
                </tr>
            </thead>
            <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    // var_dump($sanpham);
                    // $suatk="index.php?act=suatk&id=".$id;
                    $xoasp="index.php?act=xoasp&id=".$id;
                    $suasp="index.php?act=suasp&id=".$id;
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
                            <td>'.$price.'</td>
                            <td>'.$mota.'</td>
                            <td>'.$luotxem.'</td>
                            <td class="text-center"><a href="'.$suasp.'"><input type="button" value="Sửa" style="width:120px; margin:5px; border:none;" ></a> <a href="'.$xoasp.'"><input type="button" value="Xóa" style="width:120px;margin:5px; border:none;"></a></td>
                        </tr>
                    </tbody>';
                }
            ?>
        </table>
    </div>
</div>