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

<div class="main-slider">
    <div class="container">
        <div class="slick-slider">
            <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="slick-item">
                <img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" alt="<?= $arItem["NAME"]?>" class="full-width">
                <div class="slick-item__text">
                    <p class="main-slider__title"><?= $arItem["NAME"]?></p>
                    <p class="main-slider__subtitle"><?= $arItem["DETAIL_TEXT"]?></p>
                </div>
            </div>
            <?endforeach;?>
        </div>
        <div class="main-slider-wrapper">
            <div class="main-slider__content">
                <div class="container">
                    <div class="main-slider__control">
                        <div class="dots-container"></div>
                        <div class="main-slider-nav">
                            <div class="num-container"></div>
                            <div class="arrow-container">
                                <button type="button" class="btn btn-slider slick-prev">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.8283 12L15.7783 7.04999L14.3643 5.63599L8.00032 12L14.3643 18.364L15.7783 16.95L10.8283 12Z" />
                                    </svg>
                                </button>
                                <button type="button" class="btn btn-slider slick-next">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.1717 12L8.22168 7.04999L9.63568 5.63599L15.9997 12L9.63568 18.364L8.22168 16.95L13.1717 12Z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>