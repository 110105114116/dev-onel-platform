<!DOCTYPE html>
<html lang="th">

<head>
    <title>หน้าเริ่มต้น</title>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta content="หน้าเริ่มต้น" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', 'Helvetica', sans-serif;
            color: #000;
            padding: 0;
            margin: 0;
            line-height: 1.428;
        }
        h1, h2, h3, h4, h5, h6, p {
            padding: 0;
            margin: 0;
            color:#333333;
        }
        h1 {
            font-size: 30px;
            font-weight: 600!important;
            color: #333;
        }
        h2 {
            font-size: 24px;
            font-weight: 600;
        }
        h3 {
            font-size: 22px;
            font-weight: 600;
            line-height: 28px;
        }
        hr {
            margin-top: 35px;
            margin-bottom: 35px;
            border: 0;
            border-top: 1px solid #bfbebe;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        li {
            display: inline-block;
            float: right;
            margin-left: 20px;
            line-height: 35px;
            font-weight: 100;
        }
        a {
            text-decoration: none;
            cursor: pointer;
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -ms-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        }
        li a {
            color: white;
            margin-left: 3px;
        }
        li > i {
            color: white;
        }
        .column-wrap a {
            color: #5c34c2;
            font-weight: 600;
            font-size:16px;
            line-height:24px;
        }
        .column-wrap p {
            color: #717171;
            font-size:16px;
            line-height:24px;
            font-weight:300;
        }
        .container {
            margin-top: 100px;
        }
        .navbar {
            position: relative;
            min-height: 45px;
            margin-bottom: 20px;
            border: 1px solid transparent;
        }
        .navbar-brand {
            float: left;
            height: auto;
            padding: 10px 10px;
            font-size: 18px;
            line-height: 20px;
        }
        .navbar-nav>li>a {
            padding-top: 11px;
            padding-bottom: 11px;
            font-size: 13px;
            padding-left: 5px;
            padding-right: 5px;
        }
        .navbar-nav>li>a:hover {
            text-decoration: none;
            color: #cdc3ea!important;
        }
        .navbar-nav>li>a i {
            margin-right: 5px;
        }
        .nav-bar img {
            position: relative;
            top: 3px;
        }
        .congratz {
            margin: 0 auto;
            text-align: center;
        }
        .message::before {
            content: " ";
            background: url(https://raw.githubusercontent.com/hostinger/banners/master/hostinger_welcome/images/hostinger-dragon.png);
            width: 141px;
            height: 175px;
            position: absolute;
            left: -150px;
            top: 0;
        }
        .message {
            width: 50%;
            margin: 0 auto;
            height: auto;
            padding: 40px;
            background-color: #eeecf9;
            margin-bottom: 100px;
            border-radius: 5px;
            position:relative;
        }
        .message p {
            font-weight: 300;
            font-size: 16px;
            line-height: 24px;
        }
        #pathName {
            margin: 20px 10px;
            color: grey;
            font-weight: 300;
            font-size:18px;
            font-style: italic;
        }
        .column-custom {
            border-radius: 5px;
            background-color: #eeecf9;
            padding: 35px;
            margin-bottom: 20px;
        }
        .footer {
            font-size: 13px;
            color: gray !important;
            margin-top: 25px;
            line-height: 1.4;
            margin-bottom: 45px;
        }
        .footer a {
            cursor: pointer;
            color: #646464 !important;
            font-size: 12px;
        }
        .copyright {
            color: #646464 !important;
            font-size: 12px;
        }
        .navbar a {
            color: white !important;
        }
        .navbar {
            border-radius: 0px !important;
        }
        .navbar-inverse {
            background-color: #434343;
            border: none;
        }
        .column-custom-wrap{
            padding-top: 10px 20px;
        }
        @media screen and (max-width: 768px) {
            .message {
                width: 75%;
                padding: 35px;
            }
            .container {
                margin-top: 30px;
            }
        }
        }
    </style>
</head>

<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="navbar-toggle" data-target="#myNavbar" data-toggle="collapse" type="button">
                <span class="icon-bar"></span> <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://www.hostinger.in.th/" rel="nofollow"><img src="https://raw.githubusercontent.com/hostinger/banners/master/hostinger_welcome/images/hostinger-logo.png" width="120" alt="Hostinger"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="https://www.hostinger.com/tutorials" rel="nofollow"><i aria-hidden="true" class="fa fa-graduation-cap"></i> Tutorials</a>
                </li>
                <li>
                    <a href="https://www.hostinger.in.th/make-money-online" rel="nofollow"><i aria-hidden="true" class="fa fa-trophy"></i> รับรายได้กับเรา</a>
                </li>
                <li>
                    <a href="https://www.hostinger.in.th/affiliates" rel="nofollow"><i aria-hidden="true" class="fa fa-user"></i> Affiliates</a>
                </li>
                <li>
                    <a href="https://cpanel.hostinger.in.th" rel="nofollow"><i aria-hidden="true" class="fa fa-lock"></i> เข้าสู่ระบบ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="empty-account-page">
    <div class="container">
        <div class="row congratz">
            <h1>บัญชีของคุณถูกสร้างแล้ว!</h1><em></em>
            <h2 id="pathName"><em></em></h2>
        </div>
        <div class="row message">
            <p>เว็บไซต์ <span id="website" style="word-break:break-all;"></span> ถูกติดตั้งบนเซิร์ฟเวอร์เรียบร้อยแล้ว! โปรดลบไฟล์ <span style="font-weight: bold;">default.php</span> ออกจากโฟลเดอร์ public_html แล้วอัปโหลดเว็บไซต์ของคุณโดยใช้ FTP หรือการจัดการไฟล์</p>
        </div>
        <div class="col-xs-12">
            <h2>แล้วยังไงต่อ?</h2>
        </div>
        <div class="column-wrap clearfix">
            <div class="col-xs-12">
                <hr>
            </div>
            <div class="col-xs-12 col-sm-4 column-custom-wrap">
                <div class="column-custom">
                    <h3>Elite Affiliate Club</h3>
                    <br>
                    <p>กำลังมองหาช่องทางในการสร้างรายได้ออนไลน์แบบง่าย ๆ ใช่ไหม? เข้าร่วมกับ Hostinger Elite Affiliate Club - Affiliate Program รูปแบบใหม่ที่จะมาช่วยเพิ่มรายได้ของคุณอย่างรวดเร็ว</p>
                    <br>
                    <a href="https://www.hostinger.in.th/make-money-online" rel="nofollow">เรียนรู้เพิ่มเติม</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 column-custom-wrap">
                <div class="column-custom">
                    <h3 style="padding-bottom: 5px">Knowledge Base</h3>
                    <br>
                    <p>มีไอเดียสำหรับเว็บไซต์ แต่ไมีรู้ว่าจะเริ่มต้นตรงไหน? คำตอบทั้งหมดอยู่ที่นี่ หาดูหมวดหมู่ของเว็บไซต์ที่คุณต้องการ หรือพิมพ์เพื่อเริ่มต้นการค้นหา</p>
                    <br>
                    <a href="https://support.hostinger.com/en/" rel="nofollow">เรียนรู้เพิ่มเติม</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 column-custom-wrap">
                <div class="column-custom">
                    <h3 style="padding-bottom: 5px">Hostinger Blog</h3>
                    <br>
                    <p>ร่วมเป็นส่วนหนึ่งของชุมชน Hostinger กดติดตามเพื่อรับข่าวสารประจำวันจาก Hostinger ทั้งในเรื่องของวิศวกรรม การตลาด และข่าวสารอื่นๆ เกี่ยวกับโฮสติง</p>
                    <br>
                    <a href="https://www.hostinger.com/blog/" rel="nofollow">เรียนรู้เพิ่มเติม</a>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="row">
                <div class="text-center" style="margin-bottom: 10px;">
                    <a href="https://cpanel.hostinger.in.th" rel="nofollow">ลูกค้าเข้าสู่ระบบ</a>
                </div>
                <div class="copyright text-center">
                    Hostinger © <?php echo date("Y"); ?>. สงวนลิขสิทธิ์ Hostinger © 2017. สงวนลิขสิทธิ์
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var pathName = window.location.hostname;
    var account = document.getElementById("pathName");
    var accountText = document.getElementById("website");
    account.innerHTML = pathName;
    accountText.innerHTML = pathName;
</script>
</body>

</html>