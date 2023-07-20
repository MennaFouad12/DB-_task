<?php 
$page_title = 'All students';
$css_file = 'style.css';

require_once('./init.php');

global $con;

$stmt = $con->prepare('SELECT * FROM students');
$stmt->execute();
$students = $stmt->fetchAll();

?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">College</th>
      <th scope="col">Department</th>
      <th scope="col">GPA</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach($students as $student){ ?>
    <tr>
      <td><?php echo $student['ID']?></td>
      <td><?php echo $student['name']?></td>
      <td><?php echo $student['college']?></td>
      <td><?php echo $student['dep']?></td>
      <td><?php echo $student['gpa']?></td>
      <td><a class="btn btn-danger" href="delete.php?id=<?php echo $student['ID']?>">Delete</a></td>
    </tr>
    <?php } ?>

  </tbody>
</table>

<a href="add_student.php">Add student</a>


<?php 
include_once('./includes/template/footer.php');
?>