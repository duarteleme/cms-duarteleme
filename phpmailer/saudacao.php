<?php
require_once('class.phpmailer.php');
$mail             = new PHPMailer();
$mail->SetFrom('contato@midiano.com.br', 'Midiano');
$mail->AddReplyTo("contato@midiano.com.br","F�bio Duarte");
$address = $_GET['ma'];
$mail->AddAddress($address, $_GET['no']);
$mail->Subject    = "Cadastro efetuado com sucesso!";
$mail->MsgHTML(
"<table border='0' width='100%' align='center' bgcolor='#cbcbcb'>
<tbody>
<tr>
<td>
<table border='0' width='600' align='center'>
<tbody>
<tr>
<td>
<table border='0' width='600' align='center'>
<tbody>
<tr>
<td><span style='font-size:xx-small;font-family:verdana,geneva'><img src='http://www.midiano.com.br/img/template-mail.png' alt='' width='600' height='130'></span></td>
</tr>
</tbody>
</table>
<table border='0' cellspacing='0' cellpadding='0' width='600' align='center' bgcolor='#999999'>
<tbody>
<tr>
<td>
<table border='0' cellspacing='1' width='100%'>
<tbody>
<tr>
<td bgcolor='#ffffff'><span style='font-size:xx-small;font-family:verdana,geneva'><br></span> 
<table style='border-style:dotted;border:dotted #006699 1px' border='0' width='98%' align='center' bgcolor='#faf7d3'>
<tbody>
<tr>
<td height='40' align='center'><span style='font-size:10px;font-family:verdana,geneva'><strong><span style='color:#C60'><b style='color:#000;'> F�BIO DUARTE LEME, </b></span><b style='color:#000;'>SEJA BEM VINDO � MIDIANO</b><span style='color:#C60'> <br>
  SEU CADASTRO FOI EFETUADO COM SUCESSO!</span></strong></span></td>
</tr>
</tbody>
</table>
<span style='font-size:xx-small;font-family:verdana,geneva'><br></span> 
<table border='0' width='98%' align='center'>
<tbody>
<tr>
  <td></td>
</tr>
<tr>
<td></td>
</tr>
</tbody>
</table>
<table border='0' width='98%' align='center'>
<tbody>
<tr>
<td height='40' bgcolor='#204051'><span style='color:#ffffff'><strong><span style='font-size:12px;font-family:verdana,geneva'><span style='color:#204051'>-</span>SEUS DADOS</span></strong></span></td>
</tr>
<tr>
<td>
<table border='0' cellspacing='1' width='100%' bgcolor='#cccccc'>
<tbody>
<tr>
<td width='44%' height='25' bgcolor='#ffffff'><span style='font-size:11px;font-family:verdana,geneva'><strong>Seu login:</strong> aqui vai meu login </span></td>
</tr>
<tr>
<td height='25' bgcolor='#ffffff'><span style='font-size:11px;font-family:verdana,geneva'><strong>Sua Senha:</strong> aqui vai minha senha</span></td>
</tr>
<tr>
<td height='25' bgcolor='#ffffff'><span style='font-size:11px; font-family:verdana, geneva'><em>Guarde esses dados para acessar sua �rea de administra��o caso for necessario.</em></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td></td>
</tr>
<tr>
  <td>
  </td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>
</tbody>
</table>
<table border='0' cellspacing='1' width='98%' align='center'>
<tbody>
<tr>
<td height='144' bgcolor='#ffffff'>
<div style='border-top: 1px dashed #CCC; padding-top:10px'>
<p><span style='font-size:11px;font-family:verdana,geneva'>Qualquer d�vida estamos dispon�veis 24 horas por dia. Caso necessite de alguma informa��o que n�o foi contemplada neste email, estaremos a sua disposi��o. </span> <span style='font-size:11px;font-family:verdana,geneva'> <br> <br> Atenciosamente, </span><br>
  <br>
  <span style='font-size:11px;font-family:verdana,geneva'><strong>F�bio Duarte</strong><br>
   Midiano - Desenvolvendo Solu��es<br>
   Website: www.midiano.com.br<br>
   Central de Atendimento: contato@midiano.com.br</span></p>
</div>
</td>
</tr>
</tbody>
</table>
<table border='0' width='100%'>
<tbody>
<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table border='0' width='600' align='center'>
<tbody>
<tr>
<td><span style='font-size:xx-small;font-family:verdana,geneva'><img src='http://www.midiano.com.br/img/template-mail2.png' alt='' width='600' height='30'> </span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
" );
if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  print "<script>window.setTimeout('history.go(-1)', 500);alert('Cadastrado com Sucesso! Um email foi enviado para voc�!');</script>";
}
?>