const nodemailer = require('nodemailer');

// =============================================================================
// GMAIL APP PASSWORD SETUP:
//
// 1. In Vercel Project Settings -> Environment Variables, add:
//    - EMAIL_USER: nexdev.vision@gmail.com
//    - EMAIL_PASS: your 16-digit Google App Password (e.g. abcd efgh ijkl mnop)
//    - EMAIL_TO:   email where you want to receive messages (optional)
//
// 2. Or, if testing directly in this file, paste your credentials below:
// =============================================================================
const FALLBACK_GMAIL_USER = 'nexdev.vision@gmail.com';
const FALLBACK_APP_PASS   = 'piii qybo gpgb ulll'; 

module.exports = async function handler(req, res) {
  // CORS headers
  res.setHeader('Access-Control-Allow-Origin', '*');
  res.setHeader('Access-Control-Allow-Methods', 'POST, OPTIONS');
  res.setHeader('Access-Control-Allow-Headers', 'Content-Type, X-Requested-With');

  if (req.method === 'OPTIONS') {
    return res.status(200).end();
  }

  if (req.method !== 'POST') {
    return res.status(405).json({ ok: false, error: 'Method not allowed. Use POST.' });
  }

  try {
    let { name, email, service, message } = req.body || {};

    // Handle raw string body fallback (e.g. urlencoded or raw JSON)
    if (typeof req.body === 'string') {
      try {
        const parsed = JSON.parse(req.body);
        name = parsed.name;
        email = parsed.email;
        service = parsed.service;
        message = parsed.message;
      } catch (e) {
        const params = new URLSearchParams(req.body);
        name = params.get('name');
        email = params.get('email');
        service = params.get('service');
        message = params.get('message');
      }
    }

    name = (name || '').trim();
    email = (email || '').trim();
    service = (service || 'General Inquiry').trim();
    message = (message || '').trim();

    if (!name || !email || !message) {
      return res.status(400).json({ ok: false, error: 'Name, email, and message are required.' });
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      return res.status(400).json({ ok: false, error: 'Please provide a valid email address.' });
    }

    if (message.length > 5000) {
      return res.status(400).json({ ok: false, error: 'Message exceeds maximum length (5000 characters).' });
    }

    // Determine credentials
    const emailUser = (process.env.EMAIL_USER || FALLBACK_GMAIL_USER).trim();
    const rawPass   = (process.env.EMAIL_PASS || FALLBACK_APP_PASS).trim();
    const emailPass = rawPass.replace(/\s+/g, ''); // strip any spaces from App Password
    const emailTo   = (process.env.EMAIL_TO || emailUser).trim();

    if (!emailPass) {
      return res.status(500).json({
        ok: false,
        error: 'Email App Password is not configured. Please set EMAIL_PASS in Vercel Environment Variables or in api/send-mail.js.'
      });
    }

    // Setup Gmail SMTP Transporter
    const transporter = nodemailer.createTransport({
      host: 'smtp.gmail.com',
      port: 465,
      secure: true, // SSL
      auth: {
        user: emailUser,
        pass: emailPass
      }
    });

    // Email content
    const mailOptions = {
      from: `"Nexdev Vision Website" <${emailUser}>`,
      to: emailTo,
      replyTo: `"${name}" <${email}>`,
      subject: `New Project Inquiry from ${name} [${service}]`,
      text: `New project inquiry received on NexDev Vision:\n\n` +
            `Client Name: ${name}\n` +
            `Email:       ${email}\n` +
            `Service:     ${service}\n\n` +
            `Message:\n${message}\n\n` +
            `--\nReply directly to this email to contact the client.`,
      html: `
        <div style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 28px; border: 1px solid #e2e8f0; border-radius: 12px; background-color: #ffffff; color: #0a2846;">
          <div style="border-bottom: 2px solid #1ea0dc; padding-bottom: 16px; margin-bottom: 24px;">
            <h2 style="margin: 0; color: #0a2846; font-size: 22px; font-weight: 700;">New Project Inquiry</h2>
            <p style="margin: 6px 0 0; color: #4e6173; font-size: 13px;">Received from NexDev Vision Website Contact Form</p>
          </div>
          
          <table style="width: 100%; border-collapse: collapse; margin-bottom: 24px;">
            <tr>
              <td style="padding: 10px 0; color: #7f91a2; font-size: 14px; width: 110px;"><strong>Client Name:</strong></td>
              <td style="padding: 10px 0; color: #0a2846; font-size: 15px; font-weight: 600;">${name}</td>
            </tr>
            <tr>
              <td style="padding: 10px 0; color: #7f91a2; font-size: 14px;"><strong>Client Email:</strong></td>
              <td style="padding: 10px 0; font-size: 15px;"><a href="mailto:${email}" style="color: #0284c7; text-decoration: none; font-weight: 500;">${email}</a></td>
            </tr>
            <tr>
              <td style="padding: 10px 0; color: #7f91a2; font-size: 14px;"><strong>Service:</strong></td>
              <td style="padding: 10px 0;"><span style="background: #f0f7fb; color: #0284c7; padding: 4px 12px; border-radius: 999px; font-size: 13px; font-weight: 600; border: 1px solid #bae6fd;">${service}</span></td>
            </tr>
          </table>

          <div style="background-color: #f8fafc; border-left: 4px solid #1ea0dc; padding: 18px; border-radius: 6px; margin-bottom: 24px;">
            <h4 style="margin: 0 0 10px; color: #0a2846; font-size: 13px; letter-spacing: 0.08em; text-transform: uppercase;">Message:</h4>
            <p style="margin: 0; color: #334155; font-size: 14px; line-height: 1.6; white-space: pre-wrap;">${message}</p>
          </div>

          <div style="font-size: 12px; color: #94a3b8; border-top: 1px solid #f1f5f9; padding-top: 16px;">
            💡 <strong>Quick Action:</strong> Click <strong>Reply</strong> in your email client to directly email <strong>${name}</strong> (${email}).
          </div>
        </div>
      `
    };

    await transporter.sendMail(mailOptions);
    return res.status(200).json({ ok: true, message: 'Message sent successfully.' });

  } catch (err) {
    console.error('Mail sending error:', err);
    return res.status(500).json({
      ok: false,
      error: err.message || 'Failed to send message via SMTP server.'
    });
  }
};
