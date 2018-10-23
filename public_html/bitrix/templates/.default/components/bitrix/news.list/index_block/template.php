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
<?
    foreach ($arResult['ITEMS'] as $arItem) {
        $arElementSection[$arItem['IBLOCK_SECTION_ID']][]=$arItem;
    }
    ksort($arElementSection);
    $s=1;
    foreach ($arElementSection as $key => $Section) {
        switch ($s) {
            case '1':
               $arItem=$Section[0];
               $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
               $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
               ?>
               <div  class="textBox branddark textlightest"  id="<?=$this->GetEditAreaId($arItem['ID']);?>" >
                    <span class="textBoxh1"> 
                        <p><?=$arItem['NAME']?></p>
                    </span> 
                    <p><?=$arItem['PREVIEW_TEXT']?></p>
                     <span class="main_more"><?echo GetMessage('ELEMENT_PDROBNEE');?></span> <a  <? if($arItem['PROPERTIES']['TARGET']['VALUE']){?> target="_blank" <?}?> href="<?=$arItem['PROPERTIES']['URL']['VALUE']?>" class="fullsizelink" > <span></span> </a>

                </div>  
               <?
                break;
                case '2':
                $arItem=$Section[0];
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
               <div class="textBox brand textlightest middle" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                 <span class="textBoxh1"> 
                     <p><?=$arItem['NAME']?></p>
                 </span> 
                 <p><?=$arItem['PREVIEW_TEXT']?></p>
                 <span class="main_more"><?echo GetMessage('ELEMENT_PDROBNEE');?></span>
                 <a <? if($arItem['PROPERTIES']['TARGET']['VALUE']){?> target="_blank" <?}?>
                  href="<?=$arItem['PROPERTIES']['URL']['VALUE']?>" class="fullsizelink" >
                    <span></span>
                  </a>
                </div>    
               <?
                break;
                  case '3':
              ?>
               <div class="textBox warm textdarkest ">
                <? $k=1;
                foreach($Section as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                if($k==1){
                    ?>
                    <span id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="textBoxh1"> 
                        <p><?=$arItem['NAME']?></p>
                    </span> 
                    <p><?=$arItem['PREVIEW_TEXT']?></p>
                    <div class="teaserBox textlightest left line424143 special77">
                    <div class="sectionLinkWrapper">
                <?
                }else{
                ?>
                    <a <? if($arItem['PROPERTIES']['TARGET']['VALUE']){?> target="_blank" <?}?> id="<?=$this->GetEditAreaId($arItem['ID']);?>" href="<?=$arItem['PROPERTIES']['URL']['VALUE']?>">
                       <span><p><?=$arItem['NAME']?></p></span>
                    </a>
                    <hr>                                                        
                    <?
                }
            $k++;
            endforeach;?>
                    </div>
                </div>
            </div>
               <?
            break;
            case '4':
             $arItem=$Section[0];
             $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
             $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
<!--
            <div class="localPartner" id="<?=$this->GetEditAreaId($arItem['ID']);?>"> 
                <div class="fullSizeImage left">
                   <img
                    src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>"
                    width="<?=$arItem['PREVIEW_PICTURE']['WIDTH']?>"
                    height="<?=$arItem['PREVIEW_PICTURE']['HEIGHT']?>" 
                    alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>" 
                    title="<?=$arItem['PREVIEW_PICTURE']['TITLE']?>" 
                   />
                </div>
                <div class="branddark textlightest left textBox" style="margin: 0px;">
                    <span class="textBoxh1"> 
                        <p><?=$arItem['NAME']?></p>
                        <p></p>
                    </span> 
                    <p><?=$arItem['PREVIEW_TEXT']?></p>
                        <span class="main_more"><?echo GetMessage('ELEMENT_PDROBNEE');?></span>
                    <a <? if($arItem['PROPERTIES']['TARGET']['VALUE']){?> target="_blank" <?}?> href="<?=$arItem['PROPERTIES']['URL']['VALUE']?>" class="fullsizelink" >
                        <span></span>
                    </a>
                </div>
            </div>
             -->
                <div class="get-product">
                    <img src="<?=TPL_PATH?>/tpl/var/dpd/storage/images/media/images/twice_1.jpg" alt="" class="get-product__img">
                    <div class="get-product__info">
                        <h2>Пункты приема и выдачи посылок</h2>
                        <p>Нужно найти ближайший к вам пункт?</p>
                        <a href="https://www.dpd.ru/dpd/chooser.do2?address=%D0%B1%D0%B5%D0%BB%D0%B0%D1%80%D1%83%D1%81%D1%8C">Подробнее</a>
                    </div>
                </div>
            <?
            break;
            case '5':
            ?>
            <div class="textBox brand textlightest ">
            <? $k=1;
                foreach($Section as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                if($k==1){
                    ?>
                    <span id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="textBoxh1"> 
                        <p><?=$arItem['NAME']?></p>
                    </span> 
                    <p><?=$arItem['PREVIEW_TEXT']?></p>
                    <div class="teaserBox textlightest left special77">
                    <div class="sectionLinkWrapper">
                <?
                }else{
                ?>
                    <a <? if($arItem['PROPERTIES']['TARGET']['VALUE']){?> target="_blank" <?}?> id="<?=$this->GetEditAreaId($arItem['ID']);?>" href="<?=$arItem['PROPERTIES']['URL']['VALUE']?>">
                       <span><p><?=$arItem['NAME']?></p></span>
                    </a>
                    <hr>                                                        
                    <?
                }
            $k++;
            endforeach;?>
            </div>
            <?
            break;
            default:
            break;
        }
    $s++;
    }
?>
<style>
    .special77{
        position: absolute!important;
        bottom: 0;
        left: 0;
        min-height: auto!important;
        padding-bottom:10px; 
    }

	.line424143 hr {
		    border-top: 1px solid #424143!important;
	}

	.teaserBox.line424143 a span:before{
		        background-position: 0 -3011px;!important;
	}


</style>