<?php

    function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
        // $sql = "INSERT INTO hang_hoa (name,price,img,mo_ta,iddm) VALUES ('$tensp','$giasp','$hinh','$mota','$iddm')";
        $sql = "INSERT INTO hang_hoa (name, price, img, mota, iddm)
        VALUES ('$tensp', '$giasp', '$hinh', '$mota', '$iddm')";
        pdo_execute($sql);
    }
    function delete_sanpham($id){
        $sql = "DELETE FROM hang_hoa WHERE id=".$id;
        pdo_execute($sql);
    }
    function loadall_sanpham($kyw="",$iddm=0){
        $sql = "SELECT * from hang_hoa WHERE 1";
        if ($kyw!="") {
            $sql.=" and name like '%".$kyw."%'";
        }
        if ($iddm>0) {
            $sql.=" and iddm ='".$iddm."'";
        }
        $sql.=" order by id desc";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham_home(){
        $sql = "SELECT * from hang_hoa WHERE 1 order by id desc";
        // $sql = "SELECT * from hang_hoa WHERE 1 order by id desc limit 0.8";   //load 8 sản phẩm
        // if ($kyw!="") {
        //     $sql.=" and name like '%".$kyw."%'";
        // }
        // if ($iddm>0) {
        //     $sql.=" and iddm ='".$iddm."'";
        // }
        // $sql.=" order by id desc";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadone_sanpham($id){
        $sql = "SELECT * from hang_hoa WHERE id=".$id;
        $sanpham = pdo_query($sql);
        return $sanpham;
    }
    // function update_sanpham($id,$tensp,$giasp,$mota,$hinh,$iddm){
    function update_sanpham($id,$tensp,$giasp,$mota,$hinh){
        if($hinh!="")
            // $sql = "UPDATE hang_hoa SET iddm='".$iddm."', name='".$tensp."',price='".$giasp."',mota='".$mota."',img='".$hinh."' WHERE id=".$id;
            $sql = "UPDATE hang_hoa SET name='".$tensp."',price='".$giasp."',mota='".$mota."',img='".$hinh."' WHERE id=".$id;
        else
            // $sql = "UPDATE hang_hoa SET iddm='".$iddm."', name='".$tensp."',price='".$giasp."',mota='".$mota."' WHERE id=".$id;
            $sql = "UPDATE hang_hoa SET name='".$tensp."',price='".$giasp."',mota='".$mota."' WHERE id=".$id;
        pdo_execute($sql);
    }

?>