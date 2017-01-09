<?php

namespace onestopcore\Http\Controllers\Api;


use Illuminate\Http\Request;
use DB;
use onestopcore\Product;
use onestopcore\Category;
use onestopcore\SubCategory;
use onestopcore\Http\Controllers\Controller;

class ApiProductController extends Controller
{
    /**
     * Show all products.
     * 
     * @return Response
     */
    public function index(){

        $products = Product::all();
        $data = array();
        $i=0;

        if($products){
            foreach($products as $product){
                $data[$i]['product'] = $product;
                $data[$i]['images'] = $product->images;
                $i++;
            }
        }
        return $products;
    }

    /**
     * Edit a Product.
     * 
     * @return Response
     */
    public function edit($id){
       $product = array();
       $product = Product::find($id);
       //echo $id;
       $data = array(
           'product' => $product,
           'images' => $product->images
       );
       return $this->successResponse('Get detail product', $product);
   }
    
    /**
     * details a Product.
     * 
     * @return Response
     */
    public function details($id){
       $product = array();
       $product = Product::find($id);
       //echo $id;
       $data = array(
           'product' => $product,
           'images' => $product->images[0]
       );
       $oData = $product;
       if($product->images[0]){
            $oData->imagePreviewUrl = $product->images[0]->image_url;
       }
       unset($oData->images);
       $oData->category = $this->_getCategoryName($product->category_id);
       $oData->subcategory =  $this->_getSubCategoryName($product->sub_category_id);
       return $oData;
   }

    private function _getCategoryName($id){
	
        $oData = Category::find($id);

        if($oData){
            return $oData->name;
        }
        return "";
    }

    private function _getSubcategoryName($id){
        
        $oData = SubCategory::find($id);

        if($oData){
            return $oData->name;
        }
        return "";
    }

   /**
     * Update the given user.
     *
     * @param  Request  $request
     * @param  string  $id
     * @return Response
     */
   public function update(Request $request, $id){
      $input = $request->all();
       
      $vouchercode = $input['vouchercode'];
      $vouchername = $input['vouchername']; 
      $disc = $input['disc']; 
      $maxclaim = $input['maxclaim']; 
      $startdate= $input['startdate']; 
      $enddate = $input['enddate']; 
      $status = true; 
    
      $testString = 'TEST';
      $testInt = 12;
      $testDatetime = date("Y-m-d h:i:s");
      
      $voucher = Voucher::find($id);
     
      $voucher->code = $vouchercode;
      $voucher->name = $vouchername;
      $voucher->startdate = $startdate;
      $voucher->enddate = $enddate;
      $voucher->maxclaim = $maxclaim;
      $voucher->disc = $disc;
      $voucher->target_type = 1;
      $voucher->is_active = true;
      $voucher->save();
      
      return $this->successResponse('Voucher is successfuly updated.', $voucher);
   }
}
