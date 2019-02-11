<?php include '../partials/header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php include '../functions.php'; ?>

                <?php $ospite = findById($_GET['id']); ?>

                <?php if (!empty($ospite)) { ?>
                    <div class="card">
                      <div class="card-header">
                        <?php echo $ospite['name']; ?> <?php echo $ospite['lastname']; ?>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Data di nascita: <?php echo $ospite['date_of_birth']; ?></li>
                        <li class="list-group-item">Tipo di documento: <?php echo $ospite['document_type']; ?></li>
                        <li class="list-group-item">Numero documento: <?php echo $ospite['document_number']; ?></li>
                        <li class="list-group-item">Tipo di documento: <?php echo $ospite['document_type']; ?></li>
                        <li class="list-group-item">Numero documento: <?php echo $ospite['document_number']; ?></li>
                        <li class="list-group-item">Creato il : <?php echo $ospite['created_at']; ?></li>
                        <li class="list-group-item">Aggiornato il : <?php echo $ospite['updated_at']; ?></li>
                      </ul>
                    </div>
                <?php } else { ?>
                    Id non trovato
                <?php } ?>
            </div>
        </div>
    </div>

<?php include '../partials/footer.php'; ?>
