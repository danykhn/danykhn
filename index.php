
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
   <link rel="stylesheet" href="style.css">
  

    <title>Document</title>
</head>
<body>
    <h1>Goos</h1>
    <div class="product">   <!-- Main producto --->
        <div class="product_title">Gorra Goo$</div>
        <div class="product_image"> <img src="img/1.jpg" alt="" srcset=""></div>
        <div class="product_desc">Gorra Gold Edition</div>
       <div class="product_btn"> <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"data-preference-id="388733841-f1047adb-9405-4190-bd11-632f48fd0f4c"></script></div> 
        <div class="product_btn"></div>
    </div>                   <!-- Main producto --->
   
    <div class="product">   <!-- Main producto --->
        <div class="product_title">Gorra Goo$</div>
        <div class="product_image"> <img src="img/2.jpg" alt="" srcset=""></div>
        <div class="product_desc">Gorra Silver Edition</div>
        <div class="product_btn"> <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"data-preference-id="388733841-eeccd35a-a604-4339-bbac-4e4144ca034d"></script></div>
    </div>                   <!-- Main producto --->

    <div class="product">   <!-- Main producto --->
        <div class="product_title">Gorra Goo$</div>
        <div class="product_image"> <img src="img/3.jpg" alt="" srcset=""></div>
        <div class="product_desc">Gorra Iron Edition</div>
        <div class="product_btn"> <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"data-preference-id="388733841-f6d8c05c-5bed-4fa0-b17e-f855da38cd26"></script></div>
    </div>   <!-- Main producto --->

    <div>
        <a href="formulario.html" target="_blank" rel="noopener noreferrer">Formulario</a>
    </div>
    <form action="https://www.mi-sitio.com/procesar-pago" method="POST">
  <script
    src="https://www.mercadopago.com.ar/integrations/v1/web-tokenize-checkout.js"
    data-public-key="TEST-4b8def53-b280-4b21-a5b2-43f03cb5ee41"
    data-transaction-amount="10.00">
  </script>
</form>
</body>
</html>