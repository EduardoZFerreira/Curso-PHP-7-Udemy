<?php
session_start();

// DEPOIS DE VERIFICAR LOGIN E SENHA, REINICIE O ID DA SESSÃO

session_destroy();
session_start();
session_regenerate_id();


echo session_id();