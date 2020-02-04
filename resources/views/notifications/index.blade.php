@extends('layouts.master')

@section('title')
Notifications
@endsection

@section('head-contents')
<!-- Custom fonts for this template-->
<link href="{{ URL::asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->

@include('layouts.js')
{{-- table javascript --}}

<script type="text/javascript"
    src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.js">
</script>
<link href="{{ URL::asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{URL::asset('DataTables/datatables.min.css')}}" />
{{-- "<button class='btn btn-danger'>Delete</button>"  --}}
<script>
    // fetch data from json file
                  var dataSet = [
              [ "1", "All Users", "New Year Greetings", "2019/04/21", "Ishigawa", "<button class='btn btn-primary'>Details</button>"],
              [ "2", "3", "New Year Greetings", "2019/04/21", "Shibuya" , "<button class='btn btn-primary'>Details</button>"],
              [ "3", "3", "New Year Greetings", "2019/04/21", "Shibuya" , "<button class='btn btn-primary'>Details</button>"],
              [ "4", "3", "New Year Greetings", "2019/04/21", "Shibuya" , "<button class='btn btn-primary'>Details</button>"],
              [ "5", "3", "New Year Greetings", "2019/04/21", "Yamada" , "<button class='btn btn-primary'>Details</button>"],
              [ "6", "3", "New Year Greetings", "2019/04/21", "Yamada" , "<button class='btn btn-primary'>Details</button>"],
              [ "7", "3", "New Year Greetings", "2019/04/21", "Yamada" , "<button class='btn btn-primary'>Details</button>"],
              [ "8", "3", "New Year Greetings", "2019/04/21", "Yamada" , "<button class='btn btn-primary'>Details</button>"],
              [ "9", "3", "New Year Greetings", "2019/04/21", "Yamada" , "<button class='btn btn-primary'>Details</button>"],
              [ "10", "3", "New Year Greetings", "2019/04/21", "Shibuya" , "<button class='btn btn-primary'>Details</button>"],
              [ "11", "3", "New Year Greetings", "2019/04/21", "Shibuya" , "<button class='btn btn-primary'>Details</button>"],
              [ "12", "3", "New Year Greetings", "2019/04/21", "Shibuya" , "<button class='btn btn-primary'>Details</button>"],
              [ "13", "3", "New Year Greetings", "2019/04/21", "Ishigawa" , "<button class='btn btn-primary'>Details</button>"],
              [ "14", "3", "New Year Greetings", "2019/04/21", "Ishigawa" , "<button class='btn btn-primary'>Details</button>"],
              [ "15", "All Users", "New Year Greetings", "2019/04/21", "Ishigawa", "<button class='btn btn-primary'>Details</button>"]
          ];
              // fetch data from json file
  
        $(document).ready(function() {
      $('#example').DataTable( {
          "language": {
                  "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Japanese.json"
              },
           data: dataSet,
           columns: [
                  { title: "Notification ID" },
                  { title: "Store" },
                  { title: "Message" },
                  { title: "Date" },
                  { title: "Created By" },
                  { title: "Details" }
          ],
  
      } );
      
  } );
  
</script>
<script>
    function one(){
          alert('open details page and edit form. disable when multiple items are selected')
      }
</script>
@endsection


@section('content')
<table id="example" class="display table table-bordered" width="100%">

</table>

@endsection