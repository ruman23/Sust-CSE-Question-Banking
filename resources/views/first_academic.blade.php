@extends('layouts.app')

@section('content')
   
           <div class="container">

        <a href="/profile/{{$user->id}}" alt="">
            <div class="bg">                
                    <div class="col-md-4">
                                         <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
                        <div class="align-center">
                            <h4>Question List</h4>                  
                            <div class="icon">
                                <i class="fa fa-th-list fa-3x"></i>
                            </div>
                            <p>
                             List of all questions
                            </p>
                        </div>
                    </div>
                </div>
              </div>
            </a>
             
                    <a href="/profile/{{$user->id}}" alt="">
            <div class="bg">                
                    <div class="col-md-4">
                                         <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
                        <div class="align-center">
                            <h4>Question List</h4>                  
                            <div class="icon">
                                <i class="fa fa-th-list fa-3x"></i>
                            </div>
                            <p>
                             List of all questions
                            </p>
                        </div>
                    </div>
                </div>
              </div>
            </a>


          </div>

@endsection
