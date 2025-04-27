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
            this is contaienr
        </div>
    </div>
</div>
<script src="../../scripts/sideBar.js"></script>