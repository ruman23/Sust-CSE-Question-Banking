   @extends('layouts.app')
 
  @section('content')
   
  <head>
    <style type="text/css">
      .align-center
      {
        background-color: #e6e6e6;
      }
    </style>
  </head> 

  <body>
        <div class="container">
        
        <a href="/academic_archive" alt="">
            <div class="bg">                
                    <div class="col-md-4" style="margin-left: 150px">
                    <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.3s">
                        <div class="align-center">
                            <h4>Add in Archieve</h4>                  

                    </div>
                </div>
              </div>
            </a>

                <a href="/academic_archive_album_view" alt="">
            <div class="bg">                
                    <div class="col-md-4">
                    <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.3s">
                        <div class="align-center">
                            <h4>Show Archieve</h4>                  

                    </div>
                </div>
              </div>
            </a>


          </div>
  </body>
  @endsection