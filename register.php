<?php 
  session_start();

  if(!empty($_SESSION['user123'])){
    header('location:index.php');
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>

  <title>Expense Manager</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="js/axios.js"></script>
  <script src="js/vue.js"></script>
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block"><img src="img/unnamed.png" width="100%"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Register!</h1>
              </div>
              <div id="regis">
                <div class="form-group">
                  <input type="text" class="form-control" v-model="name_user" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" v-model="email" placeholder="Email Address">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" v-model="password" placeholder="Password">
                </div>
                <button class="btn btn-primary btn-user btn-block" v-on:click="regis">
                  Register Account
                </button>
              </div>
              <hr>
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

<script type="text/javascript">
  var regis = new Vue({
    el: "#regis",
    data:{
      name_user: "",
      email: "",
      password: ""
    },
    methods:{
      regis: function(){
        axios.get("registerRegis.php?name_user="+this.name_user+"&email="+this.email+"&password="+this.password);
        document.location='login.php';
      },
    }
  });

</script>