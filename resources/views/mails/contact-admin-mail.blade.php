<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Neue Termin-Anfrage</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #f4f7fa;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .wrapper {
            width: 100%;
            table-layout: fixed;
            background-color: #f4f7fa;
            padding: 30px 0;
        }

        .main {
            background-color: #ffffff;
            margin: 0 auto;
            width: 100%;
            max-width: 640px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        .header {
            background: linear-gradient(135deg, #0099ff, #004aad);
            color: #ffffff;
            text-align: center;
            padding: 35px 20px;
        }

        .header h1 {
            margin: 0;
            font-size: 26px;
            letter-spacing: 0.5px;
        }

        .content {
            padding: 30px 40px;
            line-height: 1.6;
        }

        .content h2 {
            font-size: 20px;
            color: #004aad;
            margin-top: 0;
        }

        .info-box {
            background-color: #f8fbff;
            border: 1px solid #e0e7ff;
            border-radius: 8px;
            padding: 20px;
            margin-top: 15px;
        }

        .info-box p {
            margin: 6px 0;
            font-size: 15px;
        }

        .info-box strong {
            color: #004aad;
        }

        .message {
            background-color: #fefefe;
            border-left: 4px solid #0099ff;
            padding: 15px 20px;
            margin-top: 20px;
            border-radius: 6px;
            font-style: italic;
        }

        .footer {
            text-align: center;
            font-size: 13px;
            color: #888;
            padding: 25px 20px;
            background-color: #fafafa;
            border-top: 1px solid #eee;
        }

        .footer a {
            color: #004aad;
            text-decoration: none;
        }

        @media (max-width: 600px) {
            .content {
                padding: 25px;
            }
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <table class="main" cellspacing="0" cellpadding="0" align="center">
            <tr>
                <td class="header">
                    <h1>Neue Termin-Anfrage</h1>
                    <p>Sie haben eine neue Nachricht über das Kontaktformular erhalten</p>
                </td>
            </tr>
            <tr>
                <td class="content">
                    <h2>Details der Anfrage</h2>

                    <div class="info-box">
                        <p><strong>Name:</strong> {{ $name }}</p>
                        <p><strong>Telefonnummer:</strong> {{ $phone }}</p>
                    </div>

                    <div class="message">
                        <p>{{ $messageText }}</p>
                    </div>

                    <p style="margin-top: 25px;">📎 Falls vorhanden, sind Dokumente oder Schadensbilder im Anhang enthalten.</p>
                </td>
            </tr>
            <tr>
                <td class="footer">
                    <p>Diese Nachricht wurde automatisch über das <strong>Kontaktformular</strong> Ihrer Website gesendet.</p>
                    <p>© {{ date('Y') }} Glasfix 24 | <a href="{{ url('/') }}">Website besuchen</a></p>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
