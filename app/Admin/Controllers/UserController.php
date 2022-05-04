<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('email_verified_at', __('Email verified at'));
        $grid->column('password', __('Password'));
        $grid->column('remember_token', __('Remember token'));
        $grid->column('last_name', __('Last name'));
        $grid->column('first_name', __('First name'));
        $grid->column('country', __('Country'));
        $grid->column('ken', __('Ken'));
        $grid->column('shikutyoson', __('Shikutyoson'));
        $grid->column('post_number', __('Post number'));
        $grid->column('phone', __('Phone'));
        $grid->column('mail_status', __('Mail status'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('stripe_id', __('Stripe id'));
        $grid->column('pm_type', __('Pm type'));
        $grid->column('pm_last_four', __('Pm last four'));
        $grid->column('trial_ends_at', __('Trial ends at'));

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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('email_verified_at', __('Email verified at'));
        $show->field('password', __('Password'));
        $show->field('remember_token', __('Remember token'));
        $show->field('last_name', __('Last name'));
        $show->field('first_name', __('First name'));
        $show->field('country', __('Country'));
        $show->field('ken', __('Ken'));
        $show->field('shikutyoson', __('Shikutyoson'));
        $show->field('post_number', __('Post number'));
        $show->field('phone', __('Phone'));
        $show->field('mail_status', __('Mail status'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('stripe_id', __('Stripe id'));
        $show->field('pm_type', __('Pm type'));
        $show->field('pm_last_four', __('Pm last four'));
        $show->field('trial_ends_at', __('Trial ends at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User());

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->datetime('email_verified_at', __('Email verified at'))->default(date('Y-m-d H:i:s'));
        $form->password('password', __('Password'));
        $form->text('remember_token', __('Remember token'));
        $form->text('last_name', __('Last name'));
        $form->text('first_name', __('First name'));
        $form->text('country', __('Country'));
        $form->text('ken', __('Ken'));
        $form->text('shikutyoson', __('Shikutyoson'));
        $form->number('post_number', __('Post number'));
        $form->number('phone', __('Phone'));
        $form->switch('mail_status', __('Mail status'));
        $form->text('stripe_id', __('Stripe id'));
        $form->text('pm_type', __('Pm type'));
        $form->text('pm_last_four', __('Pm last four'));
        $form->datetime('trial_ends_at', __('Trial ends at'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
