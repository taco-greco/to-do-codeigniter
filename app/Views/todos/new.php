<?= $this->extend('layouts/default'); ?>

<?= $this->section('title'); ?>New ToDo<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

    <h1>New Todo</h1>
    <?= form_open("todos"); ?>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status">
                <option value="pending">Pending</option>
                <option value="completed">Completed</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?= $this->endSection(); ?>