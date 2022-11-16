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
        <h3>List Of Products</h3>
    </div>
    <div class="table-responsive-sm">
        <div class="d-flex ">
            <input type="submit" value="Select All" name="themmoi" class="form-control " style=" width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">

            <a href="index.php?act=addsp"><input type="submit" value="Add New" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
            
            <a href="index.php?act=addimg"><input type="submit" value="Add New Image" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>

            <input type="submit" value="Edit" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
        </div>
        <form action="index.php?act=listsp" method="post">
            <div class="form-group">
                <input type="text" name="kyw" class="" placeholder="Search..." style="border: 1px solid gray;border-radius:5px;outline:none;padding-left:5px;">
                <input type="submit" name="listgo" value="Go" style="border:1px solid gray;border-radius:5px;">
            </div>
        </form>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th></th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Set Up</th>
                </tr>
            </thead>
            <?php
                foreach ($listimg as $hinhanh) {
                    extract($hinhanh);
                    $xoaimg="index.php?act=xoaimg&id=".$id;
                    $ha="../upload/".$img;
                    if (is_file($ha)) {
                       $hinh="<img src='".$ha."' width='10%'>";
                    }else{
                        $hinh="Không tìm thấy hình";
                    }
                    echo '
                    <tbody>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td class="text-center">'.$hinh.'</td>
                            <td class="text-center">
                                <a href="'.$xoaimg.'"><input type="button" value="Delete" style="width:120px;margin:5px; border:none;"></a>
                            </td>
                        </tr>
                    </tbody>';
                }
            ?>
        </table>
    </div>
</div>