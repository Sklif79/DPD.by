<div class="">
<script type="text/javascript">
    $(document).ready(function()
    {
        setTimeout( function()
        {

            var $teaserboxes = $( ".teaserBox" );
            var count = $teaserboxes.length;
            var i = 0;

            $.each( $teaserboxes, function( k, v )
            {
                if ( i % 2 == 0 )
                {
                    var $this = $( this );
                    var $next = $this.next();

                    if ( $this.find( ".sectionTextWrapper" ).height() > $next.find( ".sectionTextWrapper" ).height() )
                    {
                        if ( $next.find( ".fullsizelink" ).length == 0 )
                        {
                            $next.find( ".sectionTextWrapper" ).height( $this.find( ".sectionTextWrapper" ).height() );
                        }
                    }
                    else
                    {
                        if ( $this.find( ".fullsizelink" ).length == 0 )
                        {
                            $this.find(".sectionTextWrapper").height( $next.find(".sectionTextWrapper").height() );
                        }
                    }

                    if ( $this.find( ".sectionTextWrapper" ).next().height() > $next.find( ".sectionTextWrapper").next().height() )
                    {
                        if ( $next.find( ".fullsizelink" ).length == 0 )
                        {
                            $next.find( ".sectionTextWrapper" ).next().css( "position", "absolute" );
							$next.find( ".sectionTextWrapper" ).next().css( "bottom", "-25px" );
                            $next.find( ".sectionTextWrapper" ).next().css( "width", "272px" );
                        }
                    }
                    else
                    {
                        if ( $this.find( ".fullsizelink" ).length == 0 )
                        {
                            $this.find(".sectionTextWrapper").next().css( "position", "absolute" );
							  $this.find(".sectionTextWrapper").next().css( "bottom", "-25px" );
                            $this.find(".sectionTextWrapper").next().css( "width", "272px" );
                        }
                    }

					if ( $this.height() > $next.height() )
                    {
						$next.height( $this.height() + 35 /*- 10 /*+ 35*/ );
						$this.height( $this.height() + 35 /*- 10 /*+ 35*/ );
                    }
                    else
                    {
						$this.height( $next.height()+ 35  /*- 10  /*+ 35*/ );
						$next.height( $next.height() + 35 /*- 10 /*+ 35*/);
                   }
                   if ( ($this.find( ".sectionTextWrapper" ).height() == "18")  &&    ($next.find( ".sectionTextWrapper" ).height() == "18"))
                    {
                       if (( $this.find( ".sectionLinkWrapper" ).find("a.fullsizelink").length == 0 ) && ( $next.find( ".sectionLinkWrapper" ).find("a.fullsizelink").length == 0 ))
                        {
                            $next.find( ".sectionLinkWrapper" ).css( "position", "absolute" );
                            $next.find( ".sectionLinkWrapper" ).css( "width", "272px" );
                        }
                    if (( $this.find( ".sectionLinkWrapper" ).find("a.fullsizelink").length == 0 ) && ( $next.find( ".sectionLinkWrapper" ).find("a.fullsizelink").length > 0 ))
                        {
                            $this.find( ".sectionLinkWrapper" ).css( "position", "absolute" );
                            $this.find( ".sectionLinkWrapper" ).css( "width", "272px" );
                        }
                    }
                }

                i++;
            });

            $teaserboxes.css( "visibility", "visible" );

        }, 10 );

    });
</script>
 
       
        
<?$APPLICATION->IncludeComponent("bitrix:menu", "inner-menu", array(
	"ROOT_MENU_TYPE" => "left",
		"MAX_LEVEL" => "4",
		"CHILD_MENU_TYPE" => "leftchild",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => ""
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "Y"
	)
);?>

    <div class="clearfix"></div>
</div>


       </div>

<div class="grid_sideBar">
	<!-- right sidebar -->
	<style>
		.hellrot {
			background-color: #dd0032;
			color: #ffffff !important;
		}
		.banner {
			margin-bottom: 10px;
			padding: 10px;
		}
		.banner h1{
			font-size: 14px;
			line-height: 20px;
			margin: 0 0 5px;
		}
		.banner > div > span {
			display: block;
			margin-bottom: 15px;
		}
		.TextButton {
			background-color: #a90034;
			border: 0 none;
			color: #ffffff;
			display: inline-block;
			font-size: 14px;
			padding: 11px 30px;
		}
		.lnkArrowLeft::before {
			content: ">";
			display: inline-block;
			height: 11px;
			left: -5px;
			position: relative;
			transition: left 0.1s ease 0s;
			width: 10px;
		}
		
		.lnkArrowLeft::before {
			content: ">";
			display: inline-block;
			height: 11px;
			left: -5px;
			position: relative;
			transition: left 0.1s ease 0s;
			width: 10px;
		}
		.lnkArrowLeft {
			display: block;
			font-size: 13px !important;
			margin-left: 5px;
			margin-top: 10px;
			text-decoration: none;
		}
		.textlight {
			color: #ffffff !important;
		}
		.hellrot h1{
			color: #ffffff !important;
		}
		input[type="text"], input[type="password"] {
			border: 2px solid #fff;
			color: #414042;
			font-size: 12px;
			height: 25px;
			margin-bottom: 10px;
			outline: 0 none;
			padding: 0 0 0 10px;
		}
		#search_form_value_right {
			background-color: #e6e7e7;
			border: 0 none;
			box-sizing: border-box;
			color: #414042;
			float: left;
			font-style: normal;
			font-weight: 400;
			height: 25px;
			line-height: 19px;
			outline: 0 none;
			padding: 3px 7px;
			width: 132px;
		}
		#search_form_button_right{
			background: #dc0032 url("/bitrix/templates/.default/tpl/extension/ezdpd_design/design/dpd/images/icons/lens.png") no-repeat scroll center center;
			border: 0 none;
			cursor: pointer;
			display: inline-block;
			float: left;
			height: 25px;
			outline: medium none;
			text-indent: -9999em;
			width: 28px;
		}
		#search-right{
			margin-bottom: 10px;
		}
		.more-find-list {
			font-size:12px;
		}
	</style>	
	<div id="search-right" style="margin-bottom: 0px;">
		<!--<form style="height: 26px;" action="/search/index.php">
			<input id="search_form_value_right" type="text" maxlength="50" size="15" placeholder="Отслеживание" value="" name="q">
			<div id="searchContainer_right" style="width: 156px;"></div>
			<input id="search_form_button_right" type="submit" value="Поиск" name="s">
		</form>-->
		<form style="height: 26px;" id="shipmentShow" method="post" action="https://mydpd.dpd.by/dpd/search/search.do2" onsubmit="return true;" name="search">			
			<input id="search_form_value_right" class="txt search-new" type="text" size="16" maxlength="18" placeholder="Отслеживание" name="query" accept=""  >
			<a id="search_form_button_right" value="Поиск" class="but" href="javascript:void(0);" onclick="$('#shipmentShow').submit();"></a>
		</form>
		<p style="margin:0px; position:relative;top:-5px;"><a style="font-size:12px!important;" class="more-find-list lnkArrowLeft" target="_blank" href="https://mydpd.dpd.by/ols/trace2/extended.do2">Расширенный поиск</a></p>
	</div>
	<div id="RightSideBar" class="rightSideBar">
		<div id="panLogin" class="banner hellrot" style="margin-bottom: 0px; padding-bottom: 3px;">
			<span style="font-size: 14px; line-height: 20px; color: #ffffff !important;"><span id="labMyAccountHeadline">Вход в MyDPD</span></span>
		</div>
		<div style="background: rgb(230, 231, 231) none repeat scroll 0% 0%; padding: 15px 15px 9px; margin-bottom: 10px;" id="panLoginFalse" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'btnMasterLogin')">
			 <?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/include/right-auth.php",
					"EDIT_TEMPLATE" => ""
				)
			);?>
		</div>
	</div>
	<div class="right_sidebar_teaser" style="margin-bottom:5px; background:#dc0032!important;padding-left:10px; padding-top:5px; padding-bottom:5px;">
		 <?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => "/include/calc.php",
				"EDIT_TEMPLATE" => ""
			)
		);?>
	</div>
	<div class="right_sidebar_teaser">
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => "/include/phone.php",
				"EDIT_TEMPLATE" => ""
			)
		);?>   
	</div>
	<!--<div class="right_sidebar_teaser" style="margin-bottom:5px;">
		 <?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => "/include/right-banner.php",
				"EDIT_TEMPLATE" => ""
			)
		);?>
	</div>-->
				
	<div class="linkList right_sidebar_teaser">       
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => "/include/right-menu-inner.php",
				"EDIT_TEMPLATE" => ""
			)
		);?> 
	</div>
</div>
</div>
</div>
<?
IncludeTemplateLangFile(__FILE__);
if (file_exists($_SERVER['DOCUMENT_ROOT']."/bitrix/templates/.default/include/footer.php")) {
	require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/templates/.default/include/footer.php");
}
	define ("TPL_PATH", "/bitrix/templates/.default");
?>