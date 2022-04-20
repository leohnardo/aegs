<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html class="supernova"><head>
<title>AEGS - Acompanhamento de Enfermagem à Gestante com Sífilis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F72202893033652" title="oEmbed Form"><link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F72202893033652" title="oEmbed Form">
<meta property="og:title" content="Cadastro de Paciente" >
<meta property="og:url" content="http://www.jotformz.com/form/72202893033652" >
<meta property="og:description" content="Please click the link to complete this form.">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="HandheldFriendly" content="true" />
<title>Cadastro de Paciente</title>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.1461" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.1461" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.1461" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?"/>

<?php
error_reporting(1);
session_start();
if ( $_SESSION["logado"] != "ok" ) {
  // Redireciona para o login
  header("Location: main.php");
  
}

if ($_POST != NULL) {
  
$uf_atendimento = $_POST["uf_atendimento"];
$muni_atendimento = $_POST["muni_atendimento"];
$datainipre = implode("-", array_reverse(explode("/", $_POST['datainipre'])));
$data_diag = implode("-", array_reverse(explode("/", $_POST['data_diag'])));
$nome_unidade = $_POST["nome_unidade"];
$num_area = $_POST["num_area"];
$num_microarea = $_POST["num_microarea"];
$nome_profissional = $_POST["nome_profissional"];
$cns_prof = $_POST["cns_prof"];
$nome_ag_comun = $_POST["nome_ag_comun"];
$nome_gestante = $_POST["nome_gestante"];
$data_nasc = implode("-", array_reverse(explode("/", $_POST['data_nasc'])));
$nome_mae = $_POST["nome_mae"];
$estadocivil = $_POST["estadocivil"];
$end_terceiro = $_POST["end_terceiro"];
$racacor = $_POST["racacor"];
$muni_residencia = $_POST["muni_residencia"];
$uf_residencia = $_POST["uf_residencia"];
$end_gestante = $_POST["end_gestante"];
$num_residencia = $_POST["num_residencia"];
$complemento = $_POST["complemento"];
$ref_ponto = $_POST["ref_ponto"];
$telefone = $_POST["telefone"];
$escolaridade = $_POST["escolaridade"];
$data_dum = implode("-", array_reverse(explode("/", $_POST['data_dum'])));
$data_dpp = implode("-", array_reverse(explode("/", $_POST['data_dpp'])));
$result_testerapido = $_POST["result_testerapido"];
$result_dose1 = $_POST["result_dose1"];
$data_presc1 = implode("-", array_reverse(explode("/", $_POST['data_presc1'])));
$teste_trepo1 = $_POST["teste_trepo1"];
$data_testetrepo1 = implode("-", array_reverse(explode("/", $_POST['data_testetrepo1'])));
$vrdl = $_POST["vrdl"];
$data_lab = implode("-", array_reverse(explode("/", $_POST['data_lab'])));
$titulacao = $_POST["titulacao"];
$teste_trepo2 = $_POST["teste_trepo2"];
$data_testetrepo2 = implode("-", array_reverse(explode("/", $_POST['data_testetrepo2'])));
$treponemicoteste = $_POST["treponemicoteste"];
$candroduro = $_POST["candroduro"];
$localizacao = $_POST["localizacao"];
$papulaspalmoplantares = $_POST["papulaspalmoplantares"];
$alopecia = $_POST["alopecia"];
$ausenciasinais = $_POST["ausenciasinais"];
$aptneuro = $_POST["aptneuro"];
$data_testerapido = implode("-", array_reverse(explode("/", $_POST['data_testerapido'])));
$sifprimaria = $_POST["sifprimaria"];
$sifprimaria_datadose = implode("-", array_reverse(explode("/", $_POST['sifprimaria_datadose'])));
$sifsecundaria = $_POST["sifsecundaria"];
$sifsecundaria_datadose1 = implode("-", array_reverse(explode("/", $_POST['sifsecundaria_datadose1'])));
$sifsecundaria_datadose2 = implode("-", array_reverse(explode("/", $_POST['sifsecundaria_datadose2'])));
$sifterciaria = $_POST["sifterciaria"];
$sifterciaria_datadose1 = implode("-", array_reverse(explode("/", $_POST['sifterciaria_datadose1'])));
$sifterciaria_datadose2 = implode("-", array_reverse(explode("/", $_POST['sifterciaria_datadose2'])));
$sifterciaria_datadose3 = implode("-", array_reverse(explode("/", $_POST['sifterciaria_datadose3'])));
$localdasdoses = $_POST["localdasdoses"];
$gestalergica_penicilina = $_POST["gestalergica_penicilina"];
$enc_dur = $_POST["enc_dur"];
$presc_esquem_terapeutico = $_POST["presc_esquem_terapeutico"];
$gest_infectadapre = $_POST["gest_infectadapre"];
$tratamentoincompleto = $_POST["tratamentoincompleto"];
$reiniciouesquema = $_POST["reiniciouesquema"];
$enc_compulsoria = $_POST["enc_compulsoria"];
$enc_compulsoria_data = implode("-", array_reverse(explode("/", $_POST['enc_compulsoria_data'])));
$parceirotratado = $_POST["parceirotratado"];
$presc_outroesquema = $_POST["presc_outroesquema"];
$data_testerapido = $_POST["data_testerapido"];
$esquema_prescparceiro = $_POST["esquema_prescparceiro"];
$result_testerapido = $_POST["result_testerapido"];
$motivo_naorealizado = $_POST["motivo_naorealizado"];
$motivo_naorealizado_outro = $_POST["motivo_naorealizado_outro"];
$desfecho = $_POST["desfecho"];

  $conexao = new mysqli( "localhost", "root", "", "gest2017" );

    // Erro na conexão?

  if ( $conexao->connect_error == true ) {
      
        echo "Erro ao Conectar";
  
  }   
   // Cria comando SQL para atribuição das variáveis

  $sql = "INSERT INTO  `gestantes` (`uf_atendimento`, `muni_atendimento`, `datainipre`, `data_diag`, `nome_unidade`, `num_area`, `num_microarea`, `nome_profissional`, `cns_prof`, `nome_ag_comun`, `nome_gestante`, `data_nasc`, `nome_mae`, `estadocivil`, `end_terceiro`, `racacor`, `muni_residencia`, `uf_residencia`, `end_gestante`, `num_residencia`, `complemento`, `ref_ponto`, `telefone`, `escolaridade`, `data_dum`, `data_dpp`, `data_testerapido`, `result_testerapido`, `result_dose1`, `data_presc1`, `teste_trepo1`, `data_testetrepo1`, `vrdl`, `data_lab`, `titulacao`, `teste_trepo2`, `data_testetrepo2`, `treponemicoteste`, `candroduro`, `localizacao`, `papulaspalmoplantares`, `alopecia`, `ausenciasinais`, `aptneuro`, `sifprimaria`, `sifprimaria_datadose`, `sifsecundaria`, `sifsecundaria_datadose1`, `sifsecundaria_datadose2`, `sifterciaria`, `sifterciaria_datadose1`, `sifterciaria_datadose2`, `sifterciaria_datadose3`, `localdasdoses`, `gestalergica_penicilina`, `enc_dur`, `presc_esquem_terapeutico`, `gest_infectadapre`, `tratamentoincompleto`, `reiniciouesquema`, `enc_compulsoria`, `enc_compulsoria_data`, `parceirotratado`, `presc_outroesquema`, `esquema_prescparceiro`, `motivo_naorealizado`, `desfecho`, `motivo_naorealizado_outro`) 
  VALUES ('$uf_atendimento','$muni_atendimento','$datainipre','$data_diag','$nome_unidade','$num_area','$num_microarea','$nome_profissional','$cns_prof','$nome_ag_comun','$nome_gestante','$data_nasc','$nome_mae','$estadocivil','$end_terceiro','$racacor','$muni_residencia','$uf_residencia','$end_gestante','$num_residencia','$complemento','$ref_ponto','$telefone','$escolaridade','$data_dum','$data_dpp','$data_testerapido','$result_testerapido','$result_dose1','$data_presc1','$teste_trepo1','$data_testetrepo1','$vrdl','$data_lab','$titulacao','$teste_trepo2','$data_testetrepo2', '$treponemicoteste','$candroduro','$localizacao','$papulaspalmoplantares','$alopecia','$ausenciasinais','$aptneuro','$sifprimaria','$sifprimaria_datadose','$sifsecundaria','$sifsecundaria_datadose1','$sifsecundaria_datadose2','$sifterciaria','$sifterciaria_datadose1','$sifterciaria_datadose2','$sifterciaria_datadose3','$localdasdoses','$gestalergica_penicilina','$enc_dur','$presc_esquem_terapeutico','$gest_infectadapre','$tratamentoincompleto','$reiniciouesquema','$enc_compulsoria','$enc_compulsoria_data','$parceirotratado','$presc_outroesquema','$esquema_prescparceiro','$motivo_naorealizado','$desfecho','$motivo_naorealizado_outro')";

  // Executa no BD
  $retorno = $conexao->query( $sql );
  
  // Executou?
  if ( $retorno == true ) {
    
    echo "<script>
        alert('Cadastro realizado com sucesso!');
        location.href='listar_gestante.php';
        </script>";
    
  // Deu erro..
  } else {

    echo "<script>
        alert('Erro ao cadastrar!');
        </script>";
    
    echo $conexao->error;
    
  }
  
}

?>

<style type="text/css">


    .form-label-left{
        width:50px !important;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:50px !important;
    }
    body, html{
        margin:0;
        padding:0;
        background:#fff;
    }

    .form-all{
        margin:0px auto;
        padding-top:0px;
        width:800px;
        color:rgba(0,0,0,0.57) !important;
        font-family:'Verdana';
        font-size:14px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: #555;
    }

</style>

<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
.form-label.form-label-auto {
        
      display: block;
      float: none;
      text-align: left;
      width: 100%;
    
      }.form-all {
  font-family: "Verdana", sans-serif;
}
.form-all {
  width: 800px;
  width: 100%;
  max-width: 800px;
}
.form-label-left,
.form-label-right {
  width: 50px;
}
.form-label {
  white-space: normal;
}

.form-label-left {
  display: inline-block;
  white-space: normal;
  float: left;
  text-align: left;
}
.form-label-right {
  display: inline-block;
  white-space: normal;
  float: left;
  text-align: right;
}
.form-label-top {
  white-space: normal;
  display: block;
  float: none;
  text-align: left;
}
.form-all {
  font-size: 10px;
}
.form-label {
  font-weight: normal;
  font-size: 0.95em;
}
.supernova {
  background-color: #ffffff;
  background-color: #f5f5f5;
}
.supernova body {
  background-color: transparent;
}
/*
@width30: (unit(@formWidth, px) + 60px);
@width60: (unit(@formWidth, px)+ 120px);
@width90: (unit(@formWidth, px)+ 180px);
*/
/* | */
@media screen and (min-width: 480px) {
  .supernova .form-all {
    border: 1px solid #dcdcdc;
    -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
    box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
  }
}
/* | */
/* | */
@media screen and (max-width: 480px) {
  .jotform-form {
    padding: 10px 0;
  }
}
/* | */
/* | */
@media screen and (min-width: 480px) and (max-width: 768px) {
  .jotform-form {
    padding: 30px 0;
  }
}
/* | */
/* | */
@media screen and (min-width: 480px) and (max-width: 799px) {
  .jotform-form {
    padding: 30px 0;
  }
}
/* | */
/* | */
@media screen and (min-width: 768px) {
  .jotform-form {
    padding: 60px 0;
  }
}
/* | */
/* | */
@media screen and (max-width: 799px) {
  .jotform-form {
    padding: 0;
  }
}
/* | */
.supernova .form-all,
.form-all {
  background-color: #ffffff;
  border: 1px solid transparent;
}
.form-header-group {
  border-color: #e6e6e6;
}
.form-matrix-table tr {
  border-color: #e6e6e6;
}
.form-matrix-table tr:nth-child(2n) {
  background-color: #f2f2f2;
}
.form-all {
  color: #555555;
}
.form-header-group .form-header {
  color: #555555;
}
.form-header-group .form-subHeader {
  color: #6f6f6f;
}
.form-sub-label {
  color: #6f6f6f;
}
.form-label-top,
.form-label-left,
.form-label-right,
.form-html {
  color: #6f6f6f;
}
.form-checkbox-item label,
.form-radio-item label {
  color: #555555;
}
.form-line.form-line-active {
  -webkit-transition-property: all;
  -moz-transition-property: all;
  -ms-transition-property: all;
  -o-transition-property: all;
  transition-property: all;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: #ffffe0;
}
/* ömer */
.form-radio-item,
.form-checkbox-item {
  padding-bottom: 0px !important;
}
.form-radio-item:last-child,
.form-checkbox-item:last-child {
  padding-bottom: 0;
}
/* ömer */
[data-type="control_radio"] .form-input,
[data-type="control_checkbox"] .form-input,
[data-type="control_radio"] .form-input-wide,
[data-type="control_checkbox"] .form-input-wide {
  width: 100%;
  max-width: 800px;
}
.form-radio-item,
.form-checkbox-item {
  width: 100%;
  max-width: 800px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.form-textbox.form-radio-other-input,
.form-textbox.form-checkbox-other-input {
  width: 80%;
  margin-left: 3%;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.form-multiple-column {
  width: 100%;
}
.form-multiple-column .form-radio-item,
.form-multiple-column .form-checkbox-item {
  width: 10%;
}
.form-multiple-column[data-columncount="1"] .form-radio-item,
.form-multiple-column[data-columncount="1"] .form-checkbox-item {
  width: 100%;
}
.form-multiple-column[data-columncount="2"] .form-radio-item,
.form-multiple-column[data-columncount="2"] .form-checkbox-item {
  width: 50%;
}
.form-multiple-column[data-columncount="3"] .form-radio-item,
.form-multiple-column[data-columncount="3"] .form-checkbox-item {
  width: 33.33333333%;
}
.form-multiple-column[data-columncount="4"] .form-radio-item,
.form-multiple-column[data-columncount="4"] .form-checkbox-item {
  width: 25%;
}
.form-multiple-column[data-columncount="5"] .form-radio-item,
.form-multiple-column[data-columncount="5"] .form-checkbox-item {
  width: 20%;
}
.form-multiple-column[data-columncount="6"] .form-radio-item,
.form-multiple-column[data-columncount="6"] .form-checkbox-item {
  width: 16.66666667%;
}
.form-multiple-column[data-columncount="7"] .form-radio-item,
.form-multiple-column[data-columncount="7"] .form-checkbox-item {
  width: 14.28571429%;
}
.form-multiple-column[data-columncount="8"] .form-radio-item,
.form-multiple-column[data-columncount="8"] .form-checkbox-item {
  width: 12.5%;
}
.form-multiple-column[data-columncount="9"] .form-radio-item,
.form-multiple-column[data-columncount="9"] .form-checkbox-item {
  width: 11.11111111%;
}
.form-single-column .form-checkbox-item,
.form-single-column .form-radio-item {
  width: 100%;
}
.supernova {
  height: 100%;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-repeat: repeat;
}
.supernova {
  background-image: none;
}
#stage {
  background-image: none;
}
/* | */
.form-all {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-repeat: repeat;
}
.form-header-group {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
}
.form-line {
  margin-top: 0px;
  margin-bottom: 0px;
}
.form-line {
  padding: 0px 12px;
}
.form-all .form-textbox,
.form-all .form-radio-other-input,
.form-all .form-checkbox-other-input,
.form-all .form-captcha input,
.form-all .form-spinner input,
.form-all .form-pagebreak-back,
.form-all .form-pagebreak-next,
.form-all .qq-upload-button,
.form-all .form-error-message {
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
}
.form-all .form-sub-label {
  margin-left: 3px;
}
.form-all .form-textarea {
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
}
.form-all {
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
}
.form-section:first-child {
  -webkit-border-radius: 0px 0px 0 0;
  -moz-border-radius: 0px 0px 0 0;
  border-radius: 0px 0px 0 0;
}
.form-section:last-child {
  -webkit-border-radius: 0 0 0px 0px;
  -moz-border-radius: 0 0 0px 0px;
  border-radius: 0 0 0px 0px;
}
.form-all .qq-upload-button,
.form-all .form-submit-button,
.form-all .form-submit-reset,
.form-all .form-submit-print {
  font-size: 1em;
  padding: 9px 15px;
  font-family: "Verdana", sans-serif;
  font-size: 10px;
  font-weight: normal;
}
.form-all .form-pagebreak-back,
.form-all .form-pagebreak-next {
  font-size: 1em;
  padding: 9px 15px;
  font-family: "Verdana", sans-serif;
  font-size: 10px;
  font-weight: normal;
}
/*
& when ( @buttonFontType = google ) {
  @import (css) "@{buttonFontLink}";
}
*/
h2.form-header {
  line-height: 1.618em;
  font-size: 1.714em;
}
h2 ~ .form-subHeader {
  line-height: 1.5em;
  font-size: 1.071em;
}
.form-header-group {
  text-align: left;
}
.form-line {
  zoom: 1;
}
.form-line:before,
.form-line:after {
  display: table;
  content: '';
  line-height: 0;
}
.form-line:after {
  clear: both;
}
.form-sub-label-container {
  margin-right: 0;
  float: left;
  white-space: nowrap;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.form-sub-label-container .date-separate {
  visibility: hidden;
}
.form-captcha input,
.form-spinner input {
  width: 800px;
}
.form-textbox,
.form-textarea {
  width: 100%;
  max-width: 800px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.form-input,
.form-address-table,
.form-matrix-table {
  width: 100%;
  max-width: 800px;
}
.form-radio-item,
.form-checkbox-item {
  width: 100%;
  max-width: 800px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.form-textbox.form-radio-other-input,
.form-textbox.form-checkbox-other-input {
  width: 80%;
  margin-left: 3%;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.form-multiple-column {
  width: 100%;
}
.form-multiple-column .form-radio-item,
.form-multiple-column .form-checkbox-item {
  width: 10%;
}
.form-multiple-column[data-columncount="1"] .form-radio-item,
.form-multiple-column[data-columncount="1"] .form-checkbox-item {
  width: 100%;
}
.form-multiple-column[data-columncount="2"] .form-radio-item,
.form-multiple-column[data-columncount="2"] .form-checkbox-item {
  width: 50%;
}
.form-multiple-column[data-columncount="3"] .form-radio-item,
.form-multiple-column[data-columncount="3"] .form-checkbox-item {
  width: 33.33333333%;
}
.form-multiple-column[data-columncount="4"] .form-radio-item,
.form-multiple-column[data-columncount="4"] .form-checkbox-item {
  width: 25%;
}
.form-multiple-column[data-columncount="5"] .form-radio-item,
.form-multiple-column[data-columncount="5"] .form-checkbox-item {
  width: 20%;
}
.form-multiple-column[data-columncount="6"] .form-radio-item,
.form-multiple-column[data-columncount="6"] .form-checkbox-item {
  width: 16.66666667%;
}
.form-multiple-column[data-columncount="7"] .form-radio-item,
.form-multiple-column[data-columncount="7"] .form-checkbox-item {
  width: 14.28571429%;
}
.form-multiple-column[data-columncount="8"] .form-radio-item,
.form-multiple-column[data-columncount="8"] .form-checkbox-item {
  width: 12.5%;
}
.form-multiple-column[data-columncount="9"] .form-radio-item,
.form-multiple-column[data-columncount="9"] .form-checkbox-item {
  width: 11.11111111%;
}
[data-type="control_dropdown"] .form-dropdown {
  width: 100% !important;
  max-width: 800px;
}
[data-type="control_fullname"] .form-sub-label-container {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  width: 48%;
}
[data-type="control_fullname"] .form-sub-label-container:first-child {
  margin-right: 4%;
}
[data-type="control_phone"] .form-sub-label-container {
  width: 65%;
}
[data-type="control_phone"] .form-sub-label-container:first-child {
  width: 32.5%;
  margin-right: 2.5%;
}
[data-type="control_birthdate"] .form-sub-label-container {
  width: 22%;
  margin-right: 3%;
}
[data-type="control_birthdate"] .form-sub-label-container:first-child {
  width: 50%;
}
[data-type="control_birthdate"] .form-sub-label-container:last-child {
  margin-right: 0;
}
[data-type="control_birthdate"] .form-sub-label-container .form-dropdown {
  width: 100%;
}
[data-type="control_time"] .form-sub-label-container {
  width: 37%;
  margin-right: 3%;
}
[data-type="control_time"] .form-sub-label-container:last-child {
  width: 20%;
  margin-right: 0;
}
[data-type="control_time"] .form-sub-label-container .form-dropdown {
  width: 100%;
}
[data-type="control_datetime"] .form-sub-label-container {
  width: 28%;
  margin-right: 4%;
}
[data-type="control_datetime"] .form-sub-label-container:last-child {
  width: 4%;
  margin-right: 0;
}
[data-type="control_datetime"].allowTime .form-sub-label-container {
  width: 12%;
  margin-right: 3%;
}
[data-type="control_datetime"].allowTime .form-sub-label-container:last-child {
  width: 4%;
  margin-right: 0;
}
[data-type="control_datetime"].allowTime .allowTime-container {
  float: right;
  width: 51%;
}
[data-type="control_datetime"].allowTime .allowTime-container .form-sub-label-container {
  width: 27%;
  margin-right: 4%;
}
[data-type="control_datetime"].allowTime .allowTime-container .form-sub-label-container:first-child {
  width: 4%;
  margin-left: 3%;
}
[data-type="control_datetime"].allowTime .allowTime-container .form-sub-label-container:last-child {
  width: 27%;
  margin-right: 0;
}
[data-type="control_datetime"].allowTime .form-dropdown {
  width: 100%;
}
[data-type="control_payment"] .form-sub-label-container {
  width: auto;
}
[data-type="control_payment"] .form-sub-label-container .form-dropdown {
  width: 100%;
}
.form-address-table td .form-dropdown {
  width: 100%;
}
.form-address-table td .form-sub-label-container {
  width: 96%;
}
.form-address-table td:last-child .form-sub-label-container {
  margin-left: 4%;
}
.form-address-table td[colspan="2"] .form-sub-label-container {
  width: 100%;
  margin: 0;
}
.form-line,
.form-input,
.form-input-wide,
.form-dropdown,
.form-sub-label-container,
.form-address-table,
.form-matrix-table {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  width: 100%;
  max-width: none;
}
.form-textbox,
.form-textarea,
.form-radio-item,
.form-checkbox-item,
.form-captcha input,
.form-spinner input,
.form-error-message {
  width: 100%;
  max-width: none;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
/*.form-dropdown,
.form-radio-item,
.form-checkbox-item,
.form-radio-other-input,
.form-checkbox-other-input,*/
.form-captcha input,
.form-spinner input,
.form-error-message {
  padding: 4px 3px 2px 3px;
}
.form-header-group {
  font-family: "Verdana", sans-serif;
}
.form-section {
  padding: 0px 0px 0px 0px;
}
.form-header-group {
  margin: 12px 36px 12px 36px;
}
.form-header-group {
  padding: 24px 0px 24px 0px;
}
.form-textbox,
.form-textarea {
  border-width: 1px;
  padding: 11px 0px 9px 0px;
}
.form-textbox,
.form-textarea,
.form-radio-other-input,
.form-checkbox-other-input,
.form-captcha input,
.form-spinner input {
  background-color: #ffffff;
}
.form-textbox {
  height: 20px;
}
.form-textarea {
  height: 80px;
}
.form-textbox,
.form-textarea {
  width: 100%;
  max-width: 800px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
[data-type="control_textbox"] .form-input,
[data-type="control_textarea"] .form-input,
[data-type="control_fullname"] .form-input,
[data-type="control_phone"] .form-input,
[data-type="control_datetime"] .form-input,
[data-type="control_address"] .form-input,
[data-type="control_email"] .form-input,
[data-type="control_passwordbox"] .form-input,
[data-type="control_autocomp"] .form-input,
[data-type="control_textbox"] .form-input-wide,
[data-type="control_textarea"] .form-input-wide,
[data-type="control_fullname"] .form-input-wide,
[data-type="control_phone"] .form-input-wide,
[data-type="control_datetime"] .form-input-wide,
[data-type="control_address"] .form-input-wide,
[data-type="control_email"] .form-input-wide,
[data-type="control_passwordbox"] .form-input-wide,
[data-type="control_autocomp"] .form-input-wide {
  width: 100%;
  max-width: 800px;
}
[data-type="control_fullname"] .form-sub-label-container {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  width: 48%;
}
[data-type="control_fullname"] .form-sub-label-container:first-child {
  margin-right: 4%;
}
[data-type="control_phone"] .form-sub-label-container {
  width: 65%;
}
[data-type="control_phone"] .form-sub-label-container:first-child {
  width: 32.5%;
  margin-right: 2.5%;
}
[data-type="control_phone"] .form-sub-label-container .date-separate {
  visibility: hidden;
}
[data-type="control_datetime"] .form-sub-label-container {
  width: 28%;
  margin-right: 4%;
}
[data-type="control_datetime"] .form-sub-label-container:last-child {
  width: 4%;
  margin-right: 0;
}
[data-type="control_datetime"] .form-sub-label-container .date-separate {
  visibility: hidden;
}
[data-type="control_datetime"].allowTime .form-sub-label-container {
  width: 12%;
  margin-right: 3%;
}
[data-type="control_datetime"].allowTime .form-sub-label-container:last-child {
  width: 4%;
  margin-right: 0;
}
[data-type="control_datetime"].allowTime .allowTime-container {
  float: right;
  width: 51%;
}
[data-type="control_datetime"].allowTime .allowTime-container .form-sub-label-container {
  width: 27%;
  margin-right: 4%;
}
[data-type="control_datetime"].allowTime .allowTime-container .form-sub-label-container:first-child {
  width: 4%;
  margin-left: 3%;
}
[data-type="control_datetime"].allowTime .allowTime-container .form-sub-label-container:last-child {
  width: 27%;
  margin-right: 0;
}
[data-type="control_datetime"].allowTime .form-dropdown {
  width: 100%;
}
.form-matrix-table {
  width: 100%;
  max-width: 800px;
}
.form-address-table {
  width: 100%;
  max-width: 800px;
}
.form-address-table td .form-dropdown {
  width: 100%;
}
.form-address-table td .form-sub-label-container {
  width: 96%;
}
.form-address-table td:last-child .form-sub-label-container {
  margin-left: 4%;
}
.form-address-table td[colspan="2"] .form-sub-label-container {
  width: 100%;
  margin: 0;
}
[data-type="control_dropdown"] .form-input,
[data-type="control_birthdate"] .form-input,
[data-type="control_time"] .form-input,
[data-type="control_dropdown"] .form-input-wide,
[data-type="control_birthdate"] .form-input-wide,
[data-type="control_time"] .form-input-wide {
  width: 100%;
  max-width: 800px;
}
[data-type="control_dropdown"] .form-dropdown {
  width: 100% !important;
  max-width: 800px;
}
[data-type="control_birthdate"] .form-sub-label-container {
  width: 22%;
  margin-right: 3%;
}
[data-type="control_birthdate"] .form-sub-label-container:first-child {
  width: 50%;
}
[data-type="control_birthdate"] .form-sub-label-container:last-child {
  margin-right: 0;
}
[data-type="control_birthdate"] .form-sub-label-container .form-dropdown {
  width: 100%;
}
[data-type="control_time"] .form-sub-label-container {
  width: 37%;
  margin-right: 3%;
}
[data-type="control_time"] .form-sub-label-container:last-child {
  width: 20%;
  margin-right: 0;
}
[data-type="control_time"] .form-sub-label-container .form-dropdown {
  width: 100%;
}
.form-label {
  margin-right: 4px;
  margin-bottom: 0;
}
.form-label {
  font-family: "Verdana", sans-serif;
}
li[data-type="control_image"] div {
  text-align: left;
}
li[data-type="control_image"] img {
  border: none;
  border-width: 0px !important;
  border-style: solid !important;
  border-color: false !important;
}
.form-line-column {
  width: auto;
}
.form-line-error {
  overflow: hidden;
  -webkit-transition-property: none;
  -moz-transition-property: none;
  -ms-transition-property: none;
  -o-transition-property: none;
  transition-property: none;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: #fff4f4;
}
.form-line-error .form-error-message {
  background-color: #ff3200;
  clear: both;
  float: none;
}
.form-line-error .form-error-message .form-error-arrow {
  border-bottom-color: #ff3200;
}
.form-line-error input:not(#coupon-input),
.form-line-error textarea,
.form-line-error .form-validation-error {
  border: 1px solid #ff3200;
  -webkit-box-shadow: 0 0 3px #ff3200;
  -moz-box-shadow: 0 0 3px #ff3200;
  box-shadow: 0 0 3px #ff3200;
}
.form-collapse-table {
  padding-left: 20px;
  padding-right: 20px;
  padding-top: 10px;
  padding-bottom: 10px;
  height: auto;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  max-height: 60px;
  overflow: hidden;
  margin-top: 10px;
  margin-bottom: 10px;
  margin-left: 30px;
  margin-right: 30px;
}
.form-collapse-table .form-collapse-mid {
  margin-right: 0;
  margin-left: 0;
}
.form-collapse-table .form-collapse-mid {
  margin-top: 0;
  margin-bottom: 0;
}
.form-collapse-table .form-collapse-right {
  height: 24px;
  top: 50%;
}
.form-collapse-table .form-collapse-right-show {
  margin-top: -15px;
}
.form-collapse-table .form-collapse-right-hide {
  margin-top: -12px;
}
.ie-8 .form-all {
  margin-top: auto;
  margin-top: initial;
}
.ie-8 .form-all:before {
  display: none;
}
/* | */
@media screen and (max-width: 480px), screen and (max-device-width: 768px) and (orientation: portrait), screen and (max-device-width: 415px) and (orientation: landscape) {
  .jotform-form {
    padding: 0;
  }
  .form-all {
    border: 0;
    width: 100% !important;
    max-width: initial;
  }
  .form-sub-label-container {
    width: 100%;
    margin: 0;
  }
  .form-input {
    width: 100%;
  }
  .form-label {
    width: 100%!important;
  }
  .form-line {
    padding: 2% 5%;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }
  input[type=text],
  input[type=email],
  input[type=tel],
  textarea {
    width: 100%;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    max-width: initial !important;
  }
  .form-input,
  .form-input-wide,
  .form-textarea,
  .form-textbox,
  .form-dropdown {
    max-width: initial !important;
  }
  div.form-header-group {
    padding: 24px 0px !important;
    margin: 0 12px 2% !important;
    margin-left: 5% !important;
    margin-right: 5% !important;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }
  [data-type="control_button"] {
    margin-bottom: 0 !important;
  }
  .form-buttons-wrapper {
    margin: 0!important;
  }
  .form-buttons-wrapper button {
    width: 100%;
  }
  table {
    width: 100%!important;
    max-width: initial !important;
  }
  table td + td {
    padding-left: 3%;
  }
  .form-checkbox-item input,
  .form-radio-item input {
    width: auto;
  }
  .form-collapse-table {
    margin: 0 5%;
  }
}
/* | */

/*PREFERENCES STYLE*/
    .form-all {
      font-family: Verdana, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: Verdana, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: Verdana, sans-serif;
    }
    .form-header-group {
      font-family: Verdana, sans-serif;
    }
    .form-label {
      font-family: Verdana, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: block;
    float: none;
    text-align: left;
    width: 100%;
  
    }
  
    .form-line {
      margin-top: 12px;
      margin-bottom: 12px;
    }
  
    .form-all {
      width: 800px;
    }
  
    .form-label-left,
    .form-label-right {
      width: 50px
    }
  
    .form-all {
      font-size: 14px
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 14px
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 14px
    }
  
    .supernova .form-all, .form-all {
      background-color: #fff;
      border: 1px solid transparent;
    }
  
    .form-all {
      color: rgba(0,0,0,0.57);
    }
    .form-header-group .form-header {
      color: rgba(0,0,0,0.57);
    }
    .form-header-group .form-subHeader {
      color: rgba(0,0,0,0.57);
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: rgba(0,0,0,0.57);
    }
    .form-sub-label {
      color: 1a1a1a;
    }
  
    .supernova {
      background-color: undefined;
    }
    .supernova body {
      background: transparent;
    }
  
    .form-textbox,
    .form-textarea,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: undefined;
    }
  
    .supernova {
      background-image: none;
    }
    #stage {
      background-image: none;
    }
  
    .form-all {
      background-image: none;
    }
  
  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }
  
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
    /* Injected CSS Code */
</style>

<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/buttons/form-submit-button-simple_black.css?3.3.1461"/>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.1461" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.setConditions([{"action":[{"id":"action_0_1459440046542","visibility":"Hide","isError":false,"field":"37"}],"id":"1459440026390","index":"0","link":"Any","priority":"0","terms":[{"id":"term_0_1459440046542","field":"39","operator":"equals","value":"E-mail","isError":false}],"type":"field"}]);
   JotForm.init(function(){

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("171", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":false,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("171", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":false,"past":true,"custom":false,"ranges":false,"start":"","end":""});

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("172", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":false,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("172", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":false,"past":true,"custom":false,"ranges":false,"start":"","end":""});

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("176", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":false,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("176", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":false,"past":true,"custom":false,"ranges":false,"start":"","end":""});

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("183", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("183", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("184", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("184", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("185", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("185", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("189", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("189", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("188", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("188", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("191", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("191", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("206", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("206", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("210", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("210", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("216", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("216", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("217", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("217", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("211", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("211", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("218", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("218", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("226", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("226", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});
      JotForm.alterTexts({"alphabetic":"Este campo pode conter apenas letras","alphanumeric":"Este campo só pode conter letras e números.","ccInvalidCVC":"Single Product w/ Single Choice Orders ","ccInvalidExpireDate":"Expire date is invalid.","ccInvalidNumber":"Credit Card Number is invalid.","ccMissingDetails":"Please fill up the Credit Card details.","ccMissingDonation":"Please enter numeric values for donation amount.","ccMissingProduct":"Please select at least one product.","characterLimitError":"Too many Characters.  The limit is","characterMinLimitError":"Too few characters. The minimum is","confirmClearForm":"Você tem certeza que quer limpar este formulário?","confirmEmail":"E-mail não confere","currency":"Este campo apenas admite valores monetários.","cyrillic":"Este campo aceita apenas caracteres cirilicos.","dateInvalid":"This date is not valid. The date format is {format}","dateLimited":"This date is unavailable.","disallowDecimals":"Please enter a whole number.","email":"Digite um endereço de e-mail válido.","fillMask":"Valor do campo deve preencher máscara.","freeEmailError":"Free email accounts are not allowed","generalError":"Existem alguns erros no formulário. Corrija-os antes de continuar. ","generalPageError":"Há erros nesta página. Por favor, corrija-os antes de continuar.","gradingScoreError":"Pontuação total deve ser menor ou igual a ","incompleteFields":"Há campos obrigatórios incompletos. Por favor, preencha-os.","inputCarretErrorA":"A entrada não deve ser menor do que o valor mínimo:","inputCarretErrorB":"Valor não deve ser maior do que o máximo:","lessThan":"A sua pontuação deve ser inferior ou igual a","maxDigitsError":"O numero máximo de caracteres permitidos são","maxSelectionsError":"O número máximo de seleções permitido é","minSelectionsError":"O número mínimo exigido de seleções é","multipleFileUploads_emptyError":"{file} está vazio, por favor selecione os arquivos de novo.","multipleFileUploads_fileLimitError":"Somente são permitidos {fileLimit} envios de arquivos","multipleFileUploads_minSizeError":"{file} é muito pequeno, o tamanho mínimo do arquivo é {minSizeLimit}.","multipleFileUploads_onLeave":"Os arquivos agora estão em upload, se você sair agora o upload será cancelado.","multipleFileUploads_sizeError":"{file} é muito grande, o tamanho máximo é {sizeLimit}.","multipleFileUploads_typeError":"O arquivo {file} é inválido, pois somente as extensões {extensions} são permitidas.","numeric":"Este campo pode conter apenas números","pastDatesDisallowed":"A data não pode ser passada.","pleaseWait":"Por favor aguarde...","required":"Este campo é obrigatório.","requireEveryCell":"Toda célula é requisitada.","requireEveryRow":"Todos os campos são requeridos.","requireOne":"Pelo menos um campo é requisitado","submissionLimit":"Foi mal, mas apenas um envio de dados é permitido. Múltiplas submissões estão desativadas nesse formulário.","uploadExtensions":"Só pode fazer upload dos seguintes ficheiros:","uploadFilesize":"O tamanho do arquivo não pode ser maior que:","uploadFilesizemin":"O ficheiro não pode ser menor que:","url":"This field can only contain a valid URL","wordLimitError":"Too many words. The limit is","wordMinLimitError":"Too few words.  The minimum is"});
  JotForm.clearFieldOnHide="disable";
      FormTranslation.init({"detectUserLanguage":"1","firstPageOnly":"0","options":"Portuguese (Brazil)","originalLanguage":"pt-BR","primaryLanguage":"pt-BR","saveUserLanguage":"1","showStatus":"flag-with-nation","theme":"light-theme","version":"2"});
    /*INIT-END*/
});

   JotForm.prepareCalculationsOnTheFly([null,null,null,null,null,{"name":"input5","qid":"5","text":"","type":"control_textbox"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"enviar","qid":"33","text":"Registrar Paciente","type":"control_button"},null,null,null,{"name":"input37","qid":"37","text":"","type":"control_address"},null,null,null,null,{"name":"input42","qid":"42","text":"","type":"control_dropdown"},null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"cliqueDuas56","qid":"56","text":"<hr />\n<p><strong><span style=\"color: #000000; font-size: 12pt;\">Manifesta&ccedil;&atilde;o Cl&iacute;nica da Gestante</span></strong></p>","type":"control_text"},{"name":"cliqueDuas57","qid":"57","text":"<hr />\n<p><strong><span style=\"color: #000000; font-size: 12pt;\">Tratamento e Informa&ccedil;&otilde;es Complementares dos Parceiros</span></strong></p>","type":"control_text"},null,{"name":"cliqueDuas59","qid":"59","text":"<hr />\n<p><span style=\"font-size: 12pt;\"><strong><span style=\"color: #000000;\">Acolhimento</span></strong></span></p>","type":"control_text"},null,null,null,null,null,null,null,null,{"name":"cliqueDuas68","qid":"68","text":"<hr />\n<p><span style=\"font-size: 12pt;\"><strong><span style=\"color: #000000;\">Dados&nbsp;Laboratoriais da Gestante</span></strong></span></p>","type":"control_text"},null,null,null,null,null,null,null,null,null,null,{"name":"input79","qid":"79","text":"","type":"control_dropdown"},null,null,null,null,null,null,null,{"name":"fichaDe","qid":"87","text":"FICHA DE ACOMPANHAMENTO","type":"control_head"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"cliqueDuas106","qid":"106","text":"<hr />\n<p><strong><span style=\"color: #000000; font-size: 12pt;\">Classifica&ccedil;&atilde;o Cl&iacute;nica do Tratamento &nbsp;e Informa&ccedil;&otilde;es Complementares</span></strong></p>","type":"control_text"},{"name":"cliqueDuas107","qid":"107","text":"<hr />\n<p><strong><span style=\"color: #000000; font-size: 12pt;\">Dados Individuais da Gestante</span></strong></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>","type":"control_text"},null,null,null,null,null,null,null,null,{"name":"telefone_celular_reclamante","qid":"116","text":"","type":"control_textbox"},{"name":"input117","qid":"117","text":"","type":"control_textbox"},{"name":"input118","qid":"118","text":"","type":"control_textbox"},null,null,null,null,null,{"name":"telefone_residencial_reclamante","qid":"124","text":"","type":"control_textbox"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"input156","qid":"156","text":"","type":"control_radio"},null,null,null,null,null,null,null,{"name":"parceiroTratado","qid":"164","text":"Parceiro Tratado concomitantemente a gestante","type":"control_dropdown"},null,null,{"name":"solicitadoTeste","qid":"167","text":"Solicitado Teste nao Treponemico (VDRL)","type":"control_radio"},null,{"name":"hrpspan","qid":"169","text":"<hr />\n<p><span style=\"font-size: 12pt; color: #000000;\"><strong>Dados Gerais do Atendimento</strong></span></p>","type":"control_text"},null,{"name":"datainipre","qid":"171","text":"Inicio do Pre Natal","type":"control_datetime"},{"name":"data_diag","qid":"172","text":"Data do Diagnostico                       ","type":"control_datetime"},null,{"name":"num_area","qid":"174","text":"","type":"control_fullname"},{"name":"input175","qid":"175","text":"","type":"control_textbox"},{"name":"dataDe176","qid":"176","text":"Data de Nascimento","type":"control_datetime"},{"name":"input177","qid":"177","text":"","type":"control_dropdown"},null,{"name":"input179","qid":"179","text":"","type":"control_dropdown"},{"name":"input180","qid":"180","text":"","type":"control_dropdown"},{"name":"input181","qid":"181","text":"","type":"control_dropdown"},{"name":"input182","qid":"182","text":"","type":"control_textbox"},{"name":"input183","qid":"183","text":"Data da DUM","type":"control_datetime"},{"name":"input184","qid":"184","text":"Data da DPP","type":"control_datetime"},{"name":"dataDe","qid":"185","text":"Data de Realizacao de teste Rapido para Sifilis","type":"control_datetime"},{"name":"input186","qid":"186","text":"","type":"control_radio"},{"name":"prescritoTratamento","qid":"187","text":"Prescrito tratamento com a 1° dose de Penicilina se TR Positivo","type":"control_radio"},{"name":"input188","qid":"188","text":"Data","type":"control_datetime"},{"name":"input189","qid":"189","text":"Data","type":"control_datetime"},{"name":"realizadoTeste","qid":"190","text":"Realizado teste treponemico (FT A - abs TPH A ou MHA TP Elisa)","type":"control_radio"},{"name":"input191","qid":"191","text":"Data","type":"control_datetime"},{"name":"realizadoTeste192","qid":"192","text":"Realizado teste treponemico positivo","type":"control_radio"},null,{"name":"cliquePara","qid":"194","text":"<p>Fase Prim&aacute;ria&nbsp;</p>\n<p>&nbsp;</p>","type":"control_text"},{"name":"input195","qid":"195","text":"","type":"control_dropdown"},{"name":"input196","qid":"196","text":"","type":"control_dropdown"},{"name":"pfasePrimaacuteriap","qid":"197","text":"<p>Fase Secund&aacute;ria</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>","type":"control_text"},{"name":"input198","qid":"198","text":"","type":"control_dropdown"},{"name":"input199","qid":"199","text":"","type":"control_dropdown"},{"name":"pfaseSecundaacuteriap","qid":"200","text":"<p>Fase&nbsp;Terci&aacute;ria</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>","type":"control_text"},{"name":"input201","qid":"201","text":"","type":"control_dropdown"},{"name":"pfaseterciaacuteriappnbspp","qid":"202","text":"<p>Fase&nbsp;Latente</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>","type":"control_text"},{"name":"input203","qid":"203","text":"","type":"control_dropdown"},{"name":"pfaselatenteppnbspp","qid":"204","text":"<p><strong>S&iacute;filis Prim&aacute;ria&nbsp;</strong></p>\n<p><strong>&nbsp;</strong></p>","type":"control_text"},{"name":"pstrongsiacutefilisPrimaacuteriastrongp","qid":"205","text":"<p><span style=\"color: #ff0000;\">Penicilina G Benzatina 2.400.000 UI, IntraMuscular, em dose &uacute;nica (1.200 UI em cada gluteo)</span></p>","type":"control_text"},{"name":"dataDa","qid":"206","text":"Data da Dose unica","type":"control_datetime"},{"name":"divisor","qid":"207","type":"control_divider"},{"name":"pstrongsiacutefilisPrimaacuteriastrongp208","qid":"208","text":"<p><strong>S&iacute;filis Recente Secund&aacute;ria e Latente</strong></p>\n<p><strong>&nbsp;</strong></p>","type":"control_text"},{"name":"input209","qid":"209","text":"","type":"control_radio"},{"name":"dataDa210","qid":"210","text":"Data da 1° Dose","type":"control_datetime"},{"name":"dataDa211","qid":"211","text":"Data da 2° Dose","type":"control_datetime"},{"name":"divisor212","qid":"212","type":"control_divider"},{"name":"pspanStylecolor","qid":"213","text":"<p><span style=\"color: #ff0000;\">Penicilina G Benzatina 2.400.000 UI, IntraMuscular, Repetida ap&oacute;s 1 semana sen&atilde;o a dose total de 4.800.000 UI</span></p>","type":"control_text"},{"name":"pstrongsiacutefilisRecente","qid":"214","text":"<p><strong>S&iacute;filis Tardia (Latente e Terci&aacute;ria)</strong></p>","type":"control_text"},{"name":"input215","qid":"215","text":"","type":"control_radio"},{"name":"dataDa216","qid":"216","text":"Data da 2° Dose","type":"control_datetime"},{"name":"dataDa217","qid":"217","text":"Data da 1° Dose","type":"control_datetime"},{"name":"dataDa218","qid":"218","text":"Data da 3° Dose","type":"control_datetime"},{"name":"pspanStylecolor219","qid":"219","text":"<p><span style=\"color: #ff0000;\">Penicilina G Benzatina 2.400.000 UI, IntraMuscular, semanal (Por 3 semanas)</span></p>","type":"control_text"},{"name":"tratamentoIncompleto","qid":"220","text":"Tratamento Incompleto","type":"control_radio"},{"name":"encaminhadaPara","qid":"221","text":"Encaminhada para dessensibilizacao em unidade de Referencia","type":"control_radio"},{"name":"encaminhadaFicha","qid":"222","text":"Encaminhada ficha de notificacao compulsoria","type":"control_radio"},{"name":"reiniciouEsquema","qid":"223","text":"Reiniciou esquema terapeutico","type":"control_radio"},{"name":"gestanteReinfectada","qid":"224","text":"Gestante Reinfectada durante o Pre-Natal","type":"control_radio"},{"name":"divisor225","qid":"225","type":"control_divider"},{"name":"data","qid":"226","text":"Data","type":"control_datetime"},{"name":"motivoPara","qid":"227","text":"Motivo para nao realizacao de esquema terapeutico","type":"control_dropdown"},{"name":"esquemaDe","qid":"228","text":"Esquema de tratamento prescrito ao Parceiro","type":"control_dropdown"},{"name":"prescritoOutro","qid":"229","text":"Prescrito outro esquema Terapeutico","type":"control_dropdown"},{"name":"outroMotivo","qid":"230","text":"Outro Motivo:","type":"control_textbox"},{"name":"desfecho","qid":"231","text":"Desfecho","type":"control_dropdown"},{"name":"nome_profissional","qid":"232","text":"","type":"control_textbox"},{"name":"input233","qid":"233","text":"","type":"control_textbox"},{"name":"muni_atendimento","qid":"234","text":"","type":"control_textbox"},{"name":"nome_unidade","qid":"235","text":"","type":"control_textbox"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,null,null,null,null,{"name":"input5","qid":"5","text":"","type":"control_textbox"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"enviar","qid":"33","text":"Registrar Paciente","type":"control_button"},null,null,null,{"name":"input37","qid":"37","text":"","type":"control_address"},null,null,null,null,{"name":"input42","qid":"42","text":"","type":"control_dropdown"},null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"cliqueDuas56","qid":"56","text":"<hr />\n<p><strong><span style=\"color: #000000; font-size: 12pt;\">Manifesta&ccedil;&atilde;o Cl&iacute;nica da Gestante</span></strong></p>","type":"control_text"},{"name":"cliqueDuas57","qid":"57","text":"<hr />\n<p><strong><span style=\"color: #000000; font-size: 12pt;\">Tratamento e Informa&ccedil;&otilde;es Complementares dos Parceiros</span></strong></p>","type":"control_text"},null,{"name":"cliqueDuas59","qid":"59","text":"<hr />\n<p><span style=\"font-size: 12pt;\"><strong><span style=\"color: #000000;\">Acolhimento</span></strong></span></p>","type":"control_text"},null,null,null,null,null,null,null,null,{"name":"cliqueDuas68","qid":"68","text":"<hr />\n<p><span style=\"font-size: 12pt;\"><strong><span style=\"color: #000000;\">Dados&nbsp;Laboratoriais da Gestante</span></strong></span></p>","type":"control_text"},null,null,null,null,null,null,null,null,null,null,{"name":"input79","qid":"79","text":"","type":"control_dropdown"},null,null,null,null,null,null,null,{"name":"fichaDe","qid":"87","text":"FICHA DE ACOMPANHAMENTO","type":"control_head"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"cliqueDuas106","qid":"106","text":"<hr />\n<p><strong><span style=\"color: #000000; font-size: 12pt;\">Classifica&ccedil;&atilde;o Cl&iacute;nica do Tratamento &nbsp;e Informa&ccedil;&otilde;es Complementares</span></strong></p>","type":"control_text"},{"name":"cliqueDuas107","qid":"107","text":"<hr />\n<p><strong><span style=\"color: #000000; font-size: 12pt;\">Dados Individuais da Gestante</span></strong></p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>","type":"control_text"},null,null,null,null,null,null,null,null,{"name":"telefone_celular_reclamante","qid":"116","text":"","type":"control_textbox"},{"name":"input117","qid":"117","text":"","type":"control_textbox"},{"name":"input118","qid":"118","text":"","type":"control_textbox"},null,null,null,null,null,{"name":"telefone_residencial_reclamante","qid":"124","text":"","type":"control_textbox"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"input156","qid":"156","text":"","type":"control_radio"},null,null,null,null,null,null,null,{"name":"parceiroTratado","qid":"164","text":"Parceiro Tratado concomitantemente a gestante","type":"control_dropdown"},null,null,{"name":"solicitadoTeste","qid":"167","text":"Solicitado Teste nao Treponemico (VDRL)","type":"control_radio"},null,{"name":"hrpspan","qid":"169","text":"<hr />\n<p><span style=\"font-size: 12pt; color: #000000;\"><strong>Dados Gerais do Atendimento</strong></span></p>","type":"control_text"},null,{"name":"datainipre","qid":"171","text":"Inicio do Pre Natal","type":"control_datetime"},{"name":"data_diag","qid":"172","text":"Data do Diagnostico                       ","type":"control_datetime"},null,{"name":"input174","qid":"174","text":"","type":"control_fullname"},{"name":"input175","qid":"175","text":"","type":"control_textbox"},{"name":"dataDe176","qid":"176","text":"Data de Nascimento","type":"control_datetime"},{"name":"input177","qid":"177","text":"","type":"control_dropdown"},null,{"name":"input179","qid":"179","text":"","type":"control_dropdown"},{"name":"input180","qid":"180","text":"","type":"control_dropdown"},{"name":"input181","qid":"181","text":"","type":"control_dropdown"},{"name":"input182","qid":"182","text":"","type":"control_textbox"},{"name":"input183","qid":"183","text":"Data da DUM","type":"control_datetime"},{"name":"input184","qid":"184","text":"Data da DPP","type":"control_datetime"},{"name":"dataDe","qid":"185","text":"Data de Realizacao de teste Rapido para Sifilis","type":"control_datetime"},{"name":"input186","qid":"186","text":"","type":"control_radio"},{"name":"prescritoTratamento","qid":"187","text":"Prescrito tratamento com a 1° dose de Penicilina se TR Positivo","type":"control_radio"},{"name":"input188","qid":"188","text":"Data","type":"control_datetime"},{"name":"input189","qid":"189","text":"Data","type":"control_datetime"},{"name":"realizadoTeste","qid":"190","text":"Realizado teste treponemico (FT A - abs TPH A ou MHA TP Elisa)","type":"control_radio"},{"name":"input191","qid":"191","text":"Data","type":"control_datetime"},{"name":"realizadoTeste192","qid":"192","text":"Realizado teste treponemico positivo","type":"control_radio"},null,{"name":"cliquePara","qid":"194","text":"<p>Fase Prim&aacute;ria&nbsp;</p>\n<p>&nbsp;</p>","type":"control_text"},{"name":"input195","qid":"195","text":"","type":"control_dropdown"},{"name":"input196","qid":"196","text":"","type":"control_dropdown"},{"name":"pfasePrimaacuteriap","qid":"197","text":"<p>Fase Secund&aacute;ria</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>","type":"control_text"},{"name":"input198","qid":"198","text":"","type":"control_dropdown"},{"name":"input199","qid":"199","text":"","type":"control_dropdown"},{"name":"pfaseSecundaacuteriap","qid":"200","text":"<p>Fase&nbsp;Terci&aacute;ria</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>","type":"control_text"},{"name":"input201","qid":"201","text":"","type":"control_dropdown"},{"name":"pfaseterciaacuteriappnbspp","qid":"202","text":"<p>Fase&nbsp;Latente</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>","type":"control_text"},{"name":"input203","qid":"203","text":"","type":"control_dropdown"},{"name":"pfaselatenteppnbspp","qid":"204","text":"<p><strong>S&iacute;filis Prim&aacute;ria&nbsp;</strong></p>\n<p><strong>&nbsp;</strong></p>","type":"control_text"},{"name":"pstrongsiacutefilisPrimaacuteriastrongp","qid":"205","text":"<p><span style=\"color: #ff0000;\">Penicilina G Benzatina 2.400.000 UI, IntraMuscular, em dose &uacute;nica (1.200 UI em cada gluteo)</span></p>","type":"control_text"},{"name":"dataDa","qid":"206","text":"Data da Dose unica","type":"control_datetime"},{"name":"divisor","qid":"207","type":"control_divider"},{"name":"pstrongsiacutefilisPrimaacuteriastrongp208","qid":"208","text":"<p><strong>S&iacute;filis Recente Secund&aacute;ria e Latente</strong></p>\n<p><strong>&nbsp;</strong></p>","type":"control_text"},{"name":"input209","qid":"209","text":"","type":"control_radio"},{"name":"dataDa210","qid":"210","text":"Data da 1° Dose","type":"control_datetime"},{"name":"dataDa211","qid":"211","text":"Data da 2° Dose","type":"control_datetime"},{"name":"divisor212","qid":"212","type":"control_divider"},{"name":"pspanStylecolor","qid":"213","text":"<p><span style=\"color: #ff0000;\">Penicilina G Benzatina 2.400.000 UI, IntraMuscular, Repetida ap&oacute;s 1 semana sen&atilde;o a dose total de 4.800.000 UI</span></p>","type":"control_text"},{"name":"pstrongsiacutefilisRecente","qid":"214","text":"<p><strong>S&iacute;filis Tardia (Latente e Terci&aacute;ria)</strong></p>","type":"control_text"},{"name":"input215","qid":"215","text":"","type":"control_radio"},{"name":"dataDa216","qid":"216","text":"Data da 2° Dose","type":"control_datetime"},{"name":"dataDa217","qid":"217","text":"Data da 1° Dose","type":"control_datetime"},{"name":"dataDa218","qid":"218","text":"Data da 3° Dose","type":"control_datetime"},{"name":"pspanStylecolor219","qid":"219","text":"<p><span style=\"color: #ff0000;\">Penicilina G Benzatina 2.400.000 UI, IntraMuscular, semanal (Por 3 semanas)</span></p>","type":"control_text"},{"name":"tratamentoIncompleto","qid":"220","text":"Tratamento Incompleto","type":"control_radio"},{"name":"encaminhadaPara","qid":"221","text":"Encaminhada para dessensibilizacao em unidade de Referencia","type":"control_radio"},{"name":"encaminhadaFicha","qid":"222","text":"Encaminhada ficha de notificacao compulsoria","type":"control_radio"},{"name":"reiniciouEsquema","qid":"223","text":"Reiniciou esquema terapeutico","type":"control_radio"},{"name":"gestanteReinfectada","qid":"224","text":"Gestante Reinfectada durante o Pre-Natal","type":"control_radio"},{"name":"divisor225","qid":"225","type":"control_divider"},{"name":"data","qid":"226","text":"Data","type":"control_datetime"},{"name":"motivoPara","qid":"227","text":"Motivo para nao realizacao de esquema terapeutico","type":"control_dropdown"},{"name":"esquemaDe","qid":"228","text":"Esquema de tratamento prescrito ao Parceiro","type":"control_dropdown"},{"name":"prescritoOutro","qid":"229","text":"Prescrito outro esquema Terapeutico","type":"control_dropdown"},{"name":"outroMotivo","qid":"230","text":"Outro Motivo:","type":"control_textbox"},{"name":"desfecho","qid":"231","text":"Desfecho","type":"control_dropdown"},{"name":"nome_profissional","qid":"232","text":"","type":"control_textbox"},{"name":"input233","qid":"233","text":"","type":"control_textbox"},{"name":"muni_atendimento","qid":"234","text":"","type":"control_textbox"},{"name":"nome_unidade","qid":"235","text":"","type":"control_textbox"}]);}, 20); 
</script>
</head>
<body>
<div class="navbar navbar-inverse">
  <div class="navbar-inner">
    <a class="brand" href="#">AEGS</a>
    <ul class="nav">
      <li class="active"><a href="#">Cadastrar Gestante</a></li>
      <li><a href="listar_gestante.php">Gestantes Cadastradas</a></li>
      <li><a href="index.php">Sair</a></li>
    </ul>
  </div>  
</div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

<form class="jotform-form"  method="post" name="Cadastrar" id="72202893033652" accept-charset="utf-8">
  <input type="hidden" name="formID" value="72202893033652" />
  <div class="form-all">
    <link type="text/css" rel="stylesheet" media="all" href="https://cdn.jotfor.ms/wizards/languageWizard/custom-dropdown/css/lang-dd.css?3.3.1461" />
    <div class="cont">
      <input type="text" id="input_language" name="input_language" style="display:none" />
      <div class="language-dd" id="langDd" style="display:none">
        <div class="dd-placeholder lang-emp">
          Language
        </div>
        <ul class="lang-list dn" id="langList">
          <li data-lang="pt-BR" class="pt-BR">
            Portuguese (Brazil)
          </li>
        </ul>
      </div>
    </div>
    <script type="text/javascript" src="https://cdn.jotfor.ms/js/formTranslation.v2.js?3.3.1461"></script>
    <ul class="form-section page-section">
      <li id="cid_87" class="form-input-wide" data-type="control_head">
        <div class="form-header-group ">
          <div class="header-text httac htvam">
            <h1 id="header_87" class="form-header" data-component="header">
              FICHA DE ACOMPANHAMENTO
            </h1>
            <div id="subHeader_87" class="form-subHeader">
              DE GESTANTE COM SÍFILIS
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_169">
        <div id="cid_169" class="form-input-wide">
          <div id="text_169" class="form-html" data-component="text">
            <hr />
            <p><span style="font-size: 12pt; color: #000000;"><strong>Dados Gerais do Atendimento</strong></span></p>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_dropdown" id="id_179">
        <label class="form-label form-label-top" id="label_179" for="input_179">  </label>
        <div id="cid_179" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <select class="form-dropdown" name="uf_atendimento" style="width:150px;" data-component="dropdown">
              <option value=""> Selecione </option>
              <option value="AC"> AC </option>
              <option value="AL"> AL </option>
              <option value="AM"> AM </option>
              <option value="AP"> AP </option>
              <option value="AP"> BA </option>
              <option value="CE"> CE </option>
              <option value="DF"> DF </option>
              <option value="ES"> ES </option>
              <option value="GO"> GO </option>
              <option value="MA"> MA </option>
              <option value="MG"> MG </option>
              <option value="MS"> MS </option>
              <option value="MT"> MT </option>
              <option value="PA"> PA </option>
              <option value="PB"> PB </option>
              <option value="PE"> PE </option>
              <option value="PI"> PI </option>
              <option value="PR"> PR </option>
              <option value="RJ"> RJ </option>
              <option value="RN"> RN </option>
              <option value="RO"> RO </option>
              <option value="RR"> RR </option>
              <option value="RS"> RS </option>
              <option value="SC"> SC </option>
              <option value="SE"> SE </option>
              <option value="SP"> SP </option>
              <option value="TO"> TO </option>
            </select>
            <label class="form-sub-label" for="input_179" style="min-height:13px;"> UF </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_234">
        <label class="form-label form-label-top" id="label_234" for="input_234">  </label>
        <div id="cid_234" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <input type="text" id="input_234" name="muni_atendimento" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
            <label class="form-sub-label" for="input_234" style="min-height:13px;"> Município de Atendimento </label>
          </span>
        </div>
      </li>

      <li class="form-line form-line-column form-col-3" data-type="control_textbox" id="id_235">
        <label class="form-label form-label-top" id="label_235" for="input_235">  </label>
        <div id="cid_235" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <input type="text" id="input_235" name="nome_unidade" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
            <label class="form-sub-label" for="input_235" style="min-height:13px;"> Nome da Unidade de Realização do Pré Natal </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_232">
        <label class="form-label form-label-top form-label-auto" id="label_232" for="input_232">  </label>
        <div id="cid_232" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <input type="text" id="input_232" name="nome_profissional" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
            <label class="form-sub-label" for="input_232" style="min-height:13px;"> Nome do Profissional de Saúde </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_datetime" id="id_237">
        <label class="form-sub-label" id="label_237" for="lite_mode_237"> Data do Diagnóstico </label>
        <div id="cid_237" class="form-input-wide jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
              <input class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_237" name="data_diag" type="text" size="12" data-maxlength="12" value="" data-format="ddmmyyyy" data-seperator="/" placeholder="dd/mm/yyyy" />
              <label class="form-sub-label" for="lite_mode_237" id="sublabel_litemode" style="min-height:13px;">  </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top; width:15%;">
              <img alt="Pick a Date" id="input_237_pick" src="https://cdn.jotfor.ms/images/calendar.png" style="vertical-align:middle; width:100%;" data-component="datetime" />
              <label class="form-sub-label" for="input_237_pick" style="min-height:13px;">  </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_datetime" id="id_236">
        <label class="form-sub-label" id="label_236" for="lite_mode_236"> Inicio do Pré Natal </label>
        <div id="cid_236" class="form-input-wide jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
              <input class="form-textbox validate[limitDate, validateLiteDate]" name="datainipre" id="lite_mode_236" type="text" size="12" data-maxlength="12" value="" data-format="ddmmyyyy" data-seperator="/" placeholder="dd/mm/yyyy" />
              <label class="form-sub-label" for="lite_mode_236" id="sublabel_litemode" style="min-height:13px;">  </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top; width:15%">
              <img alt="Pick a Date" id="input_236_pick" src="https://cdn.jotfor.ms/images/calendar.png" style="vertical-align:middle; width:100%;" data-component="datetime" />
              <label class="form-sub-label" for="input_236_pick" style="min-height:13px;">  </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_239">
        <label class="form-label form-label-top form-label-auto" id="label_239" for="input_239">  </label>
        <div id="cid_239" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <input type="text" id="input_239" name="nome_ag_comun" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
            <label class="form-sub-label" for="input_239" style="min-height:13px;"> Nome do Agente Comunitário de Saúde </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_240">
        <label class="form-label form-label-top" id="label_240" for="input_240">  </label>
        <div id="cid_240" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <input type="text" id="input_240" name="num_area" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
            <label class="form-sub-label" for="input_240" style="min-height:13px;"> Numero da Área </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_233">
        <label class="form-label form-label-top" id="label_233" for="input_233">  </label>
        <div id="cid_233" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <input type="text" id="input_233" name="num_microarea" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
            <label class="form-sub-label" for="input_233" style="min-height:13px;"> Numero da Micro área </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-3" data-type="control_textbox" id="id_175">
        <label class="form-label form-label-top" id="label_175" for="input_175">  </label>
        <div id="cid_175" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <input type="text" id="input_175" name="cns_prof" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
            <label class="form-sub-label" for="input_175" style="min-height:13px;"> CNS do Profissional de Saúde </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_107">
        <div id="cid_107" class="form-input-wide">
          <div id="text_107" class="form-html" data-component="text">
            <hr />
            <p><strong><span style="color: #000000; font-size: 12pt;">Dados Individuais da Gestante</span></strong></p>
            <p> </p>
            <p> </p>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5">  </label>
        <div id="cid_5" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <input type="text" id="input_5" name="nome_gestante" data-type="input-textbox" class="form-textbox" size="70" value="" placeholder=" " data-component="textbox" />
            <label class="form-sub-label" for="input_5" style="min-height:13px;"> Nome da Gestante </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_datetime" id="id_238">
        <label class="form-sub-label" id="label_238" for="lite_mode_238"> Data de Nascimento </label>
        <div id="cid_238" class="form-input-wide jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
              <input class="form-textbox validate[limitDate, validateLiteDate]" name="data_nasc" id="lite_mode_238" type="text" size="12" data-maxlength="12" value="" data-format="ddmmyyyy" data-seperator="/" placeholder="dd/mm/yyyy" />
              <label class="form-sub-label" for="lite_mode_238" id="sublabel_litemode" style="min-height:13px;">  </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top;width:15%;">
              <img alt="Pick a Date" id="input_238_pick" src="https://cdn.jotfor.ms/images/calendar.png" style="vertical-align:middle; width:100%;" data-component="datetime" />
              <label class="form-sub-label" for="input_238_pick" style="min-height:13px;">  </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_dropdown" id="id_177">
        <label class="form-label form-label-top" id="label_177" for="input_177">  </label>
        <div id="cid_177" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <select class="form-dropdown" id="input_177" name="estadocivil" style="width:150px;" data-component="dropdown">
              <option value=""> Selecione </option>
              <option value="Solteira"> Solteira </option>
              <option value="Casada"> Casada </option>
              <option value="Viúva"> Viúva </option>
            </select>
            <label class="form-sub-label" for="input_177" style="min-height:13px;"> Estado Civil </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-3" data-type="control_dropdown" id="id_181">
        <label class="form-label form-label-top" id="label_181" for="input_181">  </label>
        <div id="cid_181" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <select class="form-dropdown" id="input_181" name="end_terceiro" style="width:150px;" data-component="dropdown">
              <option value=""> Selecione </option>
              <option value="Convive com Companheiro e filhos"> Convive com Companheiro e filhos </option>
              <option value="Convive com Familiares"> Convive com Familiares </option>
              <option value="Convive com Outras Pessoas"> Convive com Outras Pessoas </option>
              <option value="Vive Só"> Vive Só </option>
            </select>
            <label class="form-sub-label" for="input_181" style="min-height:13px;"> Com quem Mora </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-4" data-type="control_dropdown" id="id_180">
        <label class="form-label form-label-top" id="label_180" for="input_180">  </label>
        <div id="cid_180" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <select class="form-dropdown" id="input_180" name="racacor" style="width:150px;" data-component="dropdown">
              <option value=""> Selecione </option>
              <option value="Branco"> Branco </option>
              <option value="Amarelo"> Amarelo </option>
              <option value="Negro"> Negro </option>
              <option value="Pardo"> Pardo </option>
              <option value="Azul"> Azul </option>
              <option value="Indígena"> Indígena </option>
            </select>
            <label class="form-sub-label" for="input_180" style="min-height:13px;"> Raça / Cor </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_182">
        <label class="form-label form-label-top" id="label_182" for="input_182">  </label>
        <div id="cid_182" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <input type="text" id="input_182" name="nome_mae" data-type="input-textbox" class="form-textbox" size="70" value="" placeholder=" " data-component="textbox" />
            <label class="form-sub-label" for="input_182" style="min-height:13px;"> Nome da Mãe </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_241">
        <label class="form-label form-label-top form-label-auto" id="label_241" for="input_241">  </label>
        <div id="cid_241" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <input type="text" id="input_241" name="end_gestante" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
            <label class="form-sub-label" for="input_241" style="min-height:13px;"> Logradouro (rua, avenida...) </label>
          </span>
        </div>
      </li>

      <li class="form-line form-line-column form-col-1" data-type="control_dropdown" id="id_179">
        <label class="form-label form-label-top" id="label_179" for="input_179">  </label>
        <div id="cid_179" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <select class="form-dropdown" name="uf_residencia" style="width:150px;" data-component="dropdown">
              <option value=""> Selecione </option>
              <option value="Acre"> AC </option>
              <option value="Alagoas"> AL </option>
              <option value="Amazonas"> AM </option>
              <option value="Amapá"> AP </option>
              <option value="Bahia"> BA </option>
              <option value="Ceará"> CE </option>
              <option value="Distrito Federal"> DF </option>
              <option value="Espírito Santo"> ES </option>
              <option value="Goiás"> GO </option>
              <option value="Maranhão"> MA </option>
              <option value="Minas Gerais"> MG </option>
              <option value="Mato Grosso do Sul"> MS </option>
              <option value="Mato Grosso"> MT </option>
              <option value="Pará"> PA </option>
              <option value="Paraíba"> PB </option>
              <option value="Pernambuco"> PE </option>
              <option value="Piauí"> PI </option>
              <option value="Paraná"> PR </option>
              <option value="Rio de Janeiro"> RJ </option>
              <option value="Rio Grande do Norte"> RN </option>
              <option value="Rondônia"> RO </option>
              <option value="Roraima"> RR </option>
              <option value="Rio Grande do Sul"> RS </option>
              <option value="Santa Catarina"> SC </option>
              <option value="Sergipe"> SE </option>
              <option value="São Paulo"> SP </option>
              <option value="Tocantins"> TO </option>
            </select>
            <label class="form-sub-label" for="input_179" style="min-height:13px;"> UF </label>
          </span>
        </div>
      </li> 
      <li class="form-line" data-type="control_textbox" id="id_242">
        <label class="form-label form-label-top form-label-auto" id="label_242" for="input_242">  </label>
        <div id="cid_242" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <input type="text" id="input_242" name="muni_residencia" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
            <label class="form-sub-label" for="input_242" style="min-height:13px;"> Município de Residência </label>
          </span>
        </div>
      </li>
           <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_243">
        <label class="form-label form-label-top" id="label_243" for="input_243">  </label>
        <div id="cid_243" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <input type="text" name="num_residencia" data-type="input-textbox" class="form-textbox" size="20" value="" maxlength="8" data-component="textbox" />
            <label class="form-sub-label" for="input_243" style="min-height:13px;"> Número </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_243">
        <label class="form-label form-label-top" id="label_243" for="input_243">  </label>
        <div id="cid_243" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <input type="text" id="input_243" name="complemento" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
            <label class="form-sub-label" for="input_243" style="min-height:13px;"> Complemento </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_244">
        <label class="form-label form-label-top" id="label_244" for="input_244">  </label>
        <div id="cid_244" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <input type="text" id="input_244" name="ref_ponto" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
            <label class="form-sub-label" for="input_244" style="min-height:13px;"> Ponto de Referência </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-3" data-type="control_textbox" id="id_116">
        <label class="form-label form-label-top" id="label_116" for="input_116">  </label>
        <div id="cid_116" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <input type="text" id="input_116" name="telefone" data-type="input-textbox" class="form-textbox" size="15" value="" maxlength="15" placeholder=" " data-component="textbox" />
            <label class="form-sub-label" for="input_116" style="min-height:13px;"> Telefone Celular / Residencial </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-4" data-type="control_dropdown" id="id_42">
        <label class="form-label form-label-top" id="label_42" for="input_42">  </label>
        <div id="cid_42" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <select class="form-dropdown" id="input_42" name="escolaridade" style="width:150px;" data-component="dropdown">
              <option value=""> Selecione </option>
              <option value="Analfabeto"> Analfabeto </option>
              <option value="1° a 4° Série Incompleta do Ensino Fundamental"> 1° a 4° Série Incompleta do Ensino Fundamental </option>
              <option value="4° Série Completa do ensino fundamental"> 4° Série Completa do ensino fundamental </option>
              <option value="Ensino Fundamental Completo"> Ensino Fundamental Completo </option>
              <option value="Ensino Médio Incompleto"> Ensino Médio Incompleto </option>
              <option value="Ensino Médio Completo"> Ensino Médio Completo </option>
              <option value="Educação Superior Incompleta"> Educação Superior Incompleta </option>
              <option value="Educação Superior completa"> Educação Superior completa </option>
              <option value="Ignorado"> Ignorado </option>
              <option value="Não se Aplica"> Não se Aplica </option>
            </select>
            <label class="form-sub-label" for="input_42" style="min-height:13px;"> Escolaridade </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_59">
        <div id="cid_59" class="form-input-wide">
          <div id="text_59" class="form-html" data-component="text">
            <hr />
            <p><span style="font-size: 12pt;"><strong><span style="color: #000000;">Acolhimento</span></strong></span></p>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_datetime" id="id_183">
        <label class="form-sub-label" id="label_183" for="lite_mode_183"> Data da DUM </label>
        <div id="cid_183" class="form-input-wide jf-required">
          <div data-wrapper-react="true">
           <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
              <input class="form-textbox validate[limitDate, validateLiteDate]" name="data_dum" id="lite_mode_183" type="text" size="12" data-maxlength="12" value="" data-format="ddmmyyyy" data-seperator="/" placeholder="dd/mm/yyyy" />
              <label class="form-sub-label" for="lite_mode_183" id="sublabel_litemode" style="min-height:13px;">  </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top;width:15%;">
              <img alt="Pick a Date" id="input_183_pick" src="https://cdn.jotfor.ms/images/calendar.png" style="vertical-align:middle; width:100%;" data-component="datetime" />
              <label class="form-sub-label" for="input_183_pick" style="min-height:13px;">  </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_datetime" id="id_184">
        <label class="form-sub-label" id="label_184" for="lite_mode_184"> Data da DPP </label>
        <div id="cid_184" class="form-input-wide jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
              <input class="form-textbox validate[limitDate, validateLiteDate]" name="data_dpp" id="lite_mode_184" type="text" size="12" data-maxlength="12" value="" data-format="ddmmyyyy" data-seperator="/" placeholder="dd/mm/yyyy" />
              <label class="form-sub-label" for="lite_mode_184" id="sublabel_litemode" style="min-height:13px;">  </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top; width:15%;">
              <img alt="Pick a Date" id="input_184_pick" src="https://cdn.jotfor.ms/images/calendar.png" style="vertical-align:middle; width:100%;" data-component="datetime" />
              <label class="form-sub-label" for="input_184_pick" style="min-height:13px;">  </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-3" data-type="control_datetime" id="id_185">
        <label class="form-sub-label" id="label_185" for="lite_mode_185"> Data de Realização de teste Rápido para Sífilis </label>
        <div id="cid_185" class="form-input-wide jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
              <input class="form-textbox validate[limitDate, validateLiteDate]" name="data_testerapido" id="lite_mode_185" type="text" size="12" data-maxlength="12" value="" data-format="ddmmyyyy" data-seperator="/" placeholder="dd/mm/yyyy" />
              <label class="form-sub-label" for="lite_mode_185" id="sublabel_litemode" style="min-height:13px;">  </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top; width:15%;">
              <img alt="Pick a Date" id="input_185_pick" src="https://cdn.jotfor.ms/images/calendar.png" style="vertical-align:middle; width:40%;" data-component="datetime" />
              <label class="form-sub-label" for="input_185_pick" style="min-height:13px;">  </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-4" data-type="control_radio" id="id_186">
        <label class="form-label form-label-top" id="label_186" for="input_186">  </label>
        <div id="cid_186" class="form-input-wide jf-required">
          <div class="form-single-column" data-component="radio">
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-sub-label" id="input_186_0" name="result_testerapido" value="Negativo" />
              <label id="label_input_186_0" for="input_186_0"> Negativo </label>
            </span>
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-sub-label" id="input_186_1" name="result_testerapido" value="Positivo" />
              <label id="label_input_186_1" for="input_186_1"> Positivo </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_167">
        <label class="form-sub-label" id="label_167" for="input_167"> Solicitado Teste não Treponêmico (VDRL) </label>
        <div id="cid_167" class="form-input-wide jf-required">
          <div class="form-single-column" data-component="radio">
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_167_0" name="teste_trepo1" value="Sim" />
              <label id="label_input_167_0" for="input_167_0"> Sim </label>
            </span>
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_167_1" name="teste_trepo1" value="Não" />
              <label id="label_input_167_1" for="input_167_1"> Não </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_datetime" id="id_189">
        <label class="form-sub-label" id="label_189" for="lite_mode_189"> Data </label>
        <div id="cid_189" class="form-input-wide jf-required">
          <div data-wrapper-react="true">
           <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
              <input name="data_testetrepo" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_189" type="text" size="12" data-maxlength="12" value="" data-format="ddmmyyyy" data-seperator="/" placeholder="dd/mm/yyyy" />
              <label class="form-sub-label" for="lite_mode_189" id="sublabel_litemode" style="min-height:13px;">  </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top; width:15%;">
              <img alt="Pick a Date" id="input_189_pick" src="https://cdn.jotfor.ms/images/calendar.png" style="vertical-align:middle; width:100%;" data-component="datetime" />
              <label class="form-sub-label" for="input_189_pick" style="min-height:13px;">  </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_187">
        <label class="form-sub-label" id="label_187" for="input_187"> Prescrito tratamento com a 1° dose de Penicilina se TR Positivo </label>
        <div id="cid_187" class="form-input-wide jf-required">
          <div class="form-single-column" data-component="radio">
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_187_0" name="result_dose1" value="Sim" />
              <label id="label_input_187_0" for="input_187_0"> Sim </label>
            </span>
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_187_1" name="result_dose1" value="Não" />
              <label id="label_input_187_1" for="input_187_1"> Não </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_datetime" id="id_188">
        <label class="form-sub-label" id="label_188" for="lite_mode_188"> Data </label>
        <div id="cid_188" class="form-input-wide jf-required">
          <div data-wrapper-react="true">
           <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
              <input name="data_presc1" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_188" type="text" size="12" data-maxlength="12" value="" data-format="ddmmyyyy" data-seperator="/" placeholder="dd/mm/yyyy" />
              <label class="form-sub-label" for="lite_mode_188" id="sublabel_litemode" style="min-height:13px;">  </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top;width:15%;">
              <img alt="Pick a Date" id="input_188_pick" src="https://cdn.jotfor.ms/images/calendar.png" style="vertical-align:middle; width:100%;" data-component="datetime" />
              <label class="form-sub-label" for="input_188_pick" style="min-height:13px;">  </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_68">
        <div id="cid_68" class="form-input-wide">
          <div id="text_68" class="form-html" data-component="text">
            <hr />
            <p><span style="font-size: 12pt;"><strong><span style="color: #000000;">Dados Laboratoriais da Gestante</span></strong></span></p>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_dropdown" id="id_79">
        <label class="form-label form-label-top" id="label_79" for="input_79">  </label>
        <div id="cid_79" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <select class="form-dropdown" id="input_79" name="vrdl" style="width:150px;" data-component="dropdown">
              <option value=""> Selecione </option>
              <option value="Reagente"> Reagente </option>
              <option value="Não Reagente"> Não Reagente </option>
              <option value="Não Realizado"> Não Realizado </option>
            </select>
            <label class="form-sub-label" for="input_79" style="min-height:13px;"> VDRL </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_117">
        <label class="form-label form-label-top" id="label_117" for="input_117">  </label>
        <div id="cid_117" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <input type="text" id="input_117" name="data_lab" data-type="input-textbox" class="form-textbox" size="15" value="" maxlength="15" placeholder=" " data-component="textbox" />
            <label class="form-sub-label" for="input_117" style="min-height:13px;"> Data </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-3" data-type="control_textbox" id="id_118">
        <label class="form-label form-label-top" id="label_118" for="input_118">  </label>
        <div id="cid_118" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <input type="text" id="input_118" name="titulacao" data-type="input-textbox" class="form-textbox" size="15" value="1:" maxlength="15" placeholder=" " data-component="textbox" />
            <label class="form-sub-label" for="input_118" style="min-height:13px;"> Titulação </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_190">
        <label class="form-sub-label" id="label_190" for="input_190"> Realizado teste treponêmico (FT A - abs TPH A ou MHA TP Elisa) </label>
        <div id="cid_190" class="form-input-wide jf-required">
          <div class="form-single-column" data-component="radio">
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_190_0" name="teste_trepo2" value="Sim" />
              <label id="label_input_190_0" for="input_190_0"> Sim </label>
            </span>
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_190_1" name="teste_trepo2" value="Não" />
              <label id="label_input_190_1" for="input_190_1"> Não </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_datetime" id="id_191">
        <label class="form-label form-label-top" id="label_191" for="lite_mode_191"> Data </label>
        <div id="cid_191" class="form-input-wide jf-required">
          <div data-wrapper-react="true">
           <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
              <input name="data_testetrepo2" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_191" type="text" size="12" data-maxlength="12" value="" data-format="ddmmyyyy" data-seperator="/" placeholder="dd/mm/yyyy" />
              <label class="form-sub-label" for="lite_mode_191" id="sublabel_litemode" style="min-height:13px;">  </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top; width:15%;">
              <img alt="Pick a Date" id="input_191_pick" src="https://cdn.jotfor.ms/images/calendar.png" style="vertical-align:middle; width:100%;" data-component="datetime" />
              <label class="form-sub-label" for="input_191_pick" style="min-height:13px;">  </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_192">
        <label class="form-label form-label-top" id="label_192" for="input_192"> Realizado teste treponêmico positivo </label>
        <div id="cid_192" class="form-input-wide jf-required">
          <div class="form-single-column" data-component="radio">
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_192_0" name="treponemicoteste" value="Sim" />
              <label id="label_input_192_0" for="input_192_0"> Sim </label>
            </span>
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_192_1" name="treponemicoteste" value="Não" />
              <label id="label_input_192_1" for="input_192_1"> Não </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_56">
        <div id="cid_56" class="form-input-wide">
          <div id="text_56" class="form-html" data-component="text">
            <hr />
            <p><strong><span style="color: #000000; font-size: 12pt;">Manifestação Clínica da Gestante</span></strong></p>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_text" id="id_194">
        <div id="cid_194" class="form-input-wide">
          <div id="text_194" class="form-html" data-component="text">
            <p>Fase Primária </p>
            <p> </p>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_dropdown" id="id_195">
        <label class="form-label form-label-top" id="label_195" for="input_195">  </label>
        <div id="cid_195" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <select class="form-dropdown" id="input_195" name="candroduro" style="width:150px;" data-component="dropdown">
              <option value=""> Selecione </option>
              <option value="Sim"> Sim </option>
              <option value="Não"> Não </option>
            </select>
            <label class="form-sub-label" for="input_195" style="min-height:13px;"> Cancroduro </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-3" data-type="control_dropdown" id="id_196">
        <label class="form-label form-label-top" id="label_196" for="input_196">  </label>
        <div id="cid_196" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <select class="form-dropdown" id="input_196" name="localizacao" style="width:150px;" data-component="dropdown">
              <option value=""> Selecione </option>
              <option value="Parede Vaginal"> Parede Vaginal </option>
              <option value="Cérvix"> Cérvix </option>
              <option value="Períneo"> Períneo </option>
            </select>
            <label class="form-sub-label" for="input_196" style="min-height:13px;"> Localização </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_text" id="id_197">
        <div id="cid_197" class="form-input-wide">
          <div id="text_197" class="form-html" data-component="text">
            <p>Fase Secundária</p>
            <p> </p>
            <p> </p>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_dropdown" id="id_198">
        <label class="form-label form-label-top" id="label_198" for="input_198">  </label>
        <div id="cid_198" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <select class="form-dropdown" id="input_198" name="papulaspalmoplantares" style="width:150px;" data-component="dropdown">
              <option value=""> Selecione </option>
              <option value="Sim"> Sim </option>
              <option value="Não"> Não </option>
            </select>
            <label class="form-sub-label" for="input_198" style="min-height:13px;"> Pápulas Palmo Plantares </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-3" data-type="control_dropdown" id="id_199">
        <label class="form-label form-label-top" id="label_199" for="input_199">  </label>
        <div id="cid_199" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <select class="form-dropdown" id="input_199" name="alopecia" style="width:150px;" data-component="dropdown">
              <option value=""> Selecione </option>
              <option value="Sim"> Sim </option>
              <option value="Não"> Não </option>
            </select>
            <label class="form-sub-label" for="input_199" style="min-height:13px;"> Alopécia </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_text" id="id_200">
        <div id="cid_200" class="form-input-wide">
          <div id="text_200" class="form-html" data-component="text">
            <p>Fase Terciária</p>
            <p> </p>
            <p> </p>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_dropdown" id="id_201">
        <label class="form-label form-label-top" id="label_201" for="input_201">  </label>
        <div id="cid_201" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <select class="form-dropdown" id="input_201" name="aptneuro" style="width:150px;" data-component="dropdown">
              <option value=""> Selecione </option>
              <option value="Sim"> Sim </option>
              <option value="Não"> Não </option>
            </select>
            <label class="form-sub-label" for="input_201" style="min-height:13px;"> Apresentações Neurológicas </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_text" id="id_202">
        <div id="cid_202" class="form-input-wide">
          <div id="text_202" class="form-html" data-component="text">
            <p>Fase Latente</p>
            <p> </p>
            <p> </p>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_dropdown" id="id_203">
        <label class="form-label form-label-top" id="label_203" for="input_203">  </label>
        <div id="cid_203" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <select class="form-dropdown" id="input_203" name="ausenciasinais" style="width:150px;" data-component="dropdown">
              <option value=""> Selecione </option>
              <option value="Sim"> Sim </option>
              <option value="Não"> Não </option>
            </select>
            <label class="form-sub-label" for="input_203" style="min-height:13px;"> Ausência de sinais e Sintomas clínicos </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_106">
        <div id="cid_106" class="form-input-wide">
          <div id="text_106" class="form-html" data-component="text">
            <hr />
            <p><strong><span style="color: #000000; font-size: 12pt;">Classificação Clínica do Tratamento  e Informações Complementares</span></strong></p>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_text" id="id_204">
        <div id="cid_204" class="form-input-wide">
          <div id="text_204" class="form-html" data-component="text">
            <p><strong>Sífilis Primária </strong></p>
            <p><strong> </strong></p>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_radio" id="id_156">
        <label class="form-label form-label-right" id="label_156" for="input_156">  </label>
        <div id="cid_156" class="form-input jf-required">
          <div class="form-single-column" data-component="radio">
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_156_0" name="sifprimaria" value="Sim" />
              <label id="label_input_156_0" for="input_156_0"> Sim </label>
            </span>
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_156_1" name="sifprimaria" value="Não" />
              <label id="label_input_156_1" for="input_156_1"> Não </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-3" data-type="control_datetime" id="id_206">
        <label class="form-sub-label" id="label_206" for="lite_mode_206"> Data da Dose unica </label>
        <div id="cid_206" class="form-input-wide jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
              <input name="sifprimaria_datadose" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_206" type="text" size="12" data-maxlength="12" value="" data-format="ddmmyyyy" data-seperator="/" placeholder="dd/mm/yyyy" />
              <label class="form-sub-label" for="lite_mode_206" id="sublabel_litemode" style="min-height:13px;">  </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top; width:15%;">
              <img alt="Pick a Date" id="input_206_pick" src="https://cdn.jotfor.ms/images/calendar.png" style="vertical-align:middle; width:100%;" data-component="datetime" />
              <label class="form-sub-label" for="input_206_pick" style="min-height:13px;">  </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_text" id="id_205">
        <div id="cid_205" class="form-input-wide">
          <div id="text_205" class="form-html" data-component="text">
            <p><span style="color: #ff0000;">Penicilina G Benzatina 2.400.000 UI, IntraMuscular, em dose única (1.200 UI em cada gluteo)</span></p>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_divider" id="id_207">
        <div id="cid_207" class="form-input-wide">
          <div data-component="divider" style="border-bottom:1px solid #e6e6e6;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px;">
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_text" id="id_208">
        <div id="cid_208" class="form-input-wide">
          <div id="text_208" class="form-html" data-component="text">
            <p><strong>Sífilis Recente Secundária e Latente</strong></p>
            <p><strong> </strong></p>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_radio" id="id_209">
        <label class="form-label form-label-right" id="label_209" for="input_209">  </label>
        <div id="cid_209" class="form-input jf-required">
          <div class="form-single-column" data-component="radio">
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_209_0" name="sifsecundaria" value="Sim" />
              <label id="label_input_209_0" for="input_209_0"> Sim </label>
            </span>
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_209_1" name="sifsecundaria" value="Não" />
              <label id="label_input_209_1" for="input_209_1"> Não </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-3" data-type="control_datetime" id="id_210">
        <label class="form-sub-label" id="label_210" for="lite_mode_210"> Data da 1° Dose </label>
        <div id="cid_210" class="form-input-wide jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
              <input name="sifsecundaria_datadose1" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_210" type="text" size="12" data-maxlength="12" value="" data-format="ddmmyyyy" data-seperator="/" placeholder="dd/mm/yyyy" />
              <label class="form-sub-label" for="lite_mode_210" id="sublabel_litemode" style="min-height:13px;">  </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top; width:15%;">
              <img alt="Pick a Date" id="input_210_pick" src="https://cdn.jotfor.ms/images/calendar.png" style="vertical-align:middle; width:100%;" data-component="datetime" />
              <label class="form-sub-label" for="input_210_pick" style="min-height:13px;">  </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-4" data-type="control_datetime" id="id_216">
        <label class="form-sub-label" id="label_216" for="lite_mode_216"> Data da 2° Dose </label>
        <div id="cid_216" class="form-input-wide jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
              <input name="sifsecundaria_datadose2" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_216" type="text" size="12" data-maxlength="12" value="" data-format="ddmmyyyy" data-seperator="/" placeholder="dd/mm/yyyy" />
              <label class="form-sub-label" for="lite_mode_216" id="sublabel_litemode" style="min-height:13px;">  </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top; width:15%;">
              <img alt="Pick a Date" id="input_216_pick" src="https://cdn.jotfor.ms/images/calendar.png" style="vertical-align:middle; width:100%;" data-component="datetime" />
              <label class="form-sub-label" for="input_216_pick" style="min-height:13px;">  </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_text" id="id_213">
        <div id="cid_213" class="form-input-wide">
          <div id="text_213" class="form-html" data-component="text">
            <p><span style="color: #ff0000;">Penicilina G Benzatina 2.400.000 UI, IntraMuscular, Repetida após 1 semana senão a dose total de 4.800.000 UI</span></p>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_divider" id="id_212">
        <div id="cid_212" class="form-input-wide">
          <div data-component="divider" style="border-bottom:1px solid #e6e6e6;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px;">
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_text" id="id_214">
        <div id="cid_214" class="form-input-wide">
          <div id="text_214" class="form-html" data-component="text">
            <p><strong>Sífilis Tardia (Latente e Terciária)</strong></p>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_radio" id="id_215">
        <label class="form-label form-label-right" id="label_215" for="input_215">  </label>
        <div id="cid_215" class="form-input jf-required">
          <div class="form-single-column" data-component="radio">
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_215_0" name="sifterciaria" value="Sim" />
              <label id="label_input_215_0" for="input_215_0"> Sim </label>
            </span>
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_215_1" name="sifterciaria" value="Não" />
              <label id="label_input_215_1" for="input_215_1"> Não </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-3" data-type="control_datetime" id="id_217">
        <label class="form-sub-label" id="label_217" for="lite_mode_217"> Data da 1° Dose </label>
        <div id="cid_217" class="form-input-wide jf-required">
          <div data-wrapper-react="true">
<div data-wrapper-react="true">
           <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
              <input name="sifterciaria_datadose1" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_211" type="text" size="12" data-maxlength="12" value="" data-format="ddmmyyyy" data-seperator="/" placeholder="dd/mm/yyyy" />
              <label class="form-sub-label" for="lite_mode_211" id="sublabel_litemode" style="min-height:13px;">  </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top; width:15%;">
              <img alt="Pick a Date" id="input_211_pick" src="https://cdn.jotfor.ms/images/calendar.png" style="vertical-align:middle; width:100%;" data-component="datetime" />
              <label class="form-sub-label" for="input_211_pick" style="min-height:13px;">  </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-4" data-type="control_datetime" id="id_211">
        <label class="form-sub-label" id="label_211" for="lite_mode_211"> Data da 2° Dose </label>
        <div id="cid_211" class="form-input-wide jf-required">
          <div data-wrapper-react="true">
           <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
              <input name="sifterciaria_datadose2" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_211" type="text" size="12" data-maxlength="12" value="" data-format="ddmmyyyy" data-seperator="/" placeholder="dd/mm/yyyy" />
              <label class="form-sub-label" for="lite_mode_211" id="sublabel_litemode" style="min-height:13px;">  </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top; width:15%;">
              <img alt="Pick a Date" id="input_211_pick" src="https://cdn.jotfor.ms/images/calendar.png" style="vertical-align:middle; width:100%;" data-component="datetime" />
              <label class="form-sub-label" for="input_211_pick" style="min-height:13px;">  </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-5" data-type="control_datetime" id="id_218">
        <label class="form-sub-label" id="label_218" for="lite_mode_218"> Data da 3° Dose </label>
        <div id="cid_218" class="form-input-wide jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
              <input name="sifterciaria_datadose3" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_218" type="text" size="12" data-maxlength="12" value="" data-format="ddmmyyyy" data-seperator="/" placeholder="dd/mm/yyyy" />
              <label class="form-sub-label" for="lite_mode_218" id="sublabel_litemode" style="min-height:13px;">  </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top; width:15%;">
              <img alt="Pick a Date" id="input_218_pick" src="https://cdn.jotfor.ms/images/calendar.png" style="vertical-align:middle; width:100%;" data-component="datetime" />
              <label class="form-sub-label" for="input_218_pick" style="min-height:13px;">  </label>
            </span>
          </div>
        </div>
      </li>
       <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_243">
        <label class="form-label form-label-top" id="label_243" for="input_243">  </label>
        <div id="cid_243" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
            <input type="text" id="input_243" name="localdasdoses" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
            <label class="form-sub-label" for="input_243" style="min-height:13px;"> Local das Doses Administradas </label>
          </span>
        </div>
      </li>

      <li class="form-line form-line-column form-col-6" data-type="control_radio" id="id_220">
        <label class="form-sub-label" id="label_220" for="input_220"> Tratamento Incompleto </label>
        <div id="cid_220" class="form-input-wide jf-required">
          <div class="form-single-column" data-component="radio">
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_220_0" name="tratamentoincompleto" value="Sim" />
              <label id="label_input_220_0" for="input_220_0"> Sim </label>
            </span>
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_220_1" name="tratamentoincompleto" value="Não" />
              <label id="label_input_220_1" for="input_220_1"> Não </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-7" data-type="control_radio" id="id_221">
        <label class="form-sub-label" id="label_221" for="input_221"> Encaminhada para dessensibilização em unidade de Referência </label>
        <div id="cid_221" class="form-input-wide jf-required">
          <div class="form-single-column" data-component="radio">
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_221_0" name="enc_dur" value="Sim" />
              <label id="label_input_221_0" for="input_221_0"> Sim </label>
            </span>
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_221_1" name="enc_dur" value="Não" />
              <label id="label_input_221_1" for="input_221_1"> Não </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_219">
        <div id="cid_219" class="form-input-wide">
          <div id="text_219" class="form-html" data-component="text">
            <p><span style="color: #ff0000;">Penicilina G Benzatina 2.400.000 UI, IntraMuscular, semanal (Por 3 semanas)</span></p>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_divider" id="id_225">
        <div id="cid_225" class="form-input-wide">
          <div data-component="divider" style="border-bottom:1px solid #e6e6e6;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px;">
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_radio" id="id_224">
        <label class="form-label form-label-top" id="label_224" for="input_224"> Gestante Reinfectada durante o Pré-Natal </label>
        <div id="cid_224" class="form-input-wide jf-required">
          <div class="form-single-column" data-component="radio">
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_224_0" name="gest_infectadapre" value="Sim" />
              <label id="label_input_224_0" for="input_224_0"> Sim </label>
            </span>
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_224_1" name="gest_infectadapre" value="Não" />
              <label id="label_input_224_1" for="input_224_1"> Não </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_radio" id="id_222">
        <label class="form-label form-label-top" id="label_222" for="input_222"> Encaminhada ficha de notificação compulsória </label>
        <div id="cid_222" class="form-input-wide jf-required">
          <div class="form-single-column" data-component="radio">
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_222_0" name="enc_compulsoria" value="Sim" />
              <label id="label_input_222_0" for="input_222_0"> Sim </label>
            </span>
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_222_1" name="enc_compulsoria" value="Não" />
              <label id="label_input_222_1" for="input_222_1"> Não </label>
            </span>
          </div>  
        </div>
      </li>
      <li class="form-line form-line-column form-col-3" data-type="control_datetime" id="id_226">
        <label class="form-label form-label-top" id="label_226" for="lite_mode_226"> Data </label>
        <div id="cid_226" class="form-input-wide jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top; width:75%;">
              <input name="enc_compulsoria_data" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_226" type="text" size="12" data-maxlength="12" value="" data-format="ddmmyyyy" data-seperator="/" placeholder="dd/mm/yyyy" />
              <label class="form-sub-label" for="lite_mode_226" id="sublabel_litemode" style="min-height:13px;">  </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top; width:15%;">
              <img alt="Pick a Date" id="input_226_pick" src="https://cdn.jotfor.ms/images/calendar.png" style="vertical-align:middle; width:100%;" data-component="datetime" />
              <label class="form-sub-label" for="input_226_pick" style="min-height:13px;">  </label>
            </span>
          </div>
        </div>
              <li class="form-line form-line-column form-col-4" data-type="control_radio" id="id_223">
        <label class="form-label form-label-top" id="label_223" for="input_223"> Gestante Alérgica a Penicilina </label>
        <div id="cid_223" class="form-input-wide jf-required">
          <div class="form-single-column" data-component="radio">
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_223_0" name="gestalergica_penicilina" value="Sim" />
              <label id="label_input_223_0" for="input_223_0"> Sim </label>
            </span>
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_223_1" name="gestalergica_penicilina" value="Não" />
              <label id="label_input_223_1" for="input_223_1"> Não </label>
            </span>
          </div>
        </div>
      </li>

        
      </li>
      <li class="form-line form-line-column form-col-4" data-type="control_radio" id="id_223">
        <label class="form-label form-label-top" id="label_223" for="input_223"> Reiniciou esquema terapêutico </label>
        <div id="cid_223" class="form-input-wide jf-required">
          <div class="form-single-column" data-component="radio">
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_223_0" name="reiniciouesquema" value="Sim" />
              <label id="label_input_223_0" for="input_223_0"> Sim </label>
            </span>
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_223_1" name="reiniciouesquema" value="Não" />
              <label id="label_input_223_1" for="input_223_1"> Não </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_57">
        <div id="cid_57" class="form-input-wide">
          <div id="text_57" class="form-html" data-component="text">
            <hr />
            <p><strong><span style="color: #000000; font-size: 12pt;">Tratamento e Informações Complementares dos Parceiros</span></strong></p>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_dropdown" id="id_164">
        <label class="form-label form-label-top" id="label_164" for="input_164"> Parceiro Tratado concomitantemente a gestante </label>
        <div id="cid_164" class="form-input-wide jf-required">
          <select class="form-dropdown" id="input_164" name="parceirotratado" style="width:150px;" data-component="dropdown">
            <option value=""> Selecione </option>
            <option value="Sim"> Sim </option>
            <option value="Não"> Não </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_dropdown" id="id_229">
        <label class="form-label form-label-top" id="label_229" for="input_229"> Prescrito outro esquema Terapêutico </label>
        <div id="cid_229" class="form-input-wide jf-required">
          <select class="form-dropdown" id="input_229" name="presc_outroesquema" style="width:150px;" data-component="dropdown">
            <option value=""> Selecione </option>
            <option value="Doxiciclina 100mg, VO, 2x ao dia por 15 dias"> Doxiciclina 100mg, VO, 2x ao dia por 15 dias </option>
            <option value="Ceftriaxona 1g, IV ou IM, 1x por dia por 8 a 10 dias "> Ceftriaxona 1g, IV ou IM, 1x por dia por 8 a 10 dias </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_dropdown" id="id_228">
        <label class="form-label form-label-top" id="label_228" for="input_228"> Esquema de tratamento prescrito ao Parceiro </label>
        <div id="cid_228" class="form-input-wide jf-required">
          <select class="form-dropdown" id="input_228" name="presc_esquem_terapeutico" style="width:150px;" data-component="dropdown">
            <option value=""> Selecione </option>
            <option value="Primária"> Primária </option>
            <option value="Recente Secundária e latente"> Recente Secundária e latente </option>
            <option value="Tardia (Latente e terciária)"> Tardia (Latente e terciária) </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_dropdown" id="id_227">
        <label class="form-label form-label-top" id="label_227" for="input_227"> Motivo para não realização de esquema terapêutico </label>
        <div id="cid_227" class="form-input-wide jf-required">
          <select class="form-dropdown" id="input_227" name="motivo_naorealizado" style="width:150px;" data-component="dropdown">
            <option value=""> Selecione </option>
            <option value="1. Parceiro não teve mais contato com a gestante"> 1. Parceiro não teve mais contato com a gestante </option>
            <option value="2. Parceiro não foi comunicado/convocado à UBS para tratamento"> 2. Parceiro não foi comunicado/convocado à UBS para tratamento </option>
            <option value="3. Parceiro foi comunicado/convocado à US para tratamento mas não compareceu"> 3. Parceiro foi comunicado/convocado à US para tratamento mas não compareceu </option>
            <option value="4. Parceiro foi comunicado/convocado à US mas recusou tratamento"> 4. Parceiro foi comunicado/convocado à US mas recusou tratamento </option>
            <option value="5. Outros"> 5. Outros </option>
          </select>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_230">
        <label class="form-label form-label-top" id="label_230" for="input_230"> Outro Motivo: </label>
        <div id="cid_230" class="form-input-wide jf-required">
          <input type="text" id="input_230" name="motivo_naorealizado_outro" data-type="input-textbox" class="form-textbox" size="15" value="" maxlength="15" placeholder=" " data-component="textbox" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 form-line-column-clear" data-type="control_dropdown" id="id_231">
        <label class="form-label form-label-top" id="label_231" for="input_231"> Desfecho </label>
        <div id="cid_231" class="form-input-wide jf-required">
          <select class="form-dropdown" id="input_231" name="desfecho" style="width:150px;" data-component="dropdown">
            <option value=""> Selecione </option>
            <option value="Em Acompanhamento"> Em Acompanhamento </option>
            <option value="Alta"> Alta </option>
            <option value="Aborto"> Aborto </option>
            <option value="Natimorto"> Natimorto </option>
            <option value="Prematuridade"> Prematuridade </option>
            <option value="Sinais Clínicos de Sífilis congênita"> Sinais Clínicos de Sífilis congênita </option>
          </select>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_33">
        <div id="cid_33" class="form-input-wide">
          <div style="text-align:center;" class="form-buttons-wrapper">
            <button type="submit" class="form-submit-button form-submit-button-simple_black" data-component="button">
              Registrar Paciente
            </button>
            <span>
               
            </span>
            <button id="input_reset_33" type="reset" class="form-submit-reset form-submit-button-simple_black" data-component="button">
              Limpar Formulário
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <input type="hidden" id="simple_spc" name="simple_spc" value="72202893033652" />
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "72202893033652-72202893033652";
  </script>
  <div class="formFooter-heightMask">
  </div>
 
</form></body>
</html>
<script type="text/javascript">JotForm.ownerView=true;</script>