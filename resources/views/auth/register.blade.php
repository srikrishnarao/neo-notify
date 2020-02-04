<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>User Register</title>
   <!-- Custom fonts for this template-->
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet">
   <!-- Custom styles for this template-->
   <link href="css/sb-admin-2.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
   <div class="container">
      <div class="card o-hidden border-0 shadow-lg my-5">
         <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
               <div class="col-lg-12">
                  <div class="p-5">
                     <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">User Registration</h1>
                     </div>
                     <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                           <div class="col-sm-12 mb-3 mb-sm-0">
                              <input type="text" name="store_name"
                                 class="@error('store_name') is-invalid @enderror form-control form-control-user"
                                 value="{{ old('store_name') }}" required placeholder="Store Name">
                              @error('store_name')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                        </div>
                        <div class="form-group row">
                           <div class="col-sm-2">
                              <input type="text" name="store_postal_code" id="intTextBox"
                                 class="@error('store_postal_code') is-invalid @enderror form-control form-control-user"
                                 value="{{ old('store_postal_code') }}" required placeholder="Pin Code" maxlength="7">
                              @error('store_postal_code')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="col-sm-2">
                              <select type="text" name="store_prefecture"
                                 class="@error('store_prefecture') is-invalid @enderror form-control form-control-user"
                                 required value="{{ old('store_prefecture') }}" style="border-radius: 500px !important">
                                 @include('layouts.prefecture-list')
                              </select>
                              @error('store_prefecture')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="col-sm-8">
                              <input type="text" name="store_address"
                                 class="@error('store_address') is-invalid @enderror form-control form-control-user"
                                 value="{{ old('store_address') }}" required placeholder="Address">
                              @error('store_address')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                        </div>
                        <div class="form-group">
                           <input type="email" name="user_email" id="email"
                              class="@error('user_email') is-invalid @enderror form-control form-control-user"
                              value="{{ old('user_email') }}" required autocomplete="email" placeholder="Email Address">
                           @error('user_email')
                           <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="form-group row">
                           <div class="col-sm-6 mb-3 mb-sm-0">
                              <input type="password" name="password" id="password"
                                 class="@error('password') is-invalid @enderror form-control form-control-user" required
                                 autocomplete="new-password" placeholder="Create Password">
                              @error('password')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="col-sm-6">
                              <input type="password" name="password_confirmation" class="form-control form-control-user"
                                 placeholder="Confirm Password">
                           </div>
                        </div>
                        <div class="form-group row">
                           <div class="col-sm-3">
                              <input type="text" name="store_phone_number" id="telTextBox"
                                 class="@error('store_phone_number') is-invalid @enderror form-control form-control-user"
                                 value="{{ old('store_phone_number') }}" required maxlength="10"
                                 placeholder="Telephone">
                              @error('store_phone_number')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="col-sm-9">
                              <input type="text" name="store_url" id=""
                                 class="@error('store_url') is-invalid @enderror form-control form-control-user"
                                 value="{{ old('store_url') }}" required maxlength="255" placeholder="URL">
                              @error('store_url')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                        </div>
                        <div class="form-group row">
                           <div class="col-sm-6 mb-3 mb-sm-0">
                              <input type="text" name="store_person_in_charge_department"
                                 class="@error('store_person_in_charge_department') is-invalid @enderror form-control form-control-user"
                                 value="{{ old('store_person_in_charge_department') }}" required
                                 placeholder="Department">
                              @error('store_person_in_charge_department')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="col-sm-6">
                              <input type="text" name="store_person_in_charge_position"
                                 class="form-control form-control-user"
                                 value="{{ old('store_person_in_charge_position') }}" placeholder="Position">
                           </div>
                        </div>
                        <div class="form-group row">
                           <div class="col-sm-6 mb-3 mb-sm-0">
                              <input type="text" name="user_last_name"
                                 class="@error('user_last_name') is-invalid @enderror form-control form-control-user"
                                 value="{{ old('user_last_name') }}" required placeholder="Last Name">
                              @error('user_last_name')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="col-sm-6">
                              <input type="text" name="user_first_name"
                                 class="@error('user_first_name') is-invalid @enderror form-control form-control-user"
                                 value="{{ old('user_first_name') }}" required placeholder="First Name">
                              @error('user_first_name')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                        </div>
                        <div class="form-group row mb-0">
                           <div class="col-md-6 offset-md-3">
                              <button type="submit" class="btn btn-primary btn-user btn-block">
                                 {{ __('Register') }}
                              </button>
                           </div>
                        </div>
                     </form>
                     <hr>
                     <div class="text-center">
                        <a class="small" href="password/reset">Forgot Password</a>
                     </div>
                     <div class="text-center">
                        <a class="small" href="login">Already have an account? Login</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script>
      // Restricts input for the given textbox to the given inputFilter.
         function setInputFilter(textbox, inputFilter) {
            ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
               textbox.addEventListener(event, function() {
                  if (inputFilter(this.value)) {
                  this.oldValue = this.value;
                  this.oldSelectionStart = this.selectionStart;
                  this.oldSelectionEnd = this.selectionEnd;
                  } else if (this.hasOwnProperty("oldValue")) {
                  this.value = this.oldValue;
                  this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                  } else {
                  this.value = "";
                  }
               });
            });
         }

         // Install input filters.
         setInputFilter(document.getElementById("intTextBox"), function(value) {
         return /^-?\d*$/.test(value); });
         setInputFilter(document.getElementById("telTextBox"), function(value) {
         return /^-?\d*$/.test(value); });  
   </script>
   <!-- Bootstrap core JavaScript-->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- Core plugin JavaScript-->
   <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
   <!-- Custom scripts for all pages-->
   <script src="js/sb-admin-2.min.js"></script>
</body>

</html>