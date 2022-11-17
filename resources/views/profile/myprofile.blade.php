@extends('layouts.main')

@section('content')

<div class="profileCont">

	<div class="profileCard">
		<input id="profView" type="checkbox">

			<div class="placeholderPic">
				<img src="/img/cat.jpg" alt="">
			</div>

			<div class="userName">@ {{ Auth::user()->UserName }}</div>

			<div class="fullNameBlock">
				<div class="firstName">
					<h2>{{ Auth::user()->FirstName }}</h2>
				</div>

				<div class="midLastName">
					<h2>{{ Auth::user()->MiddleName }}</h2>
					<h2>{{ Auth::user()->LastName }}</h2>
				</div>
			</div>

			<div class="changePwBlock">
				<button class="redBtn">Change Password</button>
			</div>

			<div class="colEmailBlock">
				<div class="userTypeBlock">
					<button class="adminViewBtn">adm</button>
					<div>{{ Auth::user()->UserType }}</div>
				</div>

				<div>{{ Auth::user()->college }}</div>
				<div>{{ Auth::user()->email }}</div>
			</div>

		<label class="profDown" for="profView"></label>
	</div>

	<div class="userFunctionsCard">

		<div class="container">
			<div class="content">
				<input type="radio" name="slider" checked id="add">
				<input type="radio" name="slider" id="mypaper">
				<input type="radio" name="slider" id="bookmark">

				<div class="list">

					<label for="add" class="add">
					<i class="fas fa-solid fa-plus"></i>
					<span class="title">Add Paper</span>
					</label>

					<label for="mypaper" class="mypaper">
						<span class="icon"><i class="fas fa-solid fa-scroll"></i></span>
						<span class="title">My Papers</span>
					</label>

					<label for="bookmark" class="bookmark">
						<span class="icon"><i class="far fa-solid fa-bookmark"></i></span>
						<span class="title">Bookmarks</span>
					</label>
					<div class="slider"></div>
				</div>

				<div class="text-content">
					<div class="add text">
						<div class="title">Add a Paper</div>
						
						<form class="paperInput">
							<div class="group">      
								<input class="inputchecker1 inputInfo" type="text" required>
								<span class="highlight"></span>
								<span class="bar"></span>
								<label class="infoLabel">Paper Title</label>
							</div>

							<div class="group">      
								<input class="inputchecker2 inputInfo" id="inputID" type="text" required>
								<span class="highlight"></span>
								<span class="bar"></span>
								<label class="infoLabel">Author(s)</label>
							</div>

							<select class="selectType">
								<option selected="true" disabled="disabled">Select Paper Type</option>
								<option>Thesis</option>
								<option>Capstone</option>
							</select>

							<div class="addPDF">
									<button class="redBtn"><i class="pdf fa-solid fa-plus"></i>Add PDF</button>
							</div>

							<br>
							<br>

							<button class="redBtn">Submit Paper</button>
						</form>
					</div>

					<div class="mypaper text">
						<div class="title">My Papers</div>
						asdasdad
					</div>

					<div class="bookmark text">
						<div class="title">My Bookmarks</div>
						gggggggg
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer id="footer">
		<p>Silliman University Digital Repository</p>
	</footer>

	<script>
			function checkMediaQuery() {
			
				const boxinput1 = document.querySelector('.inputchecker1');
				const boxinput2 = document.querySelector('.inputchecker1');

				if (window.innerWidth <= 768) {

						if (boxinput1 === document.activeElement) {
							document.getElementById("footer").style.display = "none";
						} else if (boxinput2 === document.activeElement) {
							document.getElementById("footer").style.display = "none";
						}
					
				}
			}
			window.addEventListener('resize', checkMediaQuery);
	</script>
</div>



@endsection