<?php

$this->extend('plantilla/layout');
$this->section('contentido');

?>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="ratio" style="--bs-aspect-ratio: 54%;">
            <iframe src="<?php echo base_url('reportes/genera_productos'); ?>" title="Reporte de productos"></iframe>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>