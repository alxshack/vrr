<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
	<div class="row content-row">
		<div class="col-lg-12">
			<div class="portfolio-filter">
				<ul id="filters" class="clearfix">
					<li> <span class="filter active" data-filter="<?=implode(' ',$arResult['SERVICES'])?>"><?=GetMessage('ALL')?></span> </li>
<?foreach($arResult['SERVICES'] as $arService):?>
					<li> <span class="filter" data-filter="<?=$arService?>"><?=$arService?></span> </li>
<?endforeach?>
				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div id="portfoliolist">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	
	<div class="portfolio <?echo $arItem["DISPLAY_PROPERTIES"]["VIDY_RABOT"]["VALUE"]?>" data-cat="<?echo $arItem["DISPLAY_PROPERTIES"]["VIDY_RABOT"]["VALUE"]?>" href="#portfolioModal<?=$arItem['ID']?>" data-toggle="modal">
		<div class="portfolio-wrapper">
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?echo $arItem["NAME"]?>">
			<div class="caption">
				<div class="caption-text">
					<a class="text-title" ><?echo $arItem["NAME"]?></a> <span class="text-category"><?echo $arItem["PREVIEW_TEXT"];?></span>
				</div>
				<div class="caption-bg">
				</div>
			</div>
		</div>
	</div>	
<?endforeach;?>
<?$this->SetViewTarget('portfolio_modals');?>
<?foreach($arResult["ITEMS"] as $arItem):?>	
	<div class="portfolio-modal modal fade" id="portfolioModal<?=$arItem['ID']?>" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('<?=$arItem['DISPLAY_PROPERTIES']['FON']['VALUE']['SRC']?>')">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <img src="<?=SITE_TEMPLATE_PATH?>\assets\img\creative\logo.png" class="img-responsive img-centered" alt="">
                            <h2><?echo $arItem["NAME"]?></h2>
                            <hr class="colored">
                            <p><?echo $arItem["PREVIEW_TEXT"];?></p>
                        </div>
                        <div class="col-lg-12">
                            <img src="<?=$arItem['DETAIL_PICTURE']['SRC']?>" class="img-responsive img-centered" alt="">
                        </div>
                        <div class="col-lg-8 col-lg-offset-2">
                            <ul class="list-inline item-details">
                                <li><?=GetMessage('CLIENT')?>:
                                    <strong><a href="http://startbootstrap.com"><?echo $arItem["NAME"]?></a>
                                    </strong>
                                </li>
                                <li><?=GetMessage('WORK_TYPES')?>:
                                    <strong><a href="http://startbootstrap.com"><?=$arItem['DISPLAY_PROPERTIES']['VIDY_RABOT']['DISPLAY_VALUE']?></a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> <?=GetMessage('CLOSE')?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?endforeach?>
<?$this->EndViewTarget();?> 
			</div>
		</div>
	</div>