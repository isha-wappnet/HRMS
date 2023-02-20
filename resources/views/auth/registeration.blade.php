<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</head>


<body>
    <!-- Preloader -->
    <div class="preloader">
      <div class="cssload-speeding-wheel"></div>
    </div>
    <section id="wrapper" class="login-register">
      <div class="login-box">
        <div class="white-box">
            <h4></h4>
            <form id="register" method="post">
                @csrf
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                     <input type="text" name="fname" id="fname"  placeholder=" First name" class="form-control" value="{{old('name')}}"/>
                     
                     </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                  <input type="text" name="lname" id="lname" placeholder=" Last name" class="form-control" />
                     
                    </div>
                  </div>
                </div>
    
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" name="email" id="email" placeholder=" Enter email" class="form-control" />
              
                      
                 
                </div>
    
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="pass" id="pass" placeholder=" Enter password " class="form-control" />
                 
                </div>
    
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                  <label class="form-check-label" for="form2Example33">
                  Remember me 
                  </label>
                </div>
    
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Sign up
                </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
   
   <a href="login"> Already have an account??? Login here </a>
    
  </body>

  <script>
    
        $('#register').validate({
            rules: {
                fname: {
                    required: true,
                },
                lname: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true,
                },
                pass: {
                    required: true,
                },
            },
            messages: {
                fname: {
                    required: "Please enter valid fname",
                },
                lname: {
                    required: "Please enter valid lname",
                },
                email: {
                    required: "Please enter valid email",
                    email: "Please enter valid email",
                },
                pass: {
                    required: "Please enter valid pass",
                },
            },
        })
   // }
</script>
