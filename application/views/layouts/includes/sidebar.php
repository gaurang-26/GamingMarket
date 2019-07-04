<div class="cart-block">
				<form action="cart/update" method="post">
					<table cellpadding="6" cellspacing="1" style="width:100%" border="0">
						<tr>
							<th>QTY</th>
							<th>Item Description</th>
							<th style="text-align:right">Item Price</th>
						</tr>
						<tr>
						<?php $i = 1; ?>
		<?php foreach ($this->cart->contents() as $items): ?>
			<input type="hidden" name="<?php echo $i.'[rowid]'; ?>" value="<?php echo $items['rowid']; ?>" />
				<tr>
	  				<td><input type="text" name="<?php echo $i.'[qty]'; ?>" value="<?php echo $items['qty']; ?>" maxlength="3" size="5" class="qty" /></td>
	  				<td><?php echo $items['name']; ?></td>
	  				<td style="text-align:right">$<?php echo $this->cart->format_number($items['price']); ?></td>
				</tr>
			<?php $i++; ?>
		<?php endforeach; ?>
		<tr>
  			<td></td>
  			<td class="right"><strong>Total</strong></td>
  			<td class="right" style="text-align:right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
		</tr>
					</table>
				<br>
				<p><button class="btn btn-light" type="submit" style="/*! margin-right: 10px; */margin-left: 40px;/*! margin-left: ; */">Update Cart</button> 
					<a class="btn btn-light" href="cart" style="margin-left: 20px;display: inline-block;">Go To Cart</a></p>
			</form>
		</div>
        <div class="card text-white bg-dark mb-3" style="max-width: 25rem;">
            <div class="card-header">Categories</div>
					 
				
				<!-- List group -->

			
			
		 <ul class="list-group">
		  <?php foreach(get_categories_h() as $category) : ?>
		    
		 <a href="<?php echo base_url(); ?>products/category/<?php echo $category->id;?>" class="list-group-item list-group-item-action" >
						<?php echo $category->name; ?>
                    </a>
        <?php endforeach ?>
                   
                
                
                </ul>
            </div>   
                
                
                
              
		
        
			<div class="card text-white bg-dark mb-3" style="max-width: 25rem;">
                <div class="card-header">Most Poplular</div>
                         
				<!-- List group -->
				<ul class="list-group" id="group2">
				<?php foreach(get_popular_h() as $popular) : ?>
						<li class="list-group-item"><a href="<?php echo base_url(); ?>products/details/<?php echo $popular->id; ?>"><?php echo $popular->title; ?></a></li>
					<?php endforeach; ?>	
				</ul>
            </div>
