<?php

include('dbconnect.php');

var_dump($conn);

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
	<!-- add member form -->
	<div class="container-fluid" id="Add-Form">
		<div class="col-md-8 offset-md-2">
			<h2 class="text-muted text-center my-3"> Adding New Member</h2>

			<div class="mt-5">
	<form
action="create.php" method="post" enctype="multipart/form-data" 
	>
					<div class="form-group row">
					    <div class="col-sm-3">Profile</div>
					    <div class="col-sm-9">
					      <div class="form-group">
						    <input type="file"
						name="photo"
						      class="form-control-file" id="profile">
						  </div>
					    </div>
					  </div>
					  <div class="form-group row">
					    <div class="col-sm-3">Logo</div>
					    <div class="col-sm-9">
					      <div class="form-group">
						    <input type="file"
						name="logo"
						      class="form-control-file" id="profile">
						  </div>
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="name" class="col-sm-3 col-form-label">Name</label>
					    <div class="col-sm-9">
		<input type="text" name="name" class="form-control" id="name">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="dob" class="col-sm-3 col-form-label">Birthday</label>
					    <div class="col-sm-9">
      <input type="date" name="birthday" class="form-control" id="dob">
					    </div>
					  </div>
					  <fieldset class="form-group">
					    <div class="row">
					      <legend class="col-form-label col-sm-3 pt-0">Gender</legend>
					      <div class="col-sm-9">
        <div class="form-check">
          <input name="gender" class="form-check-input" type="radio"  id="male" value="male" checked>
          <label class="form-check-label" for="male">
            Male
          </label>
        </div>
        <div class="form-check">
          <input name="gender" class="form-check-input" type="radio"  id="female" value="female">
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
	      <option value="<?php echo $language['id']; ?>">
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
	      <option value="<?php echo $class['id']; ?>">
	      	<?php echo $class['name']; ?>
	      </option>
	      
	  <?php  } ?>
	   </select>
					    </div>
					  </div>

					  <div class="form-group row">
					    <div class="col-sm-10 col-md-12">
					      <button type="submit" class=" text-center form-control btn btn-primary">Add Now</button>
					    </div>
					  </div>

					 
					  

					</form>
			</div>
		</div>
	</div>

	<!-- edit member form -->
	<div class="container-fluid" id="Edit-Form">
		<div class="col-md-8 offset-md-2">
			<h2 class="text-muted text-center my-3"> Editing  Member</h2>

			<div class="mt-5">
				<form>
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
							  	<img src="banner.jpg" alt="" width="200" height="150">
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
							  	<img src="banner.jpg" alt="" width="200" height="150">
							  </div>
							  <div class="tab-pane fade" id="new-logo" role="tabpanel" aria-labelledby="profile-tab">
							  	<input type="file" name="photo" >
							  </div>
							  
							</div>
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="name" class="col-sm-3 col-form-label">Name</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="name">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="dob" class="col-sm-3 col-form-label">Birthday</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="dob">
					    </div>
					  </div>
					  <fieldset class="form-group">
					    <div class="row">
					      <legend class="col-form-label col-sm-3 pt-0">Gender</legend>
					      <div class="col-sm-9">
					        <div class="form-check">
					          <input class="form-check-input" type="radio"  id="male" value="male" checked>
					          <label class="form-check-label" for="male">
					            Male
					          </label>
					        </div>
					        <div class="form-check">
					          <input class="form-check-input" type="radio"  id="female" value="female">
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
					      <select class="form-control"  id="languages">
						      <option value="html">html</option>
						      <option value="css">css</option>
						      <option value="js">js</option>
						      <option value="vue">vue</option>
						      <option value="jquery">jquery</option>
						      <option value="laravel">laravel</option>
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

	<!-- member list table -->
	<div class="container my-4">
		<h2 class="text-center">Member List</h2>
		<table class="table table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">photo</th>
		      <th scope="col">Name</th>
		      <th scope="col">Birthday</th>
		      <th scope="col">Gender</th>
		      <th scope="col">Language</th>
		      <th scope="col">Class</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php
		  	$query="select * from members";
			$stmt=$conn->prepare($query);
			$stmt->execute();
			$members=$stmt->fetchAll(PDO::FETCH_ASSOC);

		  	?>
		    <?php $i=1;?>
		<?php foreach($members as $member):?>
		    <tr>
		      <th scope="row"><?=$i++?></th>
		      <td><img src="<?=$member['photo']?>" width="50" height="50"></td>
		      <td><?=$member['name']?></td>
		      <td><?=$member['birthday']?></td>
		      <td><?=$member['gender']?></td>
		      <td><?=$member['language_id']?></td>
		      <td><?=$member['class_id']?></td>
		      <td>

		

      <a href="delete.php?id=<?=$member['id']?>"  class="btn btn-danger">Delete</a>
      	<a href="edit.php?id=<?=$member['id']?>"  class="btn btn-warning">Edit</a>

		      </td>
		    </tr>
		<?php endforeach;?>
		    
		  </tbody>
		</table>
	</div>

	



	<!-- JS, Popper.js, and jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>
	$(document).ready(function(){
		 $('#Edit-Form').hide();
	})
</script>
</body>
</html>