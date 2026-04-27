<?php
/**
 * Универсальный заголовок для внутренних страниц.
 *
 * Ожидает:
 * - $eyebrowKey: ключ короткой подписи над заголовком
 * - $titleKey: ключ основного заголовка страницы
 * - $descriptionKey: ключ описания под заголовком
 */
?>
<!-- Унифицированный заголовок для внутренних страниц:
     маленькая подпись, основной заголовок и короткое описание -->
<div class="panel-header">
    <div>
        <span class="eyebrow"><?= htmlspecialchars(__($eyebrowKey), ENT_QUOTES, 'UTF-8') ?></span>
        <h1><?= htmlspecialchars(__($titleKey), ENT_QUOTES, 'UTF-8') ?></h1>
        <p class="panel-copy"><?= htmlspecialchars(__($descriptionKey), ENT_QUOTES, 'UTF-8') ?></p>
    </div>
</div>
