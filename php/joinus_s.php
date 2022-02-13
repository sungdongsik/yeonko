<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/joinus_php.css">
    <link href="../img/icon.jpg" rel="icon" />
    <script src="../js/jquery-3.5.1.js" type="text/javascript" text="javascript"></script>
    <script src="../js/login.js" type="text/javascript" text="javascript"></script>
    <title>연고대학교:: 회원가입</title>
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
                    <li><a href="choice_s.html">회원가입</a></li>
                </ul>
                <ul id="top_2" class="clearfix">
                    <li id="cli"><p>로그인</p></li>
                        <ul id="log">
                            <li><a href="login_s.html">학생</a></li>
                            <li><a href="login_a.html">교직원</a></li>
                            <li><a href="login_p.html">교수</a></li>
                        </ul>
                    </li>
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
                                        <li><a href="#">수강신청</a></li>
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

        <?php 
            $connect = mysqli_connect("localhost","root","1234","SC_DB");  //mysql연결하는 부분 
            mysqli_set_charset($connect,"utf8"); 
            if(!$connect)  {      // MySQL 연결 에러 처리 (Error Handling) 
            die('연결실패: '.mysqli_connect_error().'<br>'.'<a href="../index.html">돌아가기</a>'); 
            exit; 
            } 
            else { 
            echo ""; 
            } 

            $s_name=$_POST['s_name'];   //브라우저에서 서버로 전송한 POST Data $_POST배열에서 꺼내서 변수에 담는 부분 

            $s_td_number=$_POST['s_td']; 

            $s_id=$_POST['m_name']; 

            $s_mail=$_POST['s_mail']; 

            $s_pass=$_POST['s_pass']; 

            $s_phone_number=$_POST['s_tel']; 


            $sql ="insert into student values('$s_id','$s_name','$s_td_number','$s_mail','$s_pass','$s_phone_number')";  //가입정보를 insert 문으로 구성... 

            //echo "sql=".$sql."<br><br>";   //디버깅 목적으로 사용하는 부분... 

            $result=mysqli_query($connect, $sql);  //위에서 만든 가입정보 입력하는 SQL구문을 실행시키는 부분 

            if(!$result)  { // 쿼리가 정상 수행되었는지 검증처리 

            echo "가입 실패, 다시 시도하세요"; 

            echo "Error: ".mysqli_error($connect); 

            } 
            else{
            echo ""; 
            } 
            mysqli_close($connect);   // MySQL 연결 끊기 
        ?>
            <!--회원가입 메인가기-->
            <div id="main_lg">
                <p>축하합니다.</p>
                <p>회원가입 성공하셨습니다. 환영합니다.</p><br/>
                <a href="../index.html" id="main_text">메인페이지 바로가기</a>
            </div>
            <!--footer-->
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
    </body>
</html>