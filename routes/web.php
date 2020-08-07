<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//  Route::get('/', 'HomeController@index')->name('home');
Auth::routes();


//Login and Logout Routes
Route::get('/customer/login','Auth\LoginController@showLoginForm')->name('login');  
Route::post('/customer/login','Auth\LoginController@logout')->name('logout');  

//Registration Routes
Route::get('/customer/register','Auth\RegisterController@showRegistrationForm')->name('register');  
Route::post('/customer/register','Auth\RegisterController@register');


Route::get('/', function () {
   return view('Pages.home');
});


 Route::prefix('land')->group(function () {
   Route::get('masaka','Land\MasakaLandController@index')->name('masaka');
});

//Houses routes
Route::prefix('houses')->group(function () {
   Route::get('wakiso','Houses\WakisoHouseController@index')->name('wakiso');
});

//BuildingMaterials Routes
Route::prefix('building-materials/sand')->group(function () {
   Route::get('lake-sand','BuildingMaterials\Sand\LakeSandController@index')->name('lakesand');
   Route::get('river-sand','BuildingMaterials\Sand\RiverSandController@index')->name('riversand');
});


Route::prefix('building-materials/bricks')->group(function () {
   Route::get('fire-bricks','BuildingMaterials\Bricks\FirebricksController@index')->name('firebricks');
   Route::get('half-bricks','BuildingMaterials\Bricks\HalfbricksController@index')->name('halfbricks');
   Route::get('concrete-bricks','BuildingMaterials\Bricks\ConcretebricksController@index')->name('concretebricks');
});

// Tiles and Floor Routes 
Route::prefix('building-materials/tiles-floors')->group(function () {
   Route::get('stair-edging','BuildingMaterials\TilesFloors\StairEdgeController@index')->name('stair-edging');
   Route::get('carpet-trim','BuildingMaterials\TilesFloors\CarpetTrimController@index')->name('carpet-trim');
   Route::get('floor-runners','BuildingMaterials\TilesFloors\FloorRunnerController@index')->name('floor-runner');
   });


//cement routes 
 Route::prefix('building-materials/cement')->group(function () {
      Route::get('hima-cement','BuildingMaterials\Cement\HimaController@index')->name('hima-cement');
 });


 //Routes for roofings
Route::prefix('building-materials/roofing')->group(function () {
   Route::get('roofing-tools','BuildingMaterials\Roofing\RoofingToolsController@index')->name('roofing-tools');
   Route::get('iron-sheets','BuildingMaterials\Roofing\IronSheetsController@index')->name('iron-sheets');
});

//Routes for Doors & Windows
Route::prefix('building-materials/doors-windows')->group(function () {
   Route::get('interior-doors','BuildingMaterials\DoorsWindows\InteriorDoorsController@index')->name('interior-doors');
   });

 //Routes for gutters

Route::prefix('building-materials/gutters')->group(function () {
   Route::get('guttering-tools','BuildingMaterials\Gutters\GutteringToolsController@index')->name('guttering-tools');
   });



 //Routes for plumbing tools

Route::prefix('plumbing-tools')->group(function () {
   Route::get('pipes/pipes-fitting','PlumbingTools\PipeController@index')->name('pipes-fitting');
   Route::get('metals/iron-bars','PlumbingTools\MetalController@index')->name('iron-bars');
   Route::get('laundary/bathrooms','PlumbingTools\LaundaryController@index')->name('bathrooms');
   Route::get('machines/washing-machines','PlumbingTools\MachineController@index')->name('washing-machines');
   Route::get('toilets/toilets','PlumbingTools\ToiletController@index')->name('toilets');
});



 //Routes for plumbing tools
Route::prefix('electrical-wirings')->group(function () {
   Route::get('lightings/garden-lightings','ElectricalWirings\LightingsController@index')->name('garden-lightings');
   Route::get('wires-cables/cables','ElectricalWirings\WiresCablesController@index')->name('cables');
});


 //Routes for Livestock

 Route::prefix('livestock')->group(function () {
   Route::get('cattle/ankole-longhorned','Livestock\CattleController@index')->name('ankole-longhorned');
   Route::get('goats/alphine-goats','Livestock\GoatsController@index')->name('alphine-goats');
   Route::get('pigs/weaners','Livestock\PigsController@index')->name('weaners');
   Route::get('poultry/chicken','Livestock\PoultryController@index')->name('chicken');
   });

    //Routes for Apartments


    Route::prefix('apartments')->group(function () {
      Route::get('service-apartments/dina','Apartments\ServiceApartmentsController@index')->name('service-apartments');
      Route::get('hotels/serena','Apartments\HotelsController@index')->name('hotels');
});

    //Routes for Vehicles
    Route::prefix('vehicles')->group(function () {
      Route::get('commercial/hilux','Vehicles\CommercialController@index')->name('commercial');
      Route::get('luxury/harrier','Vehicles\LuxuryController@index')->name('luxury');
});

    //Routes for Groceries
    Route::prefix('groceries')->group(function () {
      Route::get('fruits/mangoes','Groceries\FruitsController@index')->name('mangoes');
      Route::get('vegetables/carrots','Groceries\VegetablesController@index')->name('carrots');
      Route::get('dairy/milk','Groceries\DairyController@index')->name('milk');
      Route::get('processed/sugar','Groceries\ProcessedController@index')->name('sugar');
});

    //Routes for Groceries
    Route::prefix('clothings')->group(function () {
      Route::get('men/shirts','Clothings\MenController@index')->name('shirts');
      Route::get('women/shoes','Clothings\WomenController@index')->name('shoes');
      Route::get('baby/outfit','Clothings\BabyController@index')->name('outfit');
    
});