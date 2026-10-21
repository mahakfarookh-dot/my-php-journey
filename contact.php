<?php include 'includes/header.php';?>

<div style="max-width:600px;margin:50px auto;padding:20px;">
           
    <h2>Contact Me</h2>
    <form action="send.php" method="POST">

        <input type="text" name="name" placeholder="Your Name" required
            style="width:100%;padding:12px;margin-bottom:15px;border:1px solid #ccc;border-radius:5px;">

        <input type="email" name="email" placeholder="Your Email" required
            style="width:100%;padding:12px;margin-bottom:15px;border:1px solid #ccc;border-radius:5px;">

        <textarea name="message" name="name" placeholder="Your Message" required
            style="width:100%;padding:12px;margin-bottom:15px;border:1px solid #ccc;border-radius:5px;"></textarea>
        <!-- this is a comment  -->
        <button type="submit"
            style="background:#00bcd4;color:white;padding:12px30px;border:none;border-radius:5px;cursor:pointer;">
          Send Message
        </button>
        
    </form>
</div>
<?php include 'includes/footer.php';?>

