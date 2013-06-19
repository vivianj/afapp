<div class="container">
    <h1>Login</h1>
    <?php
        echo form_open('login/log_in');
        echo form_input('username', '', 'placeholder="Username"');
        echo br();
        echo form_password('password', '', 'placeholder="Password"');
        echo br();
    ?>
    <?php if(isset($error_msg)): ?>
        <div id="errorMsg" class="alert alert-error"><?php echo $error_msg ?></div>
    <?php endif; ?>
    <?php
        echo form_submit('submit', 'Login', 'class="btn btn-primary"');
        echo form_close();
    ?>
</div>