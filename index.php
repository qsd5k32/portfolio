<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Cover Template · Bootstrap</title>
    

    <!-- Bootstrap core CSS -->
    
    <link rel="stylesheet" type="text/css" href="assets/jquery.pagepiling.min.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="assets/jquery.pagepiling.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {

      /*
      * Plugin intialization
      */
        $('#pagepiling').pagepiling({
          anchors: ['page1', 'page2', 'page3', 'page4'],
          sectionsColor: ['white', '#ee005a', '#2C3E50', '#39C'],
          navigation: {
            'position': 'right',
            'tooltips': ['About me', 'Page 2', 'Page 3', 'Page 4']
          },
          afterRender: function(){
            $('#pp-nav').addClass('custom');
          },
          afterLoad: function(anchorLink, index){
            if(index>1){
              $('#pp-nav').removeClass('custom');
            }else{
              $('#pp-nav').addClass('custom');
            }
          }
      });


      /*
        * Internal use of the demo website
        */
        $('#showExamples').click(function(e){
        e.stopPropagation();
        e.preventDefault();
        $('#examplesList').toggle();
      });

      $('html').click(function(){
        $('#examplesList').hide();
      });
      });
    </script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
  </head>
  <body class="text-center">
    
    <div id="pagepiling">
      <div class="section bg-dark text-white" id="section1" style="background : url('https://wallpapercave.com/wp/wp2501097.jpg');">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <div role="main" class="inner cover mb-auto mt-auto">
    <h1 class="cover-heading">Belgacemi Mohamed Seddik</h1>
    <div class="container">
      <p class="lead">
        Full stack web developer
      </p>
    <p class="lead">
      <a href="#page2" class="btn btn-lg btn-secondary">About me</a>
    </p>
    </div>
  </main>

</div>
      </div>
      <div class="section" id="section2">
        <div class="intro">
          <div id="colors"></div>
          <h1>jQuery plugin</h1>
          <p>Pile your sections one over another and access them scrolling or by URL!</p>
          <div id="markup">
            <script src="https://gist.github.com/alvarotrigo/4a87a4b8757d87df8a72.js"></script>
          </div>
        </div>
      </div>
      <div class="section" id="section3">
        <div class="intro">
          <h1>Configurable</h1>
          <p>Plenty of options, methods and callbacks to use.</p>
          <div id="colors2"></div>
          <div id="colors3"></div>
        </div>
      </div>
      <div class="section" id="section4">
        <div class="intro">
          <h1>Compatible</h1>
          <p>Designed to work on tablet and mobile devices.</p>
          <p>Oh! And its compatible with old browsers such as IE 8 or Opera 12!</p>
        </div>
      </div>

  </div>


</body></html>