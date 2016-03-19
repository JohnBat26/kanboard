<section class="accordion-section <?= empty($files) && empty($images) ? 'accordion-collapsed' : '' ?>">
    <div class="accordion-title">
        <h3><a href="#" class="fa accordion-toggle"></a> <?= t('Attachments') ?></h3>
    </div>
    <div class="accordion-content">
        <?php if ($this->user->hasProjectAccess('ProjectFile', 'create', $project['id'])): ?>
        <p style="margin-bottom: 15px;">
            <i class="fa fa-plus fa-fw"></i>
            <?= $this->url->link(t('Upload a file'), 'ProjectFile', 'create', array('project_id' => $project['id']), false, 'popover') ?>
        </p>
        <?php endif ?>

        <?= $this->render('project_overview/images', array('project' => $project, 'images' => $images)) ?>
        <?= $this->render('project_overview/files', array('project' => $project, 'files' => $files)) ?>
    </div>
</section>