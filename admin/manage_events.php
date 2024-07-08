<?php
ob_start(); 
require('top.inc.php');
isAdmin();
$title='';
$shortNote='';
$body='';
$category='';
$image='';
$msg='';
$venue='';
$date='';
$speaker='';
$organizedby=''; 
$link=''; 
$file_link=''; 
$image_required='required';
if(isset($_GET['id']) && $_GET['id']!=''){
	$id=get_safe_value($con,$_GET['id']);
	$image_required='';
	$res=mysqli_query($con,"select * from events where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$title=$row['title'];
		$shortNote=$row['shortNote'];
		$body=$row['body'];
		$category=$row['category'];
		$image=$row['image'];
		$venue=$row['venue'];
		$date=$row['date'];
		$speaker=$row['speaker'];
		$organizedby=$row['organizedby'];
		$link=$row['link'];
		$file_link=$row['file_link'];
	}else{
		header('location:events.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$title=get_safe_value($con,$_POST['title']);
	$shortNote=get_safe_value($con,$_POST['shortNote']);
	$body=get_safe_value($con,$_POST['body']);
	$category=get_safe_value($con,$_POST['category']);
	$venue=get_safe_value($con,$_POST['venue']);
	$date=get_safe_value($con,$_POST['date']);
	$speaker=get_safe_value($con,$_POST['speaker']);
	$organizedby=get_safe_value($con,$_POST['organizedby']);
	$link=get_safe_value($con,$_POST['link']);
	$file_link=get_safe_value($con,$_POST['file_link']);
	
	if(isset($_GET['id']) && $_GET['id']==0){
		if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
			$msg="Please select only png,jpg and jpeg image format";
		}
	}else{
		if($_FILES['image']['type']!=''){
				if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
				$msg="Please select only png,jpg and jpeg image format";
			}
		}
	}
	
	$msg="";
	
	if($msg==''){
		$target_dir = "uploads/";

		if (!is_dir($target_dir)) {
			mkdir($target_dir, 0777, true);
		}
		if(isset($_GET['id']) && $_GET['id']!=''){
			if($_FILES['image']['name']!=''){
				$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $image);
				mysqli_query($con, "UPDATE events SET title='$title', shortNote='$shortNote', body='$body', category='$category', image='$image', venue='$venue', date='$date', speaker='$speaker', organizedby='$organizedby' , link='$link', file_link='$file_link' WHERE id='$id'");
			}else{
				mysqli_query($con, "UPDATE events SET title='$title', shortNote='$shortNote', body='$body', category='$category', venue='$venue', date='$date', speaker='$speaker', organizedby='$organizedby', link='$link',file_link='$file_link' WHERE id='$id'");
			}
		}else{
			$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $image);
			mysqli_query($con, "INSERT INTO events (title, shortNote, body, category, image, status, venue, date, speaker, organizedby, link) VALUES ('$title', '$shortNote', '$body', '$category', '$image', '1', '$venue', '$date', '$speaker','$organizedby', '$link', '$file_link')");
		}
		header('location:events.php');
		die();
	}
	ob_end_flush();
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Events</strong><small> Form</small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="title" class="form-control-label">Title</label>
									<input type="text" name="title" placeholder="Enter title" class="form-control" required value="<?php echo $title?>">
								</div>
								<div class="form-group">
									<label for="shortNote" class="form-control-label">Short Note</label>
									<input type="text" name="shortNote" placeholder="Short Note" class="form-control" required value="<?php echo $shortNote?>">
								</div>
								<div class="form-group">
									<label for="body" class="form-control-label">Body</label>
									<textarea name="body" placeholder="Enter Body" class="form-control" name="body" required id="editor1"><?php echo $body?></textarea>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label for="category" class="form-control-label">Category</label>
											<select class="form-control" name="category" id="category">
												<option value="">-- Select Category --</option>
												<option value="seminars" <?php echo ($category == 'seminars') ? 'selected' : ''; ?>>Seminars</option>
												<option value="workshop_talks_open_colloquium" <?php echo ($category == 'workshop_talks_open_colloquium') ? 'selected' : ''; ?>>Workshop/Talks/Open Colloquium</option>
												<option value="outreach_events_conferences" <?php echo ($category == 'outreach_events_conferences') ? 'selected' : ''; ?>>Outreach Events/Conferences</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="venue" class="form-control-label">Venue</label>
											<input type="text" name="venue" placeholder="Enter venue" class="form-control" value="<?php echo $venue?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label for="date" class="form-control-label">From Date - To Date</label>
											<input type="text" name="date" placeholder="Enter Date" class="form-control" value="<?php echo $date?>">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="speaker" class="form-control-label">Speaker</label>
											<input type="text" name="speaker" placeholder="Enter Speaker Name" class="form-control" value="<?php echo $speaker?>">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="organizedby" class="form-control-label">Organized by</label>
									<input type="text" name="organizedby" placeholder="Enter Organized by" class="form-control" value="<?php echo $organizedby?>">
								</div>
								<div class="form-group">
									<label for="image" class=" form-control-label">Image</label>
									<input type="file" name="image" placeholder="Enter image" class="form-control" <?php echo  $image_required?> value="<?php echo $image?>">
									<?php
										if($image!=''){
											echo "<a target='_blank' href='uploads/" . $image . "'><img width='150px' src='uploads/" . $image . "'/></a>";

										}
										?>
								</div>
								<div class="form-group">
									<label for="link" class=" form-control-label">External Link / Url</label>
									<input type="url" name="link" placeholder="Enter Link / Url" class="form-control" value="<?php echo $link?>">
								</div>
								<div class="form-group">
									<label for="file_link" class=" form-control-label">Attachment File Link</label>
									<input type="url" name="file_link" placeholder="attachment Link / Url" class="form-control" value="<?php echo $file_link?>">
								</div>
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
<script>
  CKEDITOR.replace( 'editor1' );
</script>
<?php
require('footer.inc.php');
?>