<?php
    ob_start(); 
    session_start();
    include 'view/header.php';
    include 'model/pdo.php';
    include 'model/taikhoan.php';
    include 'model/sanpham.php';
    include 'model/danhmuc.php';
    include 'model/tintuc.php';
    include 'var.php';

    $spnew =loadall_sanpham_home();
    $ttnew=loadall_tintuc_home();
    $dsdm =loadall_danhmuc();

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'blog':
                include 'view/blog.php';
                break;
            case 'cart':
                include 'view/cart.php';
                break;
            case 'category':
                include 'view/category.php';
                break;
            case 'checkout':
                include 'view/checkout.php';
                break;
            case 'confirmation':
                include 'view/confirmation.php';
                break;
            case 'contact':
                include 'view/contact.php';
                // include 'view/.php';
                break;
            case 'elements':
                include 'view/elements.php';
                break;
            case 'sanphamct':
                if (isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $id=$_GET['idsp'];
                    $sanpham=loadone_sanpham($id);
                    include 'view/sanphamct.php';
                }else{
                    include 'view/home.php';
                }
                break;
            case 'login':
                if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                    # code...
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $kq = getuserinfo($user,$pass);
                    $role = $kq[0]['role'];
                    if($role==1){
                        $_SESSION['role']=$role;
                        header('location: admin/index.php'); //note
                    }else{
                        $_SESSION['role']=$role;
                        $_SESSION['iduser']= $kq[0]['id'];
                        $_SESSION['user']= $kq[0]['user'];
                        header('location: index.php'); //note
                        break;
                    }
                }
                include 'view/login.php';
                break;
            case 'signup':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $email = $_POST['email'];
                    $fullname = $_POST['fullname'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    insert_taikhoan($email,$fullname,$user,$pass,$address,$tel); 
                    $thongbao="Đăng ký thành công. Vui lòng <a href='index.php?act=login'>đăng nhập</a>";
                }
                include 'view/signup.php';
                break;
            case 'thoat':
                unset($_SESSION['user']);
                unset($_SESSION['iduser']);
                unset($_SESSION['role']);
                header('location: index.php');
                break;
            case 'single-blog':
                include 'view/single-blog.php';
                break;
            case 'single-product':
                include 'view/single-product.php';
                break;
            default:
                include 'view/home.php';
                break;
        }
    }
    else{
        include 'view/home.php';
    }




    include 'view/footer.php';
?>