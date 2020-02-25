<?php

    session_start();
    $_SESSION['nom'] = 'Moustalik';
    $_SESSION['prenom'] = 'Tahar';
    setcookie('prenom', 'Tahar', time() + 365 * 24 * 3600);
