<?php include "./header.php";
   include "./admin/functions.inc.php";
   include "./connection.inc.php";
   ?>
<div class="kingster-page-title-wrap  kingster-style-medium kingster-left-align">
   <div class="kingster-header-transparent-substitute"></div>
   <div class="kingster-page-title-overlay"></div>
   <div class="kingster-page-title-container kingster-container">
      <div class="kingster-page-title-content kingster-item-pdlr">
         <h1 class="kingster-page-title">Faculty</h1>
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
            <span property="name">Faculty</span>
            <meta property="position" content="4">
         </span>
      </div>
   </div>
</div>
<!--<div class="kingster-page-wrapper" id="kingster-page-wrapper">
   <div class="gdlr-core-page-builder-body">
      <div class="gdlr-core-pbf-sidebar-wrapper ">
         <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
            <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-60 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 40px 0px 0px 0px;">
               <div class="gdlr-core-pbf-sidebar-content-inner" data-skin="Personnel">
                  <div class="gdlr-core-pbf-element">
                     <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-personnel-item-style-medium gdlr-core-personnel-style-medium">
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="gdlr-core-personnel-list-column gdlr-core-column-60 gdlr-core-column-first gdlr-core-item-pdlr">
                                 <div class="gdlr-core-personnel-list clearfix">
                                    <div class="mb-3 gdlr-core-personnel-list-image gdlr-core-media-image gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" style="width: 400px; height: 400px;">
                                       <img src="faculty/hod.jpg" class="img-fluid" alt="Responsive Image">
                                    </div>
                                    <div class="gdlr-core-personnel-list-content-wrap">
                                       <h3 class="gdlr-core-personnel-list-title" style="font-size: 23px; font-weight: 700; letter-spacing: 0px; text-transform: none;"><a href="https://people.iith.ac.in/rameshg/">Dr. Ramesh G</a></h3>
                                       <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 16px; font-weight: 500; font-style: normal; letter-spacing: 0px;">Professor & Head of the Department</div>
                                       <div class="gdlr-core-personnel-info">
                                          <div class="kingster-personnel-info-list kingster-type-office"><i class="kingster-personnel-info-list-icon fa fa-building"></i>Office: MA204</div>
                                          <div class="kingster-personnel-info-list kingster-type-email"><i class="kingster-personnel-info-list-icon fa fa-envelope-open"></i>rameshg@math.iith.ac.in</div>
                                          <div class="kingster-personnel-info-list kingster-type-phone"><i class="kingster-personnel-info-list-icon fa fa-phone"></i>(040) 2301 - 6604</div>
                                       </div>
                                       <div class="gdlr-core-personnel-list-content">
                                          <p>Area of Interest: Functional Analysis, Operator Algebras</p>
                                       </div>
                                       <a class="gdlr-core-personnel-list-button gdlr-core-button" href="https://people.iith.ac.in/rameshg/">Web Page</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>-->
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
   <div class="gdlr-core-page-builder-body">
      <div class="gdlr-core-pbf-sidebar-wrapper ">
         <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
            <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-60 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 00px 0px 0px 0px;">
               <div class="gdlr-core-pbf-sidebar-content-inner" data-skin="Personnel">
                  <div class="gdlr-core-pbf-element">
                     <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-personnel-item-style-medium gdlr-core-personnel-style-medium">
                        <div class="">
                           <div class="row">

                           <?php 
                           $sql="select * from people order by id desc";
                           $res=mysqli_query($con,$sql);
							while($row=mysqli_fetch_assoc($res)){?>
                              <div class="col-lg-6">
                                 <div class="gdlr-core-personnel-list-column gdlr-core-column-60 gdlr-core-column-first gdlr-core-item-pdlr">
                                    <div class="gdlr-core-personnel-list clearfix">
                                       <div class="mb-3 gdlr-core-personnel-list-image gdlr-core-media-image gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" style="width: 200px; height: 300px;">
                                          <img src="./admin/people/<?php echo $row['image']; ?>" class="img-fluid" alt="Responsive Image">
                                       </div>
                                       <div class="gdlr-core-personnel-list-content-wrap">
                                          <h3 class="gdlr-core-personnel-list-title" style="font-size: 23px; font-weight: 700; letter-spacing: 0px; text-transform: none;"><a href="https://sites.google.com/view/aiyappansrinivasan"><?php echo $row['name']?></a></h3>
                                          <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 16px; font-weight: 500; font-style: normal; letter-spacing: 0px;"><?php echo $row['designation']?></div>
                                          <div class="gdlr-core-personnel-info">
                                             <div class="kingster-personnel-info-list kingster-type-office"><i class="kingster-personnel-info-list-icon fa fa-building"></i>Office: <?php echo $row['office']?></div>
                                             <div class="kingster-personnel-info-list kingster-type-phone"><i class="kingster-personnel-info-list-icon fa fa-phone"></i><?php echo $row['mobile']?></div>
                                             <div class="kingster-personnel-info-list kingster-type-email"><i class="kingster-personnel-info-list-icon fa fa-envelope-open"></i><?php echo $row['email']?></div>
                                          </div>
                                          <div class="gdlr-core-personnel-list-content">
                                          <p style="display: inline-block; margin: 0;">Area of Interest: <?php echo $row['aor']?></p>

                                          </div>
                                          <a class="gdlr-core-personnel-list-button gdlr-core-button" href="./people.php?id=<?php echo $row['id'] ?>">Web Page</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <?php } ?>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<script type='text/javascript' src='js/jquery/jquery.js'></script>
<script type='text/javascript' src='js/jquery/jquery-migrate.min.js'></script>
<script type='text/javascript' src='plugins/goodlayers-core/plugins/combine/script.js'></script>
<script type='text/javascript'>
   var gdlr_core_pbf = {
       "admin": "",
       "video": {
           "width": "640",
           "height": "360"
       },
       "ajax_url": "#"
   };
</script>
<?php include "./footer.php" ?>