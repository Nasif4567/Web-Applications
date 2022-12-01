<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Payment Gateway</title>
        <link rel="stylesheet" href="pay.css" type="text/css">
    </head>
    <body>
        <section class="payment">
            <div class="container">







                <form action="orderdialog.php" method="POST">
                    <div class="row">
                        <div class="col">
                            <h3 class="title">billing</h3>
                            <div class="inputBox">
                                <span>full name :</span>
                                <input type="text" placeholder="" required>
                            </div>
                            <div class="inputBox">
                                <span>Email :</span>
                                <input type="email" placeholder="" required>
                            </div>
                            <div class="inputBox">
                                <span>Address :</span>
                                <input type="address" placeholder="" required>
                            </div>
                            <div class="inputBox">
                                <span>City :</span>
                                <input type="text" placeholder="" required>
                            </div>
                            
                            <div class="flex">
                                <div class="inputBox">
                                <span>State :</span>
                                <input type="text" placeholder="" required>
                            </div>
                                <div class="inputBox">
                                <span>Zip Code :</span>
                                <input type="text" placeholder="" required>
                            </div>
                            </div>
                        </div>    
                        
                        <div class="col">
                            <h3 class="title">payment</h3>
                                                   
                            <div class="inputBox">
                                <span>Name on card :</span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="inputBox">
                                <span>Credit card number :</span>
                                <input type="number" placeholder="">
                            </div>
                            
                            <div class="flex">
                                <div class="inputBox">
                                <span>Exp month :</span>
                                <input type="text" placeholder="">
                            </div>
                                <div class="inputBox">
                                <span>Exp year :</span>
                                <input type="number" placeholder="">
                            </div>
                                <div class="inputBox">
                                <span>CVV :</span>
                                <input type="text" placeholder="">
                            </div>                                
                            </div>
                        </div>  
                    </div>
                    <input id="btnpayproceed" type="submit" value="proceed to checkout" class="submit-btn">
                </form>

    
  



    








            </div>
        </section>
    </body>
</html>
