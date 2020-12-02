<?php 


include('mystudent.php');

$mystudent = new mystudent();

$course = $mystudent->getCourse();

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
        width: 40%;
        margin: auto;
    }
    </style>


    <?php include('index.php'); ?>
    <div class="form-div">
    <button type="button" class="btn btn-primary container-form" data-toggle="modal" data-target="#staticBackdrop">
  +
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">ADD SUBJECT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Course Code">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Course Description">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Subject1">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Subject2">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Subject3">
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
</div>

    <br>

    <div class="form-div">
    <table class="table table-hover container-form"> 
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">SUBJECT</th>
            <!-- <th scope="col">COURSE DESCRIPTION</th> -->
            </tr>
        </thead>
        <tbody>
            <!-- <?php foreach($course as $course) { ?>
            <tr>
                <th scope="row"><?php echo $course['id'];?></th>
                <td><?php echo $course['course_code'];?></td>
                <td><?php echo $course['course_description'];?></td>
            </tr>
            <?php } ?> -->
        </tbody>
    </table>
    </div>

</html>