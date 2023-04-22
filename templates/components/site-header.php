<header class='main-tool-bar site-header'>
	<inner-column>

		<div class="box-container">
			<a href="/">
				<div class="cube">
					<div class="face top"></div>
					<div class="face bottom"></div>
					<div class="face left"></div>
					<div class="face right"></div>
					<div class="face front"></div>
					<div class="face back"></div>
				</div>
			</a>
		</div>

		<nav class='main-menu'>
			<ul>

				<li>
					<a href="/" class=" <?php activePage("home") ?>">Home</a>
				</li>
				<li>
					<a href="/about" class=" <?php activePage("about") ?>">About</a>
				</li>
				<li>
					<a href="/projects" class=" <?php activePage("projects") ?>">Projects</a>
				</li>
			</ul>

		</nav>

		<button class='hamburger-button' id='toggle' rel='hamburger'>
			<span class='visually-hidden'>Open Menu</span>
			<div class='menu-bars'></div>
		</button>

		<nav class="burger">
			<ul>
				<li class="small-size">
					<a href="/" class=" <?php activePage("home") ?>">Home</a>
				</li>
				<li class="small-size">
					<a href="/about" class=" <?php activePage("about") ?>">About</a>
				</li>
				<li class="small-size">
					<a href="/projects" class=" <?php activePage("projects") ?>">Projects</a>
				</li>
				<li class='always-in-menu'>
					<a href="/writing ">Writing</a>
				</li>
				<li class='always-in-menu'>
					<a href="/forms">Forms</a>
				</li>
				<li class='always-in-menu'>
					<a href="/layouts">Layouts</a>
				</li>
				<li class='always-in-menu'>
					<a href="/style ">Guide</a>
				</li>
			</ul>

		</nav>
	</inner-column>
</header>