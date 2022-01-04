<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
?>

<div class="container wow fadeIn">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h2><?=GetMessage('WRITE_US')?></h2>
			<hr class="colored">
			<p>
				 <?=GetMessage('WRITE_US_DESC')?>
			</p>
		</div>
	</div>
	<div class="row content-row">
		<div class="col-lg-8 col-lg-offset-2">
			<form name="sentMessage" id="contactForm" novalidate="" action="<?=POST_FORM_ACTION_URI?>" method="POST" enctype="multipart/form-data">
			<?=bitrix_sessid_post()?>
				<div id="success" style="color:#00aa00">
<?
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?><?=$arResult["OK_MESSAGE"]?><?
}
?>
				</div>
				<div class="row control-group">
					<div class="form-group col-xs-12 floating-label-form-group controls">
 <label><?=GetMessage("MFT_NAME")?></label> <input type="text" name="user_name" class="form-control" placeholder="<?=GetMessage("MFT_NAME")?>" id="name" required="" data-validation-required-message="<?=GetMessage("MFT_NAME_DESC")?>">
						<p class="help-block text-danger">
						</p>
					</div>
				</div>
				<div class="row control-group">
					<div class="form-group col-xs-12 floating-label-form-group controls">
 <label><?=GetMessage("MFT_EMAIL")?></label> <input type="email" name="user_email" class="form-control" placeholder="<?=GetMessage("MFT_EMAIL")?>" id="email" required="" data-validation-required-message="<?=GetMessage("MFT_EMAIL_DESC")?>">
						<p class="help-block text-danger">
						</p>
					</div>
				</div>
				<div class="row control-group">
					<div class="form-group col-xs-12 floating-label-form-group controls">
 <label><?=GetMessage("MFT_MESSAGE")?></label> <textarea rows="5" name="MESSAGE" class="form-control" placeholder="<?=GetMessage("MFT_MESSAGE")?>" id="message" required="" data-validation-required-message="<?=GetMessage("MFT_MESSAGE_DESC")?>"></textarea>
						<p class="help-block text-danger">
						</p>
					</div>
				</div>
<?if($arParams["USE_CAPTCHA"] == "Y"):?>
				<div class="row control-group">
					<div class="form-group col-xs-12 floating-label-form-group controls">
						<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
						<label><?=GetMessage("MFT_CAPTCHA_CODE")?></label>
						<div class="text-center"><img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA"></div>
						<input type="text" name="captcha_word" class="form-control" size="30" maxlength="50" value="" placeholder="<?=GetMessage("MFT_CAPTCHA_CODE")?>" id="message" required="" data-validation-required-message="<?=GetMessage("MFT_CAPTCHA_CODE")?>">
					</div>
				</div>
<?endif;?>
				<div class="row">
					<div class="form-group col-xs-12">
					<br/>
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
	<button type="submit" name="submit" class="btn btn-outline-dark" value="1"><?=GetMessage("MFT_SUBMIT")?></button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>