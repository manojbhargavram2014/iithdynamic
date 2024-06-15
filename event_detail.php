<?php include('header.php') ;
 include "./connection.inc.php";
function get_safe_value($con,$str){
	if($str!=''){
		$str=trim($str);
		return mysqli_real_escape_string($con,$str);
	}
}?>
<script>
   if (!window.location.search.includes('id=')) {
    window.location.href = 'seminars_2024.php';
}

</script>
<?php
if(isset($_GET['id']) && $_GET['id']!=''){
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from events where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
	}
   else{
		header('location:seminars_2024.php');
		die();
	}
}

?>

<div class="kingster-page-wrapper" id="kingster-page-wrapper">
   <div class="kingster-blog-title-wrap  kingster-style-custom kingster-feature-image" style="background-image: url(./admin/uploads/<?php echo $row['image']?>) ;">
      <div class="kingster-header-transparent-substitute"></div>
      <div class="kingster-blog-title-overlay" style="opacity: 0.01 ;"></div>
      <div class="kingster-blog-title-bottom-overlay"></div>
      <div class="kingster-blog-title-container kingster-container">
         <div class="kingster-blog-title-content kingster-item-pdlr" style="padding-top: 400px ;padding-bottom: 80px ;">
            <header class="kingster-single-article-head clearfix">
               <div class="kingster-single-article-head-right">
                  <h1 class="kingster-single-article-title"><?php echo $row['title'] ?></h1>
               </div>
            </header>
         </div>
      </div>
   </div>
   <div class="kingster-breadcrumbs">
      <div class="kingster-breadcrumbs-container kingster-container">
         <div class="kingster-breadcrumbs-item kingster-item-pdlr">
            <span property="itemListElement" typeof="ListItem">
               <a property="item" href="index.php" class="home"><span property="name">Home</span></a>
               <meta property="position" content="1">
            </span>
            &gt;
            <span property="itemListElement" typeof="ListItem">
               <a  href="seminars_2024.php" class="taxonomy category"><span property="name">News & Events</span></a>
               <meta property="position" content="2">
            </span>
            &gt;
            <span property="itemListElement" typeof="ListItem">
                  <?php
                     $eventType = $row['category']; 

                     if ($eventType == 'seminars') {
                        echo '<span property="name">Seminars</span>';
                     } elseif ($eventType == 'workshop_talks_open_colloquium') {
                        echo '<span property="name">Workshop Talks & Open Colloquium</span>';
                     } elseif ($eventType == 'outreach_events_conferences') {
                        echo '<span property="name">Outreach Events & Conferences</span>';
                     } else {
                        echo '<span property="name">News & Events Detail</span>';
                     }
                  ?>

               <meta property="position" content="3">
            </span>
         </div>
      </div>
   </div>
   <div class="kingster-content-container kingster-container">
      <div class=" kingster-sidebar-wrap clearfix kingster-line-height-0 kingster-sidebar-style-none">
         <div class=" kingster-sidebar-center kingster-column-60 kingster-line-height">
            <div class="kingster-content-wrap kingster-item-pdlr clearfix">
               <div class="kingster-content-area">
                  <article id="post-1268" class="post-1268 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-post-format tag-news">
                     <div class="kingster-single-article clearfix">
                        <div class="event-details">
                           <div class="gdlr-core-pbf-element">
                              <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 35px ;">
                                 <div class="gdlr-core-title-item-title-wrap clearfix">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 24px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #1a1a1a ;"><?php echo $row['title'] ?></h3>
                                 </div>
                              </div>
                           </div>
                           <ul style="list-style-type: none">
                              <li><strong>Speaker   :</strong> <?php echo $row['speaker'] ?? 'TBA'; ?></li>
                              <li><strong>Date   :</strong>  <?php echo $row['date'] ?? 'TBA'; ?></li>
                              <li><strong>Venue   :</strong> <?php echo $row['venue'] ?? 'TBA'; ?></li>
                              <li><strong>Organized By   :</strong>  <?php echo $row['organizedby'] ?? 'TBA'; ?></li>
                           </ul>

                        </div>
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 35px ;padding-top:50px">
                           <div class="gdlr-core-title-item-title-wrap clearfix">
                              <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 24px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #1a1a1a ;">Abstract</h3>
                           </div>
                        </div>
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 35px ;">
                           <div class="gdlr-core-title-item-title-wrap clearfix">
                              <div class="description">
                                 <p> <?php echo $row['shortNote'] ?></p>
                              </div>
                           </div>
                        </div>
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 35px ;">
                           <div class="gdlr-core-title-item-title-wrap clearfix">
                              <div class="description">
                              <img src="./admin/uploads/<?php echo $row['image']?>" width="1100" height="490"  alt="" />
                           </div>
                           </div>
                        </div>
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 35px ;">
                           <div class="gdlr-core-title-item-title-wrap clearfix">
                            <div class="description">
                            <p><?php echo $row['body'] ?></p>
                                
                            </div>
                           </div>
                        </div>
                  </article>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<?php include('footer.php') ?>