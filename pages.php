<?php require_once( 'acctr/cms.php' ); ?>
  <cms:template title='Pages' clonable='1' commentable='0' order='3'>
  <cms:editable name='page_image' type='image' label='Page Image' />
  <cms:editable name='page_author' type='text' label='Author' />
  <cms:editable name='page_content' type='richtext' label='Content' />
   
</cms:template>

<cms:smart_embed />

<?php COUCH::invoke(); ?>
