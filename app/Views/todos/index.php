<?= $this->extend('layouts/default'); ?>

<?= $this->section('title'); ?>TodoApp<?= $this->endSection(); ?>

<h1><?= $this->section('H1'); ?>TodoApp<?= $this->endSection(); ?></h1>

<?= $this->section('content'); ?>

<a role="button" class="btn btn-primary m-4" hx-get="<?= url_to("Todos::new") ?>" hx-target="#form-container">New Item</a>

<div id="form-container"></div>

<div class="table-responsive">
    <table class="table table-sm table-dark table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Modified At</th>
                <th>Status</th>
                <th>Modify</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $item) : ?>
                <tr class="<?= $item['status'] === 'completed' ? 'text-decoration-line-through' : ''; ?>">
                    <td><?= $item['title']; ?></td>
                    <td><?= $item['description']; ?></td>
                    <td><?= $item['status']; ?></td>
                    <td><?= $item['created_at']; ?></td>
                    <td><?= $item['updated_at']; ?></td>
                    <td><a href="<?= url_to("Todos::edit", $item['id']); ?>" role="button" class="btn btn-secondary">Modify</a></td>
                    <td><a href="<?= url_to("Todos::edit", $item['id']); ?>" role="button" class="btn btn-danger">Delete</a></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>