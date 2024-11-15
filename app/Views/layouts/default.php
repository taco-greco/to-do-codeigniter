<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $this->renderSection('title') ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/vapor/bootstrap.min.css" integrity="sha512-9LoG2EQdcmuEQpzkslqa3whcL8LM+7GGPsW2MK1gRlmiML0G7M5ZPj2aZaW2DyixslBfZoy4kANfP/MYWDCSiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/htmx.org@2.0.0"></script>
</head>
<body hx-boost="true">
    <header class="m-3">
        <h1><a href="<?= url_to("Todos::index") ?>"><?= $this->renderSection('H1') ?></a></h1>
    </header>

    <main class="container">
        <?php if (session()->getFlashdata('errors')) : ?>

            <div class="alert" role="alert">
                <ul>
                    <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                        <li><?= $error; ?></li>
                    <?php endforeach; ?>
                </ul>

            <?php endif; ?>

            <?= $this->renderSection('content') ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>