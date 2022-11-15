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
    <?php
        extract($sanpham);
        // var_dump($sanpham);
        // echo $id;
        $ha="upload/".$sanpham[0]['img'];
            if (is_file($ha)) {
            $hinh="<img src='".$ha."' height='100%' width='100%'>";
        }else{
            $hinh="Không tìm thấy hình";
        }
        // echo '<div>"'.$hinh.'"</div>'; 
        // echo '<div>'.$sanpham[0]['mota'].'</div>';
    ?>
    <div class="container-fluid" style="margin-top: 30px;">
        <div class= "row">
            <div class ="col-sm-5">
                <?php echo '<div style="width=300px;height:500px; border:1px solid #ccc;">'.$hinh.'</div>';?>
                <div style="margin-top: 20px;">
                    <h4>Describe</h4>
                    <p style="margin-left: 20px;"><?=$sanpham[0]['mota'] ?></p>
                </div>
            </div>
            <div class ="col-sm-3">
                <h1 style="text-align:center;font-size:22px;"><?php echo $sanpham[0]['name']?></h1>
                <p style="font-weight:bold; text-align:center; color:red;font-size:25px;">$ <?php echo $sanpham[0]['price_old']?></p>
                <div class="btn-size">
                    <h6>Choose Size</h6>
                    <button class="btn btn-outline-secondary" style="margin-left: 20px;">35</button>
                    <button class="btn btn-outline-secondary">36</button>
                    <button class="btn btn-outline-secondary">37</button>
                    <button class="btn btn-outline-secondary">38</button> <br>
                    <button class="btn btn-outline-secondary" style="margin-left: 20px;">39</button>
                    <button class="btn btn-outline-secondary">40</button>
                    <button class="btn btn-outline-secondary">41</button>
                    <button class="btn btn-outline-secondary">42</button>
                </div>
                <div class="">
                    <h6 style="margin-top: 20px;">Amount</h6> 
                    <div class="amount-form" style="margin-left: 20px;">
                        <button class="btn-minus" id="minus" onclick="handleMinus()"><i class="fa-solid fa-minus"></i></button>
                        <input type="number" value="1" id="amount">
                        <button class="btn-plus" id="plus" onclick="handlePlus()"><i class="fa-solid fa-plus"></i></button>
                        <input type="submit" value="<?=$sanpham[0]['trang_thai']? "Add To Cart":"Out Of Stock"?>" <?=$sanpham[0]['trang_thai']? "":"disabled"?> class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                    </div>
                </div>
                <div class="">
                    <h6 style="margin-top: 10px;">SKU</h6>
                    <p style="margin-left: 20px;"><?=$sanpham[0]['ten_loai'] ?></p>
                </div>
                <div class="">
                    <h6 style="margin-top: 20px;">Category</h6>
                    <p style="margin-left: 20px;">SHOES <?=$sanpham[0]['ten_loai'] ?></p>
                </div>
                <script>
                   let amountElement = document.getElementById("amount");
                    let amount = amountElement.value;
                    let render = (amount) => {
                    amountElement.value = amount;
                    }
                    let handlePlus = () => {
                    if(amount<15){
                    amount++;
                    render(amount);
                    }
                    }

                    let handleMinus = () => {
                    if(amount>1){
                    amount--;
                    render(amount);
                    }
                    }

                    amountElement.addEventListener('input',  () => {
                    amount = amountElement.value;
                    amount = parseInt(amount);
                    amount = (isNaN(amount) || amount == 0)?1:amount;
                    render(amount);
                    })

                </script>
            </div>
            <div class ="col-sm content-pr">
                <div class= "row" style="margin-left: 30px; margin-top: 80px;">
                    <div class ="col-md-5 col-sm-6 text-center" style="word-break: break-all;">
                        <p><i class="fa-solid fa-rotate"></i>&nbsp;</p><span style="word-wrap: break-word;"> 100% Genuine - Exchange in 1 month (for unused product)</span>
                    </div>
                    <div class ="col-md-5 col-sm-6 text-center" style="word-break: break-all;">
                        <p><i class="fa-solid fa-truck"></i>&nbsp;</p><span> Free delivery for orders from 500,000 VND in the first 10km</span>
                    </div>
                    <div class ="col-md-5 col-sm-6 text-center" style="word-break: break-all; margin-top: 20px;">
                        <p><i class="fa-solid fa-share-from-square"></i>&nbsp;</p><span> Cash on delivery, online payment with many methods</span>
                    </div>
                    <div class ="col-md-5 col-sm-6 text-center" style="word-break: break-all; margin-top: 20px;">
                        <p><i class="fa-solid fa-headset"></i>&nbsp;</p><span> Call center: 1900.679.679 (7:30 - 22:00)</span>
                    </div>
                </div>
            </div>
    </div>
    <!--  -->
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
        .btn-minus{
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
        }
        .btn-plus{
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }
        .content-1 p{
            text-align: center;
        }
        .btn-size button{
            margin-top: 5px;
        }
        .btn-size button:hover{
            background-color: #ccc;
        }
        .amount-form{
            display: flex;
        }
        .amount-form input{
            outline: none;
            width: 50px;
            text-align: center;
            height: 35px;
            /* background-color: aqua; */
            border: 1px solid #ccc;
        }
        .amount-form button{
            border: 1px solid #ccc;
            outline: none;
            height: 35px;
            width: 35px;
            background-color: #cccc;
        }
    </style>
</div>