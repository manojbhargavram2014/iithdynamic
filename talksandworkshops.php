<?php include "./header.php" ?>
<?php include "./connection.inc.php" ?>
<div class="kingster-page-title-wrap  kingster-style-medium kingster-center-align">
   <div class="kingster-header-transparent-substitute"></div>
   <div class="kingster-page-title-overlay"></div>
   <div class="kingster-page-title-container kingster-container">
      <div class="kingster-page-title-content kingster-item-pdlr">
         <div class="kingster-page-caption">Department Of Mathematics</div>
         <h1 class="kingster-page-title">Talks And Workshops</h1>
      </div>
   </div>
</div>
<div class="kingster-breadcrumbs">
   <div class="kingster-breadcrumbs-container kingster-container">
      <div class="kingster-breadcrumbs-item kingster-item-pdlr">
         <span property="itemListElement" typeof="ListItem">
            <a property="item" typeof="WebPage" title="Go to Kingster." href="index.php" class="home"><span property="name">Home</span></a>
            <meta property="position" content="1">
         </span>
         &gt;
         <span property="itemListElement" typeof="ListItem">
            <span property="name">Talks And Workshops</span>
            <meta property="position" content="2">
         </span>
      </div>
   </div>
</div>
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
   <div class="kingster-content-container kingster-container">
      <div class=" kingster-sidebar-wrap clearfix kingster-line-height-0 kingster-sidebar-style-both">
         <div class=" kingster-sidebar-center kingster-column-45 kingster-line-height">
            <div class="gdlr-core-page-builder-body">
               <div class="gdlr-core-pbf-section">
                  <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
                     <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-full" style="padding-bottom: 40px ;">
                           <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                              <!--start-->
                              <?php 
                                 $i=1;
                                 $sql = "SELECT * FROM events WHERE category = 'workshop_talks_open_colloquium' ORDER BY id DESC";

                                 $res=mysqli_query($con,$sql);
                                 while($row=mysqli_fetch_assoc($res)){?>
                              <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                 <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                    <a href="#">
                                       <img src="./admin/uploads/<?php echo $row['image']?>" width="1100" height="490"  alt="" />
                                       <!-- <div class="gdlr-core-sticky-banner gdlr-core-title-font" style="color:red"><i class="fa fa-bolt"></i>Seminar</div> -->
                                    </a>
                                 </div>
                                 <div class="gdlr-core-blog-full-head clearfix">
                                    <div class="gdlr-core-blog-full-head-right">
                                       <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 28px ;font-weight: 800 ;letter-spacing: 0px ;"><a href="<?php echo 'event_detail.php?id=' . $row['id']; ?>" ><?php echo $row['title']?></a></h3>
                                       <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><?php echo $row['date']?></span></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By</span><?php echo $row['speaker']?></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category">Seminar</span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-comment-number">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="gdlr-core-blog-content">
                                    <strong>Abstract : </strong><?php echo $row['shortNote']?>
                                    <div class="clear"></div>
                                    <a class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle" href="<?php echo 'event_detail.php?id=' . $row['id']; ?>">Read More</a>
                                 </div>
                              </div>
                              <?php } ?>
                              <!--end-->
                           </div>
                           <div class="gdlr-core-pagination  gdlr-core-style-circle gdlr-core-left-align gdlr-core-item-pdlr"><span aria-current='page' class='page-numbers current href='>2024</span>
                              <a href="older_seminars.php">Older</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class=" kingster-sidebar-left kingster-column-15 kingster-line-height kingster-line-height">
            <div class="kingster-sidebar-area kingster-item-pdlr">
               <div id="text-7" class="widget widget_text kingster-widget">
                  <h3 class="kingster-widget-title">About Page</h3>
                  <span class="clear"></span>
                  <div class="textwidget">
                     <p>Welcome to the Mathematics Department's Seminars at IIT Hyderabad!</p>
                  </div>
               </div>
               <div id="gdlr-core-recent-post-widget-2" class="widget widget_gdlr-core-recent-post-widget kingster-widget">
                  <h3 class="kingster-widget-title">Upcoming Seminars</h3>
                  <span class="clear"></span>
                  <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-2">
                     <div class="gdlr-core-recent-post-widget clearfix">
                        <div class="gdlr-core-recent-post-widget-content">
                           <div class="gdlr-core-recent-post-widget-title"><a href="#">There is no Upcoming Seminars</a></div>
                           <!--<div class="gdlr-core-recent-post-widget-info"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#">June 6, 2016</a></span></div>-->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include "./footer.php" ?>