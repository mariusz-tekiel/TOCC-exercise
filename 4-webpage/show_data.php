<?php include("head.php"); ?>

<body>
    <div class="container">
        <h1>Show Data</h1>
        <table class="table">
            <thead>
                <th>Title</th><th>Surname</th><th>Email</th><th>Message</th>
            </thead>
            <tbody>
                <?php
                    echo "<td>".$_POST['title']."</td>";
                    echo "<td>".$_POST['surname']."</td>";
                    echo "<td>".$_POST['email']."</td>";
                    echo "<td>".$_POST['message']."</td>";    
                ?>
            </tbody>
        </table>

    </div>
</body>
</html>