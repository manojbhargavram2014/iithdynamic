<?php
require('top.inc.php');
isAdmin();
if(isset($_GET['type']) && $_GET['type']!=''){
    $type=get_safe_value($con,$_GET['type']);
    if($type=='status'){
        $operation=get_safe_value($con,$_GET['operation']);
        $id=get_safe_value($con,$_GET['id']);
        if($operation=='active'){
            $status='1';
        }else{
            $status='0';
        }
        $update_status_sql="update events set status='$status' where id='$id'";
        mysqli_query($con,$update_status_sql);
    }
    
    if($type=='delete'){
        $id=get_safe_value($con,$_GET['id']);
        $delete_sql="delete from events where id='$id'";
        mysqli_query($con,$delete_sql);
    }
}

$sql="select * from events order by id desc";
$res=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
</head>
<body>
<div class="content pb-0">
    <div class="orders">
       <div class="row">
          <div class="col-xl-12">
             <div class="card">
                <div class="card-body">
                   <h4 class="box-title">Events</h4>
                   <h4 class="box-link"><a href="manage_events.php">Add Events</a> </h4>
                </div>
                <div class="card-body pl-3 pr-3">
                   <div class="table-stats order-table ov-h">
                      <table class="table display ">
                         <thead>
                            <tr>
                               <th class="serial">#</th>
                               <th>Title</th>
                               <th>Category</th>
                               <th>Venue</th>
                               <th>Date</th>
                               <th>Image</th>
                               <th></th>
                            </tr>
                         </thead>
                         <tbody>
                            <?php 
                            $i=1;
                            while($row=mysqli_fetch_assoc($res)){?>
                            <tr>
                               <td class="serial"><?php echo $i++?></td>
                               </td>
                               <td style="width: 400px;"><?php echo $row['title']?></td>
                               <td>
                                    <?php if($row['category'] == 'seminars') {
                                        echo "Seminars";
                                    } elseif($row['category'] == 'workshop_talks_open_colloquium') {
                                        echo "Workshop/Talks/Open Colloquium";
                                    } elseif($row['category'] == 'outreach_events_conferences') {
                                        echo "Outreach Events/Conferences";
                                    }?>
                               </td>
                               <td style="width: 100px;"><?php echo $row['venue']?></td>
                               <td><?php echo $row['date']?></td>
                               <td>
                               <?php
                               
                               echo "<a target='_blank' href='uploads/" . $row['image'] . "'><img width='150px' src='uploads/" . $row['image'] . "'/></a>";

                               ?>
                               </td>
							   <td  style="width: 150px;">
									<?php
									if($row['status']==1){
										echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=".$row['id']."'><i class='fas fa-eye'></i></a></span>&nbsp;";
									}else{
										echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row['id']."'><i class='fas fa-eye-slash'></i></a></span>&nbsp;";
									}
									echo "<span class='badge badge-edit'><a href='manage_events.php?id=".$row['id']."'><i class='fas fa-edit'></i></a></span>&nbsp;";
									echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'><i class='fas fa-trash'></i></a></span>";
									?>
								</td>
                            </tr>
                            <?php } ?>
                         </tbody>
                      </table>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>
<script>
$(document).ready( function () {
    $('.table').DataTable();
});
</script>
</body>
</html>
<?php
require('footer.inc.php');
?>
