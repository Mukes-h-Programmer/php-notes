<?php

require_once 'includes/config.php';
include_once 'public/common/header.php';

?>

<?php
if (!empty($_SESSION['success'])){
?>
<div class="alert alert-success text-center wrapper">

<?php echo $_SESSION['success']; ?>

</div>
<?php
unset($_SESSION['success']);
}
?>

<table class="table text-center">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <tr>
      <td class="align-middle"><img src="https://via.placeholder.com/50.png/09f/666" class="img-thumbnail img-list" /></td>
      <td class="align-middle">Deepak Sharma</td>
      <td class="align-middle"> 
      <a href="/contactbook/view.php?id=9" class="btn btn-success">View</a>
      <a href="/contactbook/addcontact.php?id=9" class="btn btn-primary">Edit</a>
      <a href="/contactbook/delete.php?id=9" class="btn btn-danger" onclick="return confirm(`Are you sure want to delete this contact?`)">Delete</a>
      </td>
    </tr>
</tbody>
</table>

<?php

require_once 'includes/config.php';
include_once 'public/common/footer.php';

?>