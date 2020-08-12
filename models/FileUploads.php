<?php


namespace app\models;


use yii\base\Model;
use yii\web\UploadedFile;

class FileUploads extends Model
{
    public $image;
    public function rules()
    {
        return [
            ['image', 'file', 'extensions'=>'png, jpg']
        ];
    }

    public function fileImageUploads(UploadedFile $file, $currentImage){
        $this->image = $file;
        $this->deleteCurrentImage($currentImage);

        return $this->saveImage();
    }

    public function generateFilename(){
        return strtolower(md5(uniqid($this->image->baseName)).".".$this->image->extension);
    }
    public function pathFile(){
        return "web/uploads/products/";
    }
    public function deleteCurrentImage($currentImage){
        if($this->fileExists($currentImage)){
            unlink($this->pathFile().$currentImage);
        }
    }
    public function fileExists($currentImage){
        return file_exists($this->pathFile().$currentImage);
    }
    public function saveImage(){
        $filename = $this->generateFilename();
        $this->image->saveAs($this->pathFile().$filename);
        return $filename;
    }


//    public function imageFileExists($currentImage){
//        if(!empty($currentImage) and $currentImage != NULL){
//            return $this->pathFile().$currentImage;
//        }
//    }

}