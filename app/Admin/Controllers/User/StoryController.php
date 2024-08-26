<?php

namespace App\Admin\Controllers\User;

use App\Models\Story;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class StoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Story';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Story());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('art_date', __('Art date'));
        $grid->column('tag', __('Tag'));
        $grid->column('content', __('Content'));
        $grid->column('pic', __('Pic'));
        $grid->column('enabled', __('Enabled'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('deleted_at', __('Deleted at'));

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
        $show = new Show(Story::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('art_date', __('Art date'));
        $show->field('tag', __('Tag'));
        $show->field('content', __('Content'));
        $show->field('pic', __('Pic'));
        $show->field('enabled', __('Enabled'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('deleted_at', __('Deleted at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Story());

        $form->text('title', __('Title'));
        $form->date('art_date', __('Art date'))->default(date('Y-m-d'));
        $form->textarea('tag', __('Tag'));
        $form->textarea('content', __('Content'));
        $form->image('pic', __('Pic'));
        $form->switch('enabled', __('Enabled'));

        return $form;
    }
}
