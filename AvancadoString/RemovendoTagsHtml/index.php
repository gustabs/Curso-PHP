<?php 

// Removendo Tags HTML

// strip_tags

$TextoHtml = "<p>Olá Mundo</p>";

print(strip_tags($TextoHtml));

// Será impresso somente:

// Olá Mundo