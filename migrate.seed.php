<?php
echo "iniciando...\n";
exec('/home/marcio/Área\ de\ trabalho/php-financas/vendor/bin/phinx rollback -t=0');
exec('/home/marcio/Área\ de\ trabalho/php-financas/vendor/bin/phinx migrate');
exec('/home/marcio/Área\ de\ trabalho/php-financas/vendor/bin/phinx seed:run');
echo "finalizado com sucesso!\n";
