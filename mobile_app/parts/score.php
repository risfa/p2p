<br>
<h3>Leaderboard</h3>
<div class="card">
	<div class="card-header">
		Score
	</div>
<div class="card-body" style="padding-top: 10%;">
		<ul class="nav nav-tabs" id="myTab" role="tablist" style="font-size: 15px;">
			<li class="nav-item">
				<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="color:#1aacda;">Individual</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="color:#1aacda;">Group</a>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent" style="font-size: 15px;">
			<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Name</th>
							<th scope="col">Score</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>1000</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>250</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Larry</td>
							<td>100</td>
						</tr>
					</tbody>
				</table>

			</div>
			<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Group</th>
							<th scope="col">Score</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Gagak</td>
							<td>1000</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Cekiber</td>
							<td>250</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Ular</td>
							<td>100</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
</div>
</div>
<div class="row" style="position: fixed; bottom: 0; width: 100%; text-align: center;
font-size: 30px; border-top: 2px solid #1aacda ">
	<div class="col-4 nav1" style="border-right: 2px solid #1aacda">
		<a id="score" class="nav1" href="index.php?menu=score"><i class="fas fa-medal nav1"></i></a>
	</div>
	<div  class="col-4" style="border-right: 2px solid #1aacda">
		<a  href="index.php?menu=home"><i class="fas fa-home"></i></a>
	</div>
	<div class="col-4">
		<a href="index.php?menu=group"><i class="fas fa-users"></i></a>
	</div>
</div>