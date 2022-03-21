<?php require_once 'lib/dbcon.php'; ?>
<?php require_once 'include/list__header.php';  ?>


     <h1 class="ml-10">Show your product list :</h1>



<?php
$select="SELECT * FROM cate__table";

$query = $mysql_conect->query($select);

 
echo"<table class=' ml-5'> <tr><th>Name of Product </th> <th>Entry Date of Product</th><th>Action</th></tr>";
while($alldata = mysqli_fetch_assoc($query)){
     $output_id = $alldata['category__id'];
     $output_name = $alldata['category__name'];
     $output_date = $alldata['category__entry__date'];

     echo"<tr>
     <td>$output_name</td>
     <td> $output_date</td>
     <td> <a href='edit_page.php?id=$output_id'>Edit</a>   </a></td>
     </tr>";
}

echo"</table>";
?>
<div class="show_data">
<a href="add_category.php"> 	&#8592; Previous Page</a>
</div>
<?php require_once './include/footer.php';  ?>



