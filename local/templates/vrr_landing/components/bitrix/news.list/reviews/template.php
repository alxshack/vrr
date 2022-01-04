<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
<div class="item">
	<div class="row">
		<div class="col-lg-12">
			<p class="lead">
				<?echo $arItem["PREVIEW_TEXT"];?>
			</p>
			<hr class="colored">
			<p class="quote">
				<?echo $arItem["DETAIL_TEXT"];?>
			</p>
			<div class="testimonial-info">
				<div class="testimonial-img">
					<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="img-circle img-responsive" alt="<?echo $arItem["NAME"]?>">
				</div>
				<div class="testimonial-author">
					<span class="name"><?echo $arItem["NAME"]?></span>
						<p class="small">
							 <?echo $arItem["DISPLAY_PROPERTIES"]["DOLZHNOST"]["VALUE"]?>
						</p>
					<div class="stars">
						<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?endforeach;?>