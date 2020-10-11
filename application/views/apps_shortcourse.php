<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
       <div id="content-wrapper">

     <div id="content-wrapper">

        <div class="container-fluid">
        <!-- DataTables Example -->
      <form method="post" name="borang" id="borang" action="<?php echo base_url(); ?>admission/submit_sc_apps">
          <div class="card mb-3">

   <div class="card-header">
              <i class="fas fa-users"></i>
             Courses Selection</div>
            <div class="card-body">
              <?php if (validation_errors()) {?>
<div class="alert alert-danger">
  <strong>Attention !</strong> <?php echo validation_errors(); ?>
</div>
<?php }?>
              <div class="table">

<div class="form-group row">
    <label for="jantina" class="col-sm-4 col-form-label">Courses *</label>
    <div class="col-sm-8">
    <?=form_dropdown('course_selection', $Courses, set_value('course_selection'), "class=form-control");?>
    </div>
  </div>



</div></div>




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

 <div class="form-group row">
    <label for="phone" class="col-sm-4 col-form-label">NRIC/Passport *</label>
    <div class="col-sm-8">
      <input name="nric" type="text" class="form-control" id="nric" required="required" value="<?php echo set_value('nric'); ?>">
    </div>
  </div>


<div class="form-group row">
    <label for="jantina" class="col-sm-4 col-form-label">Gender *</label>
    <div class="col-sm-8">
 <?=form_dropdown('gender', $gender, set_value('gender'), "class=form-control");?>
    </div>
  </div>

<div class="form-group row">
    <label for="jantina" class="col-sm-4 col-form-label">Phone No *</label>
    <div class="col-sm-8">
      <input name="hp" type="text" class="form-control" id="hp" required="required" value="<?php echo set_value('hp'); ?>">
    </div>
  </div>


<div class="form-group row">
    <label for="race" class="col-sm-4 col-form-label">Email *</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="email" name="email" required="required" value="<?php echo set_value('email'); ?>">
    </div>
  </div>



<div class="form-group row">
    <label for="race" class="col-sm-4 col-form-label">Payment Terms</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="institution_name" name="institution_name" value="<?php echo set_value('institution_name'); ?>">
   </div>
  </div>


</div></div>

 <!-- Religion  -->


<div class="card-header">
              <i class="fas fa-users"></i>
             Employment Details</div>
                <div class="card-body">
              <div class="table">



 <div class="form-group row">
    <label for="jantina" class="col-sm-4 col-form-label">Name of Company</label>
    <div class="col-sm-8">
      <input name="nama_of_organization" type="text" class="form-control" id="nama_of_organization" value="<?php echo set_value('name_of_organization'); ?>">
  </div>
 </div>


   <div class="form-group row">
    <label for="jantina" class="col-sm-4 col-form-label">Officer In Charge (Finance Department)</label>
    <div class="col-sm-8">
       <input name="officer_in_charge" type="text" class="form-control" id="officer_in_charge" value="<?php echo set_value('officer_in_charge'); ?>">
</div>
</div>


 <div class="form-group row">
    <label for="jantina" class="col-sm-4 col-form-label">Phone (Office)</label>
    <div class="col-sm-8">
      <input name="organization_number" type="text" class="form-control" id="organization_number" value="<?php echo set_value('organization_number'); ?>">
   </div>
 </div>

 <div class="form-group row">
    <label for="jantina" class="col-sm-4 col-form-label">Address of Company</label>
    <div class="col-sm-8">
         <textarea name="org_address" id="org_address" class="form-control"><?php echo set_value('org_address'); ?></textarea>
    </div>
  </div>


 <div class="form-group row">
    <label for="jantina" class="col-sm-4 col-form-label">Email</label>
    <div class="col-sm-8">
      <input name="org_email" type="email" class="form-control" id="org_email" value="<?php echo set_value('org_email'); ?>">
 </div>
  </div>

</div></div>



<div class="card-body">
<div class="form-group row">

<input type="submit" name="hantar" id="hantar" value="Submit" class="btn btn-primary" >
 </div>


</div>
</div>
</form>
