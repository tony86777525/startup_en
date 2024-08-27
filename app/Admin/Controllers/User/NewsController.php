<?php

namespace App\Admin\Controllers\User;

use App\Models\News;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NewsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'News';

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
        $grid = new Grid(new News());

        $grid->model()->orderBy('art_date', 'DESC');

        $grid->column('id', __('編號'));
        $grid->column('title', __('標題'));
        $grid->column('art_date', __('發布日期'));
        $grid->column('enabled', __('啟用'))->switch(self::ENABLED_SWITCH);
        $grid->column('created_at', __('建立時間'));

        $grid->actions(function($actions){
            $actions->disableView();
        });

//        $grid->disableActions();
        $grid->disableBatchActions();
//        $grid->disableCreateButton();
        $grid->disableExport();
        $grid->disableColumnSelector();
        $grid->disablePagination();


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
        $show = new Show(News::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new News());

        $form->image('pic', __('代表圖'));
        $form->text('title', __('標題'));
        $form->text('art_date', __('發佈日期'));
        $form->text('tag', __('標籤'));
        $form->froalaEditor('content', __('內容'));
        $form->switch('enabled', '')->states(self::ENABLED_SWITCH);

//        $form->email('email', __('E-mail'));
//        $form->text('country', __('Country'));
//        $form->text('recipient_name', __('Recipient Name'));
//        $form->text('recipient_company_name', __('Recipient Company Name'));
//        $form->text('recipient_address_nation', __('Recipient Address Nation'));
//        $form->text('recipient_address_country', __('Recipient Address Country'));
//        $form->text('recipient_address_code', __('Recipient Address Code'));
//        $form->text('recipient_address', __('Recipient Address'));
//        $form->text('recipient_tel', __('Recipient Tel'));
//        $form->text('recipient_email', __('Recipient E-mail'));
//        $form->text('google_drive_folder_id', __('Google Drive Folder Id'));

//        $form->saving(function (Form $form) {
//            if (!isset($form->model()->number)) {
//                $form->number = OrderService::getNewNumber();
//            }
//        });

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
