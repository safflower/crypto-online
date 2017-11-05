<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Crypto Online</title>
		<link rel="icon" href="/img/favicon.png">

		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Press+Start+2P">
		<link rel="stylesheet" href="/css/common.css?<?php echo filemtime("./css/common.css"); ?>">

		<!-- Common -->
		<script src="/js/jquery.min.js?<?php echo filemtime("./js/jquery.min.js"); ?>"></script>
		<script src="/js/common.js?<?php echo filemtime("./js/common.js"); ?>"></script>

		<!-- Encode -->
		<script src="/js/encode/hex.min.js?<?php echo filemtime("./js/encode/hex.min.js"); ?>"></script>
		<script src="/js/encode/html.min.js?<?php echo filemtime("./js/encode/html.min.js"); ?>"></script>
		<script src="/js/encode/uu.min.js?<?php echo filemtime("./js/encode/uu.min.js"); ?>"></script>
		<script src="/js/encode/morse.min.js?<?php echo filemtime("./js/encode/morse.min.js"); ?>"></script>
		<script src="/js/encode/base32.min.js?<?php echo filemtime("./js/encode/base32.min.js"); ?>"></script>
		<script src="/js/encode/base58.min.js?<?php echo filemtime("./js/encode/base58.min.js"); ?>"></script>
		<script src="/js/encode/base64.min.js?<?php echo filemtime("./js/encode/base64.min.js"); ?>"></script>
		<script src="/js/encode/base85.min.js?<?php echo filemtime("./js/encode/base85.min.js"); ?>"></script>
		<script src="/js/encode/utf.min.js?<?php echo filemtime("./js/encode/utf.min.js"); ?>"></script>

		<!-- Cipher -->
		<script src="/js/cipher/caesar.min.js?<?php echo filemtime("./js/cipher/caesar.min.js"); ?>"></script>
		<script src="/js/cipher/keyword.min.js?<?php echo filemtime("./js/cipher/keyword.min.js"); ?>"></script>
		<script src="/js/cipher/vigenere.min.js?<?php echo filemtime("./js/cipher/vigenere.min.js"); ?>"></script>

		<!-- Encrypt -->
		<script src="/js/encrypt/aes.min.js?<?php echo filemtime("./js/encrypt/aes.min.js"); ?>"></script>
		<script src="/js/encrypt/rc4.min.js?<?php echo filemtime("./js/encrypt/rc4.min.js"); ?>"></script>
		<script src="/js/encrypt/des.min.js?<?php echo filemtime("./js/encrypt/des.min.js"); ?>"></script>
		<script src="/js/encrypt/blowfish.min.js?<?php echo filemtime("./js/encrypt/blowfish.min.js"); ?>"></script>

		<!-- Hash -->
		<script src="/js/hash/crc.min.js?<?php echo filemtime("./js/hash/crc.min.js"); ?>"></script>
		<script src="/js/hash/adler32.min.js?<?php echo filemtime("./js/hash/adler32.min.js"); ?>"></script>
		<script src="/js/hash/md2.min.js?<?php echo filemtime("./js/hash/md2.min.js"); ?>"></script>
		<script src="/js/hash/md4.min.js?<?php echo filemtime("./js/hash/md4.min.js"); ?>"></script>
		<script src="/js/hash/md5.min.js?<?php echo filemtime("./js/hash/md5.min.js"); ?>"></script>
		<script src="/js/hash/sha1.min.js?<?php echo filemtime("./js/hash/sha1.min.js"); ?>"></script>
		<script src="/js/hash/sha256.min.js?<?php echo filemtime("./js/hash/sha256.min.js"); ?>"></script>
		<script src="/js/hash/sha512.min.js?<?php echo filemtime("./js/hash/sha512.min.js"); ?>"></script>
		<script src="/js/hash/whirlpool.min.js?<?php echo filemtime("./js/hash/whirlpool.min.js"); ?>"></script>

		<!-- Misc -->
		<script src="/js/misc/string.min.js?<?php echo filemtime("./js/misc/string.min.js"); ?>"></script>

	</head>
	<body>
		<div class="container">
			<div class="wrapper">
				<div class="page-head">
					<h1 style="word-spacing: -10px;">
						<a href="/#!/">
							<img src="/img/lock.png" style="margin-right: 22px;"><span style="vertical-align: 9%">Crypto Online</span>
						</a>
					</h1>
				</div>
				<div class="page-body">
					<div class="category-box">
						<div id="category-encode" class="group">
							<h3><a href="/#!/encode">Encode</a></h3>
							<ul>
								<li><a href="/#!/encode/url">URL Encode</a></li>
								<li><a href="/#!/encode/hex">Hex Encode</a></li>
								<li><a href="/#!/encode/html">HTML Encode</a></li>
								<li><a href="/#!/encode/uu">UU Encode</a></li>
								<li><a href="/#!/encode/morse">Morse Code</a></li>
								<li><a href="/#!/encode/base32">Base32 Encode</a></li>
								<li><a href="/#!/encode/base58">Base58 Encode</a></li>
								<li><a href="/#!/encode/base64">Base64 Encode</a></li>
								<li><a href="/#!/encode/base85">Base85 Encode</a></li>
								<li><a href="/#!/encode/utf-8">UTF-8 Encode</a></li>
								<li><a href="/#!/encode/utf-16">UTF-16 Encode</a></li>
							</ul>
						</div>
						<div id="category-cipher" class="group">
							<h3><a href="/#!/cipher">Cipher</a></h3>
							<ul>
								<li><a href="/#!/cipher/caesar">Caesar Cipher</a></li>
								<li><a href="/#!/cipher/keyword">Keyword Cipher</a></li>
								<li><a href="/#!/cipher/vigenere">Vigenere Cipher</a></li>
							</ul>
						</div>
						<div id="category-encrypt" class="group">
							<h3><a href="/#!/encrypt">Encrypt</a></h3>
							<ul>
								<li><a href="/#!/encrypt/aes">AES Encrypt</a></li>
								<li><a href="/#!/encrypt/rc4">RC4 Encrypt</a></li>
								<li><a href="/#!/encrypt/des">DES Encrypt</a></li>
								<li><a href="/#!/encrypt/blowfish">Blowfish Encrypt</a></li>
							</ul>
						</div>
						<div id="category-hash" class="group">
							<h3><a href="/#!/hash">Hash</a></h3>
							<ul>
								<li><a href="/#!/hash/crc16">CRC16 Hash</a></li>
								<li><a href="/#!/hash/crc32">CRC32 Hash</a></li>
								<li><a href="/#!/hash/adler32">Adler32 Hash</a></li>
								<li><a href="/#!/hash/md2">MD2 Hash</a></li>
								<li><a href="/#!/hash/md4">MD4 Hash</a></li>
								<li><a href="/#!/hash/md5">MD5 Hash</a></li>
								<li><a href="/#!/hash/sha1">SHA1 Hash</a></li>
								<li><a href="/#!/hash/sha224">SHA224 Hash</a></li>
								<li><a href="/#!/hash/sha256">SHA256 Hash</a></li>
								<li><a href="/#!/hash/sha384">SHA384 Hash</a></li>
								<li><a href="/#!/hash/sha512">SHA512 Hash</a></li>
								<li><a href="/#!/hash/whirlpool">Whirlpool Hash</a></li>
							</ul>
						</div>
						<div id="category-misc" class="group">
							<h3><a href="/#!/misc">Misc</a></h3>
							<ul>
								<li><a href="/#!/misc/uppercase">Uppercase</a></li>
								<li><a href="/#!/misc/lowercase">Lowercase</a></li>
								<li><a href="/#!/misc/capitalize">Capitalize</a></li>
								<li><a href="/#!/misc/reverse">Reverse</a></li>
								<li><a href="/#!/misc/replace">Replace</a></li>
								<li><a href="/#!/misc/shuffle">Shuffle</a></li>
							</ul>
						</div>
					</div>
					<div class="tool-box">
					</div>
				</div>
				<div class="page-foot">
					&copy; <a href="//safflower.kr" target="_blank">Safflower</a>. All Rights Reserved.
				</div>
			</div>
			<div class="scroll-box">
				<a class="scroll-top">Top</a><br><a class="scroll-bottom">Bottom</a>
			</div>
		</div>

	</body>
</html>