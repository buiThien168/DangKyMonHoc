<?php if (session_id() == '' || !isset($_SESSION)) {
  session_start();
} ?>
<!DOCTYPE html>
<html>

<head>
    <!--     <link rel="stylesheet" href="css/qlbh.css" /> -->
    <title>ADMIN</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div>
        <style type="text/css">
        * {
            margin: 0;
            padding: 0;
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

        .h1 {
            font-family: arial;
            width: 300px;
            height: 50px;
            padding-left: 10px;
            font-size: 20px;
            font-weight: bold;
            text-align: justify;
        }

        .h2 {
            font-family: arial;
            width: 700px;
            height: 150px;
            padding-left: 10px;
            font-size: 18px;
            text-align: justify;
            padding-top: 5px;
        }

        #news-block-title {
            font-size: 18px;
            border-bottom: 1px solid #cd2122;
            position: relative;
            left: 300px;
            font-size: 30px;
            top: 50px;

        }

        p {
            padding-top: 10px;
            font-size: 16px;
            font-weight: normal;
        }

        .a3 {
            font-size: 20px;
            text-decoration: none;
            font-style: bold;
            color: black;
            font-size: 20px;
        }

        .a3:hover {
            color: #CD2122;
        }

        .tr {
            margin: 0 0 30px;
            overflow: hidden;
            list-style-type: none;
        }

        .logo1 {
            margin-right: 399px;
        }

        h5.title {
            display: flex;
            justify-content: center;
            margin-right: 700px;
            margin-top: 50px;
            color: black;
            font-size: 20px;
            position: relative;
        }

        h5.title::before {
            content: '';
            margin-left: 285px;
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 242px;
            height: 2px;
            background: #f00;
        }

        footer {
            margin-top: 28px;
            position: relative;
            width: 100%;
            height: auto;
            /* padding: 50px 100px; */
            padding-top: 20px;
            padding-left: 65px;
            padding-bottom: 20px;
            background: #006cb5;
            /* display: flex; */
            justify-content: space-between;
            flex-wrap: wrap;
        }

        footer .container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            flex-direction: row;
        }

        footer .container .noi-dung {
            margin-right: 30px;
        }

        footer .container .noi-dung.about {
            width: 40%;
        }

        footer .container .noi-dung.about h2 {
            position: relative;
            color: #fff;
            font-weight: 500;
            margin-bottom: 15px;
        }

        footer .container .noi-dung.about h2:before {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 50px;
            height: 2px;
            background: #006cb5;
        }

        footer .container .noi-dung.about p {
            color: #999;
        }

        /*Thi???t L???p Cho Th??nh Ph???n Icon M???ng X?? H???i*/
        .social-icon {
            margin-top: 20px;
            display: flex;
        }

        .social-icon li {
            list-style: none;
        }

        .social-icon li a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: #222;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 10px;
            text-decoration: none;
            border-radius: 4px;
        }

        .social-icon li a:hover {
            background: #f00;
        }

        .social-icon li a .fa {
            color: #fff;
            font-size: 20px;
        }

        /* .links h2 {
    position: relative;
    color: #fff;
    font-weight: 500;
    margin-bottom: 15px;
}

.links h2 {
    position: relative;
    color: #fff;
    font-weight: 500;
    margin-bottom: 15px;
} */

        .links h2 {
            position: relative;
            color: #fff;
            font-weight: 500;
            margin-bottom: 19 px;
            margin-left: 39 px;
            /* margin-right: -30
px
; */
        }

        .links h2::before {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 155px;
            height: 2px;
            background: #f00;
        }

        .links {
            position: relative;
            width: 25%;
        }

        .links ul li {
            list-style: none;
        }

        .links ul li a {
            color: white;
            text-decoration: none;
            margin-bottom: 10px;
            display: inline-block;
        }

        .links ul li a:hover {
            color: red;
        }

        .contact h2 {
            position: relative;
            color: #fff;
            font-weight: 500;
            margin-bottom: 15px;
        }

        .contact h2::before {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 185px;
            height: 2px;
            background: #f00;
        }

        .contact {
            width: calc(35% - 60px);
            margin-right: 0 !important;
        }

        .contact .info {
            position: relative;
        }

        .contact .info li {
            display: flex;
            margin-bottom: 16px;
        }

        .contact .info li span:nth-child(1) {
            color: #fff;
            font-size: 20px;
            margin-right: 10px;
        }

        .contact .info li span {
            color: white;
        }

        .contact .info li a {
            color: white;
            text-decoration: none;
        }

        .btn {
            display: inline-block;
            background: transparent;
            color: inherit;
            font: inherit;
            border: 0;
            outline: 0;
            padding: 0;
            margin-top: 16px;
            transition: all 200ms ease-in;
            cursor: pointer;
        }

        .btn--primary {
            background: #222;
            color: #fff;
            box-shadow: 0 0 10px 2px rgba(0, 0, 0, .1);
            border-radius: 2px;
            padding: 8px 24px;
        }

        .btn--primary:hover {
            background: red;
        }

        .btn--primary:active {
            background: white;
            box-shadow: inset 0 0 10px 2px rgba(0, 0, 0, .2);
        }

        /* .form__field {
        width: 90%;
        background: #fff;
        color: #a3a3a3;
        font: inherit;
        box-shadow: 0 6px 10px 0 rgba(0, 0, 0, .1);
        border: 0;
        outline: 0;
        padding: 8px 4px;
    } */

        @media (max-width: 768px) {
            footer {
                padding: 40px;
            }

            footer .container {
                flex-direction: column;
            }

            footer .container .noi-dung {
                margin-right: 0;
                margin-bottom: 40px;
            }

            footer .container,
            .noi-dung.about,
            .links,
            .contact {
                width: 100%;
            }

            .b2 {
                margin-top: 25px;
            }

        }
        </style>
        <div align="center">
            <a href="">
                <img class="logo1" src="img/logo9.png">
            </a>
        </div>
        <div id="menu">

            <a href="trangchu2.php">Trang Ch???</a>
            |
            <a href="view/lophoc_view.php">Danh s??ch l???p h???c</a>
            |
            <a href="view/quanlysinhvien.php">Qu???n l?? sinh vi??n</a>
            |
            <a href="view/quanlymonhoc.php">Qu???n l?? m??n h???c</a>
            |

            B???n l?? ADMIN -
            <a href="index.php">tho??t</a>


        </div>
    </div>
    <div>
        <!-- <span style="z-index: -1; " id="news-block-title">TH??NG TIN ????NG CH?? ??</span> -->
        <H5 class="title">TH??NG TIN ????NG CH?? ??</H5>
        <div align="center" style="padding-top: 20px">
            <table width="1000px">
                <tr class="tr">
                    <td class="" rowspan="2"><img height="250px" src="img/T1.png" alt=""></td>
                    <td class="h1"><a class="a3"
                            href="https://ictu.edu.vn/thu-truong-hoang-minh-son-lam-viec-voi-truong-dai-hoc-cong-nghe-thong-tin-va-truyen-thong/">
                            Th??? tr?????ng Ho??ng Minh S??n l??m vi???c v???i Tr?????ng ?????i h???c C??ng ngh??? Th??ng tin v?? Truy???n
                            th??ng</a>

                        <p>11/02/2022</p>
                    </td>
                <tr>
                    <td class="h2">Ng??y 10/02/2022, Th??? tr?????ng Ho??ng Minh S??n c??ng ??o??n c??ng t??c B??? Gi??o d???c v?? ????o t???o
                        ???? l??m vi???c v?? ?????nh h?????ng, ch??? ?????o v??? chi???n l?????c ph??t tri???n c???a Tr?????ng ?????i h???c C??ng ngh??? Th??ng
                        tin v?? Truy???n th??ng trong giai ??o???n m???i..
                    </td>
                </tr>
                </tr>

                <tr>
                    <td class="" rowspan="2"><img height="250px" src="img/T2.png" alt=""></td>
                    <td class="h1"><a class="a3"
                            href="https://ictu.edu.vn/trao-qua-tet-nham-dan-cho-luu-hoc-sinh-o-lai-truong/">
                            Trao qu?? T???t Nh??m D???n cho l??u h???c sinh ??? l???i tr?????ng</a>

                        <p>31/01/2022</p>
                    </td>
                <tr>
                    <td class="h2">S??ng 28/01/2022, t???i tr?????ng ?????i h???c C??ng ngh??? Th??ng tin v?? Truy???n th??ng (ICTU) ????
                        di???n ra ch????ng tr??nh Trao qu?? T???t Nh??m D???n cho l??u h???c sinh ??? l???i tr?????ng d???p T???t Nguy??n ????n. ?????n
                        tham d??? ch????ng tr??nh c?? ??ng Nguy???n Do??n K??nh ??? ???y vi??n TW H???i h???u ngh??? Vi???t Nam ??? L??o, Ch??? t???ch
                        H???i H???u ngh??? Vi???t L??o t???nh Th??i Nguy??n; ??ng ????o Ng???c Anh ??? Ph?? ch??? t???ch H???i H???u ngh??? Vi???t L??o
                        t???nh Th??i Nguy??n...</td>
                </tr>
                </tr>
                <tr>
                    <td class="" rowspan="2"><img height="250px" src="img/T3.png" alt=""></td>
                    <td class="h1"><a class="a3" href="https://ictu.edu.vn/le-trao-tang-huy-hieu-30-nam/">
                            L??? trao t???ng Huy hi???u 30 n??m tu???i v?? T???ng k???t c??ng t??c ?????ng n??m 2021, S?? k???t cu???c v???n ?????ng
                            ???H???c t???p v?? l??m theo t?? t?????ng, ?????o ?????c, phong c??ch H??? Ch?? Minh???</a>

                        <p>21/01/2022</p>
                    </td>
                <tr>
                    <td class="h2">S??ng 14/1/2020, ?????ng ???y Tr?????ng ?????i h???c C??ng ngh??? Th??ng tin v?? Truy???n th??ng ???? long
                        tr???ng t??? ch???c L??? trao t???ng Huy hi???u 30 n??m tu???i ?????ng cho TS. V?? Vinh Quang v?? T???ng k???t c??ng t??c
                        ?????ng n??m 2021, S?? k???t cu???c v???n ?????ng ???H???c t???p v?? l??m theo t?? t?????ng, ?????o ?????c, phong c??ch H??? Ch??
                        Minh???. D??? bu???i l??? c?? TS. Nguy???n V??n T???o ??? B?? th?? ?????ng ???y, Ch??? t???ch H???i ?????ng tr?????ng; PGS.TS.
                        Ph??ng Trung Ngh??a ??? Hi???u tr?????ng..
                    </td>
                </tr>
                </tr>

                <tr>
                    <td class="" rowspan="2"><img height="250px" src="img/T4.png" alt=""></td>
                    <td class="h1"><a class="a3"
                            href="https://ictu.edu.vn/hoi-nghi-can-bo-vien-chuc-nguoi-lao-dong-nam-2021/">
                            H???i ngh??? c??n b??? vi??n ch???c, ng?????i lao ?????ng n??m 2021</a>

                        <p>12/01/2022</p>
                    </td>
                <tr>
                    <td class="h2">S??ng ng??y 07/01/2021, Tr?????ng ?????i h???c C??ng ngh??? Th??ng tin v?? Truy???n th??ng ???? t??? ch???c
                        H???i ngh??? ?????i bi???u C??n b???, vi??n ch???c, ng?????i lao ?????ng n??m 2021 theo 2 h??nh th???c tr???c ti???p. H???i
                        ngh??? c?? s??? hi???n di???n c???a PGS.TS. Ph??ng Trung Ngh??a Hi???u tr?????ng; TS. V?? ?????c Th??i ??? Ph?? Hi???u
                        tr?????ng, Ch??? t???ch C??ng ??o??n; TS. ????? ????nh C?????ng ??? Ph?? Hi???u tr?????ng c??ng c??c ?????ng ch?? l??nh ?????o c??c
                        Ph??ng, Khoa, Trung t??m v?? ?????i di???n c??n b???, vi??n ch???c, ng?????i lao ?????ng c???a tr?????ng.. </td>
                </tr>
                </tr>
            </table>
        </div>
    </div>
    <footer class="py-5 bg-dark">
        <div class="container">
            <!--B???t ?????u N???i Dung Gi???i Thi???u-->
            <div classfooter="noi-dung about">
                <h2 style="color:white;">V??? Ch??ng T??i</h2>
                <p style="color:white;margin-top:20px;">Lorem ipsumdolor sit...</p>
                <ul class="social-icon">
                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa fa-instagram"></i></a></li>
                    <li><a href=""><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
            <!--K???t Th??c N???i Dung Gi???i Thi???u-->
            <!--B???t ?????u N???i Dung ???????ng D???n-->
            <div class="noi-dung links" style=" margin-left: 150px;">
                <h2 class="b1">Th???c T???p C?? S???</h2>
                <ul>
                    <li class="b2" style="margin-top:25px;"><a href="https://www.facebook.com/buithien258689/">B??i Quang
                            Thi???n</a></li>
                </ul>
            </div>
            <!--K???t Th??c N???i Dung ???????ng D???n-->
            <!--B???t ????u N???i Dung Li??n H???-->
            <div class="noi-dung contact">
                <h2 class="b1">Th??ng Tin Li??n H???</h2>
                <ul class="info">
                    <li class="b2" style="margin-top:25px;">
                        <span><i class="fa fa-map-marker"></i></span>
                        <span>Ph?????ng T??n Th???nh<br />
                            ???????ng Z115 Th??nh ph??? Th??i Nguy??n<br />
                            Vi???t Nam</span>
                    </li>
                    <li>
                        <span><i class="fa fa-phone"></i></span>
                        <p><a href="#">0395865097</a>
                            <br />
                            <a href="#"></a>
                        </p>
                    </li>
                    <li>
                        <span><i class="fa fa-envelope"></i></span>
                        <p><a href="#">bqthien599@gmail.com</a></p>
                    </li>
                </ul>
            </div>
            <!--K???t Th??c N???i Dung Li??n H???-->
        </div>

        <!-- /.container -->
    </footer>
</body>

</html>