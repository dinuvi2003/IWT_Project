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
           <h1 class="section-title">Add New Meeting</h1>
           <form action="../../config/add-meetin.php" method="post">

                <div class="double-input flex flex-gap-y-20">

                    <input type="date" name="meeting-date" required>
                    <input type="time" name="meeting-time" placeholder="hh:mm ss" required>
                </div>
                <select name="meeting-with" id="">
                    <?php
                        include_once '../../config/db.php';
                        
                        $query = "SELECT * FROM agents";
                        $result = mysqli_query($conn, $query);
                        
                        if($result){
                            $rowCount = mysqli_num_rows($result);
                            echo $rowCount;
                            
                            while($row = mysqli_fetch_assoc($result)){
                                $userId =$row['user_id'];
                                $userQuery = "SELECT * FROM users WHERE user_id = '$userId'";
                                $userResult = mysqli_query($conn, $userQuery);
                                $userRow = mysqli_fetch_assoc($userResult);    
                                $userFirstName = $userRow['user_first_name'];
                                $userLastName = $userRow['user_last_name'];
                                $userFullName = $userFirstName." ".$userLastName;
                                
                                ?>
                                    <option value=""><?php echo $userFullName ?></option>
                                <?php
                            }
                        }
                    ?>
                </select>
                <br>
                <input type="submit" class="margin-y-20" value="Add Meeting" >

           </form>
        </div>
    </div>
</div>

<script src="../../scripts/sideBar.js"></script>