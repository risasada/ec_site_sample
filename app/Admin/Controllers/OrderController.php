<?php

namespace App\Admin\Controllers;

use App\Models\Order;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OrderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Order';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Order());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('user_name', __('User name'));
        $grid->column('last_name', __('Last name'));
        $grid->column('first_name', __('First name'));
        $grid->column('post_number', __('Post number'));
        $grid->column('address', __('Address'));
        $grid->column('phone', __('Phone'));
        $grid->column('item_id', __('Item id'));
        $grid->column('item_name', __('Item name'));
        $grid->column('size', __('Size'));
        $grid->column('designers', __('Designers'));
        $grid->column('categories', __('Categories'));
        $grid->column('price', __('Price'));
        $grid->column('shipping_status', __('Shipping status'));
        $grid->column('arrival_date', __('Arrival date'));
        $grid->column('shipping_company', __('Shipping company'));
        $grid->column('shipping_id', __('Shipping id'));
        $grid->column('message_from_customer', __('Message from customer'));
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
        $show = new Show(Order::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('user_name', __('User name'));
        $show->field('last_name', __('Last name'));
        $show->field('first_name', __('First name'));
        $show->field('post_number', __('Post number'));
        $show->field('address', __('Address'));
        $show->field('phone', __('Phone'));
        $show->field('item_id', __('Item id'));
        $show->field('item_name', __('Item name'));
        $show->field('size', __('Size'));
        $show->field('designers', __('Designers'));
        $show->field('categories', __('Categories'));
        $show->field('price', __('Price'));
        $show->field('shipping_status', __('Shipping status'));
        $show->field('arrival_date', __('Arrival date'));
        $show->field('shipping_company', __('Shipping company'));
        $show->field('shipping_id', __('Shipping id'));
        $show->field('message_from_customer', __('Message from customer'));
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
        $form = new Form(new Order());

        $form->number('user_id', __('User id'));
        $form->text('user_name', __('User name'));
        $form->text('last_name', __('Last name'));
        $form->text('first_name', __('First name'));
        $form->text('post_number', __('Post number'));
        $form->textarea('address', __('Address'));
        $form->number('phone', __('Phone'));
        $form->number('item_id', __('Item id'));
        $form->text('item_name', __('Item name'));
        $form->text('size', __('Size'));
        $form->text('designers', __('Designers'));
        $form->text('categories', __('Categories'));
        $form->number('price', __('Price'));
        $form->text('shipping_status', __('Shipping status'))->default('未発送');
        $form->text('arrival_date', __('Arrival date'))->default('未定');
        $form->text('shipping_company', __('Shipping company'))->default('未定');
        $form->text('shipping_id', __('Shipping id'))->default('未定');
        $form->textarea('message_from_customer', __('Message from customer'))->default('特に無し');

        return $form;
    }
}
