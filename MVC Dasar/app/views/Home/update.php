<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <?php foreach ($data as $item) : ?>
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold"><?= $item['name'] ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <form action="<?= BASE_URL ?>Home/update" method="post">
                        <div class="md-form mb-0">
                            <input type="text" id="form3" name="name" class="form-control validate" value="<?= $item['name'] ?>">
                            <label data-error="wrong" data-success="right" for="form3">pet name </label>
                        </div>
                        <div class="md-form mb-0">
                            <input type="text" id="form2" name="owner" class="form-control validate" value="<?= $item['owner'] ?>">
                            <label data-error="wrong" data-success="right" for="form2">pet owner </label>
                        </div>
                        <div class="md-form mb-0">
                            <input type="text" id="form2" name="species" class="form-control validate mb-3" value="<?= $item['species'] ?>">
                            <label data-error="wrong" data-success="right" for="form2">species</label>
                        </div>
                        <label data-error="wrong" data-success="right" for="form2"><small class="text-muted">sex</small></label>
                        <div class="md-form mb-4 mt-0">
                            <select name="sex" id="form2" class="form-control validate">
                                <option value="jantan" <?php in_array('jantan', $item) ? print 'selected' : '' ?>>jantan</option>
                                <option value="betina" <?php in_array('betina', $item) ? print 'selected' : '' ?>>betina</option>
                            </select>

                        </div>
                        <div class="md-form mb-0">
                            <input type="date" id="form2" name="birth" class="form-control validate" value="<?= $item['birth'] ?>">
                            <label data-error="wrong" data-success="right" for="form2">birth</label>
                        </div>
                        <div class="md-form mb-0">
                            <input type="date" id="form2" name="death" class="form-control validate" value="<?= $item['death'] ?>">
                            <label data-error="wrong" data-success="right" for="form2">death</label>
                        </div>
                        <button class="btn btn-indigo btn-block">Submit</button>
                </div>
            <?php endforeach ?>
            </form>
        </div>
    </div>
</div>
<a class="dropdown-item" id="updateModal" href="<?= BASE_URL ?>Home/index" data-toggle="modal" data-target="#logoutModal">Logout</a>



<!-- Default form register -->
</main>
<!-- SCRIPTS -->
<!-- JQuery -->