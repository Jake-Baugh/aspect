<?php require_once( 'acctr/cms.php' ); ?>
  <cms:template title='Pages' clonable='1' commentable='0' order='3'>
  <cms:editable name='page_image' type='image' label='Page Image' />
  <cms:editable name='page_author' type='text' label='Author' />
  <cms:editable name='page_content' type='richtext' label='Content' />
   
</cms:template>

<cms:set my_debug='0' />
<cms:smart_embed debug=my_debug 'afore' />
<!DOCTYPE html>
<html class="no-js" lang="en">
    <cms:smart_embed debug=my_debug 'headers' />
    <cms:smart_embed debug=my_debug 'menu' />
<body class="home-page">
    <cms:if k_is_page >
      <cms:smart_embed debug=my_debug 'page' />
    <cms:else />
      <cms:smart_embed debug=my_debug 'list' />
    </cms:if >
    <cms:smart_embed debug=my_debug 'footer' />
</body>
</html>
<?php COUCH::invoke(); ?>
