<div class="titulos_secciones">Contact us!</div>
<div class="subtitulos_secciones">Your feedback is important to us so that we can improve our services.<br />Please send us your comments and we will get back to you as soon as possible.</div>

<div id="contiene_contacto">
	<div id="izquierda_contacto">
		<div>
			<a>ABERDEEN INTERNATIONAL SA</a><br />
			Imports & Exports
		</div>

		Av. del Libertador 13925 - Of. 17<br />
		Tel/Fax: +54 11 4798 3142<br />
		(B1640AOK) - Martinez<br />
		Buenos Aires - Argentina
		<br /><br />
		<a href="mailto:aberdeen@aberdeenfoods.com">aberdeen@aberdeenfoods.com</a><br />
		<a href="http://www.aberdeenfoods.com" >www.aberdeenfoods.com </a>
	</div>
	<div id="derecha_contacto">
		<?php
        if  (($_POST['nombre']) && ($_POST['mail']) && ($_POST['motivo']) && ($_POST['coment']))
        {
            require("class.phpmailer.php");
            $mail = new PHPMailer();
            $mail->IsSMTP();
			
			$mail->SMTPAuth = FALSE;
			$mail->Host = "localhost";
			$mail->Port = 25;
			
            $cuerpo .= "<b>Nombre:</b> " . $_POST["nombre"] . "<br>";
            $cuerpo .= "<b>Empresa:</b> " . $_POST["empresa"] . "<br>";
            $cuerpo .= "<b>Tel&eacute;fono:</b> " . $_POST["telefono"] . "<br>";
            $cuerpo .= "<b>Mail:</b> " . $_POST["mail"] . "<br>";
            $cuerpo .= "<b>Motivo:</b> " . $_POST["motivo"] . "<br>";
            $cuerpo .= "<b>Comentarios:</b> " . $_POST["coment"] . "<br>";
                    
            $mail->From = " " . $_POST["mail"];
            $mail->FromName = "" . $_POST["nombre"];
            $mail->Subject = "Formulario de contacto";
            $mail->AddAddress("aberdeen@aberdeenfoods.com","Aberdeen");
            $mail->Body = $cuerpo;
            $mail->AltBody = "prueba";
            $mail->Send();
          
            
             echo "<div style=\"clear:both; color: #439539; margin-left: 20px; font-size: 16px; line-height:200px; text-align:center; \">El  formulario se ha enviado correctamente.</div>";
        }
        else 
        {
            if($_POST['submit'])
            {
                echo "<div style=\"position: absolute; margin: 285px 0px 0px 320px; width: 280px; color: red; line-height:10px; font-size: 12px;\">Por favor, complet&aacute; todos los campos.</div>";
            }
            ?>
			<br /><br />
            <form action="?s=contacto" method=post>
                <table id="tabla_contacto" >
                    <tr> 
						<td colspan="2">Name:</td>
					</tr>
					<tr>
                        <td colspan="2" style="padding-bottom: 8px;"><input type=text name="nombre" class="campo_contacto_largo" value="<?php echo $_POST['nombre']; ?>" ></td>
                    </tr>
					<tr> 
						<td>Company: (not required)</td>
						<td>Phone: (not required)</td>
					</tr>
					<tr>
                        <td style="padding-bottom: 8px;"><input type=text name="empresa" class="campo_contacto" value="<?php echo $_POST['empresa']; ?>" ></td>
                        <td style="padding-bottom: 8px;"><input type=text name="telefono" class="campo_contacto" value="<?php echo $_POST['telefono']; ?>" ></td>
                    </tr>
					<tr> 
						<td>E-Mail address:</td>
						<td>Confirm your e-mail address:</td>
					</tr>
					<tr>
                        <td style="padding-bottom: 8px;"><input type=text name="mail" class="campo_contacto" value="<?php echo $_POST['mail']; ?>" ></td>
                        <td style="padding-bottom: 8px;"><input type=text name="mail2" class="campo_contacto" value="<?php echo $_POST['mail2']; ?>" ></td>
                    </tr>
					<tr> 
						<td colspan="2">Enquiry Type:</td>
					</tr>
					<tr>
                        <td colspan="2" style="padding-bottom: 8px;">
							<select class="campo_contacto_largo" name="motivo">
								<option value="consulta">Enquiry</option>
								<option value="reclamo">Report an issue</option>
								<option value="sugerencia">Suggestion</option>
								<option value="ser_proveedor">Want to become a Supplier</option>
								<option value="ser_cliente">Want to become a Customer</option>
								<option value="otros">Others</option>
							</select> 
						</td>
                    </tr>
					<tr> 
						<td colspan="2">Comments:</td>
					</tr>
					<tr>
                        <td colspan="2" style="padding-bottom: 8px;"><textarea name=coment cols=57 rows=4 class="campo_contacto_largo" style="font-size: 12px; font-family: 'Questrial', sans-serif;" ><?php echo $_POST['coment']; ?></textarea></td>
                    </tr>
					<tr>
                        <td colspan="2" align=right ><button type="submit" class="boton_enviar_personalizado" name="submit"></td>
                    </tr>
                </table>
            </form>
			<?php
        }
		?>
	</div>
</div>
