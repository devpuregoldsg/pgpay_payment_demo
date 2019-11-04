<!DOCTYPE html>
<html lang="en">
<head>
    <title>PGPay Merchant Demo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <style>
    .mt20{
        margin-top: 200px !important;    
    }
    .table_morecondensed>thead>tr>th, 
    .table_morecondensed>tbody>tr>th, 
    .table_morecondensed>tfoot>tr>th, 
    .table_morecondensed>thead>tr>td, 
    .table_morecondensed>tbody>tr>td, 
    .table_morecondensed>tfoot>tr>td{ padding: 8px; }
    </style>
</head>

<body>
<div class="container ">
    <div class="row">
        <aside class="col-sm-6 offset-sm-3 mb-5 mt-5 mt-20">
            <h1><b>Checkout</b></h1>
            <article class="card">
                <div class="card-body p-5">

                <?php

                if(isset($_POST['status']) AND $_POST['status']==1 ){
 
                    echo '<div class="alert alert-success" role="alert">Payment Successful!</div>';
                    unset($_POST);
                   
                }else{

                    if(isset($_POST['status']) AND $_POST['status']==2){
                        echo '<div class="alert alert-warning" role="alert">'.$_POST['message'].'</div>';
                        unset($_POST);
                    }

                ?>  <h3 class="mb-3">Purchase Summary</h3>
					<form role="form" action="https://payment.bullioncurrencies.com/entry" method="post">          
                        <table class="table table-striped mb-5 table_morecondensed">
                            <tbody>
                            <tr>
                                <th>Product</th>
                                <th>Total</th>
                            </tr>
                            <tr>
                                <td>Item 1</td>
                                <td>$1.00</td>
                            </tr>
                            <tr>
                                <td>Item 2</td>
                                <td>$2.00</td>
                            </tr>
                            <tr>
                                <td>Subtotal</td>
                                <td>$3.00</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <th>$3.00</th>
                            </tr>
                            </tbody>
                        </table>
                        
                        <!-- Payment Request from Merchant to PGPay Payment System -->.

                        <!--Transaction amount to pay SGD -->
                        <input type="hidden" name="amount" class="form-control" value="" />
                        <!--Unique transaction issued by merchant-->
                        <input type="hidden" name="transaction_id" class="form-control" value="" />	
                        <!--Merchant Code that is provided by PGPay-->
                        <input type="hidden" name="merchant_code" class="form-control" value="" />	
                        <!--A url back to merchant.-->			
                        <input type="hidden" name="response_url" value="" /> 
                         
                        <div class="form-group row mb-5">
                            <label for="Payment" class="col-sm-4 col-form-label">Payment Method: </label>
                            <div class="col-sm-8">
                               
                                <select class="form-control" id="payment">
                                <option value="pgpay">PGPay</option>
                                <option value="bank" disabled>Direct Bank Transfer</option>
                            
                                </select>
                            </div>
                        </div>

                    
                        <input type="submit" value="PROCESS TO PAYMENT" class="btn btn-primary btn-block"  />
                    </form>

                <?php } ?>

                </div>  
            </article>  
        </aside> 
    </div> 
</div> 
 
<article class="bg-secondary mb-0 mt-5 ">  
    <div class="card-body text-center">
        <h3 class="text-white mb-4 mt-3">PGPay Payment Gateway - Merchant Demo</h3>
        <p><a class="btn btn-warning" target="_blank" href="https://bullioncurrencies.com/merchantdocs/">PGPay Merchant Manual  <i class="fa fa-window-restore "></i></a></p>
    </div>
</article>

</body>
</html> 

