<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php
    require 'conn.inc.php';
?>
<?php
	if (@$_SESSION['login']==true){
        $login=true;
        $uid=$_SESSION['userid'];
	}else{
        $login=false;
    }
?>

<?php 
    if(!$login){
        echo "Mời đăng nhập";
    }else{
        $id=$_GET['id'];
        $qu=mysqli_query($conn,"select compare from userdetailstb where id='$uid'") or die(mysqli_error($conn));
        $q=mysqli_fetch_assoc($qu)['compare'];
        $cmp=json_decode($q);
        if(in_array($id,$cmp)){
            $key = array_search($id,$cmp);
            array_splice($cmp,$key,1);  
            $jsonCart = json_encode($cmp);
            mysqli_query($conn,"update userdetailstb set compare='$jsonCart' where id='$uid'") or die(mysqli_error($conn));
            echo "Đã loại khỏi danh sách so sánh";          
        }else{
            array_push($cmp,$id);
            $jsonCart = json_encode($cmp);
            mysqli_query($conn,"update userdetailstb set compare='$jsonCart' where id='$uid'") or die(mysqli_error($conn));
            echo "Đã thêm vào danh sách so sánh";
        }
    }
    
?>