<?php require_once( 'acctr/cms.php' ); ?>
  <cms:template title='Services' clonable='1' commentable='0' order='3'>
  <cms:editable name='svc_icon_name' label='Service Icon Name - see: https://fontawesome.com/v4.7.0/icons/' type='text' />
  <cms:editable name='svc_desc' type='nicedit' label='Description' />
   
</cms:template>

<?php COUCH::invoke(); ?>
