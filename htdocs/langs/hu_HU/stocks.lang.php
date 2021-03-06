<?php
/* Copyright (C) 2012	Regis Houssin	<regis.houssin@capnetworks.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

$stocks = array(
		'CHARSET' => 'UTF-8',
		'WarehouseCard' => 'Raktár kártya',
		'Warehouse' => 'Raktár',
		'Warehouses' => 'Warehouses',
		'NewWarehouse' => 'Új raktár',
		'WarehouseEdit' => 'Raktár módosítása',
		'MenuNewWarehouse' => 'Új raktár',
		'WarehouseOpened' => 'Raktár nyitva',
		'WarehouseClosed' => 'Raktár zárva',
		'WarehouseSource' => 'Forrás raktár',
		'WarehouseSourceNotDefined' => 'No warehouse defined,',
		'AddOne' => 'Add one',
		'WarehouseTarget' => 'Cél raktár',
		'ValidateSending' => 'Törlése jóváhagyása',
		'CancelSending' => 'Küldés megszakítása',
		'DeleteSending' => 'Küldés törlése',
		'Stock' => 'Készlet',
		'Stocks' => 'Készletek',
		'Movement' => 'Mozgás',
		'Movements' => 'Mozgások',
		'ErrorWarehouseRefRequired' => 'Raktár referencia név szükséges',
		'ErrorWarehouseLabelRequired' => 'Raktár címke név szükséges',
		'CorrectStock' => 'Jelenlegi készlet',
		'ListOfWarehouses' => 'Raktárak listája',
		'ListOfStockMovements' => 'Készlet mozgatások listája',
		'StocksArea' => 'Készletek területe',
		'Location' => 'Hely',
		'LocationSummary' => 'Hely rövid neve',
		'NumberOfProducts' => 'Termékek összesen',
		'LastMovement' => 'Utolsó mozgás',
		'LastMovements' => 'Utolsó mozgások',
		'Units' => 'Egységek',
		'Unit' => 'Egység',
		'StockCorrection' => 'Jelenlegi készlet',
		'StockMovement' => 'Átadás',
		'StockMovements' => 'Készlet átadás',
		'NumberOfUnit' => 'Egységek száma',
		'UnitPurchaseValue' => 'Unit purchase price',
		'TotalStock' => 'Összes készlet',
		'StockTooLow' => 'Készlet alacsony',
		'StockLowerThanLimit' => 'Stock lower than alert limit',
		'EnhancedValue' => 'Érték',
		'PMPValue' => 'Súlyozott árlak érték',
		'PMPValueShort' => 'SÁÉ',
		'EnhancedValueOfWarehouses' => 'Raktárak értéke',
		'UserWarehouseAutoCreate' => 'Raktár autómatikus létrehozása felhasználó létrehozásakor',
		'QtyDispatched' => 'Mennyiség kiküldése',
		'OrderDispatch' => 'Készlet kiküldése',
		'RuleForStockManagementDecrease' => 'Készlet kerezelés szabály csökkentése',
		'RuleForStockManagementIncrease' => 'Készlet kerezelés szabály emelése',
		'DeStockOnBill' => 'Tényleges készlet csökkentése számla/hitel jóváhagyásakor',
		'DeStockOnValidateOrder' => 'Tényleges készlet csökkentése ügyfél rendelés jóváhagyásakor',
		'DeStockOnShipment' => 'Tényleges készlet csökkentése szállítás jóváhagyásakor',
		'ReStockOnBill' => 'Tényleges készlet növelése számla/hitel jóváhagyásakor',
		'ReStockOnValidateOrder' => 'Tényleges készlet növelése beszállítótól való rendelés jóváhagyásakor',
		'ReStockOnDispatchOrder' => 'Tényleges készlet növelése manuális raktárba való feladáskor miután a beszállítói rendelés beérkezett',
		'OrderStatusNotReadyToDispatch' => 'A rendelés még nincs olyan állapotban, hogy kiküldhető legyen a raktárba.',
		'StockDiffPhysicTeoric' => 'Az eltérés oka a gyakorlati és az elméleti készlet',
		'NoPredefinedProductToDispatch' => 'Nincs előredefiniált termék ehhez az objektumhoz. Tehát nincs szükség raktárba küldésre.',
		'DispatchVerb' => 'Kiküldés',
		'StockLimitShort' => 'Limit',
		'StockLimit' => 'Figyelmeztetés készletre',
		'PhysicalStock' => 'Fizikai készlet',
		'RealStock' => 'Igazi készlet',
		'TheoreticalStock' => 'Elméleti készlet',
		'VirtualStock' => 'Virtuális készlet',
		'MininumStock' => 'Minimum készlet',
		'StockUp' => 'Felhalmozás',
		'MininumStockShort' => 'Minimum készlet',
		'StockUpShort' => 'Felhalmozás',
		'IdWarehouse' => 'Raktár azon.#',
		'DescWareHouse' => 'Raktár leírás',
		'LieuWareHouse' => 'Raktár helye',
		'WarehousesAndProducts' => 'Raktárak és termékek',
		'AverageUnitPricePMPShort' => 'Súlyozott átlag beviteli ár',
		'AverageUnitPricePMP' => 'Súlyozott átlag beviteli ár',
		'SellPriceMin' => 'Értékesítés Egységár',
		'EstimatedStockValueSellShort' => 'Érték eladni',
		'EstimatedStockValueSell' => 'Érték Eladás',
		'EstimatedStockValueShort' => 'Készlet becsült értéke',
		'EstimatedStockValue' => 'Készlet becsült értéke',
		'DeleteAWarehouse' => 'Raktár törlése',
		'ConfirmDeleteWarehouse' => 'Biztos törölni akarja a(z) <b>%s</b> raktárat?',
		'PersonalStock' => 'Személyes készlet %s',
		'ThisWarehouseIsPersonalStock' => 'Ez a raktár %s %s személyes készletet képvisel',
		'SelectWarehouseForStockDecrease' => 'Válassza ki a raktár használni állomány csökkenése',
		'SelectWarehouseForStockIncrease' => 'Válassza ki a raktár használni állomány növekedése',
		'LastWaitingSupplierOrders' => 'Orders waiting for receptions'
);
?>