<?php 
 $conn=mysqli_connect("localhost","root","","ecommerce");

// getting the categories
 function GetCats(){
 	global $conn;

 	$select_cats="SELECT * FROM categories";
 	$result_cats=mysqli_query($conn, $select_cats);
 	while ($row_cats=mysqli_fetch_array($result_cats)) {
 		$cat_id   =$row_cats['cat_id'];
 		$cat_title=$row_cats['cat_title'];
 		echo "<li><a href='#'>$cat_title</a></li>";
 	}
 }

// getting the brands
function GetBrands(){
	global $conn;

	$select_brands="SELECT * FROM brands";
	$result_brands=mysqli_query($conn, $select_brands);
	while($row_brands=mysqli_fetch_array($result_brands)){
		$brand_id   =$row_brands['brand_id'];
		$brand_title=$row_brands['brand_title'];
		echo "<li><a href='#'>$brand_title</a></li>";
	}
}




?>