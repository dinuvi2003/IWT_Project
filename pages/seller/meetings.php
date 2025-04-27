<?php
    $pageTitle = 'sample name';
    include_once '../component/inFileHeader.php';
    include_once '../component/sellerHeader.php';
?>
<div class="dashboard-body flex">
    <div class="side-bar">
        <a href="./apartments.php">
            <div class="function-card apartments margin-y-10 flex flex-vertical-center flex-gap-y-10">
                <i class="ri-home-2-line"></i>
                <p>Apartments</p>
            </div>
        </a>
        <a href="./meetings.php">
            <div class="function-card meetings margin-y-10 flex flex-vertical-center flex-gap-y-10">
                <i class="ri-calendar-2-line"></i>
                <p>Meetings</p>
            </div>
        </a>
    </div>
    <div class="body-content w-100 margin-y-50">
        <div class="container">
            <a href="./add-meeting.php" class="blue-btn">Add New Meeting</a>
            <table class="w-100">
                <tr>
                    <th>Meeting Id</th>
                    <th>Meeting Date</th>
                    <th>Meeting Time</th>
                    <th>Meeting Function</th>
                </tr>
                <?php
                    include_once '../../config/db.php';

                    $query = 'SELECT * FROM meeting';
                    $result = mysqli_query($conn, $query);
                    $rowCount = mysqli_num_rows($result);
                    
                    if($result){
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                                <tr>
                                    <td><?php echo $row['meeting_id']; ?></td>
                                    <td><?php echo $row['meeting_time']; ?></td>
                                    <td><?php echo $row['meeting_date']; ?></td>
                                    <td><a href="../../config/meeting-delete.php?meetingId=<?php echo $row['meeting_id']?>" class="orange-btn">Delete</a></td>
                                </tr>
                            <?php
                        }
                    }
                    else{
                        echo '</table><p>Someting went wrong</p>';
                    }
                ?>
            </table>
        </div>
    </div>
</div>

<script src="../../scripts/sideBar.js"></script>