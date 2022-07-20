

<?php $__env->startSection('admin_content'); ?>
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>New Products</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">

			  <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="#"><img src=<?php echo e('public/upload/'.$item->mobile_file); ?> alt="" /></a>
					 <h2><?php echo e($item->mobile_name); ?> </h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees"><?php echo e($item->mobile_gia); ?></span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="#">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>	 
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>Feature Products</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				<?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="#"><img src=<?php echo e('public/upload/'.$item->mobile_file); ?> alt="" /></a>					
					 <h2><?php echo e($item->mobile_name); ?></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees"><?php echo e($item->mobile_gia); ?></span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
				
				</div>
			</div>
    </div>
 </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('user_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\relaravel\resources\views/categories/mobile.blade.php ENDPATH**/ ?>