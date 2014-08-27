<?php $this->load->view('header'); ?>
<div class="container-fluid">
    <div class="col-lg-4 pull-right">
        <div class="input-group">
            <input type="text" class="form-control search-text">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
            </span>
        </div>
    </div>
    <br/>
    <div class="row col-lg-12">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 product_categories">
            <h3 class="text-center">Categories</h3>   
            <ul class="">
                <li class="btn btn-default"><a href="<?php echo base_url() ?>product/products/1">Category1</a></li>
                <li class="btn btn-default"><a href="<?php echo base_url() ?>product/products/2">Category2</a></li>
                <li class="btn btn-default"><a href="<?php echo base_url() ?>product/products/3">Category3</a></li>
                <li class="btn btn-default"><a href="<?php echo base_url() ?>product/products/4">Category4</a></li>
                <li class="btn btn-default"><a href="<?php echo base_url() ?>product/products/5">Category5</a></li>
                <li class="btn btn-default"><a href="<?php echo base_url() ?>product/products/6">Category6</a></li>
            </ul>
        </div>  
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">   
            <div class="row">
                <div class="col-lg-4">
                    <div class="well">
                        <img src="<?php echo base_url(); ?>assets/images/suryamala.jpeg" alt="" class="img-responsive img-thumbnail"/>
                        <h4 class="text-center">Product1</h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="well">
                        <img src="<?php echo base_url(); ?>assets/images/suryamala.jpeg" alt="" class="img-responsive img-thumbnail"/>
                        <h4 class="text-center">Product1</h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="well">
                        <img src="<?php echo base_url(); ?>assets/images/suryamala.jpeg" alt="" class="img-responsive img-thumbnail"/>
                        <h4 class="text-center">Product1</h4>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col-lg-4">
                    <div class="well">
                        <img src="<?php echo base_url(); ?>assets/images/suryamala.jpeg" alt="" class="img-responsive img-thumbnail"/>
                        <h4 class="text-center">Product1</h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="well">
                        <img src="<?php echo base_url(); ?>assets/images/suryamala.jpeg" alt="" class="img-responsive img-thumbnail"/>
                        <h4 class="text-center">Product1</h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="well">
                        <img src="<?php echo base_url(); ?>assets/images/suryamala.jpeg" alt="" class="img-responsive img-thumbnail"/>
                        <h4 class="text-center">Product1</h4>
                    </div>
                </div>
            </div>
        </div>    
    </div>    
</div>
<?php $this->load->view('footer'); ?>   