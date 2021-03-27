<?php

header("Content-Security-Policy: default-src 'self' 'unsafe-inline' ")

?>
<!DOCTYPE html>
<html lang="en">
	<title>CSP Bypass Lab</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="w3.css" />
	<link
    rel="stylesheet"
    href="w3-theme-black.css"
  />
	<link
    rel="stylesheet"
    href="font-awesome.min.css"
  />
	<style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Roboto", sans-serif;
    }
    .w3-sidebar {
      z-index: 3;
      width: 250px;
      top: 43px;
      bottom: 0;
      height: inherit;
    }
    .alt-menu {
      width: 10%;
      position: relative;
      float: left;
    }

    #hint {
      display: none; 
    }
    #hintDesc {
      display: none;
      position: absolute;
      width: auto;
    }
    #hint:checked + #hintDesc {
      display: block;
    }
  </style>
	<body>
		<div class="w3-top">
			<div class="w3-bar w3-theme w3-top w3-left-align w3-large">
				<a href="index.php" class="w3-bar-item w3-button w3-theme-l1">CSP Bypass Labs</a
        >
				<a href="level1.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white"
          >Level 1</a
        >
				<a href="level2.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white"
          >Level 2</a
        >
				<a href="level3.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white"
          >Level 3</a
        >
				<a href="level4.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white"
          >Level 4</a
        >
				<a
          href="level5.php"
          class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white"
          >Level 5</a
        >
				<a
          href="level6.php"
          class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white"
          >Level 6</a
        >
				<a
          href="level7.php"
          class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white"
          >Level 7</a
        >
			</div>
		</div>
		<div class="w3-main" style="margin-left: 250px">
			<div class="w3-row w3-padding-64">
				<div class="w3-twothird w3-container">
					<br />
					<h1>CSP Bypass labs</h1>
					<br>
						<p>Bypass project of CSP security standard, which is a protection method for XSS vulnerability.</p>
						<h3>What is CSP</h3>
						<p>Content Security Policy is a computer security standard that was introduced to prevent cross-site scripting, click-through, and other code injection attacks resulting from the execution of malicious content in the context of a trusted web page.</p>
						<a href="https://www.netsparker.com/blog/web-security/content-security-policy/" target="_blank">For more about CSP</a>
						<br />
					</div>
				</div>
			</body>
		</html>
