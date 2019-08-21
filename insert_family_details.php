<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
	include '../db_connector.php'; 
	

	
		if(!empty($_POST["hof"])){
			$hofName = $_POST["hof"];
			$hofJob = $_POST["hofJob"];
			$nativePlace = $_POST["nativePlace"];
			$mobNum = $_POST["mobNum"];
			$dob = $_POST["dob"];
			$email = $_POST["email"];
			$address = $_POST["address"];
			if(!empty($_FILES)){
					//echo "herereeee";die;
					foreach($_FILES as $key => $value){
						//echo"<pre>";print_r($value);die;
						if($key=='hofImg'){	
							if(file_exists($_FILES[$key]['tmp_name'])){
								$dirname = '../images/family/';
								$path = $dirname.$value['name']; 
								// if( move_uploaded_file($_FILES["pic"]["tmp_name"], $path) )
								if(move_uploaded_file($_FILES[$key]["tmp_name"] , $dirname.$value['name'])){
									$img_sql = "INSERT INTO head_of_family(hof_name,hof_Job,hof_native_place,hof_mob_num,hof_dob,hof_email,hof_add,hof_img ) VALUES ('$hofName','$hofJob','$nativePlace','$mobNum','$dob','$email','$address','$value[name]')";
									if ($conn->query($img_sql) === TRUE) {
										
										$last_id = $conn->insert_id;
										
										
										$looCount = ((count(array_keys($_POST)) - 7 )/8) + 1;
										
										for($i=1; $i < $looCount; $i++){
											$memberName1 = $_POST["memberName".$i.""];
											$relWithHof1 = $_POST["relWithHof".$i.""];
											$memberDob1 = $_POST["memberDob".$i.""];
											$memberQua1 = $_POST["memberQua".$i.""];
											$memberJob1 = $_POST["memberJob".$i.""];
											$memberMarital1 = $_POST["memberMarital".$i.""];
											$memberMobNum1 = $_POST["memberMobNum".$i.""];
											$memberEmail1 = $_POST["memberEmail".$i.""];
											
											$memberImgName=0;
											foreach($_FILES as $key => $value){
												if($key=='memberImg'.$i.''){
												if(file_exists($_FILES[$key]['tmp_name'])){
													$memberImgName = $key;
													$dirname1 = '../images/member/';
													$path1 = $dirname1.$value['name']; 
												if(move_uploaded_file($_FILES[$key]["tmp_name"] , "$dirname1".$value['name'])){	
													$sqlMember = "INSERT INTO member_of_family(mof_id 	,mof_name,mof_rel,mof_dob,mof_qua,mof_job,mof_marital_status,mof_phone_num,mof_email,mof_img   ) VALUES ('$last_id','$memberName1','$relWithHof1','$memberDob1','$memberQua1','$memberJob1','$memberMarital1','$memberMobNum1','$memberEmail1','$value[name]')";
													if ($conn->query($sqlMember) === TRUE) {
														//header("Location: ../family-form.php");
														echo '<script type="text/javascript">
																alert("Details has been Saved Successfully");
																window.location="../family-form.php";
																</script>';
													}
													else{
														echo "Error: " . $sqlMember . "<br>" . $conn->error;
													}
												}
												}
												}
											}
											
											
											
											
											
										}
									}
									else{
										echo "Error: " . $img_sql . "<br>" . $conn->error;
									}
								}else{
									echo 'else';die;
								}
							}
						}
					}
					
				}
		}	
	$conn->close();
	echo "Successfully Submit";
?>