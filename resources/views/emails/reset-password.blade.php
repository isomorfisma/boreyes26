<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 40px 0;
            background-color: #f3f4f6;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 16px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            padding: 32px;
            border: 2px solid rgba(211, 235, 159, 0.3);
            position: relative;
            overflow: hidden;
        }
        .bg-pattern {
            position: absolute;
            inset: 0;
            opacity: 0.05;
            background-image: radial-gradient(circle at 2px 2px, #0F4C82 1px, transparent 0);
            background-size: 30px 30px;
        }
        .content {
            position: relative;
            z-index: 10;
        }
        h1 {
            font-size: 24px;
            font-weight: 900;
            color: #0F4C82;
            margin: 0 0 16px 0;
            letter-spacing: -0.025em;
        }
        .greeting {
            color: #0F4C82;
        }
        p {
            color: #6B7280;
            margin: 0 0 24px 0;
            line-height: 1.625;
        }
        .button-container {
            text-align: center;
            margin-bottom: 24px;
        }
        .reset-button {
            display: inline-block;
            padding: 16px 24px;
            background: linear-gradient(to right, #C5E6C9, #D3EB9F);
            color: #0F4C82;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 900;
            font-size: 16px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
        }
        .reset-button:hover {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            transform: scale(1.05);
        }
        .small-text {
            font-size: 14px;
            color: #6B7280;
            margin-top: 16px;
        }
        hr {
            margin: 24px 0;
            border: 0;
            border-top: 1px solid #e5e7eb;
        }
        .footer {
            font-size: 12px;
            color: #9ca3af;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="bg-pattern"></div>
        <div class="content">
            <h1>
                <span class="greeting">Halo, {{ $user->name }}</span>
            </h1>
            <p>
                Kami menerima permintaan untuk reset password akun Anda.
                Klik tombol di bawah ini untuk melanjutkan.
            </p>
            <div class="button-container">
                <a href="{{ $url }}" class="reset-button">
                    Reset Password
                </a>
            </div>
            <p class="small-text">
                Link ini akan kadaluarsa dalam {{ config('auth.passwords.users.expire') }} menit.
            </p>
            <p class="small-text">
                Jika Anda tidak meminta reset password, abaikan email ini.
            </p>
            <hr>
            <p class="footer">
                © {{ date('Y') }} Boreyes 2026. All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>