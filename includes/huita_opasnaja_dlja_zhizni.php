<?php 
function portfolio_meta_box() {  
    add_meta_box(  
        'portfolio_meta_box',
        'Project info',
        'show_my_portfolio_metabox',
        'portfolio',
        'normal',
        'high');
}  
add_action('add_meta_boxes', 'portfolio_meta_box');
?>
<?php
function show_my_portfolio_metabox()
{
    global $post;
    $values = get_post_custom( $post->ID );
    $link = isset( $values['project_link'] ) ? $values['project_link'] : '';
    $mlink = isset( $values['molink'] ) ? $values['molink'] : '';
    $tlink = isset( $values['talink'] ) ? $values['talink'] : '';
    $pclink = isset( $values['perlink'] ) ? $values['perlink'] : '';
     
    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
    ?>
    <p>
        <label for="project_link">Link to project</label>
        <input type="text" name="project_link" id="project_link" value="<?php echo $link; ?>" />
    </p>
    <p>
        <label for="molink">Mobile img link</label>
        <input type="text" name="molink" id="molink" value="<?php echo $mlink; ?>" />
    </p>
    <p>
        <label for="talink">Tablet img link</label>
        <input type="text" name="talink" id="talink" value="<?php echo $tlink; ?>" />
    </p>
    <p>
        <label for="perlink">PC img link</label>
        <input type="text" name="perlink" id="perlink" value="<?php echo $pclink; ?>" />
    </p>
    <p>
        <label for="subtitle">Subtitle</label>
        <input type="text" name="subtitle" id="subtitle" value="<?php echo $pclink; ?>" />
    </p>
     
    <?php    
}
?>
<?php
add_action( 'save_post', 'portfolio_meta_box_save' );
function portfolio_meta_box_save( $post_id )
{
    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
     
    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
     
    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;
     
    // now we can actually save the data
    $allowed = array( 
        'a' => array( // on allow a tags
            'href' => array() // and those anchors can only have href attribute
        )
    );
     
    // Make sure your data is set before trying to save it
    if( isset( $_POST['project_link'] ) )
        update_post_meta( $post_id, 'project_link', wp_kses( $_POST['project_link'], $allowed ) );
    if( isset( $_POST['molink'] ) )
        update_post_meta( $post_id, 'molink', wp_kses( $_POST['molink'], $allowed ) );
    if( isset( $_POST['talink'] ) )
        update_post_meta( $post_id, 'talink', wp_kses( $_POST['talink'], $allowed ) );
    if( isset( $_POST['perlink'] ) )
        update_post_meta( $post_id, 'perlink', wp_kses( $_POST['perlink'], $allowed ) );
    if( isset( $_POST['subtitle'] ) )
        update_post_meta( $post_id, 'subtitle', wp_kses( $_POST['subtitle'], $allowed ) );
}
?>