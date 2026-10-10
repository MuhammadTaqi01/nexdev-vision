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
            color: #ffffff;
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
            <h2>New Client Feedback</h2>
        </div>
        <div class="content">
            <div class="field">
                <span class="label">Name:</span> {{ $data['name'] }}
            </div>
            <div class="field">
                <span class="label">Email:</span> {{ $data['email'] }}
            </div>
            <div class="field">
                <span class="label">Position:</span> {{ $data['position'] ?? 'N/A' }}
            </div>
            <div class="field">
                <span class="label">Company:</span> {{ $data['company'] ?? 'N/A' }}
            </div>
            <div class="field">
                <span class="label">Overall Rating:</span> {{ $data['rating'] }}/5 Stars
            </div>
            <div class="field">
                <span class="label">Recommend:</span> {{ ucfirst($data['recommend']) }}
            </div>
            <div class="field">
                <span class="label">Public Consent:</span> {{ isset($data['public_consent']) ? 'Yes' : 'No' }}
            </div>
            <div class="field">
                <span class="label">Improvements Suggested:</span><br>
                {{ $data['improvement'] }}
            </div>
            <div class="field">
                <span class="label">Other Comments:</span><br>
                {{ $data['comments'] ?? 'None' }}
            </div>
        </div>
        <div class="footer">
            <p>Sent from Nexdev Vision Website</p>
        </div>
    </div>
</body>

</html>