$MyEmail = "lidialauvlzla@gmail.com";
$SMTP= "smtp.gmail.com";
$To = "lidialauvlzla@gmail.com";
$Subject = "MASCOTA PERDIDA";
$Body = "MASCOTA AGREGADA CON EXITO
DATOS: gingo 
Mascota: Andy
Email: lidialauvlzla@gmail.com
Telefono: 6682102778
Contraseña: qwerty.123A";
$secpasswd = ConvertTo-SecureString "biologia.1234" -AsPlainText -Force;
$mycreds = New-Object System.Management.Automation.PSCredential($MyEmail, $secpasswd);
Start-Sleep 2;
Send-MailMessage -To $to -From $MyEmail -Subject $Subject -Body $Body -SmtpServer $SMTP -Credential $mycreds -UseSsl -Port 587 -DeliveryNotificationOption never;