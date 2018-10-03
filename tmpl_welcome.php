<?php require_once( 'acctr/cms.php' ); ?>

<cms:template title='Welcome Section' executable='0' order='1' >
    <cms:editable type='text' name='welcome_title' label='Welcome Title' order='1' />
    <cms:editable name='welcome_image' type='image' label='Welcome Image' order='2' />
    <cms:editable name='welcome_text' type='richtext' label='Welcome Text' order='3' />
</cms:template>

<?php COUCH::invoke(); ?>
