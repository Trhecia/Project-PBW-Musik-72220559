<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <!-- Aset CSS Datatable-->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>.:Musik 72220559 - @yield('title'):.!</title>
  </head>
  <body>
    <div class="container-fluid">
        <!--Header-->
        <div class="row">
            <div class="col-lg-12 bg-primary py-2">
            <div class="dropdown float-right">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bi bi-person-square"></i> User
              </button>
            
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">{{ Auth::user()->name ?? "" }}</a>
              <a class="dropdown-item" href="/user">Change Password</a>
              <a class="dropdown-item" href="/logout">Logout</a>
            </div>
          </div>
        </div>  <!-- Py mengatur ketebalan, maksimal 4 -->
      </div>

        <div class="row vh-100">
        <div class="col-md-2">
            <div class="row mt-4">
                <div class="col-3">
                  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link {{ ($key == "home") ? "active":"" }}" id="v-pills-home-tab" href="/home">Home</a>
                    <a class="nav-link {{ ($key == "musik") ? "active":"" }}" id="v-pills-musik-tab" href="/musik">Musik</a>
                    <a class="nav-link {{ ($key == "about") ? "active":"" }}"" id="v-pills-about-tab" href="/about">About</a>
                    <a class="nav-link {{ ($key == "faq") ? "active":"" }}"" id="v-pills-faq-tab" href="/faq">FAQ</a>
                  </div>
                </div>
              </div>
          </div>

            <div class="col-md-10 vh-100" style="overflow-y: scroll;"> <!---->
                    <div class="card mt-4">
                        <div class="card-header"></div>
                        <div class="card-body">
                           @yield('artikel')
                        </div>
                    </div>
              </div>
          </div>
    </div>
</div>

        <div class="row">
            <div class="col-md-12 bg-primary py-3 mt-4">
            <center>@Template By Trhecia Priscila Momongan</center>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script>
      new DataTable('#example');
    </script>
  </body>
</html>