<div class="page-header">
    <h2><?= t('My activity stream') ?></h2>
    <?php if (!$events->isEmpty()): ?>
    <ul>
        <li>
            <?= $events->order(t('Order by Date'), 'id') ?>
        </li>
        <li>
            <?= $events->order(t('Order by Task'), 'task_id') ?>
        </li>
    </ul>
    <?php endif ?>
</div>
<?= $this->render('event/events', array('events' => $events)) ?>