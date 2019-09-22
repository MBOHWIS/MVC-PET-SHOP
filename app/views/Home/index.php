<!--  -->
<main>
    <!-- Default form register -->

    <main class="container w-75 my-3">
        <div class=" h1 mb-5 mx-auto text-center">
            <h1 class="d-inline-block font-weight-bold text-dark border-danger" style="border-bottom:4px solid black;">PET SHOP</h1>
        </div>
        <button data-target="#insertmodal" class="btn btn-indigo" data-toggle="modal">tambah data</button>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr class="d-flex text-center">
                    <th class="col-3">name</th>
                    <th class="col-3">owner</th>
                    <th class="col-2">species</th>
                    <th class="col-4">action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $item) : ?>
                    <tr class="d-flex">
                        <td class="col-3"><?= $item['name'] ?></td>
                        <td class="col-3"><?= $item['owner'] ?></td>
                        <td class="col-2"><?= $item['species'] ?></td>
                        <td class="col-4 text-center"><a class="btn btn-sm btn-primary" href="<?= BASE_URL ?>Home/detail/<?= $item['name'] ?>">detail</a>
                            <a class="btn btn-sm btn-success" href="<?= BASE_URL ?>Home/edit/<?= $item['name'] ?>">update</a>
                            <a class="btn btn-sm btn-danger" href="<?= BASE_URL ?>Home/delete/<?= $item['name'] ?>">delete</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <!-- modal insert -->
        <div class="modal fade" id="insertmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Insert data</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <form action="<?= BASE_URL ?>Home/insert" method="post">
                            <div class="md-form mb-0">
                                <input type="text" id="form3" name="name" class="form-control validate mb-3">
                                <label data-error="wrong" data-success="right" for="form3">pet name </label>
                            </div>
                            <div class="md-form mb-0">
                                <input type="text" id="form2" name="owner" class="form-control validate mb-3">
                                <label data-error="wrong" data-success="right" for="form2">pet owner </label>
                            </div>
                            <div class="md-form mb-0">
                                <input type="text" id="form2" name="species" class="form-control validate mb-3">
                                <label data-error="wrong" data-success="right" for="form2">species</label>
                            </div>
                            <label data-error="wrong" data-success="right" class="my-0" for="form2"><small class="text-muted my-0">sex</small></label>
                            <div class="md-form mt-0">
                                <select name="sex" id="sex" class="form-control mb-3">
                                    <option value="jantan">jantan</option>
                                    <option value="betina">betina</option>
                                </select>
                            </div>
                            <div class="md-form mt-3">
                                <input type="date" id="form2" name="birth" class="form-control validate mb-3 pt-0">
                                <label data-error="wrong" data-success="right" for="form2">birth</label>
                            </div>
                            <div class="md-form mt-3">
                                <input type="date" id="form2" name="death" class="form-control validate mb-3 pt-0">
                                <label data-error="wrong" data-success="right" for="form2">death</label>
                            </div>
                            <button class="btn btn-indigo btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal delete -->
        
</main>
<!-- SCRIPTS -->
<!-- JQuery -->
</main>

<!-- Default form register -->