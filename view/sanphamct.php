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
<!-- <div class= "container-fluid" >
    <div class= "row">
    <div class ="col-md-7">
        <h4 class="mb-3 text-center" style="margin-top:15px;">Product Details</h4>
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
        
        <div class="form-group d-flex justify-content-center">
            <input type="submit" value="Gửi" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
        </div> -->
    </div>
    <!-- <div class ="col-md-2 bg-primary">
        <p>col-md-2</p>
    </div> -->
    <div class="content1" >
        <div class="article" width="100%"><?php echo '<div style="width=100%;height:100%;">"'.$hinh.'"</div>';?></div>
        
    <div class="aside">
                <div>
                    <a href="#./view/home">Home /</a>
                    <a href="#">PUMA / </a>
                    <a href="#"><p class=""><?php echo $sanpham[0]['name']?></p><br></a>
                </div>
                <h2 class="mb-3 text-center"><?php echo $sanpham[0]['name']?></h2><br>
                <div class="price">
                <div class="mb-3 text-center" style="font-size:20px; color:red;font-weight:bold;"><?php echo '<div> $ '.$sanpham[0]['price'].'</div>';?></div>
                </div>
                <div style="text-align:left; padding:10px; font-size: 13px">
                    <p>1. BUY FROM THE SECOND PRODUCT 35% OFF <br>
                    <p>2. SPECIAL OFF SPORTS ACCESSORIES EXTRA 20% OFF <br>
                    <p>3. BUY HUGE SOFTWARE WITH DECORATION ACCESSORIES 20% OFF <br>
                    <p>Choose size: </p>
                    </p>
                </div>
                
                    <div class="butt1"><p>36</p></div>
                    <div class="butt1"><p>37</p></div>
                    <div class="butt1"><p>38</p></div>
                    <div class="butt1"><p>39</p></div>
                    <div class="butt1"><p>40</p></div>
                    <div class="butt1"><p>41</p></div>
                    <div class="butt1"><p>42</p></div>
                
                <div class="butt"><button>- 1 +</button></div>
                <button>Add to cart</button>
                <div class="SKU">
                    <p>SKU: nike <br> Category: shoes, nike</p>
                </div>
            </div >
        <!-- <a href="index.php?act=checkout"><input type="submit" value="Add to cart" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a> -->
    </div>
    </div>
    <div class="content2">
            <div class="description">
                <p>Describe</p><p>Details</p><p>Comment</p>
                
            </div>
            <?php
//index.php

?>


            <div class="Descrip">
                <h3>Describe:</h3>
                <div style="margin-left: 50px; margin-right:50px;"><?php echo '<div>'.$sanpham[0]['mota'].'</div>';?></div>
            </div>
        </div>
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
    </div>  
    <style>
        .content2{
    height: 300px;
    margin-top: 250px;
}
.content2 .description{
    border-bottom: 1px solid rgb(206, 206, 206);
    margin-right: 130px;
    margin-bottom: 10px;
    margin-left: 50px;
    padding-bottom: 20px;
}
.content2 .description p{
    color: rgb(85, 85, 85);
    display: inline;
    padding-left: 40px;
}
.content2 h3{
    color: black;
    padding: 30px 50px;
}
.content2 .Descrip h3{
    font-size: 25px;
}
.content2 .Descrip p{
    color: rgb(82, 82, 82);
    padding-left: 30px;
    border-bottom: 1px solid rgb(190, 190, 190);
    margin-right: 130px;
    margin-left: 50px;
    padding-bottom: 50px;
}
    
                .butt1{
                    display: inline-block;
                }
                .content1{
                    
                    margin-left: 50px;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    flex-wrap: wrap;
                    padding: 0 50px;
                }
                .article{
                    position: relative;
                    width: 500px;
                    height: 100%;
                   
                    margin-top: 100px;
                }
                
                .content1 .article span{
                    position: absolute;
                    top: 14px;
                    right: 16px;
                    border: 1px solid white;
                    border-radius: 50%;
                    padding: 6px 9px;
                }
                .aside{
                    margin-right: 150px;
                    height: 500px;
                    width: 41.5%;
                }
                .aside a{
                    color: rgb(121, 121, 121);
                    font-size: 14px;
                }
                .aside h4{
                    color: rgb(51, 51, 51);
                    font-size: 32px;
                    padding: 12px 0; 
                }
                .aside .price del{
                    color: black;
                    text-decoration: line-through;
                    font-size: 13px;
                    color: rgb(121, 121, 121);
                }
                .aside .price p{
                    color: black;
                    font-size: 20px;
                }
                .aside .this-is p{
                    color: rgb(97, 97, 97);
                    padding: 50px 0;
                }
                .aside .SKU p{
                    border-top: 1px solid rgb(194, 194, 194);
                    margin-right: 80px;
                    color: rgb(95, 95, 95);
                    font-size: 13px;
                    padding-top: 15px;
                }
                .aside .butt{
                    display: inline;
                    margin-left: 130px;
                }
                .butt button{
                    letter-spacing: 17px;
                }

                .aside button{
                    margin-bottom: 70px;
                    width: 130px;
                    height: 45px;
                    border: 1px solid black;
                    background-color: white;
                    border-radius: 3px;
                    font-size: 15px;
                }
                .butt1{
                    
                    margin-bottom: 40px;
                    width: 60px;
                    height: 30px;
                    border: none;
                    background-color: #A9A9A9;
                    border-radius: 3px;
                    font-size: 15px;
                }
                .butt1 p{
                    
                    margin-left: 15px;
                    padding: 4px;
                }
            </style>
</div>