<?php
function limpar($texto) {
	$tags = strip_tags($texto);

	$muda = htmlspecialchars($tags, ENT_QUOTES);

	$escape = (get_magic_quotes_gpc()) ? $muda : addslashes($muda);

	$limpa = trim($escape);

	return $limpa;
}