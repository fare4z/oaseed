<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
       <div id="content-wrapper">

     <div id="content-wrapper">

        <div class="container-fluid">
        <!-- DataTables Example -->
      <form method="post" name="borang" id="borang" action="<?php echo base_url(); ?>admission/submit_apps_elpp">
        <?php if (validation_errors()) {?>
            <div class="card-body">

<div class="alert alert-danger">
  <strong>Attention !</strong> <?php echo validation_errors(); ?>
</div>

             </div>

<?php }?>


            <div class="card-header">
              <i class="fas fa-users"></i>
             Personal Details</div>
            <div class="card-body">
              <div class="table">
<!-- Nama -->
   <div class="form-group row">
    <label for="nama" class="col-sm-4 col-form-label">Full Name *</label>
    <div class="col-sm-8">
      <input name="name" type="text" class="form-control" id="name" required="required" value="<?php echo set_value('name'); ?>" >
    </div>
  </div>

<!-- Nombor IC -->
   <div class="form-group row">
    <label for="phone" class="col-sm-4 col-form-label">Nationality *</label>
    <div class="col-sm-8">
     <?=form_dropdown('nationality', $nationality, set_value('nationality'), "class=form-control");?>
    </div>
  </div>

     <div class="form-group row">
    <label for="phone" class="col-sm-4 col-form-label">NRIC/Passport *</label>
    <div class="col-sm-8">
      <input name="nric" type="text" class="form-control" id="nric" required="required" value="<?php echo set_value('nric'); ?>">
    </div>
  </div>

<!-- Jantina -->
<div class="form-group row">
    <label for="jantina" class="col-sm-4 col-form-label">Gender *</label>
    <div class="col-sm-8">
 <?=form_dropdown('gender', $gender, set_value('gender'), "class=form-control");?>
    </div>
  </div>



<div class="form-group row">
    <label for="jantina" class="col-sm-4 col-form-label">Date of Birth *</label>
    <div class="col-sm-8">
      <input name="dob" type="text" class="form-control" id="dob" required="required" value="<?php echo set_value('dob'); ?>">
   </div>
  </div>

<div class="form-group row">
    <label for="jantina" class="col-sm-4 col-form-label">Permanent Address *</label>
    <div class="col-sm-8">
     <textarea name="address" id="address" class="form-control"  required="required"><?php echo set_value('address'); ?></textarea>
    </div>
  </div>

<!-- Jantina -->
<div class="form-group row">
    <label for="jantina" class="col-sm-4 col-form-label">Telephone No *</label>
    <div class="col-sm-8">
      <input name="hp" type="text" class="form-control" id="hp" required="required" value="<?php echo set_value('hp'); ?>">
    </div>
  </div>

<div class="form-group row">
    <label for="jantina" class="col-sm-4 col-form-label">Marital Status</label>
    <div class="col-sm-8">
     <?=form_dropdown('marital', $marital, set_value('marital'), "class=form-control");?>
   </div>
  </div>


<!-- Race -->

<div class="form-group row">
    <label for="race" class="col-sm-4 col-form-label">Email *</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="email" name="email" required="required" value="<?php echo set_value('email'); ?>">
    </div>
  </div>


<div class="form-group row">
    <label for="race" class="col-sm-4 col-form-label">Highest Education *</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="highest_education" name="highest_education" required="required" value="<?php echo set_value('highest_education'); ?>">
   </div>
  </div>


<div class="form-group row">
    <label for="race" class="col-sm-4 col-form-label">Institution name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="institution_name" name="institution_name" value="<?php echo set_value('institution_name'); ?>">
   </div>
  </div>


</div></div>


 <!-- Religion  -->


<div class="card-header">
<i class="fas fa-users"></i>Guardian’s information
</div>
<div class="card-body">
<div class="table">


  <div class="form-group row">
    <label for="nama2" class="col-sm-4 col-form-label">Name *</label>
    <div class="col-sm-8">
      <input name="nok_name" type="text" class="form-control" id="nok_name" required="required" value="<?php echo set_value('nok_name'); ?>">
    </div>
  </div>
  <!-- Nombor IC -->
  <div class="form-group row">
    <label for="phone2" class="col-sm-4 col-form-label">Address *</label>
    <div class="col-sm-8">
      <textarea name="nok_address" class="form-control" id="nok_address"  required="required"><?php echo set_value('nok_address'); ?></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="phone2" class="col-sm-4 col-form-label">Contact Number *</label>
    <div class="col-sm-8">
      <input name="nok_phone" type="text" class="form-control" id="nok_phone" required="required" value="<?php echo set_value('nok_phone'); ?>">
    </div>
  </div>
  <!-- Jantina -->
  <div class="form-group row">
    <label for="jantina2" class="col-sm-4 col-form-label">Relationship *</label>
    <div class="col-sm-8">
      <input name="nok_relation" type="text" class="form-control" id="nok_relation" required="required" value="<?php echo set_value('nok_relation'); ?>">
   </div>
  </div>

<div class="form-group row">
 </div>
<input type="submit" name="hantar" id="hantar" value="Submit" class="btn btn-primary" >
</div>



</div></div></form></div></div>
