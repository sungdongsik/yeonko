<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/user_update.css">
    <link href="../img/icon.jpg" rel="icon" />
    <script src="../js/jquery-3.5.1.js" type="text/javascript" text="javascript"></script>
    <script src="../js/login_a.js" type="text/javascript" text="javascript"></script>
    <title>연고대학교 수강신청 완료</title>
</head>
<body>
    <div id="warp">
        <div id="top">
            <div class="top_warp">
                <ul id="top_1" class="clearfix">
                    <li><a href="#"><p>송원캠퍼스</p></a></li>
                    <li><a href="#"><p>평생교육원</p></a></li>
                </ul>
                <ul id="top_3">
                    <li><a href="logout.php">로그아웃</a></li>
                </ul>
            </div>
        </div>
                <header id="header" class="clearfix">
                    <!--logo-->
                    <header id="header" class="clearfix">
                        <h1 class="logo"><a href="../index.html"><img src="../img/logo.png" alt=""></a></h1>
                        <nav class="nav">
                            <ul>
                                <li><a href="#">학사관리</a>
                                    <ul class="submenu">
                                        <li><a href="user.php">수강신청</a></li>
                                        <li><a href="#">성적 평가</a></li>
                                        <li><a href="#">평생교육원 온라인 신청</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">행정·연구</a>
                                    <ul class="submenu">
                                        <li><a href="#">성적증명서</a></li>
                                        <li><a href="#">재학증명서</a></li>
                                        <li><a href="#">졸업증명서</a></li>
                                        <li><a href="#">휴학증명서</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">등록금 관리</a>
                                    <ul class="submenu">
                                        <li><a href="#">등록금 일정</a></li>
                                        <li><a href="#">등록금 명세표</a></li>
                                        <li><a href="#">등록금납부/반환</a></li>
                                        <li><a href="#">대상별 등록금 납부</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">장학금 관리</a>
                                    <ul class="submenu">
                                        <li><a href="#">장학금 안내</a></li>
                                        <li><a href="#">연고대 장학금</a></li>
                                    </ul>
                                </li>                 
                            </ul>
                        </nav>
                    </header>
            <!--/메뉴-->     
    <!-- //footer -->
                <?php 

                        session_start(); 

                        $logid=$_SESSION['logid']; 

                        if($logid ==  ""){ 

                                echo "Login First!!"; 

                                exit; 

                        } 
                        
                        $connect = mysqli_connect("localhost","root","1234","SC_DB"); 
                        mysqli_set_charset($connect,"utf8");
                        if(!$connect)  

                        die('연결실패: '.mysqli_connect_error().'<br>'); 

                        else 

                        echo ""; 

                        

                        $s_id=$_POST['s_id'];   //브라우저에서 서버로 전송한 POST Data $_POST배열에서 꺼내서 변수에 담는 부분 

                        $d_id=$_POST['학과']; 

                        $c_id=$_POST['수업명']; 

                        $f_id=$_POST['교수'];

                        $g_id=$_POST['호실']; 
                        
                        $sql ="insert into dp values('$s_id','$d_id','$c_id',' $f_id','$g_id')";  //가입정보를 insert 문으로 구성... 

                        // echo "sql=".$sql."<br><br>";   //디버깅 목적으로 사용하는 부분... 

                        $result=mysqli_query($connect, $sql); 

                        if(!$result){ 

                        echo mysqli_error($connect); 

                        exit; 

                        } 

                        else{ 

                        echo ""; 

                        //echo "<meta http-equiv='refresh' content='2;url=user_info2.php'>"; 

                        } 

                        mysqli_close($connect); 

                ?> 
                <div id="up">
                    <h3> 축하드립니다. 수강신청이 완료 되었습니다.</h3><br/>
                    <a href="#">메인 페이지 돌아가기</a>
                </div>
                <footer id="footer" class="clearfix">
                    <div class="foot1">
                            <a href="../index.html"><img src="../img/logo.png" alt=""></a>
                    </div>
                    <div class="foot2">
                            신촌/송원 : 1599-1111 의료원 : 1599-1234 01234 
                            서울특별시 서대문구 연고로 50 연고대학교
                            COPYRIGHT© 2020 YONKO UNIV. ALL RIGHTS RESERVED.
                    </div>
                    <div class="foot3">
                            <a href="#"><img src="../img/blog.png" alt=""></a>
                    </div>
                </footer>
             </div>                