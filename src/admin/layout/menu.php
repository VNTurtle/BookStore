<script>
  var token = localStorage.jwt_token;
  const base64Url = token.split('.')[1];
  const base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
  const jsonPayload = decodeURIComponent(
    atob(base64)
    .split('')
    .map(c => '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2))
    .join('')
  );

  const decoded = JSON.parse(jsonPayload);
  const role = decoded.data.role;
  if (role == 2) {
    alert("Bạn không có quyền truy cập vào trang này.");
    window.location.href = "index.php"; // Redirect to an access denied page
    // Alternatively, you can display a message in place of the page content
    document.getElementById("content").innerHTML = "<p>Bạn không có quyền truy cập vào trang này.</p>";
} 
</script>
<link rel="stylesheet" href="assets/fonts/boxicons.css">
<link rel="stylesheet" href="assets/css/admin_layout.css">
<link rel="stylesheet" href="assets/css/core.css">
<link rel="stylesheet" href="assets/css/theme.css">
<script src="assets/js/helpers.js"></script>
<script src="assets/js/config.js"></script>

<style>
  .menu-sub {
    display: none;
    padding-left: 20px;
  }

  .menu-sub.show {
    display: block;
  }
</style>
<div class="layout-wrapper layout-content-navbar" id="token_role" >
  <div class="layout-container">
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
      <div class="app-brand demo">
        <a href="index.php?folder=admin" class="app-brand-link">
          <span class="app-brand-logo demo">
            <!-- Logo SVG -->
          </span>
          <span class="app-brand-text demo menu-text fw-bold ms-2">Sneat</span>
        </a>
      </div>

      <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item active open">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Dashboards">Dashboards</div>
          </a>
        </li>

        <!-- Products -->
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle" data-toggle="submenu">
            <i class="menu-icon tf-icons bx bx-layout"></i>
            <div data-i18n="Products">Sản phẩm</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="index.php?src=admin/product/lst_product_admin" class="menu-link">
                <div data-i18n="Without menu">Danh sách SP</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="index.php?src=admin/model/model_product" class="menu-link">
                <div data-i18n="Without navbar">Model sản phẩm</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="index.php?src=admin/lst_img/lst_img_product" class="menu-link">
                <div data-i18n="Without navbar">Hình ảnh sản phẩm</div>
              </a>
            </li>
          </ul>
        </li>

        <!-- Invoice -->
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle" data-toggle="submenu">
            <i class="menu-icon tf-icons bx bx-store"></i>
            <div data-i18n="Invoice">Invoice</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="index.php?src=admin/invoice/lst_invoice" class="menu-link">
                <div data-i18n="Landing">Hóa đơn</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="index.php?src=admin/invoice/confirm_invoice" class="menu-link">
                <div data-i18n="Landing">Chờ xác nhận</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="index.php?src=admin/invoice/pickup_invoice" class="menu-link">
                <div data-i18n="Landing">Chờ lấy hàng</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="index.php?src=admin/invoice/transport_invoice" class="menu-link">
                <div data-i18n="Landing">Đang giao hàng</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="index.php?src=admin/invoice/receive_invoice" class="menu-link">
                <div data-i18n="Landing">Đã nhận hàng</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="index.php?src=admin/invoice/cancelled_invoice" class="menu-link">
                <div data-i18n="Landing">Đã hủy</div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </aside>