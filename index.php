<!doctype html>
<!--
Copyright (c) 2014 The Polymer Project Authors. All rights reserved.
This code may only be used under the BSD style license found at http://polymer.github.io/LICENSE.txt
The complete set of authors may be found at http://polymer.github.io/AUTHORS.txt
The complete set of contributors may be found at http://polymer.github.io/CONTRIBUTORS.txt
Code distributed by Google as part of the polymer project is also
subject to an additional IP rights grant found at http://polymer.github.io/PATENTS.txt
-->
<html>
<head>
	<title>Duta Library</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">

	<script src="components/platform/platform.js"></script>

	<link rel="import" href="components/core-scaffold/core-scaffold.html">
	<link rel="import" href="components/core-header-panel/core-header-panel.html">
	<link rel="import" href="components/core-menu/core-menu.html">
	<link rel="import" href="components/core-item/core-item.html">
	<link rel="import" href="components/core-collapse/core-collapse.html">

	<style>

		html, body {
			height: 100%;
			margin: 0;
		}

		body {
			font-family: sans-serif;
		}

		core-scaffold {
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
		}

		.content {
			background-color: #fff;
			height: 5000px;
			padding: 20px;
		}

		/* some default styles for mode="cover" on core-scaffold */
		core-scaffold[mode=cover]::shadow core-header-panel::shadow #mainContainer {
			left: 120px;
		}

		core-scaffold[mode=cover] .content {
			margin: 20px 100px 20px 0;
		}

		.sub-menu{
			margin-left: 38px;
		}
	</style>

</head>

<body unresolved>

	<core-scaffold>

	<core-header-panel navigation flex mode="seamed">
	<core-toolbar style="background-color: #526E9C; color: #fff;text-transform:uppercase;">Duta Library</core-toolbar>
	<core-menu>
	<core-item icon="home" label="Dashboard"></core-item>
	<core-item icon="turned-in-not" label="Master Data" onclick="document.querySelector('#collapse2').toggle()"></core-item>
	<core-collapse id="collapse2" class="box" style="margin-left:20 px;">
	<core-submenu>
	<core-item icon ="book" label="Master Book" class="sub-menu"></core-item>
	<core-item icon ="account-child" label="Master User" class="sub-menu"></core-item>
	</core-submenu>
	</core-collapse>
	</core-menu>
	</core-header-panel>
	<div tool></div>
	<div class="content">Content</div>
	</core-scaffold>

</body>
</html>
