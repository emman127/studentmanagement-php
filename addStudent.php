<?php 

  include('mystudent.php');

  $mystudent = new MyStudent();
  $mystudent->addStudent();
  
?>

<!DOCTYPE html>
<html lang="en">
  <style>
    .container-form {
      /* width: 80%;
      margin: auto; */
      position: relative;
      top: 140px;
    }

    .form-div {
      width: 80%;
      margin: auto;
    }
  </style>

  <?php include('index.php'); ?>
 
  <div class="form-div">    
    <form class="container-form" action="addStudent.php"  method="POST">
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputEmail4">First name</label>
          <input type="text" class="form-control" id="inputEmail4" name="firstname">
        </div>
        <div class="form-group col-md-4">
          <label for="inputPassword4">Middle name</label>
          <input type="text" class="form-control" id="inputPassword4" name="middlename">
        </div>
        <div class="form-group col-md-4">
          <label for="inputPassword4">Lastname</label>
          <input type="text" class="form-control" id="inputPassword4" name="lastname">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Course</label>
        <input type="text" class="form-control" id="inputAddress" name="course">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Subject</label>
        <input type="text" class="form-control" id="inputAddress2" name="subject">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Age</label>
          <input type="number" class="form-control" id="inputCity" name="age">
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">Gender</label>
          <select id="inputState" class="form-control" name="gender">
            <option selected>Choose...</option>
            <option>Male</option>
            <option>Female</option>
          </select>
        </div>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">ADD STUDENT</button>
    </form>
  </div>

</html>