<?php
function limpar($texto) {
	$tags = strip_tags($texto);

	$muda = htmlspecialchars($tags, ENT_QUOTES);

	$limpa = trim($muda);

	return $limpa;
}