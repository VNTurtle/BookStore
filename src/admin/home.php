<?php
require 'src/admin/layout/menu.php';
require 'src/admin/layout/header.php';
require_once('API/Cancel_requests.php');
$Lst_cancel_iv=Cancel_requests::getCancel_requestsByStatus('pending')
?>
<?php 
foreach ($Lst_cancel_iv as $key => $iv) {
    
 ?>
    <div>
        <p>Order ID: <?= $iv['order_id'] ?></p>
        <button class="approve-cancel" data-id="<?= $iv['order_id'] ?>">Phê duyệt</button>
        <button class="reject-cancel" data-id="<?= $iv['order_id'] ?>">Từ chối</button>
    </div>
<?php }?>


<?php
require 'src/admin/layout/footer.php';
?>