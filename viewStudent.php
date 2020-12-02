<?php 

    include('mystudent.php');

    $mystudent = new mystudent();

    $students = $mystudent->getStudents();

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
    <table class="table table-hover container-form"> 
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">FIRST NAME</th>
            <th scope="col">MIDDLE NAME</th>
            <th scope="col">LAST NAME</th>
            <th scope="col">AGE</th>
            <th scope="col">GENDER</th>
            <th scope="col">COURSE</th>
            <th scope="col">SUBJECT</th>
            <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($students as $student) { ?>
            <tr>
                <th scope="row"><?php echo $student['id'];?></th>
                <td><?php echo $student['firstname'];?></td>
                <td><?php echo $student['middlename'];?></td>
                <td><?php echo $student['lastname'];?></td>
                <td><?php echo $student['age'];?></td>
                <td><?php echo $student['gender'];?></td>
                <td><?php echo $student['course'];?></td>
                <td><?php echo $student['subject'];?></td>
                <td>
                    <a class="btn btn-info" data-toggle="modal" data-target="#staticBackdrop" 
                        href="editStudent.php?id=<?php echo $student['id'] ?>">EDIT</a>
                    <a class="btn btn-danger" href="deleteStudent.php?id=<?php echo $student['id'] ?>">DELETE</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>

<!-- Modal -->
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

</html>