<?php
// Telegram Bot Info (مخفي تمامًا عن الزائر)
$botToken = "8172380019:AAEXAMPLE_REAL_TOKEN";
$chatId   = "7946491186";

// Get IP & User Agent
$ip = $_SERVER['REMOTE_ADDR'];
$ua = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';

// Send message
$message = "🧠 New Visitor on DNS Page\n🌍 IP: $ip\n📱 UA: $ua";
file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message));
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bemoss Priv8 DNS</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #0f0f0f, #1a1a1a);
      color: #fff;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      text-align: center;
      padding: 20px;
    }
    .logo {
      font-size: 2.5rem;
      font-weight: bold;
      color: #00e0ff;
      margin-bottom: 10px;
    }
    .tagline {
      font-size: 18px;
      color: #ccc;
      margin-bottom: 30px;
    }
    .dns-box {
      background: #1f1f1f;
      border: 1px solid #333;
      padding: 16px 25px;
      border-radius: 14px;
      font-family: monospace;
      margin: 10px 0;
      font-size: 16px;
      width: fit-content;
    }
    .cta-button {
      margin-top: 30px;
      padding: 12px 30px;
      background: #00e0ff;
      color: #000;
      border: none;
      border-radius: 30px;
      font-weight: bold;
      text-decoration: none;
      box-shadow: 0 0 10px rgba(0, 224, 255, 0.4);
      transition: 0.3s;
    }
    .cta-button:hover {
      background: #00b4cc;
    }
    footer {
      margin-top: 40px;
      font-size: 12px;
      color: #666;
    }
  </style>
</head>
<body>

  <div class="logo">🔒 PRIV8 DNS</div>
  <div class="tagline">High-Availability · Encrypted · Priv8 Nameservers</div>

  <div class="dns-box">ns1.bemossncontrol.com → 93.184.216.34</div>
  <div class="dns-box">ns2.bemossncontrol.com → 93.184.216.35</div>

  <a href="#" class="cta-button">Request Access</a>

  <footer>&copy; 2025 BEMOSS · All Rights Reserved</footer>

</body>
</html>
