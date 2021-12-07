<?
   if( $_GET["page"] == "phpinfo" )
   {
      phpinfo();
      exit;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title> APMSETUP </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body
{
   background-color:#ffffff;
   margin:0 auto;
}
p { margin:0; }

#wrap
{
   width:100%;
   height:100%;
   margin:0 auto;
   text-align:center;
}
#container
{
   width:600px;
   height:100%;
   background-color:#FFF;
   margin:0 auto;
}
   .logo
   {
      text-align:center;
      padding-top:40px;
      padding-bottom:40px;
   }
   .setup_msg
   {
      text-align:center;
      font-weight:bold;
      padding-bottom:30px;
   }
   .info_msg
   {
      font-size:9pt;
      color:#666;
      text-align:left;
      padding-left:10px;
   }

.info_table td
{
   font-size:9pt;
   padding-top:8px;
   padding-bottom:5px;
   color:#666;
}
   .info_category
   {
      background-color:#ececec;
      padding-left:10px;
   }
   .info_bg
   {
      background-color:#FFF;
      padding-left:10px;
   }

   .go_home
   {
      text-align:center;
      padding-top:20px;
      padding-bottom:20px;
   }

   .copy
   {
      background-color:#f3f3f3;
      padding-top:10px;
      height:35px;
      font-family:verdana,tahoma;
      text-align:center;
      font-size:8pt;
   }

.c_00 { color:#000; }
.c_red { color:#9e0b0f; }

.p_b10 { padding-bottom:10px; }





</style>
</head>

<body>

<div align="center">
                <p>회원가입</p>
                <form method='get' action='join_action.php'>
                        <p>ID: <input type="text" name="id"></p>
                        <p>PW: <input type="password" name="pw"></p>
                        <p>Email: <input type="email" name="email"></p>
                        <input type="submit" value="회원가입">
                </form>
        </div>




   
</body>
</html>