<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <?php foreach ($data as $item) : ?>
                    <h5 class="modal-title" id="exampleModalLabel">Delete data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                apakah anda yakin ingin menghapus data <b><?= $item['name'] ?></b>
            </div>
            <div class="modal-footer">

                <a class="btn btn-danger" href="<?= BASE_URL ?>Home/deleted/<?= $item['name'] ?>">Delete data</a>
            <?php endforeach ?>
            </div>
        </div>
    </div>
</div>