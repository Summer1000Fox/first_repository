{*<?php exit();?>*}
{if $show_sheet == 1}
	<div class="art_sheet list">
		<ul class="main">
			{foreach from=$article name=article item=item}
			<li>
				<a href="{url channel=$global.channel id=$item.art_id}" title="{$item.art_title}" target="_blank">{$item.short_title}</a>
				<span>{$item.art_add_time|date_format:"%Y-%m-%d"}</span>
				<div class="clear"></div>
			</li>
			{/foreach}
		</ul>
		{if !$article}<div class="not_found">{$lang.not_found}</div>{/if}
	</div>
	{include file="module/page_link.php" page=$global.page}
{else}
	<div id="article">
		<div class="title">
			<h2>{$article.art_title}</h2>
		</div>
		<div class="message">
			{$lang.author}：{$article.art_author}&nbsp;&nbsp;&nbsp;{$lang.add_time}：{$article.art_add_time|date_format:"%Y-%m-%d %H:%M:%S"}
		</div>
		<div class="main">
			{run module='ad' id='3'}
			{$article.art_text}
			<div class="clear"></div>
		</div>
		<div class="share">{$share_code}</div>
		{$prefix = $global.channel}
		{include file="module/prev_next.php" id=$global.id}
	</div>
{/if}
<!-- E数云 -->
