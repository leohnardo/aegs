<html>
	<head>
		<title>APAGAR GESTANTE</title>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<?php

		// Não exibe notificação e alerta
		error_reporting(1);

		// Conecta ao BD
	// $conexao = new mysqli( "localhost", "root", "", "gest2017" );
					$conexao = new mysqli( "localhost", "id2569928_admin", "admin", "id2569928_gest2017" );

		
		// Erro na conexão?
		if ( $conexao->connect_error == true ) {
			
			echo $conexao->connect_error;
		
		}
		// Obtém variável via GET
		$id = $_GET["id"];

if ( $id == NULL ) {

	echo "O ID não foi passado via GET!";
	exit;
}
	// Criar comando SQL
		$sql = "DELETE FROM gestantes WHERE id = $id";

		// Executa no BD
		$retorno = $conexao->query( $sql );

		// Executou?
		if ( $retorno == true ) {
			
			echo "<script>
					alert('Cliente removido com sucesso!');
					location.href='main.php';
				  </script>";
			
		// Deu erro..
		} else {

			echo "<script>
					alert('OS não deletada!');
				  </script>";
			
			echo $conexao->error;
			
		}
/*
		// percorre todos os registros
		while ( $registro = $retorno->fetch_array() ) {

			// obtem os campos do registro
				$id = $registro["id"];
				$uf_atendimento = $registro["uf_atendimento"];
				$muni_atendimento = $registro["muni_atendimento"];
				$datainipre = $registro["datainipre"];
				$data_diag = $registro["data_diag"];
				$nome_unidade = $registro["nome_unidade"];
				$num_area = $registro["num_area"];
				$num_microarea = $registro["num_microarea"];
				$nome_profissional = $registro["nome_profissional"];
				$cns_prof = $registro["cns_prof"];
				$nome_ag_comun = $registro["nome_ag_comun"];
				$nome_gestante = $registro["nome_gestante"];
				$data_nasc = $registro["data_nasc"];
				$nome_mae = $registro["nome_mae"];
				$estadocivil = $registro["estadocivil"];
				$end_terceiro = $registro["end_terceiro"];
				$racacor = $registro["racacor"];
				$muni_residencia = $registro["muni_residencia"];
				$uf_residencia = $registro["uf_residencia"];
				$end_gestante = $registro["end_gestante"];
				$num_residencia = $registro["num_residencia"];
				$complemento = $registro["complemento"];
				$ref_ponto = $registro["ref_ponto"];
				$telefone = $registro["telefone"];
				$escolaridade = $registro["escolaridade"];
				$data_dum = $registro["data_dum"];
				$data_dpp = $registro["data_dpp"];
				$data_testerapido = $registro["result_testerapido"];
				$result_testerapido = $registro["result_testerapido"];
				$result_dose1 = $registro["result_dose1"];
				$data_presc1 = $registro["data_presc1"];
				$teste_trepo1 = $registro["teste_trepo1"];
				$data_testetrepo1 = $registro["data_testetrepo1"];
				$vrdl = $registro["vrdl"];
				$data_lab = $registro["data_lab"];
				$titulacao = $registro["titulacao"];
				$teste_trepo2 = $registro["teste_trepo2"];
				$data_testetrepo2 = $registro["data_testetrepo2"];
				$treponemicoteste = $registro["treponemicoteste"];
				$candroduro = $registro["candroduro"];
				$localizacao = $registro["localizacao"];
				$papulaspalmoplantares = $registro["papulaspalmoplantares"];
				$alopecia = $registro["alopecia"];
				$ausenciasinais = $registro["ausenciasinais"];
				$aptneuro = $registro["aptneuro"];
				$sifprimaria = $registro["sifprimaria"];
				$sifprimaria_datadose = $registro["sifprimaria_datadose"];
				$sifsecundaria = $registro["sifsecundaria"];
				$sifsecundaria_datadose1 = $registro["sifsecundaria_datadose1"];
				$sifsecundaria_datadose2 = $registro["sifsecundaria_datadose2"];
				$sifterciaria = $registro["sifterciaria"];
				$sifterciaria_datadose1 = $registro["sifterciaria_datadose1"];
				$sifterciaria_datadose2 = $registro["sifterciaria_datadose2"];
				$sifterciaria_datadose3 = $registro["sifterciaria_datadose3"];
				$localdasdoses = $registro["localdasdoses"];
				$gestalergica_penicilina = $registro["gestalergica_penicilina"];
				$enc_dur = $registro["enc_dur"];
				$presc_esquem_terapeutico = $registro["presc_esquem_terapeutico"];
				$gest_infectadapre = $registro["gest_infectadapre"];
				$tratamentoincompleto = $registro["tratamentoincompleto"];
				$reiniciouesquema = $registro["reiniciouesquema"];
				$enc_compulsoria = $registro["enc_compulsoria"];
				$enc_compulsoria_data = $registro["enc_compulsoria_data"];
				$parceirotratado = $registro["parceirotratado"];
				$presc_outroesquema = $registro["presc_outroesquema"];
				$esquema_prescparceiro = $registro["esquema_prescparceiro"];
				$motivo_naorealizado = $registro["motivo_naorealizado"];
				$desfecho = $registro["desfecho"];	
		}
*/
		?>
		
	</body>
</html>
