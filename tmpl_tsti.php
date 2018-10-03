<?php require_once( 'acctr/cms.php' ); ?>
  
<cms:template title='Testimonials' clonable='1' commentable='0' order='3'>

  <cms:editable name='tsti_role' label='Role/Title' type='text' order='1'/>
  <cms:editable name='tsti_image' type='image' label='Image' order='2' />
  <cms:editable name='tsti_stars' label='# of Stars' type='text' order='3' />
  <cms:editable name='tsti_desc' type='nicedit' label='Quote' order='4' />

  <cms:globals>
    <cms:editable name='tsti_title' label='Section Title' type='text' />
  </cms:globals>

</cms:template>

<?php COUCH::invoke(); ?>
