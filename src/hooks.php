<?php

use Rudolf\Component\Hooks\Filter;

// textarea
Filter::add('admin_file_path_input', function ($args) {
    $html = sprintf(
        '<div class="input-group">
      <input type="text" value="%1$s" name="%2$s" class="%3$s" id="%4$s" placeholder="%5$s">
      <span class="input-group-append input-group-addon">
        <span class="input-group-text">
          <a data-toggle="modal" href="javascript:;" data-target="#admin_file_path_input" type="button">
            <i class="fa fa-search"></i>
          </a>
        </span>
      </span>
    </div>',
        $args['path'],
        $args['name'],
        $args['class'],
        $args['id'],
        $args['placeholder']
    );

    $html .= '<div class="modal fade" id="admin_file_path_input">
        <div class="modal-dialog modal-lg modal-dialog-centered" style="height:90%;min-width:1000px;">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Responsive Filemanager</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body p-0">
              <div class="embed-responsive embed-responsive-4by3">
                <iframe src="'.PLUGINS.'/responsive-file-manager/filemanager/dialog.php?type=2&field_id='.$args['id'].'&fldr=" style="overflow-x: hidden; overflow-y: scroll; "></iframe>
              </div>
            </div>
          </div>
        </div>
    </div>';

    return $html;
});
