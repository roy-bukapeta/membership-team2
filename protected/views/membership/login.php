<?php $this->layout('layouts::layout-system'); ?>

<div class="full-width-section parallax full-section-bg">
	<div class="container" style="margin: 0 auto;">
		<div class="dt-sc-clear"></div>                            
		<div class="form-wrapper register" style="margin-top: -150px;">
			<form action="<?php echo $this->uri_path_for('membership-login'); ?>" method="post" novalidate>

				<?php echo $this->insert('sections::flash-message');?>

				<h3 class="aligncenter"> <span> <i class="fa fa-user"></i></span> Login Anggota</h3>

                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="username" class="control-label">Username / Email</label>
                            <input type="username" id="username" name="username" class="form-control" value="<?php echo $this->fh_default_val('email'); ?>" />
                            <p class="help-block">
                                <?php echo $this->fh_show_errors('username', $_view_validation_errors_); ?>
                                Masukkan username.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control" value="<?php echo $this->fh_default_val('email'); ?>" />
                            <p class="help-block">
                                <?php echo $this->fh_show_errors('password', $_view_validation_errors_); ?>
                                Masukkan password.
                            </p>
                        </div>
                    </div>
                    <tr>
                        <td>
                            <input value="Login" class="button" type="submit" />
                        </td>
                    </tr>
                </div>
			</form>
		</div>
	</div>
</div>

<div class="full-width-section">  
	<div class="container"> 
		<div class="dt-sc-margin70"></div>
		<div class="page_info aligncenter">
			<h4 class="title">Bantuan Login?</h4>
			<p>Jika belum terdaftar sebagai anggota, <a href="<?php echo $this->uri_path_for('membership-register'); ?>" title="">Daftar Disini</a> menjadi anggota PHP Indonesia.</p>
			<p>Hilang atau lupa password login, silahkan <a href="<?php echo $this->uri_path_for('membership-forgot-password'); ?>" title="">Reset Password</a> Anda.</p>
		</div>
	</div>
</div>
<div class="dt-sc-margin100"></div>