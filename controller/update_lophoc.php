<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa</title>
    <style type="text/css">
    .button {
        -moz-box-shadow: inset 0px 1px 0px 0px #ffffff;
        -webkit-box-shadow: inset 0px 1px 0px 0px #ffffff;
        box-shadow: inset 0px 1px 0px 0px #ffffff;
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf));
        background: -moz-linear-gradient(center top, #ededed 5%, #dfdfdf 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
        background-color: #ededed;
        -webkit-border-top-left-radius: 6px;
        -moz-border-radius-topleft: 6px;
        border-top-left-radius: 6px;
        -webkit-border-top-right-radius: 6px;
        -moz-border-radius-topright: 6px;
        border-top-right-radius: 6px;
        -webkit-border-bottom-right-radius: 6px;
        -moz-border-radius-bottomright: 6px;
        border-bottom-right-radius: 6px;
        -webkit-border-bottom-left-radius: 6px;
        -moz-border-radius-bottomleft: 6px;
        border-bottom-left-radius: 6px;
        text-indent: 0;
        border: 1px solid #dcdcdc;
        display: inline-block;
        color: #777777;
        font-family: Times New Roman;
        font-size: 15px;
        font-weight: normal;
        font-style: normal;
        height: 25px;
        line-height: 25px;
        width: 100px;
        text-decoration: none;
        text-align: center;
        text-shadow: 1px 1px 0px #ffffff;
        color: black;
    }

    .button:hover {
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed));
        background: -moz-linear-gradient(center top, #dfdfdf 5%, #ededed 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
        background-color: #dfdfdf;
    }

    .button:active {
        position: relative;
        top: 1px;
    }

    body {
        background: aliceblue;
    }
    </style>
</head>

<body>
    <?php
        $lop=$_GET['lop'];
        include_once('../publish/connect.php');
        $sql="SELECT * From lophoc Where lop = '$lop'";
        $kq=mysqli_query($conn,$sql);
        $ar=mysqli_fetch_array($kq);
		if(isset($_POST["submit"])){
            $lop = $_POST["lop"];
            $makhoa = $_POST["makhoa"];
            $sql1 = "UPDATE lophoc SET lop ='$lop'  Where lop='$lop'";
            $kq1 = mysqli_query($conn, $sql1);
            if($kq1){
                header('location:../view/lophoc_view.php');
            }else{
                echo "no nevr";
            }
           
        }
	?>

    <div align="center">
        <a href="">
            <img style="margin-bottom: 35px; margin-left: 60px;" src="../img/logo9.png">
        </a>
    </div>
    <div align="center">
        <form method="post" action="update_lophoc.php?lop=<?php echo $ar['lop'] ?>">

            <table>

                <tr>
                    <td>Tên lớp :</td>
                    <td><input type="text" name="lop" value="<?php echo $ar['lop'] ?>"></td>
                </tr>
                <tr>
                    <td>Khoa:</td>
                    <td><input type="text" name="makhoa" value="<?php echo $ar['makhoa'] ?>"></td>
                </tr>

                <tr>

                    <td></td>
                    <td> <button type="submit" class="button" name="submit">Sửa</button></td>
                </tr>
            </table>

        </form>
    </div>
</body>

</html>