<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/login_a.css">
    <link href="../img/icon.jpg" rel="icon" />
    <script src="../js/jquery-3.5.1.js" type="text/javascript" text="javascript"></script>
    <script src="../js/login_a.js" type="text/javascript" text="javascript"></script>
    <title>연고대학교</title>
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
             <!--슬라이드-->
        <div id="index_03"> 
                <div id="slide3"> 
                    <ul> 
                        <li><a href="#"><img src="../img/1.jpg" alt="슬라이드7"></a></li> 
                        <li><a href="#"><img src="../img/2.jpg" alt="슬라이드8"></a></li> 
                        <li><a href="#"><img src="../img/3.jpg" alt="슬라이드9"></a></li> 
                    </ul> 
                </div> 
        </div>
        <!--/슬라이드-->
        <section id="contents" class="clearfix">
            <div class="cont1">
                <div class="tab-menu">
                    <div class="tab-btn">
                        <ul>
                            <li class="active"><a href="#">공지사항</a></li>
                            <li><a href="#">등록안내</a></li>
                        </ul>
                    </div>
                    <div class="tab-cont">
                        <div id="tab_text">
                            <P>[ 공통 ] 중심대학교 2022학년도 1학기 국내대학 학점교류 수학 안내</P>
                            <p>[ 공통 ] 고구마대학교 2022학년도 1학기 국내대학 학점교류 수학 안내</p>
                            <p>[ 공통 ] 평생교육원 2022학년도 1학기 국내대학 학점교류 안내</p>
                            <p>[ 공통 ] 송원대학교 2022학년도 1학기 국내대학 학점교류 수학안내</p>
                            <p>[ 신촌 ] 2022학년도 대학원생 수퍼바이저 모집 안내</p>
                            <p>[ 신촌/송원 ] 2022학년도 연말정산용 교육비납입증명서 발급 안내</p>
                            <p>[ 공통 ] 한국과학기술원 2022학년도 1학기 국내대학 학점교류 수학 안내</p>
                        </div>
                    </div>
                    <div class="tab-cont">
                        <div id="tab_text">
                            <P>[ 안내 ] 2022-1학기 연고대학교/송원캠퍼스 신입생 등록안내</P>
                            <p>[ 안내 ] 2022-1학기 일반대학원 신입생 등록안내</p>
                            <p>[ 안내 ] 2022-1 연고대학교/송원캠퍼스 등록금 분할납부 신청안내···</p>
                            <p>[ 안내 ] 제12회 연세 대학 생활 ‧ 학습 노하우 공모전 안내 (기간 연장)</p>
                            <p>[ 안내 ] 2021학년도 연말정산용 교육비납입증명서 발급 안내</p>
                            <p>[ 안내 ] 연고대학교 2022학년도 1학기 국내대학 학점교류 수학 안내</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cont2"><img src="../img/4.jpg" alt=""></div>
             <div class="cont3">
                <div class="login">
                    <ul>
                        <li><a href="#">마이페이지</a></li>
                    </ul>
                </div>
                <div id="login2">
                <?php 
                    session_start(); 

                    $connect = mysqli_connect("localhost","root","1234","SC_DB"); 
                    mysqli_set_charset($connect,"utf8");

                    if(!$connect)  { 

                    die('연결실패: '.mysqli_connect_error().'<br>'); 

                    exit; 

                    } 

                    else { 

                    echo "<br><div>축하합니다.</div>"; 

                    } 

                    
                    $s_id=$_POST['s_id']; 

                    $s_pass=$_POST['s_pass']; 

                    $sql ="select s_id,s_pass,s_name from student where s_id='$s_id' and s_pass='$s_pass' "; 

                    $result=mysqli_query($connect, $sql); 

                    if(!$result){ 

                            echo "failed to Login, retry...".mysqli_error($connect); 

                            exit; 

                    } 

                    $record=mysqli_fetch_array($result); 

                    if(!$record){ 

                            echo "failed to fetch_array<br>".mysqli_error($connect); 

                            exit; 

                    } 

                    $_SESSION['logid']=$record['s_id']; 

                    echo "<H1>".$record['s_name']."님 학생으로 로그인 되었습니다.<br><br></H1>";
                    
                    mysqli_close($connect);

                ?>
                <div id="out"><a href="logout.php">로그아웃</a></div>
                </div>
             </div>
        </section>

        <footer id="footer" class="clearfix">
            <div class="foot1">
                <a href="#"><img src="../img/logo.png" alt=""></a>
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
<!-- //footer -->
</body>
</html>
