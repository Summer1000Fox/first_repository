{*<?php exit();?>*}
<div class="here">
	<span>{$channel_title}</span>
	<div class="link">
		<a href="./">{$lang.home}</a>
		{if $channel_title}<img src="{$S_TPL_PATH}images/here_img.gif" /><a href="{url channel=$global.channel key=$global.key}">{$channel_title}</a>{/if}
		{if $page_title}<img src="{$S_TPL_PATH}images/here_img.gif" /><a href="{url channel=$global.channel key=$global.key}">{$page_title|truncate:20}</a>{/if}
	</div>
</div>
<div class="art_sheet list">
	<ul class="main">
		{foreach from=$search name=search item=item}
		<li>
			<a href="{url channel=$item.channel id=$item.art_id}" title="{$item.art_title}" target="_blank">{$item.short_title}</a>
			<span>{$item.art_add_time|date_format:"%Y-%m-%d"}</span>
			<div class="clear"></div>
		</li>
		{/foreach}
	</ul>
	{if !$search}<div class="not_found">{$lang.not_found}</div>{/if}
</div>
{$prefix = 'search/key-'|cat:$global.key}
{include file="module/page_link.php" page=$global.page}
<!-- E数云 -->
