<?php
require('top.inc.php');
isAdmin();

if(isset($_GET['type']) && $_GET['type']!=''){
    $type = get_safe_value($con, $_GET['type']);
    
    if($type == 'status'){
        $operation = get_safe_value($con, $_GET['operation']);
        $id = get_safe_value($con, $_GET['id']);
        
        if($operation == 'active'){
            $status = '1';
        } else {
            $status = '0';
        }
        
        $update_status_sql = "UPDATE people SET status='$status' WHERE id='$id'";
        mysqli_query($con, $update_status_sql);
    }
    
    if($type == 'delete'){
        $id = get_safe_value($con, $_GET['id']);
        $delete_sql = "DELETE FROM people WHERE id='$id'";
        mysqli_query($con, $delete_sql);
    }
}

$sql = "SELECT * FROM people ORDER BY id DESC";
$res = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage People</title>
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
                       <h4 class="box-title">People</h4>
                       <h4 class="box-link"><a href="manage_people.php">Add People</a></h4>
                    </div>
                    <div class="card-body--">
                       <div class="table-container">
                          <table id="peopleTable" class="table table-bordered table-striped">
                             <thead>
                                <tr>
                                   <th class="serial">#</th>
                                   <th>Name</th>
                                   <th>Email</th>
                                   <th>Mobile</th>
                                   <th>Office</th>
                                   <th>Designation</th>
                                   <th>Image</th>
                                   <th>Actions</th>
                                </tr>
                             </thead>
                             <tbody>
                                <?php 
                                $i = 1;
                                while($row = mysqli_fetch_assoc($res)) {
                                    ?>
                                    <tr>
                                       <td><?php echo $i++?></td>
                                       <td><?php echo $row['name']?></td>
                                       <td><?php echo $row['email']?></td>
                                       <td><?php echo $row['mobile']?></td>
                                       <td><?php echo $row['office']?></td>
                                       <td><?php echo $row['designation']?></td>
                                       <td>
                                           <?php
                                           echo "<a target='_blank' href='people/" . $row['image'] . "'><img width='150px' src='people/" . $row['image'] . "'/></a>";
                                           ?>
                                       </td>
                                       <td>
                                           <?php
                                           if($row['status'] == 1){
                                               echo "<span class='badge badge-success'><a href='?type=status&operation=deactive&id=".$row['id']."'><i class='fas fa-eye'></i> Active</a></span>&nbsp;";
                                           } else {
                                               echo "<span class='badge badge-secondary'><a href='?type=status&operation=active&id=".$row['id']."'><i class='fas fa-eye-slash'></i> Inactive</a></span>&nbsp;";
                                           }
                                           echo "<span class='badge badge-primary'><a href='manage_people.php?id=".$row['id']."'><i class='fas fa-edit'></i> Edit</a></span>&nbsp;";
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
            $('#peopleTable').DataTable();
        });
    </script>
</body>
</html>
<?php
require('footer.inc.php');
?>
