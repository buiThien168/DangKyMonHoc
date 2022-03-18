<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>

    <title></title>
    <meta charset="utf-8">
    <style type="text/css">
    .td {
        padding-left: 10px;
    }

    #menu {
        font-size: 15px;
        color: white;
        padding: 5px 5px 0 5px;
        background-color: #006cb5;
        height: 30px;
        top: 89px;
        right: 0px;
        text-align: right;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
    }

    #menu a {
        color: white;
        padding: 5px;
        text-decoration: none;
        text-align: center;

        right: 5px;
    }

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

    /* This button was generated using http://tools.ngoisaoso.vn/css3button/ */
    .logo1 {
        margin-right: 399px;
    }
    </style>
</head>

<body>
    <div align="center">
        <a href="../trangchu.php">
            <img class="logo1" src="../img/logo9.png">
        </a>
    </div>
    <div id="menu">

        <a href="../trangchu2.php">Trang Chủ</a>
        <a href="lophoc_view.php">Quản lý lớp học</a>
        <a href="quanlysinhvien.php">Quản lý sinh viên</a>
        <a href="quanlymonhoc.php">Quản lý môn học</a>
        Bạn là ADMIN -
        <a href="../login.php">thoát</a>


    </div>
    </div>

    <div align="center" style="font-weight: 20px; margin: 20px ; font-size:20px; font-weight:bold;">DANH SÁCH LỚP HỌC
    </div>


    <div>
        <form action="" method="POST">

            <table align="center" width="100%"
                style="vertical-align: middle; border: 1px;border-color:#e5e5e5;  background: #e5e5e5;">
                <tbody>
                    <tr style="height: 50px; text-align: center; vertical-align:middle; background: #56a4fe;">
                        <td width="300px"><b>STT</b></td>
                        <td><b>Khoa</b></td>
                        <td width=""><b>Lớp</b></td>
                        <td><b>Sửa</b></td>
                        <td class='td'><b>Xóa</b></td>
                    </tr>

                    <?php
                    
                include_once("../model/lophoc_list.php");
                
                $id=0;
                while ($row=mysqli_fetch_array($kq)) {
                    $lop = $row['lop'];
                    $id+=1;
                    echo "<tr style='background: #ecf1f7; height: 30px; vertical-align: middle;'>";
                        echo "<td style='text-align:center;'>".$id."</td>";
                        echo "<td class='td'>".$row['tenkhoa']."</td>";
                        echo "<td class='td'>".$row['lop']."</td>";
                        echo "<td align='center' ><a href='../Controller/update_lophoc.php?lop=".$lop."'><img align='center' src='../img/edit.gif'></a></td>";
                        echo "<td align='center'><a href='../Controller/delete_lophoc.php?lop=".$lop."'><img align='center' src='../img/delete.gif'></a></td>";
                    echo "</tr>";   
                    # code...
                }

?>

                </tbody>
            </table>

        </form>
        <div align="center">
            <form method="POST" action="../controller/add_lophoc.php" style="margin: 10px"><input class="button"
                    type="submit" name="" value="Thêm lớp học"></form>

        </div>
    </div>
</body>

</html>