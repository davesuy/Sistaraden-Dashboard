<?php

Breadcrumbs::for('admin.index', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.index'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
