<?php
	$calcRawData = 
	file_get_contents('https://lombardsezam.pl/sezamcalc.json'); 
	$calcRawDataDecoded = json_decode($calcRawData); $kruszeckruszecArray = 
	(object) ['goldassey' => $calcRawDataDecoded->goldassey, 'silverassey' 
	=> $calcRawDataDecoded->silverassey]; $dateString = 
	$calcRawDataDecoded->lastupdate->date; $dateString = explode(" 
	",$dateString); //var_dump($calcRawDataDecoded); ?> 
<div class="content 
	tabele">
	<div class="row">
		<div class="col-12 col-md-6 m-0 p-0 px-md-3">
			<!--col zloto -->
			<div class="row p-0 m-0">
				<div class="col-12 bg-cennik-zloto d-flex align-items-center 
					justify-content-center pt-5">
					<h2>Złoto</h2>
				</div>
			</div>
			<div class="cennikcol">
				<nav>
					<div class="nav nav-tabs 
						nav-fill d-flex justify-content-between" id="nav-tab" role="tablist">
						<button class="nav-item 
							nav-link active " id="nav-contact-tab" data-toggle="tab" 
							href="#nav-contact" role="tab" aria-controls="nav-contact" 
							aria-selected="false">Ponad 300 g</button>
						<button class="nav-item 
							nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" 
							role="tab" aria-controls="nav-profile" aria-selected="false">100-300 g</button>
						<button class="nav-item 
							nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" 
							role="tab" aria-controls="nav-home" aria-selected="true">Do 100 g</button>
					</div>
				</nav>
				<div class="tab-content" 
					id="nav-tabContent">
					<div class="tab-pane" 
						id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
						<?php
							foreach 
							($calcRawDataDecoded->goldassey as $gold) {
								echo 
							'<div class="asseyname d-flex justify-content-between align-items-center 
							pl-3 pr-3"><div> Próba '.$gold->assey;
								echo 
							'</div><div class="asseyprice">'.number_format((float)$gold->price_mod, 2, '.', '').' zł</div></div>';
							}
							?>
					</div>
					<div class="tab-pane" 
						id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
						<?php
							foreach 
							($calcRawDataDecoded->goldassey as $gold) {
								$thisprice = number_format((float)round($gold->price_mod + ($gold->price_mod * ($calcRawDataDecoded->nbp_gold_variants->{'1'}/100)),2), 2, '.', '');
							
							
								echo 
							'<div class="asseyname d-flex justify-content-between align-items-center 
							pl-3 pr-3"><div> Próba '.$gold->assey;
								echo 
							'</div><div class="asseyprice">'.$thisprice .' zł</div></div>';
							}
							?>
					</div>
					<div class="tab-pane show 
						active" id="nav-contact" role="tabpanel" 
						aria-labelledby="nav-contact-tab">
						<?php
							foreach 
							($calcRawDataDecoded->goldassey as $gold) {
								$thisprice = number_format((float)round($gold->price_mod + ($gold->price_mod * ($calcRawDataDecoded->nbp_gold_variants->{'2'}/100)),2), 2, '.', '');
								echo 
							'<div class="asseyname d-flex justify-content-between align-items-center 
							pl-3 pr-3"><div> Próba '.$gold->assey;
								echo 
							'</div><div class="asseyprice">'.$thisprice .' zł</div></div>';
							}
							?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-6 m-0 p-0 px-md-3">
			<!--col zrebro -->
			<div class="row p-0 m-0">
				<div class="col-12 bg-cennik-srebro d-flex align-items-center 
					justify-content-center pt-5">
					<h2>Srebro</h2>
				</div>
			</div>
			<div class="cennikcol">
				<nav>
					<div class="nav nav-tabs 
						nav-fill d-flex justify-content-between" id="cenniksrebro_nav-tab" 
						role="tablist">
						<button class="nav-item 
							nav-link active" id="cenniksrebro_nav-contact-tab" data-toggle="tab" 
							href="#cenniksrebro_nav-contact" role="tab" 
							aria-controls="cenniksrebro_nav-contact" aria-selected="false">Ponad 300 g</button>
						<button class="nav-item 
							nav-link" id="cenniksrebro_nav-profile-tab" data-toggle="tab" 
							href="#cenniksrebro_nav-profile" role="tab" 
							aria-controls="cenniksrebro_nav-profile" aria-selected="false">100-300 g</button>
						<button class="nav-item 
							nav-link" id="cenniksrebro_nav-home-tab" data-toggle="tab" 
							href="#cenniksrebro_nav-home" role="tab" 
							aria-controls="cenniksrebro_nav-home" aria-selected="true">Do 100 g</button>
					</div>
				</nav>
				<div class="tab-content" 
					id="cenniksrebro_nav-tabContent">
					<div class="tab-pane" 
						id="cenniksrebro_nav-home" role="tabpanel" 
						aria-labelledby="cenniksrebro_nav-home-tab">
						<?php
							foreach 
							($calcRawDataDecoded->silverassey as $gold) {
								echo 
							'<div class="asseyname d-flex justify-content-between align-items-center 
							pl-3 pr-3"><div> Próba '.$gold->assey;
								echo 
							'</div><div class="asseyprice">'.number_format((float)$gold->price_mod, 2, '.', '').' zł</div></div>';
							
							}
							?>
					</div>
					<div class="tab-pane" 
						id="cenniksrebro_nav-profile" role="tabpanel" 
						aria-labelledby="cenniksrebro_nav-profile-tab">
						<?php
							foreach 
							($calcRawDataDecoded->silverassey as $gold) {
								$thisprice 
							= round($gold->price_mod + ($gold->price_mod * 
							($calcRawDataDecoded->nbp_silver_variants->{'1'}/100)),2);
							$thisprice = number_format((float)$thisprice, 2, '.', '');
								echo 
							'<div class="asseyname d-flex justify-content-between align-items-center 
							pl-3 pr-3"><div> Próba '.$gold->assey;
								echo 
							'</div><div class="asseyprice">'.$thisprice .' zł</div></div>';
							}
							?>
					</div>
					<div class="tab-pane show 
						active" id="cenniksrebro_nav-contact" role="tabpanel" 
						aria-labelledby="cenniksrebro_nav-contact-tab">
						<?php
							foreach 
							($calcRawDataDecoded->silverassey as $gold) {
								$thisprice 
							= round($gold->price_mod + ($gold->price_mod * 
							($calcRawDataDecoded->nbp_silver_variants->{'2'}/100)),2);
							$thisprice = number_format((float)$thisprice, 2, '.', '');
								echo 
							'<div class="asseyname d-flex justify-content-between align-items-center 
							pl-3 pr-3"><div> Próba '.$gold->assey;
								echo 
							'</div><div class="asseyprice">'.$thisprice .' zł</div></div>';
							}
							?>
					</div>
				</div>
			</div>
			<!--col srebro -->
		</div>

		<div class="col-12 col-md-6 m-0 p-0 px-md-3">
			<!--col zloto -->
			<br /><br /> <!--col monety --> 
			<div class="cennikcol">
				<div id="scroll-to-this" class="row p-0 m-0">
					<div class="col-12 bg-cennik-monety d-flex align-items-center 
						justify-content-center pt-5">
						<h2>Monety</h2>
					</div>
				</div>
				<div class="cennikcol">
					<nav>
						<div class="nav nav-tabs nav-fill d-flex 
							justify-content-between" id="cennikmonety_nav-tab" role="tablist">
							<button class="nav-item nav-link active 
								fontcormorant" id="cennikmonety_nav-home-tab" data-toggle="tab" 
								href="#cennikmonety_nav-home" role="tab" 
								aria-controls="cennikmonety_nav-home" 
								aria-selected="true">ZŁOTE</button>
							<button class="nav-item nav-link 
								fontcormorant" id="cennikmonety_nav-profile-tab" data-toggle="tab" 
								href="#cennikmonety_nav-profile" role="tab" 
								aria-controls="cennikmonety_nav-profile" 
								aria-selected="false">SREBRNE</button>
						</div>
					</nav>
					<div class="tab-content" 
						id="cennikmonety_nav-tabContent">
						<div class="tab-pane show active" 
							id="cennikmonety_nav-home" role="tabpanel" 
							aria-labelledby="cennikmonety_nav-home-tab">
							<div 
								class="cennikcol">
								<nav>
									<div class="nav nav-tabs nav-fill d-flex justify-content-between" id="cennikmonetyzlote_nav-tab" role="tablist">
										<button class="nav-item nav-link active" id="cennikmonetyzlote_nav-contact-tab" data-toggle="tab" href="#cennikmonetyzlote_nav-contact" role="tab" aria-controls="cennikmonetyzlote_nav-contact" aria-selected="false">Ponad 300 g</button>
										<button class="nav-item nav-link" id="cennikmonetyzlote_nav-profile-tab" data-toggle="tab" href="#cennikmonetyzlote_nav-profile" role="tab" aria-controls="cennikmonetyzlote_nav-profile" aria-selected="false">100-300 g</button>
										<button class="nav-item nav-link" id="cennikmonetyzlote_nav-home-tab" data-toggle="tab" href="#cennikmonetyzlote_nav-home" role="tab" aria-controls="cennikmonetyzlote_nav-home" aria-selected="true">Do 100 g</button>
									</div>
								</nav>
								<div 
									class="tab-content" id="cennikmonetyzlote_nav-tabContent">
									<div class="tab-pane" id="cennikmonetyzlote_nav-home" role="tabpanel" aria-labelledby="cennikmonetyzlote_nav-home-tab">
										<?php
											foreach ($calcRawDataDecoded->coins as $coin) {
												echo '<div class="asseyname d-flex justify-content-between align-items-center pl-3 pr-3">';
												echo '<div><img class="asseyimg" src="'.$coin->img.'" /></div>';
												echo '<div>'.$coin->name.'</div>';
												
												echo '<div class="asseyprice">'.number_format((float)$coin->price_priv, 2, '.', '').' zł</div></div>';
											}
											?>
									</div>
									<div class="tab-pane" id="cennikmonetyzlote_nav-profile" role="tabpanel" aria-labelledby="cennikmonetyzlote_nav-profile-tab">
										<?php
											foreach ($calcRawDataDecoded->coins as $coin) {
												echo '<div class="asseyname d-flex justify-content-between align-items-center pl-3 pr-3">';
												echo '<div><img class="asseyimg" src="'.$coin->img.'" /></div>';
												echo '<div>'.$coin->name.'</div>';
												echo '<div class="asseyprice">'.number_format((float)$coin->price_150less, 2, '.', '').' zł</div></div>';
											}
											?>
									</div>
									<div class="tab-pane show active" id="cennikmonetyzlote_nav-contact" role="tabpanel" aria-labelledby="cennikmonetyzlote_nav-contact-tab">
										<?php
											foreach ($calcRawDataDecoded->coins as $coin) {
												echo '<div class="asseyname d-flex justify-content-between align-items-center pl-3 pr-3">';
												echo '<div><img class="asseyimg" src="'.$coin->img.'" /></div>';
												echo '<div>'.$coin->name.'</div>';
												echo '<div class="asseyprice">'.number_format((float)$coin->price_150more, 2, '.', '').' zł</div></div>';
											}
											?>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" 
							id="cennikmonety_nav-profile" role="tabpanel" 
							aria-labelledby="cennikmonety_nav-profile-tab">
							<div class="cennikcol">
								<nav>
									<div class="nav nav-tabs nav-fill d-flex justify-content-between" id="cennikmonetysilver_nav-tab" role="tablist">
										<button class="nav-item nav-link active" id="cennikmonetysilver_nav-contact-tab" data-toggle="tab" href="#cennikmonetysilver_nav-contact" role="tab" aria-controls="cennikmonetysilver_nav-contact" aria-selected="false">Ponad 300 g</button>
										<button class="nav-item nav-link" id="cennikmonetysilver_nav-profile-tab" data-toggle="tab" href="#cennikmonetysilver_nav-profile" role="tab" aria-controls="cennikmonetysilver_nav-profile" aria-selected="false">100-300 g</button>
										<button class="nav-item nav-link" id="cennikmonetysilver_nav-home-tab" data-toggle="tab" href="#cennikmonetyzlote_nav-home" role="tab" aria-controls="cennikmonetysilver_nav-home" aria-selected="true">Do 100 g</button>
									</div>
								</nav>
								<div 
									class="tab-content" id="cennikmonetysilver_nav-tabContent">
									<div class="tab-pane" id="cennikmonetysilver_nav-home" role="tabpanel" aria-labelledby="cennikmonetysilver_nav-home-tab">
										<?php
											foreach ($calcRawDataDecoded->silvercoins as $coin) {
												echo '<div class="asseyname d-flex justify-content-between align-items-center pl-3 pr-3">';
												echo '<div><img class="asseyimg" src="'.$coin->img.'" /></div>';
												echo '<div>'.$coin->name.'</div>';
												echo '<div class="asseyprice">'.number_format((float)$coin->price_priv, 2, '.', '').' zł</div></div>';
												
											}
											?>
									</div>
									<div class="tab-pane" id="cennikmonetysilver_nav-profile" role="tabpanel" aria-labelledby="cennikmonetysilver_nav-profile-tab">
										<?php
											foreach ($calcRawDataDecoded->silvercoins as $coin) {
												echo '<div class="asseyname d-flex justify-content-between align-items-center pl-3 pr-3">';
												echo '<div><img class="asseyimg" src="'.$coin->img.'" /></div>';
												echo '<div>'.$coin->name.'</div>';
												echo '<div class="asseyprice">'.number_format((float)$coin->price_150less, 2, '.', '').' zł</div></div>';
											}
											?>
									</div>
									<div class="tab-pane show active" id="cennikmonetysilver_nav-contact" role="tabpanel" aria-labelledby="cennikmonetysilver_nav-contact-tab">
										<?php
											foreach ($calcRawDataDecoded->silvercoins as $coin) {
												echo '<div class="asseyname d-flex justify-content-between align-items-center pl-3 pr-3">';
												echo '<div><img class="asseyimg" src="'.$coin->img.'" /></div>';
												echo '<div>'.$coin->name.'</div>';
												echo '<div class="asseyprice">'.number_format((float)$coin->price_150more, 2, '.', '').' zł</div></div>';
											}
											?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--col monety --> 
		</div>
		<div class="col-12 col-md-6 m-0 p-0 px-md-3">
			<br /><br />
			<!--col sztabki --> 
			<div class="cennikcol">
				<div class="row p-0 m-0">
					<div class="col-12 bg-cennik-sztabki d-flex align-items-center 
						justify-content-center pt-5">
						<h2>Sztabki</h2>
					</div>
				</div>
				<div class="cennikcol">
					<nav>
						<div class="nav nav-tabs 
							nav-fill d-flex justify-content-between" id="cenniksztabki_nav-tab" 
							role="tablist">
							<button 
								class="nav-item nav-link active fontcormorant" 
								id="cenniksztabki_nav-home-tab" data-toggle="tab" 
								href="#cenniksztabki_nav-home" role="tab" 
								aria-controls="cenniksztabki_nav-home" 
								aria-selected="true">ZŁOTE</button>
							<button 
								class="nav-item nav-link fontcormorant" 
								id="cenniksztabki_nav-profile-tab" data-toggle="tab" 
								href="#cenniksztabki_nav-profile" role="tab" 
								aria-controls="cenniksztabki_nav-profile" 
								aria-selected="false">SREBRNE</button>
						</div>
					</nav>
					<div class="tab-content" 
						id="cenniksztabki_nav-tabContent">
						<div class="tab-pane 
							show active" id="cenniksztabki_nav-home" role="tabpanel" 
							aria-labelledby="cenniksztabki_nav-home-tab">
							<div class="cennikcol">
								<nav>
									<div class="nav nav-tabs nav-fill d-flex justify-content-between" id="cenniksztabkizlote_nav-tab" role="tablist">
										<button class="nav-item nav-link active" id="cenniksztabkizlote_nav-contact-tab" data-toggle="tab" href="#cenniksztabkizlote_nav-contact" role="tab" aria-controls="cenniksztabkizlote_nav-contact" aria-selected="false">Ponad 300 g</button>
										<button class="nav-item nav-link" id="cenniksztabkizlote_nav-profile-tab" data-toggle="tab" href="#cenniksztabkizlote_nav-profile" role="tab" aria-controls="cenniksztabkizlote_nav-profile" aria-selected="false">100-300 g</button>
										<button class="nav-item nav-link" id="cenniksztabkizlote_nav-home-tab" data-toggle="tab" href="#cenniksztabkizlote_nav-home" role="tab" aria-controls="cenniksztabkizlote_nav-home" aria-selected="true">Do 100 g</button>
									</div>
								</nav>
								<div class="tab-content" id="cenniksztabkizlote_nav-tabContent">
									<div class="tab-pane" id="cenniksztabkizlote_nav-home" role="tabpanel" aria-labelledby="cenniksztabkizlote_nav-home-tab">
										<?php
											foreach ($calcRawDataDecoded->goldbars as $coin) {
												echo '<div class="asseyname d-flex justify-content-between align-items-center pl-3 pr-3">';
												echo '<div><img class="asseyimg" src="'.$coin->img.'" /></div>';
												echo '<div>'.$coin->name.'</div>';
												echo '<div class="asseyprice">'.number_format((float)$coin->price_priv, 2, '.', '').' zł</div></div>';
											}
											?>
									</div>
									<div class="tab-pane" id="cenniksztabkizlote_nav-profile" role="tabpanel" aria-labelledby="cenniksztabkizlote_nav-profile-tab">
										<?php
											foreach ($calcRawDataDecoded->goldbars as $coin) {
												echo '<div class="asseyname d-flex justify-content-between align-items-center pl-3 pr-3">';
												echo '<div><img class="asseyimg" src="'.$coin->img.'" /></div>';
												echo '<div>'.$coin->name.'</div>';
												echo '<div class="asseyprice">'.number_format((float)$coin->price_150less, 2, '.', '').' zł</div></div>';
											}
											?>
									</div>
									<div class="tab-pane show active" id="cenniksztabkizlote_nav-contact" role="tabpanel" aria-labelledby="cenniksztabkizlote_nav-contact-tab">
										<?php
											foreach ($calcRawDataDecoded->goldbars as $coin) {
												echo '<div class="asseyname d-flex justify-content-between align-items-center pl-3 pr-3">';
												echo '<div><img class="asseyimg" src="'.$coin->img.'" /></div>';
												echo '<div>'.$coin->name.'</div>';
												echo '<div class="asseyprice">'.number_format((float)$coin->price_150more, 2, '.', '').' zł</div></div>';
											}
											?>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" 
							id="cenniksztabki_nav-profile" role="tabpanel" 
							aria-labelledby="cenniksztabki_nav-profile-tab">
							<div class="cennikcol">
								<nav>
									<div class="nav nav-tabs nav-fill d-flex justify-content-between" id="cenniksztabkisilver_nav-tab" role="tablist">
										<button class="nav-item nav-link active" id="cenniksztabkisilver_nav-contact-tab" data-toggle="tab" href="#cenniksztabkisilver_nav-contact" role="tab" aria-controls="cenniksztabkisilver_nav-contact" aria-selected="false">Ponad 300 g</button>
										<button class="nav-item nav-link" id="cenniksztabkisilver_nav-profile-tab" data-toggle="tab" href="#cenniksztabkisilver_nav-profile" role="tab" aria-controls="cenniksztabkisilver_nav-profile" aria-selected="false">100-300 g</button>
										<button class="nav-item nav-link" id="cenniksztabkisilver_nav-home-tab" data-toggle="tab" href="#cenniksztabkisilver_nav-home" role="tab" aria-controls="cenniksztabkisilver_nav-home" aria-selected="true">Do 100 g</button>
									</div>
								</nav>
								<div class="tab-content" id="cenniksztabkisilver_nav-tabContent">
									<div class="tab-pane show active" id="cenniksztabkisilver_nav-home" role="tabpanel" aria-labelledby="cenniksztabkisilver_nav-home-tab">
										<?php
											foreach ($calcRawDataDecoded->silverbars as $coin) {
												echo '<div class="asseyname d-flex justify-content-between align-items-center pl-3 pr-3">';
												echo '<div><img class="asseyimg" src="'.$coin->img.'" /></div>';
												echo '<div>'.$coin->name.'</div>';
												echo '<div class="asseyprice">'.number_format((float)$coin->price_priv, 2, '.', '').' zł</div></div>';
											}
											?>
									</div>
									<div class="tab-pane" id="cenniksztabkisilver_nav-profile" role="tabpanel" aria-labelledby="cenniksztabkisilver_nav-profile-tab">
										<?php
											foreach ($calcRawDataDecoded->silverbars as $coin) {
												echo '<div class="asseyname d-flex justify-content-between align-items-center pl-3 pr-3">';
												echo '<div><img class="asseyimg" src="'.$coin->img.'" /></div>';
												echo '<div>'.$coin->name.'</div>';
												echo '<div class="asseyprice">'.number_format((float)$coin->price_150less, 2, '.', '').' zł</div></div>';
											}
											?>
									</div>
									<div class="tab-pane" id="cenniksztabkisilver_nav-contact" role="tabpanel" aria-labelledby="cenniksztabkisilver_nav-contact-tab">
										<?php
											foreach ($calcRawDataDecoded->silverbars as $coin) {
												echo '<div class="asseyname d-flex justify-content-between align-items-center pl-3 pr-3">';
												echo '<div><img class="asseyimg" src="'.$coin->img.'" /></div>';
												echo '<div>'.$coin->name.'</div>';
												echo '<div class="asseyprice">'.number_format((float)$coin->price_150more, 2, '.', '').' zł</div></div>';
											}
											?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>