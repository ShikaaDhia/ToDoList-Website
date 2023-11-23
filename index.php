<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FindNeDho - Make Your To Do List</title>
    <link rel="stylesheet" href="mystyle22.css">
</head>
<body>

    <!-- navbar -->
    <header class="head">
        <img class="logo" src="image/logo_nemo-removebg-preview.png" alt="Eror image">
        <div class="sign">
            <a href="list.php" class="btn" id="makeItBtn">Make It</a>
        </div>
    </header>

    <!-- navbar end -->

        <div class="home-content">
        <h4>MAKE TO DO LIST</h2>
            <h2> For Remember <span>Your
                <br>
                Task</span> Everyday</h4>
          <p>This website is intended for you
            <br>
            so that you can remember the tasks you need to do.</p>
        </div>

        <div>
            <img class="wave" src="image/—Pngtree—ocean wave_5398754.png" alt="">
        </div>
</body>
<script>
    
    document.getElementById("makeItBtn").addEventListener("click", function(event) {
        event.preventDefault();
        window.location.href = "list.php"   });
</script>
</html>