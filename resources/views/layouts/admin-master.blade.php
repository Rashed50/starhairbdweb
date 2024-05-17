<!DOCTYPE html>
<html lang="en">
  <head>

    @php 
        $comConObj = new App\Http\Controllers\admin\CompanyProfileController();
        $comProfile = $comConObj->findProfileInfo();
    @endphp
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Panel</title>

    <!-- vendor css -->
    <link href="{{ asset('contents/admin') }}/assets/css/all.min.css" rel="stylesheet">

    <link href="{{ asset('contents/admin') }}/assets/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="{{ asset('contents/admin') }}/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{ asset('contents/admin') }}/assets/lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="{{ asset('contents/admin') }}/assets/lib/toast/toast.css" rel="stylesheet">
    <!-- dataTables css -->
    <link href="{{ asset('contents/admin') }}/assets/lib/datatables/jquery.dataTables.css" rel="stylesheet">
    <link href="{{ asset('contents/admin') }}/assets/lib/select2/css/select2.min.css" rel="stylesheet">
    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/css/starlight.css">
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/css/style.css">
    <script src="{{ asset('contents/admin') }}/assets/lib/jquery/jquery.js"></script>
</head>
  <body>
    <!-- left panel Include -->
    @include('layouts.includes.backend.left_panel')
    <!-- head panel Include -->
    @include('layouts.includes.backend.head_panel')
    <!-- right panel Include -->
    @include('layouts.includes.backend.right_panel')
    <!-- main file -->
    <div class="sl-mainpanel">
      @yield('content')
    </div>
    <!-- footer part -->
    <!-- <footer class="sl-footer-custom">
      <div class="footer-left">
        <div class="mg-b-2">Copyright &copy; 2021. 3iengineers.com</div>
      </div>
    </footer> -->
    <!-- script file -->

    <script src="{{ asset('contents/admin') }}/assets/lib/popper.js/popper.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/lib/bootstrap/bootstrap.js"></script>

    <script src="{{ asset('contents/admin') }}/assets/lib/jquery-ui/jquery-ui.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <!-- add -->
    <script src="{{ asset('contents/admin') }}/assets/lib/highlightjs/highlight.pack.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/lib/datatables/jquery.dataTables.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/lib/datatables-responsive/dataTables.responsive.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/lib/select2/js/select2.min.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/js/datatable_active.js"></script>

    <script src="{{ asset('contents/admin') }}/assets/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/lib/d3/d3.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/lib/rickshaw/rickshaw.min.js"></script>
    
    <!-- <script src="{{ asset('contents/admin') }}/assets/lib/chart.js/Chart.js"></script> -->
    <!-- <script src="{{ asset('contents/admin') }}/assets/lib/Flot/jquery.flot.js"></script> -->
    <!-- <script src="{{ asset('contents/admin') }}/assets/lib/Flot/jquery.flot.pie.js"></script> -->

    <script src="{{ asset('contents/admin') }}/assets/lib/Flot/jquery.flot.resize.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/lib/sweetalert/sweetalert.min.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/lib/sweetalert/code.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/lib/toast/toast.min.js"></script>
    <script>
      @if(Session::has('message'))
        var type ="{{Session::get('alert-type','info')}}"
        switch(type){
            case 'info':
                toastr.info(" {{Session::get('message')}} ");
                break;

            case 'success':
                toastr.success(" {{Session::get('message')}} ");
                break;

            case 'warning':
                toastr.warning(" {{Session::get('message')}} ");
                break;

            case 'error':
                toastr.error(" {{Session::get('message')}} ");
                break;
        }
    @endif
    </script>

    <script src="{{ asset('contents/admin') }}/assets/lib/flot-spline/jquery.flot.spline.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/js/starlight.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/js/ResizeSensor.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/js/custom.js"></script>
    <script type="text/javascript">
      $.ajaxSetup({
          headers:{
              'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
          }
      });
    </script>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

<script>
    $(document).ready(function () {
    $('#dtHorizontalExample').DataTable({
    "scrollX": true
    });
    $('.dataTables_length').addClass('bs-select');
    });
</script>
  </body>
</html>
