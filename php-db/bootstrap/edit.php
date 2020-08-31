<?php
include('../dbconnect.php');
$id=$_GET['id'];
$query="select * from members where id=:id";
$stmt=$conn->prepare($query);
$stmt->bindParam(':id',$id);
$stmt->execute();
// $row=$stmt->fetch(PDO::FETCH_OBJ);
$member=$stmt->fetch(PDO::FETCH_OBJ);
// var_dump($member);
$query="select * from languages";
$stmt=$conn->prepare($query);
$stmt->execute();
// $row=$stmt->fetch(PDO::FETCH_OBJ);
$languages=$stmt->fetchAll(PDO::FETCH_ASSOC);

$query="select * from classes";
$stmt=$conn->prepare($query);
$stmt->execute();
// $row=$stmt->fetch(PDO::FETCH_OBJ);
$classes=$stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


</head>
<body>


	<!-- edit member form -->
	<div class="container-fluid" id="Edit-Form">
		<div class="col-md-8 offset-md-2">
			<h2 class="text-muted text-center my-3"> Editing  Member</h2>

			<div class="mt-5">
				<form action="update.php" method="post" enctype="multipart/form-data">

					<input type="hidden" name="oldid" value="<?=$member->id?>">

					<input type="hidden" name="oldProfile" value="<?=$member->photo?>">

					<input type="hidden" name="oldLogo" value="<?=$member->logo?>">

					<input type="hidden" name="oldlanguage" value="<?=$member->language?>">



					<div class="form-group row">
					    <div class="col-sm-3">Profile</div>
					    <div class="col-sm-9">
					      <ul class="nav nav-tabs" id="myTab" role="tablist">
							  <li class="nav-item" role="presentation">
							    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Old Profile</a>
							  </li>
							  <li class="nav-item" role="presentation">
							    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">New Profile</a>
							  </li>
							  
							</ul>
							<div class="tab-content" id="myTabContent">
							  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							  	<img src="<?=$member->photo?>" width="200" height="100" alt="photo">
							  </div>
							  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							  	<input type="file"  class="form-control-file" name="photo" id="profile" >
							  </div>
							  
							</div>
					    </div>
					  </div>

					
						<div class="form-group row">
					    <div class="col-sm-3">Logo</div>
					    <div class="col-sm-9">
					      <ul class="nav nav-tabs" id="myTab" role="tablist">
							  <li class="nav-item" role="presentation">
							    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#logo-home" role="tab" aria-controls="home" aria-selected="true">Old Profile</a>
							  </li>
							  <li class="nav-item" role="presentation">
							    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#logo-profiles" role="tab" aria-controls="profile" aria-selected="false">New Profile</a>
							  </li>
							  
							</ul>
							<div class="tab-content" id="myTabContent">
							  <div class="tab-pane fade show active" id="logo-home" role="tabpanel" aria-labelledby="home-tab">
							  	<img src="<?=$member->logo?>" width="200" height="100" alt="photo">
							  </div>
							  <div class="tab-pane fade" id="logo-profiles" role="tabpanel" aria-labelledby="profile-tab">
							  	<input type="file"  class="form-control-file" name="logo" id="profile">
							  </div>
							  
							</div>
					    </div>
					  </div>

					  <div class="form-group row">
					    <label for="name" class="col-sm-3 col-form-label">Name</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="name"  value="<?=$member->name?>" name="name">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="dob" class="col-sm-3 col-form-label">Birthday</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="dob"  value="<?=$member->logo?>" name="birthday">
					    </div>
					  </div>
					  <fieldset class="form-group">
					    <div class="row">
					      <legend class="col-form-label col-sm-3 pt-0">Gender</legend>
					      <div class="col-sm-9">
					        <div class="form-check">
					          <input class="form-check-input" name="gender" type="radio"  id="male" value="male"  <?php echo ($member->gender=='male')? "checked":''?>>
					          <label class="form-check-label" for="male">
					            Male
					          </label>
					        </div>
					        <div class="form-check">
					          <input class="form-check-input" type="radio"  id="female" value="female" name="gender" <?php echo ($member->gender=='female')? "checked":''?>>
					          <label class="form-check-label" for="female">
					            Female
					          </label>
					        </div>
					       
					      </div>
					    </div>
					  </fieldset>
					  

					  <div class="form-group row">
					    <div class="col-sm-3">Favorite Language</div>
					    <div class="col-sm-9">
      <select name="language" class="form-control"  id="languages">
      	<?php foreach($languages as $language): ?>
	      <option value="<?=$language['id']?>"
	      	<?php 
	      	if($member->language_id ==$language['id'])
	      		echo "selected";

	      	?>

	      	><?=$language['name']?></option>
	      
	  <?php endforeach;?>
	   </select>
					    </div>
					  </div>


					  <div class="form-group row">
					    <div class="col-sm-3">Class</div>
					    <div class="col-sm-9">
      <select name="class" class="form-control"  id="languages">
      	<?php foreach($classes as $class): ?>
	      <option value="<?=$class['id']?>" 
	      	<?php 
	      	if($member->class_id ==$class['id'])
	      		echo "selected";

	      	?>

	      	><?=$class['name']?></option>
	      
	  <?php endforeach;?>
	   </select>
					    </div>
					  </div>

					  <div class="form-group row">
					    <div class="col-sm-10 col-md-12">
					      <button type="submit" class=" text-center form-control btn btn-primary">Update Now</button>
					    </div>
					  </div>

					 
					  

					</form>
			</div>
		</div>
	</div>


<!-- JS, Popper.js, and jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>