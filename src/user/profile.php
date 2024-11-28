<?php
require 'src/layout/header.php';
require_once('API/Account.php');

$User = Account::getAccountById($userId);
?>
 <section style="background-color: #eee;">
        <div class="container py-5">
          <div class="row">
            <div class="col">
              <nav aria-label="breadcrumb" class="bg-body-tertiary rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
              </nav>
            </div>
          </div>
      
          <div class="row">
            <div class="col-lg-4">
              <div class="card mb-4">
                <div class="card-body text-center">
                  <?php if ($User[0]['Avatar'] ==null) {
                    echo
                    '<img src="assets/img/avatar/user.jpg" alt="avatar"
                    class="rounded-circle img-fluid" style="width: 150px;">';
                  }else{
                    echo '<img src="assets/img/avatar/'. $User[0]['Avatar'] .
                    '" alt="avatar"
                    class="rounded-circle img-fluid" style="width: 150px;">';
                    
                  }?>
                  
                  <h5 class="my-3"><?= $User[0]['FullName'] ?></h5>
                  <div class="d-flex justify-content-center mb-2">
                    <a href="index.php?src=user/edit_profile" type="button" class="btn btn-outline-primary ms-1">Chỉnh sửa</a>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-lg-8">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Họ tên</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?= $User[0]['FullName'] ?></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?= $User[0]['Email'] ?></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Địa chỉ</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?= $User[0]['AddRess'] ?></p>
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </section>
<?php
require 'src/layout/footer.php';
?>