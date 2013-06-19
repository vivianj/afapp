<div class="container">
    <div class="alert alert-error" >
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <div id="validationerrors"><?php echo validation_errors(); ?></div>
    </div>
    <?php echo anchor('products', '<i class="icon-arrow-left"></i>Back to List', 'class="btn"') ?>
    <?php echo form_open('products/create') ?>
        <p>
            <label for="long_sku_id">Long Sku ID</label>
            <input type="text" name="long_sku_id1" id="long_sku_id1" maxLength="3" class="threeCharWidth" />-
            <input type="text" name="long_sku_id2" id="long_sku_id2" maxLength="3" class="threeCharWidth" />-
            <input type="text" name="long_sku_id3" id="long_sku_id3" maxLength="4" class="fourCharWidth" />-
            <input type="text" name="long_sku_id4" id="long_sku_id4" maxLength="3" class="threeCharWidth" />
        </p>
        <p>
            <label for="gender">Gender</label>
            <select id="gender" name="gender">
                <option value="--">--</option>
                <option value="MALE">MALE</option>
                <option value="FEMALE">FEMALE</option>
            </select>
        </p>
        <p>
            <label for="category_id">Category ID</label>
            <select id="category_id" name="category_id">
                <option value="--">--</option>  
                <?php foreach($categories as $category): ?>
                <option value="<?php echo $category->category_id ?>"><?php echo $category->category ?></option>
                <?php endforeach; ?>
            </select>
        </p>
        <p>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" />
        </p>
        <p>
            <label for="color">Color</label>
            <input type="text" name="color" id="color" />
        </p>
        <p>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" />
        </p>
        <p>
            <label for="img">Image Path</label>
            <input type="text" name="img" id="img" class="longWidth" />
        </p>
        <p>
            <label for="url">URL</label>
            <input type="text" name="url" id="url" class="longWidth" />
        </p>
        <p>
            <label for="onsweep">Put on Sweep List</label>
            <input type="checkbox" name="onsweep" id="onsweep" value="On Sweep" />
        </p>
        <p>
            <input type="submit" value="Submit" class="btn btn-primary" />
        </p>
    <?php echo form_close() ?>
    <script type="text/javascript">
        $(function(){
           if($('#validationerrors').html() == ''){
               $('#validationerrors').parent().hide();
           } 
        });
    </script>
</div>