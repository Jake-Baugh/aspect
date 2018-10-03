<?php require_once( 'acctr/cms.php' ); ?>
<cms:smart_embed 'editables' />

<cms:ignore>
/*
 *
 *     Index..
 *         
 *         
 *         */
</cms:ignore>

<cms:set my_debug='0' />
<cms:smart_embed debug=my_debug 'afore' />
<!DOCTYPE html>
<html class="no-js" lang="en">
    <cms:smart_embed debug=my_debug 'headers' /> 
<body class="home-page">
    <cms:smart_embed debug=my_debug 'menu' />
    <cms:smart_embed debug=my_debug 'hero' />
    <cms:smart_embed debug=my_debug 'content' />
    <cms:smart_embed debug=my_debug 'footer' />
</body>
</html>
<?php COUCH::invoke(); ?>
