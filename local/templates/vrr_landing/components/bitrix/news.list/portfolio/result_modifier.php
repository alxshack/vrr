<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$services = array();

foreach($arResult['ITEMS'] as $key => $arItem)
{
	$services[$arItem['PROPERTIES']['VIDY_RABOT']['VALUE']] = 1;
	if(!empty($arItem['DISPLAY_PROPERTIES']['FON']['VALUE']))
	{
		$arResult['ITEMS'][$key]['DISPLAY_PROPERTIES']['FON']['VALUE'] = CFile::GetFileArray($arItem['DISPLAY_PROPERTIES']['FON']['VALUE']);
	}
}

$arResult['SERVICES'] = array_keys($services);