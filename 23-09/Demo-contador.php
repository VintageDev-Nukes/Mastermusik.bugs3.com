<?php $domain = $_SERVER['SERVER_NAME']; ?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Demo del Contador creado por Ikillnukes</title>
<style>
	body {font-family:Arial;}
	.button {font-size: 15px;font-weight: bold;border: thin solid #99a4a0;background-color: #8bf9cb;}
</style>
</head>
<body>

<noscript>
	&lt;h2 class="no_script"&gt;
		Por favor permita JavaScript en su navegador!!!
	&lt;/h2&gt;
</noscript>

<center>

<h1 style="color: #5c602c;"> Crear una propia cuenta atrás </h1> 

<!-- Script. -->
<script src="http://www.time55.com/countdown/countdown.js" type="text/javascript"></script>

<script type="text/javascript">
function getText()
{
	// Texten som skall visas om ett datum redan har varit.
	return 'La fecha elegida ya ha pasado... \nPor favor, revise sus elecciones de a\u00F1o, mes, d\u00EDa y hora.';
}

function cambiarFrame(id, style, y, m, d, h, mi, color, bg, lang) {
document.getElementById(id).src = 'http://' + document.domain + '/contador.php?style=' + style + '&y=' + y + '&m=' + m + '&d=' + d + '&h=' + h + "&min=" + mi + '&color=' + color + "&l=" + lang + '&bg=' + bg;
}

function componentToHex(c) {
    var hex = c.toString(16);
    return hex.length == 1 ? "0" + hex : hex;
}

function ChangeColors(r, g, b) {
	document.getElementById('color').style.display = "block";
    document.getElementById('bg').value = componentToHex(r) + componentToHex(g) + componentToHex(b);
    document.getElementById('result').value = "#" + componentToHex(r) + componentToHex(g) + componentToHex(b);
    cambiarFrame('frame', document.getElementById('s').value, document.getElementById('ye').value, document.getElementById('mo').value, document.getElementById('da').value, document.getElementById('ho').value, document.getElementById('mi').value, document.getElementById('c').value, document.getElementById('bg').value, document.getElementById('lang').value);
}

</script>

<!-- Start, formular. -->
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" onkeypress="checkKey(event)" id="myForm" method="post">


<fieldset style="width: 415px; text-align: center; border-color: #d3d9d5;">

<legend class="bold" style="color: #454b49;">
Fecha &amp; Tiempo:
</legend>

<div style="padding: 10px;">

<span class="italic">
Año:</span> 
<select name="y" id="ye" onchange="javascript: checkDate()+cambiarFrame('frame', document.getElementById('s').value, document.getElementById('ye').value, document.getElementById('mo').value, document.getElementById('da').value, document.getElementById('ho').value, document.getElementById('mi').value, document.getElementById('c').value, document.getElementById('bg').value, document.getElementById('lang').value);">
<option value="2013" selected="selected">2013</option>

<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>

<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>

</select>

<span class="italic" style="padding-left: 15px;">
Mes:</span> 
<select name="m" id="mo" onchange="javascript: checkDate()+cambiarFrame('frame', document.getElementById('s').value, document.getElementById('ye').value, document.getElementById('mo').value, document.getElementById('da').value, document.getElementById('ho').value, document.getElementById('mi').value, document.getElementById('c').value, document.getElementById('bg').value, document.getElementById('lang').value);">
<option value="1">Enero</option>
<option value="2">Febrero</option>
<option value="3">Marzo</option>
<option value="4">Abril</option>
<option value="5">Mayo</option>
<option value="6">Junio</option>
<option value="7">Julio</option>
<option value="8">Agosto</option>
<option value="9">Septiembre</option>
<option value="10">Octubre</option>
<option value="11">Noviembre</option>
<option value="12" selected="selected">Diciembre</option>

</select>

<span class="italic" style="padding-left: 15px;">
Día:</span> 
<select name="d" id="da" onchange="javascript: checkDate()+cambiarFrame('frame', document.getElementById('s').value, document.getElementById('ye').value, document.getElementById('mo').value, document.getElementById('da').value, document.getElementById('ho').value, document.getElementById('mi').value, document.getElementById('c').value, document.getElementById('bg').value, document.getElementById('lang').value);">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>

<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>

<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>

<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31" selected="selected">31</option>
</select>

<br>

<br>

<span class="italic">
Hora:</span> 
<select name="h" id="ho" onchange="cambiarFrame('frame', document.getElementById('s').value, document.getElementById('ye').value, document.getElementById('mo').value, document.getElementById('da').value, document.getElementById('ho').value, document.getElementById('mi').value, document.getElementById('c').value, document.getElementById('bg').value, document.getElementById('lang').value);">
<option value="0" selected="selected">00</option>
<option value="1">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>

<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
</select>

<span class="italic" style="padding-left: 10px;">
Minuto:</span> 

<select name="mi" id="mi" onchange="cambiarFrame('frame', document.getElementById('s').value, document.getElementById('ye').value, document.getElementById('mo').value, document.getElementById('da').value, document.getElementById('ho').value, document.getElementById('mi').value, document.getElementById('c').value, document.getElementById('bg').value, document.getElementById('lang').value);">
<option value="0" selected="selected">00</option>
<option value="1">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>

<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>

<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>

<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>

<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>

<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>

<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
</select>


</div>
</fieldset>

<div style="position: relative; top: 7px;">

<br>

<span class="italic">
Idioma/Languaje:</span> 

<select name="lang" id="lang" onchange="cambiarFrame('frame', document.getElementById('s').value, document.getElementById('ye').value, document.getElementById('mo').value, document.getElementById('da').value, document.getElementById('ho').value, document.getElementById('mi').value, document.getElementById('c').value, document.getElementById('bg').value, document.getElementById('lang').value);">
<option value="es" selected="selected">Español</option>
<option value="en">English</option>
</select><br><br>

<span class="italic">
Estilo:</span> 

<select name="s" id="s" onchange="cambiarFrame('frame', document.getElementById('s').value, document.getElementById('ye').value, document.getElementById('mo').value, document.getElementById('da').value, document.getElementById('ho').value, document.getElementById('mi').value, document.getElementById('c').value, document.getElementById('bg').value, document.getElementById('lang').value);">
<option value="style1a" selected="selected">Style1a</option>
<option value="style1b">Style1b</option>
<option value="style1c">Style1c</option>
<option value="style1d">Style1d</option>
<option value="style2a">Style2a</option>
<option value="style2b">Style2b</option>
<option value="style3a">Style3a</option>
<option value="style3b">Style3b</option>
<option value="digital">Digital</option>
</select><br><br>

<span class="italic">
Color de los números:</span> 
<select name="c" id="c" onchange="cambiarFrame('frame', document.getElementById('s').value, document.getElementById('ye').value, document.getElementById('mo').value, document.getElementById('da').value, document.getElementById('ho').value, document.getElementById('mi').value, document.getElementById('c').value, document.getElementById('bg').value, document.getElementById('lang').value);">
<option value="blue">Azul</option>
<option value="red">Rojo</option>
<option value="lime">Verde</option>
<option value="yellow">Amarillo</option>
<option value="white">Blanco</option>
<option value="black" selected="selected">Negro</option>
</select><br><br>

<div id="palette"><center><b>Color del fondo:</b></center>
<table cellpadding="0" cellspacing="1" border="0" bgcolor="#000000"><tbody><tr><td height="11" width="11" bgcolor="#000000"><a href="#" onclick="ChangeColors(0,0,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#000033"><a href="#" onclick="ChangeColors(0,0,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#000066"><a href="#" onclick="ChangeColors(0,0,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#000099"><a href="#" onclick="ChangeColors(0,0,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#0000CC"><a href="#" onclick="ChangeColors(0,0,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#0000FF"><a href="#" onclick="ChangeColors(0,0,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#003300"><a href="#" onclick="ChangeColors(0,51,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#003333"><a href="#" onclick="ChangeColors(0,51,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#003366"><a href="#" onclick="ChangeColors(0,51,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#003399"><a href="#" onclick="ChangeColors(0,51,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#0033CC"><a href="#" onclick="ChangeColors(0,51,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#0033FF"><a href="#" onclick="ChangeColors(0,51,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#006600"><a href="#" onclick="ChangeColors(0,102,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#006633"><a href="#" onclick="ChangeColors(0,102,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#006666"><a href="#" onclick="ChangeColors(0,102,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#006699"><a href="#" onclick="ChangeColors(0,102,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#0066CC"><a href="#" onclick="ChangeColors(0,102,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#0066FF"><a href="#" onclick="ChangeColors(0,102,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#009900"><a href="#" onclick="ChangeColors(0,153,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#009933"><a href="#" onclick="ChangeColors(0,153,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#009966"><a href="#" onclick="ChangeColors(0,153,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#009999"><a href="#" onclick="ChangeColors(0,153,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#0099CC"><a href="#" onclick="ChangeColors(0,153,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#0099FF"><a href="#" onclick="ChangeColors(0,153,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#00CC00"><a href="#" onclick="ChangeColors(0,204,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#00CC33"><a href="#" onclick="ChangeColors(0,204,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#00CC66"><a href="#" onclick="ChangeColors(0,204,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#00CC99"><a href="#" onclick="ChangeColors(0,204,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#00CCCC"><a href="#" onclick="ChangeColors(0,204,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#00CCFF"><a href="#" onclick="ChangeColors(0,204,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#00FF00"><a href="#" onclick="ChangeColors(0,255,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#00FF33"><a href="#" onclick="ChangeColors(0,255,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#00FF66"><a href="#" onclick="ChangeColors(0,255,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#00FF99"><a href="#" onclick="ChangeColors(0,255,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#00FFCC"><a href="#" onclick="ChangeColors(0,255,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#00FFFF"><a href="#" onclick="ChangeColors(0,255,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td></tr><tr><td height="11" width="11" bgcolor="#330000"><a href="#" onclick="ChangeColors(51,0,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#330033"><a href="#" onclick="ChangeColors(51,0,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#330066"><a href="#" onclick="ChangeColors(51,0,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#330099"><a href="#" onclick="ChangeColors(51,0,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#3300CC"><a href="#" onclick="ChangeColors(51,0,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#3300FF"><a href="#" onclick="ChangeColors(51,0,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#333300"><a href="#" onclick="ChangeColors(51,51,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#333333"><a href="#" onclick="ChangeColors(51,51,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#333366"><a href="#" onclick="ChangeColors(51,51,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#333399"><a href="#" onclick="ChangeColors(51,51,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#3333CC"><a href="#" onclick="ChangeColors(51,51,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#3333FF"><a href="#" onclick="ChangeColors(51,51,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#336600"><a href="#" onclick="ChangeColors(51,102,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#336633"><a href="#" onclick="ChangeColors(51,102,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#336666"><a href="#" onclick="ChangeColors(51,102,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#336699"><a href="#" onclick="ChangeColors(51,102,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#3366CC"><a href="#" onclick="ChangeColors(51,102,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#3366FF"><a href="#" onclick="ChangeColors(51,102,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#339900"><a href="#" onclick="ChangeColors(51,153,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#339933"><a href="#" onclick="ChangeColors(51,153,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#339966"><a href="#" onclick="ChangeColors(51,153,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#339999"><a href="#" onclick="ChangeColors(51,153,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#3399CC"><a href="#" onclick="ChangeColors(51,153,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#3399FF"><a href="#" onclick="ChangeColors(51,153,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#33CC00"><a href="#" onclick="ChangeColors(51,204,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#33CC33"><a href="#" onclick="ChangeColors(51,204,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#33CC66"><a href="#" onclick="ChangeColors(51,204,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#33CC99"><a href="#" onclick="ChangeColors(51,204,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#33CCCC"><a href="#" onclick="ChangeColors(51,204,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#33CCFF"><a href="#" onclick="ChangeColors(51,204,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#33FF00"><a href="#" onclick="ChangeColors(51,255,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#33FF33"><a href="#" onclick="ChangeColors(51,255,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#33FF66"><a href="#" onclick="ChangeColors(51,255,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#33FF99"><a href="#" onclick="ChangeColors(51,255,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#33FFCC"><a href="#" onclick="ChangeColors(51,255,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#33FFFF"><a href="#" onclick="ChangeColors(51,255,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td></tr><tr><td height="11" width="11" bgcolor="#660000"><a href="#" onclick="ChangeColors(102,0,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#660033"><a href="#" onclick="ChangeColors(102,0,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#660066"><a href="#" onclick="ChangeColors(102,0,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#660099"><a href="#" onclick="ChangeColors(102,0,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#6600CC"><a href="#" onclick="ChangeColors(102,0,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#6600FF"><a href="#" onclick="ChangeColors(102,0,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#663300"><a href="#" onclick="ChangeColors(102,51,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#663333"><a href="#" onclick="ChangeColors(102,51,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#663366"><a href="#" onclick="ChangeColors(102,51,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#663399"><a href="#" onclick="ChangeColors(102,51,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#6633CC"><a href="#" onclick="ChangeColors(102,51,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#6633FF"><a href="#" onclick="ChangeColors(102,51,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#666600"><a href="#" onclick="ChangeColors(102,102,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#666633"><a href="#" onclick="ChangeColors(102,102,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#666666"><a href="#" onclick="ChangeColors(102,102,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#666699"><a href="#" onclick="ChangeColors(102,102,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#6666CC"><a href="#" onclick="ChangeColors(102,102,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#6666FF"><a href="#" onclick="ChangeColors(102,102,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#669900"><a href="#" onclick="ChangeColors(102,153,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#669933"><a href="#" onclick="ChangeColors(102,153,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#669966"><a href="#" onclick="ChangeColors(102,153,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#669999"><a href="#" onclick="ChangeColors(102,153,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#6699CC"><a href="#" onclick="ChangeColors(102,153,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#6699FF"><a href="#" onclick="ChangeColors(102,153,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#66CC00"><a href="#" onclick="ChangeColors(102,204,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#66CC33"><a href="#" onclick="ChangeColors(102,204,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#66CC66"><a href="#" onclick="ChangeColors(102,204,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#66CC99"><a href="#" onclick="ChangeColors(102,204,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#66CCCC"><a href="#" onclick="ChangeColors(102,204,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#66CCFF"><a href="#" onclick="ChangeColors(102,204,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#66FF00"><a href="#" onclick="ChangeColors(102,255,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#66FF33"><a href="#" onclick="ChangeColors(102,255,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#66FF66"><a href="#" onclick="ChangeColors(102,255,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#66FF99"><a href="#" onclick="ChangeColors(102,255,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#66FFCC"><a href="#" onclick="ChangeColors(102,255,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#66FFFF"><a href="#" onclick="ChangeColors(102,255,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td></tr><tr><td height="11" width="11" bgcolor="#990000"><a href="#" onclick="ChangeColors(153,0,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#990033"><a href="#" onclick="ChangeColors(153,0,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#990066"><a href="#" onclick="ChangeColors(153,0,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#990099"><a href="#" onclick="ChangeColors(153,0,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#9900CC"><a href="#" onclick="ChangeColors(153,0,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#9900FF"><a href="#" onclick="ChangeColors(153,0,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#993300"><a href="#" onclick="ChangeColors(153,51,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#993333"><a href="#" onclick="ChangeColors(153,51,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#993366"><a href="#" onclick="ChangeColors(153,51,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#993399"><a href="#" onclick="ChangeColors(153,51,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#9933CC"><a href="#" onclick="ChangeColors(153,51,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#9933FF"><a href="#" onclick="ChangeColors(153,51,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#996600"><a href="#" onclick="ChangeColors(153,102,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#996633"><a href="#" onclick="ChangeColors(153,102,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#996666"><a href="#" onclick="ChangeColors(153,102,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#996699"><a href="#" onclick="ChangeColors(153,102,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#9966CC"><a href="#" onclick="ChangeColors(153,102,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#9966FF"><a href="#" onclick="ChangeColors(153,102,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#999900"><a href="#" onclick="ChangeColors(153,153,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#999933"><a href="#" onclick="ChangeColors(153,153,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#999966"><a href="#" onclick="ChangeColors(153,153,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#999999"><a href="#" onclick="ChangeColors(153,153,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#9999CC"><a href="#" onclick="ChangeColors(153,153,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#9999FF"><a href="#" onclick="ChangeColors(153,153,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#99CC00"><a href="#" onclick="ChangeColors(153,204,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#99CC33"><a href="#" onclick="ChangeColors(153,204,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#99CC66"><a href="#" onclick="ChangeColors(153,204,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#99CC99"><a href="#" onclick="ChangeColors(153,204,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#99CCCC"><a href="#" onclick="ChangeColors(153,204,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#99CCFF"><a href="#" onclick="ChangeColors(153,204,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#99FF00"><a href="#" onclick="ChangeColors(153,255,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#99FF33"><a href="#" onclick="ChangeColors(153,255,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#99FF66"><a href="#" onclick="ChangeColors(153,255,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#99FF99"><a href="#" onclick="ChangeColors(153,255,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#99FFCC"><a href="#" onclick="ChangeColors(153,255,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#99FFFF"><a href="#" onclick="ChangeColors(153,255,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td></tr><tr><td height="11" width="11" bgcolor="#CC0000"><a href="#" onclick="ChangeColors(204,0,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CC0033"><a href="#" onclick="ChangeColors(204,0,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CC0066"><a href="#" onclick="ChangeColors(204,0,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CC0099"><a href="#" onclick="ChangeColors(204,0,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CC00CC"><a href="#" onclick="ChangeColors(204,0,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CC00FF"><a href="#" onclick="ChangeColors(204,0,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CC3300"><a href="#" onclick="ChangeColors(204,51,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CC3333"><a href="#" onclick="ChangeColors(204,51,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CC3366"><a href="#" onclick="ChangeColors(204,51,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CC3399"><a href="#" onclick="ChangeColors(204,51,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CC33CC"><a href="#" onclick="ChangeColors(204,51,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CC33FF"><a href="#" onclick="ChangeColors(204,51,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CC6600"><a href="#" onclick="ChangeColors(204,102,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CC6633"><a href="#" onclick="ChangeColors(204,102,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CC6666"><a href="#" onclick="ChangeColors(204,102,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CC6699"><a href="#" onclick="ChangeColors(204,102,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CC66CC"><a href="#" onclick="ChangeColors(204,102,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CC66FF"><a href="#" onclick="ChangeColors(204,102,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CC9900"><a href="#" onclick="ChangeColors(204,153,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CC9933"><a href="#" onclick="ChangeColors(204,153,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CC9966"><a href="#" onclick="ChangeColors(204,153,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CC9999"><a href="#" onclick="ChangeColors(204,153,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CC99CC"><a href="#" onclick="ChangeColors(204,153,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CC99FF"><a href="#" onclick="ChangeColors(204,153,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CCCC00"><a href="#" onclick="ChangeColors(204,204,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CCCC33"><a href="#" onclick="ChangeColors(204,204,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CCCC66"><a href="#" onclick="ChangeColors(204,204,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CCCC99"><a href="#" onclick="ChangeColors(204,204,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CCCCCC"><a href="#" onclick="ChangeColors(204,204,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CCCCFF"><a href="#" onclick="ChangeColors(204,204,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CCFF00"><a href="#" onclick="ChangeColors(204,255,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CCFF33"><a href="#" onclick="ChangeColors(204,255,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CCFF66"><a href="#" onclick="ChangeColors(204,255,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CCFF99"><a href="#" onclick="ChangeColors(204,255,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CCFFCC"><a href="#" onclick="ChangeColors(204,255,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#CCFFFF"><a href="#" onclick="ChangeColors(204,255,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td></tr><tr><td height="11" width="11" bgcolor="#FF0000"><a href="#" onclick="ChangeColors(255,0,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FF0033"><a href="#" onclick="ChangeColors(255,0,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FF0066"><a href="#" onclick="ChangeColors(255,0,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FF0099"><a href="#" onclick="ChangeColors(255,0,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FF00CC"><a href="#" onclick="ChangeColors(255,0,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FF00FF"><a href="#" onclick="ChangeColors(255,0,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FF3300"><a href="#" onclick="ChangeColors(255,51,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FF3333"><a href="#" onclick="ChangeColors(255,51,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FF3366"><a href="#" onclick="ChangeColors(255,51,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FF3399"><a href="#" onclick="ChangeColors(255,51,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FF33CC"><a href="#" onclick="ChangeColors(255,51,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FF33FF"><a href="#" onclick="ChangeColors(255,51,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FF6600"><a href="#" onclick="ChangeColors(255,102,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FF6633"><a href="#" onclick="ChangeColors(255,102,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FF6666"><a href="#" onclick="ChangeColors(255,102,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FF6699"><a href="#" onclick="ChangeColors(255,102,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FF66CC"><a href="#" onclick="ChangeColors(255,102,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FF66FF"><a href="#" onclick="ChangeColors(255,102,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FF9900"><a href="#" onclick="ChangeColors(255,153,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FF9933"><a href="#" onclick="ChangeColors(255,153,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FF9966"><a href="#" onclick="ChangeColors(255,153,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FF9999"><a href="#" onclick="ChangeColors(255,153,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FF99CC"><a href="#" onclick="ChangeColors(255,153,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FF99FF"><a href="#" onclick="ChangeColors(255,153,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FFCC00"><a href="#" onclick="ChangeColors(255,204,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FFCC33"><a href="#" onclick="ChangeColors(255,204,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FFCC66"><a href="#" onclick="ChangeColors(255,204,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FFCC99"><a href="#" onclick="ChangeColors(255,204,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FFCCCC"><a href="#" onclick="ChangeColors(255,204,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FFCCFF"><a href="#" onclick="ChangeColors(255,204,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FFFF00"><a href="#" onclick="ChangeColors(255,255,0); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FFFF33"><a href="#" onclick="ChangeColors(255,255,51); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FFFF66"><a href="#" onclick="ChangeColors(255,255,102); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FFFF99"><a href="#" onclick="ChangeColors(255,255,153); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FFFFCC"><a href="#" onclick="ChangeColors(255,255,204); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td><td height="11" width="11" bgcolor="#FFFFFF"><a href="#" onclick="ChangeColors(255,255,255); return false;"><img src="http://www.colorschemer.com/clear.gif" border="0" width="11" height="11"></a></td></tr></tbody></table>
<!--- <select name="bg" id="bg" onchange="cambiarFrame('frame', document.getElementById('s').value, document.getElementById('ye').value, document.getElementById('mo').value, document.getElementById('da').value, document.getElementById('ho').value, document.getElementById('mi').value, document.getElementById('c').value, document.getElementById('bg').value, document.getElementById('lang').value);">
<option value="blue">Azul</option>
<option value="red">Rojo</option>
<option value="lime">Verde</option>
<option value="yellow">Amarillo</option>
<option value="black">Negro</option>
</select><br><br> -->
<div id="color" style="display:none;">El color seleccionado es: <input type="text" size="6" style="text-align:center;" id="result" disabled="disabled" />
<input type="hidden" id="bg" value="fff" /></div></div><br>

<iframe id="frame" src="http://<?php echo $domain; ?>/contador.php?style=style1a&y=2015&m=12&d=31&h=0&min=0&color=000&bg=fff&l=es" frameborder="0" scrolling="0" style="height:120px;width:500px;">Su navegador no es compatible con los iframes...</iframe>

<br>
<span style="padding-left: 42px;">
<input type="submit" class="button" value="Crear una cuenta atrás" onclick="javascript: control_date(getText());">
</span>

</div>

</div>


</form>
<!-- End, formular. -->

<?php if(!empty($_POST)) { ?>

<div id="result">

<hr>

 <?php
    $y = $_POST["y"];
    $m = $_POST["m"];
    $d = $_POST["d"];
    $h = $_POST["h"];
    $mi = $_POST["mi"];
    $s = $_POST["s"];
    $c = $_POST["c"];
    $bg = $_POST["bg"];
    $lang = $_POST["lang"];

	echo '<center><h1 style="color: #5c602c;">La cuenta atrás ha sido creada:</h1>Acabas de crear una cuenta atrás.<br><br><b>Tu enlace es:</b> <a href="http://'.$domain.'/contador.php?style='.$s.'&y='.$y.'&m='.$m.'&d='.$d.'&h='.$h.'&min='.$mi.'&color='.$c.'&bg='.$bg.'&lang='.$lang.'">http://'.$domain.'/contador.php?style='.$s.'&y='.$y.'&m='.$m.'&d='.$d.'&h='.$h.'&min='.$mi.'&color='.$c.'&bg='.$bg.'&lang='.$lang.'</a>';
	echo '<br><br><b>Tu código es:</b> <br><textarea rows="10" cols="75"><iframe id="frame" src="http://'.$domain.'/contador.php?style='.$s.'&y='.$y.'&m='.$m.'&d='.$d.'&h='.$h.'&min='.$mi.'&color='.$c.'&bg='.$bg.'&lang='.$lang.'" frameborder="0" scrolling="0" style="height:100px;width:500px;">Su navegador no es compatible con los iframes...</iframe>
</textarea></center>';

	//echo $y . "/" . $m . "/" . $d . " " . $h . ":" . $mi;

 ?>

</div>

<?php } ?>

</center>

</body>
</html>