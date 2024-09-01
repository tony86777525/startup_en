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

    const ENABLED_SWITCH = [
        'on'  => ['value' => 1, 'text' => '開', 'color' => 'success'],
        'off' => ['value' => 0, 'text' => '關', 'color' => 'default'],
    ];

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Story());

        $grid->model()->orderBy('art_date', 'DESC');

        $grid->column('id', __('編號'));
        $grid->column('title', __('標題'));
        $grid->column('art_date', __('發布日期'));

        $grid->column('enabled', __('啟用'))->switch(self::ENABLED_SWITCH);
        $grid->column('created_at', __('建立時間'));

        $grid->filter(function($filter){
            $filter->disableIdFilter();

            $filter->like('title', __('標題'));
        });

        $grid->actions(function($actions){
            $actions->disableView();
        });

//        $grid->disableActions();
        $grid->disableBatchActions();
//        $grid->disableCreateButton();
        $grid->disableExport();
        $grid->disableColumnSelector();
//        $grid->disablePagination();

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

        $form->image('pic', __('代表圖'));
        $form->text('title', __('標題'));
        $form->text('art_date', __('發佈日期'));
        $form->text('tag', __('標籤'));
        $form->froalaEditor('content', __('內容'));
        $form->switch('enabled', '')->states(self::ENABLED_SWITCH);

        $form->disableEditingCheck();
        $form->disableViewCheck();
        $form->disableCreatingCheck();

        $form->tools(function (Form\Tools $tools) {
            $tools->disableList();
            $tools->disableDelete();
            $tools->disableView();
            $tools->disableDelete();
        });

        $form->footer(function ($footer) {
            $footer->disableReset();
        });

        return $form;
    }
}
