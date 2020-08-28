<style>
	table{
		width: 700px;
	}
	th{
		text-align: left;
	}
	table, th, td{
		border: 1px solid #000;
		border-collapse: collapse;
	}
	th, td{
		padding: 6px;
	}
	.searchcommpte{
		margin-bottom: 25px;
		
	}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gestion Clients Bancaire</title>
	<link rel="stylesheet" href="{{asset('css/styles.css')}}">
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
					<li><a href="{{ route('accueil') }}">
						<span class="icon"><i class="fas fa-home"></i></span>
						<span class="text">Accueil</span>
					</a></li>
					<li><a href="{{ route('addclientS') }}">
						<span class="icon"><i class="fas fa-user" ></i></span>
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
					<li><a href="#" class="active">
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
					GESTION <span>CLIENTS</span>
				</div>
			</div>

			<div class="container">
				<div class="content">
					<div class="item">
						<div class="searchcommpte" style="text-align: center;">
		                    <input type="search" name="recherche_client" class="btn_search"placeholder="N° Compte"/>
		                    <input type="button" name="bouton_de_recherche" class="btn_search" value="Rechercher"/>
		                </div>
						
								<table>
									<tr>
										<th>ID client</th>
										<th>Nom</th>
										<th>Adresse</th>
										<th>Telephone</th>
										<th>Adresse Email</th>
										<th>Etat Compte</th>
									</tr>
										@foreach($Listeclients as $client)
										<tr>
											<td>{{ $client->id }}</td>
											<td>{{ $client->nom }}</td>
											<td>{{ $client->adresse }}</td>
											<td>{{ $client->telephone }}</td>
											<td>{{ $client->email }}</td>
											<td>
												<select>
													<option>Actif</option>
													<option>Bloqué</option>
												</select>
											</td>
											
											<td><a href="{{ route('deletegestionclients', ['id => $client->id']) }}">Supprimer</a></td>
											
											<td><a href="{{ route('updategestionclients', ['id => $client->id']) }}">Editer</a></td>
										</tr>
										@endforeach
								</table>
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