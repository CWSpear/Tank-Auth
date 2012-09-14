<?php $this->load->view('admin/elements/header') ?>
<div class="container">
    <div class="row">
        <div class="offset2 span8">
            <form action="<?= site_url($this->uri->uri_string()) ?>" class="form-horizontal"  method="post" accept-charset="utf-8">
                <legend>Delete Account</legend>

                <div class="control-group <?= has_tank_auth_error('password') ?>">
                    <label class="control-label" for="password">Password</label>
                    <div class="controls">
                        <input type="password" name="password" id="password" value=""> 
                        <?= tank_auth_error('password') ?>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn-primary btn">Delete Account</button>
                    </div>
                </div>     

            </form>
        </div>
    </div>
</div>
<?php $this->load->view('admin/elements/footer') ?>