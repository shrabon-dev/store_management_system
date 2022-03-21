<?php require_once 'include/edit__header.php';  ?>
<?php require_once 'lib/dbcon.php';  ?>


<?php


if(isset($_GET['id'])){
    $getId=$_GET['id'];

   $edit_sql = "SELECT * FROM cate__table WHERE category__id=$getId";
   $edit_query = $mysql_conect->query($edit_sql) ;
   $edit_data_show = mysqli_fetch_assoc($edit_query);

   $category__id =  $edit_data_show['category__id'];
   $category__name =  $edit_data_show['category__name'];
   $category__entry__date =  $edit_data_show['category__entry__date'];



}
if(isset($_GET['ceta__name'])){
$new_category__id =  $_GET['category__id'];
$new_pname =  $_GET['ceta__name'];
$new_pentry_date =  $_GET['ceta__ent__date'];

  $update__sql = "UPDATE cate__table SET category__name='$new_pname', category__entry__date='$new_pentry_date' WHERE category__id=$new_category__id";


  if($mysql_conect->query($update__sql) ==true){
    $upd_output = "Your data is update";
  }else{
    $upd_output = "Your data is not update";

  }

}


?>



<div class="container mt-5">
    <div class="row">
    <h1>Update your product category :</h1>

        <div class="col-lg-4 mt-2">
<form method="get" action="edit_page.php">
  <div class="mb-3">
    <label class="form-label txt-bold">Category Name: </label>
    <input type="text" class="form-control"   name="ceta__name" value="<?php echo $category__name; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label txt-bold">Entry Date :</label>
    <input type="date" class="form-control" id="exampleInputPassword1" name="ceta__ent__date" value="<?php echo $category__entry__date; ?>">
  </div>
  <input type="text" class="form-control"   name="category__id" value="<?php echo $category__id; ?>" hidden>

  <button type="submit" class="btn btn-primary" name="submit" value="update">Update Data</button>
</form>
</div>

    </div>
<div class="small__width mt-2">
<?php if(isset($_GET['submit'])):?>
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading"> <?php  echo $upd_output;?> </h4>
    
    </div>
    <?php endif;?>
    </div>
</div>
<div class="show_data">
<a href="list_of_product.php">&#8592; Previous page</a>
</div>

<?php require_once 'include/footer.php';  ?>