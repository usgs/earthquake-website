<?php

if (!isset($TEMPLATE)) {
	$TITLE = 'Test Webpage';
	$NAVIGATION = true;

	include('template.inc.php');
}
?>

<nav class="jumplist">
	<a href="#aheader">A Header</a>
	<a href="#another">Another</a>
</nav>

<h2>An H2 Header</h2>

<figure class="right">
	<img src="images/st-tropez.jpg" alt="St Tropez"/>
	<figcaption>The caption is here.</figcaption>
</figure>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<h3>An H3 Header</h3>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<h4 id="aheader">An H4 Header</h4>

<figure>
	<img src="images/st-tropez.jpg" alt="St Tropez"/>
	<figcaption>The caption is here.</figcaption>
</figure>

<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>

<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>

<h2 id="another">Another H2 Header</h2>

<div class="row">
	<div class="column one-of-two">
		<p>Lorem ipsum dolor sit amet, consectetur
			adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
			veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
			commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
			velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
			cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
			est laborum.
		</p>

		<table class="tabular">
			<tr>
				<td>first row, first column</td>
				<td>first row, second column</td>
			</tr>
			<tr>
				<td>second row, first column</td>
				<td>second row, second column</td>
			</tr>
		</table>

	</div>

	<div class="column one-of-two"><p>Lorem ipsum dolor sit amet, consectetur
	adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>

</div>

<h2>References</h2>
<ul class='referencelist'>
	<li>Reference 1 - showing that the format is in bibliography style where the
	second line is indented. Wald et al., Some really long paper title about a
	very obscure topic in seismology, some scientific journal, series number,
	date.</li>
	<li>Reference 2</li>
</ul>
