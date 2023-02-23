<?

if(isset($_POST['button']))
  
    {
     
        $email=$_POST['email'];
        $name=$_POST['name'];
        header("location:Emailphp.php?email=".$email."&name=".$name);
        

 }





?>




  <!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="es"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="es"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="es"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="es"> <!--<![endif]-->
<head>

  <!-- Basic Page Needs
  ================================================== -->
  
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Donate to South American Initiative</title>
  <meta name="BitPay.com" content="">
  <meta name="The World Leader in Bitcoin Payment Processing" content="">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <!-- Facebook
  ================================================== -->
  <meta property="og:title" content="Donate to South American Initiative" />
  <meta property="og:description" content="Donate to South American Initiative using Bitcoin!" />
  

  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="format-detection" content="telephone=no">

  <!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="bitpay.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono|Ubuntu:300,700,300italic,700italic" rel="stylesheet" type="text/css">
  <link href="fa.css" rel="stylesheet"> <!--[if IE 7]> <link href="/assets/fa/css/fa-ie7.css" rel="stylesheet"> <![endif]-->

  <!-- Favicons
  ================================================== -->
  <link rel="shortcut icon" href="favicon.ico">
  
  <style>
  @media (max-width: 767px){
    .form-horizontal .control-label {
      display: none;
      border: none;
    }
  }

  body{
    font-size: 18px;
  }
  .well{
    border:none;
    box-shadow: none;
  }

  input[type=text], input[type=number], input[type=email], select { border: 1px solid #eee;}

  input[type=text], input[type=number], input[type=email] {
    text-align: left;
    line-height: 1.2em !important;
    height: 1.5em !important;
    font-size: 15px !important;
    box-shadow: none !important;
    margin: 0 !important;
    border-radius: 4px !important;
    font-family: ubuntu !important;
  }

  iframe{
    height:1087px;
  }
  @media only screen and (min-width: 768px){
    iframe{
      height:761px;
    }
    input[type=text], input[type=number], input[type=email], select{
      border:1px solid #eee !important;
    }
  }

  select{
    border-radius: 4px !important;
    font-family: ubuntu !important;
    box-shadow: none !important;
  }

  @media (min-width: 768px){
    .typical {
      width: 90%;
      margin: auto;
    }
    .container{
      max-width: 768px;
    }
  }
  fieldset{
    padding: 0;
    margin-bottom: 2em;
  }
  ::-webkit-input-placeholder {
      color:    #999;
  }
  :-moz-placeholder {
      color:    #999;
      opacity:  1;
  }
  ::-moz-placeholder {
      color:    #999;
      opacity:  1;
  }
  :-ms-input-placeholder {
      color:    #999;
  }


  </style>

  



</head>

<body data-csrf-token="86zVdHstqMX8W4wu96UiYMvgn" >
<div id="background-image"></div>
  <div id="alertMsg" class="alert-container">
    <div id="alertMsgTextContainer" class="alert-message">
      <div id="alertClose"><a class="close" style="padding-right: 5px; color: #B94A48">&times;</a></div>
      <div style="padding-right: 20px; padding-left: 5px;"><span id="alertMsgText"></span></div>
    </div>
    <div id="alertTab" class="alert-tab" style="position: relative; top: -1px">
      <img id="alertExcl" class="excl" style="cursor: pointer;  z-index: 1100;" src="/img/exclamation32.png" />
    </div>
  </div>

  <!-- Modals
  ================================================== -->

 

  
  <!-- Primary Page Layout
  ================================================== -->
  <div class="container" style="margin: 0 auto 2em;margin-top:10px;border-radius: 4px;/*box-shadow:0 0 0 5px rgba(128,128,128,.5) inset;*/background:white;">


    <div class="row middle" style="margin: 0px; text-align: left">

    
      <div class="container middle-buyer" style="vertical-align: top; margin: auto; text-align-last:center;">
    



<h2 class="text-left" style="margin-top:15px;padding-left:15px;">Donate Bitcoin to South American Initiative</h2>
<hr style="margin-left:15px;margin-right:15px;">

<img src="codigoqr.png" alt="" style=" display: block; margin:auto; width: 36%;">

 <p style="
    text-align: center;
    color: darkblue;
"> 37gYQv4XDeVjX8iyY6DV1FHkQW3N7oYqYZ</p>


<form action="" id="donate"  method="post" class="typical">
<div hidden>
<input type="text" name="name" id="name" value="<? echo($_GET['name']);  ?>">
<input type="text" name="email" id="email" value="<? echo($_GET['email']);  ?>" >

</div>

<button action="" target="_blank" class="btn" type="submit" id="button" name="button" style="  padding: 16px 32px; display: inline-block; text-transform: uppercase; background-color: #008CBA;color: white;" > Complete  Donation </button>



</form>

</div>


  </div>



  <!-- container -->
  <!-- Script
  ================================================== -->
  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript" src="bitpay.js"></script>

 <!-- 
  <script type="text/javascript">
    window.lstrs={};
    $('#languageSelect').val('es');
    
    (function(){var divName='modal';(function(){var e=Handlebars.template,t=Handlebars.templates=Handlebars.templates||{};t[divName]=e(function(e,t,n,r,i){this.compilerInfo=[2,">= 1.0.0-rc.3"],n=n||e.helpers,i=i||{};var s="",o,u="function",a=this.escapeExpression;return s+='<div class="modal hide" id="pageModal">\n  <div class="modal-header">\n    '+a((o=t.title,typeof o===u?o.apply(t):o))+'\n  </div>\n  <div class="modal-body">\n    <p>'+a((o=t.message,typeof o===u?o.apply(t):o))+'</p>\n	<br><br><br>\n    <a href="#" class="btn btn-large" data-dismiss="modal">Close</a>\n  </div>\n</div>\n',s})})();})();
  </script> -->
</body>
</html>