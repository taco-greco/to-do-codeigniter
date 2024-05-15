<?= $this->extend('layouts/default'); ?>

<?= $this->section('title'); ?>New ToDo<?= $this->endSection(); ?>

<?= $this->section('content'); ?>


<div class="card border-primary mb-4">
    <h1 class="card-header">Modify Todo</h1>
    <div class="card-body">
    <?= form_open("todos/".$todo['id']) ?>
        <input type="hidden" name="_method" value="PUT">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?= $todo['title']; ?>">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description"><?= $todo['description']; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status">
                <option value="pending" <?= $todo['status'] == 'pending' ? 'selected' : ''; ?>>Pending</option>
                <option value="completed" <?= $todo['status'] == 'completed' ? 'selected' : ''; ?>>Completed</option>
            </select>
        </div>
        <input type="hidden" name="updated_at" value="<?= date('Y-m-d H:i:s'); ?>">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</div>

    <?= $this->endSection(); ?>