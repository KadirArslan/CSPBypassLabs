<?php

$payload = $_GET["input"];

header("Content-Security-Policy: script-src 'self' frame-src http://x55.is/");

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
					<h1 class="w3-text-teal">Level 7</h1>
					<br />
					<h4>
            Content Security Policy : script-src 'self' frame-src http://x55.is/
          </h4>
					<br />
					<br />
					<form action="#" method="get">
						<input type="text" name="input" id="input"  />
						<button type="submit">Submit</button>
					</form>
					<br>
						<p>Your payload is : 
							<?php echo $payload ?>
						</p>
					</div>
				</div>
				<label for="hint">
					<b>Show Hint</b>
				</label>
				<input type="checkbox" id="hint"/>
				<div id="hintDesc">https://www.w3schools.com/tags/tag_iframe.asp</div>
			</div>
		</body>
	</html>
