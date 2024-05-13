<?= $this->extend('layouts/default'); ?>

<?= $this->section('title'); ?>TodoApp<?= $this->endSection(); ?>

<h1><?= $this->section('H1'); ?>TodoApp<?= $this->endSection(); ?></h1>


<?= $this->section('content'); ?>

<a role="button" class="btn btn-primary m-4" hx-get="<?= url_to("Todos::new") ?>" hx-target="#form-container">New Item</a>

<div id="form-container"></div>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $item): ?>
            <tr>
                <td><?= $item['id']; ?></td>
                <td><?= $item['title']; ?></td>
                <td><?= $item['description']; ?></td>
                <td><?= $item['status']; ?></td>
                <td><?= $item['created_at']; ?></td>
                <td><?= $item['updated_at']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection(); ?>