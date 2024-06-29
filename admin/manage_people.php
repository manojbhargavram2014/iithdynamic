<?php
   ob_start(); 
   require('top.inc.php');
   isAdmin();
   $image='';
   $fb_link='';
   $li_link='';
   $sk_link='';
   $tw_link='';
   $email='';
   $mobile='';
   $office='';
   $web_link='';
   $name=''; 
   $designation='';
   $aor='';
   $biography='';
   $education='';
   $prof_exp='';
   $awards='';
   $latest_publications='';
   $others=''; 
   $image_required='required';
   $msg='';
   if(isset($_GET['id']) && $_GET['id']!=''){
   	$id=get_safe_value($con,$_GET['id']);
   	$image_required='';
   	$res=mysqli_query($con,"select * from people where id='$id'");
   	$check=mysqli_num_rows($res);
   	if($check>0){
   		$row=mysqli_fetch_assoc($res);
        $image=$row['image'];
        $fb_link=$row['fb_link'];
        $li_link=$row['li_link'];
        $sk_link=$row['sk_link'];
        $tw_link=$row['tw_link'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $office=$row['office'];
        $web_link=$row['web_link'];
        $name=$row['name'];
        $designation=$row['designation'];
        $aor=$row['aor'];
        $biography=$row['biography'];
        $education=$row['education'];
        $prof_exp=$row['prof_exp'];
        $awards=$row['awards'];
        $latest_publications=$row['latest_publications'];
        $others=$row['others'];
   	}else{
   		header('location:people.php');
   		die();
   	}
   }
   
   if(isset($_POST['submit'])){
   	$image=get_safe_value($con,$_POST['image']);
    $fb_link=get_safe_value($con,$_POST['fb_link']);
    $li_link=get_safe_value($con,$_POST['li_link']);
    $sk_link=get_safe_value($con,$_POST['sk_link']);
    $tw_link=get_safe_value($con,$_POST['tw_link']);
    $email=get_safe_value($con,$_POST['email']);
    $mobile=get_safe_value($con,$_POST['mobile']);
    $office=get_safe_value($con,$_POST['office']);
    $web_link=get_safe_value($con,$_POST['web_link']);
    $name=get_safe_value($con,$_POST['name']);
    $designation=get_safe_value($con,$_POST['designation']);
    $aor=get_safe_value($con,$_POST['aor']);
    $biography=get_safe_value($con,$_POST['biography']);
    $education=get_safe_value($con,$_POST['education']);
    $prof_exp=get_safe_value($con,$_POST['prof_exp']);
    $awards=get_safe_value($con,$_POST['awards']);
    $latest_publications=get_safe_value($con,$_POST['latest_publications']);
    $others=get_safe_value($con,$_POST['others']);
   	
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
   	
       if ($msg == '') {
           $target_dir = "people/";
          
           if (!is_dir($target_dir)) {
               mkdir($target_dir, 0777, true);
           }
       
           if (isset($_GET['id']) && $_GET['id'] != '') {
               $event_id = get_safe_value($con, $_GET['id']);
               if ($_FILES['image']['name'] != '') {
                   $image = rand(111111111, 999999999) . '_' . $_FILES['image']['name'];
                   move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $image);
                   mysqli_query($con, "UPDATE people SET image = '$image', fb_link = '$fb_link', li_link = '$li_link', sk_link = '$sk_link', tw_link = '$tw_link', email = '$email', mobile = '$mobile', office = '$office', web_link = '$web_link', name = '$name', designation = '$designation', aor = '$aor', biography = '$biography', education = '$education', prof_exp = '$prof_exp', awards = '$awards', latest_publications = '$latest_publications', others = '$others' WHERE id='$id'");
               } else {
                   mysqli_query($con, "UPDATE people SET fb_link = '$fb_link', li_link = '$li_link', sk_link = '$sk_link', tw_link = '$tw_link', email = '$email', mobile = '$mobile', office = '$office', web_link = '$web_link', name = '$name', designation = '$designation', aor = '$aor', biography = '$biography', education = '$education', prof_exp = '$prof_exp', awards = '$awards', latest_publications = '$latest_publications', others = '$others' WHERE id='$id'");
               }
           } else {
               $image = rand(111111111, 999999999) . '_' . $_FILES['image']['name'];
               move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $image);
       
               mysqli_query($con, "INSERT INTO people (image, fb_link, li_link, sk_link, tw_link, email, mobile, office, web_link, name, designation, aor, biography, education, prof_exp, awards, latest_publications, others) VALUES ('$image', '$fb_link', '$li_link', '$sk_link', '$tw_link', '$email', '$mobile', '$office', '$web_link', '$name', '$designation', '$aor', '$biography', '$education', '$prof_exp', '$awards', '$latest_publications', '$others')");
           }
           header('location:people.php');
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
               <div class="card-header"><strong>People</strong><small> Form</small></div>
               <form method="post" enctype="multipart/form-data">
                  <div class="card-body card-block">
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="form-group">
                              <label for="name" class="form-control-label">Name</label>
                              <input type="text" name="name" placeholder="Enter name" class="form-control" required value="<?php echo $name?>">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label for="name" class="form-control-label">Email</label>
                              <input type="email" name="email" placeholder="Enter name" class="form-control" required value="<?php echo $email?>">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label for="name" class="form-control-label">Mobile</label>
                              <input type="tel" name="mobile" placeholder="Enter name" class="form-control" required value="<?php echo $mobile?>">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label for="name" class="form-control-label">Office</label>
                              <input type="text" name="office" placeholder="Enter name" class="form-control" required value="<?php echo $office?>">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label for="name" class="form-control-label">Designation</label>
                              <input type="text" name="designation" placeholder="Enter name" class="form-control" required value="<?php echo $designation?>">
                           </div>
                        </div>
                        <div class="col-lg-3">
                           <div class="form-group">
                              <label for="name" class="form-control-label">Facebook Link</label>
                              <input type="url" name="fb_link" placeholder="Enter name" class="form-control"  value="<?php echo $fb_link?>">
                           </div>
                        </div>
                        <div class="col-lg-3">
                           <div class="form-group">
                              <label for="name" class="form-control-label">Linkedin Link</label>
                              <input type="url" name="li_link" placeholder="Enter name" class="form-control"  value="<?php echo $li_link?>">
                           </div>
                        </div>
                        <div class="col-lg-3">
                           <div class="form-group">
                              <label for="name" class="form-control-label">Skype Link</label>
                              <input type="url" name="sk_link" placeholder="Enter name" class="form-control"  value="<?php echo $sk_link?>">
                           </div>
                        </div>
                        <div class="col-lg-3">
                           <div class="form-group">
                              <label for="name" class="form-control-label">Twitter Link</label>
                              <input type="url" name="tw_link" placeholder="Enter name" class="form-control"  value="<?php echo $tw_link?>">
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="aor" class="form-control-label">Areas Of Research</label>
                        <textarea name="aor" placeholder="Enter Body" class="form-control" required id="editor1"><?php echo $aor?></textarea>
                     </div>
                     <div class="form-group">
                        <label for="biography" class="form-control-label">Biography</label>
                        <textarea name="biography" placeholder="Enter Body" class="form-control" required id="editor2"><?php echo $biography?></textarea>
                     </div>
                     <div class="form-group">
                        <label for="education" class="form-control-label">Education</label>
                        <textarea name="education" placeholder="Enter Body" class="form-control" required id="editor3"><?php echo $education?></textarea>
                     </div>
                     <div class="form-group">
                        <label for="prof_exp" class="form-control-label">Professional Experience</label>
                        <textarea name="prof_exp" placeholder="Enter Body" class="form-control" required id="editor4"><?php echo $prof_exp?></textarea>
                     </div>
                     <div class="form-group">
                        <label for="awards" class="form-control-label">Awards & Honours</label>
                        <textarea name="awards" placeholder="Enter Body" class="form-control" required id="editor5"><?php echo $awards?></textarea>
                     </div>
                     <div class="form-group">
                        <label for="latest_publications" class="form-control-label">Latest Publications</label>
                        <textarea name="latest_publications" placeholder="Enter Body" class="form-control" required id="editor6"><?php echo $latest_publications?></textarea>
                     </div>
                     <div class="form-group">
                        <label for="others" class="form-control-label">Others</label>
                        <textarea name="others" placeholder="Enter Body" class="form-control" required id="editor7"><?php echo $others?></textarea>
                     </div>
                     <div class="form-group">
                        <label for="image" class="form-control-label">Image</label>
                        <div class="custom-file">
                           <input type="file" name="image" id="image" class="custom-file-input" <?php echo $image_required ?> value="<?php echo $image ?>">
                           <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                        <?php if ($image != ''): ?>
                        <div class="mt-2">
                           <a target="_blank" href="people/<?php echo $image; ?>">
                           <img class="img-thumbnail" width="150px" src="people/<?php echo $image; ?>" />
                           </a>
                        </div>
                        <?php endif; ?>
                     </div>
                     <script>
                        // JavaScript to update the label with the file name
                        document.querySelector('.custom-file-input').addEventListener('change', function(e) {
                            var fileName = document.getElementById("image").files[0].name;
                            var nextSibling = e.target.nextElementSibling
                            nextSibling.innerText = fileName
                        })
                     </script>
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
   for (let i = 1; i <= 7; i++) {
      CKEDITOR.replace('editor' + i);
   }
</script>
<?php
   require('footer.inc.php');
   ?>