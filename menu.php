<?php
function generateMenu() {
    $menuItems = [
        ["text" => "Play Game", "link" => "play.php"],
        ["text" => "Settings", "link" => "settings.php"],
        ["text" => "About", "link" => "about.php"]
    ];

    $menuHtml = '';
    foreach ($menuItems as $item) {
        $menuHtml .= '<div class="menu-item"><a href="' . $item['link'] . '">' . $item['text'] . '</a></div>';
    }

    return $menuHtml;
}
?>
