<?php

function reais($numero) {
	return "R$ " . number_format($numero, 2, ',', '.');
}
