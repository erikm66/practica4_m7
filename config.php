<?php

	require('lib/Page.php');
	require('lib/Header.php');
	require('lib/Menu.php');
	require('lib/Contents.php');
	require('lib/Foot.php');
	define ('LAYOUT','<!DOCTYPE html>
	<html>
	<head>
		<style type="text/css">
	');
	//css de la web
	$css=file_get_contents('static/estilow.css');
	$links =array('Inici'=>'/','Nosaltres'=>'');
	define('LOGO','imagenes/logo.png');
	$logo='imagenes/logo.png';
	$body='este es el contenidoeste 
	es el contenidoeste es el contenidoeste 
	es el contenidoeste es el contenidoeste 
	es el contenidoeste es el contenidoeste 
	es el contenidoeste es el contenidoeste 
	es el contenido';
	$foot='este es el pie';


?>