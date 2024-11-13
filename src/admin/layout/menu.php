
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
<div class="layout-wrapper layout-content-navbar">
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
          <a href="index.php?folder=admin&template=product/lst_product" class="menu-link">
            <div data-i18n="Without menu">Danh sách SP</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="index.php?folder=admin&template=model/model_product" class="menu-link">
            <div data-i18n="Without navbar">Model sản phẩm</div>
          </a>
        </li>
        <!-- Các mục khác trong Products -->
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
          <a href="index.php?folder=admin&template=invoice/lst_invoice" class="menu-link">
            <div data-i18n="Landing">Hóa đơn</div>
          </a>
        </li>
        <!-- Các mục khác trong Invoice -->
      </ul>
    </li>
  </ul>
</aside>

<script>
  // JavaScript để mở/đóng menu con

</script>
