<!DOCTYPE html>

<html>
<?php 
	include 'head.php';
	include 'db_connector.php';	
?>

<body>
<div class="page-wrap">

    <?php include 'header.php';?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 family-member-form">
			    <h3 class="header-text">Fill Details</h3>
				<form action="action/insert_family_details.php" method="post" name="fundTypeForm" enctype="multipart/form-data">
					<div class="form-group">
						<label>Head Of Family Name*</label>
						<input type="text" name="hof" class="form-control" placeholder="Enter head of family name" required>
					</div>
						<div class="form-group">
						<label>Job Title</label>
						<input type="text" name="hofJob" class="form-control" placeholder="Enter head of family name" required>
					</div>
					<div class="form-group">
						<label>Native Place*</label>
						<input type="text" name="nativePlace" class="form-control" placeholder="Enter Native Place" required>
					</div>
					<div class="form-group">
						<label>Mobile Number*</label>
						<input type="text" name="mobNum" class="form-control" placeholder="Enter Mobile Number" required>
					</div>
					<div class="form-group">
						<label>D.O.B*</label>
						<input type="date" name="dob" class="form-control k" placeholder="Enter D.O.B(yyyy-mm-dd)"  required>
					</div>
					<div class="form-group">
						<label>Email Id*</label>
						<input type="text" name="email" class="form-control" placeholder="Enter Email" required>
					</div>
						<div class="form-group">
						<label>Password*</label>
						<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
					</div>
					<div class="form-group">
						<label class="address">Address</label>
						<textarea name="address" rows="4"></textarea>
					</div>
					<div class="form-group">
						<label>Upload Photo</label>
						<input type="file" name="hofImg" id="hofImg">
					</div>
					<div class="member-form">
						
					</div>
						<a href="javascript:void(0)" class="add-member-btn">Add Member<i class="icon-plus"></i></a>
					<div class="form-group">
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</form> 
			</div>
		</div>
	</div>
	<section>
		
	</section>
    <?php include 'footer.php';?>
</div>

<!-- Javascript Files --> 

<script src="js/jquery-1.11.0.min.js"></script> 
<script src="../../../ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/dscountdown.min.js"></script> 
<script src="js/jquery.appear.js"></script> 
<script src="js/jquery.prettyPhoto.js"></script> 
<script src="js/jquery.carouFredSel-6.2.1-packed.js"></script> 

<!-- revolution slider --> 

<script src="js/jquery.themepunch.revolution.min.js"></script> 
	<script src="js/script.js"></script> 
	<script src="js/jquery.bxslider.min.js"></script> 
	<script src="js/custom.js"></script> 
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script> 
	<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			
			var a=0;
			$(".add-member-btn").click(function(){
				a = a + 1;				
				<!--$(".file-list div.input-field").append("<input type='file' name='fileToUpload"+a+"' id='fileToUpload"+a+"'>");-->
				
				
				$(".member-form").append("<h4>Fill New Family Member Detail</h4><div class='form-group'><label>Member Name*</label><input type='text' name='memberName"+a+"' class='form-control' placeholder='Enter Member Name' required></div><div class='form-group'><label>Relation With Head Of Family*</label><input type='text' name='relWithHof"+a+"' class='form-control' placeholder='Enter Relation' required></div><div class='form-group'><label>D.O.B*</label><input type='date'  name='memberDob"+a+"' class='form-control kk' placeholder='Enter Member D.O.B(yyyy-mm-dd)' id='datepicker-5' required></div><div class='form-group'><label>Qualification*</label><input type='text' name='memberQua"+a+"' class='form-control' placeholder='Enter Member Qualification' required></div><div class='form-group'><label>job</label><input type='text' name='memberJob"+a+"' class='form-control' placeholder='Enter Job Detail'></div><div class='form-group'><label>Marital Status*</label><input type='text' name='memberMarital"+a+"' class='form-control' placeholder='Enter Yes Or No' required></div><div class='form-group'><label>Mobile Number*</label><input type='text' name='memberMobNum"+a+"' class='form-control' placeholder='Enter Mobile Number' required></div><div class='form-group'><label>Email Id*</label><input type='text' name='memberEmail"+a+"' class='form-control' placeholder='Enter E-mail' required></div><div class='form-group'><label>Upload Member Photo</label><input type='file' name='memberImg"+a+"'></div>");
			});
			
			
			$(function() {
				$( "#datepicker-3" ).datepicker({
				   appendText:"(yy-mm-dd)",
				   dateFormat:"yy-mm-dd"
				});
			 });
			 $('.kk').click(function(){
				 $('.kk').css('background','red');
			 })
			
			
			
		})
	</script>
	
</body>

<!-- Mirrored from demos.megawpthemes.com/html-demo/rise/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 May 2017 05:35:35 GMT -->
</html>
