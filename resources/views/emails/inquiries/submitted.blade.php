<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>New Website Inquiry</title>
</head>
<body style="margin: 0; background: #f4f4f4; color: #081a43; font-family: Arial, Helvetica, sans-serif;">
    <div style="max-width: 680px; margin: 0 auto; padding: 32px 16px;">
        <div style="border-top: 6px solid #FFA729; background: #ffffff; padding: 32px;">
            <h1 style="margin: 0 0 24px; font-size: 24px;">New Website Inquiry</h1>

            <table style="width: 100%; border-collapse: collapse;" cellpadding="8">
                <tr>
                    <td style="width: 140px; border-bottom: 1px solid #e5e7eb;"><strong>Name</strong></td>
                    <td style="border-bottom: 1px solid #e5e7eb;">{{ $inquiry['name'] }}</td>
                </tr>
                <tr>
                    <td style="border-bottom: 1px solid #e5e7eb;"><strong>Email</strong></td>
                    <td style="border-bottom: 1px solid #e5e7eb;">{{ $inquiry['email'] }}</td>
                </tr>
                <tr>
                    <td style="border-bottom: 1px solid #e5e7eb;"><strong>Phone</strong></td>
                    <td style="border-bottom: 1px solid #e5e7eb;">{{ $inquiry['phone'] ?: 'Not provided' }}</td>
                </tr>
                <tr>
                    <td style="border-bottom: 1px solid #e5e7eb;"><strong>Service</strong></td>
                    <td style="border-bottom: 1px solid #e5e7eb;">{{ $inquiry['service'] ?: 'Not specified' }}</td>
                </tr>
                <tr>
                    <td style="border-bottom: 1px solid #e5e7eb;"><strong>Form</strong></td>
                    <td style="border-bottom: 1px solid #e5e7eb;">{{ ucfirst($inquiry['source']) }} page</td>
                </tr>
            </table>

            <h2 style="margin: 28px 0 12px; font-size: 18px;">Message</h2>
            <div style="white-space: pre-wrap; line-height: 1.7;">{{ $inquiry['message'] }}</div>
        </div>
    </div>
</body>
</html>
