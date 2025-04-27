<?php 

    $pageTitle = 'Agent';
    include_once './component/head.php';
    include_once '../config/db.php';

    // include prebuil header
    include_once './component/header.php';

    $button_text = 'Contact me';
?>

<!-- agent page header section -->
<div class="agent-header flex flex-vertical-center" style="
            background-image: linear-gradient(to right, white, transparent), url('../sources/Simple\ Black\ and\ White\ Fashion\ Facebook\ Cover.png');
    ">
    <div class="container">
        <div class="text-content w-50">
            <h1>Find a life server Not only an agent..</h1>
            <p class="w-80  margin-y-20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error ipsum, nostrum iure temporibus tenetur accusamus soluta architecto ab, molestias ipsa sapiente! Reprehenderit ab consequuntur assumenda quas nam, eligendi illo sint vitae, enim nesciunt rem tempore nisi debitis nostrum accusamus quod.</p>
            <a class="orange-btn" href="" >Become An Agent</a>
        </div>
    </div>
</div>

<!-- Aegnt card secion -->
<div class="container">
    <div class="agent-cards margin-y-50">
        <?php

            // make connection with agent table for collect the data about agent
            $query = "SELECT * FROM agents";
            $result = mysqli_query($conn, $query);
            
            if($result){
                $rowCount = mysqli_num_rows($result);
                
                if($rowCount > 0){

                    while($row = mysqli_fetch_assoc($result)){
                        $userId = $row['user_id'];
        
                        // make connection with user table for seek the data reffering the agents table
                        $checkUser = "SELECT * FROM users WHERE user_id = '$userId'";
                        $userCheckResult = mysqli_query($conn, $checkUser);
                        $userRow = mysqli_fetch_assoc($userCheckResult);
        
                        // Seeking the dara through the users table
                        $userFirstName = $userRow['user_first_name']; 
                        $userlastName = $userRow['user_last_name']; 
                        $companyName = $row['agent_agency'];
                        $fileName = $userRow['user_profile_picture'];
                        $name = $userFirstName." ".$userlastName;
                        ?>
        
                            <!-- single agent card desing -->
                            <div class = 'agent-card margin-y-20'>
                                <a href = './agent-profile.php?agentId=<?php echo $row['agent_id']?>&&userId=<?php echo $userId?>'>
                                    <img src="../sources/users/<?php echo $fileName?>" alt="">
                                </a>
                                <div class="text-content">
                                    <p> <?php echo $fileName ?></p>
                                    <h3 class = 'agent-name'><?php echo $userFirstName." ".$userlastName ?></h3>
                                    <p class = 'agency-name'><?php echo$companyName ?></p>
                                    <a href = './agent-profile.php?agentId=<?php echo $row['agent_id']?>&&userId=<?php echo $userId?>'>See more -></a>
                                </div>
                            </div>
                        <?php
                    }
                }
            }
            else{
                echo "Something went wrong";
            }
        
        ?>
    </div>
</div>

<!-- footer area -->
<?php
    include_once './component/footer.php'
?>