<?php 
/** 
 * Funções das Telas de Cadastro de Clientes 
 */

/** Importa Configurações */
require_once('../config.php');
/** Importa Camada de Acesso a Dados DBAPI */
require_once(DBAPI);

$customers = null; /** Guarda Conjunto de Registros de Clientes */
$customer = null; /** Guarda um Único Cliente */

/**
 *  Listagem de Clientes
 */
function index() { /** Consulta Registros no Banco de Dados */
	global $customers;
	$customers = find_all('customers'); /** Retorna Todos os Registros da Tabela */
}
?>
<!-------------------------------------------------------------------------------->
<?php
/**
 *  Cadastro de Clientes
 */
function add() {

  if (!empty($_POST['customer'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $customer = $_POST['customer'];
    $customer['modified'] = $customer['created'] = $today->format("Y-m-d H:i:s");
    
    save('customers', $customer);
    header('location: index.php');
  }
}
?>
<!-------------------------------------------------------------------------------->
<?php
/**
 *	Atualização/Edição de Cliente
 */
function edit() {

  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['customer'])) {

      $customer = $_POST['customer'];
      $customer['modified'] = $now->format("Y-m-d H:i:s");

      update('customers', $id, $customer);
      header('location: index.php');
    } else {

      global $customer;
      $customer = find('customers', $id);
    } 
  } else {
    header('location: index.php');
  }
}
?>
<!-------------------------------------------------------------------------------->
<?php

/**
 *  Visualização de um Cliente
 */
function view($id = null) {
  global $customer;
  $customer = find('customers', $id);
}
?>
<!-------------------------------------------------------------------------------->
<?php
/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

  global $customer;
  $customer = remove('customers', $id);

  header('location: index.php');
}
?>
<!-------------------------------------------------------------------------------->