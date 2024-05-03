<?= $this->extend('layouts/default'); ?>

<?= $this->section('title'); ?>TodoApp<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<a role="button" class="btn btn-primary m-4" href="<?= url_to("Todos::new") ?>">New Item</a>

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