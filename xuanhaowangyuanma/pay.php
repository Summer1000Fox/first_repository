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
	font-family:'����';
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
<title>QQѡ���� -- ���߸����</title></HEAD>
<script type="text/javascript">
$(function(){
//����
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
alert("����ʧ��");
}
});
}
});
//��ֵ
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
alert("��ֵʧ��");
}
});
}
});
});
</script>

<SCRIPT language="javascript">
var MyAccount	=	'981248772@qq.com';							//����֧�����˺ţ�����Config.asp�ļ�������
var UserName	=	'';						//�˴���ȡ��ǰ��ֵ���û���
var remark		=	'��ֵҳ�渶����ʾ';						//�˴��Ǳ�ע����
var TheMoney	=	'';						//(��ѡ) ֱ�ӻ�ȡ�̶�����û�л�ȡ�̶����ʱ���ͻ����ѡ����İ�Ť
var IsNotify	=	1;								//�Ƿ�������ת���� ֵΪ��1����0��(1:����ɹ����Զ���ת 0:����ɹ��󣬲��Զ���ת)
//*=================================================================================
//----------�˷ֽ����·���Դ���������----------�˷ֽ����·���Դ���������----------
//*=================================================================================
</SCRIPT>
<SCRIPT language="javascript">
	//�ı���
	function ChangeMoney(yuan){
		var Money;
		if(document.getElementById("OtherAmount").checked==true){
			Money=document.getElementById('OtherMoney').value;
		}else{
			Money=yuan;
		}
		if(Money>0){
			document.getElementById("payAmount").value=Money;
			document.getElementById("price").innerHTML='��'+Money;
		}
	}
	//�ı�״̬
	function ChangeStep(n){
		//����Ƿ�������ת����
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
	//�ύ��ѯ
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
          <td align=left><span class="title">QQѡ���� ֧�����ٷ�֧��</span> <div class="cashier-nav">
            <ol>
				<li class="current">1��ȷ����Ϣ ��</li>
				<li>2�����ȷ�� ��</li>
				<li class="last">3��ȷ�����</li>
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
    <td align="left" bgcolor="#FFFFFF">������<strong>��</strong><I>
      <INPUT name="amount" type="radio" id="OtherAmount" onClick="javascript:ChangeMoney(0);" checked>
      </I>
        <INPUT name="OtherMoney" class="ipt-value" id="OtherMoney"  style="-ms-ime-mode: disabled;" onKeyUp="javascript:ChangeMoney(0);"  onkeypress="return event.keyCode>=48&amp;&amp;event.keyCode<=57||event.keyCode==46"  onfocus="javascript:ChangeMoney(0);" onBlur="javascript:ChangeMoney(0);" 
  ondragenter="return false" onpaste="return !clipboardData.getData('text').match(/\D/)" type="text" value="">
        <span class="STYLE1">        ������Ҫ�����QQ�ż۸�</span></td>
  </tr>
  <tr>
    <td align="left">ȷ�Ͻ��<strong>��</strong> <font color="#FF0000"><SPAN class="txt-price" id="price"></SPAN></font></td>
  </tr>
  <tr>
    <td align="left">��������<strong>��</strong>
        <textarea style="margin-left:3px;" name="memo" class="ipt-name"  id="memo" rows=2 cols=40 wrap="physical"></textarea>
        <span class="STYLE1">����������,���确����QQ520520������ر�ע��Ҫ�����QQ�ź���ϵ��ʽ</span></td>
  </tr>
  <tr>
    <td align="left"></td>
  </tr>
  <tr>
    <td align="center"><p></td>
  </tr>
  <tr>
    <td align="center"><INPUT name="submit" type="submit" class="recharge-btn" onClick="javascript:ChangeStep(2);" value="֧�������߸���"></td>
  </tr>
          </table>
          <SCRIPT language="javascript">
				document.getElementById("optEmail").value=MyAccount;//�����̻�֧�����˺�
				document.getElementById("title").value=UserName;//�����û���
				document.getElementById("memo").value=remark;//���ر�ע
				if(TheMoney==''){
					ChangeMoney(135);			//Ĭ��ѡ���ֵ���
				}else{
					document.getElementById('SelectAmount').style.display='none';
					ChangeMoney(TheMoney);		//�̶����
				}
				if(remark==''){
					//���ر�ע
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

