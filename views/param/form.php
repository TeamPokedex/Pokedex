<div class="text-center">
    <img src="./public/assets/img/title/parametres.png" alt="Parametres" class="title-image">
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data" novalidate>
                        <div class="form-group fw-semibold mb-4">
                            <label for="pseudo">Nom :</label>
                            <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Choisissez un pseudo..." value="<?= $currentName ?>" required>
                        </div>

                        <div class="form-group fw-semibold mb-4">
                            <label for="icon">Choisissez une icône :</label>
                            <div id="icon-options" class="d-flex justify-content-around flex-wrap">
                                <?php foreach ($icons as $icon) : ?>
                                    <div class="iconContenair">
                                        <img src="public/assets/img/iconeUtilisateur/<?= $icon; ?>" alt="<?= $icon; ?>" class="icon-option <?php if ($icon == $currentIcon) echo 'selected'; ?>" data-icon="<?= $icon; ?>" width="50">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <input type="hidden" name="icon" id="selected-icon" value="<?= $currentIcon; ?>">
                        </div>

                        <div class="form-group fw-semibold mb-4">
                            <label>Choisissez le mode du site :</label>
                            <div class="d-flex justify-content-around align-items-center">
                                <span class="mode-label">Light Mode</span>
                                <input type="checkbox" id="switch" name="mode" <?= $currentMode == 'dark' ? 'checked' : '' ?>>
                                <label for="switch" class="toggle-label">Toggle</label>
                                <span class="mode-label">Dark Mode</span>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-warning btn-block fw-bold">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>