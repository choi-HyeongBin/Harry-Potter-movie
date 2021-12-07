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

#margin1{
margin:10px 10px 10px 50px;}

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
mar{
margin : 0px 0px 0px 60px;

}
</style>
</head>

<body>

     
 <talbe width=800 border="1" cellpadding=5>
<br><br><br><br><br><br>
<tr>
<th>비밀번호</th>
<td><input type="text" name="name"></td></tr>

   <tr>

    
<select name="wr_1" itemname="wr_1" style="width:90px;font-family:verdana;font-size:8pt;color:<?=$score_color?>">

<option value="1" >★ (1)</option>

<option value="2" >★★ (2)</option>

<option value="3" >★★★ (3)</option>

<option value="4" >★★★★ (4)</option>

<option value="5" >★★★★★ (5)</option>
</select>

<br><br><br><br>
<th>내용</th><br><br>
<td><textarea name="memo" style="width :60%; height : 300px;"></textarea></td></tr>  
<tr><br>

<td colspan="2"><div style="text-align:center;"><br><br>
<input type="submit" value="저장"></div></td></tr>
</table>

</body>
</html>

