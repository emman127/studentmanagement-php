<?php 

  include('mystudent.php');

  $mystudent->addCourse();

  $course = $mystudent->getCourse();

  $mystudent->editCourse();

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
        width: 60%;
        margin: auto;
    }
    </style>


    <?php include('index.php'); ?>
    <div class="form-div">
    <button type="button" class="btn btn-primary container-form" data-toggle="modal" data-target="#staticBackdrop">
  +
</button>
</div>

<!-- ADD COURSE Modal -->
<form action="addCourse.php" method="POST">
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">ADD COURSE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
        <input type="text" class="form-control" id="exampleInputPassword1" 
            placeholder="Course Code" name="code">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="exampleInputPassword1" 
            placeholder="Course Description" name="description">
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Save</button>
      </div>
    </div>
  </div>
</div>
</div>
</form>

    <br>

    <div class="form-div">
    <table class="table table-hover container-form"> 
        <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">COURSE CODE</th>
              <th scope="col">COURSE DESCRIPTION</th>
              <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($course as $course) { ?>
            <tr>
                <th scope="row"><?php echo $course['id'];?></th>
                <td><?php echo $course['course_code'];?></td>
                <td><?php echo $course['course_description'];?></td>
                <td>
                  <a data-toggle="modal" data-target="#staticBackdrop2" class="btn btn-info" 
                      href="editCourse.php?id=<?php echo $course['id']?>">EDIT</a>
                  </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>

        <!-- EDIT COURSE Modal -->
        <form action="editCourse.php" method="POST">
        <div class="modal fade" id="staticBackdrop2" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">EDIT COURSE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputPassword1" 
                        placeholder="Course Code" name="code">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputPassword1" 
                        placeholder="Course Description" name="description" >
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="submit">Done</button>
                </div>
                </div>
            </div>
        </div>
    </form>

</html>