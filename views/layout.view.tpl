
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>{{page_title}}</title>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" href="public/css/estilo1.css" />
            <script src="public/css/jquery.min.js"></script>
            <script src="public/css/c.js"></script>
            <script src="public/css/foundation.min.css"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js" type="text/javascript" charset="utf-8"></script>
          <script src="public/css/flux.min.js" type="text/javascript" charset="utf-8"></script>
            <script type="text/javascript" charset="utf-8">
                $(function(){
                  if(!flux.browser.supportsTransitions)
                    alert("Flux Slider requires a browser that supports CSS3 transitions");

                  window.f = new flux.slider('#slider', {
                    pagination: true
                  });
                });
              </script>

            {{foreach css_ref}}
            <link rel="stylesheet" href="{{uri}}" />
            <script src="public/css/jquery.min.js"></script>
            <script src="public/css/c.js"></script>
            {{endfor css_ref}}
        </head>
        <body>
          <div class="container">
                <center><img src="public/imgs/logonovus.jpg" alt="New Arrival 1" class="img-responsive" width="280" height="200" ></center>
                <header>
                  <ul class="menu1">
                      <li><a href></a> </li>
                    <li><a href>Bag</a> </li>
                    </ul>
                <nav>
                  <ul>
                    <li><a href="index.php?page=inicio"><span class="primero"><i class="icon icon-house"></i></span><img src="public/imgs/casita.jpg" alt="New Arrival 1" class="img-responsive" height="20" ></a></li>
                    <li><a href="index.php?page=conocenos"><span class="tercero"><i class="icon icon-suitcase"></i></span>Conocenos</a></li>
                    <li><a href="index.php?page=productos"><span class="segundo"><i class="icon icon-tag"></i></span>Productos</a>
                      <ul>
                        <li><a href="index.php?page=estudiantes">Tableros</a></li>
                        <li><a href="index.php?page=publico">Estetoscopios</a></li>
                      </ul>
                    </li>
                    <li><a href="index.php?page=contacto"><span class="cuarto"><i class="icon icon-text"></i></span>Contactanos</a></li>
                  </ul>
                </nav>
              </header>

                  <div class="contenido">
                      {{{page_content}}}
                  </div>
                  <div class="footer">
                      Copyright &copy; Novus S. de RL - 2015
                      | Universidad: <a href="http://www.unicah.edu">UNICAH</a>
                  </div>
                  <script src="public/css/c.js"></script>
              </div>
        </body>
    </html>
