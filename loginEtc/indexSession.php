<?php
session_start();
include 'cn.php';


if(isset($_SESSION['username'])){
    echo "Bienvenido: " . $_SESSION['username'];
  ?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <html>

      <head>
      <title>Tienda en linea de electrónica</title>
      <link rel="stylesheet" href="estilo1.css">
      </head>
      <body>
              <ul>

                      <li><a href="#">Inicio</a></li>
                      <li><a href="#">Categorías</a></li>
                      <li><a href="#">Buscar</a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li> <a href="logout.php"><button>Salir</button></li>
                    </ul>
                    <p>
                        Lo mas vendido
                    </p>
                    <nav>
                          <section class="btn4"></section>
                          <section class="btn" >
                          <a  title="Microcontrolador" href="Micro.html">     <img src="Images/PIC.jpg" weight ="200" height="200" alt="Microcontrolador"> </a>
                                <P> <font color = "withe">Microcontrolador PIC 18F4550 40 pines </font></P>
                          </section>

                          <section class="btn3"></section>
                          <section class="btn2">
                                <a  title="Arduino Uno" href="Arduino.html">  <img src="Images/Auno.jpg" weight ="200" height="200" alt="Arduino uno"> </a>
                                <P> <font color = "withe">Arduino Uno </font></P>
                          </section>

                          <section class="btn3"></section>
                          <section class="btn">
                                      <a  title="Transistor" href="Transistor.html">      <img src="Images/n2222.jpg" weight ="200" height="200" alt="Transistor PNP 2N2222"> </a>
                                <P> <font color = "withe">Transistor PNP 2N 2222 </font></P>
                          </section>

                          <section class="btn3"></section>
                          <section class="btn2">
                                      <a  title="LCD" href="Lcd.html"> <img src="Images/LCD.jpg" weight ="200" height="200" alt="LCD Display 2x16"> </a>
                                <P> <font color = "withe">LCD 2 x 16 Luz verde </font></P>
                          </section>




                    </nav>
                    <nav>
                          <section class="btn4"></section>
                          <section class="btn">
                                      <a  title="Teclado" href="teclado.html"> <img src="Images/teclado.jpg" weight ="200" height="200" alt="Teclado matricial de 4x4"> </a>
                                <P> <font color = "withe">Teclado matricial 4x4 </font></P>
                          </section>

                          <section class="btn3"></section>
                          <section class="btn2">
                          <a  title="Llantas" href="llantas.html">  <img src="Images/Llanta.jpg" weight ="200" height="200" alt="Llantas para carro velocista"> </a>
                                <P> <font color = "withe">Llanta para carro velocista </font></P>
                          </section>

                          <section class="btn3"></section>
                          <section class="btn">
                          <a  title="puenteh" href="puenteh.html"> <img src="Images/puenteh.jpg" weight ="200" height="200" alt="Interfáz puente H"> </a>
                                <P> <font color = "withe">Interfáz puete h </font></P>
                          </section>

                          <section class="btn3"></section>
                          <section class="btn2">
                                <a  title="Bluetooth" href="bluetooth.html"> <img src="Images/blue.jpg" weight ="200" height="200" alt="Bluetooth HC-05, HC-06"> </a>
                                <P> <font color = "withe">Bluetooth HC-05 </font></P>
                          </section>


                    </nav>
                    <nav>
                          <section class="btn4"></section>
                          <section class="btn">
                                      <a  title="servomotor" href="servomotor.html">     <img src="Images/servo.jpg" weight ="200" height="200" alt="Servomotor de 180°"> </a>
                                <P> <font color = "withe">Servomotor 180° </font></P>
                          </section>

                          <section class="btn3"></section>
                          <section class="btn2">
                                <a  title="Relevador" href="relevador.html"> <img src="Images/rele.png" weight ="200" height="200" alt="Relevador 12v"> </a>
                                <P> <font color = "withe">Relevador 12v </font></P>
                          </section>
                          <section class="btn3"></section>
                          <section class="btn">
                                <a  title="Motor Pololu" href="Motorpololu.html"><img src="Images/pololu.jpg" weight ="200" height="200" alt="Motor de 1.6 pololu"> </a>
                                <P> <font color = "withe">Motor Pololu de 1.6 </font></P>
                          </section>
                          <section class="btn3"></section>
                          <section class="btn2">
                                <a  title="resistencias" href="resistencia.html"> <img src="Images/resistencia.jpg" weight ="200" height="200" alt="Resistencias de todas las medidas "> </a>
                                <P> <font color = "withe">Todas las resistencias </font></P>
                          </section>


                    </nav>

                    </body>
                    </html>
<?php
}else{
  echo '<script> window.location="login.php"; </script>';
}
?>
