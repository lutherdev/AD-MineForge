<?php
declare(strict_types=1);

require_once BASE_PATH . '/vendor/autoload.php';

require_once TEMPLATES_PATH . '/head.component.php';
require_once TEMPLATES_PATH . '/foot.component.php';

function renderMainLayout(callable $content, string $title, string $pageCss = ""): void
{
    head($title, $pageCss);
    require_once COMPONENTS_PATH . '/templates/nav.component.php';
    $content();
    footer();
}