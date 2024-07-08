<?php
require('top.inc.php');
isAdmin();

if(isset($_GET['type']) && $_GET['type'] != ''){
    $type = get_safe_value($con, $_GET['type']);
    
    if($type == 'status'){
        $operation = get_safe_value($con, $_GET['operation']);
        $id = get_safe_value($con, $_GET['id']);
        
        if($operation == 'active'){
            $status = '1';
        } else {
            $status = '0';
        }
        
        $update_status_sql = "UPDATE events SET status='$status' WHERE id='$id'";
        mysqli_query($con, $update_status_sql);
    }
    
    if($type == 'delete'){
        $id = get_safe_value($con, $_GET['id']);
        $delete_sql = "DELETE FROM events WHERE id='$id'";
        mysqli_query($con, $delete_sql);
    }
}

$sql = "SELECT * FROM events ORDER BY id DESC";
$res = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Events</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .table-container {
            padding: 20px;
        }
    </style>
</head>
<body>
<div class="content pb-0">
    <div class="orders">
       <div class="row">
          <div class="col-xl-12">
             <div class="card">
                <div class="card-body">
                   <h4 class="box-title">Events</h4>
                   <h4 class="box-link"><a href="manage_events.php">Add Events</a></h4>
                </div>
                <div class="card-body pl-3 pr-3">
                   <div class="table-container">
                      <table id="eventsTable" class="table table-bordered table-striped">
                         <thead>
                            <tr>
                               <th class="serial">#</th>
                               <th>Title</th>
                               <th>Category</th>
                               <th>Venue</th>
                               <th>Date</th>
                               <th>Image</th>
                               <th>Actions</th>
                            </tr>
                         </thead>
                         <tbody>
                            <?php 
                            $i = 1;
                            while($row = mysqli_fetch_assoc($res)){
                                ?>
                                <tr>
                                   <td><?php echo $i++?></td>
                                   <td style="max-width: 400px;"><?php echo $row['title']?></td>
                                   <td>
                                        <?php 
                                        switch($row['category']) {
                                            case 'seminars':
                                                echo "Seminars";
                                                break;
                                            case 'workshop_talks_open_colloquium':
                                                echo "Workshop/Talks/Open Colloquium";
                                                break;
                                            case 'outreach_events_conferences':
                                                echo "Outreach Events/Conferences";
                                                break;
                                            default:
                                                echo "Other";
                                                break;
                                        }
                                        ?>
                                   </td>
                                   <td style="max-width: 100px;"><?php echo $row['venue']?></td>
                                   <td><?php echo $row['date']?></td>
                                   <td>
                                       <?php
                                       echo "<a target='_blank' href='uploads/" . $row['image'] . "'><img width='150px' src='uploads/" . $row['image'] . "'/></a>";
                                       ?>
                                   </td>
                                   <td>
                                           <?php
                                           if($row['status'] == 1){
                                               echo "<span class='badge badge-success'><a href='?type=status&operation=deactive&id=".$row['id']."'><i class='fas fa-eye'></i> Active</a></span>&nbsp;";
                                           } else {
                                               echo "<span class='badge badge-secondary'><a href='?type=status&operation=active&id=".$row['id']."'><i class='fas fa-eye-slash'></i> Inactive</a></span>&nbsp;";
                                           }
                                           echo "<span class='badge badge-primary'><a href='manage_events.php?id=".$row['id']."'><i class='fas fa-edit'></i> Edit</a></span>&nbsp;";
                                           echo "<span class='badge badge-danger'><a href='?type=delete&id=".$row['id']."'><i class='fas fa-trash'></i> Delete</a></span>";
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

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#eventsTable').DataTable();
    });
</script>
</body>
</html>
<?php
require('footer.inc.php');
?>
