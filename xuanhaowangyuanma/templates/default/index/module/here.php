{*<?php exit();?>*}
<div class="here">
	<span>{$channel_title}</span>
	<div class="link">
		<a href="./">{$lang.home}</a>
		{if $channel_title}<img src="{$S_TPL_PATH}images/here_img.gif" /><a href="{url channel=$global.channel}">{$channel_title}</a>{/if}
		{if $cat_name}<img src="{$S_TPL_PATH}images/here_img.gif" /><a href="{url channel=$global.channel cat=$global.cat}">{$cat_name}</a>{/if}
		{if $page_title}<img src="{$S_TPL_PATH}images/here_img.gif" /><a href="{url channel=$global.channel id=$global.id}">{$page_title|truncate:20}</a>{/if}
	</div>
</div>
<!-- E数云 -->