<?= $this->extend('layouts/default'); ?>


<?= $this->section('title'); ?>TodoApp<?= $this->endSection(); ?>

<h1><?= $this->section('H1'); ?>TodoApp<?= $this->endSection(); ?></h1>

<?= $this->section('content'); ?>

<?php if (session()->get('success')) : ?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <?= session()->get('success') ?>
    </div>
<?php endif; ?>
<?php if (session()->get('update')) : ?>
    <div class="alert alert-secondary alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <?= session()->get('update') ?>
    </div>
<?php endif; ?>
<?php if (session()->get('delete')) : ?>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <?= session()->get('delete') ?>
    </div>
<?php endif; ?>

<a role="button" class="btn btn-primary m-4" hx-get="<?= url_to("Todos::new") ?>" hx-target="#create-form" hx-trigger="click, keyup[ctrlKey && altKey && key == 'l'] from:body">New Item (Ctrl + Alt + L)</a>

<div id="create-form"></div>
<div class="table-responsive">
    <table class="table table-sm table-dark table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Modified At</th>
                <th>Status</th>
                <th>Modify</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php $counter = 1;
            foreach ($data as $item) : ?>
                <tr class="<?= $item['status'] === 'completed' ? 'text-decoration-line-through' : ''; ?>">
                    <td><?= $counter++; ?></td>
                    <td><?= esc($item['title']) ?></td>
                    <td><?= esc($item['description']) ?></td>
                    <td><?= $item['status']; ?></td>
                    <td><?= $item['created_at']; ?></td>
                    <td><?= $item['updated_at']; ?></td>
                    <td><a hx-get="<?= url_to("Todos::edit", $item['id']); ?>" hx-target="#modify-form" role="button" class="btn btn-secondary">Modify</a></td>
                    <div id="modify-form"></div>
                    <td>
                    <button hx-target="body" hx-delete="<?= url_to("Todos::delete", $item['id']); ?>" class="btn btn-danger">Delete</button>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>