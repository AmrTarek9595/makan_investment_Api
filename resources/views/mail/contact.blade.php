<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us Details</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f8f9fa; margin: 0; padding: 20px;">
    {{-- Container Table --}}
    <table style="width: 100%; max-width: 600px; margin: 0 auto; background-color: #ffffff; border: 1px solid #ddd; padding: 20px;">
        <tr>
            <td style="text-align: center;">
                {{-- Logo --}}
                <img src="https://makaninvestment.ae/assets/images/logo.png" alt="Makan Investment Logo" style="max-width: 200px; margin-bottom: 20px;">
            </td>
        </tr>

        {{-- Title --}}
        <tr>
            <td style="text-align: center;">
                <h1 style="color: #007bff; font-size: 24px; margin-bottom: 20px;">Contact Us Form Details</h1>
            </td>
        </tr>

        {{-- Contact Details Table --}}
        <tr>
            <td>
                <table style="width: 100%; border-spacing: 0;">
                    <tr>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">
                            <strong>Full Name:</strong>
                        </td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">
                            {{ $data['name'] }}
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">
                            <strong>Phone:</strong>
                        </td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">
                            {{ $data['phone'] }}
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">
                            <strong>Subject:</strong>
                        </td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">
                            {{ $data['subject'] }}
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 10px;">
                            <strong>Message:</strong>
                        </td>
                        <td style="padding: 10px;">
                            {{ $data['message'] }}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        {{-- Footer --}}
        <tr>
            <td style="text-align: center; padding: 20px;">
                <p style="color: #6c757d; font-size: 14px;">Thank you for contacting us.</p>
            </td>
        </tr>
    </table>
</body>
</html>
