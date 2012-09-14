<?php
if ($login_by_username AND $login_by_email) $login_label = 'Email or Username';
else if ($login_by_username) $login_label = 'Username';
else $login_label = 'Email';

$this->load->view('admin/elements/header') ?>
<div class="container">
    <div class="row">
        <div class="offset2 span8">
            <form action="<?= site_url($this->uri->uri_string()) ?>" class="form-horizontal"  method="post" accept-charset="utf-8">
                <legend>Log In</legend>

                <div class="control-group <?= has_tank_auth_error('login') ?>">
                    <label class="control-label" for="login"><?= $login_label ?></label>
                    <div class="controls">
                        <input type="text" name="login" id="login" value="<?= set_value('login') ?>"> 
                        <?= tank_auth_error('login') ?>
                    </div>
                </div>

                <div class="control-group <?= has_tank_auth_error('password') ?>">
                    <label class="control-label" for="password">Password</label>
                    <div class="controls">
                        <input type="password" name="password" id="password" value="<?= set_value('password') ?>"> 
                        <?= tank_auth_error('password') ?>
                    </div>
                </div>


                <?php if ($show_captcha): ?>
                    <?php if ($use_recaptcha): ?>
                    <table>
                        <tr>
                            <td colspan="2">
                                <div id="recaptcha_image"></div>
                            </td>
                            <td>
                                <a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
                                <div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
                                <div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="recaptcha_only_if_image">Enter the words above</div>
                                <div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
                            </td>
                            <td><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></td>
                            <td style="color: red;"><?php echo form_error('recaptcha_response_field'); ?></td>
                            <?php echo $recaptcha_html; ?>
                        </tr>
                    </table>
                    <?php else: ?>
                        <p>Enter the code exactly as it appears: <strong><?= $captcha_html ?></strong></p>
                        <div class="control-group <?= has_tank_auth_error('captcha') ?>">
                            <label class="control-label" for="captcha">Confirmation Code</label>
                            <div class="controls">
                                <input type="text" name="captcha" id="captcha"> 
                                <?= tank_auth_error('captcha') ?>
                            </div>
                        </div>
                    <?php endif ?>
                <?php endif ?>

                <div class="control-group">
                    <div class="controls">
                        <label class="checkbox" for="remember">
                            <input type="checkbox" name="remember" id="remember" value="1" <?= set_checkbox('remember', 1) ?>>
                            Remember Me
                        </label>
                    </div>

                    <div class="controls">
                        <button type="submit" class="btn-primary btn">Log In</button>
                    </div>
                </div>     

                <div class="control-group">
                    <div class="controls">
                        <a class="btn" href="<?= site_url('/auth/forgot_password/') ?>">I Forgot My Password</a>

                        <?php if ($this->config->item('allow_registration', 'tank_auth')): ?>
                            <a class="btn" href="<?= site_url('/auth/register/') ?>">Register</a>            
                        <?php endif ?>
                </div>
            </form>
        </div> <!-- .offset2.span10 -->
    </div> <!-- .row -->
</div> <!-- .container -->
<?php $this->load->view('admin/elements/footer') ?>