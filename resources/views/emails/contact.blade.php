<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo mensaje de contacto</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f5f5f5; margin: 0; padding: 0;">
    <table width="100%" cellpadding="0" cellspacing="0" style="padding: 20px;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 8px; padding: 30px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
                    <tr>
                        <td style="text-align: center; padding-bottom: 20px;">
                            <h1 style="color: #0F1E6A; font-size: 24px; margin: 0;">Nuevo mensaje de contacto</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style="color: #333333; font-size: 16px;">Hola, has recibido un nuevo mensaje desde el formulario de contacto de <strong>J. García López</strong>. Aquí están los detalles:</p>
                            <table width="100%" cellpadding="5" cellspacing="0" style="margin-top: 20px; border-collapse: collapse;">
                                <tr>
                                    <td style="font-weight: bold; width: 150px; color: #0F1E6A;">Nombre completo:</td>
                                    <td style="color: #333333;">{{ $data['name'] }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; color: #0F1E6A;">Correo electrónico:</td>
                                    <td style="color: #333333;">{{ $data['email'] }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; color: #0F1E6A;">Teléfono:</td>
                                    <td style="color: #333333;">{{ $data['phone'] }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; color: #0F1E6A;">Tipo de servicio:</td>
                                    <td style="color: #333333;">{{ $data['servicio'] }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; color: #0F1E6A;">Mensaje:</td>
                                    <td style="color: #333333;">{{ $data['mensaje'] ?? 'Sin mensaje adicional' }}</td>
                                </tr>
                            </table>
                            <p style="margin-top: 30px; color: #777777; font-size: 14px;">Este correo fue generado automáticamente desde el formulario de contacto de J. García López.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
