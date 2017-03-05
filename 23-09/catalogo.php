<!--- [CONEXIÓN A LA BASE DE DATOS] -->
<?
require_once(dirname(__FILE__) . '/Settings.php'); //Aquí se saca las strings de conexión
mysql_connect ($db_server, $db_user, $db_passwd) or die ('Error: ' . mysql_error()); //Aquí se conecta
mysql_select_db ($db_name); //Aquí se selecciona la BD
?>

<!--- [Variables] -->

<?php
	$ZippyWidth="500";
	$ZippyButtonColor="#D4C24F";
?>
<!--- END [Variables] -->

<!--- [PRESENTACIÓN] -->

<p><center>Vendo la mayor colección de música del mundo (O casi)</center></p>

<p><center><img src="http://img441.imageshack.us/img441/7052/15092743.png" alt="15092743.png" /></center></p>

<p>Hola,</p>

<p>Mi nombre es <strong>Christian</strong>, tengo 26 años, y llevo toda una vida recopilando música digital, soy una persona muy afortunada al disponer de una colección de música colosálmente extraordinária.<br />
Si usted está leyendo esto significa que hoy es su día de suerte, porque estoy encantado y dispuesto a compartir esta gran colección con todo aquél que quiera y sepa disfrutar de ella por un módico précio.</p>

<p>Como podrá ver a continuación, ofrezco un servicio muy profesional, con total confianza y discrección.</p>

<p>¡¡ Usted puede obtener en 1 día lo que le costaría más de 10 años de esfuerzo y dedicación. !!</p>

<hr>

<p><span style="font-size: 50ptpx;"><strong>Características de esta colección:</strong></span><br />
<ul><li>Actualmente supera los <span style="font-size: 12ptpx;"><strong>55.000</strong></span> temas.</li></ul></p>

<p><ul><li>Está organizada por carpetas, por años y estilos.</li></ul></p>

<p><ul><li>Todas las canciones están correctamente tituladas</li></ul><br />
          (<strong>Artista - Título.mp3</strong>) (Renombrados a "<strong>Word-Case</strong>")</p>

<p><ul><li>Todas las canciones están en formato MP3</li></ul><br />
          (Codificador: <strong>Lame </strong>a <strong>192 Kbps</strong>, Bitrate: <strong>CBR</strong>, Calidad de conversión: "<strong>q=0</strong>", la mejor)</p>

<p><ul><li>Todas las canciones están normalizadas a <strong>95 db</strong> sobre <strong>100 db</strong></li></ul><br />
          (No se ha usado ningún método de ganancia destructiva, se han normalizado usando la herramienta <strong>MP3 Gain</strong>)</p>

<p><ul><li>Ninguna canción contiene <strong>tags IDv2, IDv3</strong>, <strong>carátulas</strong>, u otro tipo de información odiosa.</li></ul></p>

<p><ul><li>No existen archivos duplicados.</li></ul><br />
          (Periódicamente se usan varios limpiadores de archivos duplicados.)</p>

<p><ul><li>No existen archivos dañados y/o con errores de reproducción.</li></ul><br />
          (Periódicamente se usan varios generadores/verificadores del checksum <strong>CRC-32</strong> y del Hash <strong>MD5</strong>, además de la herramienta de correción de errores <strong>MP3Val</strong>.)</p>

<hr>

<p><span style="font-size: 50ptpx;"><strong>Mapa de directorios:</strong></span></p>

<p><span style="font-size: 15ptpx;"><strong><span style="text-decoration: underline;">Organización de carpetas</span>:</strong></span></p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> 50's<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 70's<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 80's<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 90's<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2000-2006<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2007<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2008<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2009<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2010<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2011<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2012</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> B.S.O<br />
      (Descripción del contenido: Bandas sonoras, Orquesta, etc...)</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Clásica<br />
      (Descripción del contenido: Música clásica, etc...)</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Lyrics<br />
      (Descripción del contenido: Letras de canciones de todos los estilos, en formato .txt" y en formato ".lrc" para reproducir automáticamente en su reproductor de audio favorito)</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Videoclips<br />
      (Descripción del contenido: Videoclips y conciertos de todos los estilos, el 95% de los videos están en formato MP4 y calidad HD 720p y 1080p)</p>

<hr>

<p><span style="font-size: 15ptpx;"><strong><span style="text-decoration: underline;">Organización de carpetas por estilos</span>:</strong></span></p>

<p>* (Hay una carpeta de estas en cada carpeta de "año", por ejemplo: "<strong>...\90's\Dance</strong>". "<strong>...\2007\Rock (Inglés)</strong>", "<strong>...\2012\Electro</strong>")</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Dance<br />
      (Descripción del contenido: Dance, Euro-dance, Hard-dance, etc...)</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Electro<br />
      (Descripción del contenido: Electro-house, Fidget-house, House, Minimal, etc...)</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Flamenco<br />
      (Descripción del contenido: Rumba, Flamenco, etc...)</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Folk<br />
      (Descripción del contenido: Folk, Medieval Folk, etc...)</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Happy Hardcore<br />
      (Descripción del contenido: Happy Hardcore, Raver, Oldschool, etc...)</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Hard-Techno-Progressive<br />
      (Descripción del contenido: Hard-Techno, Techno-Progressive, Jump, Jumper, etc...)</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Hard-Trance</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Hardcore<br />
      (Descripción del contenido: Gabber, BreakCore, Industrial, Hardcore, SpeedCore, FrenchCore, etc...)</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Hardstyle<br />
      (Descripción del contenido: Hardstyle, etc...)</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Hip-hop (Inglés)<br />
      (Descripción del contenido: Hip-Hop, Rap, Gangsta, etc...)</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Hip-hop (Español)<br />
      (Descripción del contenido: Hip-Hop, Rap, Gangsta, etc...)</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Jumpstyle<br />
      (Descripción del contenido: Jumpstyle, etc...)</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Mákina<br />
      (Descripción del contenido: Mákina, etc...)</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Newstyle<br />
      (Descripción del contenido: US Hard-House, Newstyle, Pitos, etc...)</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Poky<br />
      (Descripción del contenido: Hard-House, Poky, etc...)</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Pop (Inglés)<br />
      (Descripción del contenido: Pop, Techno-Pop, Electro-Pop, Disco-Pop, Retro-Pop, etc...)</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Pop (Español)<br />
      (Descripción del contenido: Pop, Techno-Pop, Electro-Pop, Disco-Pop, Retro-Pop, etc...)</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Progressive<br />
      (Descripción del contenido: Progressive, Dark-Progressive, etc...)</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Psychodelic<br />
      (Descripción del contenido: Psy-Trance, Full-On Night, Dark-Psy, Goa, etc...)</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Reggaeton<br />
      (Descripción del contenido: Salsa, Reggaeton, etc... )</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Rock (Inglés)<br />
      (Descripción del contenido: Rock, Alternative-Rock, Hard-Rock, Gothic-Rock, Metal, Doom, Death-Metal, etc...)</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Rock (Español)<br />
      (Descripción del contenido: Rock, Alternative-Rock, Hard-Rock, Gothic-Rock, Metal, Doom, Death-Metal, etc...)</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Techno<br />
      (Descripción del contenido: Dubstep, Drumstep, Breakbeat, Drum'n'bass, Electronic, Techno, etc...)</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Trance<br />
      (Descripción del contenido: Trance, Vocal-Trance, Dark-Trance, etc...)</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> UK Hardcore<br />
      (Descripción del contenido: Mákina inglésa, UK Hardcore)</p>

<hr>

<p><span style="font-size: 50ptpx;"><strong>Mapa de canciones:</strong></span></p>

<p><span style="font-size: 15ptpx;"><strong><span style="text-decoration: underline;">Todas las canciones de la colección</span>:</strong></span></p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> TODO > www.pastebin.com/3Wwjt4ew</p>

<p><span style="font-size: 15ptpx;"><strong><span style="text-decoration: underline;">Mapa de canciones por estilos</span>:</strong></span></p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Dance (TODO) > www.pastebin.com/XFDaPepK<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Electro (TODO) > www.pastebin.com/3LwdMVGJ<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Flamenco (TODO) > www.pastebin.com/bXFF9Ut1<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Folk (TODO) > www.pastebin.com/PgLszXfw<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Happy Hardcore (TODO) > www.pastebin.com/1H951Que<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Hard-Techno-Progressive (TODO) > www.pastebin.com/rHgj6hzx<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Hard-Trance (TODO) > www.pastebin.com/y6Q8xY1z<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Hardcore (TODO) > www.pastebin.com/4Rqpw4Gs<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Hardstyle (TODO) > www.pastebin.com/RKUcbAte<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Hip-hop (Inglés) (TODO) > www.pastebin.com/0MgmNSTB<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Hip-hop (Español) (TODO) > www.pastebin.com/VFijKM1X<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Jumpstyle (TODO) > www.pastebin.com/EY7Dq2x3<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Makina (TODO) > www.pastebin.com/1SxTVDLT<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Newstyle (TODO) > www.pastebin.com/5cH4LDjA<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Poky (TODO) > www.pastebin.com/PY35P5hN<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Pop (Inglés) (TODO) > www.pastebin.com/BxM5ss8Y<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Pop (Español) (TODO) > www.pastebin.com/1dfbj8rH<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Progressive (TODO) > www.pastebin.com/eXt0fBPL<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Psychodelic (TODO) > www.pastebin.com/k7F6eDhJ<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Reggaeton (TODO) > www.pastebin.com/EfmGjz8d<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Rock (Inglés) (TODO) > www.pastebin.com/ixxaHAds<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Rock (Español) (TODO) > www.pastebin.com/0932A2Uc<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Techno (TODO) > www.pastebin.com/Az79XDmS<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Trance (TODO) > www.pastebin.com/zjX2f122<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> UK Hardcore (TODO) > www.pastebin.com/9kjPGWYQ</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> B.S.O > www.pastebin.com/AfdcsrLy<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Clásica > www.pastebin.com/XqSMy5Gb</p>

<hr>

<p><span style="font-size: 15ptpx;"><strong><span style="text-decoration: underline;">Mapa de canciones por años</span>:</strong></span></p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> 50's > www.pastebin.com/2UBmKMfG</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> 70's > www.pastebin.com/UAzK3v5K</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> 80's\Flamenco > www.pastebin.com/bsVtcETs<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 80's\Pop (Inglés) > www.pastebin.com/pyaVB8Rt<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 80's\Pop (Español) > www.pastebin.com/4Qjptx48<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 80's\Rock (Inglés) > www.pastebin.com/sPndxkqH<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 80's\Techno > www.pastebin.com/Z4KjNYN1</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> 90's\90's Dance > www.pastebin.com/Cc3JNC88<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 90's\90's Pop (Inglés) > www.pastebin.com/bw7L0yPs<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 90's\90's Rock (Inglés) > www.pastebin.com/4pmR0x0k<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 90's\90's Techno > www.pastebin.com/qGYjaW8i</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2000-2006\Dance > www.pastebin.com/t5FFQpwG<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2000-2006\Electro > www.pastebin.com/D2SiyyYk<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2000-2006\Flamenco > www.pastebin.com/mmTT2d4w<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2000-2006\Folk > www.pastebin.com/HtxaHiHX<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2000-2006\Happy Hardcore > www.pastebin.com/LJ8etKrv<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2000-2006\Hard-Techno-Progressive > www.pastebin.com/nx79scVV<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2000-2006\Hard-Trance > www.pastebin.com/2DgZ0qTB<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2000-2006\Hardcore > www.pastebin.com/dMtP2i88<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2000-2006\Hardstyle > www.pastebin.com/7GrXJFjd<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2000-2006\Hip-hop (Inglés) > www.pastebin.com/3suVZK0y<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2000-2006\Hip-hop (Español) > www.pastebin.com/2RD5D630<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2000-2006\Jumpstyle > www.pastebin.com/drhQ5tYt<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2000-2006\Makina > www.pastebin.com/RixcSCcr<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2000-2006\Newstyle > www.pastebin.com/3r2VeDpp<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2000-2006\Poky > www.pastebin.com/Kg4j3hkK<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2000-2006\Pop (Inglés) > www.pastebin.com/ffQFRfNf<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2000-2006\Pop (Español) > www.pastebin.com/e0b28gNP<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2000-2006\Progressive > www.pastebin.com/Rk7RBtzt<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2000-2006\Psychodelic > www.pastebin.com/hqizt88E<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2000-2006\Reggaeton > www.pastebin.com/CNEvuri5<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2000-2006\Rock (Inglés) > www.pastebin.com/YDuwiA8W<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2000-2006\Rock (Español) > www.pastebin.com/0mAJZxRP<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2000-2006\Techno > www.pastebin.com/sg5dp7Gw<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2000-2006\Trance > www.pastebin.com/5VNZU2Jd<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2000-2006\UK Hardcore > www.pastebin.com/1u0Cf3Hfwww.pastebin.com/</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2007\Dance > www.pastebin.com/epqCWxyv<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2007\Electro > www.pastebin.com/mkCJ57g3<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2007\Flamenco > www.pastebin.com/Eh3XYfk7<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2007\Folk > www.pastebin.com/gZhFe7ur<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2007\Hard-Techno-Progressive > www.pastebin.com/Tdjkm0Yr<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2007\Hard-Trance > www.pastebin.com/mwVz3C7j<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2007\Hardcore > www.pastebin.com/vjugG7ev<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2007\Hardstyle > www.pastebin.com/Nr8QYaRS<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2007\Hip-hop (Inglés) > www.pastebin.com/mKdqzBjm<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2007\Jumpstyle > www.pastebin.com/CsLeUmUX<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2007\Makina > www.pastebin.com/usju8cqm<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2007\Newstyle > www.pastebin.com/ZZe42vfQ<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2007\Poky > www.pastebin.com/qk7kK8ra<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2007\Pop (Inglés) > www.pastebin.com/07rUmx3t<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2007\Pop (Español) > www.pastebin.com/7u4N7UhB<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2007\Rock (Inglés) > www.pastebin.com/SnfyyHgx<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2007\Techno > www.pastebin.com/qxQWFDyN<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2007\UK Hardcore > www.pastebin.com/FL9KMGuK</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2008\Dance > www.pastebin.com/QJcx0J9c<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2008\Electro > www.pastebin.com/kivhYNyG<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2008\Flamenco > www.pastebin.com/RgJbx1N1<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2008\Folk > www.pastebin.com/PwcZBhNm<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2008\Hard-Techno-Progressive > www.pastebin.com/uP3jXD5B<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2008\Hard-Trance > www.pastebin.com/BQ1JviSM<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2008\Hardcore > www.pastebin.com/pXktB66m<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2008\Hardstyle > www.pastebin.com/3k9AW4zF<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2008\Hip-hop (Español) > www.pastebin.com/fQj5VuFZ<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2008\Jumpstyle > www.pastebin.com/b2dJn4Le<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2008\Makina > www.pastebin.com/7LqejYra<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2008\Newstyle > www.pastebin.com/jF8wr8Gw<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2008\Poky > www.pastebin.com/16BiYWGw<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2008\Pop (Inglés) > www.pastebin.com/5CM3rcg9<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2008\Pop (Español) > www.pastebin.com/bH6RjcT3<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2008\Progressive > www.pastebin.com/f3KHHrhR<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2008\Psychodelic > www.pastebin.com/aVy6pYqR<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2008\Reggaeton > www.pastebin.com/QhW0HTMt<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2008\Rock (Inglés) > www.pastebin.com/jPUSFa7k<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2008\Rock (Español) > www.pastebin.com/QQuT9RxK<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2008\Techno > www.pastebin.com/cvf2Jp99<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2008\Trance > www.pastebin.com/AmMzNmzg<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2008\UK Hardcore > www.pastebin.com/hhuyBGf0</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2009\Dance > www.pastebin.com/xCCGDTCb<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2009\Electro > www.pastebin.com/7e51ju8Z<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2009\Flamenco > www.pastebin.com/seL9zQx8<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2009\Folk > www.pastebin.com/HmbdQHjW<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2009\Hard-Techno-Progressive > www.pastebin.com/NwwCtyQq<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2009\Hard-Trance > www.pastebin.com/u9TqjEGd<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2009\Hardcore > www.pastebin.com/wUwPXvUC<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2009\Hardstyle > www.pastebin.com/mgpRqDE3<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2009\Hip-hop (Español) > www.pastebin.com/wASA1vqx<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2009\Jumpstyle > www.pastebin.com/UNGtxwR4<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2009\Makina > www.pastebin.com/XXb9B3PL<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2009\Newstyle > www.pastebin.com/BFaN32k4<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2009\Poky > www.pastebin.com/33fZyf47<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2009\Pop (Inglés) > www.pastebin.com/HYRiHRNL<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2009\Pop (Español) > www.pastebin.com/eT69pW6S<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2009\Progressive > www.pastebin.com/QDqm0D3H<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2009\Psychodelic > www.pastebin.com/PZmEQmgT<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2009\Reggaeton > www.pastebin.com/k3zeSTzc<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2009\Rock (Inglés) > www.pastebin.com/eJ7Cjgwp<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2009\Rock (Español) > www.pastebin.com/nwQKq1D9<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2009\Techno > www.pastebin.com/DznXmEKw<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2009\Trance > www.pastebin.com/9WzdEppm<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2009\UK Hardcore > www.pastebin.com/1QBNbwL3</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2010\Dance > www.pastebin.com/a60aBQrE<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2010\Electro > www.pastebin.com/LiLsWdC3<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2010\Flamenco > www.pastebin.com/he2we5bz<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2010\Folk > www.pastebin.com/stiYxLsP<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2010\Hard-Techno-Progressive > www.pastebin.com/STGNaJqR<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2010\Hard-Trance > www.pastebin.com/he2we5bz<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2010\Hardcore > www.pastebin.com/ZpTqPKTa<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2010\Hardstyle > www.pastebin.com/JcpMjLHk<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2010\Hip-hop (Español) > www.pastebin.com/wdRk4dB4<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2010\Jumpstyle > www.pastebin.com/Lckmxapc<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2010\Makina > www.pastebin.com/GTsG1c4P<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2010\Newstyle > www.pastebin.com/WPtcW7ud<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2010\Poky > www.pastebin.com/DqjdsSY2<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2010\Pop (Inglés) > www.pastebin.com/9wFUzp36<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2010\Pop (Español) > www.pastebin.com/LdnS8Ai6<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2010\Progressive > www.pastebin.com/hFmWYv2L<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2010\Psychodelic > www.pastebin.com/YDNyeBV9<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2010\Reggaeton > www.pastebin.com/1Y3iNpAg<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2010\Rock (Inglés) > www.pastebin.com/79aXuiFt<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2010\Rock (Español) > www.pastebin.com/gA6JiTKe<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2010\Techno > www.pastebin.com/juGpWa47<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2010\Trance > www.pastebin.com/mxmn3GMv<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2010\UK Hardcore > www.pastebin.com/vdiLRhZ3</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2011\Dance > www.pastebin.com/vjG9jXfQ<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2011\Electro > www.pastebin.com/BdrwuBbG<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2011\Flamenco > www.pastebin.com/d1iWUAkU<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2011\Folk > www.pastebin.com/3UBQWeGG<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2011\Hard-Trance > www.pastebin.com/FRKbfp0B<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2011\Hardcore > www.pastebin.com/D7ArFihD<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2011\Hardstyle > www.pastebin.com/nkr15tJB<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2011\Hip-hop (Inglés) > www.pastebin.com/xJNx14NE<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2011\Hip-hop (Español) > www.pastebin.com/MmAAhyUT<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2011\Jumpstyle > www.pastebin.com/PEUF3buh<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2011\Makina > www.pastebin.com/52cmjw3U<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2011\Newstyle > www.pastebin.com/weLx8Rcd<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2011\Poky > www.pastebin.com/iAGqHdUh<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2011\Pop (Inglés) > www.pastebin.com/GKqDr0sf<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2011\Pop (Español) > www.pastebin.com/0d2G1GRg<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2011\Progressive > www.pastebin.com/XWrB4dse<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2011\Psychodelic > www.pastebin.com/k5fpEkBb<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2011\Reggaeton > www.pastebin.com/V7UNUue7<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2011\Rock (Inglés) > www.pastebin.com/NSSYStKD<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2011\Rock (Español) > www.pastebin.com/xt8QcyNE<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2011\Techno > www.pastebin.com/hEtpDZeM<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2011\Trance > www.pastebin.com/6ryac3XU<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2011\UK Hardcore > www.pastebin.com/6wHUafKG</p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2012\Dance > www.pastebin.com/Qu3PPEVy<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2012\Electro > www.pastebin.com/Rpr8GFFx<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2012\Flamenco > www.pastebin.com/35sU1mrB<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2012\Folk > www.pastebin.com/StATv7Mu<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2012\Hard-Trance > www.pastebin.com/XWbnbnm4<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2012\Hardcore > www.pastebin.com/FcPCgkPX<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2012\Hardstyle > www.pastebin.com/G8qrXLtT<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2012\Hip-hop (Inglés) > www.pastebin.com/5tbKw0Ye<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2012\Hip-hop (Español) > www.pastebin.com/jv7hk6Rn<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2012\Jumpstyle > www.pastebin.com/qpnu1FPZ<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2012\Makina > www.pastebin.com/wh5QfRyH<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2012\Newstyle > www.pastebin.com/n7AFkx30<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2012\Pop (Inglés) > www.pastebin.com/bSBrsrzK<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2012\Pop (Español) > www.pastebin.com/d2ErMY20<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2012\Progressive > www.pastebin.com/qvUUcnMH<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2012\Psychodelic > www.pastebin.com/kw2si77i<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2012\Reggaeton > www.pastebin.com/zNaEPVY0<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2012\Rock (Inglés) > www.pastebin.com/AVDRPy5Q<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2012\Rock (Español) > www.pastebin.com/E7U7Rk71<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2012\Techno > www.pastebin.com/xeqHaxGU<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2012\Trance > www.pastebin.com/3vT2Z7q5<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> 2012\UK Hardcore > www.pastebin.com/cuQMesRm</p>

<hr>

<p><span style="font-size: 15ptpx;"><strong><span style="text-decoration: underline;">Mapa de canciones por Artistas</span>:</strong></span></p>

<p>* El siguiente archivo contiene todas las listas de canciones organizadas por artistas.</p>

<p>http://www.mediafire.com/?8ag7c81iwlcx27c</p>

<p>Ejemplo de la organización:</p>

<p><strong><span style="text-decoration: underline;">Rihanna.txt</span></strong><br />
<ul><li>Diamonds</li><br />
<li>Disturbia</li><br />
<li>Don't Stop The Music</li><br />
<li>etc...</li></ul></p>

<hr>

<p><span style="font-size: 50ptpx;"><strong>Mapa de lyrics:</strong></span></p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Lyrics > www.pastebin.com/tsZvKLGc</p>

<hr>

<p><span style="font-size: 50ptpx;"><strong>Mapa de Videoclips:</strong></span></p>

<p><span style="font-size: 15ptpx;"><strong><span style="text-decoration: underline;">Todos los videoclips de la colección</span>:</strong></span></p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> TODO > www.pastebin.com/p04fiPtx</p>

<p><span style="font-size: 15ptpx;"><strong><span style="text-decoration: underline;">Mapa de videoclips por estilos</span>:</strong></span></p>

<p><img src="http://goo.gl/XaL9p" alt="XaL9p" /> Dance > www.pastebin.com/YduM08vh<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Electro > www.pastebin.com/e75nPjJs<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Flamenco > www.pastebin.com/dvTenyS8<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Folk > www.pastebin.com/RAqadngZ<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Hardstyle > www.pastebin.com/KkXtxXTe<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Hip-hop (Inglés) > www.pastebin.com/5wRsStiM<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Hip-hop (Español) > www.pastebin.com/zVpubkH4<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Pop (Inglés) > www.pastebin.com/NhWwi8n5<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Pop (Español) > www.pastebin.com/9Z28Sjez<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Progressive > www.pastebin.com/fv3Tbm4L<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> R&B > www.pastebin.com/NJxmkGHX<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Reggaeton > www.pastebin.com/nKysHP7j<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Rock (Inglés) > www.pastebin.com/PwaQWWd0<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Rock (Español) > www.pastebin.com/deeh6CDp<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Techno > www.pastebin.com/mMBVvsK7<br />
<img src="http://goo.gl/XaL9p" alt="XaL9p" /> Trance > www.pastebin.com/t9g9ZFVJ</p>

<hr>

<p><span style="font-size: 50ptpx;"><strong>Árbol:</strong></span></p>

<p>Este árbol puede ayudarle a entender mejor la estructura de carpetas.</p>

<p><span style="font-family: Lucida Console;"><br />
&#9500;&#9472;&#9472;&#9472;Canciones<br />
&#9474;   &#9500;&#9472;&#9472;&#9472;2000-2006<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Dance<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Electro<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Flamenco<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Folk<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Happy Hardcore<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hard-Techno-Progressive<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hard-Trance<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hardcore<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hardstyle<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hip-hop (Inglés)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hip-hop (Español)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Jumpstyle<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Makina<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Newstyle<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Poky<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Pop (Inglés)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Pop (Español)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Progressive<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Psychodelic<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Reggaeton<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Rock (Inglés)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Rock (Español)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Techno<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Trance<br />
&#9474;   &#9474;   &#9492;&#9472;&#9472;&#9472;UK Hardcore<br />
&#9474;   &#9500;&#9472;&#9472;&#9472;2007<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Dance<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Electro<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Flamenco<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Folk<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hard-Techno-Progressive<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hard-Trance<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hardcore<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hardstyle<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hip-Hop (Inglés)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Jumpstyle<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Makina<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Newstyle<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Poky<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Pop (Inglés)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Pop (Español)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Rock (Inglés)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Techno<br />
&#9474;   &#9474;   &#9492;&#9472;&#9472;&#9472;UK Hardcore<br />
&#9474;   &#9500;&#9472;&#9472;&#9472;2008<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Dance<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Electro<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Flamenco<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Folk<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hard-Techno-Progressive<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hard-Trance<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hardcore<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hardstyle<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hip-hop (Español)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Jumpstyle<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Makina<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Newstyle<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Poky<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Pop (Inglés)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Pop (Español)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Progressive<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Psychodelic<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Reggaeton<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Rock (Inglés)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Rock (Español)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Techno<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Trance<br />
&#9474;   &#9474;   &#9492;&#9472;&#9472;&#9472;UK Hardcore<br />
&#9474;   &#9500;&#9472;&#9472;&#9472;2009<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Dance<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Electro<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Flamenco<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Folk<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hard-Techno-Progressive<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hard-Trance<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hardcore<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hardstyle<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hip-hop (Español)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Jumpstyle<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Makina<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Newstyle<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Poky<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Pop (Inglés)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Pop (Español)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Progressive<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Psychodelic<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Reggaeton<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Rock (Inglés)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Rock (Español)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Techno<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Trance<br />
&#9474;   &#9474;   &#9492;&#9472;&#9472;&#9472;UK Hardcore<br />
&#9474;   &#9500;&#9472;&#9472;&#9472;2010<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Dance<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Electro<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Flamenco<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Folk<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hard-Techno-Progressive<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hard-Trance<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hardcore<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hardstyle<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hip-hop (Español)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Jumpstyle<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Makina<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Newstyle<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Poky<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Pop (Inglés)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Pop (Español)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Progressive<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Psychodelic<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Reggaeton<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Rock (Inglés)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Rock (Español)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Techno<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Trance<br />
&#9474;   &#9474;   &#9492;&#9472;&#9472;&#9472;UK Hardcore<br />
&#9474;   &#9500;&#9472;&#9472;&#9472;2011<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Dance<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Electro<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Flamenco<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Folk<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hard-Trance<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hardcore<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hardstyle<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hip-hop (Inglés)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hip-hop (Español)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Jumpstyle<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Makina<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Newstyle<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Poky<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Pop (Inglés)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Pop (Español)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Progressive<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Psychodelic<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Reggaeton<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Rock (Inglés)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Rock (Español)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Techno<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Trance<br />
&#9474;   &#9474;   &#9492;&#9472;&#9472;&#9472;UK Hardcore<br />
&#9474;   &#9500;&#9472;&#9472;&#9472;2012<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Dance<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Electro<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Flamenco<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Folk<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hard-Trance<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hardcore<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hardstyle<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hip-hop (Inglés)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Hip-hop (Español)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Jumpstyle<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Makina<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Newstyle<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Pop (Inglés)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Pop (Español)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Progressive<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Psychodelic<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Reggaeton<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Rock (Inglés)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Rock (Español)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Techno<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;Trance<br />
&#9474;   &#9474;   &#9492;&#9472;&#9472;&#9472;UK Hardcore<br />
&#9474;   &#9500;&#9472;&#9472;&#9472;50's<br />
&#9474;   &#9500;&#9472;&#9472;&#9472;70's<br />
&#9474;   &#9500;&#9472;&#9472;&#9472;80's<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;80's Flamenco<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;80's Pop (Inglés)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;80's Pop (Español)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;80's Rock (Inglés)<br />
&#9474;   &#9474;   &#9492;&#9472;&#9472;&#9472;80's Techno<br />
&#9474;   &#9500;&#9472;&#9472;&#9472;90's<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;90's Dance<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;90's Pop (Inglés)<br />
&#9474;   &#9474;   &#9500;&#9472;&#9472;&#9472;90's Rock (Inglés)<br />
&#9474;   &#9474;   &#9492;&#9472;&#9472;&#9472;90's Techno<br />
&#9474;   &#9500;&#9472;&#9472;&#9472;B.S.O<br />
&#9474;   &#9492;&#9472;&#9472;&#9472;Clásica<br />
&#9500;&#9472;&#9472;&#9472;Lyrics<br />
&#9492;&#9472;&#9472;&#9472;VideoClips<br />
    &#9500;&#9472;&#9472;&#9472;Dance<br />
    &#9500;&#9472;&#9472;&#9472;Electro<br />
    &#9500;&#9472;&#9472;&#9472;Flamenco<br />
    &#9500;&#9472;&#9472;&#9472;Folk<br />
    &#9500;&#9472;&#9472;&#9472;Hardstyle<br />
    &#9500;&#9472;&#9472;&#9472;Hip-hop (Inglés)<br />
    &#9500;&#9472;&#9472;&#9472;Hip-hop (Español)<br />
    &#9500;&#9472;&#9472;&#9472;Pop (Inglés)<br />
    &#9500;&#9472;&#9472;&#9472;Pop (Español)<br />
    &#9500;&#9472;&#9472;&#9472;Progressive<br />
    &#9500;&#9472;&#9472;&#9472;R&B<br />
    &#9500;&#9472;&#9472;&#9472;Reggaeton<br />
    &#9500;&#9472;&#9472;&#9472;Rock (Inglés)<br />
    &#9500;&#9472;&#9472;&#9472;Rock (Español)<br />
    &#9500;&#9472;&#9472;&#9472;Techno<br />
    &#9492;&#9472;&#9472;&#9472;Trance<br />
</span></p>

<hr><br>

<p><center><img src="http://img441.imageshack.us/img441/7052/15092743.png" alt="15092743.png" /></center></p>

<!--- END [PRESENTACIÓN] -->

<!--- [DEMOS] -->

<?
$query = "SELECT * FROM demo ORDER BY id ASC"; //aquí se lee * (todo) de demo
$result = mysql_query($query) or die(mysql_error()); //Aquí se muestra el resultado que está listo para ser mostrado con un while linea: 19

while($rs=mysql_fetch_array($result))  {

echo '<center style="color:#fff;"><b style="font-size:16px;">► '.$rs['categoria'].' ◄</b><br><br>

<script type="text/javascript">

var zippywww="'.$rs['zippywww'].'";
var zippyfile="'.$rs['zippyid'].'";
var zippytext="#000000";
var zippyback="#e8e8e8";
var zippyplay="'.$ZippyButtonColor.'";
var zippywidth='.$ZippyWidth.';
var zippyauto=false;
var zippyvol=20;
var zippywave = "#000000";
var zippyborder = "#cccccc";

</script>
<script type="text/javascript" src="http://api.zippyshare.com/api/embed_new.js"></script><br><br>

<div class="divspoiler"><b style="font-size:16px;">TrackList:</b>
<a style="color:#fff;text-decoration:none;" href="javascript:void(0);" onclick="if (this.parentNode.nextSibling.childNodes[0].style.display != \'\') { this.parentNode.nextSibling.childNodes[0].style.display = \'\'; this.innerHTML = \'Ocultar &#9650;\'; } else { this.parentNode.nextSibling.childNodes[0].style.display = \'none\';  this.innerHTML = \'Mostrar &#9660;\';}" >Mostrar &#9660;</a>
</div><div><div class="spoiler" style="display: none;">
'.$rs['tracklist'].'
</div></div><br><hr></center><br>';

}
?> 

<!--- Demo Dance -->
<!--- Tracklist Dance -->

<!--- Demo Electro -->
<!--- Tracklist Electro -->

<!--- Demo Flamenco -->
<!--- Tracklist Flamenco -->

<!--- Demo Folk -->
<!--- Tracklist Folk -->

<!--- Demo Happy Hardcore -->
<!--- Tracklist Happy Hardcore -->

<!--- Demo Hardcore -->
<!--- Tracklist Hardcore -->

<!--- Demo Hardstyle -->
<!--- Tracklist Hardstyle -->

<!--- Demo Hard-Techno-Progressive -->
<!--- Tracklist Hard-Techno-Progressive -->

<!--- Demo Hard-Trance -->
<!--- Tracklist Hard-Trance -->

<!--- Demo Hip-Hop (English) -->
<!--- Tracklist Hip-Hop (English) -->

<!--- Demo Hip-Hop (Spanish) -->
<!--- Tracklist Hip-Hop (Spanish) -->

<!--- Demo Jumpstyle -->
<!--- Tracklist Jumpstyle -->

<!--- Demo Makina -->
<!--- Tracklist Makina -->

<!--- Demo Newstyle -->
<!--- Tracklist Newstyle -->

<!--- Demo Poky -->
<!--- Tracklist Poky -->

<!--- Demo Pop (English) -->
<!--- Tracklist Pop (English) -->

<!--- Demo Pop (Spanish) -->
<!--- Tracklist Pop (Spanish) -->

<!--- Demo Progressive -->
<!--- Tracklist Progressive -->

<!--- Demo Psychodelic -->
<!--- Tracklist Psychodelic -->

<!--- Demo Reggaeton -->
<!--- Tracklist Reggaeton -->

<!--- Demo Rock (English) -->
<!--- Tracklist Rock (English) -->

<!--- Demo Rock (Spanish) -->
<!--- Tracklist Rock (Spanish) -->

<!--- Demo Techno -->

<?php
//echo '
//<script type="text/javascript">

//var zippywww="65";
//var zippyfile="65661426";
//var zippytext="#000000";
//var zippyback="#e8e8e8";
//var zippyplay="' . $ZippyButtonColor . '";
//var zippywidth=' . $ZippyWidth. ';
//var zippyauto=false;
//var zippyvol=20;
//var zippywave = "#000000";
//var zippyborder = "#cccccc";

//</script>';

//<!--- Tracklist Techno -->

//<br><br><center style="color:#fff;"><b style="font-size:16px;">TrackList de la Demo de MasterMusik:</b><br><br>

//<b>1.</b> Krewella - Can't Control Myself<br>
//<b>2.</b> Kdrew - Circles<br>
//<b>3.</b> Korn Feat. Skrillex & Kill The Noise - Narcissistic Cannibal<br>
//<b>4.</b> Netsky - Love Has Gone<br>
//<b>5.</b> Example - Midnight Run (Flux Pavilion Remix)<br>
//<b>6.</b> Madeon - Finale (Radio Version)<br>
//<b>7.</b> Feed Me Vs. Knife Party Vs. Skrillex - My Pink Reptile Party (Maluu's Slice'n'diced Mashup)<br>
//<b>8.</b> Krewella & Pegboard Nerds - This Is Not The End<br>
//<b>9.</b> Skrillex - Bangarang<br>
//<b>10.</b> The Prototypes - Suffocate<br>
//<b>11.</b> Ayah Marar - Mind Controller (Cutline Remix)<br>
//<b>12.</b> Skrillex Feat. Krewella - Breathe (Vocal Edit)<br>
//<b>13.</b> Utah Saints Vs. Drumsound & Bassline Smith - What Can You Do For Me (Tantrum Desire Remix)<br>
//<b>14.</b> Nero - Promises (Skrillex & Nero Remix)<br>
//<b>15.</b> 20 Florence & The Machine - Cosmic Love (Seven Lions Remix)</center><br><br> 
?>

<!--- Demo Trance -->

<!--- Demo UK Hardcore -->

<!--- END [DEMOS] -->