@extends('layouts.master')

@section('title')
Create Notification
@endsection

@section('head-contents')
<!-- Custom fonts for this template-->
<link href="{{ URL::asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
<script>
function handleCommand() {
    var checkbox = $(this);
    if (!checkbox.is(':checked')) {
        bootbox.confirm("Are you sure?", function (result) {
            if (result) {
                // your code
            } else {
                checkbox.prop('checked', true);
            }
        });
    }
}</script>
@include('layouts.js')
{{-- table javascript --}}
<link href="{{ URL::asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{URL::asset('DataTables/datatables.min.css')}}" />

@endsection

@section('content')
<form>
    <div class="form-group">
        <label for="message_title">Message Title</label>
        <input type="email" class="form-control" id="message_title" 
            placeholder="Enter email">
    </div>
    <div class="input-group mb-3">
        <select class="custom-select" id="inputGroupSelect01">
          <option value="all">All Members</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
      </div>
    <div class="form-group">
        <label for="message">Example textarea</label>
        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection