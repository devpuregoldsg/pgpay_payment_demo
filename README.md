<p align="center"><img src="https://payment.bullioncurrencies.com/assets/img/logo.png" width="180"></p>

The **PGPay Payment Gateway - Merchant Demo** enables developers to easily work with PGPay Payment Gateway APIs.
 
## Getting Help

For full usage details, see the [PGPay Merchant Manual](https://bullioncurrencies.com/merchantdocs/).

## Requirements

BC or PGPay Merchant needs to provide the following to PGPay when the merchant starts to integrate with PGPay payment Gateway API:

- **BC Account Number** (must be a merchant account type).
- **Backend url** (PGPAY Payment System will responds the payment results to Backend URL using POST Method)
 
Don’t have an BC or PGPay Merchant account? [Sign Up](https://www.pg-pay.com/signup.php). 

## Codes

Once BC Merchant already provide BC Account Number and backend url, PGPay will provide the following:

- **merchant_code**
- **merchant_key** (Use to match and verify PGPay POST response.)
- **merchant_secret**
- **x-api-key**

## Quickstart

Payment Request from Merchant to PGPay Payment System

Prepare the required payment request parameters at `index.php`

```html
<!--Transaction amount to pay SGD  -->
<input type="hidden" name="amount" value="" />

<!--Unique transaction issued by merchant-->
<input type="hidden" name="transaction_id" value="" />	

<!--Merchant Code that is provided by PGPay-->
<input type="hidden" name="merchant_code" value="" />

<!--A url back to merchant.-->
<input type="hidden" name="response_url" value="" /> 
```