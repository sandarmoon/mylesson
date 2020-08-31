
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
				action="create.php"
					  method="post"
					enctype="multipart/form-data" 
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
					      <select name="language" class="form-control"  id="languages">
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
		<form action="update.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="oldid">

					<input type="hidden" name="oldProfile">

					<input type="hidden" name="oldLogo">

					<div class="form-group row">
					    <div class="col-sm-3">Profile</div>
					    <div class="col-sm-9">
					      <div class="form-group">
						    <input type="file"  class="form-control-file" name="photo" id="profile">
						  </div>
					    </div>
					  </div>

					  <div class="form-group row">
					    <div class="col-sm-3">Logo</div>
					    <div class="col-sm-9">
					      <div class="form-group">
						    <input type="file"  class="form-control-file" name="logo" id="profile">
						  </div>
					    </div>
					  </div>

					  <div class="form-group row">
					    <label for="name" class="col-sm-3 col-form-label">Name</label>
					    <div class="col-sm-9">
					      <input type="text"
					      name="name" class="form-control" id="name">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="dob" class="col-sm-3 col-form-label">Birthday</label>
					    <div class="col-sm-9">
					      <input type="text"
					      name="birthday" class="form-control" id="dob">
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
		      <select name="language" class="form-control"  id="languages">
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
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		    
		    
		  </tbody>
		</table>
	</div>

	



	<!-- JS, Popper.js, and jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>
	$(document).ready(function(){
		getData();

		$('tbody').on('click','.btn-delete',function(){
			var id=$(this).data('id');//id
		$.get('delete.php',{index:id},function(res){
			console.log(res);
			getData();
		})
	})


	$('tbody').on('click','.btn-edit',function(){
		//hide and show
		$('#Add-Form').hide();
		$('#Edit-Form').show();

		var id=$(this).data('id');
		$.get('list.json',function(res){
			var datatype=typeof res;
			var data;
				if(datatype =='object'){
					data=res;
				}else{
					data=JSON.parse(res);
					
				}
				var array=data[id];

				var profiles=array['profile'];
				var logo=array['logo'];
				var name=array['name'];
				var birthday=array['birthday'];
				var gender=array['gender'];
				var language=array['language'];

	$('#Edit-Form input[name="name"]').val(name);
	$('#Edit-Form input[name="birthday"]').val(birthday);

		if(gender=="male"){
			$('#Edit-Form input[value="male"]').prop('checked','checked');
		}else{
			$('#Edit-Form input[value="female"]').prop('checked','checked');
		}

		$('#Edit-Form select').val(language);

$('#Edit-Form input[name="oldid"]').val(id);
$('#Edit-Form input[name="oldProfile"]').val(profiles);
$('#Edit-Form input[name="oldLogo"]').val(logo);
		

		})

	})




		$('#Edit-Form').hide();
		getData();
		function getData(){
			 alert('show Data');
			$.get('list.json',function(res){
				// console.log(res);
				var datatype=typeof res;
		var data;var j=1;var html='';

				if(datatype =='object'){
					data=res;
				}else{
					data=JSON.parse(res);
					
				}

				$.each(data,function(i,v){
					// console.log(v.name);
				 html+=` <tr>
			      <th scope="row">${j++}</th>
			      <td><img src="${v.profile}" width="50" height="50"></td>
			      <td>${v.name}</td>
			      <td>${v.birthday}</td>
			      <td>${v.gender}</td>
			      <td>${v.language}</td>
			      <td>
			      	<button data-id="${i}" class="btn btn-danger btn-delete">Delete</button>
			 <button data-id="${i}" class="btn btn-warning btn-edit">Edit</button>
			      </td>
			    </tr>`;

				})

				$('tbody').html(html);

			});
		}
	})
</script>










</body>
</html>