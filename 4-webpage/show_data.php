<?php include("head.php"); ?>

<body>
    <div class="container">    
        <div class="header">
            <h1>Customer Data</h1>
        </div>
        <table class="table table-bordered">
            <thead >
                <th>TITLE</th><th>SURNAME</th><th>EMAIL</th><th>MESSAGE</th>
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