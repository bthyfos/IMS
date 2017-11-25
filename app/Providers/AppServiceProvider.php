<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\UserRoles;
use App\Department;
use App\Region;
use App\Position;
use App\ProductType;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        if (\Schema::hasTable('user_roles'))
        {
            $userRoles          = UserRoles::orderBy('name','ASC')
                                                            ->get();
            $selectUserRoles    = array();
            $selectUserRoles[0] = "Select / All";

            foreach ($userRoles as $userRole) {
               $selectUserRoles[$userRole->id] = $userRole->name;
            }

             \View::share('selectUserRoles',$selectUserRoles);


        }

         if (\Schema::hasTable('product_types'))
        {
            $productTypes         = ProductType::orderBy('name','ASC')
                                                            ->get();
            $selectProductTypes    = array();
            $selectProductTypes[0] = "Select / All";

            foreach ($productTypes as $productType) {
               $selectProductTypes[$productType->id] = $productType->name;
            }

             \View::share('selectProductTypes',$selectProductTypes);


        }

        if (\Schema::hasTable('departments'))
        {
            $departments         = Department::orderBy('name','ASC')
                                                            ->get();
            $selectDepartments    = array();
            $selectDepartments[0] = "Select / All";

            foreach ($departments as $department) {
               $selectDepartments[$department->id] = $department->name;
            }

             \View::share('selectDepartments',$selectDepartments);


        }

         if (\Schema::hasTable('regions'))
        {
            $regions         = Region::orderBy('name','ASC')->get();
            $selectRegions    = array();
            $selectRegions[0] = "Select / All";

            foreach ($regions as $region) {
               $selectRegions[$region->id] = $region->name;
            }

             \View::share('selectRegions',$selectRegions);


        }

        if (\Schema::hasTable('positions'))
        {
            $positions         = Position::orderBy('name','ASC')
                                                            ->get();
            $selectPositions   = array();
            $selectPositions[0] = "Select / All";

            foreach ($positions as $position) {
               $selectPositions[$position->id] = $position->name;
            }

             \View::share('selectPositions',$selectPositions);


        }

        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
