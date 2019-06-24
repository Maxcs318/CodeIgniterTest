<div class="container">

    <div class="col-lg-12">

    <?php 
        // echo 'Test print_r'.'<br>';
        // print_r($member);
        // echo '<br><hr>';    
    ?>  
        <br>
        <table style="width:100%; display:show">
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Username</th>
                <th>Status</th>
                <th>Phone</th>
                <th>E-mail</th>
                <?php if($_SESSION['status']=='God' && $_SESSION['status2']=='God'){ ?>
                <th><center>Delete Member</center></th>
                <?php } ?>
            </tr>
        <?php
        foreach ($member as $key) {
            echo '<tr>';
            echo '<td>'.$key->m_id.'</td>' ;
            echo '<td>'.$key->m_firstname.'</td>' ;
            echo '<td>'.$key->m_lastname.'</td>' ;
            echo '<td>'.$key->m_username.'</td>' ;
            echo '<td>'.$key->m_status.'</td>' ;
            echo '<td>'.$key->m_phone.'</td>' ;
            echo '<td>'.$key->m_email.'</td>' ;
            if($_SESSION['status']=='God' && $_SESSION['status2']=='God'){
            echo '<td>';
                ?>
                <button class='form-control btn-danger'>Delete</button>
                <?php
            echo '</td>';
            }
            echo '</tr>';

        }
        ?>
        </table>
    </div>
</div>