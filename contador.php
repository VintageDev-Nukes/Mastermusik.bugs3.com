<?php
$go = @$_GET['style'];
$y = $_GET['y'];
$m = $_GET['m'];
$d = $_GET['d'];
$h = $_GET['h'];
$min = $_GET['min'];
$color = @$_GET['color'];
$bg = @$_GET['bg'];
$l = @$_GET['l'];
if(empty($go)){$go='style1a';}
if(empty($l)){$l='es';}
if(empty($bg)){$bg='fff';}
if(empty($color)){$color='000';}

switch ($l) {
    case 'es':
        $l = array("Días", "Horas", "Minutos", "Segundos");
        break;
    
    case 'en':
        $l = array("Days", "Hours", "Minutes", "Seconds");
        break;

}

switch($go){
 
   case 'style1a':
      echo '<html>
<head>
<style type="text/css">
body {background-color:'.$bg.';}
.numbers {
    width: 55px;
    text-align: center; 
    font-family: Arial; 
    font-size: 28px;
    font-weight: bold;    /* options are normal, bold, bolder, lighter */
    font-style: normal;   /* options are normal or italic */
    color: '.$color.';       /* change color using the hexadecimal color codes for HTML */
}
.title {/* the styles below will affect the title under the numbers, i.e., "Days", "Hours", etc. */
    width: 55px;
    text-align: center; 
    font-family: Arial; 
    font-size: 10px;
    font-weight: bold;    /* options are normal, bold, bolder, lighter */
    color: '.$color.';       /* change color using the hexadecimal color codes for HTML */
}
#table {
    width: 400px;
    height: 48px;
    border-style: none;
    background-color: transparent;
    margin: 0px auto;
    position: relative;   /* leave as "relative" to keep timer centered on your page, or change to "absolute" then change the values of the "top" and "left" properties to position the timer */
    top: 0px;             /* change to position the timer */
    left: 0px;            /* change to position the timer; delete this property and it\'s value to keep timer centered on page */
}
</style>

<script type="text/javascript">

/*
Count down until any date script-
By JavaScript Kit (www.javascriptkit.com)
Over 200+ free scripts here!
Modified by Robert M. Kuhnhenn, D.O. 
on 5/30/2006 to count down to a specific date AND time,
on 10/20/2007 to a new format, and 1/10/2010 to include
time zone offset.
*/

/*  Change the items noted in light blue below to create your countdown target date and announcement once the target date and time are reached.  */
var current="Winter is here!";//-->enter what you want the script to display when the target date and time are reached, limit to 20 characters
var year=2010;      //-->Enter the count down target date YEAR
var month=12;        //-->Enter the count down target date MONTH
var day=21;         //-->Enter the count down target date DAY
var hour=18;        //-->Enter the count down target date HOUR (24 hour clock)
var minute=38;      //-->Enter the count down target date MINUTE
var tz=-5;          //-->Offset for your timezone in hours from UTC (see http://wwp.greenwichmeantime.com/index.htm to find the timezone offset for your location)

//-->    DO NOT CHANGE THE CODE BELOW!    <--
var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

function countdown(yr,m,d,hr,min){
    theyear=yr;themonth=m;theday=d;thehour=hr;theminute=min;
    var today=new Date();
    var todayy=today.getYear();
    if (todayy < 1000) {todayy+=1900;}
    var todaym=today.getMonth();
    var todayd=today.getDate();
    var todayh=today.getHours();
    var todaymin=today.getMinutes();
    var todaysec=today.getSeconds();
    var todaystring1=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec;
    var todaystring=Date.parse(todaystring1)+(tz*1000*60*60);
    var futurestring1=(montharray[m-1]+" "+d+", "+yr+" "+hr+":"+min);
    var futurestring=Date.parse(futurestring1)-(today.getTimezoneOffset()*(1000*60));
    var dd=futurestring-todaystring;
    var dday=Math.floor(dd/(60*60*1000*24)*1);
    var dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1);
    var dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
    var dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);
    if(dday<=0&&dhour<=0&&dmin<=0&&dsec<=0){
        document.getElementById(\'count2\').innerHTML=current;
        document.getElementById(\'count2\').style.display="inline";
        document.getElementById(\'count2\').style.width="390px";
        document.getElementById(\'dday\').style.display="none";
        document.getElementById(\'dhour\').style.display="none";
        document.getElementById(\'dmin\').style.display="none";
        document.getElementById(\'dsec\').style.display="none";
        document.getElementById(\'days\').style.display="none";
        document.getElementById(\'hours\').style.display="none";
        document.getElementById(\'minutes\').style.display="none";
        document.getElementById(\'seconds\').style.display="none";
        document.getElementById(\'spacer1\').style.display="none";
        document.getElementById(\'spacer2\').style.display="none";
        return;
    }
    else {
        document.getElementById(\'count2\').style.display="none";
        document.getElementById(\'dday\').innerHTML=dday;
        document.getElementById(\'dhour\').innerHTML=dhour;
        document.getElementById(\'dmin\').innerHTML=dmin;
        document.getElementById(\'dsec\').innerHTML=dsec;
        setTimeout("countdown(theyear,themonth,theday,thehour,theminute)",1000);
    }
}
</script>

</head>

<body onload="countdown('.$y.','.$m.','.$d.','.$h.','.$min.')">
<table id="table" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center" colspan="6"><div class="numbers" id="count2" style="padding: 5px 0 0 0; "></div></td>
    </tr>
    <tr id="spacer1" height="30">
        <td align="center" ><div class="numbers" ></div></td>
        <td align="center" ><div class="numbers" id="dday"></div></td>
        <td align="center" ><div class="numbers" id="dhour"></div></td>
        <td align="center" ><div class="numbers" id="dmin"></div></td>
        <td align="center" ><div class="numbers" id="dsec"></div></td>
        <td align="center" ><div class="numbers" ></div></td>
    </tr>
    <tr id="spacer2" height="12">
        <td align="center" ><div class="title" ></div></td>
        <td align="center" ><div class="title" id="days">'.$l[0].'</div></td>
        <td align="center" ><div class="title" id="hours">'.$l[1].'</div></td>
        <td align="center" ><div class="title" id="minutes">'.$l[2].'</div></td>
        <td align="center" ><div class="title" id="seconds">'.$l[3].'</div></td>
        <td align="center" ><div class="title" ></div></td>
    </tr>
</table>

</body>
</html>';
      break;

    case 'style1b':
        echo '<html>
<head>
<style type="text/css">
body {background-color:'.$bg.';}
.numbers {
    padding: 0px;
    width: 45px;
    text-align: center;
    font-family: Arial;             
    font-size: 28px;
    font-weight: bold;    /* options are normal, bold, bolder, lighter */
    font-style: normal;   /* options are normal or italic */
    color: '.$color.';       /* change color using the hexadecimal color codes for HTML */
}
.title {    /* the styles below will affect the title under the numbers, i.e., “Days”, “Hours”, etc. */
    border-style: none;
    padding: 0px 0px 3px 0px;
    width: 45px;
    text-align: center;
    font-family: Arial;
    font-size: 10px;
    font-weight: bold;    /* options are normal, bold, bolder, lighter */
    color: '.$color.';       /* change color using the hexadecimal color codes for HTML */
}
#table {
    width: 400px;
    height: 70px;
    border-style: ridge;
    border-width: 3px;
    border-color: #666666;       /* change color using the hexadecimal color codes for HTML */
    background-color: #222222;   /* change color using the hexadecimal color codes for HTML */
    margin: 0px auto;
    position: relative;   /* leave as "relative" to keep timer centered on your page, or change to "absolute" then change the values of the "top" and "left" properties to position the timer */
    top: 0px;             /* change to position the timer */
    left: 0px;            /* change to position the timer; delete this property and it\'s value to keep timer centered on page */
}
</style>

<script type="text/javascript">

/*
Count down until any date script-
By JavaScript Kit (www.javascriptkit.com)
Over 200+ free scripts here!
Modified by Robert M. Kuhnhenn, D.O. 
on 5/30/2006 to count down to a specific date AND time,
on 10/20/2007 to a new format, and 1/10/2010 to include
time zone offset.
*/

var current="Winter is here!";    //-->enter what you want the script to display when the target date and time are reached, limit to 20 characters
var year=2010;    //-->Enter the count down target date YEAR
var month=12;      //-->Enter the count down target date MONTH
var day=21;       //-->Enter the count down target date DAY
var hour=18;      //-->Enter the count down target date HOUR (24 hour clock)
var minute=38;    //-->Enter the count down target date MINUTE
var tz=-5;        //-->Offset for your timezone in hours from UTC (see http://wwp.greenwichmeantime.com/index.htm to find the timezone offset for your location)

//    DO NOT CHANGE THE CODE BELOW!
var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

function countdown(yr,m,d,hr,min){
    theyear=yr;themonth=m;theday=d;thehour=hr;theminute=min;
    var today=new Date();
    var todayy=today.getYear();
    if (todayy < 1000) {todayy+=1900;}
    var todaym=today.getMonth();
    var todayd=today.getDate();
    var todayh=today.getHours();
    var todaymin=today.getMinutes();
    var todaysec=today.getSeconds();
    var todaystring1=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec;
    var todaystring=Date.parse(todaystring1)+(tz*1000*60*60);
    var futurestring1=(montharray[m-1]+" "+d+", "+yr+" "+hr+":"+min);
    var futurestring=Date.parse(futurestring1)-(today.getTimezoneOffset()*(1000*60));
    var dd=futurestring-todaystring;
    var dday=Math.floor(dd/(60*60*1000*24)*1);
    var dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1);
    var dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
    var dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);
    if(dday<=0&&dhour<=0&&dmin<=0&&dsec<=0){
        document.getElementById(\'count2\').innerHTML=current;
        document.getElementById(\'count2\').style.display="inline";
        document.getElementById(\'count2\').style.width="390px";
        document.getElementById(\'dday\').style.display="none";
        document.getElementById(\'dhour\').style.display="none";
        document.getElementById(\'dmin\').style.display="none";
        document.getElementById(\'dsec\').style.display="none";
        document.getElementById(\'days\').style.display="none";
        document.getElementById(\'hours\').style.display="none";
        document.getElementById(\'minutes\').style.display="none";
        document.getElementById(\'seconds\').style.display="none";
        document.getElementById(\'spacer1\').style.display="none";
        document.getElementById(\'spacer2\').style.display="none";
        return;
    }
    else {
        document.getElementById(\'count2\').style.display="none";
        document.getElementById(\'dday\').innerHTML=dday;
        document.getElementById(\'dhour\').innerHTML=dhour;
        document.getElementById(\'dmin\').innerHTML=dmin;
        document.getElementById(\'dsec\').innerHTML=dsec;
        setTimeout("countdown(theyear,themonth,theday,thehour,theminute)",1000);
    }
}
</script>

</head>

<body onload="countdown('.$y.','.$m.','.$d.','.$h.','.$min.')">
<table id="table" border="0">
    <tr>
        <td align="center" colspan="6"><div class="numbers" id="count2" style="padding: 5px 0 0 0; "></div></td>
    </tr>
    <tr id="spacer1">
        <td align="center" ><div class="numbers" ></div></td>
        <td align="center" ><div class="numbers" id="dday"></div></td>
        <td align="center" ><div class="numbers" id="dhour"></div></td>
        <td align="center" ><div class="numbers" id="dmin"></div></td>
        <td align="center" ><div class="numbers" id="dsec"></div></td>
        <td align="center" ><div class="numbers" ></div></td>
    </tr>
    <tr id="spacer2">
        <td align="center" ><div class="title" ></div></td>
        <td align="center" ><div class="title" id="days">'.$l[0].'</div></td>
        <td align="center" ><div class="title" id="hours">'.$l[1].'</div></td>
        <td align="center" ><div class="title" id="minutes">'.$l[2].'</div></td>
        <td align="center" ><div class="title" id="seconds">'.$l[3].'</div></td>
        <td align="center" ><div class="title" ></div></td>
    </tr>
</table>

</body>
</html>';
        break;

    case 'style1c':
        echo '<html>
<head>
<style type="text/css">
body {background-color:'.$bg.';}
.numbers {
    border-style: ridge;    /* options are none, dotted, dashed, solid, double, groove, ridge, inset, outset */
    border-width: 2px;
    border-color: #666666;  /* change the border color using the hexadecimal color codes for HTML */
    background: #222222;    /* change the background color using the hexadecimal color codes for HTML */
    padding: 2px 0px;
    width: 55px;
    text-align: center; 
    font-family: Arial; 
    font-size: 28px;
    font-weight: bold;    /* options are normal, bold, bolder, lighter */
    font-style: normal;   /* options are normal or italic */
    color: '.$color.';       /* change color using the hexadecimal color codes for HTML */
}
.title {    /* the styles below will affect the title under the numbers, i.e., “Days”, “Hours”, etc. */
    border: none;    
    padding: 0px;
    width: 55px;
    text-align: center; 
    font-family: Arial; 
    font-size: 10px; 
    font-weight: normal;  /* options are normal, bold, bolder, lighter */
    color: '.$color.';       /* change color using the hexadecimal color codes for HTML */
    background: transparent;    /* change the background color using the hexadecimal color codes for HTML */
}
#table {
    width: 400px;
    border: none;    /* options are none, dotted, dashed, solid, double, groove, ridge, inset, outset */
    margin: 0px auto;
    position: relative;    /* leave as "relative" to keep timer centered on your page, or change to "absolute" then change the values of the "top" and "left" properties to position the timer */
    top: 0px;        /* change to position the timer */
    left: 0px;       /* change to position the timer; delete this property and it\'s value to keep timer centered on page */
}
</style>

<script type="text/javascript">

/*
Count down until any date script-
By JavaScript Kit (www.javascriptkit.com)
Over 200+ free scripts here!
Modified by Robert M. Kuhnhenn, D.O. 
on 5/30/2006 to count down to a specific date AND time,
on 10/20/2007 to a new format, and 1/10/2010 to include
time zone offset.
*/

var current="Winter is here!";    //-->enter what you want the script to display when the target date and time are reached, limit to 20 characters
var year=2010;    //-->Enter the count down target date YEAR
var month=12;      //-->Enter the count down target date MONTH
var day=21;       //-->Enter the count down target date DAY
var hour=18;      //-->Enter the count down target date HOUR (24 hour clock)
var minute=38;    //-->Enter the count down target date MINUTE
var tz=-5;        //-->Offset for your timezone in hours from UTC (see http://wwp.greenwichmeantime.com/index.htm to find the timezone offset for your location)

//    DO NOT CHANGE THE CODE BELOW!
var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec")

function countdown(yr,m,d,hr,min){
    theyear=yr;themonth=m;theday=d;thehour=hr;theminute=min;
    var today=new Date();
    var todayy=today.getYear();
    if (todayy < 1000) {todayy+=1900;}
    var todaym=today.getMonth();
    var todayd=today.getDate();
    var todayh=today.getHours();
    var todaymin=today.getMinutes();
    var todaysec=today.getSeconds();
    var todaystring1=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec;
    var todaystring=Date.parse(todaystring1)+(tz*1000*60*60);
    var futurestring1=(montharray[m-1]+" "+d+", "+yr+" "+hr+":"+min);
    var futurestring=Date.parse(futurestring1)-(today.getTimezoneOffset()*(1000*60));
    var dd=futurestring-todaystring;
    var dday=Math.floor(dd/(60*60*1000*24)*1);
    var dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1);
    var dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
    var dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);
    if(dday<=0&&dhour<=0&&dmin<=0&&dsec<=0){
        document.getElementById(\'count2\').innerHTML=current;
        document.getElementById(\'count2\').style.display="block";
        document.getElementById(\'count2\').style.width="390px";
        document.getElementById(\'dday\').style.display="none";
        document.getElementById(\'dhour\').style.display="none";
        document.getElementById(\'dmin\').style.display="none";
        document.getElementById(\'dsec\').style.display="none";
        document.getElementById(\'days\').style.display="none";
        document.getElementById(\'hours\').style.display="none";
        document.getElementById(\'minutes\').style.display="none";
        document.getElementById(\'seconds\').style.display="none";
        document.getElementById(\'spacer1\').style.display="none";
        document.getElementById(\'spacer2\').style.display="none";
        return;
    }
    else {
        document.getElementById(\'count2\').style.display="none";
        document.getElementById(\'dday\').innerHTML=dday;
        document.getElementById(\'dhour\').innerHTML=dhour;
        document.getElementById(\'dmin\').innerHTML=dmin;
        document.getElementById(\'dsec\').innerHTML=dsec;
        setTimeout("countdown(theyear,themonth,theday,thehour,theminute)",1000);
    }
}
</script>

</head>

<body onload="countdown('.$y.','.$m.','.$d.','.$h.','.$min.')">
<table id="table" border="0">
    <tr>
        <td align="center" colspan="6"><div class="numbers" id="count2" style="padding: 10px; "></div></td>
    </tr>
    <tr id="spacer1">
        <td align="center" ><div class="title" ></div></td>
        <td align="center" ><div class="numbers" id="dday"></div></td>
        <td align="center" ><div class="numbers" id="dhour"></div></td>
        <td align="center" ><div class="numbers" id="dmin"></div></td>
        <td align="center" ><div class="numbers" id="dsec"></div></td>
        <td align="center" ><div class="title" ></div></td>
    </tr>
    <tr id="spacer2">
        <td align="center" ><div class="title" ></div></td>
        <td align="center" ><div class="title" id="days">'.$l[0].'</div></td>
        <td align="center" ><div class="title" id="hours">'.$l[1].'</div></td>
        <td align="center" ><div class="title" id="minutes">'.$l[2].'</div></td>
        <td align="center" ><div class="title" id="seconds">'.$l[3].'</div></td>
        <td align="center" ><div class="title" ></div></td>
    </tr>
</table>

</body>
</html>';
        break;

    case 'style1d':
        echo '<html>
<head>
<style type="text/css">
body {background-color:'.$bg.';} 
.background {
    border-style: none;
    width: 62px;
    height: 58px;
}
.numbers {
    border-style: none;
    background-color: #292929;
    padding: 0px;
    margin: 0px;
    width: 62px;
    height: 42px;
    text-align: center; 
    font-family: Arial; 
    font-size: 34px;
    font-weight: normal;    /* options are normal, bold, bolder, lighter */
    color: '.$color.';     /* change color using the hexadecimal color codes for HTML */
}
.title {    /* the styles below will affect the title under the numbers, i.e., “Days”, “Hours”, etc. */
    border: none;    
    padding: 0px;
    margin: 0px 3px;
    width: 62px;
    text-align: center; 
    font-family: Arial; 
    font-size: 10px; 
    font-weight: normal;    /* options are normal, bold, bolder, lighter */
    color: '.$color.';    /* change color using the hexadecimal color codes for HTML */
    background-color: #000000;  
}
#form {    /* the styles below will affect the outer border of the countdown timer */
    width: 400px;
    height: 80px;
    border-style: ridge;    /* options are none, dotted, dashed, solid, double, groove, ridge, inset, outset */
    border-width: 2px;
    border-color: #666666;  /* change color using the hexadecimal color codes for HTML */ 
    background-color: #000000;
    padding: 5px;
    margin: 0px auto;
    position: relative;   /* leave as "relative" to keep timer centered on your page, or change to "absolute" then change the values of the "top" and "left" properties to position the timer */
    top: 0px;             /* change to position the timer */
    left: 0px;            /* change to position the timer; delete this property and it\'s value to keep timer centered on page */
}
.line {
    border-style: none;
    width: 62px; 
    height: 2px;
    z-index: 15;
}
</style>

<script type="text/javascript">

/*
Count down until any date script-
By JavaScript Kit (www.javascriptkit.com)
Over 200+ free scripts here!
Modified by Robert M. Kuhnhenn, D.O. 
on 5/30/2006 to count down to a specific date AND time,
and on 1/10/2010 to include time zone offset.
*/

/*  Change the items below to create your countdown target date and announcement once the target date and time are reached.  */
var current="Winter is here!";     //—>enter what you want the script to display when the target date and time are reached, limit to 20 characters
var year=2010;        //—>Enter the count down target date YEAR
var month=12;          //—>Enter the count down target date MONTH
var day=21;           //—>Enter the count down target date DAY
var hour=18;          //—>Enter the count down target date HOUR (24 hour clock)
var minute=38;        //—>Enter the count down target date MINUTE
var tz=-5;            //—>Offset for your timezone in hours from UTC (see http://wwp.greenwichmeantime.com/index.htm to find the timezone offset for your location)

//—>    DO NOT CHANGE THE CODE BELOW!    <—
var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

function countdown(yr,m,d,hr,min){
    theyear=yr;themonth=m;theday=d;thehour=hr;theminute=min;
    var today=new Date();
    var todayy=today.getYear();
    if (todayy < 1000) {
    todayy+=1900; }
    var todaym=today.getMonth();
    var todayd=today.getDate();
    var todayh=today.getHours();
    var todaymin=today.getMinutes();
    var todaysec=today.getSeconds();
    var todaystring1=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec;
    var todaystring=Date.parse(todaystring1)+(tz*1000*60*60);
    var futurestring1=(montharray[m-1]+" "+d+", "+yr+" "+hr+":"+min);
    var futurestring=Date.parse(futurestring1)-(today.getTimezoneOffset()*(1000*60));
    var dd=futurestring-todaystring;
    var dday=Math.floor(dd/(60*60*1000*24)*1);
    var dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1);
    var dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
    var dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);
    if(dday<=0&&dhour<=0&&dmin<=0&&dsec<=0){
        document.getElementById(\'count2\').innerHTML=current;
        document.getElementById(\'count2\').style.display="inline";
        document.getElementById(\'count2\').style.width="390px";
        document.getElementById(\'dday\').style.display="none";
        document.getElementById(\'dhour\').style.display="none";
        document.getElementById(\'dmin\').style.display="none";
        document.getElementById(\'dsec\').style.display="none";
        document.getElementById(\'days\').style.display="none";
        document.getElementById(\'hours\').style.display="none";
        document.getElementById(\'minutes\').style.display="none";
        document.getElementById(\'seconds\').style.display="none";
        return;
    }
    else {
        document.getElementById(\'count2\').style.display="none";
        document.getElementById(\'dday\').innerHTML=dday;
        document.getElementById(\'dhour\').innerHTML=dhour;
        document.getElementById(\'dmin\').innerHTML=dmin;
        document.getElementById(\'dsec\').innerHTML=dsec;
        setTimeout("countdown(theyear,themonth,theday,thehour,theminute)",1000);
    }
}
</script>

</head>

<body onload="countdown('.$y.','.$m.','.$d.','.$h.','.$min.')">
<div id="form">
    <div class="numbers" id="count2" style="position: absolute; top: 10px; height: 60px; padding: 15px 0 0 10px; background-color: #000000; z-index: 20;"></div>
    <img src="images/bkgdimage.gif" class="background" style="position: absolute; left: 69px; top: 12px;"/>
    <img src="images/line.jpg" class="line" style="position: absolute; left: 69px; top: 40px;"/> 
    <div class="numbers" id="dday" style="position: absolute; left: 69px; top: 21px;" ></div>

    <img src="images/bkgdimage.gif" class="background" style="position: absolute; left: 141px; top: 12px;"/>
    <img src="images/line.jpg" class="line" style="position: absolute; left: 141px; top: 40px;"/>
    <div class="numbers" id="dhour" style="position: absolute; left: 141px; top: 21px;" ></div>

    <img src="images/bkgdimage.gif" class="background" style="position: absolute; left: 213px; top: 12px;"/>
    <img src="images/line.jpg" class="line" style="position: absolute; left: 213px; top: 40px;"/>
    <div class="numbers" id="dmin" style="position: absolute; left: 213px; top: 21px;" ></div>

    <img src="images/bkgdimage.gif" class="background" style="position: absolute; left: 285px; top: 12px;"/>
    <img src="images/line.jpg" class="line" style="position: absolute; left: 285px; top: 40px;"/>
    <div class="numbers" id="dsec" style="position: absolute; left: 285px; top: 21px;" ></div>

    <div class="title" id="days" style="position: absolute; left: 66px; top: 73px;" >'.$l[0].'</div>
    <div class="title" id="hours" style="position: absolute; left: 138px; top: 73px;" >'.$l[1].'</div>
    <div class="title" id="minutes" style="position: absolute; left: 210px; top: 73px;" >'.$l[2].'</div>
    <div class="title" id="seconds" style="position: absolute; left: 282px; top: 73px;" >'.$l[3].'</div>
</div>

</body>
</html>';
        break;

    case 'style2a':
        echo '<html><head>
<style type="text/css">
body {background-color:'.$bg.';} 
#count {
    border: none;
    text-align: center; 
    font-family: Arial; 
    font-size: 26px; 
    font-weight: normal;    /* options are normal, bold, bolder, lighter */
    font-style: italic;     /* options are normal or italic */
    color: '.$color.';    /* change color using the hexadecimal color codes for HTML */
    background-color: transparent;    /* change the background color using the hex color codes for HTML */
    margin: 0px auto; 
    text-align: center;
    width: 664px; 
    height: 37px;
    position: relative;   /* leave as "relative" to keep timer centered on your page, or change to "absolute" then change the values of the "top" and "left" properties to position the timer */
    top: 0px;             /* change to position the timer */
    left: 0px;            /* change to position the timer; delete this property and it\'s value to keep timer centered on page */
}
</style>

<script type="text/javascript">

/*
Count down until any date script-
By JavaScript Kit (www.javascriptkit.com)
Over 200+ free scripts here!
Modified by Robert M. Kuhnhenn, D.O. 
on 5/30/2006 to count down to a specific date AND time,
on 10/20/2007 to a new format, and 1/10/2010 to include
time zone offset.
*/

/*  Change the items below to create your countdown target date and announcement once the target date and time are reached.  */
var current="Winter is here!";    //-->enter what you want the script to display when the target date and time are reached, limit to 20 characters
var year=2010;    //-->Enter the count down target date YEAR
var month=12;      //-->Enter the count down target date MONTH
var day=21;       //-->Enter the count down target date DAY
var hour=18;      //-->Enter the count down target date HOUR (24 hour clock)
var minute=38;    //-->Enter the count down target date MINUTE
var tz=-5;        //-->Offset for your timezone in hours from UTC (see http://wwp.greenwichmeantime.com/index.htm to find the timezone offset for your location)

//    -->DO NOT CHANGE THE CODE BELOW!<--
var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

function countdown(yr,m,d,hr,min){
theyear=yr;themonth=m;theday=d;thehour=hr;theminute=min;
    var today=new Date();
    var todayy=today.getYear();
    if (todayy < 1000) {todayy+=1900;}
    var todaym=today.getMonth();
    var todayd=today.getDate();
    var todayh=today.getHours();
    var todaymin=today.getMinutes();
    var todaysec=today.getSeconds();
    var todaystring1=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec;
    var todaystring=Date.parse(todaystring1)+(tz*1000*60*60);
    var futurestring1=(montharray[m-1]+" "+d+", "+yr+" "+hr+":"+min);
    var futurestring=Date.parse(futurestring1)-(today.getTimezoneOffset()*(1000*60));
    var dd=futurestring-todaystring;
    var dday=Math.floor(dd/(60*60*1000*24)*1);
    var dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1);
    var dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
    var dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);
    if(dday<=0&&dhour<=0&&dmin<=0&&dsec<=0){
        document.getElementById(\'count\').innerHTML=current;
        return;
    }
    else {
        document.getElementById(\'count\').innerHTML=+dday+ " days, "+dhour+" hours, "+dmin+" minutes, and "+dsec+" seconds";
        setTimeout("countdown(theyear,themonth,theday,thehour,theminute)",1000);
    }
}
</script>

</head>

<body onload="countdown('.$y.','.$m.','.$d.','.$h.','.$min.');">
    <div id="count"></div>

</body>
</html>';
        break;

    case 'style2b':
        echo '<html>
<head>
<style type="text/css">
body {background-color:'.$bg.';} 
#count {
    border-style: ridge;    /* options are none, dotted, dashed, solid, double, groove, ridge, inset, outset */
    border-width: 2px;
    border-color: #666666;  /* change color of the border using the hexadecimal color codes for HTML */
    padding: 4px;           /* change the spacing between the timer and the border */
    text-align: center; 
    font-family: Arial; 
    font-size: 22px;        /* change the size of the font */
    font-weight: normal;    /* options are normal, bold, bolder, lighter */
    font-style: normal;     /* options are normal or italic */
    color: '.$color.';    /* change color using the hexadecimal color codes for HTML */
    background-color: #222222;    /* change the background color using the hex color codes for HTML */
    margin: 0px auto;
    position: relative;    /* leave as "relative" to keep timer centered on your page, or change to "absolute" then change the values of the "top" and "left" properties to position the timer */
    top: 0px;        /* change to position the timer */
    left: 0px;       /* change to position the timer; delete this property and it\'s value to keep timer centered on page */
    width: 582px;
    height: auto;
}
</style>

<script type="text/javascript">

/*
Count down until any date script-
By JavaScript Kit (www.javascriptkit.com)
Over 200+ free scripts here!
Modified by Robert M. Kuhnhenn, D.O. 
on 5/30/2006 to count down to a specific date AND time,
on 10/20/2007 to a new format, and 1/10/2010 to include
time zone offset.
*/

/*  Change the items below to create your countdown target date and announcement once the target date and time are reached.  */
var current="Winter is here!";    //-->enter what you want the script to display when the target date and time are reached, limit to 20 characters
var year=2010;    //-->Enter the count down target date YEAR
var month=12;      //-->Enter the count down target date MONTH
var day=21;       //-->Enter the count down target date DAY
var hour=18;      //-->Enter the count down target date HOUR (24 hour clock)
var minute=38;    //-->Enter the count down target date MINUTE
var tz=-5;        //-->Offset for your timezone in hours from UTC (see http://wwp.greenwichmeantime.com/index.htm to find the timezone offset for your location)

//-->    DO NOT CHANGE THE CODE BELOW!    <--
var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

function countdown(yr,m,d,hr,min){
theyear=yr;themonth=m;theday=d;thehour=hr;theminute=min;
    var today=new Date();
    var todayy=today.getYear();
    if (todayy < 1000) {todayy+=1900;}
    var todaym=today.getMonth();
    var todayd=today.getDate();
    var todayh=today.getHours();
    var todaymin=today.getMinutes();
    var todaysec=today.getSeconds();
    var todaystring1=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec;
    var todaystring=Date.parse(todaystring1)+(tz*1000*60*60);
    var futurestring1=(montharray[m-1]+" "+d+", "+yr+" "+hr+":"+min);
    var futurestring=Date.parse(futurestring1)-(today.getTimezoneOffset()*(1000*60));
    var dd=futurestring-todaystring;
    var dday=Math.floor(dd/(60*60*1000*24)*1);
    var dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1);
    var dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
    var dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);
    if(dday<=0&&dhour<=0&&dmin<=0&&dsec<=0){
        document.getElementById(\'count\').innerHTML=current;
        return;
    }
    else {
        document.getElementById(\'count\').innerHTML=+dday+ " days, "+dhour+" hours, "+dmin+" minutes, and "+dsec+" seconds";
        setTimeout("countdown(theyear,themonth,theday,thehour,theminute)",1000);
    }
}
</script>

</head>

<body onload="countdown('.$y.','.$m.','.$d.','.$h.','.$min.');">
    <div id="count"></div>

</body>
</html>';
        break;

    case 'style3a':
        echo '<html>
<head>
<style type="text/css">
body {background-color:'.$bg.';}
.numbers {
    text-align: right; 
    font-family: Arial; 
    font-size: 28px; 
    font-weight: bold;    /* options are normal, bold, bolder, lighter */
    font-style: italic;   /* options are normal or italic */
    color: '.$color.';       /* change color using the hexadecimal color codes for HTML */
}
.title {    /* the styles below will affect the title next to the numbers, i.e., “Days”, “Hours”, etc. */
    margin: 12px 0px 0px 0px;
    padding: 0px 8px 0px 3px;
    text-align: left;
    font-family: Arial; 
    font-size: 10px; 
    font-weight: bold;    /* options are normal, bold, bolder, lighter */
    font-style: italic;   /* options are normal or italic */
    color: '.$color.';       /* change color using the hexadecimal color codes for HTML */
}
#table {
    width: auto;
    margin: 0px auto;
    position: relative;    /* leave as "relative" to keep timer centered on your page, or change to "absolute" then change the values of the "top" and "left" properties to position the timer */
    top: 0px;        /* change to position the timer */
    left: 0px;       /* change to position the timer; delete this property and it\'s value to keep timer centered on page */
}
</style>

<script type="text/javascript">

/*
Count down until any date script-
By JavaScript Kit (www.javascriptkit.com)
Over 200+ free scripts here!
Modified by Robert M. Kuhnhenn, D.O. 
on 5/30/2006 to count down to a specific date AND time,
on 10/20/2007 to a new format, and 1/10/2010 to include
time zone offset.
*/

/*  Change the items below to create your countdown target date and announcement once the target date and time are reached.  */
var current="Winter is here!";    //-->enter what you want the script to display when the target date and time are reached, limit to 20 characters
var year=2010;    //-->Enter the count down target date YEAR
var month=12;     //-->Enter the count down target date MONTH
var day=21;       //-->Enter the count down target date DAY
var hour=18;      //-->Enter the count down target date HOUR (24 hour clock)
var minute=38;    //-->Enter the count down target date MINUTE
var tz=-5;        //-->Offset for your timezone in hours from UTC (see http://wwp.greenwichmeantime.com/index.htm to find the timezone offset for your location)

//-->    DO NOT CHANGE THE CODE BELOW!    <--
var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

function countdown(yr,m,d,hr,min){
theyear=yr;themonth=m;theday=d;thehour=hr;theminute=min;
    var today=new Date();
    var todayy=today.getYear();
    if (todayy < 1000) {todayy+=1900;}
    var todaym=today.getMonth();
    var todayd=today.getDate();
    var todayh=today.getHours();
    var todaymin=today.getMinutes();
    var todaysec=today.getSeconds();
    var todaystring1=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec;
    var todaystring=Date.parse(todaystring1)+(tz*1000*60*60);
    var futurestring1=(montharray[m-1]+" "+d+", "+yr+" "+hr+":"+min);
    var futurestring=Date.parse(futurestring1)-(today.getTimezoneOffset()*(1000*60));
    var dd=futurestring-todaystring;
    var dday=Math.floor(dd/(60*60*1000*24)*1);
    var dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1);
    var dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
    var dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);
    if(dday<=0&&dhour<=0&&dmin<=0&&dsec<=0){
        document.getElementById(\'count2\').innerHTML=current;
        document.getElementById(\'count2\').style.display="block";
        document.getElementById(\'count2\').style.width="390px";
        document.getElementById(\'dday\').style.display="none";
        document.getElementById(\'dhour\').style.display="none";
        document.getElementById(\'dmin\').style.display="none";
        document.getElementById(\'dsec\').style.display="none";
        document.getElementById(\'days\').style.display="none";
        document.getElementById(\'hours\').style.display="none";
        document.getElementById(\'minutes\').style.display="none";
        document.getElementById(\'seconds\').style.display="none";
        return;
    }
    else {
        document.getElementById(\'count2\').style.display="none";
        document.getElementById(\'dday\').innerHTML=dday;
        document.getElementById(\'dhour\').innerHTML=dhour;
        document.getElementById(\'dmin\').innerHTML=dmin;
        document.getElementById(\'dsec\').innerHTML=dsec;
        setTimeout("countdown(theyear,themonth,theday,thehour,theminute)",1000);
    }
}

</script>

</head>

<body onload="countdown('.$y.','.$m.','.$d.','.$h.','.$min.');">
<table id="table" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td colspan="8"><div class="numbers" id="count2" style="text-align: center;"></div></td>
    </tr>
    <tr>
        <td align="right"><div class="numbers" id="dday"></div></td>        
        <td align="left"><div class="title" id="days">'.$l[0].'</div></td>
        <td align="right"><div class="numbers" id="dhour"></div></td>
        <td align="left"><div class="title" id="hours">'.$l[1].'</div></td>
        <td align="right"><div class="numbers" id="dmin"></div></td>
        <td align="left"><div class="title" id="minutes">'.$l[2].'</div></td>
        <td align="right"><div class="numbers" id="dsec"></div></td>
        <td align="left"><div class="title" id="seconds">'.$l[3].'</div></td>
    </tr>
</table>

</body>
</html>';
        break;

    case 'style3b':
        echo '<html>
<head>
<style type="text/css">
body {background-color:'.$bg.';} 
.numbers {
    padding: 0px;
    text-align: right; 
    font-family: Arial; 
    font-size: 28px; 
    font-weight: bold;   /* options are normal, bold, bolder, lighter */
    font-style: italic;  /* options are normal or italic */
    color: '.$color.';      /* change color using the hexadecimal color codes for HTML */
    background: #222222;/* change color using the hexadecimal color codes for HTML */
}
.title {/* the styles below will affect the title next to the numbers, i.e., “Days”, “Hours”, etc. */
    padding-right: 5px;
    margin: 12px 0px 0px 0px;
    text-align: left;
    font-family: Arial; 
    font-size: 10px; 
    font-weight: bold;    /* options are normal, bold, bolder, lighter */
    font-style: italic;   /* options are normal or italic */
    color: '.$color.';       /* change color using the hexadecimal color codes for HTML */
    background: #222222;  /* change color using the hexadecimal color codes for HTML */
}
#countdown {
    display: block;
    width: 400px;
    height: 47px; 
    border-style: ridge;    /* options are none, dotted, dashed, solid, double, groove, ridge, inset, outset */
    border-width: 2px;
    border-color: #666666;    /* change color using the hexadecimal color codes for HTML */
    background-color: #222222;    /* change color using the hexadecimal color codes for HTML */
    margin: 0px auto;
    position: relative;    /* leave as "relative" to keep timer centered on your page, or change to "absolute" then change the values of the "top" and "left" properties to position the timer */
    top: 0px;    /* change to position the timer */
    left: 0px;   /* change to position the timer; delete this property and it\'s value to keep timer centered on page */
}
</style>

<script type="text/javascript">

/*
Count down until any date script-
By JavaScript Kit (www.javascriptkit.com)
Over 200+ free scripts here!
Modified by Robert M. Kuhnhenn, D.O. 
on 5/30/2006 to count down to a specific date AND time,
on 10/20/2007 to a new format, and 1/10/2010 to include
time zone offset.
*/

/*  Change the items below to create your countdown target date and announcement once the target date and time are reached.  */
var current="Winter is here!";    //-->enter what you want the script to display when the target date and time are reached, limit to 20 characters
var year=2010;    //-->Enter the count down target date YEAR
var month=12;      //-->Enter the count down target date MONTH
var day=21;       //-->Enter the count down target date DAY
var hour=18;      //-->Enter the count down target date HOUR (24 hour clock)
var minute=38;    //-->Enter the count down target date MINUTE
var tz=-5;        //-->Offset for your timezone in hours from UTC (see http://wwp.greenwichmeantime.com/index.htm to find the timezone offset for your location)

//-->    DO NOT CHANGE THE CODE BELOW!    <--
var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

function countdown(yr,m,d,hr,min){
theyear=yr;themonth=m;theday=d;thehour=hr;theminute=min;
    var today=new Date();
    var todayy=today.getYear();
    if (todayy < 1000) {todayy+=1900;}
    var todaym=today.getMonth();
    var todayd=today.getDate();
    var todayh=today.getHours();
    var todaymin=today.getMinutes();
    var todaysec=today.getSeconds();
    var todaystring1=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec;
    var todaystring=Date.parse(todaystring1)+(tz*1000*60*60);
    var futurestring1=(montharray[m-1]+" "+d+", "+yr+" "+hr+":"+min);
    var futurestring=Date.parse(futurestring1)-(today.getTimezoneOffset()*(1000*60));
    var dd=futurestring-todaystring;
    var dday=Math.floor(dd/(60*60*1000*24)*1);
    var dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1);
    var dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
    var dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);
    if(dday<=0&&dhour<=0&&dmin<=0&&dsec<=0){
        document.getElementById(\'count2\').innerHTML=current;
        document.getElementById(\'count2\').style.display="block";
        document.getElementById(\'count2\').style.width="390px";
        document.getElementById(\'dday\').style.display="none";
        document.getElementById(\'dhour\').style.display="none";
        document.getElementById(\'dmin\').style.display="none";
        document.getElementById(\'dsec\').style.display="none";
        document.getElementById(\'days\').style.display="none";
        document.getElementById(\'hours\').style.display="none";
        document.getElementById(\'minutes\').style.display="none";
        document.getElementById(\'seconds\').style.display="none";
        document.getElementById(\'spacer1\').style.display="none";
        document.getElementById(\'spacer2\').style.display="none";
        return;
    }
    else {
        document.getElementById(\'count2\').style.display="none";
        document.getElementById(\'dday\').innerHTML=dday;
        document.getElementById(\'dhour\').innerHTML=dhour;
        document.getElementById(\'dmin\').innerHTML=dmin;
        document.getElementById(\'dsec\').innerHTML=dsec;
        setTimeout("countdown(theyear,themonth,theday,thehour,theminute)",1000);
    }
}
</script>

</head>

<body onload="countdown('.$y.','.$m.','.$d.','.$h.','.$min.');">
<div id="countdown" >
<table cellspacing="4" cellpadding="0" border="0" align="center">
    <tr>
        <td colspan="8"><div class="numbers" id="count2" style="text-align: center;"></div></td>
    </tr>
    <tr>
        <td align="right"><div class="numbers" id="dday"></div></td>        
        <td align="left"><div class="title" id="days">'.$l[0].'</div></td>
        <td align="right"><div class="numbers" id="dhour"></div></td>
        <td align="left"><div class="title" id="hours">'.$l[1].'</div></td>
        <td align="right"><div class="numbers" id="dmin"></div></td>
        <td align="left"><div class="title" id="minutes">'.$l[2].'</div></td>
        <td align="right"><div class="numbers" id="dsec"></div></td>
        <td align="left"><div class="title" id="seconds">'.$l[3].'</div></td>
    </tr>
</table>
</div>

</body>
</html>';
        break;

    case 'digital':
      echo '<html>
<head>
    <style type="text/css"> 
    body {font-family:Arial;background-color:'.$bg.';}         
    #holder {
        position: relative;
        top: 10px; 
        left: 0px; 
        width: 270px;
        height: 60px;
        border: none;
        margin: 0px auto;
    }
    
    #title, #note {
        color: '.$color.';          /* this determines the color of the DAYS, HRS, MIN, 
                     SEC labels under the timer and the color of the 
                     note that displays after reaching the target date
                     and time; if using the blue digital images,
                     change to #52C6FF; for the red images,
                     change to #FF6666; for the white images,
                     change to #BBBBBB; for the yellow images,
                     change to #FFFF00 */
    }
    
    #note {
        position: relative;
        top: 6px;
        height: 20px;
        width: 260px;
        margin: 0 auto;
        padding: 0px;
        text-align: center; 
        font-family: Arial; 
        font-size: 18px;
        font-weight: bold;    /* options are normal, bold, bolder, lighter */
        font-style: normal;   /* options are normal or italic */
        z-index: 1;
    }
    
    .title {
        border: none;
        padding: 0px;
        margin: 0px;
        width: 30px;
        text-align: center;
        font-family: Arial;
        font-size: 10px;
        font-weight: normal;    /* options are normal, bold, bolder, lighter */
        background-color: transparent; 
    }
    
    #timer {
        position: relative; 
        top: 0px; 
        left: 0px; 
        margin: 5px auto; 
        text-align: center; 
        width: 260px;
        height: 26px;
        border: none;
        padding: 10px 5px 20px 5px; 
        background: #000000;            /* may change to another color, or to 
                           "transparent" */ 
        border-radius: 20px;
        box-shadow: 0 0 10px #000000;   /* change to "none" if you don\'t want a 
                           shadow */
    }
    </style>
    
    <script type="text/javascript">     
    /*
    Count down until any date script-
    By JavaScript Kit (www.javascriptkit.com)
    Over 200+ free scripts here!
    Modified by Robert M. Kuhnhenn, D.O. 
    (www.rmkwebdesign.com/Countdown_Timers/)
    on 5/30/2006 to count down to a specific date AND time,
    on 10/20/2007 to a new format, on 1/10/2010 to include
    time zone offset, and on 7/12/2012 to digital numbers.
    */
    
    /*  
    CHANGE THE ITEMS BELOW TO CREATE YOUR COUNTDOWN TARGET DATE AND ANNOUNCEMENT 
    ONCE THE TARGET DATE AND TIME ARE REACHED.
    */
    var note="Winter has arrived!"; /* -->Enter what you want the script to 
                          display when the target date and time 
                          are reached, limit to 25 characters */
    var year=2012;      /* -->Enter the count down target date YEAR */
    var month=12;       /* -->Enter the count down target date MONTH */
    var day=21;         /* -->Enter the count down target date DAY */
    var hour=6;         /* -->Enter the count down target date HOUR (24 hour 
                      clock) */
    var minute=12;      /* -->Enter the count down target date MINUTE */
    var tz=-5;          /* -->Offset for your timezone in hours from UTC (see 
                      http://wwp.greenwichmeantime.com/index.htm to find 
                      the timezone offset for your location) */
    
    //-->    DO NOT CHANGE THE CODE BELOW!    <--   
    d1 = new Image(); d1.src = "images/digital-numbers/'.$color.'/1.png";
    d2 = new Image(); d2.src = "images/digital-numbers/'.$color.'/2.png";
    d3 = new Image(); d3.src = "images/digital-numbers/'.$color.'/3.png";
    d4 = new Image(); d4.src = "images/digital-numbers/'.$color.'/4.png";
    d5 = new Image(); d5.src = "images/digital-numbers/'.$color.'/5.png";
    d6 = new Image(); d6.src = "images/digital-numbers/'.$color.'/6.png";
    d7 = new Image(); d7.src = "images/digital-numbers/'.$color.'/7.png";
    d8 = new Image(); d8.src = "images/digital-numbers/'.$color.'/8.png";
    d9 = new Image(); d9.src = "images/digital-numbers/'.$color.'/9.png";
    d0 = new Image(); d0.src = "images/digital-numbers/'.$color.'/0.png";
    bkgd = new Image(); bkgd.src = "images/digital-numbers/'.$color.'/bkgd.gif";
    
    var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
    
    function countdown(yr,m,d,hr,min){
        theyear=yr;themonth=m;theday=d;thehour=hr;theminute=min;
        var today=new Date();
        var todayy=today.getYear();
        if (todayy < 1000) {todayy+=1900;}
        var todaym=today.getMonth();
        var todayd=today.getDate();
        var todayh=today.getHours();
        var todaymin=today.getMinutes();
        var todaysec=today.getSeconds();
        var todaystring1=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec;
        var todaystring=Date.parse(todaystring1)+(tz*1000*60*60);
        var futurestring1=(montharray[m-1]+" "+d+", "+yr+" "+hr+":"+min);
        var futurestring=Date.parse(futurestring1)-(today.getTimezoneOffset()*(1000*60));
        var dd=futurestring-todaystring;
        var dday=Math.floor(dd/(60*60*1000*24)*1);
        var dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1);
        var dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
        var dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);
        if(dday<=0&&dhour<=0&&dmin<=0&&dsec<=0){
            document.getElementById(\'note\').innerHTML=note;
            document.getElementById(\'note\').style.display="block";
            document.getElementById(\'countdown\').style.display="none";
            clearTimeout(startTimer);
            return;
        }
        else {
            document.getElementById(\'note\').style.display="none";
            document.getElementById(\'timer\').style.display="block";
            startTimer = setTimeout("countdown(theyear,themonth,theday,thehour,theminute)",500);
        }
        convert(dday,dhour,dmin,dsec);
    }
    
    function convert(d,h,m,s) {
        if (!document.images) return;
        if (d <= 9) {
            document.images.day1.src = bkgd.src;
            document.images.day2.src = bkgd.src;
            document.images.day3.src = eval("d"+d+".src");
        }
        else if (d <= 99) {
            document.images.day1.src = bkgd.src;
            document.images.day2.src = eval("d"+Math.floor(d/10)+".src");
            document.images.day3.src = eval("d"+(d%10)+".src");
        }
        else {
            document.images.day1.src = eval("d"+Math.floor(d/100)+".src");
            var day = d.toString();
            day = day.substr(1,1);
            day = parseInt(day);
            document.images.day2.src = eval("d"+day+".src");
            document.images.day3.src = eval("d"+(d%10)+".src");
        }
        if (h <= 9) {
            document.images.h1.src = d0.src;
            document.images.h2.src = eval("d"+h+".src");
        }
        else {
            document.images.h1.src = eval("d"+Math.floor(h/10)+".src");
            document.images.h2.src = eval("d"+(h%10)+".src");
        }
        if (m <= 9) {
            document.images.m1.src = d0.src;
            document.images.m2.src = eval("d"+m+".src");
        }
        else {
            document.images.m1.src = eval("d"+Math.floor(m/10)+".src");
            document.images.m2.src = eval("d"+(m%10)+".src");
        }
        if (s <= 9) {
            document.images.s1.src = d0.src;
            document.images.s2.src = eval("d"+s+".src");
        }
        else {
            document.images.s1.src = eval("d"+Math.floor(s/10)+".src");
            document.images.s2.src = eval("d"+(s%10)+".src");
        }
    }
    </script>

    <link rel="stylesheet" type="text/css" media="screen,print" href="navbar.css" />
        <script type="text/javascript" src="faq.js"></script>
</head>
<body onload="countdown('.$y.','.$m.','.$d.','.$h.','.$min.')">
    <div id="holder">
        <div id="timer">
            <div id="note"></div>
            <div id="countdown">
                <img height=21 src="images/digital-numbers/'.$color.'/bkgd.gif" width=16 name="day1">
                <img height=21 src="images/digital-numbers/'.$color.'/bkgd.gif" width=16 name="day2">
                <img height=21 src="images/digital-numbers/'.$color.'/bkgd.gif" width=16 name="day3">
                <img height=21 id="colon1" src="images/digital-numbers/'.$color.'/colon.png" width=9 name="d1">
                <img height=21 src="images/digital-numbers/'.$color.'/bkgd.gif" width=16 name="h1">
                <img height=21 src="images/digital-numbers/'.$color.'/bkgd.gif" width=16 name="h2">
                <img height=21 id="colon2" src="images/digital-numbers/'.$color.'/colon.png" width=9 name="g1">
                <img height=21 src="images/digital-numbers/'.$color.'/bkgd.gif" width=16 name="m1">
                <img height=21 src="images/digital-numbers/'.$color.'/bkgd.gif" width=16 name="m2">
                <img height=21 id="colon3" src="images/digital-numbers/'.$color.'/colon.png" width=9 name="j1">
                <img height=21 src="images/digital-numbers/'.$color.'/bkgd.gif" width=16 name="s1">
                <img height=21 src="images/digital-numbers/'.$color.'/bkgd.gif" width=16 name="s2">
                <div id="title">
                    <div class="title" style="position: absolute; top: 36px; left: 42px">'.$l[0].'</div>
                    <div class="title" style="position: absolute; top: 36px; left: 105px">HRS</div>
                    <div class="title" style="position: absolute; top: 36px; left: 156px">MIN</div>
                    <div class="title" style="position: absolute; top: 36px; left: 211px">SEC</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>';
      break;

}
?>