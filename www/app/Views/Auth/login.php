<?= $this->extend('layout/default'); ?>
<?= $this->section('title'); ?>Login<?= $this->endSection() ?>
<?= $this->section('content'); ?>

<section class="h-100 my-5" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">

              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-2 order-lg-1">

                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                  class="img-fluid" alt="Sample image">

              </div>

              <div class="col-md-10 col-lg-6 col-xl-5 order-1 order-lg-2">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>

                <?= form_open('auth/validateLogin', ['autocomplete' => 'off'])?>
                
                  <?= csrf_field(); ?> <!-- CSRF protection (security) -->

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <?=form_input('',set_value('ac'),['name' => 'ac', 'id' => 'ac', 'class' => 'form-control'],'text')?>
                      <label class="form-label" for="form3Example1c">Account</label>
                      <!-- <span class="error"><?= isset($validation) ? displayErr($validation, 'ac') : '' ?></span> -->
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <?=form_password('',set_value('pw'),['name' => 'pw', 'id' => 'pw', 'class' => 'form-control'])?>
                      <label class="form-label" for="form3Example4c">Password</label>
                      <!-- <span class="error"><?= isset($validation) ? displayErr($validation, 'pw') : '' ?></span> -->
                    </div>
                  </div>

                  <?php if(isset($validation)): ?>
                    <div class="alert alert-danger" role="alert">
                      <?= $validation->listErrors() ?>
                    </div>
                  <?php endif; ?>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <?= form_submit('','LOGIN',['class' => 'btn btn-primary btn-lg'])?>
                  </div>

                <?=form_close()?>

                <a href="<?=base_url('auth/forgetPw')?>" class="text-center">Forget password? Reset Password.</a>

              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>