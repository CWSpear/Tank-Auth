<?php
if ($login_by_username AND $login_by_email) $login_label = 'Email or Username';
else if ($login_by_username) $login_label = 'Username';
else $login_label = 'Email';

$this->load->view('admin/elements/header') ?>
<div class="container">
    <div class="row">
        <div class="offset2 span8">
            <form action="<?= site_url($this->uri->uri_string()) ?>" class="form-horizontal"  method="post" accept-charset="utf-8">
                <legend>Lost Password Recovery</legend>

                <div class="control-group <?= has_tank_auth_error('login') ?>">
                    <label class="control-label" for="login"><?= $login_label ?></label>
                    <div class="controls">
                        <input type="text" name="login" id="login" value="<?= set_value('login') ?>"> 
                        <?= tank_auth_error('login') ?>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn-primary btn">Get New Password</button>
                    </div>
                </div>     
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('admin/elements/footer') ?>