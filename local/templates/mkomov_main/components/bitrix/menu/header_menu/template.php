<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult)):?>
<ul class="navbar-nav ">
	<?php
	foreach($arResult as $arItem):
		if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
			continue;
		?>
		<?php if($arItem["SELECTED"]):?>
		<li class="nav-item">
			<a class="nav-link active" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
		</li>
	<?php else:?>
		<li class="nav-item">
			<a class="nav-link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
		</li>
	<?php endif?>

	<?php endforeach?>
</ul>

<?php endif?>