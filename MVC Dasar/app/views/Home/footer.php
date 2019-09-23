<script type="text/javascript" src="<?= BASE_URL ?>public/js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?= BASE_URL ?>public/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?= BASE_URL ?>public/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?= BASE_URL ?>public/js/mdb.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#myModal").modal('show');
            $(document).on('hidden.bs.modal', '#myModal', function() {
                window.location.replace("<?= BASE_URL ?>Home/index");
            });
        });
    </script>
</body>
</html>