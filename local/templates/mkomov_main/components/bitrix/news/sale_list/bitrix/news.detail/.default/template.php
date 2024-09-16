<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>


		<div class="product-card__row">
			<div class="product-card__left">
				<div class="product-card__media">
					<div class="product-card__image">
						<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
					</div>
				</div>
			</div>
			<div class="product-card__right">
				<div class="product-card__info">
					<div class="product-card__info__header">
						<h3 class="h3"><?=$arResult["NAME"]?></h3>
						<p class="label"><?=$arResult["DETAIL_TEXT"]?></p>
					</div>
				</div>
			</div>
		</div>
