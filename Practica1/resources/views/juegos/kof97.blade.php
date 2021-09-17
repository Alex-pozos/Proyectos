<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   <title>Kof 97</title>
</head>

<body style="background:silver">
   <div class="col centrar">
      <img src="{{ asset('img/kof97/kof97logo.gif') }}" alt="" height="200">
      <h1 class="display-4" style="color: #cd7020 ">Como jugar</h1>
      <img src="{{ asset('img/kof97/como-jugar-kof-97.jpg') }}" alt="">
   </div>
   <hr>
   <table class="leyenda">
          <h4 class="centrar">LEYENDA Y MECÁNICAS</h4>
          <tbody><tr>
          <th><img src="{{ asset('img/kof97/street-fighter-light-punch.png') }}" alt="LP"></th>
          <td>Puñetazo Débil (LP) - <img src="{{ asset('img/kof97/neo-geo-a.png') }}" alt="A"> en Neo Geo</td>
          </tr>
          <tr>
          <th><img src="{{ asset('img/kof97/street-fighter-light-kick.png') }}" alt="LK"></th>
          <td>Patada Débil (LK) - <img src="{{ asset('img/kof97/neo-geo-b.png') }}" alt="B"> en Neo Geo</td>
          </tr>
          <tr>
          <th><img src="../../images/command-list/street-fighter-hard-punch.png" alt="HP"></th>
          <td>Puñetazo Fuerte (HP) - <img src="../../images/command-list/neo-geo-c.png" alt="C"> en Neo Geo</td>
          </tr>
          <tr>
          <th><img src="../../images/command-list/street-fighter-hard-kick.png" alt="HK"></th>
          <td>Patada Fuerte (HK) - <img src="../../images/command-list/neo-geo-d.png" alt="D"> en Neo Geo</td>
          </tr>
          <tr>
          <th><span class="moves">Y/Z</span></th>
          <td>Giro 360º cruceta o palanca. Es posible ejecutar el movimiento <span class="info">pulsando 6 direcciones consecutivas</span>. Por ejemplo: <span class="moves">AHDFBE</span>+ botón de ataque, pudiéndose realizar comenzando por la dirección contraria (es decir comenzando por pulsar la dirección izquierda).</td>
          </tr>
          <tr>
          <th><span class="moves">Y/Z</span>x2</th>
          <td>Giro 720º cruceta o palanca. Es posible ejecutar el movimiento <span class="info">pulsando 12 direcciones consecutivas</span>.</td>
          </tr>
          <tr>
          <th>x2, x3 ...</th>
          <td>Realiza el comando o pulsa el botón tantas veces como se indique</td>
          </tr>
          <tr>
          <th>(CARGA)</th>
          <td>Mantén pulsada la dirección 2 segundos o más</td>
          </tr>
          <tr>
          <th>(AIRE)</th>
          <td>Ejecuta el movimiento durante un salto</td>
          </tr>
          <tr>
          <th>(AIRE OK)</th>
          <td>El movimiento también se puede realizar durante un salto.</td>
          </tr>
          <tr>
          <th>Inicia Juggle</th>
          <td>El movimiento lanza al rival por los aires, permitiendo combos.</td>
          </tr>
          <tr>
          <th>~</th>
          <td>Indica que los botones se deben presionar de forma casi simultánea. Por ejemplo, en <img src="../../images/command-list/street-fighter-hard-punch.png" alt="HP">~<img src="../../images/command-list/street-fighter-light-punch.png" alt="LP">, quiere decir que debemos pulsar y mantener pulsado HP y rápidamente pulsar LP.</td>
          </tr>
          <tr>
          <th><span class="neutro">N</span></th>
          <td>Neutro: No pulses ningún botón o dirección</td>
          </tr>
          <tr>                                                                                  
          <th><img src="../../images/command-list/stun.png" alt="Aturdimiento"></th>
          <td>El movimiento aturde al rival</td>
          </tr>
          <tr>                                                                                  
          <th><img src="../../../images/command-list/stop.png" alt="Parálisis"></th>
          <td>El movimiento paraliza temporalmente al rival, dejándolo vulnerable a ataques</td>
          </tr>
          <tr>
          <th><img src="../../images/command-list/neutraliza-proyectiles.png" alt="Neutraliza Proyectiles"></th>
          <td>El movimiento neutraliza o cancela proyectiles (condicionado por el nivel del ataque)</td> 
          </tr>
          <tr>
          <th><img src="../../images/command-list/refleja-proyectiles.png" alt="Refleja Proyectiles"></th>
          <td>El movimiento refleja proyectiles</td>
          </tr>
          <tr>
          <th><img src="../../images/command-list/info.png" alt="Info"></th>
          <td>Información a tener en cuenta al realizar el movimiento (sección final lista de comandos)</td>
          </tr>
          <tr>
          <th><img src="../../images/command-list/advertencia.png" alt="Advertencia"></th>
          <td>Riesgos a tener en cuenta al realizar el movimiento (sección final lista de comandos)</td>
          </tr>
          <tr>
          <th><img src="../../images/command-list/nota.png" alt="Nota"></th>
          <td>Notas interesantes o consejos (sección final lista de comandos)</td>
          </tr>
          <tr>
          <th><img src="../../images/command-list/hyper-armor.png" alt="Hyper armor"></th>
          <td>El movimiento posee propiedades defensivas, ignorando cualquier daño o efecto del golpe. Normalmente es capaz de absorber un único ataque.</td>
          </tr>          
          <tr>
          <th><img src="../../images/command-list/imparable.png" alt="Ataque imparable"></th>
          <td>El movimiento no puede ser bloqueado</td>
          </tr>
          <tr>
          <th>Escapar de lanzamiento</th>
          <td>Pulsa <span class="moves">A</span>+<img src="../../images/command-list/street-fighter-hard-punch.png" alt="HP">/<img src="../../images/command-list/street-fighter-hard-kick.png" alt="HK"> justo cuando el rival inicie la animación de lanzamiento para escapar.</td>
          </tr>
          <tr>
          <th>Guardia aérea</th>
          <td>Pulsa <span class="moves">B</span> durante un salto vertical o hacia atrás para defenderte.</td>
          </tr>
          <tr>
          <th>Brinco Evasivo</th>
          <td>Pulsa <span class="moves">BB</span> para retroceder rápidamente.</td>
          </tr> 
          <tr>
          <th>Burla</th>
          <td>Para burlarte del rival pulsa START. Esta acción puede cancelarse y disminuye la barra de POW del rival.</td>
          </tr> 
          <tr>
          <th>Ataque Fuerte - Strong Attack</th>
          <td>Para ejecutar un ataque fuerte que derriba al rival pulsa <img src="../../../images/command-list/street-fighter-hard-punch.png" alt="HP">+<img src="../../../images/command-list/street-fighter-hard-kick.png" alt="HK">. Es posible su ejecución en el aire.</td>
          </tr>
          <tr>
          <th>Recuperación aturdimiento</th>
          <td>Si tu personaje cae aturdido, pulsa repetidamente los botones de acción y de direccion para que se recupere.</td>
          </tr>
           
          <tr>
          <th><span class="otg">OTG</span></th>
          <td>Siglas de Over The Ground, ataques que golpean a rivales que se encuentran derribados.</td>
          </tr>
          <tr>
          <th>Parada/Parry</th>
          <td>Ataques que interceptan el ataque del rival sin sufrir daño.</td>
          </tr>  
          <tr>
          <th>Guard Crush</th>
          <td>Si bloqueamos muchos ataques o nuestro rival lo hace, es posible que la defensa se rompa, en lo que se conoce como "Guard Crush". Para evitarlo, es necesario evitar el juego excesivamente conservador.</td>
          </tr> 
          <tr>
          <th>Critical Hit</th>
          <td>Determinados golpes puede ser críticos, haciendo un daño extra.</td>
          </tr> 
          <tr>
          <th>Overhead</th>
          <td>Ataques que golpean a rivales que se defienden agachados.</td>
          </tr>
          <tr>
          <th>ASISTENCIA AMIGA</th>
          <td>Cuando tu personaje caiga aturdido o bien sea presa de un lanzamiento multigolpe, pulsa <img src="../../images/command-list/street-fighter-light-punch.png" alt="LP">+<img src="../../images/command-list/street-fighter-light-kick.png" alt="LK">+<img src="../../images/command-list/street-fighter-hard-punch.png" alt="HP">+<img src="../../images/command-list/street-fighter-hard-kick.png" alt="HK"> para que tu compañero de equipo ataque al rival. <span class="info">Nota</span>: El compañero de equipo debe estar visible en la pantalla y no debe haber sido derrotado, además de estar condicionado por su relación con el miembro del equipo.</td>
          </tr> 
          <tr>
          <th>BARRA DE PODER (POW)</th>
          <td>Barra necesaria para ejecutar los superataques. Se rellena a medida que recibimos golpes, aunque es posible recargarla manualmente manteniendo pulsando <img src="../../images/command-list/street-fighter-light-punch.png" alt="LP">+<img src="../../images/command-list/street-fighter-light-kick.png" alt="LK">+<img src="../../images/command-list/street-fighter-hard-punch.png" alt="HP"> en el modo EXTRA. Al rellenarla al máximo aumentamos la fuerza de nuestros golpes y podemos acceder a los SDM (ver abajo).</td>
          </tr> 
          <tr>
          <th>SUPER DESPERATION MOVES (SDM)</th>
          <td>También conocidos como SDM, son los superataques del mundo KOF. Para realizarlos es necesario haber rellenado al máximo la barra POW o bien la salud debe haber descendido aproximadamente al 20%, cuando parpadea en rojo en el modo EXTRA.</td></tr> 
          </tbody></table>
   
</body>

</html>