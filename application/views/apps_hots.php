<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <div id="content-wrapper">

        <div class="container-fluid">
        <!-- DataTables Example -->
      <form method="post" name="borang" id="borang" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-users"></i>
             Participant Background</div>
            <div class="card-body">
              <div class="table">
<!-- Nama -->
   <div class="form-group row">
    <label for="nama" class="col-sm-4 col-form-label">Name*</label>
    <div class="col-sm-8">
      <input name="name" type="text" class="form-control" id="name">
    </div>
  </div>

<!-- Nombor IC -->
   <div class="form-group row">
    <label for="phone" class="col-sm-4 col-form-label">Designation</label>
    <div class="col-sm-8">
      <input name="designation" type="text" class="form-control" id="designation">
    </div>
  </div>

<!-- Jantina -->
<div class="form-group row">
    <label for="jantina" class="col-sm-4 col-form-label">H/P No</label>
    <div class="col-sm-8"><span class="col-sm-6">
      <input name="hp" type="text" class="form-control" id="hp">
    </span></div>
  </div>


<!-- Race -->

<div class="form-group row">
    <label for="race" class="col-sm-4 col-form-label">Email</label>
    <div class="col-sm-8"><span class="col-sm-6">
      <input type="email" class="form-control" id="email" name="email">
    </span></div>
  </div>


</div></div>

 <!-- Religion  -->


<div class="card-header">
              <i class="fas fa-users"></i>
             Employer's Background</div>
                <div class="card-body">
              <div class="table">

<!-- Disability   -->

  <div class="form-group row">
    <label for="jantina" class="col-sm-4 col-form-label">Company Name/Department</label>
    <div class="col-sm-8">
      <input name="company" type="text" class="form-control" id="company">
    </div>
  </div>

<!-- Place of Birth   -->

 <div class="form-group row">
    <label for="jantina" class="col-sm-4 col-form-label">Address</label>
    <div class="col-sm-8">
         <textarea name="address" id="address" class="form-control"></textarea>
    </div>
  </div>

<!-- Marital Status *   -->

 <div class="form-group row">
    <label for="jantina" class="col-sm-4 col-form-label">Tel</label>
    <div class="col-sm-8"><span class="col-sm-6">
      <input name="telefon" type="text" class="form-control" id="telefon">
    </span></div>
 </div>


<!-- Warganegara -->
 <div class="form-group row">
    <label for="jantina" class="col-sm-4 col-form-label">Ext</label>
    <div class="col-sm-8"><span class="col-sm-6">
      <input name="ext" type="text" class="form-control" id="ext">
    </span> </div>
 </div>

<div class="form-group row">
    <label for="jantina" class="col-sm-4 col-form-label">Fax</label>
    <div class="col-sm-8"><span class="col-sm-6">
      <input name="fax" type="text" class="form-control" id="fax">
    </span> </div>
 </div>

</div></div>

 <!-- Religion  -->


<div class="card-header">
<i class="fas fa-users"></i>
Payment Method</div>
<div class="card-body">
<div class="table">
<div class="form-group row">
    <label for="jantina" class="col-sm-4 col-form-label">Method</label>
    <div class="col-sm-8">
     <select name="method" id="method" class="form-control input-lg" required="required">
		<option value="">-- Select --</option>
		<option value="cash">Cash</option>
		<option value="cpc">Cheque/PO/Credit Card</option>
   </select>
    </div>
</div>

<div class="form-group row">
    <label for="jantina" class="col-sm-4 col-form-label">No</label>
    <div class="col-sm-8"><span class="col-sm-6">
      <input name="nom" type="text" class="form-control" id="nom">
    </span> </div>
 </div>
<input type="submit" name="hantar" id="hantar" value="Submit">
</div>



</div></div></form></div></div>
