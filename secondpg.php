
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='stylesheet.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
<style>
    .container {
            max-width: 600px;
            margin: auto;
            background-color: #fff;
            padding: 10px;
            border-radius: 20px;
            box-shadow: 0 0 10px;
            background: transparent;
    }
    
    </style>
</head>
<body>
    <h2>BLUEBASE SOFTWARE DEVELOPMENT</h2>
    <div class="container">
        
    <section>
    <form class="row g-3 needs-validation" method="POST" action="validation.php" style= "margin-top: 50px" style= "border-radius: 40px" novalidate>
  
    <label for="validationCustom01" class="form-label" style= "font-weight: bold;">First name</label>
    <input type="text" class="form-control"  id="validationCustom01" style = " background : transparent; font-color: white;" placeholder="First name" name="fname" required>
    <div class="valid-feedback">
      Looks good!
    </div><br>
  
 
    <label for="validationCustom02" class="form-label" style= "font-weight: bold;">Last name</label>
    <input type="text" class="form-control" id="validationCustom02" style = " background : transparent; border-raddius: 40px" placeholder="Last name" name="lname" required>
    <div class="valid-feedback">
      Looks good!
  </div><br>

  <label for="validationCustom03" class="form-label" style= "font-weight: bold;">Username</label>
    <input type="text" class="form-control"  id="validationCustom03" style = " background : transparent; font-color: white;" placeholder="Create a new username" name="username" required>
    <div class="valid-feedback">
      Looks good!
    </div><br>

    <label for="validationCustom04" class="form-label" style= "font-weight: bold;">Contact number</label>
    <input type="text" class="form-control"  id="validationCustom04" style = " background : transparent; font-color: white;" placeholder="Mobile number" name="phnnumber" required>
    <div class="valid-feedback">
      Looks good!
    </div><br>
  
  
    <label for="validationCustomUsername" class="form-label" style= "font-weight: bold;">Email Address</label>
    <div class="input-group has-validation">
      <span class="input-group-text" style = " background : transparent;" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" style = " background : transparent;" placeholder="example.com" aria-describedby="inputGroupPrepend" name="email" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div><br>
  
    <label for="validationCustom05" class="form-label" style= "font-weight: bold;">City</label>
    <input type="text" class="form-control" style = " background : transparent;" id="validationCustom05" name="city" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div><br>
  
 
    <label for="validationCustom06" class="form-label" style= "font-weight: bold;">State</label>
    <select class="form-select" style = " background : transparent;" id="validationCustom06" name="state" required>
      <option selected disabled value="">Choose...</option>
      <option value="andhrapradesh">Andhra Pradesh</option>
      <option value="Assam">Assam</option>
      <option value="Bihar">Bihar</option>
      <option value="Chhattisgarh">Chhattisgarh</option>
      <option value="Goa">Goa</option>
      <option value="Gujarat">Gujarat</option>
      <option value="Haryana">Haryana</option>
      <option value="Karnataka">Karnataka</option>
      <option value="Kerala">Kerala</option>
      <option value="Maharashtra">Maharashtra</option>
      <option value="Punjab">Punjab</option>
      <option value="Rajasthan">Rajasthan</option>
      <option value="Tamilnadu">Tamil Nadu</option>
      <option value="Telangana">Telangana</option>
      <option value="Uttarakhand">Uttarakhand</option>
      <option value="UttarPradesh">Uttar Pradesh</option>

    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  
  <div class="col-md-3">
    <label for="validationCustom07" class="form-label" style= "font-weight: bold;">Zip code</label>
    <input type="text" class="form-control" style = " background : transparent; " id="validationCustom07" name="zip" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>


  <label for="validationCustom08" class="form-label" style= "font-weight: bold;">New Password</label>
    <input type="text" class="form-control"  id="validationCustom08" style = " background : transparent; font-color: white;" placeholder="Create a password" name="password" required>
    <div class="valid-feedback">
      Looks good!
    </div><br>
  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value=""   id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck" style= "font-weight: bold;">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
  <i class="fas fa-sign-in-alt"></i> <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</div>
</form>
</body>