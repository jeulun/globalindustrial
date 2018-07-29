
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #f5f8fa; color: #74787e; height: 100%; hyphens: auto; line-height: 1.4; margin: 0; -moz-hyphens: auto; -ms-word-break: break-all; width: 100% !important; -webkit-hyphens: auto; -webkit-text-size-adjust: none; word-break: break-word;">
    <style>
        @media  only screen and (max-width: 600px) {
            .inner-body {
                width: 100% !important;
            }

            .footer {
                width: 100% !important;
            }
        }

        @media  only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
    </style>
<table class="wrapper" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #f5f8fa; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;"><tr>
<td align="center" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
                <table class="content" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">
<tr>
<td class="header" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; padding: 25px 0; text-align: center;">
        <a href="https://markdownmail.com" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #bbbfc3; font-size: 25px; font-weight: bold; text-decoration: none; text-shadow: 0 1px 0 #ffffff;">
            GI
        </a>
    </td>
</tr>
<!-- Email Body -->

<tr>
<td class="body" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #ffffff; border-bottom: 1px solid #edeff2; border-top: 1px solid #edeff2; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">
                            <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #ffffff; margin: 0 auto; padding: 0; width: 570px; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 570px;">
<!-- Body content -->

<tr>

<td class="content-cell" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; padding: 35px;">

<h1 style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #2F3133; font-size: 19px; font-weight: bold; margin-top: 0; text-align: center;">Quotation</h1>

<p style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787e; font-size: 18px; line-height: 1.5em; margin-top: 0; text-align: left;"> Company: {{ $order->billing_name }}</p>
<p style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787e; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;"> E-mail: {{ $order->billing_email }}</p>
<p style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787e; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;"> Address: {{ $order->billing_address }}, {{ $order->billing_city }}, {{ $order->billing_postalcode }}, {{ $order->billing_province }}</p>
<p style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787e; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;"> Contact No.: {{ $order->billing_phone }}</p>




<div class="table" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
<table style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; margin: 30px auto; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">
<thead style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">

	<tr>
<th style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787e; font-size: 13px; border-bottom: 1px solid #edeff2; padding-bottom: 8px;">Product</th>
<th style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787e; font-size: 13px; border-bottom: 1px solid #edeff2; padding-bottom: 8px;">Description</th>
<th style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787e; font-size: 13px; border-bottom: 1px solid #edeff2; padding-bottom: 8px;">Unit Price (RM)</th>
<th style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787e; font-size: 13px; border-bottom: 1px solid #edeff2; padding-bottom: 8px;">Quantity</th>
<th style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787e; font-size: 13px; border-bottom: 1px solid #edeff2; padding-bottom: 8px; text-align: right;">Price (RM)</th>
</tr>
</thead>

@foreach ($order->products as $product)
<tbody style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
<tr>
<td style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787e; font-size: 13px; line-height: 18px; padding: 10px 0;">{{ $product->name }}</td>
<td style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787e; font-size: 12px; line-height: 18px; padding: 10px 0;">{{ $product->details }}</td>
<td style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787e; font-size: 13px; line-height: 18px; padding: 10px 0; text-align: right;">{{ round($product->price / 100, 2)}}</td>
<td style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787e; font-size: 13px; line-height: 18px; padding: 10px 0; text-align: right;">{{ $product->pivot->quantity }}</td>
<td style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787e; font-size: 13px; line-height: 18px; padding: 10px 0; text-align: right;">{{ round((($product->price / 100)*($product->pivot->quantity)), 2) }}</td>
</tr>
@endforeach




</tbody>
</table>
</div>

<p style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787e; font-size: 14px; line-height: 18px; padding-bottom: 0px; text-align: right; font-weight: bold;">SubTotal: {{ presentPrice(Cart::subtotal()) }}</p>

@if (session()->has('coupon'))

<p style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787e; font-size: 14px; line-height: 18px; padding-bottom: 0px; text-align: right; font-weight: bold;">Discount [ {{ session()->get('coupon')['name'] }} (-{{ session()->get('coupon')['discountrate'] }}) ] : - {{presentPrice($order->billing_discount) }}</p>

<hr>

<p style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787e; font-size: 14px; line-height: 18px; padding-bottom: 0px; text-align: right; font-weight: bold;">New Subtotal : {{ presentPrice($order->billing_subtotal) }}</p>

@endif

<p style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787e; font-size: 14px; line-height: 18px; padding-bottom: 0px; text-align: right; font-weight: bold;">Tax (13%): {{ presentPrice($order->billing_tax) }}</p>

<p style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787e; font-size: 14px; line-height: 18px; padding: 4px 4px; margin-top: 0px; display: block; float: right; text-align: center; font-weight: bold; border-style: solid; border-color: red;"> Total:  {{ presentPrice($order->billing_total) }}</p>

<br>
<br>
<br>

<h3 style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #2F3133; font-size: 14px; font-weight: bold; margin-top: 0; text-align: center;">Thank you for choosing us!</h3>


<p style="text-align: center;"><a href="http://206.189.152.67/" class="button button-green" target="_blank" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; border-radius: 3px; box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16); color: #ffffff; display: inline-block; text-decoration: none; -webkit-text-size-adjust: none; background-color: #2ab27b; border-top: 10px solid #2ab27b; border-right: 18px solid #2ab27b; border-bottom: 10px solid #2ab27b; border-left: 18px solid #2ab27b;">Return to website</a></p>

              


</body>
</html>
