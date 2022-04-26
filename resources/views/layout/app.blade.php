<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Toggle sidebar -->

     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">


    <!-- Data table plugin-->
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>

    <link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
  </head>
  <body>
  @include('layout/navbar')
    <div id="wrapper">
        @include('layout/sidebar')
        <main id="page-wrapper6">
            <div class="container-fluid">
                <div class="container">
                    @yield('content')
                </div>


            </div>

        </main>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
    <script>
    $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

    </script>
    <style>
        .slidebar-nav {
            left: 250px;
            list-style: none;
            height: 100%;
            margin: 0;
            margin-left: -250px;
            overflow-y: auto;
            padding: 0;
            position: fixed;
            top: 50px;
            width: 0;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }

        #wrapper.toggled .slidebar-nav {
            width: 250px;
        }

        #wrapper {
            padding-left: 0;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }

        #wrapper.toggled {
            padding-left: 250px;
        }

        #page-wrapper6 {
            width: 100%;
            position: absolute;

            top: 50px;
        }

        #wrapper.toggled #page-wrapper6 {
            position: absolute;
            margin-right: -250px;
        }

        @media(min-width:768px) {
            #wrapper {
                padding-left: 200px;
            }

            #wrapper.toggled {
                padding-left: 0;
            }

            #page-wrapper6 {
                padding: 20px;
                position: relative;
            }

            #wrapper.toggled #page-wrapper6 {
                position: relative;
                margin-right: 0;
            }

            .slidebar-nav {
                width: 250px;
                
            }

            #wrapper.toggled .slidebar-nav {
                width: 0;
            }
            #slidebar {
            background-color: #1a1a1a;
            width: 220px;
        }
        }


        .sidebar-container {
            position: sticky;
            width: 220px;
            height: 90%;
            left: 0;
            overflow-x: hidden;
            overflow-y: auto;
            background: #1a1a1a;
            color: #fff;
        }

      

        .sidebar-navigation {
            padding: 0;
            margin: 0;
            list-style-type: none;
            position: relative;
        }

        .sidebar-navigation li {
            background-color: transparent;
            position: relative;
            display: inline-block;
            width: 100%;
            line-height: 20px;
        }

        .sidebar-navigation li a {
            padding: 10px 15px 10px 30px;
            display: block;
            color: #fff;
        }

        .sidebar-navigation li .fa {
            margin-right: 10px;
        }

        .sidebar-navigation li a:active,
        .sidebar-navigation li a:hover,
        .sidebar-navigation li a:focus {
            text-decoration: none;
            outline: none;
        }

        .sidebar-navigation li::before {
            background-color: #2574A9;
            position: absolute;
            content: '';
            height: 100%;
            left: 0;
            top: 0;

            width: 3px;
            z-index: -1;
        }

        .sidebar-navigation li:hover::before {
            width: 100%;
        }

        .sidebar-navigation .header {
            font-size: 12px;
            text-transform: uppercase;
            background-color: #151515;
            padding: 10px 15px 10px 30px;
        }

        .sidebar-navigation .header::before {
            background-color: transparent;
        }
        .sidebar-logo {
  padding: 10px 15px 10px 30px;
  font-size: 20px;
  background-color: #2574A9;
}

    </style>
  </body>
</html>