<?php $__env->startSection('content'); ?>
    <caption><h2>Sell Bitcoins </h2></caption>
    <table class="table table-striped" id="myTable">
      <thead>
        <tr>
          
          <th>Seller</th>
          
          <th>Payment Method</th>
          
          <th>Price / BTC </th>
          
          <th>Limits</th>
        
        <th></th>
        </tr>
      </thead>
      <tbody>
        <?php //print_r($data);die; ?>
        <?php if(count($data) > 0): ?>
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          
          <?php if($list['trade_type']=="ONLINE_SELL"): ?>
          <tr>
              
            <td><?php echo e($list['username']); ?></td>
            
            <td><?php echo e($list['bank_name']); ?></td>
            
             
            
               <td>
                   
                   <?php
    //
    
    echo  Session::get('sell_rate') * $list['margin'];
    
?> 


<?php echo e($list['currency']); ?> / 1 BTC   </td>


<td> <?php echo e($list['min_trans_limit']); ?> - <?php echo e($list['max_trans_limit']); ?> <?php echo e($list['currency']); ?> 


</td>

<td>
                
              <a href="/p2p/trade/<?php echo e($list['id']); ?>" class="btn btn-outline-dark btn-xs"  >
                   sell
                   
              </i></a>
            </td>
          </tr>
          
           <?php endif; ?>
           
           
           
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
          
        <?php endif; ?>
      </tbody>
    </table><br>
    
    
    
    

<?php $__env->stopSection(); ?>


<?php echo $__env->make('design1layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xpagg/public_html/resources/views/Localbitcoins/sell.blade.php ENDPATH**/ ?>