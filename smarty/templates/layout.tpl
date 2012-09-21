{block "header"}

	{include "header.tpl"}
	{$smarty.block.child}

{/block}


{block "body"}

	{$smarty.block.child}

{/block}


{block "footer"}

	{include "footer.tpl"}
	{$smarty.block.child}

{/block}