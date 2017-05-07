<?php if (!defined( 'BASEPATH ')) exit( 'No direct script access allowed '); ?>
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1><?php echo $title; ?> <small><?php echo $subtitle; ?></small></h1>
        </div>

    </div>

    <div class="row">
        <div class="col-md-12">
            <?php if (validation_errors()): ?>
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span> </button>
                <strong>Warning !</strong> <?php echo validation_errors(); ?>
            </div>
            <?php
            endif;
            echo form_open( 'operacie/edit/ '.$objednavky_item[ 'ID '],array( 'class '=> 'form_horizontal '));?>
        <div class="form-group">
            <?php foreach ($objednavky_item as $key => $value):?>
            <div class="form-group">
                <label for="<?php echo $key; ?>" class="col-sm-2 control-label"><?php echo $key;?></label>
                <div class="col-sm-10">
                    <input type="input" class="form-control" id ="<?php echo $key; ?>" name="<?php echo $key;?>" value="<?php echo $value;?>" placeholder="<?php echo $value;?>">
                </div>
            </div>
            <?php endforeach;?>
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-default" name="submit" value="Edit news item"/>
            </div>
        </div>
            <?php echo form_close();?>
        </div>
    </div>


</div>
