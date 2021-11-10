var tid;
var cnt = parseInt(900);//초기값(초단위)

function counter_init() {
	tid = setInterval(function(){
		counter_run();
	}, 1000);
};

function counter_reset(){
	clearInterval(tid);
	cnt = parseInt(900);
	counter_init();
};

function counter_run(){
	document.getElementById("counter").innerText = time_format(cnt);
	cnt--;
	if(cnt < 0) {
		clearInterval(tid);
		self.location = "./login/logout.php";
	}
};
function time_format(s) {
	var nHour=0;
	var nMin=0;
	var nSec=0;
	if(s>0) {
		nMin = parseInt(s/60);
		nSec = s%60;

		if(nMin>60) {
			nHour = parseInt(nMin/60);
			nMin = nMin%60;
		}
	} 
	nHour1 = nHour+"시간 ";
	nMin1 = nMin+"분 ";
	nSec1 = nSec+"초";
	if(nSec1=="0초"){ 
		nSec1 = " ";
	};
	if(nMin1=="0분 "){ 
		nMin1 = " ";
	};				
	if(nHour1=="0시간 "){ 
		nHour1 = " ";
	};
	return nHour1 + nMin1 + nSec1
};
counter_init();