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
            <h2>New Quote Request</h2>
        </div>
        <div class="content">
            <div class="field">
                <span class="label">Name:</span> {{ $data['name'] }}
            </div>
            <div class="field">
                <span class="label">Email:</span> {{ $data['email'] }}
            </div>
            <div class="field">
                <span class="label">Phone:</span> {{ $data['phone'] ?? 'N/A' }}
            </div>
            <div class="field">
                <span class="label">Company:</span> {{ $data['company'] ?? 'N/A' }}
            </div>
            <div class="field">
                <span class="label">Service Category:</span> {{ ucfirst(str_replace('-', ' ', $data['category'])) }}
            </div>
            <div class="field">
                <span class="label">Estimated Budget:</span> {{ $data['budget'] }}
            </div>
            <div class="field">
                <span class="label">Timeline:</span> {{ ucfirst($data['timeline']) }}
            </div>
            <div class="field">
                <span class="label">Project Description:</span><br>
                {{ $data['description'] }}
            </div>
        </div>
        <div class="footer">
            <p>Sent from Nexdev Vision Website</p>
        </div>
    </div>
</body>

</html>