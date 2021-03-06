<?php
/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 * @package	   MetaModels
 * @subpackage Core
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @copyright  The MetaModels team.
 * @license    LGPL.
 * @filesource
 */

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Real implementation for Contao 2.11 and Contao 3.1 - will get replaced with composer based auto loading in the future.
	'MetaModels\Attribute\Base'                             => 'system/modules/metamodels/MetaModels/Attribute/Base.php',
	'MetaModels\Attribute\BaseComplex'                      => 'system/modules/metamodels/MetaModels/Attribute/BaseComplex.php',
	'MetaModels\Attribute\BaseSimple'                       => 'system/modules/metamodels/MetaModels/Attribute/BaseSimple.php',
	'MetaModels\Attribute\Factory'                          => 'system/modules/metamodels/MetaModels/Attribute/Factory.php',
	'MetaModels\Attribute\IAttribute'                       => 'system/modules/metamodels/MetaModels/Attribute/IAttribute.php',
	'MetaModels\Attribute\IComplex'                         => 'system/modules/metamodels/MetaModels/Attribute/IComplex.php',
	'MetaModels\Attribute\IFactory'                         => 'system/modules/metamodels/MetaModels/Attribute/IFactory.php',
	'MetaModels\Attribute\ISimple'                          => 'system/modules/metamodels/MetaModels/Attribute/ISimple.php',
	'MetaModels\Attribute\ITranslated'                      => 'system/modules/metamodels/MetaModels/Attribute/ITranslated.php',
	'MetaModels\Attribute\TranslatedReference'              => 'system/modules/metamodels/MetaModels/Attribute/TranslatedReference.php',
	'MetaModels\Attribute\AbstractHybrid'                   => 'system/modules/metamodels/MetaModels/Attribute/AbstractHybrid.php',
	'MetaModels\BackendIntegration\Boot'                    => 'system/modules/metamodels/MetaModels/BackendIntegration/Boot.php',
	'MetaModels\BackendIntegration\Module'                  => 'system/modules/metamodels/MetaModels/BackendIntegration/Module.php',
	'MetaModels\BackendIntegration\Support'                 => 'system/modules/metamodels/MetaModels/BackendIntegration/Support.php',
	'MetaModels\Dca\Attribute'                              => 'system/modules/metamodels/MetaModels/Dca/Attribute.php',
	'MetaModels\Dca\BreadcrumbBuilder'                      => 'system/modules/metamodels/MetaModels/Dca/BreadcrumbBuilder.php',
	'MetaModels\Dca\Content'                                => 'system/modules/metamodels/MetaModels/Dca/Content.php',
	'MetaModels\Dca\Dca'                                    => 'system/modules/metamodels/MetaModels/Dca/Dca.php',
	'MetaModels\Dca\DcaCombine'                             => 'system/modules/metamodels/MetaModels/Dca/DcaCombine.php',
	'MetaModels\Dca\DcaSetting'                             => 'system/modules/metamodels/MetaModels/Dca/DcaSetting.php',
	'MetaModels\Dca\Filter'                                 => 'system/modules/metamodels/MetaModels/Dca/Filter.php',
	'MetaModels\Dca\Helper'                                 => 'system/modules/metamodels/MetaModels/Dca/Helper.php',
	'MetaModels\Dca\MetaModel'                              => 'system/modules/metamodels/MetaModels/Dca/MetaModel.php',
	'MetaModels\Dca\MetaModelDcaBuilder'                    => 'system/modules/metamodels/MetaModels/Dca/MetaModelDcaBuilder.php',
	'MetaModels\Dca\Module'                                 => 'system/modules/metamodels/MetaModels/Dca/Module.php',
	'MetaModels\Dca\RenderSetting'                          => 'system/modules/metamodels/MetaModels/Dca/RenderSetting.php',
	'MetaModels\Dca\RenderSettings'                         => 'system/modules/metamodels/MetaModels/Dca/RenderSettings.php',
	'MetaModels\DcGeneral\Callbacks'                        => 'system/modules/metamodels/MetaModels/DcGeneral/Callbacks.php',
	'MetaModels\DcGeneral\Controller'                       => 'system/modules/metamodels/MetaModels/DcGeneral/Controller.php',
	'MetaModels\DcGeneral\View'                             => 'system/modules/metamodels/MetaModels/DcGeneral/View.php',
	'MetaModels\DcGeneral\Data\Driver'                      => 'system/modules/metamodels/MetaModels/DcGeneral/Data/Driver.php',
	'MetaModels\DcGeneral\Data\Model'                       => 'system/modules/metamodels/MetaModels/DcGeneral/Data/Model.php',
	'MetaModels\DcGeneral\Data\ModelIterator'               => 'system/modules/metamodels/MetaModels/DcGeneral/Data/ModelIterator.php',
	'MetaModels\Factory'                                    => 'system/modules/metamodels/MetaModels/Factory.php',
	'MetaModels\Filter\Filter'                              => 'system/modules/metamodels/MetaModels/Filter/Filter.php',
	'MetaModels\Filter\FilterRule'                          => 'system/modules/metamodels/MetaModels/Filter/FilterRule.php',
	'MetaModels\Filter\IFilter'                             => 'system/modules/metamodels/MetaModels/Filter/IFilter.php',
	'MetaModels\Filter\IFilterRule'                         => 'system/modules/metamodels/MetaModels/Filter/IFilterRule.php',
	'MetaModels\Filter\Rules\Comparing\GreaterThan'         => 'system/modules/metamodels/MetaModels/Filter/Rules/Comparing/GreaterThan.php',
	'MetaModels\Filter\Rules\Comparing\LessThan'            => 'system/modules/metamodels/MetaModels/Filter/Rules/Comparing/LessThan.php',
	'MetaModels\Filter\Rules\Comparing\NotEqual'            => 'system/modules/metamodels/MetaModels/Filter/Rules/Comparing/NotEqual.php',
	'MetaModels\Filter\Rules\Condition\ConditionAnd'        => 'system/modules/metamodels/MetaModels/Filter/Rules/Condition/ConditionAnd.php',
	'MetaModels\Filter\Rules\Condition\ConditionOr'         => 'system/modules/metamodels/MetaModels/Filter/Rules/Condition/ConditionOr.php',
	'MetaModels\Filter\Rules\SearchAttribute'               => 'system/modules/metamodels/MetaModels/Filter/Rules/SearchAttribute.php',
	'MetaModels\Filter\Rules\SimpleQuery'                   => 'system/modules/metamodels/MetaModels/Filter/Rules/SimpleQuery.php',
	'MetaModels\Filter\Rules\StaticIdList'                  => 'system/modules/metamodels/MetaModels/Filter/Rules/StaticIdList.php',
	'MetaModels\Filter\Setting\Collection'                  => 'system/modules/metamodels/MetaModels/Filter/Setting/Collection.php',
	'MetaModels\Filter\Setting\Condition\ConditionAnd'      => 'system/modules/metamodels/MetaModels/Filter/Setting/Condition/ConditionAnd.php',
	'MetaModels\Filter\Setting\Condition\ConditionOr'       => 'system/modules/metamodels/MetaModels/Filter/Setting/Condition/ConditionOr.php',
	'MetaModels\Filter\Setting\CustomSql'                   => 'system/modules/metamodels/MetaModels/Filter/Setting/CustomSql.php',
	'MetaModels\Filter\Setting\Factory'                     => 'system/modules/metamodels/MetaModels/Filter/Setting/Factory.php',
	'MetaModels\Filter\Setting\ICollection'                 => 'system/modules/metamodels/MetaModels/Filter/Setting/ICollection.php',
	'MetaModels\Filter\Setting\IdList'                      => 'system/modules/metamodels/MetaModels/Filter/Setting/IdList.php',
	'MetaModels\Filter\Setting\IFactory'                    => 'system/modules/metamodels/MetaModels/Filter/Setting/IFactory.php',
	'MetaModels\Filter\Setting\ISimple'                     => 'system/modules/metamodels/MetaModels/Filter/Setting/ISimple.php',
	'MetaModels\Filter\Setting\IWithChildren'               => 'system/modules/metamodels/MetaModels/Filter/Setting/IWithChildren.php',
	'MetaModels\Filter\Setting\Simple'                      => 'system/modules/metamodels/MetaModels/Filter/Setting/Simple.php',
	'MetaModels\Filter\Setting\SimpleLookup'                => 'system/modules/metamodels/MetaModels/Filter/Setting/SimpleLookup.php',
	'MetaModels\Filter\Setting\WithChildren'                => 'system/modules/metamodels/MetaModels/Filter/Setting/WithChildren.php',
	'MetaModels\FrontendIntegration\Content\Filter'         => 'system/modules/metamodels/MetaModels/FrontendIntegration/Content/Filter.php',
	'MetaModels\FrontendIntegration\Content\FilterClearAll' => 'system/modules/metamodels/MetaModels/FrontendIntegration/Content/FilterClearAll.php',
	'MetaModels\FrontendIntegration\Content\ModelList'      => 'system/modules/metamodels/MetaModels/FrontendIntegration/Content/ModelList.php',
	'MetaModels\FrontendIntegration\FrontendFilter'         => 'system/modules/metamodels/MetaModels/FrontendIntegration/FrontendFilter.php',
	'MetaModels\FrontendIntegration\FrontendFilterOptions'  => 'system/modules/metamodels/MetaModels/FrontendIntegration/FrontendFilterOptions.php',
	'MetaModels\FrontendIntegration\Module\Filter'          => 'system/modules/metamodels/MetaModels/FrontendIntegration/Module/Filter.php',
	'MetaModels\FrontendIntegration\Module\FilterClearAll'  => 'system/modules/metamodels/MetaModels/FrontendIntegration/Module/FilterClearAll.php',
	'MetaModels\FrontendIntegration\Module\ModelList'       => 'system/modules/metamodels/MetaModels/FrontendIntegration/Module/ModelList.php',
	'MetaModels\Helper\ContaoController'                    => 'system/modules/metamodels/MetaModels/Helper/ContaoController.php',
	'MetaModels\Helper\TableManipulation'                   => 'system/modules/metamodels/MetaModels/Helper/TableManipulation.php',
	'MetaModels\Helper\ToolboxFile'                         => 'system/modules/metamodels/MetaModels/Helper/ToolboxFile.php',
	'MetaModels\Helper\UpgradeHandler'                      => 'system/modules/metamodels/MetaModels/Helper/UpgradeHandler.php',
	'MetaModels\IFactory'                                   => 'system/modules/metamodels/MetaModels/IFactory.php',
	'MetaModels\IItem'                                      => 'system/modules/metamodels/MetaModels/IItem.php',
	'MetaModels\IItems'                                     => 'system/modules/metamodels/MetaModels/IItems.php',
	'MetaModels\IMetaModel'                                 => 'system/modules/metamodels/MetaModels/IMetaModel.php',
	'MetaModels\Item'                                       => 'system/modules/metamodels/MetaModels/Item.php',
	'MetaModels\ItemList'                                   => 'system/modules/metamodels/MetaModels/ItemList.php',
	'MetaModels\Items'                                      => 'system/modules/metamodels/MetaModels/Items.php',
	'MetaModels\MetaModel'                                  => 'system/modules/metamodels/MetaModels/MetaModel.php',
	'MetaModels\Render\Setting\Collection'                  => 'system/modules/metamodels/MetaModels/Render/Setting/Collection.php',
	'MetaModels\Render\Setting\Factory'                     => 'system/modules/metamodels/MetaModels/Render/Setting/Factory.php',
	'MetaModels\Render\Setting\ICollection'                 => 'system/modules/metamodels/MetaModels/Render/Setting/ICollection.php',
	'MetaModels\Render\Setting\IFactory'                    => 'system/modules/metamodels/MetaModels/Render/Setting/IFactory.php',
	'MetaModels\Render\Setting\ISimple'                     => 'system/modules/metamodels/MetaModels/Render/Setting/ISimple.php',
	'MetaModels\Render\Setting\Simple'                      => 'system/modules/metamodels/MetaModels/Render/Setting/Simple.php',
	'MetaModels\Render\Template'                            => 'system/modules/metamodels/MetaModels/Render/Template.php',
	'MetaModels\Widgets\MultiTextWidget'                    => 'system/modules/metamodels/MetaModels/Widgets/MultiTextWidget.php',
	'MetaModels\Widgets\SubDcaWidget'                       => 'system/modules/metamodels/MetaModels/Widgets/SubDcaWidget.php',
	'MetaModels\Widgets\TagsWidget'                         => 'system/modules/metamodels/MetaModels/Widgets/TagsWidget.php',

	// Backwards compatibility layer from here on. DEPRECATED only, DO NOT USE.
	'IMetaModelAttribute'                   => 'system/modules/metamodels/deprecated/IMetaModelAttribute.php',
	'ContentMetaModel'                      => 'system/modules/metamodels/deprecated/ContentMetaModel.php',
	'ContentMetaModelFrontendFilter'        => 'system/modules/metamodels/deprecated/ContentMetaModelFrontendFilter.php',
	'GeneralCallbackMetaModel'              => 'system/modules/metamodels/deprecated/GeneralCallbackMetaModel.php',
	'GeneralControllerMetaModel'            => 'system/modules/metamodels/deprecated/GeneralControllerMetaModel.php',
	'GeneralDataMetaModel'                  => 'system/modules/metamodels/deprecated/GeneralDataMetaModel.php',
	'GeneralModelMetaModel'                 => 'system/modules/metamodels/deprecated/GeneralModelMetaModel.php',
	'GeneralModelMetaModelIterator'         => 'system/modules/metamodels/deprecated/GeneralModelMetaModelIterator.php',
	'GeneralViewMetaModel'                  => 'system/modules/metamodels/deprecated/GeneralViewMetaModel.php',
	'IMetaModel'                            => 'system/modules/metamodels/deprecated/IMetaModel.php',
	'IMetaModelAttributeComplex'            => 'system/modules/metamodels/deprecated/IMetaModelAttributeComplex.php',
	'IMetaModelAttributeFactory'            => 'system/modules/metamodels/deprecated/IMetaModelAttributeFactory.php',
	'IMetaModelAttributeSimple'             => 'system/modules/metamodels/deprecated/IMetaModelAttributeSimple.php',
	'IMetaModelAttributeTranslated'         => 'system/modules/metamodels/deprecated/IMetaModelAttributeTranslated.php',
	'IMetaModelFactory'                     => 'system/modules/metamodels/deprecated/IMetaModelFactory.php',
	'IMetaModelFilter'                      => 'system/modules/metamodels/deprecated/IMetaModelFilter.php',
	'IMetaModelFilterRule'                  => 'system/modules/metamodels/deprecated/IMetaModelFilterRule.php',
	'IMetaModelFilterSetting'               => 'system/modules/metamodels/deprecated/IMetaModelFilterSetting.php',
	'IMetaModelFilterSettingWithChilds'     => 'system/modules/metamodels/deprecated/IMetaModelFilterSettingWithChilds.php',
	'IMetaModelFilterSettings'              => 'system/modules/metamodels/deprecated/IMetaModelFilterSettings.php',
	'IMetaModelFilterSettingsFactory'       => 'system/modules/metamodels/deprecated/IMetaModelFilterSettingsFactory.php',
	'IMetaModelItem'                        => 'system/modules/metamodels/deprecated/IMetaModelItem.php',
	'IMetaModelItems'                       => 'system/modules/metamodels/deprecated/IMetaModelItems.php',
	'IMetaModelRenderSettings'              => 'system/modules/metamodels/deprecated/IMetaModelRenderSettings.php',
	'IMetaModelRenderSettingsFactory'       => 'system/modules/metamodels/deprecated/IMetaModelRenderSettingsFactory.php',
	'MetaModel'                             => 'system/modules/metamodels/deprecated/MetaModel.php',
	'MetaModelAttribute'                    => 'system/modules/metamodels/deprecated/MetaModelAttribute.php',
	'MetaModelAttributeComplex'             => 'system/modules/metamodels/deprecated/MetaModelAttributeComplex.php',
	'MetaModelAttributeFactory'             => 'system/modules/metamodels/deprecated/MetaModelAttributeFactory.php',
	'MetaModelAttributeHybrid'              => 'system/modules/metamodels/deprecated/MetaModelAttributeHybrid.php',
	'MetaModelAttributeSimple'              => 'system/modules/metamodels/deprecated/MetaModelAttributeSimple.php',
	'MetaModelAttributeTranslatedReference' => 'system/modules/metamodels/deprecated/MetaModelAttributeTranslatedReference.php',
	'MetaModelBackendModule'                => 'system/modules/metamodels/deprecated/MetaModelBackendModule.php',
	'MetaModelController'                   => 'system/modules/metamodels/deprecated/MetaModelController.php',
	'MetaModelDatabase'                     => 'system/modules/metamodels/deprecated/MetaModelDatabase.php',
	'MetaModelDcaBuilder'                   => 'system/modules/metamodels/deprecated/MetaModelDcaBuilder.php',
	'MetaModelDcaCombiner'                  => 'system/modules/metamodels/deprecated/MetaModelDcaCombiner.php',
	'MetaModelFactory'                      => 'system/modules/metamodels/deprecated/MetaModelFactory.php',
	'MetaModelFilter'                       => 'system/modules/metamodels/deprecated/MetaModelFilter.php',
	'MetaModelFilterRule'                   => 'system/modules/metamodels/deprecated/MetaModelFilterRule.php',
	'MetaModelFilterRuleAND'                => 'system/modules/metamodels/deprecated/MetaModelFilterRuleAND.php',
	'MetaModelFilterRuleOR'                 => 'system/modules/metamodels/deprecated/MetaModelFilterRuleOR.php',
	'MetaModelFilterRuleSearchAttribute'    => 'system/modules/metamodels/deprecated/MetaModelFilterRuleSearchAttribute.php',
	'MetaModelFilterRuleSimpleQuery'        => 'system/modules/metamodels/deprecated/MetaModelFilterRuleSimpleQuery.php',
	'MetaModelFilterRuleStaticIdList'       => 'system/modules/metamodels/deprecated/MetaModelFilterRuleStaticIdList.php',
	'MetaModelFilterSetting'                => 'system/modules/metamodels/deprecated/MetaModelFilterSetting.php',
	'MetaModelFilterSettingConditionAnd'    => 'system/modules/metamodels/deprecated/MetaModelFilterSettingConditionAnd.php',
	'MetaModelFilterSettingConditionOr'     => 'system/modules/metamodels/deprecated/MetaModelFilterSettingConditionOr.php',
	'MetaModelFilterSettingCustomSQL'       => 'system/modules/metamodels/deprecated/MetaModelFilterSettingCustomSQL.php',
	'MetaModelFilterSettingIdList'          => 'system/modules/metamodels/deprecated/MetaModelFilterSettingIdList.php',
	'MetaModelFilterSettingSimpleLookup'    => 'system/modules/metamodels/deprecated/MetaModelFilterSettingSimpleLookup.php',
	'MetaModelFilterSettingWithChilds'      => 'system/modules/metamodels/deprecated/MetaModelFilterSettingWithChilds.php',
	'MetaModelFilterSettings'               => 'system/modules/metamodels/deprecated/MetaModelFilterSettings.php',
	'MetaModelFilterSettingsFactory'        => 'system/modules/metamodels/deprecated/MetaModelFilterSettingsFactory.php',
	'MetaModelFrontendFilter'               => 'system/modules/metamodels/deprecated/MetaModelFrontendFilter.php',
	'MetaModelFrontendFilterOptions'        => 'system/modules/metamodels/deprecated/MetaModelFrontendFilterOptions.php',
	'MetaModelItem'                         => 'system/modules/metamodels/deprecated/MetaModelItem.php',
	'MetaModelItems'                        => 'system/modules/metamodels/deprecated/MetaModelItems.php',
	'MetaModelList'                         => 'system/modules/metamodels/deprecated/MetaModelList.php',
	'MetaModelRenderSettings'               => 'system/modules/metamodels/deprecated/MetaModelRenderSettings.php',
	'MetaModelRenderSettingsFactory'        => 'system/modules/metamodels/deprecated/MetaModelRenderSettingsFactory.php',
	'MetaModelSubDCAWidget'                 => 'system/modules/metamodels/deprecated/MetaModelSubDCAWidget.php',
	'MetaModelTableManipulation'            => 'system/modules/metamodels/deprecated/MetaModelTableManipulation.php',
	'MetaModelTemplate'                     => 'system/modules/metamodels/deprecated/MetaModelTemplate.php',
	'MetaModelsBackendSupport'              => 'system/modules/metamodels/deprecated/MetaModelsBackendSupport.php',
	'MetaModelsUpgradeHandler'              => 'system/modules/metamodels/deprecated/MetaModelsUpgradeHandler.php',
	'MetaModelBreadcrumbBuilder'            => 'system/modules/metamodels/deprecated/MetaModelBreadcrumbBuilder.php',
	'ModuleMetaModelFrontendFilter'         => 'system/modules/metamodels/deprecated/ModuleMetaModelFrontendFilter.php',
	'ModuleMetaModelList'                   => 'system/modules/metamodels/deprecated/ModuleMetaModelList.php',
	'TableContent'                          => 'system/modules/metamodels/deprecated/TableContent.php',
	'TableMetaModel'                        => 'system/modules/metamodels/deprecated/TableMetaModel.php',
	'TableMetaModelAttribute'               => 'system/modules/metamodels/deprecated/TableMetaModelAttribute.php',
	'TableMetaModelDca'                     => 'system/modules/metamodels/deprecated/TableMetaModelDca.php',
	'TableMetaModelDcaSetting'              => 'system/modules/metamodels/deprecated/TableMetaModelDcaSetting.php',
	'TableMetaModelFilterSetting'           => 'system/modules/metamodels/deprecated/TableMetaModelFilterSetting.php',
	'TableMetaModelHelper'                  => 'system/modules/metamodels/deprecated/TableMetaModelHelper.php',
	'TableMetaModelRenderSetting'           => 'system/modules/metamodels/deprecated/TableMetaModelRenderSetting.php',
	'TableMetaModelRenderSettings'          => 'system/modules/metamodels/deprecated/TableMetaModelRenderSettings.php',
	'TableModule'                           => 'system/modules/metamodels/deprecated/TableModule.php',
	'MetaModelBackend'                      => 'system/modules/metamodels/deprecated/MetaModelBackend.php',
	'WidgetMultiText'                       => 'system/modules/metamodels/deprecated/WidgetMultiText.php',
	'WidgetTags'                            => 'system/modules/metamodels/deprecated/WidgetTags.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'be_autocreatepalette'       => 'system/modules/metamodels/templates',
	'be_autocreateview'          => 'system/modules/metamodels/templates',
	'be_dcastylepicker'          => 'system/modules/metamodels/templates',
	'be_detectedproblems'        => 'system/modules/metamodels/templates',
	'be_metamodel_full'          => 'system/modules/metamodels/templates',
	'be_subdca'                  => 'system/modules/metamodels/templates',
	'be_supportscreen'           => 'system/modules/metamodels/templates',
	'ce_metamodel_list'          => 'system/modules/metamodels/templates',
	'metamodel_prerendered'      => 'system/modules/metamodels/templates',
	'metamodel_unrendered'       => 'system/modules/metamodels/templates',
	'mod_metamodel_list'         => 'system/modules/metamodels/templates',
	'mm_filter_default'          => 'system/modules/metamodels/templates',
	'mm_filter_clearall'         => 'system/modules/metamodels/templates',
	'mm_filteritem_default'      => 'system/modules/metamodels/templates',
	'mm_filteritem_linklist'     => 'system/modules/metamodels/templates',
	'mm_filteritem_radiobuttons' => 'system/modules/metamodels/templates',
	'mm_filteritem_checkbox'     => 'system/modules/metamodels/templates',
));
