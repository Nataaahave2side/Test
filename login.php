
<?php
include "koneksi.php";
session_start();
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.lineicons.com/2.0/LineIcons.css">
<div class="demo-container">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-12 mx-auto">
        </div>
        <div class="p-5 bg-white rounded shadow-lg">
          <h3 class="mb-2 text-center pt-5">Login</h3>
          <p class="text-center lead"></p>
          <form action="" method="post">
            <label class="font-500">Username</label>
            <input type="text" name="username" class="form-control form-control-lg mb-3" >
             <label class="font-500">Password</label>
            <input type="password" name="password" class="form-control form-control-lg" >
            <p class="m-0 py-4"><a href="" class="text-muted"></a></p>
            <button class="btn btn-primary btn-lg w-100 shadow-lg" name="login">LOGIN</button>
          </form>
        </div>        
      </div>
    </div>
  </div>
</div>
<?php
include "koneksi.php";
?>
<?php
if(isset($_POST['login'])){
    // echo"proses";
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query=mysqli_query($koneksi,"select * from user where username='$username' AND password='$password'");
    $cek = mysqli_num_rows($query);
    // echo $cek;
    if($cek>0){
        //berhasil login
        session_start();
        $_SESSION['status']="sukses";
        $_SESSION['username']=$_POST['username'];
        $_SESSION['password']=$_POST['password'];
        header('location:index.php');
    }

}
?>