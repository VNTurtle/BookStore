<div class="layout-page">
  <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
      <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
        <i class="bx bx-menu bx-sm"></i>
      </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
      <!-- Search -->
      <div class="navbar-nav align-items-center">
        <div class="nav-item d-flex align-items-center">
          <i class="bx bx-search fs-4 lh-0"></i>
          <input type="text" class="form-control border-0 shadow-none ps-1 ps-sm-2" placeholder="Search..." aria-label="Search..." />
        </div>
      </div>
      <!-- /Search -->

      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <!-- Place this tag where you want the button to render. -->
        <?php
        require_once('Function/db.php');
        require_once('Function/Cancel_requests.php');
        require_once('Function/Invoice.php');
        require_once('Function/Account.php');

        $Lst_cancelinvoice = Cancel_requests::getCancel_requestsByStatus('pending');
        $bankPay = Cancel_requests::getCancel_requestsByStatus('bankpay');

        $count_iv = Invoice::getInvoiceByOrderStatus(1);

        $notifications = [];

        foreach ($Lst_cancelinvoice as $iv) {
          $notifications[] = [
            'type' => 'cancel_request',
            'order_id' => $iv['order_id'],
            'FullName' => $iv['FullName'],
            'Name' => $iv['Name'],
            'Content' => $iv['Content1'],
            'OrderId' => $iv['OrderId'],
          ];
        }
        foreach ($bankPay as $iv) {
          $notifications[] = [
            'type' => 'bankpay',
            'order_id' => $iv['order_id'],
            'FullName' => $iv['FullName'],
            'Name' => $iv['Name'],
            'Content3' => $iv['Content3'],
            'OrderId' => $iv['OrderId'],
            'Total' => $iv['Total'],
          ];
        }

        foreach ($count_iv as $iv) {
          $notifications[] = [
            'type' => 'new_order',
            'Code' => $iv['Code'],
            'ivd_count' => $iv['ivd_count'],
            'IssuedDate' => $iv['IssuedDate'],
            'Total' => $iv['Total'],
          ];
        }
        $total_bank = count($bankPay);
        $total_mess = count($Lst_cancelinvoice);
        $total_items = count($count_iv);
        ?>

        <li class="nav-item lh-1 me-3 position-relative" style="cursor: pointer;">
          <i class='bx bxs-message-rounded-dots' id="mess-icon"></i>
          <?php if ($total_mess + $total_items > 0) : ?>
            <span class="badge bg-danger rounded-circle position-absolute top-0 start-100 translate-middle">
              <?php echo $total_mess + $total_items + $total_bank; ?>
            </span>
          <?php endif; ?>
          <div id="mess-dropdown" class="dropdown-menu-2 dropdown-menu-end" style="display: none; padding: 25px;">
            <h6 class="dropdown-header">Thông báo</h6>
            <div id="mess-content">
              <?php if (!empty($notifications)) : ?>
                <?php foreach ($notifications as $key => $notification) : ?>
                  <div id="mess-item-<?= $key ?>" data-key="<?= $key ?>">
                    <?php if ($notification['type'] == 'bankpay') : ?>
                      <p><strong>Đơn hàng:</strong> <?= $notification['order_id'] ?></p>
                      <p><strong>Người đặt:</strong> <?= $notification['FullName'] ?></p>
                      <p><strong>Yêu cầu hoàn tiền</strong> <?= $notification['Content3'] ?></p>
                      <p><strong>Số tiền:</strong> <?= $notification['Total'] ?> VNĐ</p>
                      <button class="complete-cancel btn btn-primary" data-order-status="5" data-order-id="<?= $notification['order_id'] ?>" data-status="complete">Đã chuyển khoản</button>
                    <?php elseif ($notification['type'] == 'cancel_request') : ?>
                      <p><strong>Đơn hàng:</strong> <?= $notification['order_id'] ?></p>
                      <p><strong>Người đặt:</strong> <?= $notification['FullName'] ?></p>
                      <p><strong>Phương thức thanh toán:</strong> <?= $notification['Name'] ?></p>
                      <p><strong>Lý do hủy:</strong> <?= $notification['Content'] ?></p>
                      <button class="approve-cancel btn btn-primary" data-order-status="5" data-order-id="<?= $notification['order_id'] ?>" data-status="approved">Phê duyệt</button>
                      <button class="reject-cancel btn btn-danger" data-order-status="<?= $notification['OrderId'] ?>" data-order-id="<?= $notification['order_id'] ?>">Từ chối</button>
                    <?php elseif ($notification['type'] == 'new_order') : ?>
                      <p><strong>Đơn hàng mới:</strong> <?= $notification['Code'] ?></p>
                      <p>Số hóa đơn con: <?= $notification['ivd_count'] ?></p>
                      <p>Ngày đặt: <?= $notification['IssuedDate'] ?></p>
                      <p>Tổng tiền: <?= $notification['Total'] ?> VNĐ</p>
                      <a href="index.php?src=admin/invoice/invoice_detail&id_invoice=<?= $notification['Code'] ?>" class="btn btn-sm btn-primary" style="margin-right: 20px;">Xem chi tiết</a>
                      <button class="btn btn-sm btn-primary update-status-btn" data-order-status="2" data-order-id="<?= $notification['Code'] ?>">Xác nhận</button>
                    <?php endif; ?>
                  </div>
                  <div style="border-top: 5px solid #ccc; margin: 10px 0; width: 100%;"></div>
                <?php endforeach; ?>
              <?php else : ?>
                <p>Không có thông báo mới</p>
              <?php endif; ?>
            </div>
          </div>
        </li>


        <!-- User -->
        <?php

        $User = Account::getAccountById($userId);
        ?>
        <li class="nav-item navbar-dropdown dropdown-user dropdown" style="position: relative;">
          <a class="nav-link dropdown-toggle hide-arrow" id="dropdownToggle" style="cursor: pointer;">
            <div class="avatar avatar-online">
              <img src="assets/img/avatar/Admin.jpeg" alt="Avatar" class="w-px-40 h-auto rounded-circle" />
            </div>
          </a>
          <ul id="dropdownMenu" class="dropdown-menu dropdown-menu-end" style="display: none; position: absolute; top: 100%; right: 0;">
            <li>
              <a class="dropdown-item" href="#">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar avatar-online">
                      <img src="assets/img/avatar/Admin.jpeg" alt="Avatar" class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <span class="fw-medium d-block"><?= $User[0]['FullName'] ?></span>
                    <small class="text-muted">Admin</small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li><a class="dropdown-item" href="index.php?src=user/profile"><i class="bx bx-user me-2"></i> My Profile</a></li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li><a class="dropdown-item" href="index.php"><i class="bx bx-user me-2"></i> Home</a></li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li><a class="dropdown-item" href="index.php?logout=true" id="logoutLink""><i class=" bx bx-power-off me-2"></i> Log Out</a></li>
          </ul>
        </li>

        <!--/ User -->
        <script>
          document.getElementById('dropdownToggle').addEventListener('click', function() {
            const dropdownMenu = document.getElementById('dropdownMenu');
            if (dropdownMenu.style.display === 'none' || dropdownMenu.style.display === '') {
              dropdownMenu.style.display = 'block';
            } else {
              dropdownMenu.style.display = 'none';
            }
          });

          // Đóng menu khi nhấn bên ngoài
          document.addEventListener('click', function(event) {
            const dropdownMenu = document.getElementById('dropdownMenu');
            const dropdownToggle = document.getElementById('dropdownToggle');
            if (!dropdownToggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
              dropdownMenu.style.display = 'none';
            }
          });
        </script>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">