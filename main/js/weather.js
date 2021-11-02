$(function(){
		$.getJSON('https://api.openweathermap.org/data/2.5/weather?id=1842030&units=metric&appid=e4b26de32dc9cb1a58499be86df74790',function(data){
		//alert(data.city.name);
		//alert(data.list[0].main.temp_min);
		var today = new Date();
		var month = today.getMonth() + 1;
		var date = today.getDate();
		var day = today.getDay();
		var hour = today.getHours();
		
		
		var $cTemp = data.main.temp;
		var $min_Temp = data.main.temp_min;
		var $max_Temp = data.main.temp_max;
		
		var $cHumi = data.main.humidity;
		var $cSpd = data.wind.speed;
		var $cDeg = data.wind.deg;
		var $wIcon = data.weather[0].icon;
		
		var degE = ['N', 'NNE', 'NE', 'ENE', 'E', 'ESE', 'SE', 'SSE', 'S', 'SSW', 'SW', 'WSW', 'W', 'WNW', 'NW', 'NNW'];
		var whatdegE;
		if($cDeg>=0 && $cDeg<20)
		{
			whatdegE = degE[0];
		}
		else if($cDeg>=20 && $cDeg<50)
		{
			whatdegE = degE[1];
		}
		else if($cDeg>=50 && $cDeg<70)
		{
			whatdegE = degE[2];
		}
		else if($cDeg>=70 && $cDeg<90)
		{
			whatdegE = degE[3];
		}
		else if($cDeg>=90 && $cDeg<110)
		{
			whatdegE = degE[4];
		}
		else if($cDeg>=110 && $cDeg<140)
		{
			whatdegE = degE[5];
		}
		else if($cDeg>=140 && $cDeg<160)
		{
			whatdegE = degE[6];
		}
		else if($cDeg>=160 && $cDeg<180)
		{
			whatdegE = degE[7];
		}
		else if($cDeg>=180 && $cDeg<200)
		{
			whatdegE = degE[8];
		}
		else if($cDeg>=200 && $cDeg<230)
		{
			whatdegE = degE[9];
		}
		else if($cDeg>=230 && $cDeg<250)
		{
			whatdegE = degE[10];
		}
		else if($cDeg>=250 && $cDeg<270)
		{
			whatdegE = degE[11];
		}
		else if($cDeg>=270 && $cDeg<290)
		{
			whatdegE = degE[12];
		}
		else if($cDeg>=290 && $cDeg<320)
		{
			whatdegE = degE[13];
		}
		else if($cDeg>=320 && $cDeg<340)
		{
			whatdegE = degE[14];
		}
		else if($cDeg>=340 && $cDeg<360)
		{
			whatdegE = degE[15];
		}
		var whatday;
		if(day = 1)
		{
			whatday = '일요일';
		}
		else if(day = 2)
		{
			whatday = '월요일'
		}
		else if(day = 3)
		{
			whatday = '화요일'
		}
		else if(day = 4)
		{
			whatday = '수요일'
		}
		else if(day = 5)
		{
			whatday = '목요일'
		}
		else if(day = 6)
		{
			whatday = '금요일'
		}
		else if(day = 7)
		{
			whatday = '토요일'
		}
		
		$('.kTemp').prepend(Math.floor($cTemp));
		$('.kHumi').prepend($cHumi);
		$('.kminTemp').append(Math.floor($min_Temp)+'˚C');
		$('.kmaxTemp').append(Math.floor($max_Temp)+'˚C');
		$('.kSpd').append(Math.floor($cSpd));
		$('.kDeg').append(whatdegE);
		$('.kmonth').prepend(month);
		$('.kdate').prepend(date);
		$('.kwhatday').prepend(whatday);
		$('.kicon').append('<img src="images/'+$wIcon+'.png" width="100" height="100"/>');
		
		
		
		if($wIcon == '01n'){
			$('.promo_box4_theme').addClass('night_sky');
		}
		else if($wIcon =='02n'){
			$('.promo_box4_theme').addClass('night_sky');
		}
		else if($wIcon =='03d'){
			$('.promo_box4_theme').addClass('morning_cloud');
		}
		else if($wIcon =='03n'){
			$('.promo_box4_theme').addClass('night_cloud');
		}
		else if($wIcon =='04d'){
			$('.promo_box4_theme').addClass('morning_cloud');
		}
		else if($wIcon =='04n'){
			$('.promo_box4_theme').addClass('night_cloud');
		}
		else if($wIcon =='50d'){
			$('.promo_box4_theme').addClass('morning_cloud');
		}
		else if($wIcon =='50n'){
			$('.promo_box4_theme').addClass('night_cloud');
		}
		else if($wIcon =='13n'){
			$('.promo_box4_theme').addClass('night_sky');
		}
		else if($wIcon =='50n'){
			$('.promo_box4_theme').addClass('night_sky');
		}
		else if($wIcon =='09n'){
			$('.promo_box4_theme').addClass('rain_n');
			$('.kTemp').addClass('Ton');
			$('.kHumi').addClass('Hon');
			$('.kDeg').addClass('Don');
			$('.kPm25').addClass('Pon');
			$('.kPm10').addClass('Pon2');
		}
		else if($wIcon == '09d'){
			$('.promo_box4_theme').addClass('rain_d');
			$('.kTemp').addClass('Ton');
			$('.kHumi').addClass('Hon');
			$('.kDeg').addClass('Don');
			$('.kPm25').addClass('Pon');
			$('.kPm10').addClass('Pon2');
		}
		else if($wIcon == '10n'){
			$('.promo_box4_theme').addClass('rain_n');
			$('.kTemp').addClass('Ton');
			$('.kHumi').addClass('Hon');
			$('.kDeg').addClass('Don');
			$('.kPm25').addClass('Pon');
			$('.kPm10').addClass('Pon2');
		}
		else if($wIcon == '10d'){
			$('.promo_box4_theme').addClass('rain_d');
			$('.kTemp').addClass('Ton');
			$('.kHumi').addClass('Hon');
			$('.kDeg').addClass('Don');
			$('.kPm25').addClass('Pon');
			$('.kPm10').addClass('Pon2');
		}
		else if($wIcon == '11n'){
			$('.promo_box4_theme').addClass('rain_n');
			$('.kTemp').addClass('Ton');
			$('.kHumi').addClass('Hon');
			$('.kDeg').addClass('Don');
			$('.kPm25').addClass('Pon');
			$('.kPm10').addClass('Pon2');
		}
		else if($wIcon == '11d'){
			$('.promo_box4_theme').addClass('rain_d');
			$('.kTemp').addClass('Ton');
			$('.kHumi').addClass('Hon');
			$('.kDeg').addClass('Don');
			$('.kPm25').addClass('Pon');
			$('.kPm10').addClass('Pon2');
		}
		else{
			$('.promo_box4_theme').addClass('morning_sky');
		};
	});	
});

$(function(){
	
	$.getJSON('http://api.openweathermap.org/data/2.5/air_pollution?lat=37.3675&lon=126.9469&appid=e4b26de32dc9cb1a58499be86df74790',function(data){
		var $pm2_5 = data.list[0].components.pm2_5;
		var $pm10 = data.list[0].components.pm10;
		
		$('.kPm25').append(Math.floor($pm2_5));
		$('.kPm10').append(Math.floor($pm10));
	});	
});