


<div class="popup-form"  style="display:none";>
<div class="formstep">
<div class="first">
1</div>
<div class="second">
2</div>
<div class="third">
3</div>

</div>
<h1>Payment</h1>
<h2>Step - 1</h2>
<br>
<form id="orderform">
<label for="" >Order Type</label>
<select class="field__input" aria-label="Disabled select example" >
  <option value="1">USD</option> 
</select>
<br>
<label for="" >Reference</label>
        <input type="text" name="reference" class="field__input"  placeholder=""><br> 
     <div class="checkout-buyer-accepts-marketing-wrapper">
     <div class="checkbox__input">
      <input class="input-checkbox" data-backup="buyer_accepts_marketing" type="checkbox" value="1" name="checkout" 
      id="checkout_buyer_accepts_marketing">
     </div>
     <label class="checkbox__label" for="checkout_buyer_accepts_marketing">
      Disable email notifications
       </label>  </div> <br>
 <label for="" >Client CPF</label>
        <input type="number" name="cpf" class="field__input"   placeholder=""required><br>
 <label for="" >Client email</label>
       <input type="text" name="email" class="field__input"   placeholder=""required><br>
 <label for="" >Client name</label>
       <input type="text" name="name"  class="field__input"   placeholder=""required><br>
 <label for="" >Client Birthdate</label>
       <input type="date" name="birthdate" class="field__input"   placeholder="" required><br>
 <label for="" >Client CEP</label>
       <input type="number" name="cep" class="field__input"   placeholder="" required><br>
 <label for="" >Client Address Street</label>
       <input type="text" name="address_street" class="field__input"   placeholder="" required><br>
 <label for="" >Client Address Number</label>
       <input type="number" name="address_number" class="field__input"  placeholder="" required><br>
 <label for="" >Client Address Complement</label>
       <input type="text" name="address_complement" class="field__input"  placeholder="" required><br>
 <label for="" >Client Address Neighbourhood</label>
       <input type="text" name="address_neighbourhood" class="field__input"   placeholder="" required><br>
<label for="" >Client Address City</label>
       <input type="text" name="address_city" class="field__input"   placeholder="" required><br>
<label for="" >Client Address State</label>
       <input type="text" name="address_state" class="field__input"   placeholder="" required><br>
<label for="" >Client Phone</label>
       <input type="number" name="phone" class="field__input"   placeholder="" required><br>
<label for="" >Shipping amount</label>
       <input type="number" name="amount" class="field__input"   placeholder="" required><br>
<label for="" >URL Redirect success</label>
       <input type="text" name="success" class="field__input"   placeholder="" required><br>
<label for="" >URL Redirect failed</label>
       <input type="text" name="failed" class="field__input"   placeholder="" required><br>
<label for="" >Item description</label>
       <input type="text" name="despcription" class="field__input"   placeholder="" required><br>
<label for="" >Item quantity</label>
       <input type="number" name="quantity" class="field__input"   placeholder="" required><br>
<label for="" >Item Amount</label>
       <input type="number" name="amount" class="field__input"   placeholder="" required><br>
       <input name="token" type="hidden" id="apitoken" ><br>
       <button class="btn btn-primary" type="submit" >Create order </button>
</form>
</div>







<div class="question-form" style="display:none";>
<div class="formstep">
<div class="first">
1</div>
<div class="second1">
2</div>
<div class="third">
3</div>

</div>
<h1>Payment</h1>
<h2>Step - 2</h2>
<br>
<div>
<a href="#">Questions</a>
<a href="#"  id="payform">Make Payment</a>
</div>
<br>
 <label for="" >Order Id</label><br>
        <input type="number" name="order_id"  class="odr_id inputqus"   placeholder="" > <div class="button_getq">
     <button  onclick="getQuestion()"  class="btn btn-primary">Get  Question</button>
</div>
<br>
<form method ='post'  id='sendanswer'>
<div id="append_question">

</div>
<br>
<br>
 <button  type='submit' class='btn btn-primary'>Send Answer</button>
   <input type='hidden' name='token' id='questiontoken'>
   <input type='hidden' name='order_id' class='odr_id'>
</form>
<br>
<br>
  <button type="button" class="btn btn-primary"  id="oderForm">Preview</button>  
<br>
</div>





<div class="payment-form" style="display:none";>
<div class="formstep">
<div class="first">
1</div>
<div class="second1">
2</div>
<div class="third1">
3</div>

</div>
<h1>Payment</h1>
<h2>Final Step</h2>
<br>
<form id="paymentform" method="post">
 <label for="" >Order Id</label><br>
        <input type="number" name="order_id" class="field__input  odr_id"  placeholder="" required> 
    
<br>
<label>Method</label>
<select name="method" class="field__input " id="method" aria-label="Default select example">
  <option  selected value="card">Credit Card</option>
  <option value="pix">PIX</option>
</select>
<br>
<label for="" >Installment</label>
       <input type="number" name="installment" class="field__input"   placeholder="" required>
<br>
<div class="card_detail">
<label for="" >Card Number</label>
       <input type="number" name="c_number" class="field__input"   placeholder="" required>
<br>
<label for="" >Card Holder</label>
       <input type="text" name="c_holder" class="field__input"   placeholder="" required>
<br>
<label for="" >Card Expiration Month</label>
       <input type="number" name="month" class="field__input"   placeholder="" required>
<br>
<label for="" >Card Expiration year</label>
       <input type="number" name="year" class="field__input"   placeholder="" required>
<br>
<label for="" >Card CVV</label>
       <input type="number" name="cvv" class="field__input"   placeholder="" required>
<br>
<label for="" >Card Brand</label>
       <input type="text" name="c_brand" class="field__input"   placeholder="" required>
<br>
<label for="" >Card Address Cep</label>
       <input type="number" name="c_cep" class="field__input"   placeholder="" required>
<br>
<label for="" >Card Address Street</label>
       <input type="text" name="street" class="field__input"   placeholder="" required>
<br>
<label for="" >Card Address Number</label>
       <input type="number" name="number" class="field__input"   placeholder="" required>
<br>
<label for="" >Card Address Complement</label>
       <input type="text" name="complement" class="field__input"   placeholder="" required>
<br>
<label for="" >Card Address Neighbourhood</label>
       <input type="text" name="neighbourhood" class="field__input"   placeholder="" required>
<br>
<label for="" >Card Address City</label>
       <input type="text" name="city" class="field__input"   placeholder="" required>
<br>
<label for="" >Card Address State</label>
       <input type="text" name="state" class="field__input"   placeholder="" required>
<br>
</div>
<input type='hidden' name='order_id' class='odr_id'>
<input type='hidden' name='token' class='token'>

 <button type="button" class="btn btn-primary" id ="backform">Preview</button>
  <button type="submit"  class="btn btn-primary">Payment</button>
<br>
</form>
</div>

<div id="success" style="display:none";>
<h1>Thank You. </h1> 
<h3>Your payment is successful</h3>
</div>


{% assign urlsuccess = order.order_status_url %}
{% assign urlerror= order.order_status_url %}

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://services.parcelow.com/shopify/splipay/style.css" />  

    <link rel="stylesheet" href="style.css">
    <br>
    <div id="splipay-wrap" style="display: block;">        
    </div>`
    <div class="finish-card">
            <p class="cta" style="text-align:center;">
                Por favor, aguarde...
            </p>
            <div class="txt_content">
                <p>Em instantes, você será redirecionado para a página de pagamento.
                </p>
                <br>
                <p>Caso você não seja redirecionado, por favor clique no botão abaixo:
                </p>
            </div>

            <p class="payment-btn showForm">
                <a  style="background-color: #27285C"> Efetuar Pagamento </a>
            </p>
        </div>





<script>
function openParcelowCheckout(){
	getform = document.getElementById("splipayForm");
	getform.submit();
}


window.onload = function checkpaymethod(){
	document.getElementById("splipay-wrap").style.display = "block";
	//setTimeout(openParcelowCheckout, 3000);
}




$('.showForm').click(function(){
//console.log('yess');
$(".popup-form").show();
$(".finish-card").hide();
$(".section__content").hide();
$(".step__footer").hide();
$(".os-order-number").hide();
})




$("#payform").click(function(){
$(".payment-form").show();
$(".question-form").hide();
})




$("#oderForm").click(function(){
$(".popup-form").show();
$(".question-form").hide();
})


$("#backform").click(function(){
$(".question-form").show();
$(".payment-form").hide();
})



$('#method').on('change', function() {
//console.log("hello");
var value = $(this).children(":selected").attr("value");
  if(value=='pix'){
$(".card_detail").hide();
}else{
$(".card_detail").show();
}
});






window.onload = function () {
//alert('hello');
$.ajax({
        url: 'https://personalartzone.com/developing-streaming/token_api.php',
        type: 'POST',   
        //dataType: 'jsonp',
       crossDomain: true,
        data: { }, 
        success: function(res) {
    var json = JSON.parse(res);
localStorage.setItem('token',json.access_token);         
        }
    });

}




$("#orderform").submit(function(event){
      event.preventDefault();
       var token=localStorage.getItem("token");
       $('#apitoken').val(token);

        $.ajax({
        url: 'https://personalartzone.com/developing-streaming/order_api.php',
        type: 'POST',   
        //dataType: 'jsonp',
        crossDomain: true,
        data: $(this).serialize(),
        success: function(res) {
      //console.log(res); return false;
        $(".question-form").show();
        $(".popup-form").hide();
         var json = JSON.parse(res);   
       $('.odr_id').val(json.data.order_id);
        }
    });
 });





function getQuestion(){
 var id=$(".odr_id").val();
var token=localStorage.getItem("token");
$.ajax({
        url: 'https://personalartzone.com/developing-streaming/questions_api.php',
        type: 'POST',   
        //dataType: 'jsonp',
        crossDomain: true,
        data: {"id":id, "token":token }, 
        success: function(res) {
     //console.log(res); return false;
       var json = JSON.parse(res);
       

    var html='';
    //html+="<form method ='post' id='sendanswer' >"
    for(var i=0; i<json.questions.length; i++){  
    html+="<label>"+json.questions[i].question+"</label>"
    html+="<input type ='hidden' name='question[]' value=" + json.questions[i].id+">"
 html+= "<select required name='answer[]'  id='my_select_"+json.questions[i].id+"'+ class='field__input' aria-label='Default select example'>";

    for(var j=0; j<json.questions[i].answers.length; j++){
    html+='<option value="' + json.questions[i].answers[j].id+ '">' +json.questions[i].answers[j].answer+ '</option>'
    }
    html+="</select>";
     } 
   

    $('#append_question').html(html);

   }
 });
}



$("#paymentform").submit(function(event){
      event.preventDefault();
     var token=localStorage.getItem("token");
     $(".token").val(token);
$.ajax({
        url: 'https://personalartzone.com/developing-streaming/payment_api.php',
        type: 'POST',   
       // dataType: 'jsonp',
        crossDomain: true,
        data: $(this).serialize(),
        success: function(res) {
        var json = JSON.parse(res);  
         //console.log(json);
       $("#success").show();
       $(".payment-form").hide();
        }
    });
})




  $("#sendanswer").submit(function(event){
     event.preventDefault();
     var id=$(".odr_id").val();
     var token=localStorage.getItem("token");
     $("#questiontoken").val(token);

$.ajax({
        url: 'https://personalartzone.com/developing-streaming/answers_api.php',
        type: 'POST',   
       //dataType: 'jsonp',
        crossDomain: true,
        data: $(this).serialize(),
        success: function(res) {
       $(".payment-form").show();
       $(".question-form").hide(); 
       var json = JSON.parse(res);   
      //console.log(json);    
      }
    });
  });
</script> 


  
   {% if order.financial_status != "paid" %}
   {% if transactions[0].gateway == "Parcelow - Pague em Reais" %} 

   <form id="splipayForm" action="https://services.parcelow.com/shopify/splipay/" method="post"> 
        <input type="text" name="urlsuccess" value={{ urlsuccess }}>
        <input type="text" name="urlerror" value={{ urlerror }}>
        <input type="text" name="reference" value="{{shop.domain}}#{{ order.id}}">
         {% assign inpNum = -1 %}
         {% for line in line_items %}

         {% capture finpNum %}{% increment inpNum %}{% endcapture %}
         {% capture fnlprodnum %}prodvar{{ inpNum }}{% endcapture %}
 
	<input class="cb-prodname"  type="hidden"  id="token" value=" ">	
        <input class="cb-prodname"  type="hidden"  id="order_id" value=" ">	
        <input class="cb-prodname" type="hidden" name="produtos[{{finpNum}}][descricao]" value="{{ line.title}}">
        <input class="cb-prodname" type="hidden" name="produtos[{{finpNum}}][quantidade]" value="{{ line.quantity}}">
        <input class="cb-prodprice{{finpNum}}" type="hidden" name="produtos[{{finpNum}}][valor]" 
        value="{{ line.final_price | money_without_currency | remove:','}}">
        <input class="cb-prodsku" type="hidden" name="produtos[{{finpNum}}][ref]" value="Sku:{{ line.sku }}">

        {% endfor %}

        <input class="cb-prodname" type="hidden" name="produtos[99][descricao]" value="Shipping Price">
        <input class="cb-prodprice{{finpNum}}" type="hidden" name="produtos[99][valor]" value="{{ order.shipping_price | 
         money_without_currency | remove:','}}">
        <input class="cb-prodsku" type="hidden" name="produtos[99][ref]" value="Sku:ShippingFee_ShippingPrice:{{ 
         order.shipping_price | money }}_OrderNum:{{ order.name }}">

        <input name="client_name" type="hidden" value="{{ order.customer.first_name }} {{ order.customer.last_name }}">
    
        <input name="client_email" type="hidden" value="{{ order.email }}">
        <input name="client_cpf" type="hidden" value="{{ billing_address.company }}">
        <input name="client_address_street" type="hidden" value="{{ billing_address.street }}">
        <input name="client_address_city" type="hidden" value="{{ billing_address.city }}">
        <input name="client_address_province" type="hidden" value="{{ billing_address.province }}">
        <input name="client_address_country" type="hidden" value="{{ billing_address.country }}">
        <input name="client_address_zip" type="hidden" value="{{ billing_address.zip }}">
        <input name="client_phone" type="hidden" value="{{ billing_address.phone }}">
		
           {% for discount_application in order.discount_applications %}
               <input name="client_discount_code" type="hidden" value={{ discount_application.title }}>
	       <input name="client_discount_value" type="hidden" value={{ discount_application.total_allocated_amount }}>
           {% endfor %}
    </form>


   <script>
   document.cookie="php=PHP"
   </script>

    <script>
    {% if checkout.shipping_method.title == 'Pick-up at the store' %}
        Shopify.Checkout.OrderStatus.addContentBox(
        '<h2>Pick-up in store</h2>',
        '<p>We are open everyday from 9am to 5pm.</p>'
        )
    {% endif %}
    </script>

    {% endif %}

{% endif %}
<style>
.popup-form h1 {
    text-align: center;
    font-size: 24px;
}

.popup-form h2 {
    text-align: left;
    padding: 1px;
    font-weight: 600;
}
.payment-form h1 {
    text-align: center;
    font-size: 24px;
}

.question-form h2 {
    text-align: left;
    padding: 1px;
    font-weight: 600;
}
.question-form h1 {
    text-align: center;
    font-size: 24px;
}

.payment-form h2 {
    text-align: left;
    padding: 1px;
    font-weight: 600;
}
input.inputqus {
    float: left;
    width: 50%;
    margin-right: 14px;
    border: 1px #00000042 solid;
    background-clip: padding-box;
    border-radius: 5px;
    display: block;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    padding: 0.9285714286em 0.7857142857em;
    word-break: normal;
    line-height: inherit;
}
.popup-form {
    background: #E3ECF1;
    padding: 20px;
    margin-top: 23px;
}
.payment-form {
    background: #E3ECF1;
    padding: 20px;
    margin-top: 23px;
}
.question-form {
    background: #E3ECF1;
    padding: 20px;
    margin-top: 23px;
}
button.btn.btn-primary{padding: 13px;}
.formstep {
    display: flex;
    justify-content: center;
    margin-top: 21px;
}

.first {
    border: 2px solid #1878b9;
    padding: 14px;
    font-size: 23px;
    background:#1878b9;
    color:white;
    cursor: pointer;
    margin-right: 46px;
}

.second {
    border: 2px solid black;
    padding: 14px;
    font-size: 23px;
    margin-right: 46px;
    cursor: pointer;
}

.third1 {
    border: 2px solid #1878b9;
    padding: 14px;
    font-size: 23px;
     background:#1878b9;
     color:white;
     cursor: pointer;
}
.second1 {
    border: 2px solid #1878b9;
    padding: 14px;
    font-size: 23px;
    background:#1878b9;
    color:white;
    margin-right: 46px;
    cursor: pointer;
}

.third {
    border: 2px solid #000005;
    padding: 14px;
    font-size: 23px;
    cursor: pointer;
}
div#success {
    text-align: center;
    background: #a0ffee;
    padding: 61px 30px;
    width: 100% !important;
    margin-top: 23px;
}

div#success h1 {
    font-family: cursive;
    font-size: 32px;
    font-weight: 500;
}

div#success h3 {
    padding-top: 6px;
    font-size: 19px;
    font-family: cursive;
}
.second::before {content: "";width: 45px;position: absolute;height: 2px;background: black;margin-left: 29px;margin-top: 7px;}
.second1::before {content: "";width: 45px;position: absolute;height: 2px;background: #1878b9;margin-left: 29px;margin-top: 7px;}
.first::before {content: "";width: 45px;position: absolute;height: 2px;background: #1878b9;margin-left: 29px;margin-top: 7px;}
</style> 