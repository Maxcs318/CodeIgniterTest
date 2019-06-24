<div class="container">
    <div class="row">
        <div class="col-lg-12 col-xs-12"> <br>
            <center><h2>Edit Profile</h2></center>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-xs-12"></div>
        <div class="col-lg-4 col-xs-12"> <br>

        <?php
        foreach ($myID as $key) {
            
            $key->m_id;
            $key->m_firstname;
            $key->m_lastname;
            $key->m_username;
            $key->m_status;
            $key->m_phone;
            $key->m_email;
            $key->m_password;

        }        
        ?>
        <form method="POST" action="<?php echo base_url('actor/do_edit'); ?>" >
            <b>Firstname</b>
            <input type="text" class="form-control" name="firstname" value="<?php echo $key->m_firstname; ?>">
            <b>Lastname</b>
            <input type="text" class="form-control" name="lastname" value="<?php echo $key->m_lastname; ?>">
            <b>Phone</b>
            <input type="text" class="form-control" name="phone" value="<?php echo $key->m_phone; ?>">
            <b>E-mail</b>
            <input type="text" class="form-control" name="email" value="<?php echo $key->m_email; ?>">
            <b>Username</b>
            <input type="text" class="form-control" name="username" value="<?php echo $key->m_username; ?>">
            <b>Password</b>
            <input type="text" class="form-control" name="password" value="<?php echo $key->m_password; ?>">
            
            
            <br>
            <button type="submit" class="form-control btn-primary"> Save </button>
        
        </form>

        </div>
        <div class="col-lg-4 col-xs-12"></div>
            
    </div>
</div>