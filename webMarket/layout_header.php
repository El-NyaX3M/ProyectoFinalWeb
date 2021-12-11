<header>
			<a href="index.php"><button id="titulo"><h1>webMARKET</h1></button></a>
			<input type="text" name="buscar" placeholder="Buscar">
			<button id="btn-buscar"><img src="images/search.png"></button>
			<?php
			if(isset($_COOKIE['logged'])){
				echo '<a href="_salir.php"><button id="btn-logout"><img src="images/logout.png"></button></a>
				<a href="compras.php"><button id="btn-micuenta"><img src="images/myaccount.png"></button></a>';
			}
			else{
				echo '<a href="login.php"><button id="btn-micuenta"><img src="images/myaccount.png"></button></a>';
			}
			?>
			<a href="carrito.php"><button id="btn-carrito"><img src="images/mycart.png"></button></a>
		</header>
		<nav>
			<ul>
				<a href="index.php"><li>Todo</li></a>
				<a href="cat-manzana.php"><li>Manzanas</li></a>
				<a href="cat-pera.php"><li>Peras</li></a>
				<a href="cat-platano.php"><li>Plátanos</li></a>
				<a href="cat-durazno.php"><li>Duraznos</li></a>
				<a href="cat-naranja.php"><li>Naranjas</li></a>
				<a href="cat-kiwi.php"><li>Kiwis</li></a>
			</ul>
		</nav>