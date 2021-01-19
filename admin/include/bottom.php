<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Voulez-vous vraiment vous déconnecter</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Choissisez "Se déconnecter" si vous souhaitez quitter la session</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Retour</button>
                <a class="btn btn-primary" href="<?= URL_ADMIN ?>action.php?logout=true">Se déconnecter</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= URL_ADMIN; ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= URL_ADMIN; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= URL_ADMIN; ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= URL_ADMIN; ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= URL_ADMIN; ?>vendor/chart.js/Chart.min.js"></script>
<script src="<?= URL_ADMIN; ?>vendor/select2/dist/js/select2.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= URL_ADMIN; ?>js/demo/chart-area-demo.js"></script>
<script src="<?= URL_ADMIN; ?>js/demo/chart-pie-demo.js"></script>
<script src="<?= URL_ADMIN; ?>vendor/ckeditor/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="<?= URL_ADMIN; ?>js/myJs.js"></script>


</body>

</html>