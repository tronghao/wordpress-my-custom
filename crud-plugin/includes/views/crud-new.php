<div class="wrap">
    <h1><?php _e( 'Add New', 'teacher' ); ?></h1>

    <form action="" method="post">

        <table class="form-table">
            <tbody>
                <tr class="row-name">
                    <th scope="row">
                        <label for="name"><?php _e( 'Name', 'teacher' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="name" id="name" class="regular-text" placeholder="<?php echo esc_attr( '', 'teacher' ); ?>" value="" />
                    </td>
                </tr>
             </tbody>
        </table>

        <input type="hidden" name="field_id" value="0">

        <?php wp_nonce_field( 'teacher-new' ); ?>
        <?php submit_button( __( 'Add', 'teacher' ), 'primary', 'Save' ); ?>

    </form>
</div>