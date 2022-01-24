<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?= $this->include('admins/layouts/partials/style') ?>
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <title>Edit User | My Growtopia</title>
    </head>
    <body>
        <div class="body-content">
            <?= $this->include('admins/layouts/partials/navbar') ?>
            <header>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="h1">Edit User</h1>
                        </div>
                    </div>
                </div>
            </header>
            <div class="content">
                <div class="container">
                    <?= $this->renderSection('content') ?>
                </div>
            </div>
            <script>
                function onSubmit(token) {
                    document.getElementById("userEdit").submit();
                }
            </script>
            <?= $this->include('admins/layouts/partials/footer') ?>
        </div>
    </body>
</html>