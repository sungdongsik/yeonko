<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/user.css">
    <link href="../img/icon.jpg" rel="icon" />
    <script src="../js/jquery-3.5.1.js" type="text/javascript" text="javascript"></script>
    <script src="../js/login_a.js" type="text/javascript" text="javascript"></script>
    <title>연고대학교 수강신청</title>
</head>
<body>
    <!----- 레이어 팝업 ------>
    <div class="layer-bg"></div>
    <div class="layer">
        <h2>수강신청 목록</h2>
        <p id="redb">※목록을 잘 확인한 뒤에 수강신청을 직접입력 해주시길 바랍니다.※</p><br/>
        <ul>
            <li>
                <h3 class="m">학과: 문과 대학</h2>
                <span class="m1">
                    <p>● 국어국문 (국교수 101호실)</p>
                    <p>● 영어영문 (영교수 102호실)</p>
                    <p>● 중어중문 (중교수 103호실)</p>
                    <p>● 독어독문 (독교수 104호실)</p>
                    <p>● 불어불문 (불교수 105호실)</p>
                    <p>● 노어노문 (노교수 106호실)</p>
                    <p>● 사학 (사교수 107호실)</p>
                    <p>● 철학 (철교수 108호실)</p>
                    <p>● 문헌정보 (문교수 109호실)</p>
                    <p>● 심리학 (심교수 110호실)</p>
                </span>
            </li><br/>
            
            <li>
                <h3 class="m">학과: 상경 대학</h2>
                <span class="m1">
                    <p>● 경제학 (경교수 201호실)</p>
                    <p>● 응용통계학 (응교수 202호실)</p>
                </span>
            </li><br/>

            <li>
                <h3 class="m">학과: 경영 대학</h2>
                <span class="m1">
                    <p>● 경영학 (경교수 301호실)</p>
                    <p>● 응용통계학 (응교수 302호실)</p>
                </span>
            </li><br/>

            <li>
                <h3 class="m">학과: 이과 대학</h2>
                <span class="m1">
                    <p>● 수학 (수교수 202호실)</p>
                    <p>● 물리학 (물교수 203호실)</p>
                    <p>● 화학 (화교수 204호실)</p>
                    <p>● 지구시스템과학 (지교수 205호실)</p>
                    <p>● 천문우주학 (천교수 206호실)</p>
                    <p>● 대기과학 (대교수 207호실)</p>
                </span>
            </li><br/>

            <li>
                <h3 class="m">학과: 생명시스템 대학</h2>
                <span class="m1">
                    <p>● 시스템생물학 (시교수 303호실)</p>
                    <p>● 생화학 (생교수 304호실)</p>
                    <p>● 생명공학 (생교수 305호실)</p>
                </span>
            </li><br/>

            <li>
                <h3 class="m">학과: 신학 대학</h2>
                <span class="m1">
                    <p>● 신학 (신교수 306호실)</p>
                </span>
            </li><br/>

            <li>
                <h3 class="m">학과: 사회과학 대학</h2>
                <span class="m1">
                    <p>● 정치외교학 (정교수 101호실)</p>
                    <p>● 행정학 (행교수 102호실)</p>
                    <p>● 사회복지학 (사교수 103호실)</p>
                    <p>● 사회학 (사교수 104호실)</p>
                    <p>● 문화인류학 (문교수 105호실)</p>
                    <p>● 언론홍보영상학 (언교수 106호실)</p>
                    <p>● 지역햑협동과정 (지교수 107호실)</p>
                </span>
            </li><br/>

            <li>
                <h3 class="m">학과: 음악 대학</h2>
                <span class="m1">
                    <p>● 교회음악과 (교교수 206호실)</p>
                    <p>● 성악과 (성교수 207호실)</p>
                    <p>● 피아노과 (피교수 208호실)</p>
                    <p>● 관현학과 (관교수 209호실)</p>
                    <p>● 작곡과 (작교수 210호실)</p>
                </span>
            </li><br/>

            <li>
                <h3 class="m">학과: 교육과학 대학</h2>
                <span class="m1">
                    <p>● 교육학 (교교수 307호실)</p>
                    <p>● 체육교육학 (체교수 306호실)</p>
                    <p>● 스포츠응용산업학 (스교수 305호실)</p>
                </span>
            </li>
        </ul>
        <a href="#" class="close">닫기</a>
    </div>
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
            <!--수강신청-->
            <div id="depart">
                <div id="de_text"><h2>● 2022학년도 1학기 수강신청</h2>
                    <p>수강희망과목 등록기간 - 2. 4(금) 13:00 - 2. 8(화) 12:00</p>
                    <p id="red">※ 필독 수강 목록을 꼭!! 확인해서 수강신청을 해주시길 바랍니다.※</p><br/>
                    <button id="bn">수강 목록</button>
                    
                </div>
                <ul>
                    <li> 
                        <form method=post action=user_update.php> 

                        <?php echo $record['s_id'];?><br> 
                        <br> 
                        이름 <input type=text name=s_id value=<?php echo $record['s_id'];?>><br> 
                        <br> 
                        학과 <input type=text name=학과 value=<?php echo $record['학과'];?>><br> 
                        <br> 
                        수업명 <input type=text name=수업명 value=<?php echo $record['수업명'];?>><br> 
                        <br> 
                        교수 <input type=text name=교수 value=<?php echo $record['교수'];?>><br> 
                        <br>
                        호실 <input type=text name=호실 value=<?php echo $record['호실'];?>><br> 
                        <br>
                        <input type=submit value=수강신청 class="bb"> 
                        </form>                       
                    </li>
                </ul>
            </div>
     
    <?php 
        //로그인 세션을 검증 
        session_start(); 
        include 'inc_head.php';
        if($_SESSION['logid'] == ""){ 
        
         echo "로그인되어 있지 않습니다. 로그인부터 하세요<br>"; 
        
         exit; 
        
        } 
        
        else if($jb_login) { 
        
         echo "";
        
        } 
           
        $connect = mysqli_connect("localhost","root","1234","SC_DB"); 
        mysqli_set_charset($connect,"utf8");
        if(!$connect)  { 
        
        die('연결실패: '.mysqli_connect_error().'<br>'); 
        
        exit; 
        
        } 
        
        else if($jb_login) { 
        
        echo "연결성공<br>"; 
        
        } 
        
         
        
        $sql ="select * from student where s_id='$logid'"; 
           
        $result=mysqli_query($connect, $sql); 
        
        if(!$result){ 
        
         echo "failed to Query, retry...".mysqli_error($connect)."<br><br>"; 
        
         exit; 
        
        } 
        
        else{ 
        
         echo ""; 
        
        } 
        
         
        
        $record=mysqli_fetch_array($result); 
        
         
        
        mysqli_close($connect); 

    ?>
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
