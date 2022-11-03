<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");
?> 
<div class="slide-one-item home-slider owl-carousel">

<? $GLOBALS['filter'] = array("PROPERTY_DEAL_VALUE"=>'да' ); ?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "/obyavleniya/#ELEMENT_CODE#",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "",
		),
		"FILTER_NAME" => "filter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "ads",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "[DEAL] Приоритетная сделка",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "slider"
	),
	false
);?> 
<!-- < endif ?>
< endforeach ?> -->

</div> 


<div class="py-5">
<div class="container">

  <div class="row">
    <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
      <div class="feature d-flex align-items-start">
        <span class="icon mr-3 flaticon-house"></span>
        <div class="text">
          <h2 class="mt-0">Wide Range of Properties</h2>
          <p><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/wide_range.php"
	)
);?></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
      <div class="feature d-flex align-items-start">
        <span class="icon mr-3 flaticon-rent"></span>
        <div class="text">
          <h2 class="mt-0">Rent or Sale</h2>
          <p><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/rent_or_sale.php"
	)
);?></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
      <div class="feature d-flex align-items-start">
        <span class="icon mr-3 flaticon-location"></span>
        <div class="text">
          <h2 class="mt-0">Property Location</h2>
          <p><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/property_location.php"
	)
);?></p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="site-section site-section-sm bg-light">
	<div class="container">
		<div class="row mb-5">
			<div class="col-12">
				<div class="site-section-title">
					<h2>New Properties for You</h2>
				</div>
			</div>
		</div>
		<div class="row mb-5">
<?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"new_properties", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "/obyavleniya/#ELEMENT_CODE#",
		"FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
			1 => "DETAIL_PAGE_URL",
			2 => "PROPERTY_PRICE",
			3 => "PROPERTY_GARAGE",
			4 => "PROPERTY_FLOOR",
			5 => "PROPERTY_SQUARE",
			6 => "PROPERTY_BATH",
			7 => "PROPERTY_LINKS",
			8 => "PROPERTY_DEAL",
			9 => "PROPERTY_LOCATION",
			10 => "PROPERTY_BEDS",
			11 => "PROPERTY_LINK",
			12 => "PROPERTY_DEAL",
			13 => "",
		),
		"IBLOCKS" => array(
			0 => "5",
		),
		"IBLOCK_TYPE" => "ads",
		"NEWS_COUNT" => "6",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "new_properties"
	),
	false
);?> 
</div>
</div>
</div>


<div class="site-section">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-7 text-center mb-5">
      <div class="site-section-title">
        <h2>Our Services</h2>
      </div>
    </div>
  </div>
    <?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"services", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "/Services/#ELEMENT_CODE#",
		"FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
			1 => "DETAIL_PAGE_URL",
			2 => "PROPERTY_DESCRIPTION",
			3 => "PROPERTY_LINK",
      3 => "PROPERTY_CLASS",
			4 => "",
		),
		"IBLOCKS" => array(
			0 => "6",
		),
		"IBLOCK_TYPE" => "Services",
		"NEWS_COUNT" => "6",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "services"
	),
	false
);?> 
</div>
</div>
</div>

<div class="site-section bg-light">
<div class="container">
  <div class="row justify-content-center mb-5">
    <div class="col-md-7 text-center">
      <div class="site-section-title">
        <h2>Our Blog</h2>
      </div>
    </div>
  </div>
  <?$APPLICATION->IncludeComponent("bitrix:news.line", "our_blog", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "300",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"DETAIL_URL" => "/obyavleniya/#ELEMENT_CODE#",	// URL, ведущий на страницу с содержимым элемента раздела
		"FIELD_CODE" => array(	// Поля
			0 => "PREVIEW_TEXT",
			1 => "PREVIEW_PICTURE",
			2 => "DETAIL_PICTURE",
			3 => "DATE_ACTIVE_FROM",
			4 => "DETAIL_PAGE_URL",
			5 => "PROPERTY_DESCRIPTION",
			6 => "PROPERTY_ARTICLE",
			7 => "",
		),
		"IBLOCKS" => array(	// Код информационного блока
			0 => "5",
		),
		"IBLOCK_TYPE" => "ads",	// Тип информационного блока
		"NEWS_COUNT" => "3",	// Количество новостей на странице
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"COMPONENT_TEMPLATE" => "our_blog"
	),
	false
);?> 

</div>
</div>

<div class="site-section">
<div class="container">
<div class="row mb-5 justify-content-center">
  <div class="col-md-7">
    <div class="site-section-title text-center">
      <h2>Our Agents</h2>
    </div>
  </div>
</div>
	<?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"agents", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "/Agents/#ELEMENT_CODE#",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DETAIL_PICTURE",
			4 => "DATE_ACTIVE_FROM",
			5 => "DETAIL_PAGE_URL",
			6 => "PROPERTY_DESCRIPTION",
			7 => "PROPERTY_ARTICLE",
			8 => "",
		),
		"IBLOCKS" => array(
		),
		"IBLOCK_TYPE" => "Agents",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "agents"
	),
	false
);?> 


  </div>
  

  </div>
</div>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>