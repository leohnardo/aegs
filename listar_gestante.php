<?php
	//inicializador de sessão;
	session_start();
	//verificar se está logado na sessão;
	if ( $_SESSION["logado"] != "ok") {
		header("Location: index.php");				
	}
?>

<html>
<!DOCTYPE html>
<html>
  <head>
    <title>AEGS - Acompanhamento de Enfermagem à Gestante com Sífilis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/buttons/form-submit-button-simple_black.css?3.3.1461"/>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.1461" type="text/javascript"></script>
    <link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.1461" />

  </head>
  <body>

<div class="navbar navbar-inverse">
  <div class="navbar-inner">
    <a class="brand" href="#">AEGS</a>
    <ul class="nav">
      <li><a href="main.php">Cadastrar Gestante</a></li>
      <li><a href="#">Gestantes Cadastradas</a></li>
      <li><a onclick='window.print()'> Imprimir </a> </td>
      <li><a href="index.php">Sair</a></li>
    </ul>
  </div>
</div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

	<head>
		<title>AEGS - Acompanhamento de Enfermagem à Gestante com Sífilis </title>
		<meta charset="UTF-8">
			<link href="estilo.css" rel="stylesheet">

	</head>
	<body>
		<div class="telalistacliente">
		<h1>AEGS - Lista de Gestantes </h1> <br> <br>
		
<style type="text/css">
	.tabvercliente, .apresenta {
		margin:3px auto;
        padding-top:5px;
        width:800px;
        color:#555 !important;
        font-family:'Verdana';
        font-size:12px;
        border-color: rgb(#000000);
		border: double;  
	}

	h1 {
		margin:1px auto;
        padding-top:0px;
        width:800px;
        color:#555 !important;
        font-family:'Verdana';
        font-size:14px;
		font-weight: normal;
 		line-height: 20px;
    }
	}


</style>
		<table 	class="tabvercliente" id="listagem" border="1">
			<thead>
			<tr class="apresenta">
			<tr>
				<th> ID </th>
				<th> Nome </th>
				<th> CNS do Profissional de Saúde </th>
				<th> Data de Nascimento </th>
				<th> Data do Inicio do Pré Natal </th>
				<th> Desfecho </th>
				<th> Editar </th>
				
				<th> Apagar </th>
				<tr>
			</tr>
			</thead>


			<?php
			
			// Não exibe notificação e alerta
			error_reporting(1);

			// Conecta ao BD
			// $conexao = new mysqli( "localhost", "root", "", "gest2017" );
			$conexao = new mysqli( "localhost", "id2569928_admin", "admin", "id2569928_gest2017" );

			
			// Erro na conexão?
			if ( $conexao->connect_error == true ) {
				
				echo "Erro ao Conectar";
			
			}

			// Criar comando SQL
			$sql = " SELECT * 
					FROM gestantes ";

			// Executa no BD
			$retorno = $conexao->query( $sql );

			// Deu erro?
			if ( $retorno == false ) {
				echo $conexao->error;
			}

			// percorre todos os registros
			while ( $registro = $retorno->fetch_array() ) {
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

				// imprimir registro na tabela
				echo "<tbody class='form-label form-label-top'>
						<tr class='form-label form-label-top' >
						<td>$id</td>
						<td>$nome_gestante</td>
						<td>$cns_prof</td>
						<td>".implode("/", array_reverse(explode("-", $data_nasc)))."</td>
						<td>".implode("/", array_reverse(explode("-", $datainipre)))."</td>
						<td>".implode("/", array_reverse(explode("-", $desfecho)))."</td>
						<td><a href='editar_gestante.php?id=$id'> <button style='font-family: verdana; font-size: 12px; background-color: #1F1F1F;	border-radius: 5px;
 color: #fff; border:0;'> Editar  </button></a></td>
						


						<td><a onclick=\"return confirm('Deseja Apagar?');\" href='apagar.php?id=$id'> <button  <button style='font-family: verdana; font-size: 12px;  background-color: #1F1F1F; color: #fff; border:0;border-radius: 5px;'> Apagar </button></a></td>
					</tr>
					</tbody>"; 
			}

			?>

		</table>
		
</div>
	</body>
</html>