	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Update account</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
<div class="container">
    <div class="row-title text-center" style="margin-top:20px;">
        <h3>Update User</h3>
    </div>
    <?php 
        if(isset($_GET['ma_tk'])){
            $ma_tk = $_GET['ma_tk'];
            $ttnd = geton_taikhoan($ma_tk);
            // var_dump($ttnd);
    ?>
    <form action="index.php?act=edittk" method="POST">
        <div class="form-row">
            <div class="col form-group">
                <label for="exampleInputEmail1">Fullname</label>
                <input type="text" class="form-control" name="fullname" placeholder="" value="<?php echo $ttnd[0]['ho_ten']?>">
            </div>
            <div class="col form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" name="user" placeholder="" value="<?php echo $ttnd[0]['user']?>">
            </div>
            <div class="col form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="text" class="form-control" name="pass" placeholder="" value="<?php echo $ttnd[0]['pass']?>">
            </div>
            <div class="col-3 form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" name="email" placeholder="" value="<?php echo $ttnd[0]['email']?>" disabled>
            </div>
            <div class="col form-group">
                <label for="exampleInputEmail1">Address</label>
                <input type="text" class="form-control" name="address" placeholder="" value="<?php echo $ttnd[0]['address']?>">
            </div>
            <div class="col form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="text" class="form-control" name="tel" placeholder="" value="<?php echo $ttnd[0]['tel']?>">
            </div>
            <!-- <div class="d-flex justify-content-center">
                <input type="submit" value="Cập nhập" name="capnhap" class="form-control" style=" width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;margin-bottom:15px">
            </div> -->
        </div>
        <div class="d-flex justify-content-center">
            <input type="hidden" name="ma_tk" value="<?=$ma_tk?>">
            <input type="submit" value="Update" name="capnhap" class="form-control" style=" width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;margin-bottom:15px">
        </div>
    </form>
    <?php }?>
</div>