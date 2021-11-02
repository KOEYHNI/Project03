document.addEventListener("DOMContentLoaded", function() {
        buildCalendar();
    });

    var today = new Date(); // @param 전역 변수, 오늘 날짜 / 내 컴퓨터 로컬을 기준으로 today에 Date 객체를 넣어줌
    var date = new Date();  // @param 전역 변수, today의 Date를 세어주는 역할

    /**
     * @brief   이전달 버튼 클릭
     */
    function prev() {
        this.today = new Date(today.getFullYear(), today.getMonth() - 1, today.getDate());
        buildCalendar();    // @param 전월 캘린더 출력 요청
    }

    /**
     * @brief   다음달 버튼 클릭
     */
    function next() {
        this.today = new Date(today.getFullYear(), today.getMonth() + 1, today.getDate());
        buildCalendar();    // @param 명월 캘린더 출력 요청
    }

    /**
     * @brief   캘린더 오픈
     * @details 날짜 값을 받아 캘린더 폼을 생성하고, 날짜값을 채워넣는다.
     */
    function buildCalendar() {

        let doMonth = new Date(today.getFullYear(), today.getMonth(), 1);
        let lastDate = new Date(today.getFullYear(), today.getMonth() + 1, 0);

        let tbCalendar = document.querySelector(".cal_day");


        document.getElementById("calYear").innerText = today.getFullYear();                                  // @param YYYY월
        document.getElementById("calMonth").innerText = autoLeftPad((today.getMonth() + 1), 2);   // @param MM월

        // @details 이전 캘린더의 출력결과가 남아있다면, 이전 캘린더를 삭제한다.
        while(tbCalendar.rows.length > 0) {
            tbCalendar.deleteRow(tbCalendar.rows.length - 1);
        }


        // @param 첫번째 개행
        let row = tbCalendar.insertRow();


        // @param 날짜가 표기될 열의 증가값
        let dom = 1;

        // @details 시작일의 요일값( doMonth.getDay() ) + 해당월의 전체일( lastDate.getDate())을  더해준 값에서
        //               7로 나눈값을 올림( Math.ceil() )하고 다시 시작일의 요일값( doMonth.getDay() )을 빼준다.
        let daysLength = (Math.ceil((doMonth.getDay() + lastDate.getDate()) / 7) * 7) - doMonth.getDay();

        // @param 달력 출력

        // @details 시작값은 1일을 직접 지정하고 요일값( doMonth.getDay() )를 빼서 마이너스( - )로 for문을 시작한다.
        for(let day = 1 - doMonth.getDay(); daysLength >= day; day++) {

            let column = row.insertCell();

            // @param 평일( 전월일과 익월일의 데이터 제외 )
            if(Math.sign(day) == 1 && lastDate.getDate() >= day) {


                // @param 평일 날짜 데이터 삽입

                column.innerText = autoLeftPad(day, 2);


                // @param 일요일인 경우
                if(dom % 7 == 1) {
                    column.classList.add("red");
                }

                // @param 토요일인 경우
                if(dom % 7 == 0) {
                    column.classList.add("blue");
                    row = tbCalendar.insertRow();   // @param 토요일이 지나면 다시 가로 행을 한줄 추가한다.
                }

            }

            // @param 평일 전월일과 익월일의 데이터 날짜변경
            else {
                let exceptDay = new Date(doMonth.getFullYear(), doMonth.getMonth(), day);
                column.innerText = autoLeftPad(exceptDay.getDate(), 2);
                column.style.color = "#A9A9A9";
            }

            // @brief   전월, 명월 음영처리
            // @details 현재년과 선택 년도가 같은경우
            if(today.getFullYear() == date.getFullYear()) {

                // @details 현재월과 선택월이 같은경우
                if(today.getMonth() == date.getMonth()) {

                    // @details 현재일보다 이전인 경우이면서 현재월에 포함되는 일인경우
                    if(lastDate.getDate() >= day) {
                        column.style.cursor = "pointer";
                        column.onclick = function(){ calendarChoiceDay(this); }
                    }

                    // @details 현재일인 경우
                    if(date.getDate() == day) {
                        column.classList.add("today");
						column.classList.remove("blue");
						column.classList.remove("red");
						column.classList.remove("choiceday");
                        column.onclick = function(){ calendarChoiceDay(this); }
                    }

                // @details 현재월보다 이전인경우
                } else if(today.getMonth() < date.getMonth()) {
                    if(Math.sign(day) == 1 && day <= lastDate.getDate()) {
                        column.onclick = function(){ calendarChoiceDay(this); }
                    }
                }

                // @details 현재월보다 이후인경우
                else {
                    if(Math.sign(day) == 1 && day <= lastDate.getDate()) {
                        column.style.cursor = "pointer";
                        column.onclick = function(){ calendarChoiceDay(this); }
                    }
                }
            }

            // @details 선택한년도가 현재년도보다 작은경우
            else if(today.getFullYear() < date.getFullYear()) {
                if(Math.sign(day) == 1 && day <= lastDate.getDate()) {
                }
            }

            // @details 선택한년도가 현재년도보다 큰경우
            else {
                if(Math.sign(day) == 1 && day <= lastDate.getDate()) {
                    column.style.cursor = "pointer";
                    column.onclick = function(){ calendarChoiceDay(this); }
                }
            }


            dom++;

        }
    }

    /**
     * @brief   날짜 선택
     * @details 사용자가 선택한 날짜에 체크표시를 남긴다.
     */
    function calendarChoiceDay(column) {

        // @param 기존 선택일이 존재하는 경우 기존 선택일의 표시형식을 초기화 한다.
        if(document.getElementsByClassName("choiceday")[0]) {
            document.getElementsByClassName("choiceday")[0].classList.remove("choiceday");
        }

        // @param 선택일 체크 표시;


        // @param 선택일 클래스명 변경

        column.classList.add("choiceday");
    }

    /**
     * @brief   숫자 두자릿수( 00 ) 변경
     * @details 자릿수가 한지라인 ( 1, 2, 3등 )의 값을 10, 11, 12등과 같은 두자리수 형식으로 맞추기위해 0을 붙인다.
     * @param   num     앞에 0을 붙일 숫자 값
     * @param   digit   글자의 자릿수를 지정 ( 2자릿수인 경우 00, 3자릿수인 경우 000 … )
     */
    function autoLeftPad(num, digit) {
        if(String(num).length < digit) {
            num = new Array(digit - String(num).length + 1).join("0") + num;
        }
        return num;

    }



// 숫자 자릿수 나누기 123
function unit(x){// 1의 자리 숫자
	var m = x%10
	return m
}
function tenth(y){// 10의 자리 숫자
	var m = y/10%10
	m = Math.floor(m)
	return m
}
function hund(v){// 100의 자리 숫자
	var m = v/100
	m = Math.floor(m)
	return m
}
// 카운트 함수 정의 
function ddaycount(){
	imgArr =[
		'images/num0.png',
		'images/num1.png',
		'images/num2.png',
		'images/num3.png',
		'images/num4.png',
		'images/num5.png',
		'images/num6.png',
		'images/num7.png',
		'images/num8.png',
		'images/num9.png'
	]
	doomsday = new Date('Marc 1, 2023 00:00:00')
	Today = new Date()
	howfar = doomsday - Today
	if(howfar>0){
		setTimeout('ddaycount()',1000)
	}else{
		clearTimeout('ddaycount()')
		document.getElementById('countment').innerHTML="카운트가 종료되었습니다."
		return false
	}
	days = Math.floor(howfar/(1000*60*60*24))
	hours = Math.floor(howfar/(1000*60*60))
	mins = Math.floor(howfar/(1000*60))
	secs = Math.floor(howfar/(1000))
	d = days
	h = hours-days*24
	m = mins-hours*60
	s = secs-mins*60
	document.getElementById("day100").setAttribute("src",imgArr[hund(d)])
	document.getElementById("day10").setAttribute("src",imgArr[tenth(d)])
	document.getElementById("day1").setAttribute("src",imgArr[unit(d)])
	document.getElementById("hour10").setAttribute("src",imgArr[tenth(h)])
	document.getElementById("hour1").setAttribute("src",imgArr[unit(h)])
	document.getElementById("min10").setAttribute("src",imgArr[tenth(m)])
	document.getElementById("min1").setAttribute("src",imgArr[unit(m)])
	document.getElementById("sec10").setAttribute("src",imgArr[tenth(s)])
	document.getElementById("sec1").setAttribute("src",imgArr[unit(s)])
	
	if(d<10){d='00'+d}else if(d<100){d='0'+d}
	if(h<10){d='0'+h}
	if(m<10){d='0'+m}
	if(s<10){d='0'+s}
}