<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml"><HEAD>
<META content="MSHTML 6.00.2900.2180" name=GENERATOR>
<style type="text/css">
<!--
.STYLE1 {color: #FF0000}
-->
</style>
<style>
*{
	margin:0;
	padding:0;
}
ul,ol{
	list-style:none;
}
.title{
    color: #ADADAD;
    font-size: 14px;
    font-weight: bold;
    padding: 8px 16px 5px 10px;
}
.hidden{
	display:none;
}

.new-btn-login-sp{
	border:1px solid #D74C00;
	padding:1px;
	display:inline-block;
}

.new-btn-login{
    background-color: transparent;
    background-image: url("images/new-btn-fixed.png");
    border: medium none;
}
.new-btn-login{
    background-position: 0 -198px;
    width: 82px;
	color: #FFFFFF;
    font-weight: bold;
    height: 28px;
    line-height: 28px;
    padding: 0 10px 3px;
}
.new-btn-login:hover{
	background-position: 0 -167px;
	width: 82px;
	color: #FFFFFF;
    font-weight: bold;
    height: 28px;
    line-height: 28px;
    padding: 0 10px 3px;
}
.bank-list{
	overflow:hidden;
	margin-top:5px;
}
.bank-list li{
	float:left;
	width:153px;
	margin-bottom:5px;
}

#main{
	width:750px;
	margin:0 auto;
	font-size:14px;
	font-family:'宋体';
}
#logo{
	background-color: transparent;
    background-image: url("images/new-btn-fixed.png");
    border: medium none;
	background-position:0 0;
	width:166px;
	height:35px;
    float:left;
}
.red-star{
	color:#f00;
	width:10px;
	display:inline-block;
}
.null-star{
	color:#fff;
}
.content{
	margin-top:5px;
}

.content dt{
	width:160px;
	display:inline-block;
	text-align:right;
	float:left;
	
}
.content dd{
	margin-left:100px;
	margin-bottom:5px;
}
#foot{
	margin-top:10px;
}
.foot-ul li {
	text-align:center;
}
.note-help {
    color: #999999;
    font-size: 12px;
    line-height: 130%;
    padding-left: 3px;
}

.cashier-nav {
    font-size: 14px;
    margin: 15px 0 10px;
    text-align: left;
    height:30px;
    border-bottom:solid 2px #CFD2D7;
}
.cashier-nav ol li {
    float: left;
}
.cashier-nav li.current {
    color: #AB4400;
    font-weight: bold;
}
.cashier-nav li.last {
    clear:right;
}
.alipay_link {
    text-align:right;
}
.alipay_link a:link{
    text-decoration:none;
    color:#8D8D8D;
}
.alipay_link a:visited{
    text-decoration:none;
    color:#8D8D8D;
}
.STYLE1 {color: #FF0000}
</style>
<title>QQ选号网 -- 在线付款购买</title></HEAD>
<script type="text/javascript">
$(function(){
//发货
$("#fh").click(function(){
tid=$("#tid").val();
if(tid!="")
{
$.post("../autopay/autosend.asp",{"tid":tid},function(data,status){
if(status=="success")
{
alert("11111");
}
else
{
alert("发货失败");
}
});
}
});
//充值
$("#cz").click(function(){
tid=$("#tid").val();
if(tid!="")
{
$.post("../autopay/getinfo.asp",{"tid":tid},function(data,status){
if(status=="success")
{
alert(data);
}
else
{
alert("充值失败");
}
});
}
});
});
</script>

<SCRIPT language="javascript">
var MyAccount	=	'981248772@qq.com';							//您的支付宝账号，请在Config.asp文件中配置
var UserName	=	'';						//此处获取当前充值的用户名
var remark		=	'充值页面付款演示';						//此处是备注内容
var TheMoney	=	'';						//(可选) 直接获取固定金额，当没有获取固定金额时，就会出现选择金额的按扭
var IsNotify	=	1;								//是否启用跳转功能 值为“1”或“0”(1:付款成功后，自动跳转 0:付款成功后，不自动跳转)
//*=================================================================================
//----------此分界线下方的源码无需更改----------此分界线下方的源码无需更改----------
//*=================================================================================
</SCRIPT>
<SCRIPT language="javascript">
	//改变金额
	function ChangeMoney(yuan){
		var Money;
		if(document.getElementById("OtherAmount").checked==true){
			Money=document.getElementById('OtherMoney').value;
		}else{
			Money=yuan;
		}
		if(Money>0){
			document.getElementById("payAmount").value=Money;
			document.getElementById("price").innerHTML='￥'+Money;
		}
	}
	//改变状态
	function ChangeStep(n){
		//检测是否启用跳转功能
		if(IsNotify==1){
			if(n==1){
				document.getElementById('step1').style.display='';
				document.getElementById('step2').style.display='none';
			}else if(n==2){
				document.getElementById('step1').style.display='none';
				document.getElementById('step2').style.display='';
			}
		}
	}
	//提交查询
	function Submit_G(){
		document.getElementById("G_optEmail").value=document.getElementById("optEmail").value;
		document.getElementById("G_payAmount").value=document.getElementById("payAmount").value;
		document.getElementById("G_title").value=document.getElementById("title").value;
		document.getElementById("G_memo").value=document.getElementById("memo").value;
		document.getElementById("g").submit();
	}
</SCRIPT>
<div id="body" style="clear:left">
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        <TBODY>
        <TR>
          <TD align=middle></TD>
        </TR>
        <TR>
          <td align=left><span class="title">QQ选号网 支付宝官方支付</span> <div class="cashier-nav">
            <ol>
				<li class="current">1、确认信息 →</li>
				<li>2、点击确认 →</li>
				<li class="last">3、确认完成</li>
            </ol>
        </div>
        <div id="foot">
          <div align="center"><table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CECECE">
            <tr>
              <td width="82%" align="left"></td>
            </tr>
  <FORM name="f" id="f" action="https://shenghuo.alipay.com/send/payment/fill.htm"method="post" target="_blank">
  <INPUT name="optEmail" id="optEmail"type="hidden">
  <INPUT name="payAmount" id="payAmount" type="hidden">
  <tr>
    <td align="left"></td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" bgcolor="#FFFFFF">输入金额<strong>：</strong><I>
      <INPUT name="amount" type="radio" id="OtherAmount" onClick="javascript:ChangeMoney(0);" checked>
      </I>
        <INPUT name="OtherMoney" class="ipt-value" id="OtherMoney"  style="-ms-ime-mode: disabled;" onKeyUp="javascript:ChangeMoney(0);"  onkeypress="return event.keyCode>=48&amp;&amp;event.keyCode<=57||event.keyCode==46"  onfocus="javascript:ChangeMoney(0);" onBlur="javascript:ChangeMoney(0);" 
  ondragenter="return false" onpaste="return !clipboardData.getData('text').match(/\D/)" type="text" value="">
        <span class="STYLE1">        请输入要购买的QQ号价格</span></td>
  </tr>
  <tr>
    <td align="left">确认金额<strong>：</strong> <font color="#FF0000"><SPAN class="txt-price" id="price"></SPAN></font></td>
  </tr>
  <tr>
    <td align="left">购买留言<strong>：</strong>
        <textarea style="margin-left:3px;" name="memo" class="ipt-name"  id="memo" rows=2 cols=40 wrap="physical"></textarea>
        <span class="STYLE1">请输入留言,比如‘购买QQ520520’请务必备注您要购买的QQ号和联系方式</span></td>
  </tr>
  <tr>
    <td align="left"></td>
  </tr>
  <tr>
    <td align="center"><p></td>
  </tr>
  <tr>
    <td align="center"><INPUT name="submit" type="submit" class="recharge-btn" onClick="javascript:ChangeStep(2);" value="支付宝在线付款"></td>
  </tr>
          </table>
          <SCRIPT language="javascript">
				document.getElementById("optEmail").value=MyAccount;//加载商户支付宝账号
				document.getElementById("title").value=UserName;//加载用户名
				document.getElementById("memo").value=remark;//加载备注
				if(TheMoney==''){
					ChangeMoney(135);			//默认选择充值金额
				}else{
					document.getElementById('SelectAmount').style.display='none';
					ChangeMoney(TheMoney);		//固定金额
				}
				if(remark==''){
					//隐藏备注
					document.getElementById('li_memo').style.display='none';
				}
				</SCRIPT></td>
        </TR></TBODY></TABLE>
</DIV>
      </DIV>
	 </DIV>
 </DIV></td>
	          </tr>
	        </table>	    </td>
  </tr>
</table>

<tr><td align="center" valign="top" style="padding-bottom:15px;">
</BODY></HTML>

