<?php 
    session_start();
    ob_start();
    include "../model/pdo.php";
    include "../model/binhluan.php";
    $idpro=$_REQUEST['idpro'];
    $dsbl=loadall_binhluan($idpro);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>
    


<section style="background-color: #eee;">
  <div class="container my-5 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 col-lg-10 col-xl-8">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-start align-items-center">
              <div>
                <h6 class="fw-bold text-primary mb-1">Lily Coleman</h6>
                <p class="text-muted small mb-0">
                  Shared publicly - 08 Nov, 22
                </p>
              </div>
            </div>

            <p class="mt-3 mb-4 pb-2">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip consequat.
            </p>

            <div class="small d-flex justify-content-start">
              <a href="#!" class="d-flex align-items-center me-3">
                <i class="far fa-thumbs-up me-2"></i>&nbsp;
                <p class="mb-0">Like</p>
              </a>
              <a href="#!" class="d-flex align-items-center me-3" style="margin-left: 10px;">
                <i class="far fa-comment-dots me-2"></i>&nbsp;
                <p class="mb-0">Comment</p>
              </a>
              <a href="#!" class="d-flex align-items-center me-3" style="margin-left: 10px;">
                <i class="fas fa-share me-2"></i>&nbsp;
                <p class="mb-0">Share</p>
              </a>
            </div>
          </div>
          <?php 
            // echo"Duy nè".$idpro;
            foreach($dsbl as $bl){
                extract($bl);
                // var_dump($bl);
        
                echo '<div class="card-body">
                <div class="d-flex flex-start align-items-center">
                  <div>
                    <h6 class="fw-bold text-primary mb-1">Lily Coleman</h6>
                    <p class="text-muted small mb-0">
                      Shared publicly - '.$ngay_bl.'
                    </p>
                  </div>
                </div>
    
                <p class="mt-3 mb-4 pb-2">
                  '.$noi_dung.'
                </p>
    
                <div class="small d-flex justify-content-start">
                  <a href="#!" class="d-flex align-items-center me-3">
                    <i class="far fa-thumbs-up me-2"></i>&nbsp;
                    <p class="mb-0">Like</p>
                  </a>
                  <a href="#!" class="d-flex align-items-center me-3" style="margin-left: 10px;">
                    <i class="far fa-comment-dots me-2"></i>&nbsp;
                    <p class="mb-0">Comment</p>
                  </a>
                  <a href="#!" class="d-flex align-items-center me-3" style="margin-left: 10px;">
                    <i class="fas fa-share me-2"></i>&nbsp;
                    <p class="mb-0">Share</p>
                  </a>
                </div>
              </div>';
            }
            
          ?>
          </table>
            <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
            <div class="d-flex flex-start w-100">
               
                <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                    <input type="hidden" name="idpro" value="<?=$idpro?>">
                    <input type="text" name="noidung" style="outline: none; border:1px solid #ccc">
                    <input type="submit" name="guibinhluan" value="Publish">
                </form>
                <?php
                if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                    $noidung=$_POST['noidung'];
                    $idpro=$_POST['idpro'];
                    // $iduser=$_SESSION['iduser']['id']; 
                    $ngaybinhluan = date("d M, y");
                    insert_binhluan($noidung,$idpro,$ngaybinhluan); 
                    header("location: ".$_SERVER['HTTP_REFERER']);
                }
                
                 

                ?>
            </div>
            
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>