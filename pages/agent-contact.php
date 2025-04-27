<?php 

    $pageTitle = 'Conyact Agent';
    include_once './component/head.php';

    // include prebuil header
    include_once './component/header.php';
?>

<div class="contact-agent">
    <div class="container h-100 flex flex-vertical-center">
        <div class="form-section w-40">
            <h1>Hello! I am here..</h1>
            <form action="../config/mail.php?agentMail=<?php echo $_GET['agentMail'] ?>" method="post">
                <div class="double-input flex flex-gap-y-20">
                    <input type="text" name="first-name" placeholder="First Name" required>
                    <input type="text" name="last-name" placeholder="Last Name" required>
                </div>
                <input type="email" placeholder="example@gmail.com" name="email" required>
                <textarea name="message" placeholder="Message put here.." cols="30" rows="10"></textarea>
                <input type="file" name="attachment" >
                <input type="submit" name="submit" value="Send Quote" class = 'orange-btn'>
            </form>
        </div>
    </div>
</div>

<!-- footer area -->
<?php
    include_once './component/footer.php'
?>