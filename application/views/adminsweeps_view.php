<div class="container-fluid">
    <div class="row-fluid">
        <div class="span2">
            <ul class="nav nav-list">
                <li class="nav-header">Products</li>
                <li><?php echo anchor('products', 'All Products') ?></li>
                <li class="active"><?php echo anchor('adminsweeps', 'Sweep Products') ?></li>
                <li><?php echo anchor('categories', 'Categories') ?></li>
                <li class="nav-header">Orders</li>
                <li><?php echo anchor('orders', 'Orders') ?></li>
                <li class="nav-header">Members</li>
                <li><?php echo anchor('members', 'Members') ?></li>
            </ul>
        </div>
        <div class="span10">
            <?php if(isset($products)): ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Long Sku</th>
                        <th>Image</th>
                        <th>Gender</th>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Color</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($products as $product): ?>
                    <tr>
                        <td><?php echo $product->long_sku ?></td>
                        <td> <?php echo img(array(
                                'src' => $product->img,
                                'class' => 'img-polaroid',
                                'alt' => $product->name
                            )) ?></td>
                        <td><?php echo $product->gender ?></td>
                        <td><?php echo $product->category ?></td>
                        <td><?php echo $product->name ?></td>
                        <td><?php echo $product->color ?></td>
                        <td><?php echo $product->price ?></td>
                        <td><?php echo anchor('adminsweeps/delete/'.$product->long_sku_id, '<i class="icon-remove"></i>', 'onclick="javascript: return confirm(\'Are you sure want to DELETE it?\');"') ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php endif; ?>
        </div>
    </div>
</div>
    
