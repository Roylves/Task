<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digital Agency</title>
    <meta name="description" content="A Digital Agency Website landing page template built by TemplateFlip.com"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
        <link href="css/fontawesome-free-5.13.0-web/css/all.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <link href="css/ekko-lightbox.css" rel="stylesheet">
    <link href="styles/bootstrap.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
    <style type="text/css">
      @media screen and (max-width: 992px) {
      #submit-form{
        position: relative !important;
        margin-top: 30px !important;
        left: 0px !important;
        text-align: center !important;
        transform: none !important;
      }

      #icon2{
        margin-top: 30px !important;
      }
    }
    </style>
  </head>
  <body id="top">
    <header>
      <div class="container pt-4">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent px-0"><a class="text-white navbar-brand" href="#">Digital Agency</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#da-navbarNav" aria-controls="da-navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse text-uppercase" id="da-navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#">Home</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#task">Task</a></li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="da-home-page-text" data-aos="fade-right" data-aos-duration="1000">
        <div class="container">
          <div class="col-md-10 col-sm-12 px-0 mx-0">
            <h2 class="display-3" style="margin-left:-6px;">Welcome</h2>
            <h3 class="h5 mt-3">Please scroll below to see the task</h3>
          </div>
        </div>
      </div>
    </header>

<div class="da-section da-work bg-secondary" id="task">
  <div class="container">
    <div class="h3 pb-3 text-center text-white" data-aos="fade-up">TEST SECTION</div>
    <p class="px-5 pb-5 text-center text-white" data-aos="fade-up"></p>
    <div class="row">
      <div class="col-md-8">
        <div class="card mb-3" data-aos="flip-left">
          <div class="card-body mt-4 mb-1 text-center">
            <form id="test-form">

              <div class="row">
                <div class="col-md-5"><i class="pb-3 text-primary fas fa-briefcase fa-3x"></i>
                    <div class="h4 pb-3">UPPERCASE</div>
                    <input type="text" placeholder="Type something" id="capital_case" name="Capital Case" required="">
                      <br></br>
                    <p id="caps_val"></p>
                </div>

                <div class="col-md-5"><i class="pb-3 text-primary fas fa-sliders-h fa-3x" id="icon2"></i>
                    <div class="h4 pb-3">Alternate-Casing</div>
                    <input type="text" placeholder="Type something" id="alternating_case" name="Alternate Case" required="">
                      <br></br>
                    <p id="alternate_val"></p>
                </div>

                <div class="col-md-2"><button type="submit" class="btn btn-info pull-right" id="submit-form" style="position: absolute; bottom: 0px; left: 50%; transform: translate(-50%,0);">Submit</button>
                </div>
              </div>
                                            
              </form>
          </div>
        </div>
      </div>
      <!-- <div class="col-md-4">
        <div class="card mb-3" data-aos="zoom-in-up">
          <div class="card-body mt-4 mb-1 text-center"><i class="pb-3 text-primary fas fa-sliders-h fa-3x"></i>
            <form id="test-form2">
            <div class="h4 pb-3">Alternate-Casing</div>
                <input type="text" placeholder="Type something" id="alternating_case" name="Alternate Case">
                <button type="submit" class="btn btn-info pull-right" id="submit-form2">Submit</button>
              </form>
          </div>
        </div>
      </div> -->
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-right">
          <div class="card-body mt-4 mb-1 text-center"><i class="pb-3 text-primary fas fa-file-csv fa-3x"></i>
            <div class="h4 pb-3">Download CSV file</div>
                <button type="#" class="btn btn-info pull-right" onclick="location.href='https://docs.google.com/spreadsheets/d/10hmkM76I-u2ICBhzpp1yGkTpEDYqVpg5UitFMnqLWmA/export?format=csv';">Download csv</button>
                
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    <footer class="bg-secondary da-section">
      <div class="container text-white">
        <div class="row">
          <div class="col-md-4">
            <div class="h6 pb-2">Copyright</div>
            <p>&copy; 2020 Footer.</p>
          </div>
        </div>
      </div>
    </footer>
    <div id="scrolltop">
      <button class="btn btn-primary"><span class="icon"><i class="fas fa-angle-up fa-2x"></i></span></button>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/ekko-lightbox.min.js"></script>
    <script src="js/input.js"></script>
    <script src="scripts/main.js"></script>
    <script type="text/javascript">
      $.fn.serializeObject = function()
{
   var o = {};
   var a = this.serializeArray();
   $.each(a, function() {
       if (o[this.name]) {
           if (!o[this.name].push) {
               o[this.name] = [o[this.name]];
           }
           o[this.name].push(this.value || '');
       } else {
           o[this.name] = this.value || '';
       }
   });
   return o;
};
      var $form = $('form#test-form'),
        url = 'https://script.google.com/macros/s/AKfycbyGyze5l9OxHRiuSsP86Cn8D3OJ4RXGg3uCbDg4YdiArZB49Nd1/exec'

    $('#submit-form').on('click', function(e) {
      e.preventDefault();

       i_1 = $("#capital_case").val();
      i_2 = $("#alternating_case").val();

      if(i_1 != "" && i_2 != "" ){

      var jqxhr = $.ajax({
        url: url,
        method: "GET",
        dataType: "json",
        data: $form.serializeObject(),
        success: function () { 
          // do something
        alert("Your data has been saved!");
        document.getElementById("test-form").reset();
      }
      })

    }else{
      alert("Please field all the form before submit!");
    }
    })

    </script>
  </body>
</html>