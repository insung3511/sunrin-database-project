# LIPS Skateboard SEOUL
선린인터넷고등학교 2학년 2학기 데이터베이스 수행평가로 진행한 프로젝트 이다. 프로젝트 이름을 LIPS Skateboard SEOUL 로 작성한 이유는 일종의 나의 개인적인 사심 때문에 그랬다. ~~LIPS Skateboard SEOUL 이라는 브랜드를 만들어 보는게 is my dream...~~

# Who made it?
일단 프론트엔드는 <a href="https://github.com/insung3511">제가</a>  맡았으며 백엔드와 데이터베이스는 <a href="https://github.com/recaedo">민기가</a>  진행하였습니다. __SHOUT OUT TO MINKI__ 

(Ps. 서버 같은 경우에는 데이터베이스 시간에 활용하는 <a href="https://www.apachefriends.org">XAMPP</a> 을 활용하여 진행 하였습니다.)

# Under __LIPS__ directory
기본적으로 <a href="./index.php"> index.php </a> 로 접속을 하도록 되어 있습니다. Default 경로가 index.html 혹은 index.php 등 서버의 기본적인 설정에 따로 작동 됩니다. 가장 먼저 세션 확인을 합니다. 해당 세션이 맞다면 index.php 로 기본 화면이 나오지만 세션이 맞지 않는다면 유저는 whatyouwant.html 로 접속을 하게 됩니다. 이는 로그인 창으로 접속 하도록 되어 있습니다. 즉, 로그인을 하지 않으면 서비스 이용이 안된다는 것이죠. ~~귀찮아서 그런거 아니다~~. 

## Login (LIPS/login)
Backend와 SQL 가 연동하여 쓰인 부분은 login 파트 입니다. 로그인을 하고 가입을 할때 DB와 연동을 한다. ~~차근 차근 설명을 해드릴 터이니 진정 해봐.~~

가장 먼저 index.html로 이동을 하여 로그인을 하도록 유도를 한다. 만일 사용자가 가입이 되어 있지 않는다면 signup.html로 이동을 한다. index.html과 signup.html 모두 css는 동일하게 적용이 된다. login.php는 index.html과 함께 쓰이면서 DB에서 파일을 읽어 오도록 한다. signup.php는 signup.html과 함께 연동이 되어 회원 가입에 사용이 된다. logout.php는 그저 session을 종료 해준다. 

## index.php (LIPS/index.php)
메인 화면 이다. 막상 코드를 보면 백엔드 코드가 거의 없다. 뭐 사실 별 큰 이유는 없고 세션 확인 때문에 그렇다. 프론트 같은 경우에는 <a href="https://marpi.studio"> marpi studio </a> 에서 프론트를 끌어와 사용하였다. 

## shop (LIPS/shop)
옷 판매 사이트인데 옷이 있어야하지 않겠는가. 옷은 <a href="http://polarskateco.com"> Polar Skate Co. </a> 에서 끌어와 사용했다. ~~Bcuz those clothes so cool~~ 총 4개의 옷을 사용하였다. 상세 이미지는 details/ 디렉토리 안에 있다.

### Details
여기는 거의 다 프론트 이다. 사실 주문창도 백엔드를 활용 하려 했으나. 백엔드를 하기에는 시간도 없었다. 그래서 어쩔수 없이 프론트만 쓰인 것이다.

# My Final Answer?
굉장히 프로젝트를 진행하면서 프론트의 실력이 좋아진 느낌이다. 뭐 확실하게 내가 어디서부터 어디 까지 공부를 하였다 라고 장담을 할 수도 없고 해당 수행평가의 점수가 프론트 보다는 백엔드와 서버에 중점적으로 있었다 (수업에서 프론트는 기본기 수준으로 하고 백엔드와 서버 부분을 더 중요시하게 하여 넘겼기 때문). 민기가 백엔드를 주로 하긴 했지만 자잘한 오류들은 직접 수정을 거치면서 php에 대한 실력은 늘었다고 확신 할 수 있을거 같다.  