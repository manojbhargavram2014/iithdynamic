<?php include "./header.php";
   include "./admin/functions.inc.php";
   include "./connection.inc.php";
   ?>
<?php
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
   
   ?>
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
   <div class="gdlr-core-page-builder-body">
      <div class="gdlr-core-pbf-wrapper " style="padding: 70px 0px 40px 0px;">
         <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
               <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                  <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                     <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                           <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align">
                              <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;">
                                 <img src="./admin/people/<?php echo $image; ?>" width="700" height="450"  alt="" />
                              </div>
                           </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                           <div class="gdlr-core-personnel-info-item gdlr-core-item-pdb gdlr-core-item-pdlr clearfix" style="padding-bottom: 17px ;">
                              <div class="gdlr-core-personnel-info-item-list-wrap">
                              <div class="kingster-personnel-info-list kingster-type-social-shortcode">
                                 <div class="gdlr-core-social-network-item gdlr-core-item-pdb gdlr-core-none-align" style="padding-bottom: 0px;">
                                    <?php if (!empty($fb_link)) : ?>
                                          <a href="<?php echo $fb_link ?>" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="font-size: 18px; color: #50bd77;"><i class="fa fa-facebook"></i></a>
                                    <?php endif; ?>
                                    <?php if (!empty($li_link)) : ?>
                                          <a href="<?php echo $li_link ?>" target="_blank" class="gdlr-core-social-network-icon" title="linkedin" style="font-size: 18px; color: #50bd77; margin-left: 14px;"><i class="fa fa-linkedin"></i></a>
                                    <?php endif; ?>
                                    <?php if (!empty($sk_link)) : ?>
                                          <a href="<?php echo $sk_link ?>" target="_blank" class="gdlr-core-social-network-icon" title="skype" style="font-size: 18px; color: #50bd77; margin-left: 14px;"><i class="fa fa-skype"></i></a>
                                    <?php endif; ?>
                                    <?php if (!empty($tw_link)) : ?>
                                          <a href="<?php echo $tw_link ?>" target="_blank" class="gdlr-core-social-network-icon" title="twitter" style="font-size: 18px; color: #50bd77; margin-left: 14px;"><i class="fa fa-twitter"></i></a>
                                    <?php endif; ?>
                                 </div>
                              </div>
                                 <div class="kingster-personnel-info-list kingster-type-email"><i class="kingster-personnel-info-list-icon fa fa-envelope-open"></i><?php echo !empty($email) ? $email : 'N/A' ?></div>
                                 <div class="kingster-personnel-info-list kingster-type-phone"><i class="kingster-personnel-info-list-icon fa fa-phone"></i><?php echo !empty($mobile) ? $mobile : 'N/A' ?></div>
                                 <div class="kingster-personnel-info-list kingster-type-location"><i class="kingster-personnel-info-list-icon fa fa-location-arrow"></i>Office: <?php echo !empty($office) ? $office : 'N/A' ?></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="gdlr-core-pbf-column gdlr-core-column-40">
                  <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px 0px 20px 0px;padding: 0px 0px 0px 0px;">
                     <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                           <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                              <div class="gdlr-core-title-item-title-wrap clearfix">
                                 <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 34px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #161616 ;"><?php echo $name ?></h3>
                              </div>
                              <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 20px ;font-style: normal ;color: #6c6c6c ;"><?php echo $designation ?></span>
                           </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                           <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 6px ;">
                              <div class="gdlr-core-text-box-item-content" style="font-size: 21px ;text-transform: none ;color: #3db166 ;">
                                 <p><strong>Areas of Reaserch : </strong> <?php echo $aor ?></p>
                              </div>
                           </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                           <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-bottom: 55px ;">
                              <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #3db166 ;border-bottom-width: 3px ;"></div>
                           </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                           <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                              <div class="gdlr-core-title-item-title-wrap clearfix">
                                 <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #464646 ;">Biography</h3>
                              </div>
                           </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                           <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 20px ;">
                              <div class="gdlr-core-text-box-item-content" style="font-size: 17px ;letter-spacing: 0px ;text-transform: none ;">
                                 <p><?php echo $biography ?></p>
                              </div>
                           </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                           <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-bottom: 45px ;">
                              <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #3db166 ;border-bottom-width: 3px ;"></div>
                           </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                           <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                              <div class="gdlr-core-title-item-title-wrap clearfix">
                                 <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #464646 ;">Education</h3>
                              </div>
                           </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                           <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix ">
                              <?php echo $education ?>
                           </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                           <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-bottom: 55px ;">
                              <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #3db166 ;border-bottom-width: 3px ;"></div>
                           </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                           <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                              <div class="gdlr-core-title-item-title-wrap clearfix">
                                 <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #464646 ;">Professional Experience</h3>
                              </div>
                           </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                           <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix ">
                              <?php echo $prof_exp ?>
                           </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                           <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-bottom: 55px ;">
                              <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #3db166 ;border-bottom-width: 3px ;"></div>
                           </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                           <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                              <div class="gdlr-core-title-item-title-wrap clearfix">
                                 <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #464646 ;">Awards & Honours</h3>
                              </div>
                           </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                           <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix ">
                              <?php echo $awards ?>
                           </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                           <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
                              <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #3db166 ;border-bottom-width: 3px ;"></div>
                           </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-60">
                           <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 10px 0px 0px;">
                              <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                 <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-accordion-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-accordion-style-background-title-icon gdlr-core-left-align gdlr-core-icon-pos-right">
                                       <div class="gdlr-core-accordion-item-tab clearfix">
                                          <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon"></div>
                                          <div class="gdlr-core-accordion-item-content-wrapper">
                                             <h4 class="gdlr-core-accordion-item-title gdlr-core-js gdlr-core-skin-e-background gdlr-core-skin-e-content">Latest Publications</h4>
                                             <div class="gdlr-core-accordion-item-content">
                                                <?php echo $latest_publications ?>
                                             </div>
                                          </div>
                                       </div>
                                       <?php if (!empty($others)) : ?>
                                       <div class="gdlr-core-accordion-item-tab clearfix">
                                          <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon"></div>
                                          <div class="gdlr-core-accordion-item-content-wrapper">
                                             <h4 class="gdlr-core-accordion-item-title gdlr-core-js gdlr-core-skin-e-background gdlr-core-skin-e-content">Others</h4>
                                             <div class="gdlr-core-accordion-item-content">
                                                <?php echo $others ?>
                                             </div>
                                          </div>
                                       </div>
                                       <?php endif; ?>
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