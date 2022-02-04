<?php 
$si="	<script>
		$('.openBtn').on('click', function() {

			$('.modal-body').load('Seccion/Empleado-Editar.php?id=2', function() {
				$('#MyModal').modal({
					show: true
				});
			});
		});
		$('.openBtn').on('click', function() {

			$('#MyModal').modal('show');
			
		});
	</script>";

	echo $si;



	$('.Editar').on('click', function() {

		$('.modal-body').html("<?php require_once 'index.php'; ?>");
		

		$("#Editar").modal("show");
	});
	?>