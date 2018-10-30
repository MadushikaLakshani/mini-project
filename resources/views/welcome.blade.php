<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
         
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: light blue;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 100;
                height: 50vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

    <body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

  
  

  <ul class="navbar-nav mr-auto navbar-dark bg-dark">
        <div class="flex-center position-ref full-height">
        <div class="top-left links">
        <h1 style="color:white">Department of Computing and Information Systems</h1>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                                   
                        <a href="{{ url('/home') }}">CIS</a>
                  
         
                      @else
        
            
        
                   <a href="{{ route('login') }}">Login</a>
                 
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

         <style>
         html{
             background:url('tt.jpg') no-repeat center center fixed;
             background-size:cover;
         }
         </style>

                
            </div>
        </div>
    </body>
</html>
