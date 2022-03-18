<!DOCTYPE html>
<html>

<head>
    <title>Login Admin</title>
</head>

<body>
    <?php
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
//Xử lý đăng nhập
if (isset($_POST['oke1'])) 
{
    //Kết nối tới database
    include('publish/connect.php');
     
    //Lấy dữ liệu nhập vào
    $username = addslashes($_POST['username1']);
    $password = addslashes($_POST['gmail']);

    
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên người dùng và gmail. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Kiểm tra tên đăng nhập có tồn tại không
    $sql="SELECT username, password FROM sinhvien WHERE username='$username'";
    $kq=mysqli_query($conn,$sql);
    if (mysqli_num_rows($kq) == 0) {
        echo "Tên người dùng này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    else {
        
        echo "Hệ thống đã gửi về gmail của bạn vui lòng kiểm tra gmail!. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
     
    //So sánh 2 mật khẩu có trùng khớp hay không
  

        # code...
    }
    //Lấy mật khẩu trong database ra
    
     
    //Lưu tên đăng nhập

}
?>
    <form method="POST" action="quenmk.php">
        <div align="center">
            <a href="index.php">
                <img class="logo1" src="img/logo9.png">
            </a>
        </div>
        <fieldset style="width: 400px;margin-left: 500px;text-align: center;margin-top: 39px;border-color: #fea700;">

            <legend>
                <p>
                <h1 align="center">| Lấy Lại mật khẩu |</h1>
            </legend>
            </p>

            <table align="center">
                <tr>
                    <td>Tên người dùng:</td>
                    <td><input type="text" name="username1" size="30"></td>
                </tr>
                <tr>
                    <td>Gmail:</td>
                    <td><input type="text" name="gmail" size="30"></td>
                </tr>



            </table>
            <br>
            <td colspan="2" align="center"> <input type="submit" name="oke1" value="lấy lại"></td>
        </fieldset>

    </form>

</body>

</html>