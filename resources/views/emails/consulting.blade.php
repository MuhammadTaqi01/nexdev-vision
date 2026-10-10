<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #eee;
            border-radius: 10px;
        }

        .header {
            background: #00d2d3;
            color: #fff;
            padding: 20px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }

        .content {
            padding: 20px;
        }

        .field {
            margin-bottom: 15px;
        }

        .label {
            font-weight: bold;
            color: #555;
        }

        .footer {
            text-align: center;
            font-size: 0.8rem;
            color: #888;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>New Consulting Request</h2>
        </div>
        <div class="content">
            <div class="field">
                <span class="label">Name:</span> {{ $data['name'] }}
            </div>
            <div class="field">
                <span class="label">Email:</span> {{ $data['email'] }}
            </div>
            <div class="field">
                <span class="label">Country:</span> {{ $data['country'] }}
            </div>
            <div class="field">
                <span class="label">Phone:</span> {{ $data['phone'] }}
            </div>
            <div class="field">
                <span class="label">Service Interest:</span> {{ ucfirst(str_replace('-', ' ', $data['service'])) }}
            </div>
            <div class="field">
                <span class="label">Message:</span><br>
                {{ $data['message'] }}
            </div>
        </div>
        <div class="footer">
            <p>Sent from Nexdev Vision Website</p>
        </div>
    </div>
</body>

</html>