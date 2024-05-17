<?= $this->extend('layouts/default'); ?>

<?= $this->section('title'); ?>TodoApp<?= $this->endSection(); ?>

<h1><?= $this->section('H1'); ?>TodoApp<?= $this->endSection(); ?></h1>

<?= $this->section('content'); ?>

<a role="button" class="btn btn-primary m-4" hx-get="<?= url_to("Todos::new") ?>" hx-target="#create-form">New Item</a>

<div id="create-form"></div>

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
        <tbody class="table-group-divider">
            <?php foreach ($data as $item) : ?>
                <tr class="<?= $item['status'] === 'completed' ? 'text-decoration-line-through' : ''; ?>">
                    <td><?= esc($item['title']) ?></td>
                    <td><?= esc($item['description']) ?></td>
                    <td><?= $item['status']; ?></td>
                    <td><?= $item['created_at']; ?></td>
                    <td><?= $item['updated_at']; ?></td>
                    <td><a hx-get="<?= url_to("Todos::edit", $item['id']); ?>" hx-target="#modify-form" role="button" class="btn btn-secondary">Modify</a></td>
                    <div id="modify-form"></div>
                    <td>
                        <form action="<?= url_to("Todos::delete", $item['id']); ?>" method="POST">
                            <input type="hidden" name="_method" value="DELETE" />
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>