<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">

        <!-- Scripts -->
        <style>
    body {
  background-color: #fbfbfb;
}

@media (min-width: 991.98px) {
  main {
    padding-left: 240px;
  }
}

/* Sidebar */
.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  padding: 58px 0 0;
  /* Height of navbar */
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
  width: 240px;
  z-index: 600;
}

@media (max-width: 991.98px) {
  .sidebar {
    width: 100%;
  }
}

.sidebar .active {
  border-radius: 5px;
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: 0.5rem;
  overflow-x: hidden;
  overflow-y: auto;
  /* Scrollable contents if viewport is shorter than content. */
}
.margin-left
{
    margin-left:240px;
}
.footer
{
    margin-left:240px; 
}


.note
{
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left, #0072ff, #8811c5);
    color: #fff;
    font-weight: bold;
    line-height: 80px;
    width: 1050px;
}
.form-content
{
    padding: 5%;
    border: 1px solid #ced4da;
    margin-bottom: 2%;
    width: 1050px;
}
.form-control{
    border-radius:1.5rem;
}

</style>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- Bootstrap JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-xxx" crossorigin="anonymous">       
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <main>
        <div class="container">
            <div class="row">
                <!-- Sidebar -->
                
                <nav class="collapse d-lg-block sidebar collapse bg-dark">
                  <div class="position-sticky">
                    <div class="list-group list-group-flush mt-4 mx-3">
                        <a href="" class="list-group-item list-group-item-action py-2 ripple bg-dark text-light font-weight-bolder text-lg">
                        <i class="fas fa-chart-bar mr-2" style="color: #ffffff;"></i><span>Dashboard</span>
                        </a>
                        <a href="{{Route('student.index')}}" class="list-group-item list-group-item-action py-2 ripple bg-dark text-light font-weight-bolder text-lg">
                        <i class="fas fa-users mr-2"></i><span>All Student</span>
                        </a>
                        <a href="{{Route('subject.index')}}" class="list-group-item list-group-item-action py-2 ripple bg-dark text-light font-weight-bolder text-lg">
                        <i class="fas fa-user-plus mr-2"></i><span>All Subject</span>
                        </a>
                        <a href="{{Route('attendance.index')}}" class="list-group-item list-group-item-action py-2 ripple bg-dark text-light font-weight-bolder text-lg">
                        <i class="fas fa-clipboard-list mr-2"></i><span>Take Attendance</span>
                        </a>
                        <hr>
                        <a href="{{route('profile.edit')}}" class="list-group-item list-group-item-action py-2 ripple bg-dark text-light font-weight-bolder text-lg">
                        <i class="fas fa-user-circle mr-2"></i><span>Profile</span>
                        </a>
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                          @csrf
                           <button type="submit" class="list-group-item list-group-item-action py-2 ripple bg-dark text-light font-weight-bolder text-lg">
                            <i class="fas fa-sign-out-alt mr-2"></i><span>Logout</span>
                       </button>
                     </form>
                    </div>
                </div>
            </nav>
              

                <!-- Content -->
                <div class="col-md-9">
                    <!-- Content from other blade files will be inserted here -->
                    @yield('content')
                </div>
            </div>
        </div>
    </main>
        <footer class="text-center text-lg-start bg-light fixed-bottom footer">
        <div class="text-center py-3"style="background-color: rgba(0, 0, 0, 0.2);">
              @2024 copyright
         <a class="text-dark" href="https://mdbootstrap.com/">bereket muniye</a>
           </div>
         </footer>
               
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
</html>
