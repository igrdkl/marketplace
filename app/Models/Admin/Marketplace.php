<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Marketplace extends Model
// class Marketplace extends Base
{
   /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'marketplaces';

   /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
   protected $primaryKey = 'id_marketplace';
   protected $fillable = [
      'country_code',
      'country',
      'currency',
   ];

   /**
    * Insert entity into DB table Marketplaces
    * 
    * @param array $data
    */
   public function storeMarketplace(array $data)
   {
      DB::table($this->table)
         ->insert($data);
   }

   /**
    * Insert entity into DB table Marketplaces
    * 
    * @param int $idMarketplace
    * @param array $data
    */
   public function updateMarketplace(int $idMarketplace, array $data)
   {
      DB::table($this->table)
         ->where($this->primaryKey, $idMarketplace)
         ->update($data);
   }

   /**
    * Delete entity from DB table Marketplaces
    * 
    * @param int $idMarketplace
    */
   public function deleteMarketplace(int $idMarketplace)
   {
      DB::table($this->table)
         ->where($this->primaryKey, $idMarketplace)
         ->delete();
   }
}
