    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Blog</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Blog 1</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Blog Categorie Area =================-->
    <section class="blog_categorie_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="img/blog/cat-post/cat-post-3.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html">
                                    <h5>Đời sống</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Cùng nhau tận hưởng cuộc sống</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="img/blog/cat-post/cat-post-2.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html">
                                    <h5>Chính trị</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Trở thành chính trị gia</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="img/blog/cat-post/cat-post-1.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html">
                                    <h5>Món ăn</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Ẩm thực đa dạng & phong phú</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Categorie Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        <?php
                        
                        foreach($ttnew as $ttuc){
							extract($ttuc);
							$hinh=$img_path.$img;
							echo '
                            
                            <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Món ăn,</a>
                                        <a class="active" href="#">Công nghệ,</a>
                                        <a href="#">Chính trị,</a>
                                        <a href="#">Cách sống</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Đức Bo<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">'.$ngaydang.'<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="'.$hinh.'" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>'.$name.'</h2>
                                        </a>
                                        <p>'.$mota.'</p>
                                        <a href="single-blog.html" class="white_bg_btn">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        ';
                        }
                        
                        ?>
                        <!-- <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Food,</a>
                                        <a class="active" href="#">Technology,</a>
                                        <a href="#">Politics,</a>
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">12 Dec, 2018<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="img/blog/main-blog/m-blog-1.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>Astronomy Binoculars A Great Alternative</h2>
                                        </a>
                                        <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                            understand why you should have to spend money on boot camp when you can get
                                            the MCSE study materials yourself at a fraction.</p>
                                        <a href="single-blog.html" class="white_bg_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article> -->
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Món ăn,</a>
                                        <a class="active" href="#">Công nghệ,</a>
                                        <a href="#">Chính trị,</a>
                                        <a href="#">Cách sống</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Tô Ân Xô<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">12 Dec, 2018<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.2M Lượt xem<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">06 Bình luận<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="https://i1-sohoa.vnecdn.net/2022/11/15/google-wallet-7956-1668501927.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=PrVniTBszgRtl9OTckdDgg" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>Google triển khai ví điện tử tại Việt Nam</h2>
                                        </a>
                                        <p>Với Google Wallet, người dùng Android có thể thêm thẻ thanh toán quốc tế 
                                            của một số ngân hàng vào điện thoại và sử dụng thay thẻ vật lý..</p>
                                        <a href="single-blog.html" class="white_bg_btn">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a class="active" href="#">Món ăn,</a>
                                        <a href="#">Công nghệ,</a>
                                        <a href="#">Chính trị,</a>
                                        <a href="#">Cách sống</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Elon Musk<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">12 Dec, 2018<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.2M Lượt xem<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">06 Bình luận<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="https://i1-giadinh.vnecdn.net/2022/11/15/Thnhphm11-1668508822-8365-1668508912.jpg?w=0&h=0&q=100&dpr=2&fit=crop&s=EFxQDNF9bJ9R5KB4qwv_HQ" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>Cá bống kho tương hao cơm ngày lạnh</h2>
                                        </a>
                                        <p>Thịt cá săn đậm vị, thơm mùi tương bần đặc trưng. Nước kho sánh màu nâu đỏ, chấm cùng rau luộc, 
                                            trở thành món ăn bình dân nhưng không thể quên với nhiều thế hệ.</p>
                                        <a href="single-blog.html" class="white_bg_btn">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Food,</a>
                                        <a class="active" href="#">Technology,</a>
                                        <a href="#">Politics,</a>
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">12 Dec, 2018<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="img/blog/main-blog/m-blog-4.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>The Night Sky</h2>
                                        </a>
                                        <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                            understand why you should have to spend money on boot camp when you can get
                                            the MCSE study materials yourself at a fraction.</p>
                                        <a href="single-blog.html" class="white_bg_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article> -->
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Món ăn,</a>
                                        <a href="#">Công nghệ,</a>
                                        <a class="active" href="#">Chính trị,</a>
                                        <a href="#">Cách sống</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Tom<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">12 Dec, 2022<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.2M Lượt xem<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">06 Bình luận<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="https://i1-vnexpress.vnecdn.net/2022/11/15/202211090832322612-z3863451791-2766-3560-1668502587.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=zUvhdVB_QpE72f71HxI3hg" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.html">
                                            <h2>Sẽ sử dụng công nghệ số kiểm soát tài sản cán bộ</h2>
                                        </a>
                                        <p>Quốc hội yêu cầu sau năm 2025 thực hiện chuyển đổi số 100% công tác kiểm soát tài sản, 
                                            thu nhập cán bộ, công chức bằng cách sử dụng công nghệ số, dữ liệu số.</p>
                                        <a href="single-blog.html" class="white_bg_btn">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-left"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item"><a href="#" class="page-link">01</a></li>
                                <li class="page-item active"><a href="#" class="page-link">02</a></li>
                                <li class="page-item"><a href="#" class="page-link">03</a></li>
                                <li class="page-item"><a href="#" class="page-link">04</a></li>
                                <li class="page-item"><a href="#" class="page-link">09</a></li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-right"></span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Tìm kiếm..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                </span>
                            </div><!-- /input-group -->
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget author_widget">
                            <img class="author_img rounded-circle" src="img/blog/author1.png" alt="">
                            <h4>Nguyen Tan Duy</h4>
                            <p>Thiết kế Website</p>
                            <div class="social_icon">
                                <a href="https://www.facebook.com/JiChoiSeok" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                                <a href="https://twitter.com/ng_tanduy" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                                <a href="https://github.com/TanDuy03" target="_blank"><i class="fa-brands fa-github"></i></a>
                                <a href="https://www.instagram.com/cuxe2612/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                            <p>Lập trình web là công việc có nhiệm vụ nhận tất cả các dữ liệu từ bộ phận thiết kế web để chuyển thành một bộ máy web hoàn chỉnh có tác động qua lại với 
                                cơ sở dữ liệu và tương tác với người dùng dựa trên ngôn ngữ máy tính.</p>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Bài viết phổ biến</h3>
                            <div class="media post_item blogImg">
                                <img src="https://i1-sohoa.vnecdn.net/2022/11/15/Musk-2-5009-1668502847.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=FZCxjrGAMvJN7tzM9X6N_g" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Elon Musk than nhiều việc</h3>
                                    </a>
                                    <p>02 giờ trước</p>
                                </div>
                            </div>
                            <div class="media post_item blogImg">
                                <img src="https://i1-sohoa.vnecdn.net/2022/11/14/bitcoin-5793-1641988619-6215-1-5119-9664-1668366405.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=jzY2JwgBaAMyD7Nedv0Bfw" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Niềm tin vào tiền số lung lay</h3>
                                    </a>
                                    <p>02 giờ trước</p>
                                </div>
                            </div>
                            <div class="media post_item blogImg">
                                <img src="https://i1-thethao.vnecdn.net/2022/11/15/New-Project-64-3392-1668474392.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=zExJIBh-Jhl6GI4TV4FZaA" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Ronaldo có thể đã đàm phán với Bayern</h3>
                                    </a>
                                    <p>03 giờ trước</p>
                                </div>
                            </div>
                            <div class="media post_item blogImg">
                                <img src="https://i1-vnexpress.vnecdn.net/2022/08/23/rear-view-programmer-working-a-5140-5037-1661248729.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=6TfAuU0xEXlU75niTTgKpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>AI Hackathon 2022 thu hút nhiều mô hình thông minh</h3>
                                    </a>
                                    <p>01 Hours ago</p>
                                </div>
                            </div>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget ads_widget">
                            <a href="#"><img class="img-fluid" src="img/blog/add.jpg" alt=""></a>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Danh mục bài viết</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Công nghệ</p>
                                        <p>37</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Phong cách sống</p>
                                        <p>24</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Thời trang</p>
                                        <p>59</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Mĩ thuật</p>
                                        <p>29</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Thức ăn</p>
                                        <p>15</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Kiến trúc</p>
                                        <p>09</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Phiêu lưu</p>
                                        <p>44</p>
                                    </a>
                                </li>
                            </ul>
                            <div class="br"></div>
                        </aside>
                        <aside class="single-sidebar-widget newsletter_widget">
                            <h4 class="widget_title">Bản tin</h4>
                            <p>
                                Sau Twitter và Meta, Amazon được cho là sẽ trở thành hãng
                                công nghệ lớn tiếp theo cắt giảm hàng nghìn nhân viên trong tuần này.
                            </p>
                            <div class="form-group d-flex flex-row">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Nhập email"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                </div> 
                            </div>
                            <div class="btnPost">
                                <button>Đăng ký</button>
                            </div>
                            <p class="text-bottom">Bạn có thể <a href="#" style="color:red;text-decoration:underline;"> hủy đăng ký </a> bất kì lúc nào</p>
                            <div class="br"></div>
                        </aside>
                        <aside class="single-sidebar-widget tag_cloud_widget">
                            <h4 class="widget_title">Thể loại</h4>
                            <ul class="list">
                                <li><a href="#">Công nghệ</a></li>
                                <li><a href="#">Thời trang</a></li>
                                <li><a href="#">Kiến trúc</a></li>
                                <li><a href="#">Khoa học</a></li>
                                <li><a href="#">Món ăn</a></li>
                                <li><a href="#">Du lịch</a></li>
                                <li><a href="#">Kinh doanh</a></li>
                                <li><a href="#">Số hóa</a></li>
                                <li><a href="#">Phong cách sống</a></li>
                                <li><a href="#">Pháp luật</a></li>
                                <li><a href="#">Giáo duch</a></li>
                                <li><a href="#">Sức khỏe</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
    <style>
        .blog_post img{
            width:540px;
            height:292px;
        }
        .blogImg img{
            width:100px;
            height:60px;
        }
        .btnPost button{
            width:100px;
            height:35px;
            outline:none;
            border:none;
            background-color: #ffba00;
            color: #ffffff;
            margin:5px;
        }
    </style>
