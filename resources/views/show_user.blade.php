   @extends('layouts.app')
 
  @section('content')
   
  <head>
    
  </head> 

  <body>
        <div class="container">
        @foreach($user as $user)
        <a href="/profile/{{$user->id}}" alt="">
            <div class="bg">                
                    <div class="col-md-4">
                    <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.3s">
                        <div class="align-center">
                            <h4>{{$user->name}}</h4>                  
                            <div class="icon">
        <img src="/img/{{$user->avatar}}" id="img" style="width: 150px; height: 150px;">
                            </div>
                            <!--
                            <p>
                             List of users.
                            </p>
                          -->
                        </div>
                    </div>
                </div>
              </div>
            </a>
            @endforeach
          </div>
  </body>
  @endsection