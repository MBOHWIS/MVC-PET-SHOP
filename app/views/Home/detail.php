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
                    <table>
                        <tr>
                            
                            <th>name : </th>
                            <td><?= $item['name'] ?></td>
                        </tr>
                        <tr>
                            <th>owner : </th>
                            <td><?= $item['owner'] ?></td>
                        </tr>
                        <tr>
                            <th>species : </th>
                            <td><?= $item['species'] ?></td>
                        </tr>
                        <tr>
                            <th>sex : </th>
                            <td><?= $item['sex'] ?></td>
                        </tr>
                        <tr>
                            <th>birth : </th>
                            <td><?= $item['birth'] ?></td>
                        </tr>
                        <tr>
                            <th>death : </th>
                            <td><?= $item['death'] ?></td>
                        </tr>
                    </table>

                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<a class="dropdown-item" id="updateModal" href="<?= BASE_URL ?>Home/index" data-toggle="modal" data-target="#logoutModal">Logout</a>



<!-- Default form register -->
</main>
<!-- SCRIPTS -->
<!-- JQuery -->