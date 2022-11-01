<!--  -->
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Shop Category page</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Product details</a>
						<a href="category.html"></a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

<!--  -->
<div class= "container-fluid">
    <div class= "row">
    <div class ="col-md-7">
        <h4 class="mb-3 text-center" style="margin-top:15px;">Chi tiết sản phẩm</h4>
        <h2 class="mb-3 text-center"><?php echo $sanpham[0]['name']?></h2><br>
        <div class="row">
            <?php
                extract($sanpham);
                // var_dump($sanpham);
                // echo $id;
                $ha="upload/".$sanpham[0]['img'];
                    if (is_file($ha)) {
                    $hinh="<img src='".$ha."' height='300' width='30%'>";
                }else{
                    $hinh="Không tìm thấy hình";
                }
                // echo '<div>"'.$hinh.'"</div>'; 
                // echo '<div>'.$sanpham[0]['mota'].'</div>';
            ?>
        </div>
        <div class="mb-3 text-center"><?php echo '<div>"'.$hinh.'"</div>';?></div>
        <div class="mb-3 text-center"><?php echo '<div> $ '.$sanpham[0]['price'].'</div>';?></div>
        <div class="mb-3 text-center"><?php echo '<div>'.$sanpham[0]['mota'].'</div>';?></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
            // $("input").keyup(function(){
            //     txt = $("input").val();
                $("#binhluan").load("view/comment.php", {idpro: <?=$id?>});
            // });
            });
        </script>
        <div class="form-group" id="binhluan">
            
        </div>
        <!-- <div class="form-group d-flex justify-content-center">
            <input type="submit" value="Gửi" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
        </div> -->
    </div>
    <!-- <div class ="col-md-2 bg-primary">
        <p>col-md-2</p>
    </div> -->
    <div class ="col" style="margin-top: 100px;">
        <a href="index.php?act=checkout"><input type="submit" value="Mua hàng" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
    </div>
    </div>
</div>