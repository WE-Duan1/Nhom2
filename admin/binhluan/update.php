	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Product Type</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
    <?php 
                    if(is_array($binhl)){
                        extract($binhl);
                        // var_dump($binhl);
                    }
                    // $ha="../upload/".$img;
                    // if (is_file($ha)) {
                    //    $hinh="<img src='".$ha."' height='150' width='45%'>";
                    // }else{
                    //     $hinh="Không tìm thấy hình";
                    // }
                ?>
        <div class="row-form">
            <div class="row-title text-center" style="margin-top:20px;">
                <h3>Cập nhập bình luận</h3>
            </div>
            <div class="container">
                <form action="index.php?act=updatebl" method="post">
                    <div class="form-group">
                        <label for="email">Nội dung</label>
                        <input type="text" name="noidung" id="" class=" form-control" value="<?php echo $binhl[0]['noi_dung']?>"> 
                    </div>
                    <div class="d-flex justify-content-center">
                        <input type="hidden" name="id" value="<?php echo $binhl[0]['id']?>">
                        <input type="submit" value="Cập nhập" name="capnhapbl" class="form-control " style=" width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                        <input type="reset" value="Nhập lại" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                        <a href="index.php?act=binhluan"><input type="button" value="Danh sách" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
                    </div>
                    <!-- <input type="submit" value="Thêm mới" name="themmoi" class="btn btn-default border-0 " style="margin-bottom:15px; width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                    <input type="reset" value="Nhập lại" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                    <a href="index.php?act=lisdm"><input type="button" value="Danh sách" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a> -->
                    <?php
                        if (isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>