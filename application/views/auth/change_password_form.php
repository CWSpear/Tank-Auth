<?php $maxlength = $this->config->item('password_max_length', 'tank_auth');
$this->load->view('admin/elements/header') ?>
<div class="container">
    <div class="row">
        <div class="offset2 span8">
            <form action="<?= site_url($this->uri->uri_string()) ?>" class="form-horizontal"  method="post" accept-charset="utf-8">
                <legend>Change Password</legend>

                <div class="control-group <?= has_tank_auth_error('old_password') ?>">
                    <label class="control-label" for="old_password">Old Password</label>
                    <div class="controls">
                        <input type="old_password" name="old_password" id="old_password" value="<?= set_value('password') ?>"> 
                        <?= tank_auth_error('old_password') ?>
                    </div>
                </div>

                <div class="control-group <?= has_tank_auth_error('new_password') ?>">
                    <label class="control-label" for="new_password">New Password</label>
                    <div class="controls">
                        <input type="new_password" name="new_password" id="new_password" value="" maxlength="<?= $maxlength ?>"> 
                        <?= tank_auth_error('new_password') ?>
                    </div>
                </div>

                <div class="control-group <?= has_tank_auth_error('confirm_new_password') ?>">
                    <label class="control-label" for="confirm_new_password">Confirm New Password</label>
                    <div class="controls">
                        <input type="confirm_new_password" name="confirm_new_password" id="confirm_new_password" value="" maxlength="<?= $maxlength ?>"> 
                        <?= tank_auth_error('confirm_new_password') ?>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn-primary btn">Change Password</button>
                    </div>
                </div>     

            </form>
        </div>
    </div>
</div>
<?php $this->load->view('admin/elements/footer') ?>