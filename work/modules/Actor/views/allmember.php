<div class="container">

    <div class="col-lg-12">

    <?php 
        echo 'Test print_r'.'<br>';
        print_r($member);
        echo '<br><hr>';    
    ?>
        <table style="width:100%; display:show">
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Username</th>
                <th>Status</th>
                <th>Phone</th>
                <th>E-mail</th>

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
            echo '</tr>';

        }
        ?>

        </table>
    </div>
</div>