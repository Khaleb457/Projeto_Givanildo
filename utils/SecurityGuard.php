<?php
require_once __DIR__ ."/../config/db.php";
require_once __DIR__ . '/SessionController.php'; 


// 2. DEFINE O CAMINHO PARA O LOGIN
// Ajuste este caminho para onde a sua página de login realmente está!
$login_path = '/view/user/index.php';  

$login_page = BASE_URL . $login_path;

// 3. Verifica se o usuário NÃO está logado
if (!SessionController::isLoggedIn()) {
    
    // Se o usuário não estiver logado, redireciona para a página de login
    header("Location: {$login_page}");
    exit;
}

// Se o usuário estiver logado, o script continua e a página é carregada.