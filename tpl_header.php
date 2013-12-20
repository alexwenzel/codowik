<?php if (!defined('DOKU_INC')) die(); ?>

<div id="dokuwiki__header"><div class="pad group">

<?php tpl_includeFile('header.html') ?>

<div class="tools group">
    <!-- USER TOOLS -->
    <?php if ($conf['useacl']): ?>
        <div id="dokuwiki__usertools">
            <h3 class="a11y"><?php echo $lang['user_tools']; ?></h3>
            <ul>
                <?php
                    if (!empty($_SERVER['REMOTE_USER'])) {
                        echo '<li class="user">';
                        tpl_userinfo(); /* 'Logged in as ...' */
                        echo '</li>';
                    }
                    tpl_action('admin', 1, 'li');
                    tpl_action('profile', 1, 'li');
                    tpl_action('register', 1, 'li');
                    tpl_action('login', 1, 'li');
                ?>
            </ul>
        </div>
    <?php endif ?>
</div>

<!-- BREADCRUMBS -->
<?php if($conf['breadcrumbs'] || $conf['youarehere']): ?>
    <div class="breadcrumbs">
        <?php if($conf['youarehere']): ?>
            <div class="youarehere"><?php tpl_youarehere() ?></div>
        <?php endif ?>
        <?php if($conf['breadcrumbs']): ?>
            <div class="trace"><?php tpl_breadcrumbs() ?></div>
        <?php endif ?>
    </div>
<?php endif ?>

<?php html_msgarea() ?>

<hr class="a11y" />

</div></div>