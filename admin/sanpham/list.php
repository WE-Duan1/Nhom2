	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Sản phẩm</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
<div class="container-fluid">
    <div class="row-title text-center" style="margin-top:20px;">
        <h3>Danh Sách Sản Phẩm</h3>
    </div>
    <div class="table-responsive-sm">
        <div class="d-flex ">
            <input type="submit" value="Chọn Tất Cả" name="themmoi" class="form-control " style=" width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">

<<<<<<< HEAD
            <a href="index.php?act=addsp"><input type="submit" value="Add New" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
            
            <a href="index.php?act=addimg"><input type="submit" value="Add New Image" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
            <!-- end demo -->
            <input type="submit" value="Edit" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
=======
            <a href="index.php?act=addsp"><input type="submit" value="Thêm Mới" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
            
            <a href="index.php?act=addimg"><input type="submit" value="Thêm Hình" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>

            <input type="submit" value="Cập nhật" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
>>>>>>> a63091fb3416feab2df3952fa9505850242a711b
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
                <input type="text" name="kyw" class="" placeholder="Search..." style="border: 1px solid gray;border-radius:5px;outline:none;padding-left:5px;">
                <input type="submit" name="listgo" value="Tìm" style="border:1px solid gray;border-radius:5px;">
            </div>
        </form>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th></th>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Giá</th>
                    <th>Giá giảm</th>
                    <th>Mô tả</th>
                    <th>Lượt xem</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $xoasp="index.php?act=xoasp&id=".$id;
                    $suasp="index.php?act=suasp&id=".$id;
                    $imgsp="index.php?act=listimg&id=".$id;
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
                            <td>'.$price_old.'</td>
<<<<<<< HEAD
                            <td>'.$mota.'</td>
                            <td>'.$luotxem.'</td>
                            <td class="text-center">
                                <a href="'.$suasp.'"><input type="button" value="Edit" style="width:120px; margin:5px; border:none;" ></a>
                                <a href="'.$xoasp.'"><input type="button" value="Delete" style="width:120px;margin:5px; border:none;"></a>
                                <a href="'.$imgsp.'"><input type="button" value="Image" style="width:120px;margin:5px; border:none;"></a>
=======
                            <td>'.$price_new.'</td>
                            <td>'.$mota.'</td>
                            <td>'.$luotxem.'</td>
                            <td class="text-center">
                                <a href="'.$suasp.'"><input type="button" value="Sửa" style="width:120px; margin:5px; border:none;" ></a>
                                <a href="'.$xoasp.'"><input type="button" value="Xóa" style="width:120px;margin:5px; border:none;"></a>
                                <a href="'.$imgsp.'"><input type="button" value="Hình ảnh" style="width:120px;margin:5px; border:none;"></a>
>>>>>>> a63091fb3416feab2df3952fa9505850242a711b
                            </td>
                        </tr>
                    </tbody>';
                }
            ?>
        </table>
    </div>
</div>