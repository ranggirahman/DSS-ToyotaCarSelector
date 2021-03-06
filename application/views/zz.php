<!doctype html>
<html class="no-js" lang="en">
<head>
	<!-- Page Header -->
	<title>Tugas Besar SPK</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
  	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">  	
	<link rel="icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">
  	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/highchart.js"></script>
</head>
<body onload="load()">
	<!-- Navigation  -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a style="padding-top: 7px; color:white;" class="navbar-brand">&nbsp;&nbsp;<span><img src="<?php echo base_url(); ?>assets/img/h2.png" width="5%">&nbsp;&nbsp;Implementasi AHP Dalam Pemilihan Tipe Mobil di Dealer Toyota</span></a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul style="padding-right: 10px;" class="nav navbar-nav navbar-right">
					<li>
						<div style="padding: 8px 5px 0px 0px">
							<button class="btn btn-danger" type="button" onclick="toggleFullScreen()""><span class="glyphicon glyphicon-fullscreen"></span></button>
						</div>
					</li>
					<li>					
						<div class="dropdown" style="padding: 8px 5px 0px 0px" id="dropdown">
		  					<button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp;About</button>
						  	<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							    <li class="dropdown-header">Lead Programmer</li>
							    <li><a>Ranggi Rahman</a></li>
							    <li role="separator" class="divider"></li>
							    <li class="dropdown-header">Programmer</li>
							    <li><a>Faisal Syaiful Anwar</a></li>
							    <li role="separator" class="divider"></li>
							    <li class="dropdown-header">Algoritma dan Analisis</li>
							    <li><a>Wiwi Juwita</a></li>
							    <li><a>Agung Cahya Gumilar</a></li>
						  	</ul>
						</div>
					</li>					
				</ul>
			</div>
		</div>
	</nav>

	<div id="loader"></div>

	<!-- Page Container -->
	<div class="container animate-bottom" style="display: none; padding-top: 70px;" id="container">
		<div class="row">
			<div class="col-md-12">
			<div class="alert alert-warning alert-dismissible" role="alert">
			  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  	<span class="glyphicon glyphicon-alert aria-hidden="true"></span>&nbsp;&nbsp;Kami merekomendasikan untuk menggunakan browser Google Chrome agar program kami berjalan seperti semestinya.
			</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary">
	  				<div class="panel-heading">
	    				<h3 class="panel-title"><span class="glyphicon glyphicon-folder-open aria-hidden="true"></span>&nbsp;&nbsp;Deskripsi</h3>
				  	</div>
	  				<div class="panel-body">
						<ul class="nav nav-tabs">
						   <li class="active"><a data-toggle="tab" href="#topik">Permasalahan</a></li>						   
						   <li><a data-toggle="tab" href="#algoritma">Algoritma</a></li>
						   <li><a data-toggle="tab" href="#attribut">Kriteria</a></li>
						   <li><a data-toggle="tab" href="#data">Alternatif</a></li>
						   <li><a data-toggle="tab" href="#test">Peringkat Kriteria</a></li>
						   <li><a data-toggle="tab" href="#rekom">Rekomendasi</a></li>
						</ul>

						<div class="tab-content">
						    <div id="topik" class="tab-pane fade in active" style="padding-top: 20px;">
						    	<div class="col-md-2">
									<span style="font-size: 1000%" class="glyphicon glyphicon-book aria-hidden="true"></span>
								</div>
								<div class="col-md-10">
						      		<p>Kendaraan roda empat menjadi kubutuhan masyarakat yang lumayan penting saat ini, hal ini dilihat dari banyaknya jumlah kemdaraan roda empat yang memadati arus lalu lintas setiap harinya. Kemudian jenis dan variasi kendaraan roda empat pun banyak sekali yang ditawarkan di pasaran, mulai dari bentuk hingga fungsinya. Sehingga para calon pembeli pun kesulitan dan bingung dalam pemilihan dan membeli mobil. Dalam pembelian mobil, setiap orang sering kali bingung untuk memilih yang cocok karena dihadapkan dengan banyak pilihan jenis mobil yang ada di pasaran. Bahkan orang yang sudah membeli mobil pun masih ada yang merasa kecewa dengan mobil yang telah dipilihnya karena kurang sesuai dengan yang dikehendaki. Keterbatasan untuk memilih sebuah mobil dengan tepat berdasarkan kebutuhannya merupakan maslah yang sering muncul di lingkungan masyarakat.</p>
						      	</div>
						    </div>
						    <div id="attribut" class="tab-pane fade" style="padding-top: 20px;">
						    	<div class="col-md-1">
									<span style="font-size: 400%" class="glyphicon glyphicon-duplicate aria-hidden="true"></span>
								</div>
								
								<div class="col-md-8">
						      	<p>Kriteria :</p>
							      <div class="btn-group">
									<?php foreach ($kriteria as $key) { ?>
									  	<a type="button" tabindex="0" class="btn btn-sm btn-info pop" role="button" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="Deksripsi" data-content="<?php echo $key['deskripsi']; ?>"><?php echo $key['kriteria']; ?></a> <br><br>
									  <!-- 	<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    	<span class="caret"></span>
									    	<span class="sr-only">Toggle Dropdown</span>
									  	</button>
									  	<ul class="dropdown-menu">
									    	<li><a><?php echo $key['deskripsi']; ?></a></li>
									  	</ul> -->
									<?php } ?>
									</div>
								</div>
						    </div>
						    <div id="algoritma" class="tab-pane fade" style="padding-top: 20px;">
						    	<center><b>Analythical Hierarcy Process (AHP)</b></center><br>
						    	<div class="col-md-4">
									<img src="<?php echo base_url(); ?>assets/img/a.png" alt="" align="" width="300px"/>
								</div>
								<div class="col-md-8">
						      		<p>Algoritma yang digunakan pada program ini adalah Analythic Hierarchy Process (AHP). Analythic Hierarchy Process merupakan suatu model pendukung keputusan yang dikembangkan oleh Thomas L. Saaty. Model pendukung keputusan ini akan menguraikan masalah multi faktor atau multi kriteria yang kompleks menjadi suatu hirarki.</p>
						      		<p>hirarki didefinisikan sebagai suatu representasi dari sebuah permasalahan yang kompleks dalam suatu struktur multi level dimana level pertama adalah tujuan, yang diikuti level faktor, kriteria, sub kriteria, dan seterusnya ke bawah hingga level terakhir dari alternatif. Dengan hirarki, suatu masalah yang kompleks dapat diuraikan ke dalam kelompok-kelompoknya yang kemudian diatur menjadi suatu bentuk hirarki sehingga permasalahan akan tampak lebih terstruktur dan sistematis.</p>						      		
						      	</div>						      	
						    </div>
						    <div id="data" class="tab-pane fade" style="padding-top: 20px;">						    	
						    	<div class="row">
						    		<div class="col-md-12" style="overflow-x: scroll; width:1100px; padding-left: 100px;">
								      <table class="table table-bordered table-condensed" >
								      	<tr>
								      		<th>Nama</th>
								      		<th>Deksripsi</th>
								      		<th>Gambar</th>
								      	</tr>
											<?php foreach($alternatif as $alt){ ?>
											<tr>
												<td><?php echo $alt['nama']; ?></td>
												<td><?php echo $alt['deskripsi']; ?></td>
												<td><img src="<?php echo base_url()."assets/img/".strtolower($alt['nama']).".png"; ?>" alt="" width="300px" stlye="align:center;"></td>
											</tr>
											<?php } ?>

										</table>
									</div>		
								</div>
						    </div>
						    <div id="test" class="tab-pane fade" style="padding-top: 20px;">
						    	<div class="row">
						    		<div class="col-md-8">
										<center><div id="myChart" style="width:700px; height:500px;"></div></center>
						    		</div>
						    		<div class="col-md-4">
						    			<h3>Peringkat Kriteria</h3><br>
						    			<table class=" table table-condensed">
						    			<?php $i=1;
	    				            $asd = array('red','blue','yellow','skyblue','green','black','pink'); 
						    			foreach($sort as $key){?>
						    			    <tr class="success">
						    			    <td><?php echo $i; ?></td>
						    			    <td><?php echo $key['kriteria']; ?></td>
						    			    </tr>
										<?php $i++;} ?>
						    			</table>
						    		</div>
					    		</div>
						  </div>
  						    <div id="rekom" class="tab-pane fade" style="padding-top: 20px;">
						    	<div class="row">
					    			<h3>Rekomendasi</h3><br>
					    			<table class=" table table-condensed">
					    			<?php $i=0;
					    			foreach($rekomendasi as $key){?>
					    			    <tr class="success">
					    			    <td><?php echo $alternatif[$i]['nama']; ?></td>
					    			    <td><?php echo $key; ?></td>
					    			    </tr>
									<?php $i++;} ?>
					    			</table>
					    		</div>
						    </div>
					  	</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary">
	  				<div class="panel-heading">
	    				<h3 class="panel-title"><span class="glyphicon glyphicon-pencil aria-hidden="true"></span>&nbsp;&nbsp;Input Kriteria</h3>
				  	</div>
	  				<div class="panel-body">
	  					<form action="" method="post" id="new" accept-charset="utf-8">
	  						<div class="row" style="padding-top: 10px;">
								<div class="col-md-3 form-group">
									<input type="text" name="kriteria" id="kriteria" placeholder="Nama Kriteria" class="form-control">
								</div>
								<div class="col-md-7 form-group">
									<textarea name="deskripsi" class="form-control" id="deskripsi" placeholder="Deksripsi Kriteria" rows="6"></textarea>
								</div>
								<div class="row col-md-2">
									<button class="btn btn-warning" type="reset" id="reset"><span class="glyphicon glyphicon-repeat"></span>&nbsp;&nbsp;Reset</button>
									<button type="button" class="btn btn-success " id="submit1" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>">Submit</button>

								</div>
							</div>							
						</form>
					</div>
				</div>	
			</div>
		</div>
		<div id="eigenkriteria" class="row" style="display: none;">
			<div class="col-md-12">
				<div class="panel panel-danger">
	  				<div class="panel-heading">
	    				<h3 class="panel-title"><span class="glyphicon glyphicon-check aria-hidden="true"></span>&nbsp;&nbsp;Input Perbandingan Nilai Matriks</h3>
				  	</div>
				  	<div class="panel-body">
	  				  	<?php echo form_open('Welcome/inputk'); ?>
					  		<?php foreach($kriteria as $i){ ?>
					  		<div class="">
					  			<div class="form-group">
					  				<label name="labelinput"><?php echo $i['kriteria']; ?></label>
					  				<input type="text" name="arr[]" class="form-control">
					  			</div>	
					  		</div>	
					  		<?php } ?>
					  		<div>
					  			<b id="matvalue"><u>Perbandingan Nilai tiap Alternatif (Kuantitatif)</u></b>
					  		</div>
					  		<?php foreach($alternatif as $i){ ?>
					  		<div class="">
					  			<div class="form-group">
					  				<label name="labelinput"><?php echo $i['nama']; ?></label>
					  				<input type="text" name="arra[]" class="form-control">
					  			</div>	
					  		</div>	
					  		<?php } ?>
					  		<div class="">
					  		<input type="hidden" id="krit" name="kriteria">
					  		<input type="hidden" id="desk" name="deskripsi" >
					  		<input type="submit" name="eigenk" value="Submit" class="form-control btn-success">
					  		</div>
					  	</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary">
	  				<div class="panel-heading">
	    				<h3 class="panel-title"><span class="glyphicon glyphicon-ok aria-hidden="true"></span>&nbsp;&nbsp;Input Alternatif
	    				</h3>
				  	</div>
	  				<div class="panel-body">
	  					<form action="" method="post" id="new" accept-charset="utf-8">
	  						<div class="row" style="padding-top: 10px;">
								<div class="col-md-3 form-group">
									<input type="text" name="nama" id="mobil" placeholder="Nama Tipe Mobil" class="form-control">
								</div>
								<div class="col-md-7 form-group">
									<textarea name="deskripsi" class="form-control" id="deskmobil" placeholder="Deksripsi Mobil" rows="6"></textarea>
								</div>
								<div class="row col-md-2">
									<button class="btn btn-warning" type="reset" id="reset"><span class="glyphicon glyphicon-repeat"></span>&nbsp;&nbsp;Reset</button>
									<button type="button" class="btn btn-success " id="submit2" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>">Submit</button>

								</div>
							</div>							
						</form>
					</div>
				</div>	
			</div>
		</div>	
		<div id="eigenalternatif" class="row" style="display: none;">
			<div class="col-md-12">
				<div class="panel panel-danger">
	  				<div class="panel-heading">
	    				<h3 class="panel-title"><span class="glyphicon glyphicon-check aria-hidden="true"></span>&nbsp;&nbsp;Input Nilai Alternatif(Kualitatif/Kuantitatif)</h3>
				  	</div>
				  	<div class="panel-body">
	  				  	<?php echo form_open('Welcome/inputa'); ?>
					  		<?php foreach($kriteria as $i){ ?>
					  		<div class="">
					  			<div class="form-group">
					  				<label name="labelinput"><?php echo $i['kriteria']; ?></label>
					  				<input type="text" name="arrv[<?php echo $i['id']; ?>]" class="form-control">
					  			</div>	
					  		</div>	
					  		<?php } ?>
					  		<!-- <div>
					  			<b id="matvalue"><u>Perbandingan Nilai tiap Alternatif</u></b>
					  		</div>
					  		<?php foreach($alternatif as $i){ ?>
					  		<div class="">
					  			<div class="form-group">
					  				<label name="labelinput"><?php echo $i['nama']; ?></label>
					  				<input type="text" name="arra[]" class="form-control">
					  			</div>	
					  		</div>	
					  		<?php } ?> -->
					  		<div class="">
					  		<input type="hidden" id="mobil2" name="mobil">
					  		<input type="hidden" id="deskmobil2" name="deskmobil" >
					  		<input type="submit" value="Submit" class="form-control btn-success">
					  		</div>
					  	</form>
					</div>
				</div>
			</div>
		</div>	
<!-- 		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary">
	  				<div class="panel-heading">
	    				<h3 class="panel-title"><span class="glyphicon glyphicon-pencil aria-hidden="true"></span>&nbsp;&nbsp;Input Alternatif</h3>
				  	</div>
	  				<div class="panel-body">
	  					<form action="" method="post" id="new" accept-charset="utf-8">
	  						<div class="row" style="padding-top: 10px;">
								<div class="col-md-2 form-group">
									<input type="text" name="kriteria" value="" placeholder="Nama Kriteria">
								</div>
								<div class="row col-md-2">
									<button class="btn btn-warning" type="reset" id="reset"><span class="glyphicon glyphicon-repeat"></span>&nbsp;&nbsp;Reset</button>
									<button type="button" class="btn btn-success " id="submit" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>">Submit</button>

								</div>
							</div>							
						</form>
					</div>
				</div>	
			</div>
		</div> -->
	</div> 

	<!-- Modal -->
	<!-- Modal : Input Not Valid -->
	<div class="modal fade" id="inputwarn" role="dialog" style="padding-top: 200px">
	    <div class="modal-dialog modal-sm">
	      	<div class="modal-content">
	        	<div class="modal-body">
	        		<div class="alert alert-danger" role="alert">
	        		<h1 align="center" style="font-size: 300%"><span class="glyphicon glyphicon-remove-sign aria-hidden="true"></span></h1>
		          	<h5 align="center" style="color: grey;">Input Data Belum Terisi Dengan Benar</h5>
		          	</div>
			    </div>
			    <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
	      	</div>	      
	    </div>
  	</div>
  	<!-- Modal : Input Was Reset -->
  	<div class="modal fade" id="inputres" role="dialog" style="padding-top: 200px">
	    <div class="modal-dialog modal-sm">
	      	<div class="modal-content">
	        	<div class="modal-body">
	        		<div class="alert alert-success" role="alert">
	        		<h1 align="center" style="font-size: 300%"><span class="glyphicon glyphicon-erase aria-hidden="true"></span></h1>
		          	<h5 align="center" style="color: grey;">Input Data  Telah Direset</h5>
		          	</div>
			    </div>
			    <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
	      	</div>
	      
	    </div>
  	</div>
			
<script>
	// page loader
	var timer;

	function load() {
	    timer = setTimeout(showContainer, 0);
	}

	function showContainer() {
	  document.getElementById("loader").style.display = "none";
	  document.getElementById("container").style.display = "block";
	}

	// data process on submit
	$('#submit1').on('click',function() {

		var kri = document.getElementById("kriteria").value;
		var des = document.getElementById("deskripsi").value;

		document.getElementById("krit").value = kri;
		// alert(document.getElementById("krit").value);
		document.getElementById("desk").value = des;
		// var asd = document.getElementById("matvalue").append("Perbandingan setiap alternatif");
		
		if( kri != '' && des != '' ){
			
			var $this = $(this);
			$this.button('loading');
			setTimeout(function() {
		       // $this.button('reset');
		       $("#eigenkriteria").show("slow");
		   	}, 1000);		
		}else{
			$("#inputwarn").modal();
		}
    });
	// data process on submit
	$('#submit2').on('click',function() {

		var m1 = document.getElementById("mobil").value;
		var d1 = document.getElementById("deskmobil").value;

		if( m1 != '' && d1 != '' ){
			document.getElementById("mobil2").value = m1;
			// alert(document.getElementById("krit").value);
			document.getElementById("deskmobil2").value = d1;
			// var asd = document.getElementById("matvalue").append("Perbandingan setiap alternatif");
			
				
			var $this = $(this);
			$this.button('loading');
			setTimeout(function() {
		       // $this.button('reset');
		       $("#eigenalternatif").show("slow");
		   	}, 1000);		
		}else{
			$("#inputwarn").modal();
		}
    });
	// reset button
    $('#reset').on('click',function() {
		$("#inputres").modal();
    	// $("#hasil").hide("slow");
    });

    // about button slideDown animation to Bootstrap dropdown when expanding.
  	$('.dropdown').on('show.bs.dropdown', function() {
    	$(this).find('.dropdown-menu').first().stop(true, true).slideDown();
  	});
  	$('.dropdown').on('hide.bs.dropdown', function() {
    	$(this).find('.dropdown-menu').first().stop(true, true).slideUp();
  	});
	$(function () {
	  $('[data-toggle="popover"]').popover()
	})
  	function toggleFullScreen() {
	  	if ((document.fullScreenElement && document.fullScreenElement !== null) || (!document.mozFullScreen && !document.webkitIsFullScreen)) {
		    if (document.documentElement.requestFullScreen) {  
		      	document.documentElement.requestFullScreen();  
		    }else if(document.documentElement.mozRequestFullScreen) {  
		      	document.documentElement.mozRequestFullScreen();  
		    }else if(document.documentElement.webkitRequestFullScreen) {  
		      	document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);  
		    }  
	  	}else{  
	    if(document.cancelFullScreen) {  
	      	document.cancelFullScreen();  
	    }else if(document.mozCancelFullScreen) {  
	      	document.mozCancelFullScreen();  
	    }else if(document.webkitCancelFullScreen) {  
	      	document.webkitCancelFullScreen();  
	    }  
	  }  
	}
	$(function () {
	    Highcharts.chart('myChart', {
	        chart: {
	         
	            type: 'pie',
	            options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
	        },
	        title: {
	            text: ''
	        },
	        tooltip: {
	            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
	        },
	        plotOptions: {
	            pie: {
	                allowPointSelect: true,
	                cursor: 'pointer',
	                dataLabels: {
	                    enabled: true,
	                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
	                    style: {
	                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
	                    }
	                }
	            }
	        },
	        series: [{
	            name: 'Kriteria',
	            colorByPoint: true,
	            data: [
	            <?php 
	            $asd = array('red','blue','yellow','skyblue','green','black','pink','beige');
	            $i=0;
	            foreach ($kriteria as $key) {
	            	# code...
	            ?>
	            {
	                name: <?php echo "'".$key['kriteria']."'"; ?>,
	                y: <?php echo $key['eigen']; ?>,
	                color :<?php echo "'".$asd[$i]."'"; ?>
	            }, 
	            <?php $i++;} ?>
	            ]
	        }]
	    });
	});
	
</script>

</body>
</html>