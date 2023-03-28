
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Reques Queris</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">


<link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">
    <!-- Custom styles for this template -->
    <link href="checkout.css" rel="stylesheet">
  </head>

  <body class="bg-light">

  <div >
  <?php include 'menu.php'; ?>  
  </div>

    <div>
        <div class="mt-5">
            <img src="images/packers.jpg" width="1600px"; height="500px"; >
        </div>
        <footer> 
    </div>

    
<div class="container">
  <main>
    <div class="py-5 text-center" padding="20px">
      <!-- <img class="d-block mx-auto mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
      <h2><b>REQUEST QUOTE</b></h2>
      
    </div>

    <div class="row g-5">
     
      <div class="col-md-7 col-lg-10 mx-5 ">
        <!-- <h4 class="mb-3">Billing address</h4> -->
        <form class="needs-validation" action='requestdata.php' method="POST" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Full Name*</label>
              <input type="text" class="form-control" name="name" id="firstName" placeholder="Name" value="" required>
              <div class="invalid-feedback">
                Valid name is required.
              </div>
            </div>

           

            <div class="col-12" >
              <label for="email" class="form-label">Email <span class="text-muted"></span></label>
              <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com" required>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            <div class="col-sm-6">
                <label for="phone" class="form-label">Mobile Number*</label>
                <input type="tel" class="form-control" name="mnumber" id="phone" placeholder="Mobile Number" value="" required>
                <div class="invalid-feedback">
                  Mobile Number.
                </div>
              </div>

              <!-- ------------ -->
              
              <fieldset>
                <h5> <legend>Choose the Services you want :</legend></h5>
            
                <div>
                  <input type="checkbox" id="scales" name="wantservices[]" value="packingmoving">
                  <label for="scales">Packing & Moving</label>
                </div>
            
                <div>
                  <input type="checkbox" id="horns" name="wantservices[]" value="bikecarTrans" >
                  <label for="horns">Bike & Car Transport</label>
                </div>
                <div>
                  <input type="checkbox" id="horns" name="wantservices[]" value="pestcontrolservice">
                  <label for="horns">Pest Control Service</label>
                </div>
            </fieldset>
            
              <!-- ----------- -->

            <div class="col-12">
              <label for="address" class="form-label">Where do you want the packers and movers service*</label>
              <input type="text" class="form-control" id="address" name="wheremover" placeholder="Where do you want the packers and movers service" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Where are you shifting* </label>
              <input type="text" class="form-control" name="shifting" id="address2" placeholder="Where are you shifting" required>
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Country</label>
              <select class="form-select" name="country"  id="country" required>
                <option value="" name="country">Choose...</option>
                <option>India</option>
                
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">State</label>
              <select class="form-select" id="state" name="state" required>
                <option value="">Choose...</option>
                <option>Maharastra</option>
                <option>Madhya Pradesh</option>
                <option>Andhra Pradesh </option>
                <option>Bihar</option>
                <option>goa</option>
                <option>Gujrat</option>
                <option>karnataka</option>
                <option>Rajsthan</option>
                
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Zip</label>
              <input type="text" class="form-control" name="zip" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>

          <hr class="my-4">

         

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Save this information for next time</label>
          </div>
          

          <hr class="my-4">

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2022 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>

    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

      <script src="checkout.js"></script>
  </body>
</html>
