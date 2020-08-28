<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Accueil</title>
	<link href="{{ asset('css/styles.css') }}" type="text/css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="wrapper">
		<div class="wrapper_inner">
			<div class="vertical_wrap">
			<div class="backdrop"></div>
			<div class="vertical_bar">
				<div class="profile_info">
					<div class="img_holder">
						<img src="{{asset('image/lol.png')}}" alt="profile_pic">
					</div>
					<p class="title">Responsable Compte</p>
					<p class="sub_title">papisndoye218@gmail.com</p>
				</div>
				<ul class="menu">
					<li><a href="#" class="active">
						<span class="icon"><i class="fas fa-home"></i></span>
						<span class="text">Accueil</span>
					</a></li>
					<li><a href="{{ route('addclientS') }}">
						<span class="icon"><i class="fas fa-user"></i></span>
						<span class="text">Salarié</span>
					</a></li>
					<li><a href="{{ route('addclientP') }}">
						<span class="icon"><i class="fas fa-user"></i></span>
						<span class="text">Particulier</span>
					</a></li>
					<li><a href="{{ route('addclientM')}}">
						<span class="icon"><i class="fas fa-chart-pie"></i></span>
						<span class="text">Moral</span>
					</a></li>
					<li><a href="{{ route('getallgestionclients') }}">
						<span class="icon"><i class="fas fa-cog"></i></span>
						<span class="text">Gestion Clients</span>
					</a></li>
				</ul>

				<h3 class="out"><a href="" >Deconnexion</a></h3>
			</div>
		</div>
		<div class="main_container">
			<div class="top_bar">
				<div class="hamburger">
					<i class="fas fa-bars"></i>
				</div>
				<div class="logo">
					ACCUEIL <span></span>
				</div>
			</div>

			<div class="container">
				<div class="content">
					<div class="item">
		                <div class="donneesClient" style="text-align: center;">
		                    <input type="search" name="recherche_client" class="btn_search"placeholder="ID client"/>
		                    <input type="button" name="bouton_de_recherche" class="btn_search" value="Rechercher"/>
		                </div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>

<script src="">
	
</script>
</body>
</html>