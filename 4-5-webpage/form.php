<?php include("head.php"); ?>

<body>    
    <section class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 id="main-header">WWW.SUFFOLK-HOLIDAYS.CO.UK</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h1 id="question">Want to buy this domain?</h1>
                </div>
            </div>        
            <div class="row">
                <div class="col-xs-2 col-sm-4 ">
            </div>
                <div class="col-xs-8 col-sm-4 ">
                    <form action="show_data.php" method="POST">
                        <div class="form-group">      
                            <input type="text" class="form-control" id="title" placeholder="Title" name="title">
                        </div>
                        <div class="form-group">      
                            <input type="text" class="form-control" id="surname" placeholder="Surname" name="surname">
                        </div>
                        <div class="form-group">      
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">      
                            <input type="textarea" class="form-control" id="message" placeholder="Message" name="message">
                        </div>
                        
                        <button type="submit" class="btn btn-success">Enquire now</button>
                    </form>
                </div>
            </div>  
        </div>
    </section>
</body>
</html>
