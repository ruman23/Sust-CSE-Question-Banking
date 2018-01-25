   @extends('layouts.app')
 
  @section('content')
   
  <head>
    
  </head> 

  <body>
        <div class="container">
        @for($i=0;$i<$row;$i++)  
        <div class="row">
            <div class="bg">
         @for($j=$i*3;$j<($i+1)*3;$j++)
          @if($j==$size)
          break;
          @endif    
              <a href="/tag/{{$tag[$j]->id}}">                
                <div class="col-md-4">
                    <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
                        <div class="align-center">
                            <h4>{{$tag[$j]->tag_name}}</h4>
                            <p>
                            {{$tag[$j]->content}}  
                          {{--   One of the most popular and old Programming Language. --}}
                            </p>
                            <div class="ficon">
                                <h5>{{$count[$j]}} Questions</h5> 
                            </div>
                        </div>
                    </div>
                </div>
                  </a>
          @endfor        
                  <!--
                                <div class="col-md-4">
                    <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.3s">
                        <div class="align-center">
                            <h4>Users</h4>                  
                            <div class="icon">
                                <i class="fa fa-user fa-3x"></i>
                            </div>
                            <p>
                             List of users.
                            </p>
                            <div class="ficon">
                                <a href="" alt="">Learn more</a> 
                            </div>
                        </div>
                    </div>
                </div>
-->
              </div>
            </div>
            @endfor
          </div>
  </body>
  @endsection