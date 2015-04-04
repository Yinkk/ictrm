<?php
class UploadModel extends Eloquent{

	use SoftDeletingTrait;
	protected $dates = ['deleted_at'];
	protected $softDelete = true;

	protected $table = 'uploadfile';

}
?>