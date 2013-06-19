<div class="container">
<?php echo anchor('products', '<i class="icon-arrow-left"></i>Back to List', 'class="btn"') ?>
<?php echo form_open('products/update/'.$product->long_sku_id) ?>
        <p>
            <label for="long_sku_id">Long Sku ID</label>
            <input type="text" name="long_sku_id1" id="long_sku_id1" maxLength="3" class="threeCharWidth" value="<?php echo substr($product->long_sku, 0, 3) ?>" />-
            <input type="text" name="long_sku_id2" id="long_sku_id2" maxLength="3" class="threeCharWidth" value="<?php echo substr($product->long_sku, 4, 3) ?>"/>-
            <input type="text" name="long_sku_id3" id="long_sku_id3" maxLength="4" class="fourCharWidth" value="<?php echo substr($product->long_sku, 8, 4) ?>"/>-
            <input type="text" name="long_sku_id4" id="long_sku_id4" maxLength="3" class="threeCharWidth" value="<?php echo substr($product->long_sku, 13, 3) ?>"/>
        </p>
        <p>
            <label for="gender">Gender</label>
            <select id="gender" name="gender">
                <option value="--" <?php echo $product->gender == '--' ? "selected":"";?>>--</option>
                <option value="MALE" <?php echo $product->gender == 'MALE' ? "selected":"";?>>MALE</option>
                <option value="FEMALE" <?php echo $product->gender == 'FEMALE' ? "selected":"";?>>FEMALE</option>
            </select>
        </p>
        <p>
            <label for="category_id">Category ID</label>
            <select id="category_id" name="category_id">
                <option value="--" <?php echo $product->category_id == 0 ? "selected":"";?>>--</option>  
                <?php foreach($categories as $category): ?>
                <option value="<?php echo $category->category_id ?>"  <?php echo $product->category_id == $category->category_id ? "selected":"";?>><?php echo $category->category ?></option>
                <?php endforeach; ?>
            </select>
        </p>
        <p>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?php echo $product->name ?>" />
        </p>
        <p>
            <label for="color">Color</label>
            <input type="text" name="color" id="color" value="<?php echo $product->color ?>" />
        </p>
        <p>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" value="<?php echo $product->price ?>" />
        </p>
        <p>
            <label for="img">Image Path</label>
            <input type="text" name="img" id="img" class="longWidth" value="<?php echo $product->img ?>" />
            <?php echo img(array(
                'src' => $product->img,
                'class' => 'img-polaroid',
                'alt' => $product->name
            )) ?>
        </p>
        <p>
            <label for="url">URL</label>
            <input type="text" name="url" id="url" class="longWidth" value="<?php echo $product->url ?>" />
        </p>
        <p>
            <label for="onsweep">Put on Sweep List</label>
            <input type="checkbox" name="onsweep" id="onsweep" <?php echo $product->onsweep == 1 ? "checked='checked'" : "" ?> /> On Sweep
        </p>
        <p>
            <input type="submit" value="Submit" class="btn btn-primary" />
        </p>
<?php echo form_close() ?>
</div>