<?php
$categories = include __DIR__ . '/../data/category.php';
?>

<ul class="gdgnb_ctg_list depth1" role="menu">
    <?php foreach ($categories as $depth1): ?>
        <li class="gdgnb_ctg_menu" role="none">
            <a href="#" role="menuitem" aria-haspopup="true" aria-expanded="false">
                <div class="title">
                    <i class="ico <?= htmlspecialchars($depth1['icon']) ?>" aria-hidden="true"></i>
                    <span><?= htmlspecialchars($depth1['name']) ?></span>
                </div>
            </a>

            <?php if (!empty($depth1['sub'])): ?>
                <div class="gdgnb_ctg_subarea depth2" role="menu">
                    <ul class="gdgnb_ctg_submenu">
                        <?php foreach ($depth1['sub'] as $depth2): ?>
                            <li class="gdgnb_ctg_submn" role="none">
                                <a href="#" class="gdgnb_ctg_sublink" role="menuitem" aria-haspopup="<?= !empty($depth2['sub']) ? 'true' : 'false' ?>" aria-expanded="false" tabindex="0">
                                    <span><?= htmlspecialchars($depth2['name']) ?></span>
                                </a>

                                <?php if (!empty($depth2['sub'])): ?>
                                    <div class="gdgnb_ctg_subarea depth3" role="menu">
                                        <ul class="gdgnb_ctg_submenu">
                                            <?php foreach ($depth2['sub'] as $depth3): ?>
                                                <li class="gdgnb_ctg_submn" role="none">
                                                    <a href="#" class="gdgnb_ctg_sublink" role="menuitem" tabindex="0">
                                                        <span><?= htmlspecialchars($depth3) ?></span>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>

                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

        </li>
    <?php endforeach; ?>
</ul>
