<?php
require 'src/layout/header.php';
require_once('Function/Account.php');

$User = Account::getAccountById($userId);
?>
<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-body-tertiary rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="index.php?src=user/profile">Hồ sơ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chỉnh sửa hồ sơ</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <!-- Avatar Preview -->
            <img id="avatarPreview" 
                 src="<?= $User[0]['Avatar'] ? 'assets/img/avatar/'.$User[0]['Avatar'] : 'assets/img/avatar/user.jpg' ?>" 
                 alt="avatar" 
                 class="rounded-circle img-fluid" 
                 style="width: 150px;">
            
            <!-- Upload Avatar -->
            <form method="post" enctype="multipart/form-data" action="upload_avatar.php" class="mt-3">
              <label for="avatarUpload" class="btn btn-outline-secondary">Chọn ảnh</label>
              <input type="file" id="avatarUpload" name="avatar" class="d-none" accept="image/*" onchange="previewImage(event)">
              <button type="submit" class="btn btn-primary mt-3">Cập nhật ảnh</button>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <form action="update_profile.php" method="post">
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Họ tên</label>
                <div class="col-sm-9">
                  <input type="text" name="full_name" class="form-control" value="<?= $User[0]['FullName'] ?>" required>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                  <input type="email" name="email" class="form-control" value="<?= $User[0]['Email'] ?>" required>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Địa chỉ</label>
                <div class="col-sm-9">
                  <input type="text" name="address" class="form-control" value="<?= $User[0]['AddRess'] ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9 offset-sm-3">
                  <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                  <a href="profile.php" class="btn btn-secondary">Hủy</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require 'src/layout/footer.php'; ?>