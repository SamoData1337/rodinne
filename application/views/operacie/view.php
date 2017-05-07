<?php if (!defined(´BASEPATH´)) exit(´No direct script access allowed´); ?>
<table>
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1><?php echo $title; ?><small> <?php echo $subtitle;?></small></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php foreach ($objednavky_item as $key => $value):?>
                    <div>
                        <dl class="dl-horizontal">
                            <dt><?php echo $key;?></dt>
                            <dd><?php echo $value; ?></dd>
                        </dl>
                    </div>
                    <?php endforeach; ?>
                </div>

            </div>
</table>
        </div>
<div class="col-md-4">
    <button type="button" class="btn btn-default" onclick="javascript:window.history.go(-1);>Spat</button>"
</div>
    </div>
<div class="row">

</div>



</div>
