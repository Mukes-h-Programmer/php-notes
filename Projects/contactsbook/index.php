<?php

require_once 'includes/config.php';
include_once 'public/common/header.php';
require_once 'includes/db.php';

$userId = (!empty($_SESSION['user']) && !empty($_SESSION['user']['id'])) ? $_SESSION['user']['id'] : 0;

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

if(!empty($userId)){
  $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
  $limit = 5;
  $offset = ($currentPage - 1 ) * $limit;

  $contactSql = "SELECT * FROM contacts WHERE owner_id = $userId ORDER BY first_name ASC LIMIT {$offset},{$limit}";

  // $contactSql = "SELECT * FROM contacts WHERE owner_id = $userId ORDER BY first_name ASC LIMIT 0,10";

  

  $conn = db_connect();
  $contactsResult = mysqli_query($conn, $contactSql);
  $contactsNumRows = mysqli_num_rows($contactsResult);

// for counts
  $countSql = "SELECT id FROM contacts WHERE owner_id = $userId";
  $countResult = mysqli_query($conn, $countSql);
  $numRows = mysqli_num_rows($countResult);

  if($contactsNumRows > 0)
  {

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
<?php
 while ($row = mysqli_fetch_assoc($contactsResult)){

  $userImage = !empty($row['photo']) ? SITEURL."uploads/photos/".$row['photo'] : "https://via.placeholder.com/50.png/09f/666";
 ?>

      <tr>
      <td class="align-middle"><img src="<?php echo $userImage; ?>" class="img-thumbnail img-list" style = " width: 60px; " /></td>
      <td class="align-middle"><?php echo $row['first_name'] . " ". $row['last_name']; ?></td>
      <td class="align-middle"> 
      <a href="<?php echo SITEURL . "view.php?id=".$row['id']; ?>" class="btn btn-success">View</a>
      <a href="<?php echo SITEURL . "addcontact.php?id=".$row['id']; ?>" class="btn btn-primary">Edit</a>
      <a href="<?php echo SITEURL . "dlt.php?id=".$row['id']; ?>" class="btn btn-danger" onclick="return confirm(`Are you sure want to delete this contact?`)">Delete</a>
      </td>
    </tr>
<?php
 }
 ?>
</tbody>
</table>
<?php
getpagination($numRows, $currentPage);

?>


<?php
}else{
  echo '<div class = "alert alert-danger text-center mt-2">No Contacts available </div>';
}
}else{
?>

<style>
  body { background-image : url("<?php  echo SITEURL . "public/images/m.png"; ?>");
    
  background-repeat: no-repeat; background-size: cover;
  }

  

</style>
<?php
}
require_once 'includes/config.php';
include_once 'public/common/footer.php';

?>