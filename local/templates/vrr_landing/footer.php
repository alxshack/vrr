<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
    <footer class="footer" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/assets/img/bg-footer.jpg')">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 contact-details">
                    <h4><i class="fa fa-phone"></i> <?=GetMessage('PHONE')?></h4>
                    <p>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."/include/footer_phone.php",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
					</p>
                </div>
                <div class="col-md-4 contact-details">
                    <h4><i class="fa fa-map-marker"></i> <?=GetMessage('EMAIL')?></h4>
                    <p>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."/include/footer_address.php",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
					</p>
                </div>
                <div class="col-md-4 contact-details">
                    <h4><i class="fa fa-envelope"></i> Email</h4>
                    <p>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."/include/footer_email.php",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
                    </p>
                </div>
            </div>
            <div class="row social">
                <div class="col-lg-12">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."/include/footer_socials.php",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
                </div>
            </div>
            <div class="row copyright">
                <div class="col-lg-12">
                    <p class="small"><?=GetMessage('MADE_IN')?></p>
                </div>
            </div>
        </div>
    </footer>
	<?$APPLICATION->ShowViewContent('portfolio_modals');?>
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/js/plugins/jquery.easing.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/js/plugins/classie.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/js/plugins/cbpAnimatedHeader.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/js/plugins/owl-carousel/owl.carousel.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/js/plugins/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/js/plugins/background/core.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/js/plugins/background/transition.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/js/plugins/background/background.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/js/plugins/jquery.mixitup.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/js/plugins/wow/wow.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/js/plugins/jqBootstrapValidation.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/js/vitality.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/demo/style.switcher.js"></script>
	</body>
</html>