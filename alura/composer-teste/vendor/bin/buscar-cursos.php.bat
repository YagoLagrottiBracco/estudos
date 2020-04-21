@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../yagolagrottibracco/buscador-cursos/buscar-cursos.php
php "%BIN_TARGET%" %*
