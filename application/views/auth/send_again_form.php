<?php $this->load->view('admin/elements/header') ?>
<div class="container">
    <div class="row">
        <div class="offset2 span8">
            <form action="<?= site_url($this->uri->uri_string()) ?>" class="form-horizontal"  method="post" accept-charset="utf-8">
                <legend>Send Confirmation Email Again</legend>

                <div class="control-group <?= has_tank_auth_error('email') ?>">
                    <label class="control-label" for="email">Email Address</label>
                    <div class="controls">
                        <input type="text" name="email" id="email" value="<?= set_value('email') ?>"> 
                        <?= tank_auth_error('email') ?>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn-primary btn">Send Again</button>
                    </div>
                </div>     

            </form>
        </div>
    </div>
</div>
<?php $this->load->view('admin/elements/footer') ?>