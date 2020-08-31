<?php

include('dbconnect.php');

$id=$_GET['id'];
$query="SELECT * FROM members WHERE id=:id";
$stmt=$conn->prepare($query);
$stmt->bindParam(':id',$id);
$stmt->execute();
$member=$stmt->fetch(PDO::FETCH_OBJ);
echo $member->name;



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
					<input type="hidden" name="oldid" value="<?=$member->id;?>">

					<input type="hidden" name="oldProfile" value="<?=$member->photo;?>">

					<input type="hidden" name="oldLogo" value="<?=$member->logo;?>">

					<div class="form-group row">
					    <div class="col-sm-3">Profile</div>
					    <div class="col-sm-9">
					      <ul class="nav nav-tabs" id="myTab" role="tablist">
							  <li class="nav-item" role="presentation">
							    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#profile-home" role="tab" aria-controls="home" aria-selected="true">Home</a>
							  </li>
							  <li class="nav-item" role="presentation">
							    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#new-profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
							  </li>
							  
							</ul>
							<div class="tab-content" id="myTabContent">
							  <div class="tab-pane fade show active" id="profile-home" role="tabpanel" aria-labelledby="home-tab">
							  	<img src="<?=$member->photo?>" alt="" width="200" height="150">
							  </div>
							  <div class="tab-pane fade" id="new-profile" role="tabpanel" aria-labelledby="profile-tab">
							  	<input type="file" name="photo" >
							  </div>
							  
							</div>
					    </div>
					  </div>

					  <div class="form-group row">
					    <div class="col-sm-3">Logo</div>
					    <div class="col-sm-9">
					      <ul class="nav nav-tabs" id="myTab" role="tablist">
							  <li class="nav-item" role="presentation">
							    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#logo-home" role="tab" aria-controls="home" aria-selected="true">Old logo</a>
							  </li>
							  <li class="nav-item" role="presentation">
							    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#new-logo" role="tab" aria-controls="profile" aria-selected="false">New logo</a>
							  </li>
							  
							</ul>
							<div class="tab-content" id="myTabContent">
							  <div class="tab-pane fade show active" id="logo-home" role="tabpanel" aria-labelledby="home-tab">
							  	<img src="<?=$member->logo?>" alt="" width="200" height="150">
							  </div>
							  <div class="tab-pane fade" id="new-logo" role="tabpanel" aria-labelledby="profile-tab">
							  	<input type="file" name="logo" >
							  </div>
							  
							</div>
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="name" class="col-sm-3 col-form-label">Name</label>
					    <div class="col-sm-9">
					      <input name="name" type="text" class="form-control" id="name" value="<?=$member->name?>">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="dob" class="col-sm-3 col-form-label">Birthday</label>
					    <div class="col-sm-9">
					      <input type="text" name="birthday"class="form-control" id="dob" value="<?=$member->birthday ?>">
					    </div>
					  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-3 pt-0">Gender</legend>
      <div class="col-sm-9">
        <div class="form-check">
          <input name="gender" class="form-check-input" type="radio"  id="male" value="male" 
          <?php echo ($member->gender=='male')? 'checked':'';?>
          >
          <label class="form-check-label" for="male">
            Male
          </label>
        </div>
        <div class="form-check">
          <input name="gender" class="form-check-input" type="radio"  id="female" value="female" 
			<?php echo ($member->gender=='female')? 'checked':'';?>
          >
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
		<?php 
			$query="SELECT * FROM languages";
			$stmt=$conn->prepare($query);
			$stmt->execute();
			$languages=$stmt->fetchAll(PDO::FETCH_ASSOC);
			// var_dump($languages);
		?>			    	


      <select name="language" class="form-control"  id="languages">
      	<?php foreach($languages as $language){ ?>
	      <option value="<?php echo $language['id']; ?>"
	      	<?php

	      	if($member->language_id == $language['id']){
	      		echo "selected";
	      	}
	      	?>

	      	>
	      	<?php echo $language['name']; ?>
	      </option>
	      
	  <?php  } ?>

 </select>
					    </div>
					  </div>


					  <div class="form-group row">
					    <div class="col-sm-3">Classes</div>
					    <div class="col-sm-9">
		<?php 
			$query="SELECT * FROM classes";
			$stmt=$conn->prepare($query);
			$stmt->execute();
			$classes=$stmt->fetchAll(PDO::FETCH_ASSOC);
			// var_dump($languages);
		?>			    	


      <select name="class" class="form-control"  id="languages">
      	<?php foreach($classes as $class){ ?>
	      <option value="<?php echo $class['id']; ?>"
				<?php
			      	if($member->class_id == $class['id']){
			      		echo "selected";
			      	}
			     ?>
	      	>
	      	<?php echo $class['name']; ?>
	      </option>
	      
	  <?php  } ?>
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
<script>
	$(document).ready(function(){
		 // $('#Edit-Form').hide();
	})
</script>
</body>
</html>