<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ URL::asset('../resources/img/logo-icon.ico') }}">
        <title>Laravel</title>
         <!-- Bootstrap CSS CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="{{ URL::asset('../resources/css/style.css') }}">
        <script href="{{ URL::asset('../resources/js/style.js') }}"></script>
        <!-- Font Awesome JS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="wrapper">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar-header text-center">
                    <img src="{{ URL::asset('../resources/img/logo-427x436.png') }}" class="col-md-3" style="border-radius: 50%">
                    <h3> Company </h3>
                </div>
    
                <ul class="list-unstyled components">
                    <li>
                        <a href="{{ route('welcome') }}">Home</a>
                    </li>
                    <p>ADMINISTRATION</p>
                    <li>
                        <a href="{{ route('user.index') }}">Users</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.index') }}">Questions</a>
                    </li>
                    <li>
                        <a href="{{ route('survey') }}">Survey</a>
                    </li>
                    <p>CONFIGURATION</p>
                    <li>
                        <a href="{{ route('profile') }}">Profile</a>
                    </li>
                    <li>
                        <a href="javascript:document.getElementById('logout').submit()"">Logout</a>
                        <form action="{{ route('logout') }}" id="logout" style="display:none" method="POST">
                            @csrf
                        </form>
                    </li>
                </ul>
    
                <ul class="list-unstyled CTAs">
                    <li>
                        <a href="https://github.com/BlasterZer0" class="article"><img src="https://github.com/fluidicon.png" width="20" height="20" style="float:left">GitHub</a>
                    </li>
                </ul>
            </nav>
    
            <!-- Page Content  -->
            <div id="content">
    
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                            <i class="fas fa-align-left"></i>
                            <span>Toggle Sidebar</span>
                        </button>

                        <div class="d-flex flex-row-reverse">
                            <p style="text-transform:capitalize;">{{ auth()->user()->name }}</p>
                        </div>
                    </div>
                </nav>
    
                <div id="content">
                    @yield('content')
                </div>
                
            </div>
        </div>
    
        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    
        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>
    </body>
</html>