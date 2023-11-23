<?= $this->extend('layouts/index');?>
<?= $this->section('content');?>
    <div class="background-log" style="background: url('<?= base_url('assets/img/log-bg.png')?>') no-repeat center; background-size: cover;"></div>
    <div class="content-log" style="background: url('<?= base_url('assets/img/log-bg.png')?>') no-repeat center; background-size: cover;">
      <div class="content">
        <h2 class="logo">Sneakers e-Commerce</h2>

        <div class="text-sci">
          <h2>Become<br /><span>a Seller</span></h2>
          <p>
            Start exploring today and find the shoes that will make you feel<br />
            confident, and ready to conquer the world.
          </p>
          <div class="social-icons">
            <a href="#"><i class="bx bxl-facebook"></i></a>
            <a href="#"><i class="bx bxl-instagram"></i></a>
            <a href="#"><i class="bx bxl-twitter"></i></a>
          </div>
        </div>
      </div>
      <div class="logreg-box">
        <div class="form-box login">
        <form action="<?= url_to('registerSeller') ?>" method="post" class="user">
            <?= csrf_field() ?>
            <h2><?=lang('Auth.register')?></h2>

            <?= view('Myth\Auth\Views\_message_block') ?>

            <div class="form-floating">
                <span class="icon"><i class="bx bxs-envelope"></i></span>
                <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" id="floatingInput" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                <label for="floatingInput"><?=lang('Auth.email')?></label>
            </div>

            <div class="form-floating">
                <span class="icon"><i class="bx bxs-user"></i></span>
                <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" id="floatingInput" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                <label for="floatingInput"><?=lang('Auth.username')?></label>
            </div>

            <div class="form-floating">
                <span class="icon"><i class="bx bxs-lock-alt"></i></span>
                <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="floatingPassword" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                <label for="floatingPassword"><?=lang('Auth.password')?></label>
            </div>

            <div class="form-floating">
                <span class="icon"><i class="bx bxs-lock-alt"></i></span>
                <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" id="floatingRepeatPassword" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                <label for="floatingRepeatPassword"><?=lang('Auth.repeatPassword')?></label>
            </div>

            <button type="submit" class="btn w-100 btn-dark"><?=lang('Auth.register')?></button>

            <div class="login-register">
              <p>
              <?=lang('Auth.alreadyRegistered')?> <a href="<?= url_to('login') ?>"><?=lang('Auth.signIn')?></a>
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
<?= $this->endSection();?>
