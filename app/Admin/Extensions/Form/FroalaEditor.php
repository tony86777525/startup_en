<?php

namespace App\Admin\Extensions\Form;

use Encore\Admin\Form\Field;

class FroalaEditor extends Field
{
    public static $js = [
        'https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.9.1/js/froala_editor.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.9.1/js/froala_editor.pkgd.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.9.1/js/languages/zh_tw.js',
    ];

    public static $css = [
        'https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.9.1/css/froala_editor.pkgd.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.9.1/css/froala_style.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.9.1/css/froala_editor.min.css',
    ];
    protected $view = 'admin.froala-editor';

    public function render()
    {
        $this->script = "$('textarea').froalaEditor(
        {
            toolbarButtons: ['paragraphFormat','paragraphStyle','quote','fontSize','bold','italic','align','formatOL','formatUL','insertTable','insertLink','insertImage','insertVideo','insertAudio','insertFile','insertHR','fullscreen','html'], // 工具列按鈕
            language: 'zh_tw', // 語言
            imageUploadURL: '/admin/froala-editor/upload', // 圖片上傳的伺服器端 URL
            placeholderText: '開始編輯...', // 占位符文本
            charCounterCount: false, // 顯示字數計數器
        }

        )";

        return parent::render();
    }
}
