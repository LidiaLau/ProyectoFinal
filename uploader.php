<!DOCTYPE html>
<html>
<?php 
		$Nombre=$_POST['Nombre'];
		$Email=$_POST['Email'];
		$Celular=$_POST['Celular'];
		$NombreMascota=$_POST['NombreMascota'];
		$Sena=$_POST['Sena'];
		$nomarchivo2 = "correo.ps1";
		$clave = "qwerty.123A";

	//GUARDAMOS ARCHIVO EN LA CARPETA
		$target_path = "images/work/"; //Es la ruta a la carpeta donde se almacenarán los archivos.
		$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); // Archivo subido y guardado de forma temporal por el servidor. Si no es movido a otra ubicación es destruido.
		 if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) { 
			//Archivo finalmente guardado en la carpeta especificada.
		} else{
			echo "Ha ocurrido un error, trate de nuevo!";
		}
	// CONEXION DE LA BD
		try{

		$conexion=new PDO('mysql:host=localhost; dbname=pagina','root','lidia.123');
		
		$conexion->exec("SET CHARACTER SET utf8");
			
		
		$Cons="insert into  perdido  (Nombre,Email,Celular,NombreMascota,Sena) values ( :Nombre,:Email,:Celular,:NombreMascota,:Sena)";
		$resul=$conexion->prepare($Cons);

		$resul->execute(array(":Nombre"=>$Nombre,":Email"=>$Email,":Celular"=>$Celular,":NombreMascota"=>$NombreMascota,":Sena"=>$Sena)); 

		echo "Guardado con exito";

		$resul->closeCursor();

		
		}
		catch(Excepcion $e){

			die('Error:'. $e->GetMessage());
	}
//Envio del correo electronico (correopersonal)
		$mensaje = ('MASCOTA AGREGADA CON EXITO'."\n".'DATOS: '.$Nombre." "."\n"."Mascota: ". $NombreMascota."\n"."Email: ". $Email."\n"."Telefono: ". $Celular."\n"."Contraseña: ". $clave);
		try{if ($archivoo=fopen($nomarchivo2, "w"))
		 {
			if (fwrite($archivoo, '$MyEmail = "lidialauvlzla@gmail.com";'."\n". '$SMTP= "smtp.gmail.com";'."\n". '$To = "'.$Email.'";'."\n".'$Subject = "MASCOTA PERDIDA";'."\n".'$Body = "'.$mensaje.'";'."\n".'$secpasswd = ConvertTo-SecureString "biologia.1234" -AsPlainText -Force;'."\n".'$mycreds = New-Object System.Management.Automation.PSCredential($MyEmail, $secpasswd);'."\n".'Start-Sleep 2;'."\n".'Send-MailMessage -To $to -From $MyEmail -Subject $Subject -Body $Body -SmtpServer $SMTP -Credential $mycreds -UseSsl -Port 587 -DeliveryNotificationOption never;'))
			fclose($archivoo);
			shell_exec('powershell C:\xampp\htdocs\ProyectoFinal\correo.ps1');
		}}
		
			catch(Excepcion $e){
					die('Error:'. $e->GetMessage());
						}
		
	
	
?>
</html>