<?php require_once('couch/cms.php');?>

<cms:template title='Global' icon='cog'>

<cms:editable
	name='aboutusimage'
	label='About Us Image'
	type='image'
	show_preview='1'
	preview_height='180'
/>

<cms:editable
    name='aboutustext'
    label='About Us Text'
    type='text'
/>

<cms:editable
    name='ourteamtitle'
    label='Our Team Title'
    type='text'
/>

<cms:editable
    name='ourteam'
    label='Our Team Section'
    type='text'
/>

<cms:editable
    name='chandu'
    label='Mr. C. D. Chhabhadia'
    type='text'
/>
    
</cms:template>

<?php COUCH::invoke();?>