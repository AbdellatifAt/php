
<?php include './parts/header.php';
?>


<body>
<div class="container">
  <!-- Content here -->

  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">اربح مع عبد اللطيف </h1>
      <p class="lead fw-normal">باقي عل التسجيل </p>
      <p class="lead fw-normal">السحب على ربح نسخة مجانية من برنامج </p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
  </div>
<!--
  <ul class="list-group list-group-flush">
  <li class="list-group-item">An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
  <li class="list-group-item">A fourth item</li>
  <li class="list-group-item">And a fifth one</li>
</ul>
-->
<div class="position-relative  text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">

<form  id="submitForm" >
    <h3>الرجاء أدخل معلوماتك</h3>

  <div class="mb-3">
    <label for="firstName" class="form-label lebel-color">الإسم الأول</label>
    <input type="text"  name="firstName" class="form-control" placeholder="mohamed" value ="<?php echo  $firstName ?>" id="firstName" aria-describedby="emailHelp">
    <div class="form-text error"><?php echo $errors['firstNameError'] ?></div>
  </div> 

  <div class="mb-3">
    <label for="lastName" class="form-label lebel-color">الإسم التاني</label>
    <input type="text"  name="lastName" class="form-control" placeholder="rami " value ="<?php echo $lastName ?>" id="lastName" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['lastNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label lebel-color">البريد الإلكتروني</label>
    <input type="email" name="email" class="form-control" placeholder="exemple@gmail.com" value ="<?php echo  $email ?>" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo  $errors['emailError'] ?></div>
  </div>
  
  <button type="button" name ="submit" class="btn btn-primary" id="submitButton">Submit</button>
</form>
</div>
</div>

<div >
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">email</th>
    </tr>
  </thead>
  <tbody id="table-container">
    
  </tbody>
</table>
</div>

  
<?php include './parts/footer.php'; ?>