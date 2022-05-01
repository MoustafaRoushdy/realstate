<?php

$HOST = "localhost";
$USER = "root";
$PASSWORD = "";
$DATABASE = "findmyhomee";
$PORT = 3306;

$connection= new mysqli($HOST, $USER, $PASSWORD, $DATABASE, $PORT);
if ($connection -> connect_errno) {
  echo "Failed to connect to MySQL: " . $connection -> connect_error;
  exit();
}
if (isset($_POST['q9_address9']["addr_line1"]))
{
  $StreetAddress=$_POST['q9_address9']["addr_line1"];
  $StreetAddress2 = $_POST['q9_address9']["addr_line2"];
  $city = $_POST['q9_address9']['city'];
  $state = $_POST['q9_address9']['state'];
  $postal = $_POST['q9_address9']['postal'];
  $bedrooms = $_POST['q10_Bedrooms'];
  $bathrooms = $_POST['q15_bathrooms'];
  $whatis = $_POST['q17_whatIs'];
  $howmany = $_POST['q14_howMany'];
  $price= $_POST['q33_howMuch33'];

  $res = $connection->query(
    "INSERT INTO `property` 
    VALUES(2,1,$whatis,'we need add desc',$price,'add property type',2,'$StreetAddress','available',$bedrooms,$bathrooms
    )"
  );
  
  }


// [4,4,7,2,3]
//q9_address9 = [ name=>"ahmed" mail=>"anymail@yahoo.com" age=>13]


// $res = $connection->query(
//   "INSERT INTO `buyer` 
//   VALUES (1,1,'ahmed','mohamed','myusername','and addressz','ahmed@mail.com','123')
//   ");
  
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=https%3A%2F%2Fform.jotform.com%2F221203222175541" title="oEmbed Form">
        <link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=https%3A%2F%2Fform.jotform.com%2F221203222175541" title="oEmbed Form">
        <meta property="og:title" content="House Seller Form">
        <meta property="og:url" content="https://form.jotform.com/221203222175541">
        <meta property="og:description" content="Please click the link to complete this form.">
        <meta name="slack-app-id" content="AHNMASS8M">
        <link rel="shortcut icon" href="https://cdn.jotfor.ms/assets/img/favicons/favicon-2021.svg">
        <link rel="canonical" href="https://form.jotform.com/221203222175541">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1">
        <meta name="HandheldFriendly" content="true">
        <title>House Seller Form</title>
        <link href="https://cdn01.jotfor.ms/static/formCss.css?3.3.33035" rel="stylesheet" type="text/css">
        <style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
        <link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/nova.css?3.3.33035">
        <link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?themeRevisionID=59fb4852cf3bfe589c6c6f21">
        <link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/css/styles/payment/payment_feature.css?3.3.33035">
        <style type="text/css">
            .form-label-left{
                width:160px;
            }
            .form-line{
                padding-top:12px;
                padding-bottom:12px;
            }
            .form-label-right{
                width:160px;
            }
            body, html{
                margin:0;
                padding:0;
                background:#fff;
            }
        
            .form-all{
                margin:0px auto;
                padding-top:20px;
                width:700px;
                color:#555 !important;
                font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
                font-size:14px;
            }
            .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
                color: #555;
            }
        
        </style>
        
        <style type="text/css" id="form-designer-style">
            /* Injected CSS Code */
        /*PREFERENCES STYLE*/
            .form-all {
              font-family: Lucida Grande, sans-serif;
            }
            .form-all .qq-upload-button,
            .form-all .form-submit-button,
            .form-all .form-submit-reset,
            .form-all .form-submit-print {
              font-family: Lucida Grande, sans-serif;
            }
            .form-all .form-pagebreak-back-container,
            .form-all .form-pagebreak-next-container {
              font-family: Lucida Grande, sans-serif;
            }
            .form-header-group {
              font-family: Lucida Grande, sans-serif;
            }
            .form-label {
              font-family: Lucida Grande, sans-serif;
            }
          
            .form-label.form-label-auto {
              
            display: inline-block;
            float: left;
            text-align: left;
          
            }
          
            .form-line {
              margin-top: 12px;
              margin-bottom: 12px;
            }
          
            .form-all {
              max-width: 700px;
              width: 100%;
            }
          
            .form-label.form-label-left,
            .form-label.form-label-right,
            .form-label.form-label-left.form-label-auto,
            .form-label.form-label-right.form-label-auto {
              width: 160px;
            }
          
            .form-all {
              font-size: 14px
            }
            .form-all .qq-upload-button,
            .form-all .qq-upload-button,
            .form-all .form-submit-button,
            .form-all .form-submit-reset,
            .form-all .form-submit-print {
              font-size: 14px
            }
            .form-all .form-pagebreak-back-container,
            .form-all .form-pagebreak-next-container {
              font-size: 14px
            }
          
            .supernova .form-all, .form-all {
              background-color: #fff;
            }
          
            .form-all {
              color: #555;
            }
            .form-header-group .form-header {
              color: #555;
            }
            .form-header-group .form-subHeader {
              color: #555;
            }
            .form-label-top,
            .form-label-left,
            .form-label-right,
            .form-html,
            .form-checkbox-item label,
            .form-radio-item label {
              color: #555;
            }
            .form-sub-label {
              color: #6f6f6f;
            }
          
            .supernova {
              background-color: undefined;
            }
            .supernova body {
              background: transparent;
            }
          
            .form-textbox,
            .form-textarea,
            .form-dropdown,
            .form-radio-other-input,
            .form-checkbox-other-input,
            .form-captcha input,
            .form-spinner input {
              background-color: undefined;
            }
          
            .supernova {
              background-image: none;
            }
            #stage {
              background-image: none;
            }
          
            .form-all {
              background-image: none;
            }
          
          .ie-8 .form-all:before { display: none; }
          .ie-8 {
            margin-top: auto;
            margin-top: initial;
          }
          
          /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
            /* Injected CSS Code */
        </style>
        
        <!-- <script src="https://cdn02.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
        <script src="https://cdn03.jotfor.ms/static/jotform.forms.js?3.3.33035" type="text/javascript"></script>
        <script defer="" src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.js"></script>
        <script type="text/javascript">	JotForm.newDefaultTheme = false;
            JotForm.extendsNewTheme = false;
            JotForm.newPaymentUIForNewCreatedForms = false;
        
            JotForm.init(function(){
            /*INIT-START*/
              setTimeout(function() {
                  $('input_6').hint('ex: myname@example.com');
               }, 20);
        if (window.JotForm && JotForm.accessible) $('input_17').setAttribute('tabindex',0);
        if (window.JotForm && JotForm.accessible) $('input_18').setAttribute('tabindex',0);
        if (window.JotForm && JotForm.accessible) $('input_14').setAttribute('tabindex',0);
        if (window.JotForm && JotForm.accessible) $('input_19').setAttribute('tabindex',0);
        if (window.JotForm && JotForm.accessible) $('input_21').setAttribute('tabindex',0);
        if (window.JotForm && JotForm.accessible) $('input_22').setAttribute('tabindex',0);
        if (window.JotForm && JotForm.accessible) $('input_24').setAttribute('tabindex',0);
        if (window.JotForm && JotForm.accessible) $('input_26').setAttribute('tabindex',0);
        if (window.JotForm && JotForm.accessible) $('input_29').setAttribute('tabindex',0);
        if (window.JotForm && JotForm.accessible) $('input_31').setAttribute('tabindex',0);
        if (window.JotForm && JotForm.accessible) $('input_33').setAttribute('tabindex',0);
        if (window.JotForm && JotForm.accessible) $('input_35').setAttribute('tabindex',0);
        if (window.JotForm && JotForm.accessible) $('input_36').setAttribute('tabindex',0);
        if (window.JotForm && JotForm.accessible) $('input_72').setAttribute('tabindex',0);
        if (window.JotForm && JotForm.accessible) $('input_73').setAttribute('tabindex',0);
        if (window.JotForm && JotForm.accessible) $('input_74').setAttribute('tabindex',0);
        if (window.JotForm && JotForm.accessible) $('input_75').setAttribute('tabindex',0);
        if (window.JotForm && JotForm.accessible) $('input_76').setAttribute('tabindex',0);
        if (window.JotForm && JotForm.accessible) $('input_77').setAttribute('tabindex',0);
        if (window.JotForm && JotForm.accessible) $('input_56').setAttribute('tabindex',0);
        if (window.JotForm && JotForm.accessible) $('input_60').setAttribute('tabindex',0);
        if (window.JotForm && JotForm.accessible) $('input_62').setAttribute('tabindex',0);
        if (window.JotForm && JotForm.accessible) $('input_63').setAttribute('tabindex',0);
        if (window.JotForm && JotForm.accessible) $('input_64').setAttribute('tabindex',0);
            /*INIT-END*/
            });
        
           JotForm.prepareCalculationsOnTheFly([null,{"name":"doubleclickTo","qid":"1","text":"Please fill out as much information as you can about your property so that we can evaluate which program might best suit your needs.","type":"control_text"},null,{"name":"fullName3","qid":"3","text":"Full Name","type":"control_fullname"},{"name":"phoneNumber4","qid":"4","text":"Phone Number","type":"control_phone"},{"name":"mobileNumber","qid":"5","text":"Mobile Number","type":"control_phone"},{"name":"email","qid":"6","text":"E-mail","type":"control_email"},{"name":"bestTime","qid":"7","text":"Best Time to Call","type":"control_dropdown"},null,{"name":"address9","qid":"9","text":"Address","type":"control_address"},{"name":"Bedrooms","qid":"10","text":" \tBedrooms:","type":"control_dropdown"},{"name":"clickTo","qid":"11","text":"Contact Information","type":"control_head"},{"name":"clickTo12","qid":"12","text":"Property Information","type":"control_head"},null,{"name":"howMany","qid":"14","text":"How many stories? ","type":"control_textbox"},{"name":"bathrooms","qid":"15","text":"Bathrooms:","type":"control_dropdown"},{"name":"garage","qid":"16","text":"Garage: ","type":"control_dropdown"},{"name":"whatIs","qid":"17","text":"What is the approximate square footage:","type":"control_textbox"},{"name":"yearBuilt","qid":"18","text":"Year Built: ","type":"control_textbox"},{"name":"howMany19","qid":"19","text":"How many years have you owned this home:","type":"control_textbox"},{"name":"whatIs20","qid":"20","text":"What is the current condition of your property?\t","type":"control_dropdown"},{"name":"whatKind","qid":"21","text":"What kind of repairs and maintenance does the house need?","type":"control_textarea"},{"name":"howMuch","qid":"22","text":"How much do you think these repairs will cost in dollars? $","type":"control_textbox"},{"name":"isThere","qid":"23","text":"Is there anyone living in the house?","type":"control_dropdown"},{"name":"howLong","qid":"24","text":"How long has the property been for sale?","type":"control_textbox"},{"name":"isThe25","qid":"25","text":"Is the house currently listed with a ®Realtor?","type":"control_radio"},{"name":"ifYes","qid":"26","text":"If Yes, when does the listing expire?","type":"control_textbox"},{"name":"ifNo","qid":"27","text":"If No, has the house been previously listed?","type":"control_radio"},{"name":"clickTo28","qid":"28","text":"Your Situation","type":"control_head"},{"name":"whatsYour","qid":"29","text":"What's your situation? Why are you selling?","type":"control_textarea"},{"name":"clickTo30","qid":"30","text":"Pricing Information","type":"control_head"},{"name":"What","qid":"31","text":"\tWhat do you think your house is worth? $","type":"control_textbox"},{"name":"howDid","qid":"32","text":"How did you determine the value?","type":"control_dropdown"},{"name":"howMuch33","qid":"33","text":"How much are you asking for your house? $","type":"control_textbox"},{"name":"areYou","qid":"34","text":"Are you looking to sell your house for what you owe?","type":"control_radio"},{"name":"whatIs35","qid":"35","text":"What is the least you would accept if we closed quickly?","type":"control_textbox"},{"name":"How","qid":"36","text":"\tHow soon are you planning on moving?","type":"control_textbox"},null,null,null,null,null,{"name":"doubleclickTo42","qid":"42","text":" Payment:","type":"control_text"},{"name":"doubleclickTo43","qid":"43","text":"Balance:","type":"control_text"},null,null,{"name":"doubleclickTo46","qid":"46","text":"Interest Rate %","type":"control_text"},null,null,{"name":"Payments","qid":"49","text":"  Payments Current?","type":"control_radio"},null,null,null,null,null,null,{"name":"ifNo56","qid":"56","text":"If No, how far behind? $","type":"control_textbox"},{"name":"input57","qid":"57","type":"control_radio"},{"name":"input58","qid":"58","type":"control_radio"},{"name":"areYour","qid":"59","text":"Are your property taxes and insurance included in your   monthly mortgage payment?","type":"control_radio"},{"name":"Do","qid":"60","text":"\tDo you pay Homeowner\u002FCondo Association dues? If so, how much per year? $","type":"control_textbox"},{"name":"mayWe","qid":"61","text":"May we take over your payments until we get the house sold?","type":"control_radio"},{"name":"How62","qid":"62","text":"\tHow did you hear about us?","type":"control_textbox"},{"name":"Do63","qid":"63","text":"\tDo you have any questions or comments you would like to share with us?\t   \t  ","type":"control_textarea"},{"name":"ifWe64","qid":"64","text":"If we paid cash and closed by next Friday what is the lowest amount you would be willing to accept?","type":"control_textbox"},{"name":"submit","qid":"65","text":"Submit","type":"control_button"},null,{"name":"doubleclickTo67","qid":"67","text":"Home Seller Form","type":"control_text"},{"name":"doubleclickTo68","qid":"68","text":"                         Ist Mortgage                2nd Mortgage ","type":"control_text"},null,null,null,{"name":"input72","qid":"72","type":"control_textbox"},{"name":"input73","qid":"73","type":"control_textbox"},{"name":"input74","qid":"74","type":"control_textbox"},{"name":"input75","qid":"75","type":"control_textbox"},{"name":"input76","qid":"76","type":"control_textbox"},{"name":"input77","qid":"77","type":"control_textbox"}]);
           setTimeout(function() {
        JotForm.paymentExtrasOnTheFly([null,{"name":"doubleclickTo","qid":"1","text":"Please fill out as much information as you can about your property so that we can evaluate which program might best suit your needs.","type":"control_text"},null,{"name":"fullName3","qid":"3","text":"Full Name","type":"control_fullname"},{"name":"phoneNumber4","qid":"4","text":"Phone Number","type":"control_phone"},{"name":"mobileNumber","qid":"5","text":"Mobile Number","type":"control_phone"},{"name":"email","qid":"6","text":"E-mail","type":"control_email"},{"name":"bestTime","qid":"7","text":"Best Time to Call","type":"control_dropdown"},null,{"name":"address9","qid":"9","text":"Address","type":"control_address"},{"name":"Bedrooms","qid":"10","text":" \tBedrooms:","type":"control_dropdown"},{"name":"clickTo","qid":"11","text":"Contact Information","type":"control_head"},{"name":"clickTo12","qid":"12","text":"Property Information","type":"control_head"},null,{"name":"howMany","qid":"14","text":"How many stories? ","type":"control_textbox"},{"name":"bathrooms","qid":"15","text":"Bathrooms:","type":"control_dropdown"},{"name":"garage","qid":"16","text":"Garage: ","type":"control_dropdown"},{"name":"whatIs","qid":"17","text":"What is the approximate square footage:","type":"control_textbox"},{"name":"yearBuilt","qid":"18","text":"Year Built: ","type":"control_textbox"},{"name":"howMany19","qid":"19","text":"How many years have you owned this home:","type":"control_textbox"},{"name":"whatIs20","qid":"20","text":"What is the current condition of your property?\t","type":"control_dropdown"},{"name":"whatKind","qid":"21","text":"What kind of repairs and maintenance does the house need?","type":"control_textarea"},{"name":"howMuch","qid":"22","text":"How much do you think these repairs will cost in dollars? $","type":"control_textbox"},{"name":"isThere","qid":"23","text":"Is there anyone living in the house?","type":"control_dropdown"},{"name":"howLong","qid":"24","text":"How long has the property been for sale?","type":"control_textbox"},{"name":"isThe25","qid":"25","text":"Is the house currently listed with a ®Realtor?","type":"control_radio"},{"name":"ifYes","qid":"26","text":"If Yes, when does the listing expire?","type":"control_textbox"},{"name":"ifNo","qid":"27","text":"If No, has the house been previously listed?","type":"control_radio"},{"name":"clickTo28","qid":"28","text":"Your Situation","type":"control_head"},{"name":"whatsYour","qid":"29","text":"What's your situation? Why are you selling?","type":"control_textarea"},{"name":"clickTo30","qid":"30","text":"Pricing Information","type":"control_head"},{"name":"What","qid":"31","text":"\tWhat do you think your house is worth? $","type":"control_textbox"},{"name":"howDid","qid":"32","text":"How did you determine the value?","type":"control_dropdown"},{"name":"howMuch33","qid":"33","text":"How much are you asking for your house? $","type":"control_textbox"},{"name":"areYou","qid":"34","text":"Are you looking to sell your house for what you owe?","type":"control_radio"},{"name":"whatIs35","qid":"35","text":"What is the least you would accept if we closed quickly?","type":"control_textbox"},{"name":"How","qid":"36","text":"\tHow soon are you planning on moving?","type":"control_textbox"},null,null,null,null,null,{"name":"doubleclickTo42","qid":"42","text":" Payment:","type":"control_text"},{"name":"doubleclickTo43","qid":"43","text":"Balance:","type":"control_text"},null,null,{"name":"doubleclickTo46","qid":"46","text":"Interest Rate %","type":"control_text"},null,null,{"name":"Payments","qid":"49","text":"  Payments Current?","type":"control_radio"},null,null,null,null,null,null,{"name":"ifNo56","qid":"56","text":"If No, how far behind? $","type":"control_textbox"},{"name":"input57","qid":"57","type":"control_radio"},{"name":"input58","qid":"58","type":"control_radio"},{"name":"areYour","qid":"59","text":"Are your property taxes and insurance included in your   monthly mortgage payment?","type":"control_radio"},{"name":"Do","qid":"60","text":"\tDo you pay Homeowner\u002FCondo Association dues? If so, how much per year? $","type":"control_textbox"},{"name":"mayWe","qid":"61","text":"May we take over your payments until we get the house sold?","type":"control_radio"},{"name":"How62","qid":"62","text":"\tHow did you hear about us?","type":"control_textbox"},{"name":"Do63","qid":"63","text":"\tDo you have any questions or comments you would like to share with us?\t   \t  ","type":"control_textarea"},{"name":"ifWe64","qid":"64","text":"If we paid cash and closed by next Friday what is the lowest amount you would be willing to accept?","type":"control_textbox"},{"name":"submit","qid":"65","text":"Submit","type":"control_button"},null,{"name":"doubleclickTo67","qid":"67","text":"Home Seller Form","type":"control_text"},{"name":"doubleclickTo68","qid":"68","text":"                         Ist Mortgage                2nd Mortgage ","type":"control_text"},null,null,null,{"name":"input72","qid":"72","type":"control_textbox"},{"name":"input73","qid":"73","type":"control_textbox"},{"name":"input74","qid":"74","type":"control_textbox"},{"name":"input75","qid":"75","type":"control_textbox"},{"name":"input76","qid":"76","type":"control_textbox"},{"name":"input77","qid":"77","type":"control_textbox"}]);}, 20); 
        </script> -->
        </head>
<body>
    <form class="jotform-form" action="" method="post" name="form_221203222175541" id="221203222175541" accept-charset="utf-8" autocomplete="on" novalidate="true">
      <input type="hidden" name="formID" value="221203222175541">
      <input type="hidden" id="JWTContainer" value="">
      <input type="hidden" id="cardinalOrderNumber" value="">
      <div role="main" class="form-all">
        <ul class="form-section page-section">
          <li class="form-line form-line-column form-col-1" data-type="control_text" id="id_67">
            <div id="cid_67" class="form-input-wide">
              <div id="text_67" class="form-html" data-component="text">
                <strong><?php echo "hello" ?>Home Seller Form</strong>
              </div>
            </div>
          </li>
          <li class="form-line" data-type="control_text" id="id_1">
            <div id="cid_1" class="form-input-wide">
              <div id="text_1" class="form-html" data-component="text">
                Please fill out as much information as you can about your property so that we can evaluate which program might best suit your needs.
              </div>
            </div>
          </li>
      
          <li id="cid_12" class="form-input-wide" data-type="control_head">
            <div class="form-header-group  header-default">
              <div class="header-text httal htvam">
                <h2 id="header_12" class="form-header" data-component="header">
                  Property Information
                </h2>
              </div>
            </div>
          </li>
          <li class="form-line" data-type="control_address" id="id_9">
            <label class="form-label form-label-left form-label-auto" id="label_9" for="input_9_addr_line1"> Address </label>
            <div id="cid_9" class="form-input">
              <div summary="" class="form-address-table jsTest-addressField">
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                  <span class="form-address-line form-address-street-line jsTest-address-lineField">
                    <span class="form-sub-label-container" style="vertical-align:top">
                      <input type="text" id="input_9_addr_line1" name="q9_address9[addr_line1]" class="form-textbox form-address-line" data-defaultvalue="" autocomplete="section-input_9 address-line1" value="" data-component="address_line_1" aria-labelledby="label_9 sublabel_9_addr_line1" >
                      <label class="form-sub-label" for="input_9_addr_line1" id="sublabel_9_addr_line1" style="min-height:13px" aria-hidden="false"> Street Address <span class="form-required"\>*</span></label> 
                    </span>
                  </span>
                </div>
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                  <span class="form-address-line form-address-street-line jsTest-address-lineField">
                    <span class="form-sub-label-container" style="vertical-align:top">
                      <input type="text" id="input_9_addr_line2" name="q9_address9[addr_line2]" class="form-textbox form-address-line" data-defaultvalue="" autocomplete="section-input_9 address-line2" value="" data-component="address_line_2" aria-labelledby="label_9 sublabel_9_addr_line2">
                      <label class="form-sub-label" for="input_9_addr_line2" id="sublabel_9_addr_line2" style="min-height:13px" aria-hidden="false"> Street Address Line 2 </label>
                    </span>
                  </span>
                </div>
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                  <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                    <span class="form-sub-label-container" style="vertical-align:top">
                      <input type="text" id="input_9_city" name="q9_address9[city]" class="form-textbox form-address-city" data-defaultvalue="" autocomplete="section-input_9 address-level2" value="" data-component="city" aria-labelledby="label_9 sublabel_9_city">
                      <label class="form-sub-label" for="input_9_city" id="sublabel_9_city" style="min-height:13px" aria-hidden="false"> City<span class="form-required"\>*</span> </label>
                    </span>
                  </span>
                  <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                    <span class="form-sub-label-container" style="vertical-align:top">
                      <input type="text" id="input_9_state" name="q9_address9[state]" class="form-textbox form-address-state" data-defaultvalue="" autocomplete="section-input_9 address-level1" value="" data-component="state" aria-labelledby="label_9 sublabel_9_state">
                      <label class="form-sub-label" for="input_9_state" id="sublabel_9_state" style="min-height:13px" aria-hidden="false"> State / Province </label>
                    </span>
                  </span>
                </div>
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                  <span class="form-address-line form-address-zip-line jsTest-address-lineField ">
                    <span class="form-sub-label-container" style="vertical-align:top">
                      <input type="text" id="input_9_postal" name="q9_address9[postal]" class="form-textbox form-address-postal" data-defaultvalue="" autocomplete="section-input_9 postal-code" value="" data-component="zip" aria-labelledby="label_9 sublabel_9_postal">
                      <label class="form-sub-label" for="input_9_postal" id="sublabel_9_postal" style="min-height:13px" aria-hidden="false"> Postal / Zip Code </label>
                    </span>
                  </span>
                </div>
              </div>
            </div>
          </li>
          <li class="form-line form-line-column form-col-1" data-type="control_dropdown" id="id_10">
            <label class="form-label form-label-top" id="label_10" for="input_10"> Bedrooms: </label>
            <div id="cid_10" class="form-input-wide">
              <select class="form-dropdown" id="input_10" name="q10_Bedrooms" style="width:150px" data-component="dropdown">
                <option value="">  </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
                <option value="10+"> 10+ </option>
              </select>
            </div>
          </li>
          <li class="form-line form-line-column form-col-2" data-type="control_dropdown" id="id_15">
            <label class="form-label form-label-top" id="label_15" for="input_15"> Bathrooms: </label>
            <div id="cid_15" class="form-input-wide">
              <select class="form-dropdown" id="input_15" name="q15_bathrooms" style="width:150px" data-component="dropdown">
                <option value="">  </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
                <option value="10+"> 10+ </option>
              </select>
            </div>
          </li>
          <li class="form-line form-line-column form-col-3" data-type="control_textbox" id="id_17">
            <label class="form-label form-label-top" id="label_17" for="input_17"> What is the approximate square footage: </label>
            <div id="cid_17" class="form-input-wide">
              <input type="text" id="input_17" name="q17_whatIs" data-type="input-textbox" class="form-textbox" data-defaultvalue="" size="20" value="" placeholder=" " data-component="textbox" aria-labelledby="label_17">
            </div>
          </li>
         
          <li class="form-line form-line-column form-col-5" data-type="control_textbox" id="id_14">
            <label class="form-label form-label-top" id="label_14" for="input_14"> How many stories? </label>
            <div id="cid_14" class="form-input-wide">
              <input type="text" id="input_14" name="q14_howMany" data-type="input-textbox" class="form-textbox" data-defaultvalue="" size="20" value="" placeholder=" " data-component="textbox" aria-labelledby="label_14">
            </div>
          </li>
          <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_33">
            <label class="form-label form-label-left" id="label_33" for="input_33"> How much are you asking for your house? $ </label>
            <div id="cid_33" class="form-input">
              <input type="text" id="input_33" name="q33_howMuch33" data-type="input-textbox" class="form-textbox" data-defaultvalue="" size="20" value="" placeholder=" " data-component="textbox" aria-labelledby="label_33">
            </div>
          </li>
         
          <li class="form-line" data-type="control_button" id="id_65">
            <div id="cid_65" class="form-input-wide">
              <div style="margin-left:156px" data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
                <button id="input_65" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
                  Submit
                </button>
              </div>
            </div>
          </li>
          <li style="display:none">
            Should be Empty:
            <input type="text" name="website" value="">
          </li>
        </ul>
      </div>
      <script>
      JotForm.showJotFormPowered = "new_footer";
      </script>
      <script>
      JotForm.poweredByText = "Powered by Jotform";
      </script>
      <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="221203222175541-221203222175541">
      <script type="text/javascript">
      var all_spc = document.querySelectorAll("form[id='221203222175541'] .si" + "mple" + "_spc");
    for (var i = 0; i < all_spc.length; i++)
    {
      all_spc[i].value = "221203222175541-221203222175541";
    }
      </script>
      <div class="formFooter-heightMask">
      </div>
      <div class="formFooter f6 branding21">
        <div class="formFooter-wrapper formFooter-leftSide">
          <a href="https://www.jotform.com/?utm_source=formfooter&amp;utm_medium=banner&amp;utm_term=221203222175541&amp;utm_content=jotform_logo&amp;utm_campaign=powered_by_jotform_le" target="_blank" class="formFooter-logoLink"><img class="formFooter-logo" src="https://cdn.jotfor.ms/assets/img/logo2021/jotform-logo-white.svg" alt="Jotform Logo" style="height: 44px;"></a>
        </div>
        <div class="formFooter-wrapper formFooter-rightSide">
          <span class="formFooter-text">
            Now create your own Jotform - It's free!
          </span>
          <a class="formFooter-button" href="https://www.jotform.com/?utm_source=formfooter&amp;utm_medium=banner&amp;utm_term=221203222175541&amp;utm_content=jotform_button&amp;utm_campaign=powered_by_jotform_le" target="_blank">Create your own Jotform</a>
        </div>
      </div>
    <input type="hidden" name="event_id" value="1651406954550_221203222175541_kdsitS0"></form><img id="event_tracking_image" src="https://events.jotform.com/form/221203222175541/?ref=&amp;res=1536x864&amp;eventID=1651406954550_221203222175541_kdsitS0&amp;loc=https%253A%252F%252Fwww.jotform.com%252Fform%252F221203222175541" alt="jftr" width="1" height="1" style="display: none;">
    
    </body>
</html>

   