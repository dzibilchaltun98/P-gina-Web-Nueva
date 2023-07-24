<?php
$servidor="localhost";
$usuario="root";
$password="";
$baseDeDatos="formulario1";
$enlace=mysqli_connect($servidor, $usuario, $password, $baseDeDatos);

if(!$enlace)
{
    echo"Error en la conexion con el servidor";
}
?>







<!DOCTYPE html><!--Indicamos que es un documento tipo HTML-->
<html lang="es" >


    <head >

        <meta http-equiv="Content-Type" content=text/html;charset=utf-8"/> <!--El metadato indica al servidor que el contenido de la página es código HTML y su codificacion de caracteres es UTF-8--->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1"/> 
        <title>Los Mayas</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel='stylesheet' href='HojaCSS.css'>
        

        <style>
                        

        </style>

    </head>


    <body data-spy="scroll" data-target="#Navegacion">


        <header>

            <nav id="Navegacion" class="navbar navbar-light bg-light px-3 fixed-top">
                <a class="navbar-brand" href="#"> Inicio </a>
                <ul class="nav nav-pills">
                  <li class="nav-item"> <a class="nav-link" href="#Caracteristicas"> Características </a> </li>
                  <li class="nav-item"> <a class="nav-link" href="#Ubicacion"> Ubicación</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="#Juego"> Juego de Pelota </a></li>
                  <li class="nav-item"> <a class="nav-link" href="#Turismo"> Turismo</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#Codigoh"> Código HTML</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#Registro">Registro</a></li>

                </ul>
            </nav>

            <div class="container">
               <h1 align="center">Mundo maya</h1>
             </div>
        
        </header>



        <div id="contenedor" class="container">

            <section class="main row">



                <article id="articulo" class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                   <h2 align="center">La Cultura Maya</h2>
                    <P>Los elementos más destacados de esta cultura son: el uso posicional del cero (representado por una concha), un sistema complejo de escritura, el uso de una fecha era como hito para contabilizar los años, arquitectura con techos abovedados y decoraciones con estuco moldeado, así como la elaboración de estelas conmemorativas. Otros aspectos importantes son la elaboración de códices, bajorrelieves, pintura mural con el uso del “azul maya”, cerámica polícroma y un gran conocimiento de astronomía.</P>

                    <P>Esta cultura contaba con complejos arquitectónicos destinados a la observación de los movimientos de los astros, este interés por la astronomía hizo posible el desarrollo de un sistema calendárico que registró los ciclos del sol, venus y la luna. Este último comprendía el registro de los días transcurridos de cada lunación. Esto se reflejó en las manifestaciones artísticas, el conocimiento de los ciclos agrícolas y la organización de actividades rituales. Parte de este conocimiento se plasmó en los códices, un gran ejemplo de ello es el Códice Maya de México que las recientes investigaciones del INAH demostraron su autenticidad y la antigüedad de su elaboración que lo data entre 1021 y 1152 d.C.
                    </p>

                
                    <div align="center">
                       <img  src="Imagenes\kukulcan.jpg" alt="Templo de Kukulkán" width="700px" border="5">
                    </div>

                    
                    
                    <div data-spy="scroll" data-target="#Navegacion" data-offset="0" align="center">
                        <h2 id="Caracteristicas" class="titulo2">Características de la Cultura Maya</h2>

                        <ul>

                        <li type="square">En lo Social los mayas estaban divididos en 3 Clases (Familia real, Servidores del Estado y Agricultores).</li>
                        <li type="square">La economía se basaba en la agricultura, principalmente de maíz, frijoles y tubérculos. Sus técnicas de irrigación del suelo eran muy avanzadas para la época. Practicaban el comercio de mercancías con pueblos vecinos y en el interior del imperio.</li>
                        <li type="square">Se levantaron pirámides, templos y palacios, demostrando un gran avance arquitectónico. La artesanía también se destacó: hilado de tejidos, uso de tintas en tejidos y ropa.</li>
                        <li type="square">La religión de este pueblo era politeísta, pues creían en varios dioses ligados a la naturaleza.</li>
                        <li type="square">Elaboraron un eficiente y complejo calendario que establecía con exactitud los 365 días del año.</li>
                        <li type="square">Así como los egipcios, usaron una escritura basada en símbolos y dibujos (jeroglíficos). Registraban acontecimientos, fechas, recuento de impuestos y cosechas, guerras y otros datos importantes.</li>
                        <li type="square">Desarrollaron mucho las matemáticas, con destaque para la invención de las cifras decimales y el valor cero.</li>
                        <li type="square">Esta Cultura se basaba económicamente en la agricultura del maíz, producción realizada por campesinos que vivían en los alrededores de las ciudades y estados.</li>
                        <li type="square">La sociedad estaba rígidamente dividida en tres clases a las que el individuo pertenecía desde el nacimiento. Primero, la familia real, incluyendo ocupantes de los principales puestos del gobierno y los comerciantes. A continuación, servidores del Estado, como dirigentes de las ceremonias y responsables de la defensa y cobranza de impuestos, en la capa más baja, los brazaletes y agricultores.</li>
                        </ul>

                        <img  src="Imagenes\SociedadMaya.jpg" alt="Sociedad Maya" width="400px" border="5">
                    </div>

                    

                    <div data-spy="scroll" data-target="#Navegacion" data-offset="0" align="center">

                        <h2 id="Ubicacion"  class="titulo2"><a id="ubicacion">Ubicación</a></h2>
                        <p>Los mayas ocuparon una considerable superficie dentro de Mesoamérica. Existen vestigios arqueológicos en los estados de Yucatán, Campeche, Quintana Roo, Chiapas y Tabasco en México. También en los países centroamericanos de Guatemala y Belice, así como porciones de Honduras y El Salvador.</p>
                        <img  src="Imagenes\Ubicacion.gif" alt="Mapa de la extensión de la civilizacion Maya" width="700px" border="5">
                    

                    </div>


                   

                    <div data-spy="scroll" data-target="#Navegacion" data-offset="0" align="center">
                        <h2 id="Juego" class="titulo2"><a id="Juego de pelota">La importancia del Juego de Pelota</a></h2>
                        <p>El juego de pelota fue un ritual religioso fundamental entre los mayas. En el libro sagrado del Popol Vuh se relata la historia de cómo los gemelos Hunab Kú e Ixbalanqué, después de varios intentos, consiguen vencer a los señores de Xibalbá (inframundo) en el juego de pelota.</p>
                   
                       <video width="500" controls src="Videos\Juego de pelota.mp4"></video>
                    </div>

                   


                    <div data-spy="scroll" data-target="#Navegacion" data-offset="0" align="center">
                        <h2 id="Turismo" class="titulo2"><a id="Turismo">Turismo en la Riviera Maya</a></h2>
                         <p>La Riviera Maya es una zona turística de México situada a lo largo del Mar Caribe en la
                        Península de Yucatán en el Estado de Quintana Roo. Geográficamente se extiende a lo
                        largo del litoral desde la localidad de Puerto Morelos, al norte, hasta la localidad de
                        Punta Allen al sur, unos 130 km de longitud.</p>
                         

                          <p>
                        Las localidades que componen el destino turístico Riviera Maya son: Puerto Morelos,
                        Akumal, Playa del Carmen, la Reserva de la Biósfera Sian Ka'an que en su interior se
                        encuentran las comunidades de Boca Paila y Punta Allen, Tulum, Xel-Há, Xcaret y
                        Cobá.
                        </p>

                        
                        <img  src="Imagenes\Riviera Maya.png" alt="Mapa de la Riviera Maya" width="400px" border="5">
                        

                         <div class="espacioparrafo">
                        <p>Su suma de yacimientos arqueológicos mayas, sus paradisíacas playas de arena blanca, su fondo marino deleite de los buceadores o su suculenta gastronomía invitan a visitarla sin prisas, olvidándonos de cuando debemos volver de unas vacaciones relajadas.</p>
                         </div>

                    </div>

                    <h3 align="center" style="color:blue;"><a id="Playas">Playas</a></h3>
                    <h4>Playa Maroma</h4>
                    <p>
                        Una de las playas más bellas de Riviera Maya es Playa Maroma, ubicada en la localidad de Punta Maroma, entre Puerto Morelos y Playa del Carmen. Esta playa es privada, pero se puede adquirir el day pass para disfrutar de un día completo en ella, una experiencia de la que no se arrepentirá, ya que es una de las más hermosas de la zona. Además, el day pass incluye la comida, bebidas y también algunas actividades acuáticas.
                    </p>

                    <div align="center">
                        <img  src="Imagenes\Playa Maroma.jpg" alt="Playa Maroma" width="800px" height="450" border="1">
                    </div>
                    
                    <div class="espacioparrafo">
                     <h4>Akumal</h4>
                      <p>Situada entre Playa del Carmen y Tulum, fue una de las primeras playas y zonas turísticas del Caribe mexicano. </p>
                      <p>Muy popular entre los locales, este lugar también es conocido por el nombre de playa de las tortugas, ya que aquí habitan y es el lugar de desove de varias especies de tortugas. Por lo que, con un poco de suerte, se encontrará nadando a estos majestuosos animales.</p>
                    </div>

                    <div align="center">
                        <img  src="Imagenes\Akumal.jpg" alt="Akumal" width="800px" height="420" border="1">
                    </div>

                    <div class="espacioparrafo">
                        <h4>Playa Paraiso</h4>
                         <p>Otra de las playas más hermosas, no solo de Riviera Maya, sino de todo el mundo, es playa Paraíso, en Tulum. Probablemente la haya visto en numerosas ocasiones, ya que se encuentra bajo las famosas ruinas mayas de Tulum, sin duda, una de las razones que la hacen tan especial. Igualmente, la calidad de sus aguas y su arena blanca la convierten, como bien dice su nombre, en un auténtico paraíso en la tierra. Disfruta de la vida, tomando el sol y deja la tarde para descubrir todo lo que ver en Tulum. </p>
                         
                    </div>

                    <div align="center">
                        <img  src="Imagenes\Playa Paraiso.jpg" alt="Playa Paraiso" width="800px" height="420" border="1">
                    </div>

                    <div  data-spy="scroll" data-target="#Navegacion" data-offset="0" >
                      
                      <h2 id="Codigoh"  class="titulo2"><a id="codigo">Código HTML</a></h2>

                      <p>En esta sección explicaremos el código más básico utilizado en una página web: </p>
                      <p> El elemento <code>&lt;!DOCTYPE html&gt;</code> indica que es un documento tipo HTML.</p>
                      <p> El elemento <code>&lt;html lang="es"&gt;</code> indica que comienza el código de HTML y agrega el atributo lang para indicar el lenguaje español.</p>
                      <p> El elemento <code>&lt;head&gt;</code> provee información general (metadatos).</p>
                      <p> El elemento <code>&lt;title&gt;</code> indica el título del documento.</p>
                      <p> El elemento <code>&lt;body&gt;</code> representa el contenido de un documento HTML.</p>
                      <p><strong>La estructura general sería la siguiente:</strong></p>
                      <pre>
                         &lt;!DOCTYPE html&gt; 
                         &lt;html lang="es"&gt;
  
                              &lt;head&gt;
  
                                   &lt;title&gt; &lt;/title&gt;
  
                              &lt;/head&gt;
  
                              &lt;body&gt;
                         
                              &lt;/body&gt;
  
                         &lt;/html&gt;
                      </pre>
                    </div>


                   


                    <header>
                        <div data-spy="scroll" data-target="#Navegacion" data-offset="0" class="container text-center">
                            <h1 id="Registro" class="display-6">Déjanos tus datos de contacto</h1>
                        </div>
             
                     </header>
             
             
             
                     <div class="color2 container">
                         <br>
                         <form method="POST" role="form">
                             <div class="form-group">
                                 <label for="nombre">Nombre:</label>
                                 <input class="form-control" id="nombre" type="text" name="nombre" required>
                             </div>
             
                             <div class="form-group">
                                 <label for="email">Correo electrónico:</label>
                                 <input class="form-control" id="email" type="email" name="email" required>
                             </div>
             
                             <div class="form-group">
                                 <label for="teléfono">Teléfono:</label>
                                 <input class="form-control" id="teléfono" type="tel" name="teléfono" required>
                             </div>
                             <input type="submit" class=" espacioparrafo btn btn-primary btn-lg activate"  Enviar name="registro" value="registro">
                             <br>
             
                         </form>
             
                    </div>

                     
             









                    

                </article>



                <aside id="aside" class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                
                        <h5 align="center">Índice</h5>

                        <div class="botones" align="center">
                    
                            <a href="#ubicacion"><button type="button" class="btn btn-outline-primary btn-sm">Ubicación</button></a>
                        </div>

                        <div class="botones" align="center">
                    
                            <a href="#Juego de pelota"><button type="button" class="btn btn-outline-secondary btn-sm">Juego de pelota</button></a>
                        </div>

                        <div class="botones" align="center">
                    
                            <a href="#Turismo"><button type="button" class="btn btn-outline-success btn-sm">Turismo</button></a>
                        </div>

                        <div class="botones" align="center">
                    
                            <a href="#Playas"><button type="button" class="btn btn-outline-danger btn-sm">Playas</button></a>
                        </div>

                        <div class="botones" align="center">
                    
                            <a href="#codigo"><button type="button" class="btn btn-outline-warning btn-sm">Código HTML</button></a>
                        </div>



                        <div align="center" class="espacioparrafo">
                            <h5>Zonas arqueológicas mayas</h5>
                            <img  src="Imagenes\Calakmul.jpg" alt="Zona arqueológica de Calakmul" width="300px" height="180" border="1">
                            <p class="espacioparrafo"><mark>Calakmul</mark> es un yacimiento arqueológico prehispánico maya, situado en el sureste del estado mexicano de Campeche, en la región del Petén, en el núcleo de la reserva de la biosfera de Calakmul, de más de 700 000 ha, municipio del mismo nombre y a pocos kilómetros de la frontera con Guatemala.</p>
                        </div>

                        <div align="center" class="espacioparrafo">
                            <img  src="Imagenes\Dzibilchaltun.jpg" alt="Zona arqueológica de Dzibilchaltún" width="300px" height="180" border="1">
                            <h6>"Lugar donde hay escritura en las piedras"</h6>
                            <p class="espacioparrafo">El fenómeno arqueo-astronómico del equinoccio ocurre en <ins>Dzibilchaltún</ins>, los días 21 de marzo y 21 de septiembre, al amanecer, cuando la puerta del Templo de las Siete Muñecas se ilumina con el resplandor del Sol que aparece en el horizonte y, en un momento dado, el disco celeste queda al centro de la puerta y crea un espectáculo de luz y sombra en la fachada poniente.</p>
                            <p>Estos días, se puede observar la increíble precisión de la astronomía maya integrada a su arquitectura. Los mayas utilizaban el sol como base para la planeación de sus vidas debido a que dependían de la agricultura. Con el equinoccio de primavera iniciaban la siembra y con el equinoccio de otoño la cosecha.</p>
                        </div>

                        <div align="center" class="espacioparrafo">
                            <img  src="Imagenes\Uxmal.jpg" alt="Uxmal" width="300px" height="180" border="1">
                            <p class="espacioparrafo"><del>Uxmal u Óoxmáal</del> /óːʃmáːl/ es una antigua ciudad maya del periodo clásico. Está localizado en el municipio de Santa Elena en el estado de Yucatán, México.</p> 
                            <p>En la actualidad es uno de los más importantes yacimientos arqueológicos de la cultura maya, junto con los de Chichén Itzá y Tikal</p>

                        </div >

                        <div align="center" class="espacioparrafo">
                            <img  src="Imagenes\Palenque.jpg" alt="Palenque" width="300px" height="180" border="1">
                            <p class="espacioparrafo"><ins>Palenque</ins> (en maya: Bàak') es un yacimiento arqueológico que, junto a Chichén Itzá y Tikal, es uno de los tres pueblos más importantes de la cultura maya que se encuentra enclavado en el centro de una selva tropical en lo que hoy es el municipio de Palenque, ubicado al noreste del Estado Mexicano de Chiapas.</p>
                        </div>

                        <div align="center" class="espacioparrafo">
                            <h5>Causas de la desaparición de los Mayas</h5>
                            <ol class="espacioparrafo" align="justify">

                                <li>Sequías (escasez de agua).</li>
                                <li>Menor actividad económica.</li>
                                <li>Guerras.</li>
                                <li>Desintegración familiar.</li>

                            </ol>
                        </div>

                        <div align="center" class="epacioparrafo">
                            <h5>Palabras Maya</h5>
                         <table   border="3" cellpadding="5" bgcolor="mistyrose";>

                            <caption>Palabras básicas</caption>
                    
                    
                            <thead >
                                <tr>
                                    <th>Maya</th>
                                    <th>Español</th>
                                    
                                </tr>
                            
                            </thead>
                    
                    
                            <tbody align="center">
                                <tr>
                                    <td>Ajal</td>
                                    <td>Despertar</td>
                                    
                                </tr>
                    
                                <tr>
                                    <td>Babal</td>
                                    <td>Revolcar</td>
                                    
                                </tr>
                    
                                <tr>
                                    <td>Ejen</td>
                                    <td>De acuerdo</td>
                                    
                                </tr>
                                <tr>
                                    <td>Éemel</td>
                                    <td>Bajar</td>
                                </tr>

                                <tr>
                                    <td>Sapat’</td>
                                    <td>Insipido</td>
                                </tr>
                            </tbody>
                    
                    
                            <tfoot>
                    
                            </tfoot>
                    
                           </table>

                        </div>
                        


    
                    
    
                </aside>


                <footer>
                    <div class="container">
                        <address align="center">
                            <strong>UPIITA</strong><br>
                            Avenida Instituto Politécnico Nacional No. 2580, Col Barrio la Laguna Ticomán, Gustavo A. Madero, Ciudad de México, C.P. 07340.<br>
                            Teléfono:57296000, extensión 56806
                        </address>
                    </div>
                </footer>

            </section>

            

        </div>


            
        

        <div class="containerb">
            <input type="checkbox" name="" id="btn-mas">
            <div class="redes">
                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                <a href="https://twitter.com/?lang=es"><i class="fab fa-twitter"></i></a>
                <a href="https://www.pinterest.com.mx/"><i class="fab fa-pinterest-p"></i></a>
            </div>
            <div class="btn-mas">
                <label for="btn-mas">
                    <div class="icon">
                        <i class="fas fa-plus"></i>
                    </div>
                </label>
            </div>
        </div>

     


        

        <script src=”https://code.jquery.com/jquery-3.4.1.slim.min.js” integrity=”sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n” crossorigin=”anonymous”></script>
        <script src=”https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js” integrity=”sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo” crossorigin=”anonymous”></script>
        <script src=”https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js” integrity=”sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6″ crossorigin=”anonymous”></script>
    
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


        <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    </body>





</html>




<?php
if(isset($_POST['registro']))
{
    $nombre=$_POST["nombre"];
    $email=$_POST["email"];
    $teléfono=$_POST["teléfono"];

    $insertardatos="INSERT INTO base1 VALUES('$nombre', '$email', '$teléfono')";
    $ejecutar=mysqli_query($enlace, $insertardatos);

    if(!$ejecutar){echo "Error en sql";}
}

?>