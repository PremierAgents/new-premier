<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="toggle-color">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-item nav-link active" href="{{url('/')}}" id="nav-white">Home <span class="sr-only" id="nav-white">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/AboutUs') }}" id="nav-white">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/Land')}}" id="nav-white">Land</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/House')}}"id="nav-white">House</a>
          </li>

      </ul>

      <ul class="navbar-nav ">
        <li class="nav-item">
            <a class="nav-link" href="{{url('/Blog')}}" id="nav-white">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/AgentFinder')}}" id="nav-white">Agent Finder</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/Community')}}" id="nav-white">Community</a>
          </li>
        <li class="nav-item" id="myBtn">
            <a class="nav-link" href="#" id="nav-white">Login</a>
          </li>
      </ul>
    </div>
  </div>



<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <center>
    <div class="modal-content" style="width:70%">
      <div class="modal-header">
        <span class="close">&times;</span>
      </div>
      <!--content-->
      <div class="card signup_v4 mb-30">
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation"> <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a> </li>
                <li class="nav-item" role="presentation"> <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a> </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                    <h4 class="text-center mt-4 mb-4" style="text-transform: uppercase;">Login</h4>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-12"> <label for="inputName">Your Username</label> <input type="text" class="form-control" id="inputEmail4" placeholder="Enter your username" required=""> </div>
                            <div class="form-group col-md-12"> <label for="inputName">Your Password</label> <input type="password" class="form-control" id="inputPassword4" placeholder="Enter your password" required=""> </div>
                            <div class="form-group col-md-12">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="custom-checkbox d-block"> <label class="custom-control custom-checkbox checkbox-lg"> <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <div class="custom-control-label" for="customCheck1">Remember Password</div>
                                        </label> </div> <a href="#" target="_blank">Forgot Password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 mb-3"> <button class="btn btn-primary full-width" type="submit">Login</button> </div>
                    </form>
                    <div class="social-area">
                        <h3 class="title">Or</h3>
                        <p class="text">Sign In with social media</p>
                        <ul class="social-links">
                            <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                            <li> <a href="#"> <i class="fab fa-google-plus-g"></i> </a> </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                    <h4 class="text-center mt-4 mb-4" style="text-transform: uppercase;">Register</h4>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-12"> <label for="inputName">First Name</label> <input type="text" class="form-control" id="inputEmail4" placeholder="First Name" required=""> </div>
                            <div class="form-group col-md-12"> <label for="inputName">Last Name</label> <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name" required=""> </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12"> <label for="inputName">Your Email Address</label> <input type="email" class="form-control" id="inputEmail4" placeholder="Enter your email address" required=""> </div>
                            <div class="form-group col-md-12"> <label for="inputName">Your Password</label> <input type="password" class="form-control" id="inputPassword4" placeholder="Enter your password" required=""> </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12"> <label for="inputName">Your Confirm Password</label> <input type="password" class="form-control" id="inputPassword4" placeholder="Enter your confirm password" required=""> </div>
                            <div class="form-group col-md-12"> <label for="inputName">Join as</label> <select id="inputState" class="form-control" required="">
                                    <option selected="">Join as</option>
                                    <option>Indipendent</option>
                                    <option>As Customer</option>
                                </select> </div>
                        </div>
                        <div class="form-group form-row">
                            <div class="col-md-12"> <label class="custom-control custom-checkbox checkbox-lg"> <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <div class="custom-control-label" for="customCheck1">I agree with <a href="#" target="_blank">terms and conditions</a></div>
                                </label> </div>
                        </div>
                        <hr class="mt-3 mb-4">
                        <div class="col-12">
                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <div class="custom-checkbox d-block"> <a href="" class="nav-link-inline font-size-sm">Already have an account? Login</a> </div> <button class="btn btn-primary mt-3 mt-sm-0" type="submit">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</center>

  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>
