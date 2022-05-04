<?php

namespace App\Admin\Controllers;

use App\Models\Item;
use Illuminate\Support\Facades\DB;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ItemController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Item';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Item());

        $grid->column('id', __('商品番号'));
        $grid->column('name', __('商品名'));
        $grid->column('price', __('値段'));
        $grid->column('gender', __('性別'));
        $grid->column('categories', __('カテゴリー'));
        $grid->column('designers', __('ブランド名'));
        $grid->column('made_in', __('生産地'));
        $grid->column('material', __('素材'));
        $grid->column('XS', __('XS'));
        $grid->column('S', __('S'));
        $grid->column('M', __('M'));
        $grid->column('L', __('L'));
        $grid->column('LL', __('LL'));
        $grid->column('img_url1', __('表紙画像url'));
        $grid->column('img_url2', __('Img url2'));
        $grid->column('img_url3', __('Img url3'));
        $grid->column('img_url4', __('Img url4'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Item::findOrFail($id));

        $show->field('id', __('商品番号'));
        $show->field('name', __('商品名'));
        $show->field('price', __('値段'));
        $show->field('gender', __('性別'));
        $show->field('categories', __('カテゴリー'));
        $show->field('designers', __('ブランド名'));
        $show->field('made_in', __('生産地'));
        $show->field('material', __('素材'));
        $show->field('XS', __('XS'));
        $show->field('S', __('S'));
        $show->field('M', __('M'));
        $show->field('L', __('L'));
        $show->field('LL', __('LL'));
        $show->field('img_url1', __('表紙画像'));
        $show->field('img_url2', __('Img url2'));
        $show->field('img_url3', __('Img url3'));
        $show->field('img_url4', __('Img url4'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    
    protected function form()
    {
        $form = new Form(new Item());

        $form->text('name', __('商品名'));
        $form->number('price', __('値段'));
        $form->select('gender', __('性別'))->options([ "women's" => "women's" , "men's" => "men's" ]);
        $form->select('categorie', __('カテゴリー１'))
        ->options([
            1 =>'アクセサリー',
            2 =>'バッグ',
            3 =>'クローズ',
            4 => 'シューズ'
        ])->when(1, function (Form $form) {
            $form->select('categories','カテゴリー2')->options([
                "Belts & Suspenders" => "Belts & Suspenders",
                "Dog Accessories"=> "Dog Accessories",
                "Eyewear"=> "Eyewear",
               "Face Masks" => "Face Masks",
                "Gloves"=> "Gloves",
               "Hats"=> "Hats",
                "Jewelry"=> "Jewelry",
                "Keychains"=> "Keychains",
                "Pocket Squares & Tie Bars"=> "Pocket Squares & Tie Bars",
                "Scarves"=> "Scarves",
                "Socks"=> "Socks",
                "Tech"=> "Tech",
                "Ties" => "Ties",
                "Umbrellas"=> "Umbrellas",
               "Wallets & Card Holders" => "Wallets & Card Holders",
                "Watches" => "Watches"
                ]);
            
        })->when(2, function (Form $form) {

            $form->select('categories','カテゴリー２')->options([
                "Backpacks"=>"Backpacks",
                "Briefcases"=>"Briefcases",
               "Duffle Bags"=>"Duffle Bags",
                "Messenger Bags"=>"Messenger Bags",
                "Pouches & Document Holders"=>"Pouches & Document Holders",
                "Tote Bags"=>"Tote Bags",
                "Travel Bags"=>"Travel Bags"
                ]);

        })->when(3, function (Form $form) {
            $form->select('categories','カテゴリー２')->options([
                "Jackets & Coats"=>"Jackets & Coats",
                "Jeans"=>"Jeans",
                "Pants"=>"Pants",
                "Shirts"=>"Shirts",
                "Shorts"=>"Shorts",
                "Suits & Blazers"=>"Suits & Blazers",
                "Sweaters"=>"Sweaters",
                "Swimwear"=>"Swimwear",
                "Tops"=>"Tops",
                "Underwear & Loungewear"=>"Underwear & Loungewear"
                ]);
        })->when(4, function (Form $form) {
            $form->select('categories','カテゴリー２')->options([
                "Boat Shoes & Moccasins"=>"Boat Shoes & Moccasins",
                "Boots"=>"Boots",
                "Espadrilles"=>"Espadrilles",
                "Lace Ups & Oxfords"=>"Lace Ups & Oxfords",
                "Monkstraps"=>"Monkstraps",
                "Sandals"=>"Sandals",
                "Slippers & Loafers2"=>"Slippers & Loafers2",
                "Sneakers"=>"Sneakers"
            ]);
        });
        $form->select('designers', 'ブランド名')->options(
            DB::table('designers')->pluck('name','name')
        );
        $form->text('made_in', __('Made in'));
        $form->text('material', __('Material'));
        $form->number('XS', __('XS'));
        $form->number('S', __('S'));
        $form->number('M', __('M'));
        $form->number('L', __('L'));
        $form->number('LL', __('LL'));
        $form->image('img_url1', __('_img_front_url'))->uniqueName();
        $form->image('img_url2', __('Img url2'))->uniqueName();
        $form->image('img_url3', __('Img url3'))->uniqueName();
        $form->image('img_url4', __('Img url4'))->uniqueName();

        return $form;
    }
}
