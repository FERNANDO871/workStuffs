<?php

class crud
{
	
		public function inserpro($proye)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into proyecto (porx, nombre, descripcion, fechai, estatus) values (
		'$proye[0]',
		'$proye[1]',
		'$proye[2]',
		'$proye[3]',
		'1'
		)";
		return mysqli_query($conexion,$sql);
	}
	public function updatepara($idpara)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="UPDATE tickets SET
		 para = '$idpara[0]'
		 WHERE  id ='$idpara[1]';";

		return mysqli_query($conexion,$sql);
	}

	
	public function eliminartickets($idtickets)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql_c="DELETE FROM `tickets` WHERE  `id` = '$idtickets[0]';";


     $sql="DELETE FROM `comentariostikets` WHERE  `idT`= '$idtickets[0]';";
$cerrar= mysqli_query($conexion,$sql);


		return mysqli_query($conexion,$sql_c);
	}

public function updatePrioridad($idPrioridad)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="UPDATE actividades SET
		 prioridad = '$idPrioridad[1]'
		 WHERE  id ='$idPrioridad[0]';";

     

		return mysqli_query($conexion,$sql);
	}

	public function inserActividpre($idpre)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into actpredeterminadas (idP, idPR, descripcion, para, fecha, estatus, proceso) values (
		'$idpre[0]',
		'$idpre[1]',
		'$idpre[2]',
		'$idpre[3]',
		'$idpre[4]',
		'1',
		'$idpre[5]'
		)";
		
		return mysqli_query($conexion,$sql);
	}
	public function inserVoluntario($voluntarios)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into voluntarios (nombre, edad, cel, correo, ubicacion, dia, hra, idiomas, idI, fechaR) values (
		'$voluntarios[0]',
		'$voluntarios[1]',
		'$voluntarios[2]',
		'$voluntarios[3]',
		'$voluntarios[4]',
		'$voluntarios[5]',
		'$voluntarios[6]',
		'$voluntarios[7]',
		'$voluntarios[8]',
		'$voluntarios[9]'	
	)";
		return mysqli_query($conexion,$sql);
	}
public function congre($idcongre)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into congregaciones (nombre, direccion, lider) values (
		'$idcongre[0]',
		'$idcongre[1]',
		'$idcongre[2]'
		)";
		return mysqli_query($conexion,$sql);
	}
public function comenMapa($idcomMa)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into comentariosmapa (texto, de) values (
		'$idcomMa[0]',
		'$idcomMa[1]'
		)";
		return mysqli_query($conexion,$sql);
	}
	public function inserMapa($idmapa)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into mapas (nombre, url) values (
		'$idmapa[0]',
		'$idmapa[1]'
		)";
		return mysqli_query($conexion,$sql);
	}
public function updateCongre($idCongre)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="UPDATE congregaciones SET
		 nombre = '$idCongre[1]',
		 direccion = '$idCongre[2]',
		 lider = '$idCongre[3]'
		 WHERE  id ='$idCongre[0]';";

		return mysqli_query($conexion,$sql);
	}
public function updateVolunters($idEdVolunters)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="UPDATE voluntarios SET
		 nombre = '$idEdVolunters[1]',
		 edad = '$idEdVolunters[2]',
		 cel = '$idEdVolunters[3]',
		 correo = '$idEdVolunters[4]',
		 ubicacion = '$idEdVolunters[5]',
		 dia = '$idEdVolunters[6]',
		 hra = '$idEdVolunters[7]',
		 idiomas = '$idEdVolunters[8]'
		 WHERE  id ='$idEdVolunters[0]';";

		return mysqli_query($conexion,$sql);
	}
	

	public function inserActividadi($idadic)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into actadicional (idP, idPR, descripcion, por, para, fecha, estatus, proceso) values (
		'$idadic[0]',
		'$idadic[1]',
		'$idadic[2]',
		'$idadic[3]',
		'$idadic[4]',
		'$idadic[5]',
		'1',
		'$idadic[6]'
		)";
		

		return mysqli_query($conexion,$sql);
	}
	public function closePre($actPRE)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="UPDATE actpredeterminadas SET
		 estatus = 2
		 WHERE  id ='$actPRE[0]';";

		return mysqli_query($conexion,$sql);
	}
	public function inserproducto($idproduc)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into productos (idP, nombre, Descripcion) values (
		'$idproduc[0]',
		'$idproduc[1]',
		'$idproduc[2]'
		)";
		return mysqli_query($conexion,$sql);
	}
	public function inserinvers($idinv)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into inversionistas (idP, nombre, direccion, telefono, estatus) values (
		'$idinv[0]',
		'$idinv[1]',
		'$idinv[2]',
		'$idinv[3]',
		'1'
		)";
		return mysqli_query($conexion,$sql);
	}
	public function updateDate($dateA)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="UPDATE actividades SET
		 fechaE = '$dateA[1]'
		 WHERE  id ='$dateA[0]';";

     

		return mysqli_query($conexion,$sql);
	}
		public function ticketsid2($idtickets2)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into tickets (descripcion, de, para, fecha, estatus) values (
		'$idtickets2[0]',
		'$idtickets2[1]',
		'$idtickets2[2]',
		'$idtickets2[3]',
		'1'
		)";
		return mysqli_query($conexion,$sql);
	}
		public function inserActivid($idActi)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into actividades (subid, nombre, para, de, fechai, estatus,fechaE,prioridad) values (
		'$idActi[0]',
		'$idActi[1]',
		'$idActi[2]',
		'$idActi[3]',
		'$idActi[4]',
		'1',
		'$idActi[5]',
		'$idActi[6]'
		)";
		
		$idU = $idActi[2];
		
		$sql_1="SELECT id, correo from brokers where id = $idU";
	$result_1 = mysqli_query($conexion,$sql_1);
		
		$mostrar_E = mysqli_fetch_row($result_1);
		
		$para = $mostrar_E[1];

	$header = "From:Sistemas<systems@maranatha-sites.com>"."\r\n";
	$header.= 'Cc:julian@maranathamarketing.net'."\r\n";
	$header.= 'MIME-Version: 1.0'."\r\n";
    $header.= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
	$header .= "Reply-To: noreply@example.com"."\r\n";
	$header .= "X-Mailer: PHP/". phpversion();
		
		$MSG='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="width:100%;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
 <head><meta charset="gb18030"> 
   
  <meta content="width=device-width, initial-scale=1" name="viewport"> 
  <meta name="x-apple-disable-message-reformatting"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta content="telephone=no" name="format-detection"> 
  <title>Nueva plantilla de correo electrónico 2020-09-22</title> 
  <!--[if (mso 16)]>
    <style type="text/css">
    a {text-decoration: none;}
    </style>
    <![endif]--> 
  <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
  <!--[if gte mso 9]>
<xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG></o:AllowPNG>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
</xml>
<![endif]--> 
  <!--[if !mso]><!-- --> 
  <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet"> 
  <!--<![endif]--> 
  <style type="text/css">
#outlook a {
  padding:0;
}
.ExternalClass {
  width:100%;
}
.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
  line-height:100%;
}
.es-button {
  mso-style-priority:100!important;
  text-decoration:none!important;
}
a[x-apple-data-detectors] {
  color:inherit!important;
  text-decoration:none!important;
  font-size:inherit!important;
  font-family:inherit!important;
  font-weight:inherit!important;
  line-height:inherit!important;
}
.es-desk-hidden {
  display:none;
  float:left;
  overflow:hidden;
  width:0;
  max-height:0;
  line-height:0;
  mso-hide:all;
}
@media only screen and (max-width:600px) {p, ul li, ol li, a { font-size:17px!important; line-height:150%!important } h1 { font-size:30px!important; text-align:center; line-height:120%!important } h2 { font-size:26px!important; text-align:left; line-height:120%!important } h3 { font-size:20px!important; text-align:left; line-height:120%!important } h1 a { font-size:30px!important; text-align:center } h2 a { font-size:20px!important; text-align:left } h3 a { font-size:20px!important; text-align:left } .es-menu td a { font-size:16px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:17px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:inline-block!important } a.es-button { font-size:14px!important; display:inline-block!important; border-width:15px 25px 15px 25px!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0!important } .es-m-p0r { padding-right:0!important } .es-m-p0l { padding-left:0!important } .es-m-p0t { padding-top:0!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } .es-m-p5 { padding:5px!important } .es-m-p5t { padding-top:5px!important } .es-m-p5b { padding-bottom:5px!important } .es-m-p5r { padding-right:5px!important } .es-m-p5l { padding-left:5px!important } .es-m-p10 { padding:10px!important } .es-m-p10t { padding-top:10px!important } .es-m-p10b { padding-bottom:10px!important } .es-m-p10r { padding-right:10px!important } .es-m-p10l { padding-left:10px!important } .es-m-p15 { padding:15px!important } .es-m-p15t { padding-top:15px!important } .es-m-p15b { padding-bottom:15px!important } .es-m-p15r { padding-right:15px!important } .es-m-p15l { padding-left:15px!important } .es-m-p20 { padding:20px!important } .es-m-p20t { padding-top:20px!important } .es-m-p20r { padding-right:20px!important } .es-m-p20l { padding-left:20px!important } .es-m-p25 { padding:25px!important } .es-m-p25t { padding-top:25px!important } .es-m-p25b { padding-bottom:25px!important } .es-m-p25r { padding-right:25px!important } .es-m-p25l { padding-left:25px!important } .es-m-p30 { padding:30px!important } .es-m-p30t { padding-top:30px!important } .es-m-p30b { padding-bottom:30px!important } .es-m-p30r { padding-right:30px!important } .es-m-p30l { padding-left:30px!important } .es-m-p35 { padding:35px!important } .es-m-p35t { padding-top:35px!important } .es-m-p35b { padding-bottom:35px!important } .es-m-p35r { padding-right:35px!important } .es-m-p35l { padding-left:35px!important } .es-m-p40 { padding:40px!important } .es-m-p40t { padding-top:40px!important } .es-m-p40b { padding-bottom:40px!important } .es-m-p40r { padding-right:40px!important } .es-m-p40l { padding-left:40px!important } }
</style> 
 </head> 
 <body style="width:100%;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0"> 
  <div class="es-wrapper-color" style="background-color:#F1F1F1"> 
   <!--[if gte mso 9]>
      <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
        <v:fill type="tile" color="#f1f1f1"></v:fill>
      </v:background>
    <![endif]--> 
   <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top"> 
     <tr style="border-collapse:collapse"> 
      <td valign="top" style="padding:0;Margin:0"> 
       <table class="es-header" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-header-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px" cellspacing="0" cellpadding="0" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:30px;padding-bottom:30px;padding-left:40px;padding-right:40px"> 
               <!--[if mso]><table style="width:520px" cellpadding="0" 
                        cellspacing="0"><tr><td style="width:250px" valign="top"><![endif]--> 
               <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left"> 
                 <tr style="border-collapse:collapse"> 
                  <td class="es-m-p20b" align="left" style="padding:0;Margin:0;width:250px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0;display:none"></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td style="width:20px"></td><td style="width:250px" valign="top"><![endif]--> 
               <table class="es-right" cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right"> 
                 <tr style="border-collapse:collapse"> 
                  <td align="left" style="padding:0;Margin:0;width:250px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-infoblock es-m-txt-c" align="right" style="padding:0;Margin:0;line-height:14px;font-size:12px;color:#CCCCCC"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:12px;font-family:arial, "helvetica neue", helvetica, sans-serif;line-height:14px;color:#CCCCCC">

                     Mensaje Mandado desde el Gestor de Tareas.

                      </p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;border-top:1px solid #DDDDDD;border-right:1px solid #DDDDDD;border-left:1px solid #DDDDDD;width:600px;border-bottom:1px solid #DDDDDD" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0;padding-top:40px;padding-left:40px;padding-right:40px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:518px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0;padding-top:5px;padding-bottom:15px"><h2 style="Margin:0;line-height:24px;mso-line-height-rule:exactly;font-family:lato, "helvetica neue", helvetica, arial, sans-serif;font-size:20px;font-style:normal;font-weight:bold;color:#333333">

                      Maranatha,&nbsp; Tienes una nueva actividad en el Gestor de Tareas


                      </h2></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0;padding-bottom:10px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:15px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:23px;color:#555555"><strong>
Fecha Realizado :'.$idActi[4].'<br>
Actividad: '.$idActi[1].'<br>
Con fecha limite: '.$idActi[5].'
</strong></p>
</td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:10px;padding-bottom:40px;padding-left:40px;padding-right:40px"> 
               <!--[if mso]><table style="width:518px" cellpadding="0"
                            cellspacing="0"><tr><td style="width:39px" valign="top"><![endif]--> 
               <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left"> 
                 <tr style="border-collapse:collapse"> 
                  <td class="es-m-p0r es-m-p20b" valign="top" align="center" style="padding:0;Margin:0;width:39px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0;display:none"></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td style="width:20px"></td><td style="width:459px" valign="top"><![endif]--> 
               <table cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td align="left" style="padding:0;Margin:0;width:459px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0;padding-top:10px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:21px;color:#222222"><b>Cualquier duda o sugerencia sobre el sistema favor de comunicarse al departamento de :</b></p></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:21px;color:#666666">Sistemas| Maranatha</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-footer" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-footer-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px" cellspacing="0" cellpadding="0" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:40px;padding-bottom:40px;padding-left:40px;padding-right:40px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:520px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0;padding-bottom:10px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:12px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:18px;color:#666666">Maranatha Marketing INC</p></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0;padding-bottom:10px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:12px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:18px;color:#666666">This email was sent to you from Company Email Address</p></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0;padding-bottom:10px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:12px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:18px;color:#666666">Faceboo | Instagram&nbsp;| Pagina Web&nbsp;|</p></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:12px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:18px;color:#666666">Copyright © 2020-2021&nbsp;<b>Maranatha Marketing INC</b>, All Rights Reserved.</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px" cellspacing="0" cellpadding="0" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-left:20px;padding-right:20px;padding-top:30px;padding-bottom:30px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:560px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0;font-size:0px"><img class="adapt-img" src="https://igqmzg.stripocdn.email/content/guids/a3da011f-8b7f-432d-95d5-abd5df6586de/images/38881600809686534.png" alt style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic" width="100"></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table></td> 
     </tr> 
   </table> 
  </div>  
 </body>
</html>
';
		
		
		//-----------------EJECUTABLE------------------//
	$mail = mail($para,"Gestor de Tareas",$MSG,$header);
	
		
		return mysqli_query($conexion,$sql);
	}
	
   public function agregar($datos)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into prospectos (idB,nombre,apellido1,apellido2,canalC,nickname,etapa,idcampana) values (
		'$datos[0]',
		'$datos[1]',
		'$datos[2]',
		'$datos[3]',
		'$datos[4]',
		'$datos[5]',
		1,
		'$datos[6]'
		)";


		return mysqli_query($conexion,$sql);
	}
	
	public function updateregionEX($experienciaR)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="UPDATE esperienciala SET
		 nombreP = '$experienciaR[1]'
		 WHERE  id ='$experienciaR[0]';";


		return mysqli_query($conexion,$sql);
	}
		public function eliminarACT($actvid)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql_c="DELETE FROM `actividades` WHERE  `id` = '$actvid[0]';";


     $sql="DELETE FROM `comentariosact` WHERE  `idA`= '$actvid[0]';";
$cerrar= mysqli_query($conexion,$sql);

		return mysqli_query($conexion,$sql_c);
	}
	public function ticketsid($idtickets)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into tickets (descripcion, de, para, fecha, estatus) values (
		'$idtickets[0]',
		'$idtickets[1]',
		'4',
		'$idtickets[2]',
		'1'
		)";
	
		
		
	
		
		
		return mysqli_query($conexion,$sql);
	}
	public function TICKETup($idticketup)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="UPDATE tickets SET
		 estatus = 3, 
		 fechat = '$idticketup[1]'
		 WHERE  id ='$idticketup[0]';";

		return mysqli_query($conexion,$sql);
	}
	public function eliminarpais($deletepais)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

      $sql="DELETE FROM `esperienciapais` WHERE  `id`= '$deletepais[0]' ";



		return mysqli_query($conexion,$sql);
	}
		public function eliminarsubP($subpro)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		

     $sql="DELETE FROM `comentariosact` WHERE  `idSP`= '$subpro[0]';";
$cerrar= mysqli_query($conexion,$sql);

 $sql_1="DELETE FROM `actividades` WHERE  `subid` = '$subpro[0]';";
$cerrar_1= mysqli_query($conexion,$sql_1);


$sql_c="DELETE FROM `subproyectos` WHERE  `id` = '$subpro[0]';";

		return mysqli_query($conexion,$sql_c);
	}

	public function updateUs($userData)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="UPDATE brokers SET
		 estatus = 2
		 WHERE  id ='$userData[0]';";

      $sql_USER="UPDATE usuario SET
		 estatus = 2
		 WHERE  idP ='$userData[0]';";

$return=mysqli_query($conexion,$sql_USER);



		return mysqli_query($conexion,$sql);
	}
	public function closedACT($actvCl)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="UPDATE actividades SET
		 estatus = 2, 
		 fechat = '$actvCl[1]'
		 WHERE  id ='$actvCl[0]';";

		return mysqli_query($conexion,$sql);
	}
	public function updatesubP($subProyec)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="UPDATE subproyectos SET
		 titulo = '$subProyec[1]'
		 WHERE  id ='$subProyec[0]';";

     

		return mysqli_query($conexion,$sql);
	}
	public function updateCONTAD($datosCONTA)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="UPDATE contactos SET
		 nombre = '$datosCONTA[1]', 
		 puesto='$datosCONTA[2]',  
		 fechaN='$datosCONTA[3]',
		  cel='$datosCONTA[4]',
		   correo='$datosCONTA[5]'
		 WHERE  id ='$datosCONTA[0]';";


		return mysqli_query($conexion,$sql);
	}
	public function agregarCont($datosContac)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into contactos (idP, nombre, puesto, fechaN, cel, correo) values (
		'$datosContac[0]',
		'$datosContac[1]',
		'$datosContac[2]',
		'$datosContac[3]',
		'$datosContac[4]',
		'$datosContac[5]'
		)";


		return mysqli_query($conexion,$sql);
	}
	public function addProd($addP)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into productointeres (idD, idP) values (
		'$addP[0]',
		'$addP[1]'
		)";


		return mysqli_query($conexion,$sql);
	}
	public function addsuge($addG)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into productosugerencia (idP, idPRO) values (
		'$addG[0]',
		'$addG[1]'
		)";


		return mysqli_query($conexion,$sql);
	}
	public function addCoti($addCot)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into cotizacionid (idP, idPRO, cantidad,proviene) values (
		'$addCot[0]',
		'$addCot[1]',
		'$addCot[2]',
		2
		)";


		return mysqli_query($conexion,$sql);
	}
	public function addCoti1($addCot1)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into cotizacionid (idP, idPRO, cantidad,proviene) values (
		'$addCot1[0]',
		'$addCot1[1]',
		'$addCot1[2]',
		1
		)";


		return mysqli_query($conexion,$sql);
	}

public function confirmarped($updatePedi)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

      $sql2="UPDATE prospectos SET
 etapa = 6
  WHERE  `id` ='$updatePedi[1]'";

$return1=mysqli_query($conexion,$sql2);

$sql1="UPDATE etapasprospecto  set 
fecha5='$updatePedi[2]',
fecha6='$updatePedi[2]'
 where idP = '$updatePedi[0]'";
$cerrarsql=mysqli_query($conexion,$sql1);



		$sql="UPDATE pedidos SET
 entrega = 2  
 WHERE  `id` ='$updatePedi[0]'";

		return mysqli_query($conexion,$sql);
	}


	public function addpedido($addped)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql1="UPDATE prospectos SET
 `nombre`='$addped[1]',
 `apellido1`='$addped[2]',
 `apellido2`='$addped[3]',
 `correo`='$addped[4]',
 telE= '$addped[5]',
 tipoventa= '$addped[6]',
 etapa = 4
  WHERE  `id` ='$addped[0]'";

$return=mysqli_query($conexion,$sql1);


$sql2="UPDATE cotizacionid SET
 Fecha = '$addped[7]'
  WHERE  `idP` ='$addped[0]'";

$return1=mysqli_query($conexion,$sql2);

$sql3="UPDATE etapasprospecto SET
 fecha3 = '$addped[7]'
  WHERE  `idP` ='$addped[0]'";

$return3=mysqli_query($conexion,$sql3);


		$sql="INSERT into pedidos (idP, fecha, entrega) values (
		'$addped[0]',
		'$addped[7]',
		1
		)";


		return mysqli_query($conexion,$sql);
	}

		public function etapa4($for)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into etapa4 (idP, cuantasUN, puerto, precioP, envioM) values (
		'$for[0]',
		'$for[1]',
		'$for[2]',
		'$for[3]',
		'$for[4]'
		)";


	$sql_1="UPDATE prospectos SET
		etapa=5,
		fechaetapa4 = '$for[5]'
		 WHERE  id ='$for[0]';";
$result= mysqli_query($conexion,$sql_1);

		return mysqli_query($conexion,$sql);
	}
		public function solicitudID($solid)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into solicitud (idP, idB, nombreD, quien, fecha,respuesta, estatus) values (
		'$solid[0]',
		'1',
		'$solid[1]',
		'$solid[2]',
		'$solid[3]',
		NULL,
		'1'
		)";
		return mysqli_query($conexion,$sql);
	}
	public function agregarBrok($datobrok)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into brokers (nombre, domicilio, tel, cel, correo, fechaN, estadocivil, nombreCon, fechaBoda, region, pais, conociocristo, ministerio, autoridad, telautoridad, empresa, puesto, fechaactividad, tipo, estatus) values (
		'$datobrok[0]',
		'$datobrok[1]',
		'$datobrok[2]',
		'$datobrok[3]',
		'$datobrok[4]',
		'$datobrok[5]',
		'$datobrok[6]',
		'$datobrok[7]',
		'$datobrok[8]',
		'$datobrok[9]',
		'$datobrok[10]',
		'$datobrok[11]',
		'$datobrok[12]',
		'$datobrok[13]',
		'$datobrok[14]',
		'$datobrok[15]',
		'$datobrok[16]',
		'$datobrok[17]',
		'$datobrok[18]',
		'1'
		)";
		return mysqli_query($conexion,$sql);
	}
	public function agregartratamiento($idtratamiento)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into tratamientos (idterapia, idpaciente, hora, nterapias, estado, observaciones, fechare, idU,tipo,ug1,vol1,ug2,vol2,ug3,vol3,ug4,vol4,precio) values (

		'$idtratamiento[0]',
		'$idtratamiento[1]',
		'$idtratamiento[2]',
		'$idtratamiento[3]',
		1,
		'$idtratamiento[4]',
		'$idtratamiento[5]',
		'$idtratamiento[6]',
		1,
		'$idtratamiento[7]',
		'$idtratamiento[8]',
		'$idtratamiento[9]',
		'$idtratamiento[10]',
		'$idtratamiento[11]',
		'$idtratamiento[12]',
		'$idtratamiento[13]',
		'$idtratamiento[14]',
		'$idtratamiento[15]'
		) 
		/*
		'$idtratamiento[0]',
		'$idtratamiento[1]',
		'$idtratamiento[2]',
		'$idtratamiento[3]',
		1,
		'$idtratamiento[4]',
		'$idtratamiento[5]',
		'$idtratamiento[6]',
		1,
		'$idtratamiento[7]',
		'$idtratamiento[8]',
		'$idtratamiento[9]',
		'$idtratamiento[10]',
		'$idtratamiento[11]',
		'$idtratamiento[12]',
		'$idtratamiento[13]',
		'$idtratamiento[14]',
		'$idtratamiento[15]'
		1,
		5,
		'09:30:00',
		5,
		1,
		'mensaje de prueba',
		'2021-11-25',
		2,
		1,
		1,
		1,
		2,
		2,
		3,
		3,
		4,
		4,
		'850.00'
		)*/
		 "; 


		return mysqli_query($conexion,$sql);
	}

		public function etapa4AC($forA)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="UPDATE `etapa4` SET
 `cuantasUN`='$forA[1]',
 `puerto`='$forA[2]',
 `precioP`='$forA[3]',
 `envioM`='$forA[4]'
  WHERE  `idP` ='$forA[0]'";


		return mysqli_query($conexion,$sql);
	}


public function updateP($datosUP)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="UPDATE prospectos SET
		etapa=2
		WHERE  id ='$datosUP[0]';";

		 $sql1="INSERT into etapasprospecto (idP,fecha1) values (
		'$datosUP[0]',
		'$datosUP[1]')";
		 $cerrarsql=mysqli_query($conexion,$sql1);

		return mysqli_query($conexion,$sql);
	}
	public function updatePAC($datosUPAC)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="UPDATE prospectos SET
		 nombreP = '$datosUPAC[1]', 
		 precio='$datosUPAC[2]', 
		 categoria='$datosUPAC[3]', 
		 telE='$datosUPAC[4]',
		 pais='$datosUPAC[5]',
		 direE='$datosUPAC[6]',
		 direP='$datosUPAC[7]',
		 instagram='$datosUPAC[8]',
		 correo='$datosUPAC[9]',
		 paginaweb='$datosUPAC[10]',
		 facebook='$datosUPAC[11]',
		puesto1='$datosUPAC[12]',
		fecha1='$datosUPAC[13]',
		cel1='$datosUPAC[14]',
		correo1='$datosUPAC[15]',
		puesto2='$datosUPAC[16]',
		fecha2='$datosUPAC[17]',
		cel2='$datosUPAC[18]',
		correo2='$datosUPAC[19]',
		referido='$datosUPAC[20]',
		sponsor='$datosUPAC[21]',
		como='$datosUPAC[22]'
		 WHERE  id ='$datosUPAC[0]';";


		return mysqli_query($conexion,$sql);
	}
	public function updateP2($datosUP2)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="UPDATE prospectos SET
		 califico = '$datosUP2[1]', 
		 interesadoE='$datosUP2[2]',  
		 comentariofinal='$datosUP2[3]',
	     etapa=3,
		 fechaetapa2= '$datosUP2[4]'
		 WHERE  id ='$datosUP2[0]';";


		return mysqli_query($conexion,$sql);
	}
		public function updateP2AC($datosUP2AC)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="UPDATE prospectos SET
		 califico = '$datosUP2AC[1]', 
		 interesadoE='$datosUP2AC[2]',  
		 comentariofinal='$datosUP2AC[3]'
		 WHERE  id ='$datosUP2AC[0]';";


		return mysqli_query($conexion,$sql);
	}
	public function giroid($insergiro)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into giros (nombre) values (
		'$insergiro[0]'
		)";


		return mysqli_query($conexion,$sql);
	}
public function updatePROS($datosPROSC)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="UPDATE prospectos SET
		 nombre = '$datosPROSC[1]', 
		 contactoP='$datosPROSC[2]',  
		 contactoS='$datosPROSC[3]',
		  giro='$datosPROSC[4]',
		   tipo='$datosPROSC[5]'
		 WHERE  id ='$datosPROSC[0]';";


		return mysqli_query($conexion,$sql);
	}
	public function updateCD($cancelarP)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="UPDATE ticketbenefactor SET estatus = 3 WHERE  id ='$cancelarP[0]';";


		return mysqli_query($conexion,$sql);
	}
public function comprasid($comprasinsert)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into compras (folio,fecha,proveedor,descripcion,total) values (
		'$comprasinsert[0]',
		'$comprasinsert[1]',
		'$comprasinsert[2]',
		'$comprasinsert[3]',
		'$comprasinsert[4]'
		)";


		return mysqli_query($conexion,$sql);
	}
	public function tiketid($ticketinser)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into ticketbenefactor (folio) values (
		'$ticketinser[0]'
		)";


		return mysqli_query($conexion,$sql);
	}
public function eliminarCo($deleteprod)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

      $sql="DELETE FROM `produtiket` WHERE  `id`= '$deleteprod[0]' ";



		return mysqli_query($conexion,$sql);
	}
	public function eliminarCongre($idCongre2)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql_c="DELETE FROM `congregaciones` WHERE  `id` = '$idCongre2[0]';";


     $sql="DELETE FROM `voluntarios` WHERE  `idI`= '$idCongre2[0]';";
$cerrar= mysqli_query($conexion,$sql);


		return mysqli_query($conexion,$sql_c);
	}
	public function eliminarComenma($idComapa)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql_c="DELETE FROM `comentariosmapa` WHERE  `id` = '$idComapa[0]';";


    


		return mysqli_query($conexion,$sql_c);
	}
	public function eliminarvoluntarios($idVolunD)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql_c="DELETE FROM `voluntarios` WHERE  `id` = '$idVolunD[0]';";


		return mysqli_query($conexion,$sql_c);
	}


	public function eliminarTk($datosTD)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql_c="UPDATE ticketbenefactor SET estatus = '1' WHERE  id ='$datosTD[0]';";


     // $sql="DELETE FROM `produtiket` WHERE  `id`= '$datosTD[0]' ";



		return mysqli_query($conexion,$sql_c);
	}




	

public function idpostulaciones($postulaciones)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into idpostulaciones (idP,idPost,fecha) values (
		'$postulaciones[0]',
		'$postulaciones[1]',
		'$postulaciones[2]'
		)";


		return mysqli_query($conexion,$sql);
	}

	public function idpostulacionesdelete($pos_dele)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

      $sql_1="DELETE FROM `favoritosid` WHERE  `idPos`= '$pos_dele[1]' and idPt = '$pos_dele[0]'";
$cerrar=mysqli_query($conexion,$sql_1);

		$sql="INSERT into idpostulaciones (idP,idPost,fecha) values (
		'$pos_dele[0]',
		'$pos_dele[1]',
		'$pos_dele[2]'
		)";


		return mysqli_query($conexion,$sql);
	}
	
	public function eliminarPost($eliminarPost_1)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

      $sql="DELETE FROM `idpostulaciones` WHERE  `id`= '$eliminarPost_1[0]' ";



		return mysqli_query($conexion,$sql);
	}














	 public function AsistenciaEv($AsistenciaE)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();


		$sql="UPDATE asistenciaevenig SET `asistencia`= 'A' WHERE  `id`='$AsistenciaE[0]'";

		return mysqli_query($conexion,$sql);
	}
	 public function agregarNM($MNivel)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();


		$sql="INSERT into materiasinst (`Nombre`, `idN`, `idG`) values (
		'$MNivel[0]',
		'$MNivel[1]',
		'$MNivel[2]'
		)";

		return mysqli_query($conexion,$sql);
	}


// ------------------------------------Ozono----------------//
	public function insercam($idCamp)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into campanaozono (nombre, descripcion,queseespera,idporquien,tipocap) values (
		'$idCamp[0]',
		'$idCamp[1]',
		'$idCamp[2]',
		'$idCamp[3]',
		'$idCamp[4]'
		)";
		return mysqli_query($conexion,$sql);
	}
public function insertparticipantes($insertparti)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into participantescamp (idU, idCam,estado) values (
		'$insertparti[0]',
		'$insertparti[1]',
		1
		)";
		return mysqli_query($conexion,$sql);
	}
	public function insertconsultas($insconsulta)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into consultas (estado, fechacita,idpaciente,fechar,horains) values (
		1,
		'$insconsulta[0]',
		'$insconsulta[1]',
		'$insconsulta[2]',
		'$insconsulta[3]'
		)";
		return mysqli_query($conexion,$sql);
	}
	public function insertexpediente($idexpediente)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into expedientemedico (antheredofamiliares, antpatologicos,antquirurjicos,antnopatologicos,antgineco, padecimientoact, diagnostico) values (
		'$idexpediente[0]',
		'$idexpediente[1]',
		'$idexpediente[2]',
		'$idexpediente[3]',
		'$idexpediente[4]',
		'$idexpediente[5]',
		'$idexpediente[6]'
		)";
		return mysqli_query($conexion,$sql);
	}
	public function insertreceta($idreceta)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into recetasobs (observaciones, recta,idconsulta,idpaciente, fecha) values (
		'$idreceta[0]',
		'$idreceta[1]',
		'$idreceta[2]',
		'$idreceta[3]',
		'$idreceta[4]'
				)";
		return mysqli_query($conexion,$sql);
	}
	public function insertrsesion($idsesion)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into sesionesterapias (idT, idE,realizado,pagado) values (
		'$idsesion[0]',
		'$idsesion[2]',
		1,
		1
				)";
		return mysqli_query($conexion,$sql);
	}
	public function insertcontacto($idcontacto)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into contactoscl (idcliente,nombre,cel,correo) values (
		'$idcontacto[0]',
		'$idcontacto[1]',
		'$idcontacto[2]',
		'$idcontacto[3]'
				)";
		return mysqli_query($conexion,$sql);
	}
	public function insertgrupos($insertgrupo)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into grupodeproducto (nombre) values (
		'$insertgrupo[0]'
		)";
		return mysqli_query($conexion,$sql);
	}
	public function insertUnidad($insertunidad)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into unidademedida (nombre, abreviatura) values (
		'$insertunidad[0]',
		'$insertunidad[1]'
		)";
		return mysqli_query($conexion,$sql);
	}
	public function insertMovimiento($insertMovi)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into tiposmovimientos (nombre) values (
		'$insertMovi[0]'
		)";
		return mysqli_query($conexion,$sql);
	}
public function insertproductos($insertprod)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into almacenozono (codigo, nombre,grupo,descripcion,unidad,costo,precio,iva,estatus) values (
		'$insertprod[0]',
		'$insertprod[1]',
		'$insertprod[2]',
		'$insertprod[3]',
		'$insertprod[4]',
		'$insertprod[5]',
		'$insertprod[6]',
		'$insertprod[7]',
		1
		)";
		return mysqli_query($conexion,$sql);
	}

public function insertrequisicion($insertrequi)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into requisicion (fechaid, idU,observaciones,prioridad,estatus,idempresa,fechaC) values (
		'$insertrequi[0]',
		'$insertrequi[1]',
		'$insertrequi[2]',
		'$insertrequi[3]',
		'$insertrequi[4]',
		'$insertrequi[5]',
		'$insertrequi[6]'
		)";
		return mysqli_query($conexion,$sql);
	}
	public function insertpaciente($pacienteid)
	{
		$obj= new conectar();
		$conexion=$obj->conexion();

		$sql="INSERT into pacientes (nombre, primerapellido,segundoapellido,nacionalidad,curp,estadocivil,sexo,fechanacimiento,fechaalta,celular,correo,edad) values (
		'$pacienteid[0]',
		'$pacienteid[1]',
		'$pacienteid[2]',
		'$pacienteid[3]',
		'$pacienteid[4]',
		'$pacienteid[5]',
		'$pacienteid[6]',
		'$pacienteid[7]',
		'$pacienteid[8]',
		'$pacienteid[9]',
		'$pacienteid[10]',
		'$pacienteid[11]'

		)";
		return mysqli_query($conexion,$sql);
	}




}









  ?>