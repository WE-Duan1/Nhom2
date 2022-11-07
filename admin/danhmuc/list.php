	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Product List</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
    <div class="container-fluid">
        <div class="row-title text-center" style="margin-top:20px;">
            <h3>List Category</h3>
        </div>
        <div class="table-responsive-sm">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th></th>
                        <th style="width:360px;">Code</th>
                        <th style="width:360px;">Name</th>
                        <th style="width:360px;">Set Up</th>
                    </tr>
                </thead>
                <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        $suadm="index.php?act=suadm&ma_loai=".$ma_loai;
                        $xoadm="index.php?act=xoadm&ma_loai=".$ma_loai;
                        echo '
                        <tbody>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$ma_loai.'</td>
                                <td>'.$ten_loai.'</td>
                                <td><a href="'.$suadm.'"><input type="button" value="Edit" ></a> <a href="'.$xoadm.'"><input type="button" value="Delete"></a></td>
                            </tr>
                        </tbody>';
                    }
                ?>
            </table>
                <div class="d-flex justify-content-center">
                <input type="submit" value="Select All" name="" class="form-control " style=" width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                <a href="index.php?act=adddm"><input type="submit" value="Add New" name="themmoi" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
                <input type="submit" value="Edit" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
            </div>
        </div>
    </div>