<?php
    $pageTitle = 'sample name';
    include_once '../component/inFileHeader.php';
    include_once '../component/sellerHeader.php';
?>

<head>
    <link rel="stylesheet" href="../../styles/apartment.css">
</head>
<body>
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
           <h1 class="section-title">Add New Apartment</h1>
           <br>
           <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

                    <label for="address">Address</label>  <br>  
                    <input type="text" name="1st-line" placeholder="1st line"><br>
                    <input type="text" name="2nd-line" placeholder="2nd line"><br>
                    <input type="text" name="City" placeholder="city"><br><br>
                    <label for="contact">Contact Number</label>    <br>
                    <input type="text" name="contact"><br><br>
                    <label for="cost">Price</label><br>
                    <input type="text" name="cost"><br><br>
                    <label for="person">Person count</label><br>
                    <input type="text" name="person"><br><br>
                    <label for="rooms">Number of Rooms</label><br>
                    <input type="text" name="rooms"><br><br>
                    <label for="description">Description</label><br>
                    <textarea name="description"></textarea><br><br>
                    <input type="submit" value="Add Apartment" name="btnAdd" >
            </form>
        </div>
    </div>
</div>
</body>

<?php
    require '../../config/config.php';

    // global $con;

    if(isset($_POST['btnAdd']))
    {

        $requst = "SELECT * FROM apartment";
        $result = $con -> query($requst);
        
        if($result){
            $first_line = $_POST['1st-line'];
            $second_line = $_POST['2nd-line'];
            $City = $_POST['City'];
            $contact = $_POST['contact'];
            $cost = $_POST['cost'];
            $count = $_POST['person'];
            $rooms = $_POST['rooms'];
            $description = $_POST['description'];
            $publisher_id= 3;

            $newQuery = "INSERT INTO `apartment`(`publisher_ID`, `apartment_first_address_line`, `apartment_second_address_line`, `apartment_city`, `apartment_contact_number`, `apartment_cost`, `apartment_person_count`,`apartment_number_rooms`, `apartment_description`) VALUES ('$publisher_id','$first_line','$second_line','$City','$contact','$cost','$count','$rooms','$description')";

            $newResult = mysqli_query($con, $newQuery);

            if($newResult)
            {
                echo "<script>";
                echo "alert('Inserted successfully')";
                echo "</script>";
            }
            else
            {
                echo "<script>";
                echo "alert('Error!')";
                echo "</script>";
            }
        }

        $con->close();
    }
?>

<script src="../../scripts/sideBar.js"></script>